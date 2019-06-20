@extends('layouts.admin')
@section('content')
            {!! Form::model($category,['method'=>'PATCH', 'action'=>['AdminCategoriesController@update', $category->id],'files'=>true]) !!}
            <div class="form-group">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', null, ['class'=>'form-control']) !!}
            </div>
           <div class="row justify-content-center">
               <div class="form-group mr-3">
                   {!! Form::submit('Update Category', ['class'=>'btn btn-warning']) !!}
               </div>
               {!! Form::close() !!}

               {!! Form::open(['method'=>'Delete', 'action'=>['AdminCategoriesController@destroy', $category->id],'files'=>true]) !!}
               <div class="form-group">
                   {!! Form::submit('Delete Category', ['class'=>'btn btn-danger']) !!}
               </div>
           </div>
            {!! Form::close() !!}
@stop
