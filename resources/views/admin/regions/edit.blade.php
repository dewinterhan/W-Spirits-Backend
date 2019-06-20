@extends('layouts.admin')
@section('content')
            {!! Form::model($region,['method'=>'PATCH', 'action'=>['AdminRegionsController@update', $region->id],'files'=>true]) !!}
            <div class="form-group">
                {!! Form::label('region', 'Region Name:') !!}
                {!! Form::text('region', null, ['class'=>'form-control']) !!}
            </div>
           <div class="row justify-content-center">
               <div class="form-group mr-3">
                   {!! Form::submit('Update Brand', ['class'=>'btn btn-warning']) !!}
               </div>
               {!! Form::close() !!}

               {!! Form::open(['method'=>'Delete', 'action'=>['AdminRegionsController@destroy', $region->id],'files'=>true]) !!}
               <div class="form-group">
                   {!! Form::submit('Delete Brand', ['class'=>'btn btn-danger']) !!}
               </div>
           </div>
            {!! Form::close() !!}
@stop
