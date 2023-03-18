@extends('layouts.user')
@section('content')
    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('berita.index') }}">Kembali</a>
    </div>
    <div class="kontentitlenew2">
        <div class="mbk2 text-black">
            <b>Berita Terkini</b>
        </div>
    </div>
    <div class="bg-white w-100 vh-100 d-flex text-xl-start">
        <div class="container">
            <div class="row">
                <div class="col2">
                    <table border="0" class="marginni">
                        <tr>
                            <td>
                                <div class="gambar">
                                    <img src="{{ asset('images/' . $berita->img_content) }}"idth="220" height="450"w>
                                    </div>
                            </td>
                        </tr>
                    </table>
                </div>

                <div class="col">
                    <div class="title3">
                        <div class="kontentitlebrit">
                            <div class="mbkbrit text-black">
                            <b>{{ $berita->name_content }}</b>
                            </div>
                            <p class="text-black">{!! $berita->text_content !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
