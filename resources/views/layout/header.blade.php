@section('header')
<div id="dcHead">
    <div id="head">
        <div class="logo">
            <a href="{:U(GROUP_NAME.'/Main/index')}">
                <div style="width: 178px;height: 40px;background-image: url('{{ URL::asset('/') }}main/images/logo.png');background-size:cover;"></div>
            </a>
        </div>
        <div class="nav">
            <ul>
                <li class="M">
                    <a href="JavaScript:void(0);" class="topAdd">新建</a>
                    <div class="drop mTopad">
                        <a href="{:U(GROUP_NAME.'/Article/add')}">文章</a>
                        <a href="{:U(GROUP_NAME.'/Article/addcat')}">文章分类</a>
                        <!--<a href="{:U(GROUP_NAME.'/link/add')}">友情链接</a>-->
                        <a href="{:U(GROUP_NAME.'/Admin/add')}">管理员</a>
                    </div>
                </li>
                <li><a href="<somnus:sitecfg name='siteurl' />" target="_blank">查看站点</a></li>
                <li><a href="{:U(GROUP_NAME.'/Main/clearcache')}">清除缓存</a></li>
                <li><a href="http://help.somnus.in" target="_blank">帮助</a></li>
            </ul>

            <ul class="navRight">
                <li class="M noLeft">
                    <a href="JavaScript:void(0);">您好,Admin </a>
                    <div class="drop mUser">
                        <a href="{:U(GROUP_NAME.'/Admin/chagemypass')}">修改密码</a>
                    </div>
                </li>
                <li class="noRight">
                    <a href="{:U(GROUP_NAME.'/Index/logout')}">退出</a>
                </li>
            </ul>
        </div>
    </div>
</div>
@show