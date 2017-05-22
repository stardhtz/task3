<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Task 3 | Image Galery</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
    <link type="text/css" rel="stylesheet" href="{!! asset('/css/style.css') !!}" />
    <link type="text/css" rel="stylesheet" href="{!! asset('/css/animate.css') !!}" />
    <link type="text/css" rel="stylesheet" href="{!! asset('/css/bootstrap.min.css')!!}" />
    <script type="text/javascript" src="{!! asset('/js/jquery-3.2.1.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('/js/bootstrap.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('/js/masonry.pkgd.js') !!}"></script>

    <style>
        .thumbnail {
            width: 250px;
            float: left;
            /* vertical gutter */
            margin-bottom: 20px;
        }
        .container{
            margin-top: 20px;
            border: 1px solid #D0D0D0;
            box-shadow: 0 0 8px #D0D0D0;
        }
        .modal.custom .modal-dialog {
            width:320px;
            padding-top: 20px;
            margin:0 auto;
            /*add what you want here*/
        }
        .w3-modal{
            padding-top: 30px;
            background-color: rgba(0,0,0,0.75);
        }
        #capt{
            text-align: center;
            margin-bottom: -40px;
            margin-top: 10px;
            color: #fff;
            text-transform: uppercase;
            font-weight: bold;
            font-size: xx-large;
        }
    </style>

</head>

<body>
<div class="container">
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
            @include('task.notif')
        </div>
    </div>
    @yield('body')
</div>
</div>



<!-- Modal 1
<div class="modal custom fade" id="modalMd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">


        </div>
    </div>
</div>

-->
<script>
    $('.row-row').masonry({
        itemSelector: '.thumbnail',
        columnWidth: 100,
        horizontalOrder: true,
        gutter: 33
    });

    $(document).on('ajaxComplete ready', function () {
        $('.modalMd').off('click').on('click', function () {
            $('#modalMdContent').load($(this).attr('value'));
        });
    });
</script>
</body>
</html>