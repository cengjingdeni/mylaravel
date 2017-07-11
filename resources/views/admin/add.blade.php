@extends('layout')
@section('c')
    <h3>
        <a href="{{url('admin/user')}}" class="actionBtn">返回列表</a>
        管理员添加
    </h3>
    <form action="{:U(GROUP_NAME.'/Admin/add')}" method="post">
        <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
            <tr>
                <td width="100" align="right">管理员名称</td>
                <td>
                    <input type="text" value="" name="username" size="40" class="inpMain" />
                </td>
            </tr>
            <tr>
                <td align="right">密码</td>
                <td>
                    <input type="password" name="password" size="40" class="inpMain" />
                </td>
            </tr>
            <tr>
                <td align="right">确认密码</td>
                <td>
                    <input type="password" name="password_confirm" size="40" class="inpMain" />
                </td>
            </tr>
            <tr>
                <td align="right">状态</td>
                <td>
                    <label>
                        <input type="radio" name="status" value="0"  >
                        禁止
                    </label>

                    <label>
                        <input type="radio" name="status" value="1" checked>
                        正常
                    </label>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="submit" class="btn" value="提交" />
                </td>
            </tr>
        </table>
    </form>
@stop