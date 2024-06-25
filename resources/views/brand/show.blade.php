@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Brand
                    <a href="{{ route('brand.index') }}" class="btn btn-sm btn-primary" style="float: right">Kembali</a>
                </div>
                <div class="card-body">
                    <div class="mb-2">
                        <label for="">Name Brand:</label>
                        <h3>{{$brand->name_brand}}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
