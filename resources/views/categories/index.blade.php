@extends('layouts.app')

@section('content')
    <div class="row main-row justify-content-center">
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-6">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary btn-block btn-md" data-toggle="modal" data-target="#exampleModalLong">
                        Create Category
                    </button>
                    <!-- Modal -->
                    {!! Form::open(['action' => 'CategoryController@store', 'method' => 'POST', 'data-parsley-validate' => '']) !!}
                    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Create Category</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    {{form::label('name', 'Category Name')}}
                                    {{form::text('name', '', ['class' => 'form-control', 'required' => ''])}}
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                {{form::submit('Create Category', ['class' => 'btn btn-outline-primary btn-md'])}}
                            </div>
                            </div>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
                <div class="col-md-6">
                    <a href="" class="btn btn-primary btn-block btn-md">Update Category</a>
                </div>
            </div>
        </div>
    </div>
@endsection
