@extends('layout.app')
@section('title', 'Category')

@section('content')
<div class="container-fluid">

    @include('partials.page_header')

    <div class="card">
        <div class="card-body">
            @if($is_user->hasPermissionTo('create_category'))
                <a class="btn btn-primary mb-4" href="/category/create">Create Category</a>
            @endif
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($categories) > 0)
                        @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->description }}</td>
                            <td>
                                @if($is_user->hasPermissionTo('edit_category'))
                                    <a href="/category/{{ $category->id }}/edit"><i class="mdi mdi-pencil"></i></a>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="2">No records found</td>
                        </tr>
                    @endif
                </tbody>
            </table>
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    {!! $categories->links() !!}
                </ul>
            </nav>
            {{-- @for($categories['links'] as $link)
            {{ $link }}
            @endfor --}}
        </div>
    </div>
</div>
@endsection