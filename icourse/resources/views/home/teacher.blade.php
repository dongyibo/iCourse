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
    <link rel="stylesheet" href="{{asset('resources/css/teacher.css')}}"/>

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


<div class="page" id="all_course">
    <div class="container">
        <div class="row">
            <div class="content-title">
                <span>开设课程</span>
            </div>
        </div>


        <div class="row">
            <div class="content-label">
                <span class="content-label-span">分类</span>
                <ul>
                    <li>
                        <a class="active" href="#">全部</a>
                    </li>
                    <li>
                        <a href="#">正在进行</a>
                    </li>
                    <li>
                        <a href="#">已结束</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <ul>
                <li class="content">
                    <div class="col-md-3 content-1-div-1">
                        <img data-src="holder.js/100%x120" src="{{asset('resources/images/search/course2.png')}}">
                    </div>
                    <div class="col-md-9 content-1-div-2">
                        <ul>
                            <li>
                                <h6>
                                    CSS的未来
                                </h6>
                                <p class="p1">
                                    课程简介：本课程从最基本的概念开始讲起，步步深入，带领大家学习HTML、CSS样式基础知识，了解各种常用标签的意义以及基本用法，后半
                                    课程简介：本课程从最基本的概念开始讲起，步步深入，带领大家学习HTML、CSS样式基础知识，了解各种常用标签的意义以及基本用法，后半
                                    课程简介：本课程从最基本的概念开始讲起，步步深入，带领大家学习HTML、CSS样式基础知识，了解各种常用标签的意义以及基本用法，后半
                                    课程简介：本课程从最基本的概念开始讲起，步步深入，带领大家学习HTML、CSS样式基础知识，了解各种常用标签的意义以及基本用法，后半
                                    课程简介：本课程从最基本的概念开始讲起，步步深入，带领大家学习HTML、CSS样式基础知识，了解各种常用标签的意义以及基本用法，后半
                                    课程简介：本课程从最基本的概念开始讲起，步步深入，带领大家学习HTML、CSS样式基础知识，了解各种常用标签的意义以及基本用法，后半
                                </p>
                                <p class="p2">
                                    开课时间：2016-10-10--2016-12-10&nbsp;|&nbsp;&nbsp;&nbsp;难度：初级
                                </p>
                                <a href="{{url('manage')}}" class=" button-self">课程管理</a>

                                <a href="#" class=" button-self">作业管理</a>
                                <a href="#" class=" button-self">直播授课</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="content">
                    <div class="col-md-3 content-1-div-1">
                        <img data-src="holder.js/100%x120" src="{{asset('resources/images/search/course4.png')}}">
                    </div>
                    <div class="col-md-9 content-1-div-2">
                        <ul>
                            <li>
                                <h6>
                                    Web前端开发
                                </h6>
                                <p class="p1">
                                    课程简介：本课程从最基本的概念开始讲起，步步深入，带领大家学习HTML、CSS样式基础知识，了解各种常用标签的意义以及基本用法，后半
                                    课程简介：本课程从最基本的概念开始讲起，步步深入，带领大家学习HTML、CSS样式基础知识，了解各种常用标签的意义以及基本用法，后半
                                    课程简介：本课程从最基本的概念开始讲起，步步深入，带领大家学习HTML、CSS样式基础知识，了解各种常用标签的意义以及基本用法，后半
                                    课程简介：本课程从最基本的概念开始讲起，步步深入，带领大家学习HTML、CSS样式基础知识，了解各种常用标签的意义以及基本用法，后半
                                    课程简介：本课程从最基本的概念开始讲起，步步深入，带领大家学习HTML、CSS样式基础知识，了解各种常用标签的意义以及基本用法，后半
                                    课程简介：本课程从最基本的概念开始讲起，步步深入，带领大家学习HTML、CSS样式基础知识，了解各种常用标签的意义以及基本用法，后半
                                </p>
                                <p class="p2">
                                    开课时间：2016-10-10--2016-12-10&nbsp;|&nbsp;&nbsp;&nbsp;难度：初级
                                </p>
                                <a href="courseManage.html" class=" button-self">课程管理</a>

                                <a href="#" class=" button-self">作业管理</a>
                                <a href="#" class=" button-self">直播授课</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="content">
                    <div class="col-md-3 content-1-div-1">
                        <img data-src="holder.js/100%x120" src="{{asset('resources/images/search/course5.png')}}">
                    </div>
                    <div class="col-md-9 content-1-div-2">
                        <ul>
                            <li>
                                <h6>
                                    Java Web之CSS
                                </h6>
                                <p class="p1">
                                    课程简介：本课程从最基本的概念开始讲起，步步深入，带领大家学习HTML、CSS样式基础知识，了解各种常用标签的意义以及基本用法，后半
                                    课程简介：本课程从最基本的概念开始讲起，步步深入，带领大家学习HTML、CSS样式基础知识，了解各种常用标签的意义以及基本用法，后半
                                    课程简介：本课程从最基本的概念开始讲起，步步深入，带领大家学习HTML、CSS样式基础知识，了解各种常用标签的意义以及基本用法，后半
                                    课程简介：本课程从最基本的概念开始讲起，步步深入，带领大家学习HTML、CSS样式基础知识，了解各种常用标签的意义以及基本用法，后半
                                    课程简介：本课程从最基本的概念开始讲起，步步深入，带领大家学习HTML、CSS样式基础知识，了解各种常用标签的意义以及基本用法，后半
                                    课程简介：本课程从最基本的概念开始讲起，步步深入，带领大家学习HTML、CSS样式基础知识，了解各种常用标签的意义以及基本用法，后半
                                </p>
                                <p class="p2">
                                    开课时间：2016-10-10--2016-12-10&nbsp;|&nbsp;&nbsp;&nbsp;难度：初级
                                </p>
                                <a href="courseManage" class=" button-self">课程管理</a>

                                <a href="#" class=" button-self">作业管理</a>
                                <a href="#" class=" button-self">直播授课</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="content">
                    <div class="col-md-3 content-1-div-1">
                        <img data-src="holder.js/100%x120" src="{{asset('resources/images/search/course1.png')}}">
                    </div>
                    <div class="col-md-9 content-1-div-2">
                        <ul>
                            <li>
                                <h6>
                                    Adobe Dreamweaver教程
                                </h6>
                                <p class="p1">
                                    课程简介：本课程从最基本的概念开始讲起，步步深入，带领大家学习HTML、CSS样式基础知识，了解各种常用标签的意义以及基本用法，后半
                                    课程简介：本课程从最基本的概念开始讲起，步步深入，带领大家学习HTML、CSS样式基础知识，了解各种常用标签的意义以及基本用法，后半
                                    课程简介：本课程从最基本的概念开始讲起，步步深入，带领大家学习HTML、CSS样式基础知识，了解各种常用标签的意义以及基本用法，后半
                                    课程简介：本课程从最基本的概念开始讲起，步步深入，带领大家学习HTML、CSS样式基础知识，了解各种常用标签的意义以及基本用法，后半
                                    课程简介：本课程从最基本的概念开始讲起，步步深入，带领大家学习HTML、CSS样式基础知识，了解各种常用标签的意义以及基本用法，后半
                                    课程简介：本课程从最基本的概念开始讲起，步步深入，带领大家学习HTML、CSS样式基础知识，了解各种常用标签的意义以及基本用法，后半
                                </p>
                                <p class="p2">
                                    开课时间：2016-10-10--2016-12-10&nbsp;|&nbsp;&nbsp;&nbsp;难度：初级
                                </p>
                                <a href="courseManage" class=" button-self">课程管理</a>

                                <a href="#" class=" button-self">作业管理</a>
                                <a href="#" class=" button-self">直播授课</a>
                            </li>
                        </ul>
                    </div>
                </li>

            </ul>
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
                    <li>
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
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">6</a>
                    </li>
                    <li>
                        <a href="#">7</a>
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

<div class="jumbotron footer">
    <p class="copyright"><span>Copyright &copy; iCourse 2017.</span></p>
</div>
<script src="{{asset('resources/flat-ui-2.2.2-dist/js/vendor/jquery.min.js')}}"></script>
<script src="{{asset('resources/bootstrap3/js/bootstrap.min.js')}}"></script>
<script src="{{asset('resources/flat-ui-2.2.2-dist/js/flat-ui.min.js')}}"></script>
</body>
</html>