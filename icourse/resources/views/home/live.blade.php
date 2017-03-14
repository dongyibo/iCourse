<!DOCTYPE html>
<html>
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
    <link rel="stylesheet" href="{{asset('resources/css/home.css')}}"/>
    <link rel="stylesheet" href="{{asset('resources/css/live.css')}}"/>

    <title>iCourse 全球最好的网课平台</title>
</head>
<body>
<nav role="navigation" class="navbar navbar-default" style="font-size:15px !important;">
    <div class="navbar-header" style="margin-right:5%;margin-left:5%;">
        <a href="#"><h4 style="color:gray">iCourse</h4></a>
    </div>
    <div class="collapse navbar-collapse" style="margin-right:5%">
        <ul class="nav navbar-nav" style="margin-right:5%">
            <li>
                <a href="{{url('home')}}">首页</a>
            </li>
            <li class="active">
                <a href="#">直播</a>
            </li>
            <li>
                <a href="#">教师</a>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            @if(isset($login))
                <li style="margin-top: 15px">
                    <img height="30" width="30" class="img-circle" src="{{asset('resources/images/comment3.jpg')}}">
                </li>
                <li>

                    <a href="#">
                        <span style="font-size: 16px; font-weight: 600;color: black">nju软院学徒</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('home')}}">注销</a>
                </li>
            @else
                <li>
                    <a href="{{url("login/live")}}">登录</a>
                </li>
                <li>
                    <a href="#">注册</a>
                </li>
            @endif
        </ul>
        <form role="search" class="navbar-form navbar-left">
            <div class="form-group">
                <input type="text" placeholder="搜索" class="form-control" style="width: 400px">
            </div>
            <button class="btn btn-default" type="button">搜索</button>
        </form>
    </div>
</nav>

<div id="head">
    <div class="row">
        <div class="col-lg-6 title-div">
            <h3 class="title-color">最好的直播，最好的我们</h3>
        </div>
    </div>
</div>

<div class="page broadcast_div">
    <div class="container">
        <div class="row">
            <div class="content-title">
                <span>直播预告</span>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6 col-md-3 edit">
                <a class="thumbnail" href="#" title="click to subscribe">
                    <img src="{{asset('resources/images/live/live_pre1.png')}}">
                    <div class="caption">
                        <h6>Abby学摄影</h6>
                        <h6 class="subhead">卡图的在线讲师Abby现身说法，将貌似深奥的摄影技巧化作一段段诙谐幽默的教学视频</h6>
                        <span class="subhead-time">15:00开始</span>
                        <div class="pull-right">
                            <span class="glyphicon glyphicon-user subhead-content"></span>
                            <span class="subhead-content">3141人想看</span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xs-6 col-md-3 edit">
                <a class="thumbnail" href="#" title="click to subscribe">
                    <img src="{{asset('resources/images/live/live_pre2.png')}}">
                    <div class="caption">
                        <h6>阴阳师式神对战台词日语课</h6>
                        <h6 class="subhead">玩阴阳师手游学式神日语，在愉快的游戏体验中学习日语知识。</h6>
                        <span class="subhead-time">20:00开始</span>
                        <div class="pull-right">
                            <span class="glyphicon glyphicon-user subhead-content"></span>
                            <span class="subhead-content">5698人想看</span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xs-6 col-md-3 edit">
                <a class="thumbnail" href="#" title="click to subscribe">
                    <img src="{{asset('resources/images/live/live_pre3.png')}}">
                    <div class="caption">
                        <h6>Excel函数教程</h6>
                        <h6 class="subhead">公式与函数是Excel功能最强大、使用频率最高的工具，也是Excel的精华。</h6>
                        <span class="subhead-time">21:00开始</span>
                        <div class="pull-right">
                            <span class="glyphicon glyphicon-user subhead-content"></span>
                            <span class="subhead-content">1027人想看</span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xs-6 col-md-3 edit">
                <a class="thumbnail" href="#" title="click to subscribe">
                    <img src="{{asset('resources/images/live/live_pre4.png')}}">
                    <div class="caption">
                        <h6>求职简单学</h6>
                        <h6 class="subhead">“明天去面试了，不知该准备什么？”</h6>
                        <span class="subhead-time">22:00开始</span>
                        <div class="pull-right">
                            <span class="glyphicon glyphicon-user subhead-content"></span>
                            <span class="subhead-content">2586人想看</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="pagination-self">
                <ul>
                    <li>
                        <a href="#">首页</a>
                    </li>
                    <li>
                        <a href="#">上一页</a>
                    </li>
                    <li >
                        <a href="#" class="active">
                            1
                        </a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>

                    <li>
                        <a href="#">下一页</a>
                    </li>
                    <li>
                        <a href="#">尾页</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

@include('common.live')



<div class="jumbotron footer">
    <p class="copyright"><span>Copyright &copy; iCourse 2017.</span></p>
</div>
<script src="{{asset('resources/flat-ui-2.2.2-dist/js/vendor/jquery.min.js"></script>
<script src="{{asset('resources/bootstrap3/js/bootstrap.min.js"></script>
<script src="{{asset('resources/flat-ui-2.2.2-dist/js/flat-ui.min.js"></script>
</body>
</html>