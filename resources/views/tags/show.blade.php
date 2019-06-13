@extends('layouts.app')

@section('content')
    <div class="row justify-content-center main-row">
        <div class="col-md-10 jumbotron">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <h3>{{$tags->name}}</h3>
                    <p><strong>{{$tags->post()->count()}} Videos/Articles</strong></p>
                </div>
                <div class="col-md-4">
                    <button type="button" class="btn btn-outline-primary btn-block btn-sm" data-toggle="modal" data-target="#exampleModalEdit">
                        Update {{$tags->name}}
                    </button>
                    {!! Form::open(['action' => ['TagController@update', $tags->id], 'method' => 'PUT', 'data-parsley-validate' => '' ]) !!}
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            {{form::label('name', 'Category Name')}}
                                            {{form::text('name', $tags->name, ['class' => 'form-control', 'required' => ''])}}
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        {{form::submit('Update', ['class' => 'btn btn-outline-primary btn-md'])}}
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
                <div class="col-md-4">
                    <button type="button" class="btn btn-outline-primary btn-block btn-sm" data-toggle="modal" data-target="#exampleModalDelete">
                        Delete {{$tags->name}}
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p><h4>Are you sure you want to delete</h4></p>
                                    <p><h2>{{$tags->name}}</h2></p>
                                    <p>The category to be deleted has about <strong>{{$tags->post()->count()}} Videos/Articles</strong></p>
                                </div>
                                <div class="modal-footer">
                                    {!! Form::open(['action' => ['TagController@destroy', $tags->id], 'method' => 'DELETE']) !!}
                                        {{form::submit('Delete Category', ['class' => 'btn btn-outline-danger btn-md'])}}
                                    {!! Form::close() !!}
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
