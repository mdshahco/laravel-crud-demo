@extends('products.layout')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb d-flex justify-content-between">
        <div class="pull-left">
            <h2>Add New Product</h2>
        </div>
        <div class="pull-right text-right">
            <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
        </div>
    </div>

    @if ($errors->any())
    <div class="alert alert-denger">
        <strong>Whoops!</strong> There are some problem with your input. <br> <br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>

            @endforeach
        </ul>
    </div>

    @endif

    <form action="{{ route('products.store') }}" method="POST">
        @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="from-group">
                <strong>Name:</strong>
                <input type="text" name="name" id="" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="from-group">
                <strong>Detail:</strong> <br>
                <textarea class="form-control" style="height: 150px" name="detail" placeholder="Detail" id="" cols="30" rows="10"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center"><br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    </form>
</div>
@endsection
