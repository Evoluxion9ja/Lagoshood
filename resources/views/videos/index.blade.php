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
                                            {!! Form::label('categories', 'Category') !!}
                                            <div class="input-group mb-3">
                                                <select class="custom-select select-multi" id="categories" name="categories[]" multiple="multiple" style="width: 100%;">
                                                    <p>Choose Category(s)</p>
                                                    @foreach ($categories as $category)
                                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('tags', 'Movie Tags') !!}
                                            <div class="input-group mb-3">
                                                <select class="custom-select select-multi" required="required" id="tags" name="tags[]" multiple="multiple" style="width: 100%;">
                                                    <p>Choose Category</p>
                                                    @foreach ($tags as $tag)
                                                    <option value="{{$tag->id}}">{{$tag->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('content', 'Content') !!}
                                            {!! Form::textarea('content', '', ['class' => 'form-control', 'required' => '']) !!}
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                              <span class="input-group-text" id="image" name="image">Upload</span>
                                            </div>
                                            <div class="custom-file">
                                              <input type="file" class="custom-file-input" id="image" name="image" aria-describedby="inputGroupFileAddon01">
                                              <label class="custom-file-label" for="image">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        {!! Form::submit('Publish Post', ['class' => 'btn btn-outline-primary btn-md']) !!}
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
