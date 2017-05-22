@extends('task.main')

@section('body')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Update Image
                    </h3>
                </div>
                <div class="panel-body">
                    <div class="col-md-2">
                        <h4><b>Current Photo</b></h4>
                        <img alt="Bootstrap Image Preview" src="{{ url($image->file) }}" class="img-thumbnail" />
                    </div>
                    <div class="col-lg-10">
                        {!! Form::model($image,['url' => '/images/'.$image->id, 'method' => 'PUT', 'files'=>true]) !!}
                            <div class="form-group">
                                <label for="InputFile">
                                    Chose Photo
                                </label>
                                <input type="file" id=InputFile" name="userfile" />
                            </div>
                            <div class="form-group">
                                <label for="caption">
                                    Caption
                                </label>
                                <input type="text" class="form-control" id="caption" name="caption" placeholder="Your Caption" value="{{$image->caption}}" />
                            </div>
                            <div class="form-group">
                                <label for="description">
                                    Password
                                </label>
                                <textarea class="form-control" rows="3" id="description" name="description"  placeholder="Your Description">{{$image->description}}</textarea>
                            </div>
                            <button type="submit" class="btn btn-success">
                                Update
                            </button>
                        {!! Form::close() !!}
                    </div>
                </div>
                <div class="panel-footer">
                    Aditya Zulkarnain
                </div>
            </div>
        </div>
    </div>
@stop