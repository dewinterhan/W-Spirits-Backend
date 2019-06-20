@extends('layouts.admin')
@section('content')
    <h1>All Products</h1>
    <div class="row d-flex justify-content-end">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-lg btn-warning mr-2 mb-2" data-toggle="modal" data-target="#addProductsTable">
            +
        </button>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="addProductsTable" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {!! Form::open(['method'=>'POST', 'action'=>'AdminProductsController@store','files'=>true]) !!}
                    <div class="form-group">
                        {!! Form::label('name', 'Product Name:') !!}
                        {!! Form::text('name', null, ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('price', 'Price:') !!}
                        {!! Form::number('price', null, ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('description', 'Description:') !!}
                        {!! Form::text('description', null, ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('volume_id', 'Volume (in centiliter):') !!}
                        {!! Form::select('volume_id', [''=>'Choose an option'] + $volumes,null, ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('category_id', 'Category:') !!}
                        {!! Form::select('category_id', [''=>'Choose an option'] + $categories,null, ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('brand_id', 'Brand Name:') !!}
                        {!! Form::select('brand_id', [''=>'Choose an option'] + $brands,null, ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('country_id', 'Country of origin:') !!}
                        {!! Form::select('country_id', [''=>'Choose an option'] + $countries,null, ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('region_id', 'Region:') !!}
                        {!! Form::select('region_id', [''=>'Choose an option'] + $regions,null, ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('age', 'Age:') !!}
                        {!! Form::number('age', null, ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('characteristics', 'Characteristics:') !!}
                        {!! Form::text('characteristics', null, ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('stock', 'Stock:') !!}
                        {!! Form::number('stock', null, ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('alcohol_percentage', 'Alcohol Percentage:') !!}
                        {!! Form::number('alcohol_percentage', null, ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('photo', 'Photo:') !!}
                        {!! Form::file('photo', null, ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::submit('Create Product', ['class'=>'btn btn-warning']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Description</th>
                    <th scope="col">Volume</th>
                    <th scope="col">Category</th>
                    <th scope="col">Brand</th>
                    <th scope="col">Country</th>
                    <th scope="col">Region</th>
                    <th scope="col">Age</th>
                    <th scope="col">Characteristics</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                @if ($products)
                    @foreach($products as $product)
                        <tr>
                            <td>{{$product->id}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->description}}</td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>

@stop
