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
        <link rel="icon" href="{{asset('resources/images/favicon.ico" type="image/x-icon')}}" />
        <link rel="shortcut icon" href="{{asset('resources/images/favicon.ico')}}" type="image/x-icon" />
        <link rel="stylesheet" href="{{asset('resources/bootstrap3/css/bootstrap.min.css')}}" />
        <link rel="stylesheet" href="{{asset('resources/flat-ui-2.2.2-dist/css/flat-ui.min.css')}}"/>
        <link rel="stylesheet" href="{{asset('resources/css/home.css')}}"/>
        <link rel="stylesheet" href="{{asset('resources/css/section.css')}}"/>
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
                <input tid="search" ype="text" placeholder="搜索" class="form-control" style="width: 400px">
            </div>
            <button class="btn btn-default" type="button">搜索</button>
        </form>
    </div>
</nav>
<div class="background-gradient">
    <div class="container">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">全部课程</a></li>
                <li><a href="#">编程开发</a></li>
                <li><a href="#">数据处理</a></li>
                <li><a href="#">认知计算课程体系</a></li>
            </ol>
        </div>
        <div class="row padding ">
            <h4>{{$name}}</h4>
        </div>
        <div class="row">
            <div class="col-xs-offset-0 col-md-offset-6">
                <h6 class="pull-right" style="padding:0 70px;margin-bottom: -30px;">您已进入课程</h6>
            </div>
        </div>
        <div class="row row-nav-margin">
            <div class="col-xs-4 col-md-2 edit">
                <h6>高级</h6>
                <span class="span-title">难度</span>
            </div>
            <div class="col-xs-4 col-md-2 edit">
                <h6>5186</h6>
                <span class="span-title">学习人数</span>
            </div>
            <div class="col-xs-4 col-md-2 edit">
                <h6>20小时42分钟</h6>
                <span class="span-title">时长</span>
            </div>
            <div class="col-xs-12 col-md-6">
                <h6 class="pull-right">课程结束时间<span> 2017-08-02 </span></h6>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-9" style=";padding-right:15px;">
            <ul class="content-title-1">
                <li>
                    <a href="#">章节</a>
                </li>
            </ul>
            <ul class="content-1">
                <li class="clearfix"><a href="{{url('content/'.$name.'/1')}}">
                        <div class="col-md-1">
                            <img src="{{asset('resources/images/book.png')}}" alt="" class="book"/>
                        </div>
                        <div class="col-md-11 content-1-div">
                            <span>第一章 线性模型</span>
                            <p>本章主要介绍线性回归、对数几率回归、线性判别分析、多分类学习、类别不平衡问题等内容</p>
                        </div>
                    </a></li>
                <li class="clearfix"><a href="#">
                        <div class="col-md-1">
                            <img src="{{asset('resources/images/book.png')}}" alt="" class="book"/>
                        </div>
                        <div class="col-md-11 content-1-div">
                            <span>第二章 神经网络</span>
                            <p>本章主要介绍神经元模型、感知机与多层网络、误差逆传播算法、全局最小与局部极小、其他常见神经网络、深度学习等内容</p>
                        </div>
                    </a></li>
                <li class="clearfix"><a href="#">
                        <div class="col-md-1">
                            <img src="{{asset('resources/images/book.png')}}" alt="" class="book"/>
                        </div>
                        <div class="col-md-11 content-1-div">
                            <span>第三章 支持向量机</span>
                            <p>本章主要介绍间隔与支持向量、对偶问题、 核函数、软间隔与正则化、支持向量回归、核方法等内容</p>
                        </div>
                    </a></li>
                <li class="clearfix"><a href="#">
                        <div class="col-md-1">
                            <img src="{{asset('resources/images/book.png')}}" alt="" class="book"/>
                        </div>
                        <div class="col-md-11 content-1-div">
                            <span>第四章 贝叶斯分类器</span>
                            <p>本章主要介绍贝叶斯决策论、极大似然估计、朴素贝叶斯分类器、半朴素贝叶斯分类器、贝叶斯网、EM算法等内容</p>
                        </div>
                    </a></li>
                <li class="clearfix"><a href="#">
                        <div class="col-md-1">
                            <img src="{{asset('resources/images/book.png')}}" alt="" class="book"/>
                        </div>
                        <div class="col-md-11 content-1-div">
                            <span>第五章 聚类</span>
                            <p>本章主要介绍聚类任务、性能度量、距离计算、 原型聚类、密度聚类、层次聚类等内容</p>
                        </div>
                    </a></li>
            </ul>
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
                            <a href="#">下一页</a>
                        </li>
                        <li>
                            <a href="#">尾页</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-3" style=";padding-right:0px;">
            <ul class="content-title-2">
                <li>课程作业</li>
            </ul>
            <ul class="content-2">
                <li><a href="#">
                        <div class="col-md-12">
                            <span class="content-2-span-1">线性回归编程练习</span>
                            <span class="content-2-span-3">已完成</span>
                        </div>
                        <div class="col-md-12">
                            <span class="content-2-span-1">截止时间</span>
                            <span class="content-2-span-4">2017-03-17</span>
                            <hr/>
                        </div>
                    </a></li>
                <li><a href="#">
                        <div class="col-md-12">
                            <span class="content-2-span-1">神经网络编程练习</span>
                            <span class="content-2-span-3">已完成</span>
                        </div>
                        <div class="col-md-12">
                            <span class="content-2-span-1">截止时间</span>
                            <span class="content-2-span-4">2017-03-27</span>
                            <hr/>
                        </div>
                    </a></li>
                <li><a href="#">
                        <div class="col-md-12">
                            <span class="content-2-span-1">向量机编程练习</span>
                            <span class="content-2-span-2">未完成</span>
                        </div>
                        <div class="col-md-12">
                            <span class="content-2-span-1">截止时间</span>
                            <span class="content-2-span-4">2017-04-07</span>
                            <hr/>
                        </div>
                    </a></li>
                <li><a href="#">
                        <div class="col-md-12">
                            <span class="content-2-span-1">核函数编程练习</span>
                            <span class="content-2-span-2">未完成</span>
                        </div>
                        <div class="col-md-12">
                            <span class="content-2-span-1">截止时间</span>
                            <span class="content-2-span-4">2017-04-17</span>
                            <hr/>
                        </div>
                    </a></li>
                <li><a href="#">
                        <div class="col-md-12">
                            <span class="content-2-span-1">贝叶斯分类编程练习</span>
                            <span class="content-2-span-2">未完成</span>
                        </div>
                        <div class="col-md-12">
                            <span class="content-2-span-1">截止时间</span>
                            <span class="content-2-span-4">2017-04-27</span>
                            <hr/>
                        </div>
                    </a></li>
                <li><a href="#">
                        <div class="col-md-12">
                            <span class="content-2-span-1">聚类编程练习</span>
                            <span class="content-2-span-2">未完成</span>
                        </div>
                        <div class="col-md-12">
                            <span class="content-2-span-1">截止时间</span>
                            <span class="content-2-span-4">2017-05-07</span>
                            <hr/>
                        </div>
                    </a></li>
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
<script src="{{asset('resources/js/search.js')}}"></script>
</body>
</html>