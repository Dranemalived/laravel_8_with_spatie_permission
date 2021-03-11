@extends('layout.app')
@section('title','Map Permission')

@section('content')
    <div class="container-fluid">

        @include('partials.page_header')

        <div class="card">
            <div class="card-body">
                <form action="/permission/create" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Name</label>
                        <select name="role_id" id="" class="custom-select">
                            <option value="" selected disabled>Select Role</option>
                            @foreach($roles as $role)
                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Permissions</label>
                    </div>
                    @foreach($permissions as $permission)
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="permission[]" value="{{ $permission->name }}"> {{ str_replace('_', ' ',$permission->name) }} <i class="input-helper"></i>
                            </label>
                        </div>
                    @endforeach
                    <div class="form-group mt-2">
                        <button type="submit" class="btn btn-success">Save</button>
                        <a href="/permission" class="btn btn-light">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection