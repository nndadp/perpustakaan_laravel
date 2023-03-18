@extends('layouts.DashboardAdmin')

@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

@if ($message = Session::get('error'))
<div class="alert alert-danger">
    <p>{{ $message }}</p>
</div>
@endif
    <a href="{{ route('Article.create') }}" class="btn btn-primary mb-2">Add</a>
    <table id="main-table" class="table table-bordered data-table">
        <thead>
            <tr>
                <th>image</th>
                <th>name article</th>
                <th width="100px" colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $i)
                
            <tr>
                <td><img src="{{ asset('images/'.$i->img_content) }}" class="img-fluid" width="100" height="100" alt=""></td>
                {{-- <td><div>{!!  $i->text_content !!}</div></td> --}}
                <td>{{ $i->name_content }}</td>
                <td>
                    <form action="{{ route('Article.destroy', $i->id) }}" method="POST">   
                    <a href="{{ route('Article.show', $i->id) }}" class="btn btn-primary">Detail</a>
                    <a href="{{ route('Article.edit', $i->id) }}" class="btn btn-warning">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are You Sure??')">hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection