@extends('layout.app')
@section('title','Edit Product')

@section('content')
    <div class="container-fluid">

        @include('partials.page_header')
        
        <div class="card">
            <div class="card-body">
                <form action="/product/{{ $product->id }}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="">Category</label>
                        <select name="category_id" id="" class="custom-select">
                            <option value="" selected disabled>select category</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ $errors->any() ? old('category_id') : ($product->category_id == $category->id ? "selected" : "") }}>{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Name</label>
                        <input class="form-control {{ $errors->any() ? ($errors->has('name') ? "is-invalid" : "is-valid") : "" }}" type="text" name="name" value="{{ $errors->any() ? old('name') : $product->name }}">
                        @if($errors->any())
                        <div class="{{ $errors->has('name') ? "invalid-feedback" : "valid-feedback" }}">
                            {{ $errors->has('name')  ? $errors->first('name') : ""}}
                        </div>
                    @endif
                    </div>
                    <div class="form-group">
                        <label for="">Description</label>
                        <textarea class="form-control {{ $errors->any() ? ($errors->has('description') ? "is-invalid" : "is-valid") : "" }}" name="description" id="article-ckeditor" cols="30" rows="10">{{ $errors->any() ? old('description') : $product->description }}</textarea>
                        @if($errors->any())
                            <div class="{{ $errors->has('description') ? "invalid-feedback" : "valid-feedback" }}">
                                {{ $errors->has('description')  ? $errors->first('description') : ""}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">Quantity</label>
                        <input type="text" class="form-control {{ $errors->any() ? ($errors->has('quantity') ? "is-invalid" : "is-valid") : "" }}" name="quantity" value="{{ $errors->any() ? old('quantity') : $product->quantity }}">
                        @if($errors->any())
                            <div class="{{ $errors->has('quantity') ? "invalid-feedback" : "valid-feedback" }}">
                                {{ $errors->has('quantity')  ? $errors->first('quantity') : ""}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">Price</label>
                        <input type="text" class="form-control {{ $errors->any() ? ($errors->has('price') ? "is-invalid" : "is-valid") : "" }}" name="price" value="{{ $errors->any() ? old('price') : $product->price }}">
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
                <form action="{{ url('/product', ['id' => $product->id]) }}" method="post">
                    @method('delete')
                    @csrf
                    <div class="form-group" style="border:1px solid red;">
                        <input type="submit" class="btn btn-danger" value="Delete">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection