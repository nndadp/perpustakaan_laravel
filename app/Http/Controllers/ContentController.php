<?php

namespace App\Http\Controllers;

use App\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Content::all();

        return view('admin.article.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('img_content')) {
            $destinationPath = 'public/images';
            $file = $request->file('img_content'); // will get all files
            
            $file_name = $file->getClientOriginalName(); //Get file original name
            $upload = $request->img_content->move(public_path('images'), $file_name); // move files to destination folder

            if ($upload) {
                if ($request->article == "" || '' || null) {
                    return redirect()->back()->with('error', 'Masih ada field yang kosong');
                }else{
                $create =  Content::create([
                    'img_content' => $file_name,
                    'name_content' => $request->name_content,
                    'text_content' => $request->article,
                ]);

                if ($create) {
                    return redirect()->route('Article.index')->with('success', 'Data berhasil diinput');
                }else{
                    return redirect()->back()->withInput()->with('error', 'Data gagal diinput');
                }
            }
        }
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Content::find($id);
        
        return view('admin.article.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Content::find($id);
        return view('admin.article.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function update($id ,Request $request, Content $content)
    {
        $content = $content->findOrFail($id);
        if ($request->hasFile('img_content')) {
            $imagePath = $request->file('img_content');
            $imageName = $imagePath->getClientOriginalName();
            $upload = $request->img_content->move(public_path('images'), $imageName);
        }else{
            $imageName = $request->img_content_name;
        }
        // dd($request);

        $cek = $content->update([
            'img_content' => $imageName,
            'name_content' => $request->name_content,
            'text_content' => $request->article,
        ]);

        if ($cek) {
           return redirect()->route('Article.index')->with('success', 'Data berhasil di update');
        }else{
            return redirect()->back()->with('error', 'Data gagal di update');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cek = Content::destroy($id);
        if ($cek) {
            return redirect()->route('Article.index')->with('success', 'Data berhasil di hapus');
         }else{
             return redirect()->back()->with('error', 'Data gagal di hapus');
         }
    }

}
