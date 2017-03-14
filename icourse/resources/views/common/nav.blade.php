<nav role="navigation" class="navbar navbar-default" style="font-size:15px !important;">
    <div class="navbar-header" style="margin-right:5%;margin-left:5%;">
        <a href="#"><h4 style="color:gray">iCourse</h4></a>
    </div>
    <div class="collapse navbar-collapse" style="margin-right:5%">
        <ul class="nav navbar-nav" style="margin-right:5%">
            <li class="active">
                <a href="#">首页</a>
            </li>
            <li>
                <a href="{{url('live')}}">直播</a>
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
                    @if($login=='teacher')
                        <a href="{{url('teacher')}}">
                            <span style="font-size: 16px; font-weight: 600;color: black">讲师李伟</span>
                        </a>
                    @else
                        <a href="#">
                            <span style="font-size: 16px; font-weight: 600;color: black">nju软工学徒</span>
                        </a>
                    @endif
                </li>
                <li>
                    <a href="{{url('home')}}">注销</a>
                </li>
            @else
                <li>
                    <a class="theme-login" href="#">登录</a>
                </li>
                <li>
                    <a href="#">注册</a>
                </li>
            @endif
        </ul>
        <form role="search" class="navbar-form navbar-left" action="{{url('search')}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <input name="search" id="search" type="text" placeholder="搜索" class="form-control" style="width: 400px">
            </div>
            <button class="btn btn-default" type="submit">搜索</button>
        </form>
    </div>
</nav>

<div class="theme-popover">
    <div class="theme-poptit">
        <a href="javascript:;" title="关闭" class="close">×</a>
        <h3 style="text-align: center">iCourse</h3>
    </div>
    <div class="theme-popbod dform">
        <form class="theme-signin" name="loginform" action="{{url('login')}}" method="post">
            {{csrf_field()}}

            <ol>
                {{--<li><h4>你必须先登录！</h4></li>--}}
                <li><strong>用户名：</strong><input class="ipt" type="text" name="log" size="30"/></li>
                <li><strong>密码：</strong><input class="ipt" type="password" name="pwd" size="30"/></li>
                <div class="row">
                    <div class="col-lg-2" style="margin-left: 30%">
                        <input class="btn btn-primary" type="submit" name="submit" value=" 登 录 "/>
                    </div>
                </div>
            </ol>
        </form>
    </div>
</div>
<div class="theme-popover-mask"></div>