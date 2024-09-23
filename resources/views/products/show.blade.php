@extends('products.layout')

@section('content')


<div class="main">
    <div class="header">

        <h1>Product</h1>
        <a class="btn btn-info" href="{{ route('products.index' )}}">back</a>
    
    
    </div>
    <div>
        <h1>{{ $product->name }}</h1>
        <h1>{{ $product->details }}</h1>
    </div>
</div>



@endsection



<style>

    .header {
        background-color: #f0f0f0;
        display: flex;
        justify-content: space-between;
        padding: 20px;
        align-items: center;
    }

.btn-info {
    background-color: skyblue;
    color: white;
    padding: 8px;
    text-decoration: none;
}


.main {
    padding: 15px;
    max-width: 1000px; 
    margin: auto;
    width: 100%;
}
</style>