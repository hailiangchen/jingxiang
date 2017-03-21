
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>重庆彩开奖结果</title>
    <link href="<?php echo base_url();?>style/css/style.css" rel="stylesheet" />
    <script language="javascript" src="<?php echo base_url();?>style/js/jquery.min.js" type="text/javascript"></script>
</head>

<body>
<div class="main">
    <div class="width_1000">
        <div class="count">
            <div class="firstcount">
                <div class="pic">
                    <img alt="img" src="<?php echo base_url();?>style/images/sscb.png" width="90" height="91" />                </div>
                <div class="text">
                    <h2>重庆彩</h2>
                    <p>
                        <span>10:00--22:00/十分钟开奖</span><br />
                        <span>22:05--01:55/五分钟开奖</span>
                    </p>
                </div>
            </div>
            <div class="middlecount">
                <div id="cqsscdt"></div>
            </div>
            <div class="lastcount">
                <h2>看计划，马上赢钱$</h2>
                <div id="bottom">
                    <div id="countdown">
                        <span><a href="http://yingqian.la/" target="_blank"><font color="#FFFFFF">第一次不懂赚钱请点这里哦~~</font></a></span><br />
                        <span>帮助中心QQ：123456789</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="NewNumbers"></div>
<script language="javascript" type="text/javascript">


    function cqssccont()
    {

       var htmlobj=$.ajax({url:"/plan/getData",async:false});
        if(htmlobj.responseText!="0")
        {
            $("#cqsscdt").css("display","");
            $("#cqsscdt").html(htmlobj.responseText);
        }
    }

    setInterval("cqssccont()",10000);
    //setInterval("getif()",10000);

</script>
<div id="NewNumbers"></div>
<script language="javascript" type="text/javascript">cqssccont();</script>
</body>
</html>