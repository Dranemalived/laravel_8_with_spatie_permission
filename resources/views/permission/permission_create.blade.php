@extends('layout.app')
@section('title','Map Permission')

@section('content')
    <div class="container-fluid">

        @include('partials.page_header')

        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label for="">Name</label>
                    <form action="/permission/create/search" method="post">
                        @csrf
                        <select name="role_id" id="" class="custom-select" onchange="javascript:this.form.submit()">
                            <option value="" selected disabled>Select Role</option>
                            @foreach($roles as $role)
                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                            @endforeach
                        </select>
                    </form>
                </div>
                <form action="/permission/create" method="post">
                    @csrf
                    
                    <div class="form-group">
                        <label for="">Permissions</label>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h4 class="mb-4">View</h4>
                            @foreach($_view as $v)            
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="permission[]" value="{{ $v->name }}"> {{ str_replace('_', ' ',$v->name) }} <i class="input-helper"></i>
                                    </label>
                                </div>
                            @endforeach
                        </div>
                        <div class="col-md-3">
                            <h4 class="mb-4">Create</h4>
                            @foreach($_create as $c)        
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="permission[]" value="{{ $c->name }}"> {{ str_replace('_', ' ',$c->name) }} <i class="input-helper"></i>
                                    </label>
                                </div>
                            @endforeach
                        </div>
                        <div class="col-md-3">
                            <h4 class="mb-4">Edit</h4>
                            @foreach($_edit as $e)    
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="permission[]" value="{{ $e->name }}"> {{ str_replace('_', ' ',$e->name) }} <i class="input-helper"></i>
                                    </label>
                                </div>
                            @endforeach
                        </div>
                        <div class="col-md-3">
                            <h4 class="mb-4">Delete</h4>
                            @foreach($_delete as $d)
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="permission[]" value="{{ $d->name }}"> {{ str_replace('_', ' ',$d->name) }} <i class="input-helper"></i>
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="form-group mt-5">
                        <button type="submit" class="btn btn-success">Save</button>
                        <a href="/permission" class="btn btn-light">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection