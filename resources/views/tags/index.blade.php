@extends('layouts.app')

@section('content')
    <div class="row main-row justify-content-center">
        <div class="col-md-9 jumbotron">
            <div class="row">
                <div class="col-md-6">
                    <h1>Manage Tags Here</h1>
                </div>
                <div class="col-md-6">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary btn-block btn-md" data-toggle="modal" data-target="#exampleModalLong">
                        Create Movie Tags
                    </button>
                    <!-- Modal -->
                    {!! Form::open(['action' => 'TagController@store', 'method' => 'POST', 'data-parsley-validate' => '']) !!}
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
                                    {{form::label('name', 'Tag Name')}}
                                    {{form::text('name', '', ['class' => 'form-control', 'required' => ''])}}
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                {{form::submit('Create Tag', ['class' => 'btn btn-outline-primary btn-md'])}}
                            </div>
                            </div>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
            <hr>
            <div class="row">
                @foreach ($tags as $tag)
                    <div class="col-md-3">
                        <div class="card" style="width: 16rem; margin-bottom: 5px;">
                            <div class="card-body">
                                <h5 class="card-title">{{$tag->name}}</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <small><strong><p>{{$tag->post()->count()}} Videos</p></strong></small>
                                <a href="{{route('tag.show', $tag->id)}}" class="btn btn-outline-primary btn-sm">Dashboard</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <p>{{$tags->links()}}</p>
        </div>
    </div>
@endsection
