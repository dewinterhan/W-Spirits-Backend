@extends('layouts.admin')
@section('content')
            {!! Form::model($product,['method'=>'PATCH', 'action'=>['AdminProductsController@update', $product->id],'files'=>true]) !!}
            <div class="form-group">
                {!! Form::label('name', 'Product Name:') !!}
                {!! Form::text('name', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('price', 'Price:') !!}
                {!! Form::number('price', null, ['class'=>'form-control', 'step'=>'0.01']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('description', 'Description:') !!}
                {!! Form::textarea('description', null, ['id'=>'productDescription', 'class'=>'form-control']) !!}
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
                {!! Form::label('alcohol_percentage', 'Alcohol Percentage:') !!}
                {!! Form::number('alcohol_percentage', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('stock', 'Stock:') !!}
                {!! Form::number('stock', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('image', 'Product Image:') !!}
                {!! Form::file('image', null, ['class'=>'form-control']) !!}
            </div>
           <div class="row justify-content-center">
               <div class="form-group mr-3">
                   {!! Form::submit('Update Product', ['class'=>'btn btn-warning']) !!}
               </div>
               {!! Form::close() !!}

               {!! Form::open(['method'=>'Delete', 'action'=>['AdminProductsController@destroy', $product->id],'files'=>true]) !!}
               <div class="form-group">
                   {!! Form::submit('Delete Product', ['class'=>'btn btn-danger']) !!}
               </div>
           </div>
            {!! Form::close() !!}
@stop
