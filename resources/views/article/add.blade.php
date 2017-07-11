@extends('layout')
@section('c')
    <h3>
        <a href="{{url('article/article')}}" class="actionBtn">
            文章列表
        </a>
        添加文章
    </h3>
    <form action="{:U(GROUP_NAME.'/Article/add')}" method="post">
        <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
            <tr>
                <td width="90" align="right">文章名称</td>
                <td>
                    <input type="text" name="title" value="" size="80" class="inpMain" />
                </td>
            </tr>
            <tr>
                <td align="right">文章分类</td>
                <td>
                    <select name="cid">
                        <option value="0"> 请选择...</option>
                        <volist name="catlist" id="vo">
                            <option value="{$vo.id}" > {$vo.name}</option>
                        </volist>
                    </select>
                </td>
            </tr>

            <tr>
                <td align="right">缩略图</td>
                <td>
                    <input type="text" name="thumbnail" id="thumbnail" value="" size="30" class="inpMain" />
                    <button id="Upload_img" class="btn" type="button">上传</button>
                    <div style="display: none;">
                        <input id="imgFile" type="file" name="imgFile" style="display: none;">
                    </div>
                    <div id="res_show_img" style="display: none;"></div>
                </td>
            </tr>
            <tr>
                <td align="right">排序</td>
                <td>
                    <input type="text" name="sort" value="99" size="15" class="inpMain" />
                </td>
            </tr>
            <tr>
                <td align="right">关键字</td>
                <td>
                    <input type="text" name="keywords" value="" size="50" class="inpMain" />
                </td>
            </tr>
            <tr>
                <td align="right">简单描述</td>
                <td>
                    <textarea name="description" cols="60" rows="4" class="textArea"></textarea>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input name="submit" class="btn" type="submit" value="提交" />
                </td>
            </tr>
        </table>
    </form>
    <script>
        //上传缩略图
        $(function (){
            //如果有图片就显示
            if($("#thumbnail").val() != '' && $("#thumbnail").val() != null){
                $("#res_show_img").show();
                $("#res_show_img").html('<img src="'+$("#thumbnail").val()+'" width="150px">');
            }

            $("#Upload_img").click(function (){
                $("#show_Img").html('');
                $("#show_Img").css('display','none');
                $("#imgFile").click();
            });
            $("#imgFile").change(function(){
                $("#Upload_img").html('上传中...');
                var tmp_path = $("#imgFile").val();
                if(tmp_path != '' && tmp_path != null){
                    var pic = $('#imgFile')[0].files[0];
                    var fd = new FormData();
                    fd.append('imgFile', pic);
                    $.ajax({
                        url:"__PUBLIC__/main/js/kindeditor/php/upload_json.php",
                        type:"post",
                        dataType:'json',
                        data: fd,
                        cache: false,
                        contentType: false,
                        processData: false,
                        success:function(data){
                            if(data && data.error == '0'){
                                $("#res_show_img").show();
                                var imgurl = data.url;
                                $("#res_show_img").html('<img src="'+imgurl+'" width="150px">');
                                $("#thumbnail").val(imgurl);
                                layer.msg('上传成功');
                            }else{
                                layer.msg('上传出错了...');
                            }
                            $("#Upload_img").html('重新上传');
                        },
                        error:function (){
                            $("#Upload_img").html('重新上传');
                        }
                    });
                }
            });
        });
    </script>

@stop