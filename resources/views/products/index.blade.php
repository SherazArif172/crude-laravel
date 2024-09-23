@extends('products.layout')

@section('content')
<div class="main">
    <div class="row">
        <div class="pull-left">
            <h2>Laravel 8 CRUD Example</h2>
        </div>
        <div class="btnn" >
            <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
        </div>
    </div>
<table class="table " >
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Details</td>
        <td>Action</td>
    </tr>
    @foreach ($products as $product)
    <tr>
        <td>{{ $product->id }}</td>
        <td>{{ $product->name }}</td>
        <td>{{ $product->details }}</td>
        <td>
            <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach

</table>
{{ $products->links() }}



</div>


@endsection



<style>

.main {
    padding: 15px;
    max-width: 1000px; 
    margin: auto;
    width: 100%;
}

.row {
    display: flex;
    justify-content: space-between;
    align-content: center;
}

.btnn {
    display: flex;
    justify-content: center;
    align-items: center;
}

.btn-success {
    background-color: green;
    color: white;
    padding: 8px;
    text-decoration: none;
}

.table {
    border: 1px solid black;
    width: 100%; /* Make sure the table takes full width */
    border-collapse: collapse; /* Optional: to remove gaps between table cells */
}

.table th, .table td {
    border: 1px solid green;
    padding: 15px;
    text-align: left;
}

.btn-info {
    background-color: skyblue;
    color: white;
    padding: 8px;
    text-decoration: none;
}
.btn-primary {
    background-color: rgb(0, 0, 192);
    color: white;
    padding: 8px;
    text-decoration: none;
}
.btn-danger {
    background-color: red;
    color: white;
    padding: 8px;
    text-decoration: none;
}

</style>