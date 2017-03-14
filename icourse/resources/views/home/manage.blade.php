<!DOCTYPE html>
<html>
<head lang="en">
    <head lang="en">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="renderer" content="webkit"/>
        <meta name="keywords" content=""/>
        <meta name="description" content="">
        <link rel="icon" href="{{asset('resources/images/favicon.ico')}}" type="image/x-icon" />
        <link rel="shortcut icon" href="{{asset('resources/images/favicon.ico')}}" type="image/x-icon" />
        <link rel="stylesheet" href="{{asset('resources/bootstrap3/css/bootstrap.min.css')}}" />
        <link rel="stylesheet" href="{{asset('resources/flat-ui-2.2.2-dist/css/flat-ui.min.css')}}"/>
        <link rel="stylesheet" href="{{asset('resources/css/jquery.filer.css')}}"/>
        <link rel="stylesheet" href="{{asset('resources/css/home.css')}}"/>
        <link rel="stylesheet" href="{{asset('resources/css/jquery.filter-dragdropbox-theme.css')}}"/>

        <title>iCourse 全球最好的网课平台</title>
        <style>
            .footer { margin:0px; background-color: #2a2a2a; text-align: center;padding:30px;margin-top:40px; clear: both;}
            .footer_nav_out {display:inline-block;border-bottom: 1px solid #4d4d4d;padding:0px 50px;}
            .footer_nav { display: inline-block; color: #9e9e9e;padding:10px 50px; vertical-align: top;}
            .footer_nav li{ font-size: 14px;text-align: left;line-height: 30px;}
            .footer_nav li a{ color: #9e9e9e;}
            .footer_nav li a:hover{ opacity: .9;}
            .footer_nav .title{ font-size: 18px;}
            .footer .copyright { color: #787878;font-size: 12px;margin-top: 30px;}
            .footer .copyright img { margin-left:6px;margin-right:6px;margin-top:-10px;}
            .footer .copyright span { color: #57dfc7;}
            .footer .copyright span.phone_large { font-size: 20px;}
            ul,ol{list-style: none;margin:0;padding:0}
            .background-gradient{
                background:-webkit-linear-gradient(90deg, rgb(21, 37, 53),rgb(60, 175, 170));
                background:linear-gradient(90deg, rgb(21, 37, 53),rgb(60, 175, 170));
                color:#fff;
                font-size:14px;
                padding-top:7px;
            }
            .breadcrumb{
                background: inherit;
                margin-bottom: 0px;
            }
            .breadcrumb >li>a{
                color:#fff;
            }
            .navbar{
                margin-bottom: 0px;
            }
            .padding{
                padding:8px 15px;
            }
            h4{
                font-weight:normal;
                margin-top:0px;
            }
            .button-self{
                border-radius:22px;
                padding:10px 65px;
                background-color:#FF3333;
                color:#fff;
                font-size:16px;
            }
            .button-self:hover,.button-self:active,.button-self:focus{
                color:#fff;
                background-color: #FF5454
            }
            .edit{

                border-left:1px solid rgba(114,177,177,0.5);
                padding-top:15px;
                padding-bottom:15px;
            }
            h6{
                font-size:22px;
                margin-bottom:1px;
                margin-top:1px;
                font-family: "Arial";
            }
            .span-title{
                padding-left:2px;
                color:#bbb;
            }
            .content-title-1{
                padding:15px 15px 10px 40px;
                font-size:17px;
                border-bottom:1px solid #d7dee0;
                margin-bottom:18px;

            }
            .content-title-1>li>a{
                color:#888;
            }
            .content-title-2{
                padding:15px 15px 10px 0px;
                font-size:17px;
                border-bottom:1px solid #d7dee0;
                margin-bottom:15px;
            }
            .content-1-div{
                padding:0;margin:0 0 0 -18px;
            }
            .content-1-div>span{
                color:#464646;
            }
            .content-1-div>p{
                font-size:15px;
                color:#949696;
            }
            .content-1{
                font-size:16px;
            }
            .content-1>li{
                padding:0px;
                margin-bottom: 20px;
            }
            .content-1>li>div:first-child{
                margin-left:-14px;
                margin-top:4px;
            }
            .row-nav-margin{
                margin:63px 0px 0px 3px;
            }
            .content-2{
                margin:0;
                padding:0;
            }
            .content-2>li{

            }
            .content-2-span-1{
                font-size:15px;
                color:#949696;
            }
            .content-2-span-2{
                font-size:15px;
                color:#FA6441;
                float:right;
            }
        </style>
    </head>
<body>
<nav role="navigation" class="navbar navbar-default" style="font-size:15px !important;">
    <div class="navbar-header" style="margin-right:5%;margin-left:5%;margin-top: 15px">
        <a href="#"><h4 style="color:gray;font-weight: 600">iCourse</h4></a>
    </div>
    <div class="collapse navbar-collapse" style="margin-right:5%">
        <ul class="nav navbar-nav" style="margin-right:5%">
            <li>
                <a href="{{url('home')}}">首页</a>
            </li>
            <li>
                <a href="{{url('live')}}">直播</a>
            </li>
            <li>
                <a href="#">教师</a>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li style="margin-top: 15px">
                <img height="30" width="30" class="img-circle" src="{{asset('resources/images/comment3.jpg')}}">
            </li>
            <li>
                <a href="{{url('teacher')}}">
                    <span style="font-size: 16px; font-weight: 600;color: black">讲师李伟</span>
                </a>
            </li>
            <li>
                <a href="{{url('home')}}">注销</a>
            </li>
        </ul>
        <form role="search" class="navbar-form navbar-left">
            <div class="form-group">
                <input type="text" placeholder="搜索" class="form-control" style="width: 400px">
            </div>
            <button class="btn btn-default" type="button">搜索</button>
        </form>
    </div>
</nav>
<div class="background-gradient">
    <div class="container">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">课程</a></li>
                <li><a href="#">前端开发</a></li>
                <li><a href="#">CSS</a></li>
                <li><a href="#">CSS远征之模版篇</a></li>
            </ol>
        </div>
        <div class="row padding ">
            <h4>CSS的未来</h4>
        </div>
        <div class="row row-nav-margin">
            <div class="col-xs-4 col-md-2 edit">
                <h6>初级</h6>
                <span class="span-title">难度</span>
            </div>
            <div class="col-xs-4 col-md-2 edit">
                <h6>186</h6>
                <span class="span-title">学习人数</span>
            </div>
            <div class="col-xs-4 col-md-2 edit">
                <h6>1小时30分钟</h6>
                <span class="span-title">时长</span>
            </div>
            <div class="col-xs-12 col-md-6">
                <button id="news" class="pull-right btn btn-danger">发布新公告</button>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12" style=";padding-right:15px;">
            <ul class="content-title-1">
                <li>
                    <a href="#">章节</a>
                </li>
            </ul>
            <ul class="content-1">
                <li class="clearfix">
                    <div class="col-md-1">
                        <!--<img src="{{asset('resources/images/teacher/course2.png')}}" alt=""/>-->
                    </div>
                    <div class="col-md-11 content-1-div">
                        <span>第一章 CSS入门</span>
                        <p>本章主要介绍MongoDB分片的概念及其优势和使用场景，以及与副本级的区别，让大家对分片有一个基本的概念与</p>
                        <button class="btn btn-info pull-right upload">添加本章内容</button>
                    </div>
                </li>
                <li class="clearfix">
                    <div class="col-md-1">
                        <!--<img src="{{asset('resources/images/study/img_chapter.png')}}" alt=""/>-->
                    </div>
                    <div class="col-md-11 content-1-div">
                        <span>第二章 CSS盒模型</span>
                        <p>本章主要介绍MongoDB分片的概念及其优势和使用场景</p>
                        <button class="btn btn-info pull-right upload">添加本章内容</button>
                    </div>
                </li>
                <li class="clearfix">
                    <div class="col-md-1">
                        <!--<img src="{{asset('resources/images/study/img_chapter_un.png')}}" alt=""/>-->
                    </div>
                    <div class="col-md-11 content-1-div">
                        <span>第三章 CSS3</span>
                        <p>本章主要介绍MongoDB分片的概念及其优势和使用场景，以及与副本级的区别</p>
                        <button class="btn btn-info pull-right upload">添加本章内容</button>
                    </div>
                </li>
                <li class="clearfix">
                    <div class="col-md-1">
                        <!--<img src="{{asset('resources/images/study/img_chapter_un.png')}}" alt=""/>-->
                    </div>
                    <div class="col-md-11 content-1-div">
                        <span>第四章 CSS项目实践</span>
                        <p>本章主要介绍MongoDB分片的概念及其优势和使用场景，阿斯蒂芬</p>
                        <button class="btn btn-info pull-right upload">添加本章内容</button>
                    </div>
                </li>
                <li class="clearfix">
                    <div class="col-md-1">
                        <!--<img src="{{asset('resources/images/study/img_chapter_un.png')}}" alt=""/>-->
                    </div>
                    <div class="col-md-11 content-1-div">
                        <span>第五章 CSS优化</span>
                        <p>本章主要介绍MongoDB分片的概念及其优势和使用场景，以及与副本级的区别，让大家对分</p>
                        <button class="btn btn-info pull-right upload">添加本章内容</button>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="jumbotron footer">
    <p class="copyright"><span>Copyright &copy; iCourse 2017.</span></p>
</div>
<script src="{{asset('resources/flat-ui-2.2.2-dist/js/vendor/jquery.min.js')}}"></script>
<script src="{{asset('resources/bootstrap3/js/bootstrap.min.js')}}"></script>
<script src="{{asset('resources/flat-ui-2.2.2-dist/js/flat-ui.min.js')}}"></script>
<script src="{{asset('resources/layer/layer.js')}}"></script>
<script src="{{asset('resources/js/jquery.filter.js')}}"></script>
<script>
    $("#news").click(function(){
        layer.prompt({title: '请写下新的公告内容：', formType: 2}, function(text, index){
            layer.close(index);
            layer.msg('发布成功');
        });
    });
    $(".upload").click(function(){
        layer.open({
            type: 1,
            skin: 'layui-layer-rim', //加上边框
            area: ['420px', '240px'], //宽高
            content: '<form  method="post" enctype="multipart/form-data">{{csrf_field()}}<input type="file" name="files[]" id="filer_input" multiple="multiple"> <div class="row"><div class="col-lg-1 col-lg-offset-5" style="margin-top:60px"><input type="submit" value="提交" id="submit"></div></div> </form>'
        });
        $("#submit").click(function(){
           layer.msg("上传成功，等待审核。")
        });
    });

    {{--$('#filer_input').filer({--}}
        {{--changeInput: '<div class="jFiler-input-dragDrop"><div class="jFiler-input-inner"><div class="jFiler-input-icon"><i class="icon-jfi-folder"></i></div><div class="jFiler-input-text"><h3>Click on this box</h3> <span style="display:inline-block; margin: 15px 0">or</span></div><a class="jFiler-input-choose-btn blue">Browse Files</a></div></div>',--}}
        {{--showThumbs: true,--}}
        {{--theme: "dragdropbox",--}}
        {{--templates: {--}}
            {{--box: '<ul class="jFiler-items-list jFiler-items-grid"></ul>',--}}
            {{--item: '<li class="jFiler-item">\--}}
                    {{--<div class="jFiler-item-container">\--}}
                        {{--<div class="jFiler-item-inner">\--}}
                            {{--<div class="jFiler-item-thumb">\--}}
                                {{--<div class="jFiler-item-status"></div>\--}}
                                {{--<div class="jFiler-item-info">\--}}
                                    {{--<span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name | limitTo25}}</b></span>\--}}
                                    {{--<span class="jFiler-item-others">{{fi-size2}}</span>\--}}
                                {{--</div>\--}}
                                {{--{{fi-image}}\--}}
                            {{--</div>\--}}
                            {{--<div class="jFiler-item-assets jFiler-row">\--}}
                                {{--<ul class="list-inline pull-left">\--}}
                                    {{--<li>{{fi-progressBar}}</li>\--}}
                                {{--</ul>\--}}
                                {{--<ul class="list-inline pull-right">\--}}
                                    {{--<li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>\--}}
                                {{--</ul>\--}}
                            {{--</div>\--}}
                        {{--</div>\--}}
                    {{--</div>\--}}
                {{--</li>',--}}
            {{--itemAppend: '<li class="jFiler-item">\--}}
                        {{--<div class="jFiler-item-container">\--}}
                            {{--<div class="jFiler-item-inner">\--}}
                                {{--<div class="jFiler-item-thumb">\--}}
                                    {{--<div class="jFiler-item-status"></div>\--}}
                                    {{--<div class="jFiler-item-info">\--}}
                                        {{--<span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name | limitTo25}}</b></span>\--}}
                                        {{--<span class="jFiler-item-others">{{fi-size2}}</span>\--}}
                                    {{--</div>\--}}
                                    {{--{{fi-image}}\--}}
                                {{--</div>\--}}
                                {{--<div class="jFiler-item-assets jFiler-row">\--}}
                                    {{--<ul class="list-inline pull-left">\--}}
                                        {{--<li><span class="jFiler-item-others">{{fi-icon}}</span></li>\--}}
                                    {{--</ul>\--}}
                                    {{--<ul class="list-inline pull-right">\--}}
                                        {{--<li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>\--}}
                                    {{--</ul>\--}}
                                {{--</div>\--}}
                            {{--</div>\--}}
                        {{--</div>\--}}
                    {{--</li>',--}}
            {{--itemAppendToEnd: false,--}}
            {{--removeConfirmation: true,--}}
            {{--_selectors: {--}}
                {{--list: '.jFiler-items-list',--}}
                {{--item: '.jFiler-item',--}}
                {{--remove: '.jFiler-item-trash-action'--}}
            {{--}--}}
        {{--}--}}
    {{--});--}}
</script>
</body>
</html>