@extends('layouts.admin')
@section('content')
            {!! Form::model($brand,['method'=>'PATCH', 'action'=>['AdminBrandsController@update', $brand->id],'files'=>true]) !!}
            <div class="form-group">
                {!! Form::label('brand', 'Brand Name:') !!}
                {!! Form::text('brand', null, ['class'=>'form-control']) !!}
            </div>
           <div class="row justify-content-center">
               <div class="form-group mr-3">
                   {!! Form::submit('Update Brand', ['class'=>'btn btn-warning']) !!}
               </div>
               {!! Form::close() !!}

               {!! Form::open(['method'=>'Delete', 'action'=>['AdminBrandsController@destroy', $brand->id],'files'=>true]) !!}
               <div class="form-group">
                   {!! Form::submit('Delete Brand', ['class'=>'btn btn-danger']) !!}
               </div>
           </div>
            {!! Form::close() !!}
@stop
