
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script type="text/javascript">

        var oWidth = document.documentElement.clientWidth || document.body.clientWidth;



        if(oWidth <= 1024){

            window.location.href = "../mb/index"

        }

        window.addEventListener("orientationchange", function() {

            var oWidth = document.documentElement.clientWidth || document.body.clientWidth;

            if(oWidth <= 1024){

                window.location.href = "../mb/index"

            }

        }, false);

        window.addEventListener("resize", function() {

            var oWidth = document.documentElement.clientWidth || document.body.clientWidth;

            if(oWidth <= 1024){

                window.location.href = "../mb/index"

            }

        }, false);

    </script>




    <meta name="renderer" content="webkit">
    <title><?php echo $web->title;?></title>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>style/reset.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>style/style.css">
    <script type="text/javascript" src="<?php echo base_url();?>style/uaredirect.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>style/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>style/float.js"></script>
    <script type="text/javascript">
        function copyUrl2(i)
        {
            var ids = "biao"+i;
            var Url2=document.getElementById(ids);
            Url2.select(); // 选择对象
            document.execCommand("Copy"); // 执行浏览器复制命令
            alert("已复制好，可贴粘。");
        }
    </script>
    <style type="text/css">
        <!--
        .STYLE3 {color: #CCFFCC}
        .STYLE4 {color: #66FF00}
        -->
    </style>
</head>
<body style="">
<div class="header">
    <div class="w1000">

        <a href="/" class="logo">
            <object type="application/x-shockwave-flash" id="logo-flash" onmousedown="menu_url(1);" data="./style/ilog.png" width="492" height="90">
                <param name="wmode" value="transparent">
                <param name="quality" value="high">
            </object>
        </a>

        <div class="headright">
        </div>
    </div>
</div>

<div class="xlmain w1000">
    <div class="mainleft">
        <p><b>通用网址</b>温馨提示：MS值越小,打开网站速度越快,越排前的网址越快！</p>
        <p id="site1_peed" style="display:none">

        </p>
        <p id="site2_peed" style="display:none">&nbsp;</p>
        <form class="formclass" name="autof" onsubmit="return false;">
            <script type="text/javascript">
                var autourl = new Array()
                <?php foreach ($result as $key=>$item) {?>
                autourl[<?php echo $key+1; ?>] = '<?php echo $item->pcurl;?>';

                <?php }?>
                for (var i = 1; i <= 9; i++) {
                    document.write("<div class='list'><input name='txt" + i + "' type='text' class='input1' value='测试中...'/><div class='img'><img src='./style/images/jiantou.png'/></div><input name='url" + i + "' type='text' id='biao"+i+"' class='input2' value='" + autourl[i] + "'/><a id='click_url_" + i + "' href='" + autourl[i] + "' class='open' target='_blank'>进入网站</a><input class='open_co' id='click_url_" + i + "' href='" + autourl[i] + "' onclick='copyUrl2("+i+");' value='点击复制网址'></input></div>");
                }
                function auto(url) {

                    document.forms['autof']["url" + b].value = url;
                    document.getElementById('click_url_' + b).href = url;

                    if (tim > 200) {
                        document.forms['autof']["txt" + b].value = "链接超时";
                    } else {
                        document.forms['autof']["txt" + b].value = tim * 10 + "ms";
                    }
                    b++;
                }
                function execAuto() {
                    tim = 1;
                    b = 1;
                    var html2str = '';
                    document.getElementById("site1_peed").innerHTML = html2str;
                    for (var i = 1; i < autourl.length; i++) {
                        html2str = html2str + "<img src='" + autourl[i] + "?" + "' width='1' height='1' onerror=\"auto('" + autourl[i] + "');\" style='display:none'>";
                    }
                    document.getElementById("site1_peed").innerHTML = html2str;
                }
                setInterval("tim++", 100);
                execAuto();
            </script>

        </form>

        <input type="submit" value="" class="sub" onclick="javascript:execAuto();execAuto2();" onfocus="this.blur()">

    </div>
    <div class="mainright">
        <div class="info">
            <p>检测后还不能登录,请按以下操作:<br>打开IE浏览器，选择：工具-&gt; Internet选项-&gt; 在选择 (删除历史浏览记录)-&gt; 删除-&gt; 重启IE<br><br>如果打开本公司出现跳转到其他网站的情况，请点击查看：<a href="/" target="_blank" class="STYLE3">在线教程</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://15595.com/fjc.zip" class="STYLE4">反劫持软件及教程</a><br>
                <br>

                如果您是出现视频卡，请在您的游戏页面右下角点击"摄像头"的小图标，选择一个新线路使用试试：<br>
                <img src="./style/images/img.jpg" height="67" width="199" style="margin-top: 8px;"></p>
            <a target="_blank" href="<?php echo $web->kefu;?>" class="lianxi">7X24小时在线客服</a>
            <p style="line-height: 24px;margin-top: 8px;">如果以上方式仍未解决您的问题，请联系官方线路人员远程协助您。</p>
            <a href="/"><img src="./style/images/exclusive.png" class="exclusive"></a>
        </div>
    </div>
</div>
<div class="footer">
    <div class="w1000">
        <div class="copyright">Copyright © <?php echo $web->webname;?> 版权所有 Reserved </div>
    </div>
</div>


<div id="floatService2" style="margin-top: 30px; width: 124px; text-align: center; position: absolute; z-index: 1000; top: 150px; right: 5px;">
    <a href="<?php echo $web->kefu;?>" target="_blank"><img src="./style/images/kefu-r_01.png"></a>
    <a href="<?php echo $web->kefu;?>" target="_blank"><img src="./style/images/kefu-r_02.png"></a>
    <a href="javascript:void(0)" id="closefloatDownLoad2"><img src="./style/images/kefu-r_03.png"></a>
</div>
<script type="text/javascript">
    $("#floatService2").show().Float({ floatRight: 1 });
    $("#closefloatDownLoad2").click(function () { $("#floatService2").hide();});
</script>

<!--右侧浮动图片-->


</body></html>