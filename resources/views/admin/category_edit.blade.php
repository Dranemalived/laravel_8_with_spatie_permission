@extends('layout.app')
@section('title','Edit Category')

@section('content')
    <div class="container-fluid">

        @include('partials.page_header')

        <div class="card">
            <div class="card-body">
                <form action="/category/{{ $category->id }}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="">Name</label>
                        <input class="form-control {{ $errors->any() ? ($errors->has('name') ? "is-invalid" : "is-valid" ) : "" }}" type="text" name="name" value="{{ $errors->has('name') ? old('name') : $category->name }}">
                        @if($errors->any())
                            <div class="{{ $errors->has('name') ? "invalid-feedback" : "valid-feedback" }}">
                                {{ $errors->has('name')  ? $errors->first('name') : ""}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">Description</label>
                        <textarea class="form-control {{ $errors->any() ? ($errors->has('description') ? "is-invalid" : "is-valid" ) : "" }}" name="description" id="" cols="30" rows="10">{{ $errors->has('description') ? old('description') : $category->description }}</textarea>
                        @if($errors->any())
                            <div class="{{ $errors->has('description') ? "invalid-feedback" : "valid-feedback" }}">
                                {{ $errors->has('description')  ? $errors->first('description') : ""}}
                            </div>
                        @endif
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