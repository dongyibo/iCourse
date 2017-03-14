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
                <input id="search" type="text" placeholder="搜索" class="form-control" style="width: 400px">
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
                <li><a href="#">机器学习</a></li>
            </ol>
        </div>
        <div class="row padding ">
            <h4>神经网络<small> 神经元模型 </small></h4>
        </div>

    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12" style=";padding-right:15px;">
            <video width="100%" height="100%" controls style="margin-top: 50px;">
                <source src="{{asset('resources/videos/test.mp4')}}" type="video/mp4">
            </video>
            <div class="row">
                <p style="float:left; margin-left:5px;">上一节：<a href="#" style="color: #428bca;">线性模型-类别不平衡问题</a></p>
                <p style="float:right; margin-right:5px">下一节：<a href="#" style="color: #428bca;">神经网络-感知机与多层网络</a></p>
            </div>
            <div class="row">
                <div class="comp-comment" id="news_comments_wrapper">
                    <div class="panel-heading" id="blog-comments-list">
                        <div class="count-of-comment">评论<span class="reply_count">(<span id="comp_totle_reply_count">33</span>)</span></div>
                    </div>
                    <div class="comment-panel-wrapper" style="margin-top: -10px">
                        <div class="panel comp-comments-panel" id="comment-list">
                            <div class="panel-body">
                                <div class="panel-comment-form">

                                    <div class="SpaceList">
                                        <div id="commentFormScope" class="comp-comment-form comment-emoji">
                                            <form id="form_comment" method="POST">
                                                <div class="comment_form">
                                                    <textarea name="content" id="wmd-input" placeholder=""></textarea>
                                                    <div class="box editor-toolbox">
                                                        <div class="box-fr">
                                                            <button type="submit" id="commentSubmitBtn" class="btn-green">发表评论</button>
                                                        </div>
                                                        <div class="box vertical box-aw">
                                                            <span class="NoData" id="cmt_tip" style="color:#F00 !important;margin-left: 10px !important;"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div id="inline_reply_editor" style="display:none;">
                                        <div class="comp-comment-form">
                                            <form id="form_inline_comment" method="POST">
                                                <input type="hidden" id="inline_reply_id" name="reply_id" value="">
                                                <textarea name="content" title=""></textarea>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel-list latest-comment">
                                    <div class="box vertical">
                                        <span class="box-fl">最新评论</span>
                                        <hr class="box-aw">
                                    </div>
                                    <div class="insert-comment-flag"></div>

                                    <div class="comment-item comment-emoji">
                                        <div class="box">
                                            <div class="box-fl">
                                                <div class="icon">
                                                    <a href="#">
                                                        <img src="{{asset('resources/images/comment1.jpg')}}" align="absmiddle" alt="glamey" title="glamey" class="SmallPortrait" >
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="box-aw">
                                                <div class="box">
                                                    <div class="box-fr ">
                                                        <div class="icon_box box baseline ">

                                                        </div>
                                                    </div>
                                                    <div class="box-aw">
                                                        <div class="user-name">
                                                            <a href="#" name="rpl_288771902" class="user">glamey

                                                            </a>
                                                        </div>
                                                        <div class="user-info"><span>33</span>楼 2015/10/03 16:05  </div>
                                                    </div>
                                                </div>
                                                <div class="comment-content" data-emoji-render="true" style="opacity: 1;">
                                                    对于回归项我认为按比例来进行的话更恰当点
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment-item comment-emoji" id="cmt_43645_2306557_285418756">
                                        <div class="box">
                                            <div class="box-fl">
                                                <div class="icon">
                                                    <a href="#">
                                                        <img src="{{asset('resources/images/comment2.jpg')}}" align="absmiddle" alt="zz非人间" title="zz非人间" class="SmallPortrait" >
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="box-aw">
                                                <div class="box">
                                                    <div class="box-fr ">
                                                        <div class="icon_box box baseline ">


                                                        </div>
                                                    </div>
                                                    <div class="box-aw">
                                                        <div class="user-name">
                                                            <a href="#" name="rpl_285418756" class="user">zz非人间

                                                            </a>
                                                        </div>
                                                        <div class="user-info"><span>32</span>楼 2015/03/23 14:56  </div>
                                                    </div>
                                                </div>
                                                <div class="comment-content" data-emoji-render="true" style="opacity: 1;">
                                                    我对神经元模型有点疑问。
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment-item comment-emoji" id="cmt_43645_0_285104211">
                                        <div class="box">
                                            <div class="box-fl">
                                                <div class="icon">
                                                    <a href="javascript:void(0)">
                                                        <img src="{{asset('resources/images/comment3.jpg')}}" align="absmiddle" alt="" title="" class="SmallPortrait" >
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="box-aw">
                                                <div class="box">
                                                    <div class="box-fr ">
                                                        <div class="icon_box box baseline ">


                                                        </div>
                                                    </div>
                                                    <div class="box-aw">
                                                        <div class="user-name">
                                                            <a href="javascript:void(0)" name="rpl_285104211" class="user">火星网友                        </a>
                                                        </div>
                                                        <div class="user-info"><span>31</span>楼 2015/03/05 10:04  </div>
                                                    </div>
                                                </div>
                                                <div class="comment-content" data-emoji-render="true" style="opacity: 1;">
                                                    老师讲的不错。
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment-item comment-emoji" id="cmt_43645_657976_281238914">
                                        <div class="box">
                                            <div class="box-fl">
                                                <div class="icon">
                                                    <a href="#">
                                                        <img src="{{asset('resources/images/comment4.jpg')}}" align="absmiddle" alt="javaniu168" title="javaniu168" class="SmallPortrait" >
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="box-aw">
                                                <div class="box">
                                                    <div class="box-fr ">
                                                        <div class="icon_box box baseline ">


                                                        </div>
                                                    </div>
                                                    <div class="box-aw">
                                                        <div class="user-name">
                                                            <a href="#" name="rpl_281238914" class="user">javaniu168

                                                            </a>
                                                        </div>
                                                        <div class="user-info"><span>30</span>楼 2014/07/24 17:36  </div>
                                                    </div>
                                                </div>
                                                <div class="comment-content" data-emoji-render="true" style="opacity: 1;">
                                                    我想问问一下为什么神经网络的隐含层要加一个bias=1 呢?
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment-item comment-emoji" id="cmt_43645_0_281082347">
                                        <div class="box">
                                            <div class="box-fl">
                                                <div class="icon">
                                                    <a href="javascript:void(0)">
                                                        <img src="{{asset('resources/images/comment5.jpg')}}" align="absmiddle" alt="" title="" class="SmallPortrait" >
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="box-aw">
                                                <div class="box">
                                                    <div class="box-fr ">
                                                        <div class="icon_box box baseline ">


                                                        </div>
                                                    </div>
                                                    <div class="box-aw">
                                                        <div class="user-name">
                                                            <a href="javascript:void(0)" name="rpl_281082347" class="user">深圳网友                        </a>
                                                        </div>
                                                        <div class="user-info"><span>29</span>楼 2014/07/15 16:08  </div>
                                                    </div>
                                                </div>
                                                <div class="comment-content" data-emoji-render="true" style="opacity: 1;">
                                                    我最近实现了bp算法，发现好像不收敛
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment-item comment-emoji" id="cmt_43645_216139_275558638">
                                        <div class="box">
                                            <div class="box-fl">
                                                <div class="icon">
                                                    <a href="#">
                                                        <img src="{{asset('resources/images/comment10.jpg')}}" align="absmiddle" alt="张大鹏" title="张大鹏" class="SmallPortrait" >
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="box-aw">
                                                <div class="box">
                                                    <div class="box-fr ">
                                                        <div class="icon_box box baseline ">


                                                        </div>
                                                    </div>
                                                    <div class="box-aw">
                                                        <div class="user-name">
                                                            <a href="#" name="rpl_275558638" class="user">张大鹏

                                                            </a>
                                                        </div>
                                                        <div class="user-info"><span>23</span>楼 2013/08/30 00:19  </div>
                                                    </div>
                                                </div>
                                                <div class="comment-content" data-emoji-render="true" style="opacity: 1;">
                                                    这两个概念实际上是互相交叉的，例如，卷积神经网络（Convolutional neural networks，简称CNNs）就是一种深度的监督学习下的机器学习模型，而深度置信网（Deep Belief Nets，简称DBNs）就是一种无监督学习下的机器学习模型。
                                                    深度学习的概念源于人工神经网络的研究。含多隐层的多层感知器就是一种深度学习结构。深度学习通过组合低层特征形成更加抽象的高层表示属性类别或特征，以发现数据的分布式特征表示。
                                                    深度学习的概念由Hinton等人于2006年提出。基于深信度网(DBN)提出非监督贪心逐层训练算法，为解决深层结构相关的优化难题带来希望，随后提出多层自动编码器深层结构。此外Lecun等人提出的卷积神经网络是第一个真正多层结构学习算法，它利用空间相对关系减少参数数目以提高训练性能。
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment-item comment-emoji" id="cmt_43645_16298_275574619">
                                        <div class="box">
                                            <div class="box-fl">
                                                <div class="icon">
                                                    <a href="#">
                                                        <img src="{{asset('resources/images/comment9.jpg')}}" align="absmiddle" alt="物以稀为贵" title="物以稀为贵" class="SmallPortrait" >
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="box-aw">
                                                <div class="box">
                                                    <div class="box-fr ">
                                                        <div class="icon_box box baseline ">


                                                        </div>
                                                    </div>
                                                    <div class="box-aw">
                                                        <div class="user-name">
                                                            <a href="#" name="rpl_275574619" class="user">物以稀为贵

                                                            </a>
                                                        </div>
                                                        <div class="user-info"><span>24</span>楼 2013/08/30 22:31  </div>
                                                    </div>
                                                </div>
                                                <div class="comment-content" data-emoji-render="true" style="opacity: 1;">
                                                    求问深度学习和神经网络的区别是什么
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="comment-item comment-emoji" id="cmt_43645_147269_275592113">
                                        <div class="box">
                                            <div class="box-fl">
                                                <div class="icon">
                                                    <a href="#">
                                                        <img src="{{asset('resources/images/comment8.jpg')}}" align="absmiddle" alt="相信你自己" title="相信你自己" class="SmallPortrait" >
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="box-aw">
                                                <div class="box">
                                                    <div class="box-fr ">
                                                        <div class="icon_box box baseline ">


                                                        </div>
                                                    </div>
                                                    <div class="box-aw">
                                                        <div class="user-name">
                                                            <a href="#" name="rpl_275592113" class="user">相信你自己

                                                            </a>
                                                        </div>
                                                        <div class="user-info"><span>25</span>楼 2013/08/31 22:49  </div>
                                                    </div>
                                                </div>
                                                <div class="comment-content" data-emoji-render="true" style="opacity: 1;">
                                                    前面每一层的δ(j)由后一层传过来的δ(j+1)与上一层参数的积和g'(z(j))的点积决定....为什么啊
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment-item comment-emoji" id="cmt_43645_192189_275610555">
                                        <div class="box">
                                            <div class="box-fl">
                                                <div class="icon">
                                                    <a href="#">
                                                        <img src="{{asset('resources/images/comment7.jpg')}}" align="absmiddle" alt="屈超" title="屈超" class="SmallPortrait" >
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="box-aw">
                                                <div class="box">
                                                    <div class="box-fr ">
                                                        <div class="icon_box box baseline ">


                                                        </div>
                                                    </div>
                                                    <div class="box-aw">
                                                        <div class="user-name">
                                                            <a href="#" name="rpl_275610555" class="user">屈超

                                                            </a>
                                                        </div>
                                                        <div class="user-info"><span>26</span>楼 2013/09/02 00:26  </div>
                                                    </div>
                                                </div>
                                                <div class="comment-content" data-emoji-render="true" style="opacity: 1;">
                                                    g是logistic function（sigmod function），g(z)对z求导可以带入求一下，实际上也可以说是ak对zk求导，公式我写在上面了。带入ak就会发现
                                                    \frac{e^{-z}}{(1+e^{-z})^2} = a_k(1-a_k)
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment-item comment-emoji" id="cmt_43645_580330_275966932">
                                        <div class="box">
                                            <div class="box-fl">
                                                <div class="icon">
                                                    <a href="#">
                                                        <img src="{{asset('resources/images/comment6.jpg')}}" align="absmiddle" alt="不知道起什么名字" title="不知道起什么名字" class="SmallPortrait" >
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="box-aw">
                                                <div class="box">
                                                    <div class="box-fr ">
                                                        <div class="icon_box box baseline ">


                                                        </div>
                                                    </div>
                                                    <div class="box-aw">
                                                        <div class="user-name">
                                                            <a href="#" name="rpl_275966932" class="user">不知道起什么名字

                                                            </a>
                                                        </div>
                                                        <div class="user-info"><span>28</span>楼 2013/09/22 15:24  </div>
                                                    </div>
                                                </div>
                                                <div class="comment-content" data-emoji-render="true" style="opacity: 1;">
                                                    g'(z(j))=a(j).*(1-a(j)), 这个导数公式，不知识如何推出来的

                                                    z(j)看起来是 z(j-1)的函数，为什么导数会是这个样子
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment-item comment-emoji" id="cmt_43645_563231_275537402">
                                        <div class="box">
                                            <div class="box-fl">
                                                <div class="icon">
                                                    <a href="#">
                                                        <img src="{{asset('resources/images/comment11.jpg')}}" align="absmiddle" alt="苏生不惑" title="苏生不惑" class="SmallPortrait" >
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="box-aw">
                                                <div class="box">
                                                    <div class="box-fr ">
                                                        <div class="icon_box box baseline ">


                                                        </div>
                                                    </div>
                                                    <div class="box-aw">
                                                        <div class="user-name">
                                                            <a href="#" name="rpl_275537402" class="user">苏生不惑

                                                            </a>
                                                        </div>
                                                        <div class="user-info"><span>22</span>楼 2013/08/28 18:50  </div>
                                                    </div>
                                                </div>
                                                <div class="comment-content" data-emoji-render="true" style="opacity: 1;">
                                                    学到很多
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment-item comment-emoji" id="cmt_43645_592534_275536485">
                                        <div class="box">
                                            <div class="box-fl">
                                                <div class="icon">
                                                    <a href="#">
                                                        <img src="{{asset('resources/images/comment12.jpg')}}" align="absmiddle" alt="wp花园" title="wp花园" class="SmallPortrait" >
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="box-aw">
                                                <div class="box">
                                                    <div class="box-fr ">
                                                        <div class="icon_box box baseline ">


                                                        </div>
                                                    </div>
                                                    <div class="box-aw">
                                                        <div class="user-name">
                                                            <a href="#" name="rpl_275536485" class="user">wp花园

                                                            </a>
                                                        </div>
                                                        <div class="user-info"><span>21</span>楼 2013/08/28 17:33  </div>
                                                    </div>
                                                </div>
                                                <div class="comment-content" data-emoji-render="true" style="opacity: 1;">
                                                    长见识了，对各种算法有了个好的了解
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment-item comment-emoji" id="cmt_43645_240889_275534908">
                                        <div class="box">
                                            <div class="box-fl">
                                                <div class="icon">
                                                    <a href="#">
                                                        <img src="{{asset('resources/images/comment13.jpg')}}" align="absmiddle" alt="廖君" title="廖君" class="SmallPortrait" >
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="box-aw">
                                                <div class="box">
                                                    <div class="box-fr ">
                                                        <div class="icon_box box baseline ">


                                                        </div>
                                                    </div>
                                                    <div class="box-aw">
                                                        <div class="user-name">
                                                            <a href="#" name="rpl_275534908" class="user">廖君

                                                            </a>
                                                        </div>
                                                        <div class="user-info"><span>20</span>楼 2013/08/28 15:22  </div>
                                                    </div>
                                                </div>
                                                <div class="comment-content" data-emoji-render="true" style="opacity: 1;">
                                                    很详细很全面。
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment-item comment-emoji" id="cmt_43645_173684_275534484">
                                        <div class="box">
                                            <div class="box-fl">
                                                <div class="icon">
                                                    <a href="#">
                                                        <img src="{{asset('resources/images/comment14.jpg')}}" align="absmiddle" alt="fotomxq" title="fotomxq" class="SmallPortrait" >
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="box-aw">
                                                <div class="box">
                                                    <div class="box-fr ">
                                                        <div class="icon_box box baseline ">


                                                        </div>
                                                    </div>
                                                    <div class="box-aw">
                                                        <div class="user-name">
                                                            <a href="#" name="rpl_275534484" class="user">fotomxq

                                                            </a>
                                                        </div>
                                                        <div class="user-info"><span>19</span>楼 2013/08/28 14:47  </div>
                                                    </div>
                                                </div>
                                                <div class="comment-content" data-emoji-render="true" style="opacity: 1;">
                                                    学习了，非常不错！
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
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