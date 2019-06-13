@extends('layouts.app')

@section('content')
    <div class="row main-row justify-content-center">
        <div class="col-md-10 jumbotron">
            <div class="row">
                <div class="col-md-8">
                    <h2>All Movies/Articles</h2>
                </div>
                <div class="col-md-4">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary btn-block btn-md" data-toggle="modal" data-target="#exampleModalCreate">
                        Create A Post
                    </button>
                    <!-- Modal -->
                    {!! Form::open(['action' => 'PostController@store', 'method' => 'POST', 'data-parsley-validate' => '']) !!}
                        @section('stylesheets')
                            {{Html::style('css/select2.min.css')}}
                        @endsection
                        <div class="modal fade" id="exampleModalCreate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                            {!! Form::label('title', 'Post Title') !!}
                                            {!! Form::text('title', '', ['class' => 'form-control', 'required' => '']) !!}
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('slug', 'Post Slug') !!}
                                            {!! Form::text('slug', '', ['class' => 'form-control', 'required' => '']) !!}
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('category_id', $text, [$options]) !!}
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text" for="category_id">Category</label>
                                                </div>
                                                <select class="custom-select select-multi" id="category_id" name="category_id[]" multiple="multiple" style="width: 87%;">
                                                    <p>Choose Category</p>
                                                    @foreach ($categories as $category)
                                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @section('javascripts')
                            {{Html::script('js/select2.min.js')}}
                            <script type="text/javascript">
                                $(document).ready(function(){
                                    $('.select-multi').select2();
                                });
                            </script>
                        @endsection
                    {!! Form::close() !!}
                </div>
                <div class="col-md-12">
                    <hr>
                </div>
            </div>
        </div>
    </div>
@endsection
