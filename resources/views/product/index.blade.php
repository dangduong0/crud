@extends('product.layout')

@section('content')
    <br><br><br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel product list</h2>
            </div>
            <div class="pull-right">
                <a href="{{route('create.product')}}" class="btn btn-success">Create new product</a>
            </div>
        </div>
    </div>

    @if($message=Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th width="150px">Product name </th>
            <th width="100px">Product code </th>
            <th width="330px">Details </th>
            <th width="100px">Product logo </th>
            <th width="200px">Action </th>
        </tr>
        @foreach($product as $pro)
        <tr>
            <td>{{ $pro->product_name }} </td>
            <td>{{ $pro->product_code }} </td>
            <td>{{ str_limit($pro->details, ) }} </td>
            <td><img src="{{URL::to($pro->logo)}}" height="40px" alt=""> </td>
            <td>
                <a href="{{URL::to('show/product/'.$pro->id)}}" class="btn btn-info">Show</a>
                <a href="{{URL::to('edit/product/'.$pro->id)}}" class="btn btn-primary">Edit</a>
                <a href="{{URL::to('delete/product/'.$pro->id)}}" onclick="return confirm('Are you sure?')" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach
    </table>
    {!! $product->links() !!}

@endsection
