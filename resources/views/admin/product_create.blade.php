@extends('layout.app')
@section('title','Create Product')

@section('content')
    <div class="container-fluid">

        @include('partials.page_header')
        
        <div class="card">
            <div class="card-body">
                <form action="/product" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Category</label>
                        <select name="category_id" id="" class="custom-select {{ $errors->any() ? ($errors->has('category_id') ? "is-invalid" : "is-valid") : "" }}">
                            <option value="" selected disabled>select category</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ (old('category_id') == $category->id ? "selected" : "") }} >{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @if($errors->any())
                            <div class="{{ $errors->has('category_id') ? "invalid-feedback" : "valid-feedback" }}">
                                {{ $errors->has('category_id')  ? $errors->first('category_id') : ""}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">Name</label>
                        <input id="" class="form-control {{ $errors->any() ? ($errors->has('name') ? "is-invalid" : "is-valid") : "" }}" type="text" name="name" value="{{ old('name') }}">
                        @if($errors->any())
                            <div class="{{ $errors->has('name') ? "invalid-feedback" : "valid-feedback" }}">
                                {{ $errors->has('name')  ? $errors->first('name') : ""}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">Description</label>
                        <textarea class="form-control {{ $errors->any() ? ($errors->has('description') ? "is-invalid" : "is-valid") : "" }}" name="description" id="" cols="30" rows="10">{{ old('description') }}</textarea>
                        @if($errors->any())
                            <div class="{{ $errors->has('description') ? "invalid-feedback" : "valid-feedback" }}">
                                {{ $errors->has('description')  ? $errors->first('description') : ""}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">Quantity</label>
                        <input type="text" class="form-control {{ $errors->any() ? ($errors->has('quantity') ? "is-invalid" : "is-valid") : "" }}" name="quantity" value="{{ old('quantity') }}">
                        @if($errors->any())
                            <div class="{{ $errors->has('quantity') ? "invalid-feedback" : "valid-feedback" }}">
                                {{ $errors->has('quantity')  ? $errors->first('quantity') : ""}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">Price</label>
                        <input type="text" class="form-control {{ $errors->any() ? ($errors->has('price') ? "is-invalid" : "is-valid") : "" }}" name="price" value="{{ old('price') }}">
                        @if($errors->any())
                            <div class="{{ $errors->has('price') ? "invalid-feedback" : "valid-feedback" }}">
                                {{ $errors->has('price')  ? $errors->first('price') : ""}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group mt-2">
                        <button type="submit" class="btn btn-success">Save</button>
                        <a href="/product" class="btn btn-light">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection