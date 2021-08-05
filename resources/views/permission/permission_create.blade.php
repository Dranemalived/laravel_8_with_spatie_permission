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
                    <div class="form-group">
                        <table class="table table-bordered table-striped table-condensed">
                            <thead>
                                <tr>
                                    <th>Function Name</th>
                                    <th width="5%">View</th>
                                    <th width="5%">Create</th>
                                    <th width="5%">Edit</th>
                                    <th width="5%">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for($x = 0; $x < count($_view); $x++)
                                    @php
                                        $title = str_replace('_','',strstr($_view[$x]->name,"_"));
                                    @endphp

                                    <tr>
                                        <td>{{ ucwords($title) }}</td>
                                        <td>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" name="permission[]" value="{{ $_view[$x]->name }}">&nbsp;
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" name="permission[]" value="{{ $_create[$x]->name }}">&nbsp;
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" name="permission[]" value="{{ $_edit[$x]->name }}">&nbsp;
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" name="permission[]" value="{{ $_delete[$x]->name }}">&nbsp;
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                @endfor
                            </tbody>
                        </table>
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