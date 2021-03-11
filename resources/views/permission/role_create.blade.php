@extends('layout.app')
@section('title','Create Role')

@section('content')
    <div class="container-fluid">

        @include('partials.page_header')

        <div class="card">
            <div class="card-body">
                <form action="/role/create" method="post">
                    @csrf
                    @method('post')
                    <div class="form-group">
                        <label for="">Name</label>
                        <input class="form-control {{ $errors->any() ? ($errors->has('name') ? "is-invalid" : "is-valid") : "" }}" type="text" name="name" value="{{ old('name') }}">
                        @if($errors->any())
                        <div class="{{ $errors->has('name') ? "invalid-feedback" : "valid-feedback" }}">
                            {{ $errors->has('name')  ? $errors->first('name') : ""}}
                        </div>
                    @endif
                    </div>
                    <div class="form-group mt-2">
                        <button type="submit" class="btn btn-success">Save</button>
                        <a href="/role" class="btn btn-light">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection