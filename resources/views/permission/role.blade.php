@extends('layout.app')
@section('title', 'Role')

@section('content')
<div class="container-fluid">

    @include('partials.page_header')

    <div class="card">
        <div class="card-body">
            <a class="btn btn-primary mb-4" href="/role/create">Create Role</a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($roles) > 0)
                        @foreach ($roles as $role)
                        <tr>
                            <td>{{ $role->name }}</td>
                            <td><a href="/role/{{ $role->id }}/edit"><i class="mdi mdi-pencil"></i></a></td>
                        </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="1">No records found</td>
                        </tr>
                    @endif
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