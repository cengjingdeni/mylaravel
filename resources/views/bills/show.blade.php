@extends('layout')
@section('c')
    <h3>
        还款列表
    </h3>
    <div class="filter">
        <form action="{:U(GROUP_NAME.'/Bills/index')}" method="post">
            <input name="keyword" type="text" class="inpMain" value="{$keyword}" size="20" />
            <input name="submit" class="btnGray" type="submit" value="筛选" />
        </form>
    </div>
    <div id="list">
        <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
            <tr>
                <th width="50" align="center">ID</th>
                <th width="150" align="center">订单号</th>
                <th width="120" align="center">用户名</th>
                <th width="100">还款金额</th>
                <th width="150" align="center">还款日期</th>
                <th align="center">操作</th>
            </tr>
            <volist name="list" id="vo">
                <tr>
                    <td align="center">{$vo.id}</td>
                    <td align="center">{$vo.ordernum}</td>
                    <td align="center">{$vo.user}</td>
                    <td align="center">{$vo.money}</td>
                    <td align="center">{$vo.addtime|date='Y-m-d',###}</td>
                    <td align="center">
                        <a href="javascript:del('{$vo.ordernum}','{:U(GROUP_NAME.'/Bills/del',array('id'=>$vo['id']))}');">删除订单</a>
                    </td>
                </tr>
            </volist>
        </table>
    </div>
    <div class="clear"></div>
    <div class="pager">
        {$page}
    </div>
    </div>
    <script>
        function del(num,jumpurl){
            layer.confirm(
                    '确定要删除还款订单:'+num+'吗?',
                    function (){
                        window.location.href = jumpurl;
                    }
            );
        }
    </script>
@stop