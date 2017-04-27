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


    <div class="m_at">
        <div class="center">
            <img src="<?php echo base_url();?>style/images/<?php if($result->paytype==1){echo "index1_w.png";}else if($result->paytype==2){ echo "index1_1.png";}?>">
        </div>
    </div>



    <div class="m_at" >
        <div class="center">
            <img src="<?php echo base_url();if($result->paytype==1){echo $reimg->register1;}else if($result->paytype==2){echo $reimg->register2;}?>" style="width: 200px; height: 200px;">
        </div>
    </div>

    <div class="sp_n" style="width: 90%; padding: 10px 5% 10px 5%;">
        <span style="font-size: 18px;color: red; font-weight:bold; display: inline-block;text-align: center; width: 100%;">￥<?php echo $result->payamount;?></span>

        <span class="fonttext">支付时：请添加备注，填写您的会员账号，即可秒到账！</span>
        <div style="clear:both;"></div>
    </div>


    <div style="height: 7px;background-color: #eee; display: flex; "></div>

    <div class="m_at"><a class="even_button" href="javascript:btnOK_zf_onclick();">确认支付</a></div>

    <div style="height: 7px;background-color: #eee; display: flex;"></div>
    <div class="sp_n">
        <span style="font-size: 18px;color: #403a38; display: inline-block;text-align: center; width: 100%;">温馨提示</span>
        <span>1、微信扫码，支付宝，网银和信用卡支付单笔5万元以内。</span><br>
        <span>2、为了避免掉单情况的发生，请您在支付完成后，等待"支付成功"页面跳转出来后再关闭页面，以免掉单。</span><br>
        <span>3、支付未到账？无法支付？请联系<a href="tencent://message/?uin=<?php echo $reimg->qq1;?>&Site=&Menu=yes" style="color:#f00">【在线客服】</a></span>
    </div>
    <div style="height: 7px;background-color: #eee; display: flex;"></div>
    <div class="foot">Copyright © 威尼斯人娱乐城 版权所有</div>
</form>




</body></html>