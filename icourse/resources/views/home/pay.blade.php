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

    <title>iCourse 全球最好的网课平台</title>
</head>
<body>
@include('common.nav')


<div id="head">
    <div class="row">
        <div class="col-lg-6 title-div">
            <h3 class="title-color">在网上学习全世界最好的课程</h3>
        </div>
    </div>
</div>

<div class="page" id="all_course">
    <div class="container">
        <div class="row">
            <div class="content-title">
                <span>全部课程</span>
            </div>
        </div>
        <div class="row">
            <div class="content-label">
                <span class="content-label-span">分类：</span>
                <ul>
                    <li>
                        <a class="active" href="#">全部</a>
                    </li>
                    <li>
                        <a href="#">商务</a>
                    </li>
                    <li>
                        <a href="#">计算机科学</a>
                    </li>
                    <li>
                        <a href="#">数学与逻辑</a>
                    </li>
                    <li>
                        <a href="#">物理工程与科学</a>
                    </li>
                    <li>
                        <a href="#">社会科学</a>
                    </li>
                    <li>
                        <a href="#">艺术与人文</a>
                    </li>
                    <li>
                        <a href="#">语言学习</a>
                    </li>
                    <li>
                        <a href="#">生命科学</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="content-label">
                <span class="content-label-span">难度：</span>
                <ul>
                    <li>
                        <a class="active" href="#">全部</a>
                    </li>
                    <li>
                        <a href="#">初级</a>
                    </li>
                    <li>
                        <a href="#">中级</a>
                    </li>
                    <li>
                        <a href="#">高级</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="content-label">
                <span class="content-label-span">方式：</span>
                <ul>
                    <li>
                        <a href="{{url('home')}}">全部</a>
                    </li>
                    <li>
                        <a href="{{url('home/free')}}">免费</a>
                    </li>
                    <li>
                        <a href="#" class="active">付费</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="content-divider">
                <a href="#" class="active">最新</a>
                <a href="#">最热</a>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6 col-md-3 edit">
                <a class="thumbnail" href="#">
                    <img src="{{asset('resources/images/course1.jpg')}}">
                    <div class="caption">
                        <h6>机器学习</h6>
                        <h6 class="subhead">本课程将广泛介绍机器学习、数据挖掘和统计模式识别。</h6>
                        <span class="subhead-titie">未学习</span>
                        <span class="subhead-titie-price">￥ 130</span>
                        <div class="pull-right">
                            <span class="glyphicon glyphicon-user subhead-content"></span>
                            <span class="subhead-content">3141人学习</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-6 col-md-3 edit">
                <a class="thumbnail" href="#">
                    <img src="{{asset('resources/images/course3.jpg')}}">
                    <div class="caption">
                        <h6>现代世界：1760 年到 1910 年的全球史</h6>
                        <h6 class="subhead">这是关于全球视野下的现代历史的一个问卷。第一部分课程从1700年代的政治和经济革命革命谈起，追寻1800年代的发展的轨迹。</h6>
                        <span class="subhead-titie">未学习</span>
                        <span class="subhead-titie-price">￥ 100</span>
                        <div class="pull-right">
                            <span class="glyphicon glyphicon-user subhead-content"></span>
                            <span class="subhead-content">1250人学习</span>
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

<div class="page" id="all_course">
    <div class="container">
        <div class="row">
            <div class="content-title">
                <span>正在直播</span>
            </div>
        </div>
        <div class="row">
            <div class="content-label">
                <span class="content-label-span">分类：</span>
                <ul>
                    <li>
                        <a class="active" href="#">全部</a>
                    </li>
                    <li>
                        <a href="#">商务</a>
                    </li>
                    <li>
                        <a href="#">计算机科学</a>
                    </li>
                    <li>
                        <a href="#">数学与逻辑</a>
                    </li>
                    <li>
                        <a href="#">物理工程与科学</a>
                    </li>
                    <li>
                        <a href="#">社会科学</a>
                    </li>
                    <li>
                        <a href="#">艺术与人文</a>
                    </li>
                    <li>
                        <a href="#">语言学习</a>
                    </li>
                    <li>
                        <a href="#">生命科学</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6 col-md-3 edit">
                <a class="thumbnail" href="#">
                    <img src="{{asset('resources/images/live/live2.png')}}">
                    <div class="caption">
                        <h6>C语言入门课程精讲</h6>
                        <h6 class="subhead">学习C语言是通往IOS开发工程师之路的必经之路。</h6>
                        <span class="subhead-titie">未观看</span>
                        <span class="subhead-titie-price">￥ 100</span>
                        <div class="pull-right">
                            <span class="glyphicon glyphicon-user subhead-content"></span>
                            <span class="subhead-content">1315人观看</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-6 col-md-3 edit">
                <a class="thumbnail" href="#">
                    <img src="{{asset('resources/images/live/live9.png')}}">
                    <div class="caption">
                        <h6>软件系统设计与体系结构</h6>
                        <h6 class="subhead">国际著名教授 Professor ZH 讲授，让你全面学习软件架构的知识。</h6>
                        <span class="subhead-titie">未观看</span>
                        <span class="subhead-titie-price">￥ 300</span>
                        <div class="pull-right">
                            <span class="glyphicon glyphicon-user subhead-content"></span>
                            <span class="subhead-content">3141人观看</span>
                        </div>
                    </div>
                </a>
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