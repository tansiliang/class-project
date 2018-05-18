$("decoment").ready(function(){
    $("#check_css").click(function(){
            if($("#automatic").is(":checked")){
                $("#automatic").prop("checked",true);//切换状态
                $(this).prop('class','glyphicon glyphicon-ok');
            }else{
                $("#automatic").prop("checked",false);
                $(this).prop("class","");
            } 
    });

    //鼠标移入登录框时更改按钮文字
    $("#login_refer").mouseenter(function(){
        $(this).val("登录");
        // $(this).css({background:'#3EA751',});
    });
    $("#login_refer").mouseleave(function(){
        $(this).val("login");
        // $(this).css({background:'red',});
    });

    $("#content").mouseenter(function(){
        $(this).css({opacity:'1'});
    });
    $("#content").mouseleave(function(){
        $(this).css({opacity:'0.3'});
    });

    //ajax验证验证码
    var values;
    $("#validate").change(function(){
        var captcha = $(this).val();
        $.ajax({
            url:'index.php?p=admin&c=Admin&a=ajaxcapt',
            type:'post',
            data:'validate='+ captcha,
            dataType:'html',
            success:function(obj){
                if(obj == "验证码错误，请重新输入！！！"){
                    alert(obj);
                    values = false;
                    return values;
                }else{
                    values = true;
                    return values;
                }
            }
        });
    });
    
    $("#login_refer").click(function(event){
        var name = $("#ad_username").val();
        var pass = $("#ad_userpass").val();
        var email = $("#ad_email").val();
        // alert(values);
        if(values == false || values == null || pass == "" || email == "" || name == ""){
            event.preventDefault();//阻止表单提交
            // alert(pass,email,name);
            alert("填写信息不正确！！！");
        }else{
            // alert("执行成功！！！");
        }
    });
});