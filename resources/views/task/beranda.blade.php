<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Task 3 | Image Galery</title>
    <link type="text/css" rel="stylesheet" href="{!! asset('/css/style.css') !!}" />
    <link type="text/css" rel="stylesheet" href="{!! asset('/css/bootstrap.min.css')!!}" />
    <script type="text/javascript" src="{!! asset('/js/jquery-3.2.1.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('/js/bootstrap.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('/js/masonry.pkgd.js') !!}"></script>
    <style>
        .thumbnail {
            width: 230px;
            float: left;
            /* vertical gutter */
            margin-bottom: 20px;
        }
    </style>

</head>

<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h1>
                    TASK 3 <small>Image Gallery</small>
                </h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <button type="button" class="btn btn-success">Success</button>
            <hr />
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-success alert-dismissable">

                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                    ×
                </button>
                <h4>
                    Alert!
                </h4> <strong>Warning!</strong> Best check yo self, you're not looking too good. <a href="#" class="alert-link">alert link</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Image List
                    </h3>
                </div>
                <div class="panel-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row-row">


                                        <div class="thumbnail">
                                            <img alt="Bootstrap Thumbnail First" src="{!! asset('/uploads/1.jpg') !!}" class="hoverZoomLink" />
                                            <div class="caption">
                                                <h3>
                                                    Thumbnail label
                                                </h3>
                                                <p>
                                                    Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                                </p>
                                                <p>
                                                    <a class="btn btn-primary" href="#">Action</a>
                                                    <a class="btn btn-primary" href="#">Action</a>
                                                </p>
                                            </div>
                                        </div>
                                    <div class="thumbnail">
                                        <img alt="Bootstrap Thumbnail First" src="{!! asset('/uploads/2.jpg') !!}" class="hoverZoomLink" />
                                        <div class="caption">
                                            <h3>
                                                Thumbnail label
                                            </h3>
                                            <p>
                                                Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                            </p>
                                            <p>
                                                <a class="btn btn-primary" href="#">Action</a>
                                                <a class="btn btn-primary" href="#">Action</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="thumbnail">
                                        <img alt="Bootstrap Thumbnail First" src="{!! asset('/uploads/3.jpg') !!}" class="hoverZoomLink" />
                                        <div class="caption">
                                            <h3>
                                                Thumbnail label
                                            </h3>
                                            <p>
                                                Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                            </p>
                                            <p>
                                                <a class="btn btn-primary" href="#">Action</a>
                                                <a class="btn btn-primary" href="#">Action</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="thumbnail">
                                        <img alt="Bootstrap Thumbnail First" src="{!! asset('/uploads/4.jpg') !!}" class="hoverZoomLink" />
                                        <div class="caption">
                                            <h3>
                                                Thumbnail label
                                            </h3>
                                            <p>
                                                Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                            </p>
                                            <p>
                                                <a class="btn btn-primary" href="#">Action</a>
                                                <a class="btn btn-primary" href="#">Action</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="thumbnail">
                                        <img alt="Bootstrap Thumbnail First" src="{!! asset('/uploads/5.jpg') !!}" class="hoverZoomLink" />
                                        <div class="caption">
                                            <h3>
                                                Thumbnail label
                                            </h3>
                                            <p>
                                                Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                            </p>
                                            <p>
                                                <a class="btn btn-primary" href="#">Action</a>
                                                <a class="btn btn-primary" href="#">Action</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="thumbnail">
                                        <img alt="Bootstrap Thumbnail First" src="{!! asset('/uploads/6.jpg') !!}" class="hoverZoomLink" />
                                        <div class="caption">
                                            <h3>
                                                Thumbnail label
                                            </h3>
                                            <p>
                                                Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                            </p>
                                            <p>
                                                <a class="btn btn-primary" href="#">Action</a>
                                                <a class="btn btn-primary" href="#">Action</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="thumbnail">
                                        <img alt="Bootstrap Thumbnail First" src="{!! asset('/uploads/7.jpg') !!}" class="hoverZoomLink" />
                                        <div class="caption">
                                            <h3>
                                                Thumbnail label
                                            </h3>
                                            <p>
                                                Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                            </p>
                                            <p>
                                                <a class="btn btn-primary" href="#">Action</a>
                                                <a class="btn btn-primary" href="#">Action</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="thumbnail">
                                        <img alt="Bootstrap Thumbnail First" src="{!! asset('/uploads/1.jpg') !!}" class="hoverZoomLink" />
                                        <div class="caption">
                                            <h3>
                                                Thumbnail label
                                            </h3>
                                            <p>
                                                Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                            </p>
                                            <p>
                                                <a class="btn btn-primary" href="#">Action</a>
                                                <a class="btn btn-primary" href="#">Action</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="thumbnail">
                                        <img alt="Bootstrap Thumbnail First" src="{!! asset('/uploads/3.jpg') !!}" class="hoverZoomLink" />
                                        <div class="caption">
                                            <h3>
                                                Thumbnail label
                                            </h3>
                                            <p>
                                                Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                            </p>
                                            <p>
                                                <a class="btn btn-primary" href="#">Action</a>
                                                <a class="btn btn-primary" href="#">Action</a>
                                            </p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    Aditya Zulkarnain
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $('.row-row').masonry({
        itemSelector: '.thumbnail',
        columnWidth: 100,
        gutter: 20
    });
</script>
</body>
</html>