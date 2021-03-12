@extends('layout.app')
@section('title', 'Product')

@section('content')
<div class="container-fluid">

    @include('partials.page_header')

    <div class="card">
        <div class="card-body">
            @if($is_user->hasPermissionTo('create_product'))
                <a class="btn btn-primary mb-4" href="/product/create">Create Product</a>
            @endif
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Category</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($products) > 0)
                        @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->category->name }}</td>
                            <td>{{ $product->quantity }}</td>
                            <td>{{ $product->price }}</td>
                            <td>
                                @if($is_user->hasPermissionTo('edit_product'))
                                    <a href="/product/{{ $product->id }}/edit"><i class="mdi mdi-pencil"></i></a>
                                @endif
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
                <ul class="pagination">
                    {!! $products->links() !!}
                </ul>
            </nav>
        </div>
    </div>
</div>

@endsection