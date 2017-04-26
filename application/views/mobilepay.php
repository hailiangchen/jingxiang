<!DOCTYPE html>

<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="Cache-Control" content="no-cache">
    <meta content="telephone=no" name="format-detection">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=2.0">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no">
    <meta name="keywords" content="#">
    <meta name="description" content="#">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="https://www.3111pay1.com/mobile/index.php#">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="https://www.3111pay1.com/mobile/index.php#">
    <title></title>
    <link href="<?php echo base_url();?>style/mobile/style.css" rel="stylesheet" type="text/css">


    <script type="text/javascript" src="<?php echo base_url();?>style/mobile/jquery18.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>style/mobile/swipe.tryine.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>style/mobile/channel.min.js"></script>
    <script src="<?php echo base_url();?>style/mobile/demo.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){

            $(".scrollleft").imgscroll({
                speed: 40,    //图片滚动速度
                amount: 0,    //图片滚动过渡时间
                width: 1,     //图片滚动步数
                dir: "left"   // "left" 或 "up" 向左或向上滚动
            });

            $(".scrolltop").imgscroll({
                speed: 40,    //图片滚动速度
                amount: 0,    //图片滚动过渡时间
                width: 1,     //图片滚动步数
                dir: "up"   // "left" 或 "up" 向左或向上滚动
            });

        });
    </script>
</head>

<body>
<form id="dinpayRedirect" action="#" method="post" name="dinpayRedirect">

    <div class="header"><img src="<?php echo base_url();?>style/mobile/logo.jpg" alt=""></div>
    <!--焦点图 -->
    <div id="j_imgSwipe" class="swipe" style="visibility: visible;">
        <div class="swipe-wrap" data-sudaclick="imgswipe" style="width: 1260px;">
            <div class="swipe_pic" data-index="0" style="width: 420px; left: 0px; transition-duration: 0ms; transform: translate(0px, 0px) translateZ(0px);"><a href=""><img src="<?php echo base_url();?>style/mobile/banner1.jpg" alt="banner"> </a></div>
            <div class="swipe_pic" data-index="1" style="width: 420px; left: -420px; transition-duration: 0ms; transform: translate(420px, 0px) translateZ(0px);"><a href=""><img src="<?php echo base_url();?>style/mobile/banner2.jpg" alt="banner"> </a></div>
            <div class="swipe_pic" data-index="2" style="width: 420px; left: -840px; transition-duration: 0ms; transform: translate(-420px, 0px) translateZ(0px);"><a href=""><img src="<?php echo base_url();?>style/mobile/banner3.jpg" alt="banner"> </a></div>
        </div>
        <ul class="swipe_num">
            <li class="active"></li>
            <li class=""></li>
            <li class=""></li>
        </ul>
    </div>
    <!--焦点图 -->
    <!--滚动条-->
    <div class="td_f">
        <p class="so_p"><img src="<?php echo base_url();?>style/mobile/pic_1.jpg" alt=""></p>
        <a href="#" title="">
            <div class="scrollleft" style="overflow: hidden; position: relative;">
                <ul style="margin: 0px; padding: 0px; overflow: hidden; position: relative; list-style: none; width: 999px; left: -5px;">
                    <li style="position: relative; overflow: hidden; float: left;">支付流程：输入并确认威尼斯人娱乐城正确的会员账号-输入存款金额-点击确认支付-付款成功后1-10秒自动到账！</li>
                    <li style="position: relative; overflow: hidden; float: left;">支付流程：输入并确认威尼斯人娱乐城正确的会员账号-输入存款金额-点击确认支付-付款成功后1-10秒自动到账！</li>
                    <li style="position: relative; overflow: hidden; float: left;">支付流程：输入并确认威尼斯人娱乐城正确的会员账号-输入存款金额-点击确认支付-付款成功后1-10秒自动到账！</li>
                </ul>
            </div>
        </a>
    </div>
    <!--滚动条-->
    <div style="height: 7px;background-color: #eee; display: flex; "></div>

    <input name="client" id="client_type" type="hidden" value="2">
    <div class="m_at">
        <span class="title">会员账号:</span>
        <div class="content">
            <input type="text" class="select_ipt" name="username" id="username" placeholder="填写您的威尼斯人娱乐城会员账号">
        </div>
    </div>
    <div class="m_at">
        <span class="title">确认账号:</span>
        <div class="content">
            <input type="text" class="select_ipt" name="rusername" id="rusername" placeholder="请再次确认账号">
        </div>
    </div>
    <div class="m_at">
        <span class="title">存款额度:</span>
        <div class="content">
            <input type="text" class="select_ipt" name="coin" id="coin" placeholder="1-50000">
        </div>
    </div>
    <div class="m_at">
        <span class="title">存款时间:</span>
        <div class="content">
            <input type="text" class="select_ipt" style="color: #333;" name="P_Time" id="P_Time" disabled="">
        </div>
    </div>

    <div style="height: 7px;background-color: #eee; display: flex;"></div>
    <div class="m_at">
        <div class="even_pay">
						<span class="title" style="text-align: center;">
							<img style="height: 40px;" src="<?php echo base_url();?>style/mobile/1478161954.jpg" alt="">
						</span>
            <div class="content">
                <span>微信</span><br>
                <em style="color: #999;">电脑端手机扫码使用</em>
                <div class="even_select">
                    <input type="radio" name="channel_id" id="channel_7" data-host="" value="1" checked="" class="regular-radio">
                    <label for="channel_7"></label>
                </div>
            </div>
        </div>
        <div class="even_pay">
						<span class="title" style="text-align: center;">
							<img style="height: 40px;" src="<?php echo base_url();?>style/mobile/1478165175.jpg" alt="">
						</span>
            <div class="content">
                <span>支付宝</span><br>
                <em style="color: #999;">电脑端手机扫码使用</em>
                <div class="even_select">
                    <input type="radio" name="channel_id" id="channel_14" data-host="" value="2" class="regular-radio">
                    <label for="channel_14"></label>
                </div>
            </div>
        </div>

    </div>
    <div style="height: 7px;background-color: #eee; display: flex; "></div>

    <div class="m_at"><a class="even_button" href="javascript:btnOK_zf_onclick();">确认支付</a></div>

    <div style="height: 7px;background-color: #eee; display: flex;"></div>
    <div class="sp_n">
        <span style="font-size: 18px;color: #403a38; display: inline-block;text-align: center; width: 100%;">温馨提示</span>
        <span>1、微信扫码，支付宝，网银和信用卡支付单笔5万元以内。</span><br>
        <span>2、为了避免掉单情况的发生，请您在支付完成后，等待"支付成功"页面跳转出来后再关闭页面，以免掉单。</span><br>
        <span>3、支付未到账？无法支付？请联系<a href="tencent://message/?uin=<?php echo $result->qq1;?>&Site=&Menu=yes" style="color:#f00">【在线客服】</a></span>
    </div>
    <div style="height: 7px;background-color: #eee; display: flex;"></div>
    <div class="foot">Copyright © 威尼斯人娱乐城 版权所有</div>
</form>




<script type="text/javascript">
    function getNowFormatDate() {
        var date = new Date();
        var seperator1 = "-";
        var seperator2 = ":";
        var year = date.getFullYear();
        var month = date.getMonth() + 1;
        var strDate = date.getDate();
        if (month >= 1 && month <= 9) {
            month = "0" + month;
        }
        if (strDate >= 0 && strDate <= 9) {
            strDate = "0" + strDate;
        }
        var currentdate = year + seperator1 + month + seperator1 + strDate
            + " " + date.getHours() + seperator2 + date.getMinutes()
            + seperator2 + date.getSeconds();
        return currentdate;
    }
    $(function(){
        var time = getNowFormatDate();
        $('#P_Time').val(time);
        $(".f_m2 label").click(function(){
            $(this).siblings('input').attr('checked', true);
        })
    })
    function btnOK_zf_onclick(){
        var host = $('input:radio[name=channel_id]:checked').attr('data-host');

        //获取当前目录
        var str = location.href;

        var arr = str.split("/");

        delete arr[arr.length-1];

        var dir = arr.join("/");

        $("#dinpayRedirect").attr("action", "<?php echo base_url();?>mobile/order");

        var channel_id = $('input[name="channel_id"]:checked ').val();

        var username = $("#username").val();
        var rusername = $("#rusername").val();
        var coin = $("#coin").val();
        //var bankco =  $("#bankco").val();
        if(username==null ||username==""){
            alert("[提示]游戏账户不能为空！");
            return false;
        }
        if(username != rusername){
            alert("[提示]两次输入的游戏账户不一致！");
            return false;
        }
        if(isNaN(coin)){
            alert("[提示]存款额度非有效数字！");
            return false;
        }

        if(coin<1){
            alert("[提示]1元以上才能存款！");
            return false;
        }
        if(channel_id==7){
            if(coin>50000){
                alert('[提示]存款金额不能超过50000！');
                return false;
            }
        }
        if(channel_id==14){
            if(coin>10000){
                alert('[提示]存款金额不能超过10000！');
                return false;
            }
        }
        $("#dinpayRedirect").submit();
        return true;
    }
</script></body></html>