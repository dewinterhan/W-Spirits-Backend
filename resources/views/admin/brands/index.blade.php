@extends('layouts.admin')
@section('content')
    <h1>All Brands</h1>
    <div class="row d-flex justify-content-end">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-lg btn-warning mr-2 mb-2" data-toggle="modal" data-target="#addBrandModal">
            +
        </button>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="addBrandModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Brands</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {!! Form::open(['method'=>'POST', 'action'=>'AdminBrandsController@store','files'=>true]) !!}
                    <div class="form-group">
                        {!! Form::label('brand', 'Brand Name:') !!}
                        {!! Form::text('brand', null, ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::submit('Create Brand', ['class'=>'btn btn-warning']) !!}
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
                    <th scope="col">Brand Name</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                @if ($brands)
                    @foreach($brands as $brand)
                        <tr>
                            <td>{{$brand->id}}</td>
                            <td>{{$brand->brand}}</td>
                            <td class="row">
                                <a href="{{route('brands.edit', $brand->id)}}" class="btn btn-warning mr-2">Edit</a>
                                {!! Form::open(['method'=>'Delete', 'action'=>['AdminBrandsController@destroy', $brand->id],'files'=>true]) !!}
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
