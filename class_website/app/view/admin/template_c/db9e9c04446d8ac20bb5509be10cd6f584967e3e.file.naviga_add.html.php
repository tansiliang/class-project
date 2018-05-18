<?php /* Smarty version Smarty-3.1.14, created on 2018-04-29 12:39:19
         compiled from "F:\PHPStudy\WWW\16jsjgj\class_website\app\view\admin\naviga_add.html" */ ?>
<?php /*%%SmartyHeaderCode:133635ae3d3bbaf8182-07482950%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db9e9c04446d8ac20bb5509be10cd6f584967e3e' => 
    array (
      0 => 'F:\\PHPStudy\\WWW\\16jsjgj\\class_website\\app\\view\\admin\\naviga_add.html',
      1 => 1524976753,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '133635ae3d3bbaf8182-07482950',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ae3d3bbb26f92_59284013',
  'variables' => 
  array (
    'list' => 0,
    'row' => 0,
    'opt' => 0,
    'sel' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae3d3bbb26f92_59284013')) {function content_5ae3d3bbb26f92_59284013($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_radios')) include 'F:\\PHPStudy\\WWW\\16jsjgj\\class_website\\framework\\libs\\plugins\\function.html_radios.php';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./app/view/admin/styles/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <script src="./app/view/admin/js/jquery-3.3.1/jquery-3.3.1.min.js"></script>
    <script src="./app/view/admin/styles/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <title>添加分类导航</title>
    <style>
        .table tbody tr td,.table tfoot tr td{
            background:#F2F9FD;
            text-align:center;
            vertical-align:middle;
        }
        .table-bordered thead tr th,.table-bordered tbody tr td{
            border-bottom-width: 0;
            border:1px solid #B5CFD9;
        }
        #username ,#pass,#userpass,#email{
            color:red;
        }
    </style>
    <script type="text/javascript">
        $("deocument").ready(function(){
            var values;
            var name = $("#naviga_name").val();
            var url = $("#naviga_url").val();
            if(name == ""){
                $("#username").text("导航名不能为空！！！");
            }
            //导航地址
            if(url == ""){
                $("#pass").text("导航地址不能为空！！！");
            }
            $("#naviga_name").keyup(function(){
                var name = $("#naviga_name").val();
                $.ajax({
                    url:"index.php?p=admin&c=Naviga&a=ajaxaddname",
                    data:"naviga_name="+name,
                    type:"post",
                    dataType:"html",
                    success:function(info){
                        if(info == "导航名已经存在！！！"){
                            $("#username").text(info);
                            values = false;
                            return values;
                        }else{
                            $("#username").html(info);
                            values = true;
                            return values;
                        }
                    }
                });
            });
            $("#naviga_url").keyup(function(){
                var url = $("#naviga_url").val();
                if(url != ""){
                    $("#pass").html("<img src='./app/view/admin/images/yes.gif' />");
                    values = true;
                    return values;
                }else{
                    $("#pass").text("导航地址不能为空！！！");
                    values = false;
                    return values;
                }
            });
            $("form").submit(function(e){
                var name = $("#naviga_name").val();
                var url = $("#naviga_url").val();
                if(values == false || name == "" || url == ""){
                    e.preventDefault();
                    alert("填写信息不符合,请更改不符合的信息！！！");
                }
            });
        });
    </script>
</head>
<body>
        <table class="table table-bordered">
                <form action="index.php?p=admin&c=Naviga&a=add" method="post">
                <tbody>
                    <tr>
                        <td>导航名</td>
                        <td><input type="text" placeholder="请输入导航名" class="form-control" name="naviga_name" id="naviga_name" /></td>
                        <td id="username"></td>
                    </tr>
                    <tr>
                        <td>导航分类</td>
                        <td class="form-group">
                            <select name="naviga_parent" class="form-control">
                                <option value="0">顶级分类</option>
                                <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['naviga_id'];?>
"><?php echo str_repeat("&nbsp;&nbsp;&nbsp;",$_smarty_tpl->tpl_vars['row']->value['dree']);?>
<?php echo $_smarty_tpl->tpl_vars['row']->value['naviga_name'];?>
</option>
                                <?php } ?>
                            </select>
                        </td>
                        <td id=""></td>
                    </tr>
                    <tr>
                        <td>导航地址</td>
                        <td><input type="text" class="form-control" placeholder="请输入导航地址" name="naviga_url" id="naviga_url" /></td>
                        <td id="pass"></td>
                    </tr>
                    <tr>
                        <td>是否显示</td>
                        <td><?php echo smarty_function_html_radios(array('options'=>$_smarty_tpl->tpl_vars['opt']->value,'name'=>'naviga_bar','selected'=>$_smarty_tpl->tpl_vars['sel']->value),$_smarty_tpl);?>
</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>调整顺序</td>
                        <td><input type="text" name="naviga_order" id="naviga_order" value="1" class="form-control" /></td>
                        <td></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="3"><button type="reset" class="btn btn-danger" name="ad_ap_res" id="ad_ap_res" >重置</button><span style="width:10px;display:inline-block;"></span><button class="btn btn-success" type="submit" name="ad_ap_sub" id="ad_ap_sub">创建</button></td>
                    </tr>
                </tfoot>
                </form>
            </table>
</body>
</html><?php }} ?>