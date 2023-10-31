@extends('products.layout')

@section('content')
    <div class="row m-2">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 10 CRUD Example from scratch - ItSolutionStuff.com</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success m-2">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th width="280px">Action</th>
            <th>ID</th>
            <th>Name</th>
            <th>Details</th>
        </tr>
        @foreach ($products as $product)
            <td>
                <form action="{{ route('products.destroy', $product->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('products.show', $product->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('products.edit', $product->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->detail }}</td>
            </tr>
        @endforeach
    </table>

    {!! $products->links() !!}
@endsection
