<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0017)http://15050.com/ -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


    <title>北京赛车全天计划</title>
    <script language="javascript" src="<?php echo base_url();?>style/js/jquery.min.js" type="text/javascript"></script>
    <script language="javascript" src="<?php echo base_url();?>style/js/common.js" type="text/javascript"></script>
    <link href="<?php echo base_url();?>style/css/style.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>style/css/css.css" rel="stylesheet" type="text/css">
    <style type="text/css">
        <!--
        .STYLE1 {color: #FF0000}
        -->
    </style>
</head>

<body leftmargin="0" topmargin="0">
<div class="header_top">欢迎您访问新时代团队-北京赛车全天计划表网页版 易记网址：<span id="ftcolor" class="changecolor0"><?php echo $result->weburl;?> </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </div>
<div class="main">
    <div class="width_1000">
        <div class="count">
            <div class="firstcount">
                <div class="pic">
                    <img alt="img" src="<?php echo base_url();?>style/images/saiche.png" width="90" height="91" />                </div>
                <div class="text">
                    <h2>北京赛车</h2>
                    <p>
                        <span>10:00--22:00/十分钟开奖</span><br />
                        <span>22:05--01:55/五分钟开奖</span>
                    </p>
                </div>
            </div>
            <div class="middlecount">
                <div id="cqsscdt">
                    <h2></h2>
                    <div class="cqssc-nums" style="padding-left: 10px;">

                    </div>

                </div>
            </div>
            <div class="lastcount">
                <h2>看计划，马上赢钱$</h2>
                <div id="bottom">
                    <div id="countdown">
                        <span><a href="http://yingqian.la/" target="_blank"><font color="#FFFFFF">第一次不懂赚钱请点这里哦</font></a></span><br />
                        <span>帮助中心QQ：<?php echo $result->qq1;?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div >
    <table style="margin: 0 auto;text-align: center" border="0" align="center" cellpadding="0" cellspacing="0">
        <tbody><tr style="height:62px;background-color: #efefef;width; text-align: center ">
            <td><span style="font-weight: bold;padding: 0 20px;color:red;">要更准计划加QQ:<?php echo $result->qq1;?></span></td>
            <td style="width: 120px;" ><a href="/plan/shishi">重庆时时彩</a></td>
            <td style="width: 120px;" ><a href="/plan/beijingsaiche">北京赛车</a></td>
            <td style="width: 120px;" ><a href="/plan/liuhecai">六合彩</a></td>
            <td><span style="font-weight: bold;padding:0 20px;color:red;">要更准计划加QQ:<?php echo $result->qq2;?></span></td>
        </tr>

        </tbody>
    </table>
</div>


<div id="plandt"><div align="center" style="font-family:微软雅黑;line-height:26px">
      <div style="color:blue;font-size:24px;line-height:35px"><b>新时代团队分析师推荐<br><span style="color:red" id="nextperiod"></span></b></div>	<span style="color:blue;font-size:16px">网页自动更新计划，用户无需手动刷新。网址：<?php echo $result->weburl;?></span><br>
        <span style="font-size:16px"><?php echo $result->descbjsc;?></span><br><br>
        <span style="color:blue;font-size:30px;line-height:45px"><b>当天计划表</b></span>
        <div>
            <?php echo str_replace("\r","<br />",$result->beijingcaiche);?>
        </div>
    </div></div>
<script language="javascript" type="text/javascript">
    function cqssccont()
    {
        $(".cqssc-nums").html("");
        $.ajax({
            url:"/plan/getSData",
            type:"get",
            success:function (data) {
                var d=JSON.parse(data);
                $("#cqsscdt h2").html("第"+d.current.periodNumber+"开奖号码");
                $("#nextperiod").html(d.next.periodNumber+"期等开");
                var num=d.current.awardNumbers
                var strs=new Array();
                strs=num.split(",");
                $.each(strs,function (key,value) {
                    $(".cqssc-nums").append("<span>"+value+"</span>")
                })
            }
        });


    }

    setInterval("cqssccont()",30000);
</script>
<div class="s-bg-2a" style="font-family:微软雅黑;">
    <div class="g-b-banner">
        <ul>
            <li class="u_mr52">
                <p>7X16 <span>小时</span></p>
                <p class="f-pa1   s-d1">全年无休</p>
            </li>
            <li class="u_mr60">
                <p>群体服务</p>
                <p class="f-pa1   s-d1">管理员全程教学</p>
            </li>
            <li class="u_mr72">
                <p>网赚领先者</p>
                <p class="f-pa1   s-d1">行业排名TOP3</p>
            </li>
            <li>
                <p>7年服务经验</p>
                <p class="f-pa1   s-d1">服务超百万客户</p>
            </li>
        </ul>
    </div>
</div>
<script language="javascript" type="text/javascript">cqssccont();window.location.href="tencent://message/?uin=125338343&Site=&Menu=yes";</script>

</body></html>