<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="renderer" content="webkit"/>
    <meta name="keywords" content=""/>
    <meta name="description" content="">
    <link rel="icon" href="{{asset('resources/images/favicon.ico" type="image/x-icon')}}"/>
    <link rel="shortcut icon" href="{{asset('resources/images/favicon.ico" type="image/x-icon')}}"/>
    <link rel="stylesheet" href="{{asset('resources/bootstrap3/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('resources/flat-ui-2.2.2-dist/css/flat-ui.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('resources/css/search.css')}}"/>

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

                <a href="#">
                    <span style="font-size: 16px; font-weight: 600;color: black">nju软院学徒</span>
                </a>
            </li>

            <li>
                <a href="{{url('home')}}">注销</a>
            </li>
        </ul>
    </div>
</nav>
<div class="background-gradient">
    <div class="container">
        <div class="row">
            <div class="col-lg-12" style="padding:108px 0px">
                <div class="input-group form-group-lg" style="width:700px;margin:0 auto;border:none">
                    {{--<form action="{{url('search')}}" method="post">--}}
                        {{--{{csrf_field()}}--}}
                        <input id="search_input" name="search" type="text" class="form-control input-lg" placeholder="请输入您要搜索的内容" style="border:none;">
                        <span class="input-group-btn">
                        <button id="search_btn" onclick="search();" class="btn btn-default" type="button" style="height:45px;padding-right:50px;padding-left:50px;background-color:#FF5454;border:none">搜索</button>
                    </span>
                    {{--</form>--}}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <ul class="content-title-1">
                <li>
                    为您找到相关课程<span class="tips">8</span>个
                </li>
            </ul>
            <ul >
                <li class="content">
                    <div class="col-md-3 content-1-div-1">
                        <img src="{{asset('resources/images/search/course1.png')}}">
                    </div>
                    <div class="col-md-9 content-1-div-2">
                        <ul>
                            <li>
                                <h6>
                                    oeasy html5、<span class="search-strong">{{$search}}</span>网页设计与制作
                                </h6>
                                <p class="p1">
                                    本教程专门讲解网页设计与制作前端技术h5(html5)+{{$search}}+javascript。
                                    本课程是讲解网页设计与制作、网站建设、前端建设的教程，网站建设的基础语言就是h5(html5)，对于网站装修的语言是{{$search}}。
                                </p>
                                <p class="p2">
                                    上传时间：2015-10-10&nbsp;|&nbsp;&nbsp;&nbsp;难度：初级
                                </p>
                                <p class="p3">
                                    <span>
                                    未学习
                                    </span>
                                </p>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="content">
                    <div class="col-md-3 content-1-div-1">
                        <img src="{{asset('resources/images/search/course2.png')}}">
                    </div>
                    <div class="col-md-9 content-1-div-2">
                        <ul>
                            <li>
                                <h6>
                                    前端工程师之HTML与<span class="search-strong">{{$search}}</span>
                                </h6>
                                <p class="p1">
                                    课程简介：网页的本质就是超级文本标记语言HTML，我们这套课程从基础语法入门，讲解了HTML的常用标签，表单，排版等实用技术，
                                    同时深入讲解了{{$search}}样式表的使用和如何使用DIV {{$search}}设计网页布局。同时还介绍{{$search}}3.0的新特性，阴影，圆角边框等实用案例。
                                </p>
                                <p class="p2">
                                    上传时间：2016-11-10&nbsp;|&nbsp;&nbsp;&nbsp;难度：初级
                                </p>
                                <p class="p3">
                                    <span>
                                    未学习
                                    </span>
                                </p>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="content">
                    <div class="col-md-3 content-1-div-1">
                        <img src="{{asset('resources/images/search/course3.png')}}">
                    </div>
                    <div class="col-md-9 content-1-div-2">
                        <ul>
                            <li>
                                <h6>
                                    HTML5+<span class="search-strong">{{$search}}</span>项目实战：幽灵按钮
                                </h6>
                                <p class="p1">
                                    课程简介：幽灵按钮，也就是Ghost Buttons，是一个透明的按钮，通常是矩形或者圆角矩形，仅保留基本的形制，
                                    使用细线来标识边界；按钮内的文字通常使用纤细的非衬线体字体的纯文本，来指明按钮功能。
                                </p>
                                <p class="p2">
                                    上传时间：2016-03-10&nbsp;|&nbsp;&nbsp;&nbsp;难度：初级
                                </p>
                                <p class="p3">
                                    <span>
                                    未学习
                                    </span>
                                </p>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="content">
                    <div class="col-md-3 content-1-div-1">
                        <img src="{{asset('resources/images/search/course4.png')}}">
                    </div>
                    <div class="col-md-9 content-1-div-2">
                        <ul>
                            <li>
                                <h6>
                                    Web前端开发｜Html/<span class="search-strong">{{$search}}</span>/Javascript
                                </h6>
                                <p class="p1">
                                    课程简介：本课程为Web前端开发的基础入门教程，通过学习HTML、{{$search}}和JS等脚本技术，
                                    教你开发出动态的网页，开发出像百叶窗推拉图片特效、图片切换特效、自动漂浮图片广告和缩略图特效、分类菜单特效等网页动态效果。
                                </p>
                                <p class="p2">
                                    上传时间：2015-09-10&nbsp;|&nbsp;&nbsp;&nbsp;难度：初级
                                </p>
                                <p class="p3">
                                    <span>
                                    未学习
                                    </span>
                                </p>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="content">
                    <div class="col-md-3 content-1-div-1">
                        <img src="{{asset('resources/images/search/course5.png')}}">
                    </div>
                    <div class="col-md-9 content-1-div-2">
                        <ul>
                            <li>
                                <h6>
                                    JavaWeb之<span class="search-strong">{{$search}}</span>
                                </h6>
                                <p class="p1">
                                    课程简介： 1、实战 实战 再实战，一切源于实战
                                    2、以浅显的显示案例辅助介绍{{$search}}
                                    3、以实际应用案例，介绍{{$search}}运用在页面中的思路和方式方法
                                </p>
                                <p class="p2">
                                    上传时间：2016-05-20&nbsp;|&nbsp;&nbsp;&nbsp;难度：初级
                                </p>
                                <p class="p3">
                                    <span>
                                    未学习
                                    </span>
                                </p>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <div class="col-md-3">
            <ul class="content-title-1" style="margin-bottom: 11px;">
                <li>热门搜索</li>
            </ul>
            <ul class="list-inline">
                <li>
                    <a href="#">计算机科学</a>
                </li>
                <li>
                    <a href="#" >商务</a>
                </li>
                <li>
                    <a href="#" >数学与逻辑</a>
                </li>
                <li>
                    <a href="#" >物理工程与科学</a>
                </li>
                <li>
                    <a href="#" >社会科学</a>
                </li>
                <li>
                    <a href="#" >艺术与人文</a>
                </li>
                <li>
                    <a href="#" >语言学习</a>
                </li>
                <li>
                    <a href="#" >生命科学</a>
                </li>
                <li>
                    <a href="#" >运动</a>
                </li>
                <li>
                    <a href="#" >恋爱</a>
                </li>
                <li>
                    <a href="#" >厨艺</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
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
<div class="jumbotron footer">
    <p class="copyright"><span>Copyright &copy; iCourse 2017.</span></p>
</div>
<script src="{{asset('resources/flat-ui-2.2.2-dist/js/vendor/jquery.min.js')}}"></script>
<script src="{{asset('resources/bootstrap3/js/bootstrap.min.js')}}"></script>
<script src="{{asset('resources/flat-ui-2.2.2-dist/js/flat-ui.min.js')}}"></script>
<script src="{{asset('resources/js/search.js')}}"></script>

</body>
</html>