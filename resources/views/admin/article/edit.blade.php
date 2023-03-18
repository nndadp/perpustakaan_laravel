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
    <form action="{{ route('Article.update', $data->id) }}" enctype="multipart/form-data" method="post">
        @csrf

        @method('PUT')
        <input type="hidden" name="article" value="{{ $data->text_content }}">
        <div>
            <label for="name">Article name:</label>
            <input type="name" id="name" value="{{ $data->name_content }}" name="name_content" class="form-control mb-2" required>
        </div>
        <div>
            <label for="file">Choose image:</label>
            <input type="hidden" name="img_content_name" value="{{ $data->img_content }}">
            <img src="{{ asset('images/'.$data->img_content) }}" alt="" height="100" width="100" class="img-fluid">
            <input type="file" id="file" name="img_content" value="{{ $data->img_content }}" class="form-control mb-2" accept="image/*">
        </div>
        <div>
            <label for="test">Write article:</label>
            <div id="toolbar">
                <button class="ql-bold">Bold</button>
                <button class="ql-underline">Bold</button>
                <button class="ql-italic">Italic</button>
                <button class="ql-image">image</button>
            </div>
            <div id="test">{!!  $data->text_content !!}</div>
        </div>
        <button id="go" type="submit" class="btn btn-success m-2">Update data</button>
        <a href="{{ route('Article.index') }}" class="btn btn-danger">Back</a>
    </form>
@endsection
@push('script')
<script src="{{ asset('page/js/create_content.js') }}"></script>
@endpush