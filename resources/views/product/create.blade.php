@extends('product.layout')

@section('content')
    <br><br><br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add new product</h2>
            </div>
            <div class="pull-right">
                <a href="{{route('product.index')}}" class="btn btn-success">Back</a>
            </div>
        </div>
    </div>

    <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Product name:</strong>
                <input type="text" class="form-control" name="product_name" placeholder="Product name">
            </div>
        </div>

        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Product code:</strong>
                <input type="text" class="form-control" name="product_code" placeholder="Product code">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Details:</strong>
                    <textarea name="details" style="height: 150px; resize: none" class="form-control" placeholder="Details"></textarea>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Product image:</strong>
                <input type="file" name="logo">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>
    </div>
    </form>


@endsection
