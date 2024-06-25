@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Product
                    <a href="{{ route('product.index') }}" class="btn btn-sm btn-primary" style="float: right">Kembali</a>
                </div>
                <div class="card-body">
                    <div class="mb-2">
                        <label for="">Name Product:</label>
                        <h3>{{$product->name_product}}</h3>
                    </div>
                    <div class="mb-2">
                        <label for="">Stock:</label>
                        <h3>{{$product->stock}}</h3>
                    </div>
                    <div class="mb-2">
                        <label for="">Price:</label>
                        <h3>{{$product->price}}</h3>
                    </div>
                    <div class="mb-2">
                        <label for="">Name Brand:</label>
                        <h3>{{$product->description}}</h3>
                    </div>
                    <div class="mb-2">
                        <label for="">Name Brand:</label>
                        <h3>{{$product->brand->name_brand}}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
