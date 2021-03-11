@extends('layout.app')
@section('title', 'Permission')

@section('content')
<div class="container-fluid">

    @include('partials.page_header')

    <div class="card">
        <div class="card-body">
            <a class="btn btn-primary mb-4" href="/permission/create">Map Permission</a>

            <div class="form-group">
                <select name="" id="" class="custom-select">
                    <option value="" selected disabled>Select Role</option>
                    @foreach($roles as $role)
                        <option value="">{{ $role }}</option>
                    @endforeach
                </select>
            </div>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Title</th>
                        {{-- <th>Description</th>
                        <th></th> --}}
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
            {{-- <nav aria-label="Page navigation example">
                <ul class="pagination">
                    {!! $categories->links() !!}
                </ul>
            </nav> --}}
        </div>
    </div>
</div>
@endsection