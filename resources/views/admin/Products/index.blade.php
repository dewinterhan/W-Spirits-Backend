@extends('layouts.admin')
@section('content')
    <h1>All Categories</h1>
    <div class="row d-flex justify-content-end">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-lg btn-warning mr-2 mb-2" data-toggle="modal" data-target="#addUserModal">
            +
        </button>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="addUserModallabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {!! Form::open(['method'=>'POST', 'action'=>'AdminCategoriesController@store','files'=>true]) !!}
                    <div class="form-group">
                        {!! Form::label('name', 'Name:') !!}
                        {!! Form::text('name', null, ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::submit('Create Category', ['class'=>'btn btn-warning']) !!}
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
                    {{--<th scope="col">Created</th>
                    <th scope="col">Updated</th>--}}
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                @if ($categories)
                    @foreach($categories as $category)
                        <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->name}}</td>
                            {{--<td>{{$category->created_at ? $category->created_at->diffForHumans() : 'no date'}}</td>
                            <td>{{$category->updated_at ? $category->updated_at->diffForHumans() : 'no date'}}</td>--}}
                            <td><a href="{{route('categories.edit', $category->id)}}" class="btn btn-warning">Edit</a></td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>

@stop
