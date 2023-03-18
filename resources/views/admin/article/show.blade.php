@extends('layouts.DashboardAdmin')

@section('content')
    <div class="bg-white shadow">
        <a href="{{ route('Article.index') }}" class="m-2 btn btn-danger">Back</a>
        <h1 class="text-center">{{ $data->name_content }}</h1>
        <div class="col-8 p-2 mx-auto">{!! $data->text_content !!}</div>
    </div>
@endsection