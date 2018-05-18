<?php /* Smarty version Smarty-3.1.14, created on 2018-05-12 09:38:10
         compiled from "F:\PHPStudy\WWW\16jsjgj\class_website\app\view\admin\naviga_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:126955ae52ace4306e0-11431051%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b026fb909aea322624f86490962a6c1309c3455' => 
    array (
      0 => 'F:\\PHPStudy\\WWW\\16jsjgj\\class_website\\app\\view\\admin\\naviga_edit.html',
      1 => 1524978172,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '126955ae52ace4306e0-11431051',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ae52ace46b065_65420084',
  'variables' => 
  array (
    'list' => 0,
    'link' => 0,
    'row' => 0,
    'show' => 0,
    'sel' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae52ace46b065_65420084')) {function content_5ae52ace46b065_65420084($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_radios')) include 'F:\\PHPStudy\\WWW\\16jsjgj\\class_website\\framework\\libs\\plugins\\function.html_radios.php';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./app/view/admin/styles/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <script src="./app/view/admin/js/jquery-3.3.1/jquery-3.3.1.min.js"></script>
    <script src="./app/view/admin/styles/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <title>导航编辑页面</title>
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
        #name ,#pass,#order,#url,#old,#salt{
            color:red;
        }
        </style>
        <script>
            $("document").ready(function(){
                /**
                 * 判断当前的导航名信息
                 */
                 var values = true;
                $("#naviga_name").keyup(function(){
                    var name = $("#naviga_name").val();
                    if(name == ""){
                        $("#name").text("修改的导航名不能为空！！！");
                        values = false;
                        return values;
                    }
                    $.ajax({
                        url: "index.php?p=admin&c=Naviga&a=ajaxedit",
                        data:"naviga_name="+name+"&id=<?php echo $_smarty_tpl->tpl_vars['list']->value['naviga_id'];?>
",
                        type:"post",
                        dataType:"html",
                        success:function(info){
                            if(info == "更改的导航名已经存在！！！"){
                                $("#name").text(info);
                                values = false;
                                return values;
                            }else{
                                $("#name").html(info);
                                values = true;
                                return values;
                            }
                        }
                    });
                });
                /**
                 * 判断当前的url信息是否为空
                 */
                 $("#naviga_url").keyup(function(){
                     var url = $(this).val();
                     if(url == ""){
                         $("#url").text("修改的URL不能为空！！！");
                         values = false;
                         return values;
                     }else{
                        $("#url").html("<img src='./app/view/admin/images/yes.gif' />");
                        values = true;
                        return values;
                     }
                 });

                 $("form").submit(function(e){
                    var name = $("#naviga_name").val();
                    var url = $("#naviga_url");
                    if(values == false || values == null || name == "" || url == ""){
                        e.preventDefault();
                        alert("填写信息不符合,请更改不符合的信息！！！");
                    }
                 });
            });
        </script>
</head>
<body>
    <table class="table table-bordered">
        <form action="index.php?p=admin&c=Naviga&a=edit" method="post">
            <thead>
                <tr>
                    <th colspan="3"><button type="button" onclick="location.href='index.php?p=admin&c=Naviga&a=list'" class="btn btn-info"><span class="glyphicon glyphicon-list-alt" style="font-size:10px;margin-right:2px;"></span>管理员列表</button></th>
                </tr>
            </thead>
        <tbody>
            <tr>
                <td>导航名</td>
                <td><input type="" placeholder="" class="form-control" name="naviga_name" id="naviga_name" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['naviga_name'];?>
" /></td>
                <td id="name"></td>
            </tr>
            <tr>
                <td>URL地址</td>
                <td><input type="text" class="form-control"  name="naviga_url" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['naviga_url'];?>
" id="naviga_url" /></td>
                <td id="url"></td>
            </tr>
            <tr>
                <td>当前分类</td>
                <td>
                    <select name="naviga_parent" class="form-control">
                        <option value="0">顶级分类</option>
                        <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['link']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['naviga_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['naviga_id']==$_smarty_tpl->tpl_vars['list']->value['naviga_parent']){?>selected<?php }?> ><?php echo str_repeat("&nbsp;&nbsp;&nbsp;",$_smarty_tpl->tpl_vars['row']->value['dree']);?>
<?php echo $_smarty_tpl->tpl_vars['row']->value['naviga_name'];?>
</option>
                        <?php } ?>
                    </select>
                </td>
                <td id="parent"></td>
            </tr>
            <tr>
                <td>是否显示</td>
                <td><?php echo smarty_function_html_radios(array('options'=>$_smarty_tpl->tpl_vars['show']->value,'selected'=>$_smarty_tpl->tpl_vars['sel']->value,'name'=>'naviga_bar'),$_smarty_tpl);?>
</td>
                <td id="show"></td>
            </tr>
            <tr>
                <td>排序</td>
                <td><input type="text" class="form-control" placeholder="" name="naviga_order" id="naviga_order" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['naviga_order'];?>
" /></td>
                <td id="order"></td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['naviga_id'];?>
" name="naviga_id" id="naviga_id" />
                <td colspan="3"><button type="reset" class="btn btn-danger" name="naviga_ap_res" id="naviga_ap_res" >重置</button><span style="width:10px;display:inline-block;"></span><button class="btn btn-success" type="submit" name="naviga_ap_sub" id="naviga_ap_sub" >修改</button></td>
            </tr>
        </tfoot>
        </form>
    </table>
</body>
</html><?php }} ?>