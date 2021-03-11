@extends('layout.app')
@section('title','Edit User')

@section('content')
    <div class="container-fluid">

        @include('partials.page_header')
        
        <div class="card">
            <div class="card-body">
                <form action="/user/{{ $user->id }}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="">Name</label>
                        <input class="form-control {{ $errors->any() ? ($errors->has('name') ? "is-invalid" : "is-valid") : "" }}" type="text" name="name" value="{{ $errors->any() ? old('name') : $user->name }}">
                        @if($errors->any())
                            <div class="{{ $errors->has('name') ? "invalid-feedback" : "valid-feedback" }}">
                                {{ $errors->has('name')  ? $errors->first('name') : ""}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input class="form-control {{ $errors->any() ? ($errors->has('email') ? "is-invalid" : "is-valid") : "" }}" type="email" name="email" value="{{ $errors->any() ? old('email') : $user->email }}">
                        @if($errors->any())
                            <div class="{{ $errors->has('email') ? "invalid-feedback" : "valid-feedback" }}">
                                {{ $errors->has('email')  ? $errors->first('email') : ""}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">Role</label>
                        <select name="role_id[]" id="" class="custom-select select-2" multiple="multiple">
                            <option value="" disabled>select role</option>
                            @foreach($roles as $role)
                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mt-2">
                        <button type="submit" class="btn btn-success">Save</button>
                        <a href="/user" class="btn btn-light">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection