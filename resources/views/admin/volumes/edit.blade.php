@extends('layouts.admin')
@section('content')
            {!! Form::model($volume,['method'=>'PATCH', 'action'=>['AdminVolumesController@update', $volume->id],'files'=>true]) !!}
            <div class="form-group">
                {!! Form::label('volume', 'Volume:') !!}
                {!! Form::text('volume', null, ['class'=>'form-control']) !!}
            </div>
           <div class="row justify-content-center">
               <div class="form-group mr-3">
                   {!! Form::submit('Update Volume', ['class'=>'btn btn-warning']) !!}
               </div>
               {!! Form::close() !!}

               {!! Form::open(['method'=>'Delete', 'action'=>['AdminVolumesController@destroy', $volume->id],'files'=>true]) !!}
               <div class="form-group">
                   {!! Form::submit('Delete Volume', ['class'=>'btn btn-danger']) !!}
               </div>
           </div>
            {!! Form::close() !!}
@stop
