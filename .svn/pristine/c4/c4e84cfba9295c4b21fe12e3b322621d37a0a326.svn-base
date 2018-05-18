    $(document).ready(function () {
        var s=0;
        /*点赞*/
        $("#zan").click(function(){
            ++s;
            if(s%2 != 0){
                var ss = parseInt($("#zan_num").text()) + 1;
                $("#zan_num").empty().append(ss);
                $("#zan").css("color","red");
                $("#zan1").empty().text("取消赞");
                return s;
                }else{
                    var ss = parseInt($("#zan_num").text())-1;
                    $("#zan_num").empty().append(ss);
                    $("#zan").css("color", "#000");
                    $("#zan1").empty().text("赞");
                    return s;
                }
        });

        /*回复*/
        $("#hf").mouseover(function(){
            $("#huifu2").css({
                "display":"block"
                // "padding": "5px"    
            });
            $("#huifu2 a").css("color","red");
        });
        $("#hf").mouseout(function () {
            $("#huifu2").css({
                "display": "none",
            });
        });

        /*模态框*/
        $('#myModal').on('shown.bs.modal', function (e) {
            $('#modal_text').focus(); //通过ID找到对应输入框，让其获得焦点
        });

        /*-----------------右div点赞收藏  
                                        需优化------------------*/
        $(function(){
                var s = 0;
            $("#btn_xh").click(function(){
                ++s;
                if(s%2 != 0){
                    $(this).find("span").css("color","red");
                    // $(this).empty().text("取消喜欢").css("color","red");
                }else{
                        $(this).find("span").css("color", "");
                    // $(this).empty().text("喜欢").prepend("<span></span>").addClass("glyphicon glyphicon-heart").css({"color":"white","marginLeft":"2px"});
                }
                
            });
        });
        $(function () {
            var s = 0;
            $("#btn_sc").click(function () {
                ++s;
                if (s % 2 != 0) {
                    $(this).find("span").css("color", "red");
                } else {
                    $(this).find("span").css("color", "");
                }
            });
        });
        /*------------------------------------*/

        $("#btn_fx").mouseover(function(){
                $("#click_fx").show();
            });
            $("#btn_fx").mouseout(function () {
            $("#click_fx").hide();
        });

        /*右侧菜单*/
        $("#nav_fixed").hide();
        //alert($(window).scrollTop());
        //当滚动条的位置处于距顶部50像素以下时，跳转链接出现，否则消失
        $(window).scroll(function () {
            if ($(window).scrollTop() > 50) {
                $("#nav_fixed").fadeIn();
            }else{
                $("#nav_fixed").fadeOut();
                 }
        });
        $("#top").click(function () {
            $('html ,body').animate({ scrollTop: 0 }, 300);
            return false;
        });
        $("#weixin").mouseover(function () {
            $(".qr_img").css("display", "block");
        });
        $("#weixin").mouseout(function () {
            $(".qr_img").css("display", "none");
        });
        $("#qq").mouseover(function () {
            $(".qr_img2").css("display", "block");
        });
        $("#qq").mouseout(function () {
            $(".qr_img2").css("display", "none");
        });
    });