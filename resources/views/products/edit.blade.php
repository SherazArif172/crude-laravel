@extends('products.layout')

@section('content')

{{-- <h2>create product...</h2> --}}

<div class="main">
    <div class="add">
        <h1>Add new Product</h1>
        <a class="buttonn" href="/products" >back</a>
    </div>
    
    
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <!-- Name input field -->
        <input type="text" name="name" placeholder="Product Name" value={{ $product->name }} ><br>
        @error('title')
            <p>{{ $message }}</p>
        @enderror

        {{-- value="{{ old('title') }} --}}
        
        <!-- Detail textarea field -->
        <textarea name="details" placeholder="Product Details" id="" cols="30" rows="10" value={{ $product->details }}></textarea><br>
        {{-- {{ old('detail') }} --}}
        @error('detail')
            <p>{{ $message }}</p>
        @enderror

        <button type="submit">Submit</button>
    </form>
</div>



@endsection


<style>

    .main{
        max-width: 700px;
        margin: auto;
        border: 1px solid black;
        padding: 30px;
    }


    .add {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

.buttonn {
    background-color: red;
   color: white;
   padding: 5px 10px;
    font-size: 20px;
border: 2px solid black;    

}

.main input {
    width: 100%;
    padding: 20px 10px;
    font-size: 20px;

}
.main textarea {
    width: 100%;
    padding: 20px 10px;
    font-size: 20px;
    margin-top: 20px;

}

 button {
    padding: 10px 15px;
    font-size: 20px;
    color: white;
    background-color: red;
    margin-top: 20px;
    
}

p{
    color: red;
    font-size: 20px; }

</style>