<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="renderer" content="webkit"/>
    <meta name="keywords" content=""/>
    <meta name="description" content="">
    <link rel="icon" href="{{asset('resources/images/favicon.ico')}}" type="image/x-icon"/>
    <link rel="shortcut icon" href="{{asset('resources/images/favicon.ico')}}" type="image/x-icon"/>
    <link rel="stylesheet" href="{{asset('resources/bootstrap3/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('resources/flat-ui-2.2.2-dist/css/flat-ui.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('resources/css/home.css')}}"/>
    <link rel="stylesheet" href="{{asset('resources/css/section.css')}}"/>
    <link rel="stylesheet" href="{{asset('resources/css/video.css')}}">
    <link rel="stylesheet" href="{{asset('resources/css/liveDetail.css')}}">
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
                <li>正在直播：</li>
                <li>软件学院教授</li>
                <li>陈振宇</li>
            </ol>
        </div>
        <div class="row padding ">
            <h4>软件工程<small> 软件系统测试 </small></h4>
        </div>

    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12" style=";padding-right:15px;">
            <video width="100%" height="100%" controls style="margin-top: 50px;">
                <source src="{{asset('resources/videos/test.mp4')}}" type="video/mp4">
            </video>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <ul class="content-title-1">
                <li>
                    相关课程
                </li>
            </ul>
            <ul >
                <li class="content">
                    <div class="col-md-3 content-1-div-1">
                        <img src="{{asset('resources/images/live/live_detail1.png')}}">
                    </div>
                    <div class="col-md-9 content-1-div-2">
                        <ul>
                            <li>
                                <h6>
                                    软件测试之安全测试SecurityTesting
                                </h6>
                                <p class="p1">
                                    课程简介：软件安全测试是软件测试过程中一个长期重要的课题，
                                    本课程针对软件安全问题，从不同方面入手，进行security testing的相关授课。
                                </p>
                                <p class="p2">
                                    上传时间：2015-07-10&nbsp;|&nbsp;&nbsp;&nbsp;难度：初级
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
                        <img src="{{asset('resources/images/live/live_detail2.png')}}">
                    </div>
                    <div class="col-md-9 content-1-div-2">
                        <ul>
                            <li>
                                <h6>
                                    软件测试实战
                                </h6>
                                <p class="p1">
                                    课程简介：本课程总结了讲师（史亮）从事软件测试研究与实践的多年经验，多角度地讨论了测试人员的实际工作，
                                    包括测试价值观、缺陷管理、测试建模、测试设计、测试文 档、测试开发、产品研究、项目研究、团队协作等。
                                </p>
                                <p class="p2">
                                    上传时间：2016-09-08&nbsp;|&nbsp;&nbsp;&nbsp;难度：中级
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
                        <img src="{{asset('resources/images/live/live_detail3.png')}}">
                    </div>
                    <div class="col-md-9 content-1-div-2">
                        <ul>
                            <li>
                                <h6>
                                    软件测试管理-测试管理的奥秘
                                </h6>
                                <p class="p1">
                                    课程简介：本课程讲述CMMI定义、内容及思想。介绍了配置管理的基本概念、内容、工具与配置管理活动中涉及的一些角色与职务，
                                    重点分析配置管理过程中的一些基本活动。
                                </p>
                                <p class="p2">
                                    上传时间：2016-06-12&nbsp;|&nbsp;&nbsp;&nbsp;难度：中级
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
                        <img src="{{asset('resources/images/live/live_detail4.png')}}">
                    </div>
                    <div class="col-md-9 content-1-div-2">
                        <ul>
                            <li>
                                <h6>
                                    软件测试工具-SVN+TestLink+Mantis
                                </h6>
                                <p class="p1">
                                    课程简介：软件测试知识补强”是指培养读者在搭建测试环境、部署测试程序、版本管理、测试用例管理、缺陷管理等方面的能力，
                                    具备企业初级测试工程师知识和技能，使用“技术专题”引导和掌握相关重要基础知识和实践测试经验。
                                </p>
                                <p class="p2">
                                    上传时间：2016-10-23&nbsp;|&nbsp;&nbsp;&nbsp;难度：初级
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
                        <img src="{{asset('resources/images/live/live_detail5.png')}}">
                    </div>
                    <div class="col-md-9 content-1-div-2">
                        <ul>
                            <li>
                                <h6>
                                    软件测试执行篇
                                </h6>
                                <p class="p1">
                                    课程简介：本课程从基础方面介绍软件测试的对象、原则、类型，列举一些软件测试的工具。
                                    阐述软件工程的定义、发展史、基本内容并展示划分的软件生命周期。通过对测试用例的定义、作用、分类、属性等的描述来介绍用例。
                                    并介绍测试环境的定义、分类、测试环境的组成与环境部署方法，介绍软件缺陷的定义与属性、软件缺陷的级别划分与软件缺陷编写的原则。
                                </p>
                                <p class="p2">
                                    上传时间：2015-08-10&nbsp;|&nbsp;&nbsp;&nbsp;难度：初级
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
    </div>
    <div class="jumbotron footer">
        <p class="copyright"><span>Copyright &copy; iCourse 2017.</span></p>
    </div>
    <script src="{{asset('resources/flat-ui-2.2.2-dist/js/vendor/jquery.min.js')}}"></script>
    <script src="{{asset('resources/bootstrap3/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('resources/flat-ui-2.2.2-dist/js/flat-ui.min.js')}}"></script>
</div>
</body>
</html>