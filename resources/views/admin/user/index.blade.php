@extends('layout.app')
@section('title', 'Users')

@section('content')
<div class="container-fluid">

    @include('partials.page_header')

    <div class="card">
        <div class="card-body">
            <a class="btn btn-primary mb-4" href="/product/create">Create User</a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Role</th>
                        <th>Email</th>
                        <th>Created At</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($users) > 0)
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td></td>
                            <td>{{ $user->email}}</td>
                            <td>{{ $user->created_at }}</td>
                            <td>
                                <a href="/user/{{ $user->id }}/changepassword" class="mr-4" title="Change Password"><i class="mdi mdi-lock"></i></a>
                                <a href="/user/{{ $user->id }}/edit" class="mr-4" title="Edit User"><i class="mdi mdi-pencil"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="5">No records found</td>
                        </tr>
                    @endif
                </tbody>
            </table>
            <nav aria-label="Page navigation example">
                {{-- <ul class="pagination">
                    {!! $products->links() !!}
                </ul> --}}
            </nav>
        </div>
    </div>
</div>

@endsection