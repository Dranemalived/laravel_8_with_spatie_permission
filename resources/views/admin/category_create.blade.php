@extends('layout.app')
@section('title','Create Category')

@section('content')
    <div class="container-fluid">

        @include('partials.page_header')

        <div class="card">
            <div class="card-body">
                <form action="/category" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Name</label>
                        <input class="form-control" type="text" name="name" value="{{ old('name') }}">
        
                    </div>
                    <div class="form-group">
                        <label for="">Description</label>
                        <textarea class="form-control" name="description" id="article-ckeditor" cols="30" rows="10">{{ old('description') }}</textarea>
                    </div>
        
                    <div class="form-group mt-2">
                        <button type="submit" class="btn btn-success">Save</button>
                        <a href="/category" class="btn btn-light">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection