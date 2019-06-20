@extends('layouts.admin')
@section('content')
    <h1>All Regions</h1>
    <div class="row d-flex justify-content-end">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-lg btn-warning mr-2 mb-2" data-toggle="modal" data-target="#addRegionModal">
            +
        </button>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="addRegionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Region</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {!! Form::open(['method'=>'POST', 'action'=>'AdminRegionsController@store','files'=>true]) !!}
                    <div class="form-group">
                        {!! Form::label('region', 'Region Name:') !!}
                        {!! Form::text('region', null, ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::submit('Create Region', ['class'=>'btn btn-warning']) !!}
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
                    <th scope="col">Region Name</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                @if ($regions)
                    @foreach($regions as $region)
                        <tr>
                            <td>{{$region->id}}</td>
                            <td>{{$region->region}}</td>
                            <td class="row">
                                <a href="{{route('regions.edit', $region->id)}}" class="btn btn-warning mr-2">Edit</a>
                                {!! Form::open(['method'=>'Delete', 'action'=>['AdminRegionsController@destroy', $region->id],'files'=>true]) !!}
                                    {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>

@stop
