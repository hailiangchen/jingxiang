
<!DOCTYPE html>

<html lang="zh">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="generator" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link href="<?php echo base_url();?>style/css/pc.css" rel="stylesheet" type="text/css">
    <link href="" rel="shortcut icon" type="image/x-icon">

    <script src="<?php echo base_url();?>style/js/jquery18.js" type="text/javascript" charset="utf-8"></script>
    <script src="<?php echo base_url();?>style/js/uaredirect.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript" charset="utf-8">uaredirect("<?php echo base_url();?>moblie/index");</script>
</head>
<body>
<form id="payorder" action="#" method="post" name="payorder">
    <div class="header">
        <div class="logo">
            <img src="<?php echo base_url();?>style/images/logo.png" align="">
        </div>
        <div class="online-service">
            <img src="<?php echo base_url();?>style/images/header_04.png" align="">
        </div>
    </div>
    <div class="content">
        <a href="tencent://message/?uin=<?php echo $result->qq1;?>&Site=&Menu=yes"  class="service">在线客服</a>

        <h2>
            支持【<span style="color: #ff0000;">手机端</span>、<span style="color:#000cff;">电脑端</span>】<span style="color:#05a11f">【微信扫码】</span>、
            <span style="color:#fa00d4">【支付宝】</span>、【<span style="color: #ff0000;">手机网银、信用卡</span>】在线支付最高单笔5万元！
        </h2>

        <h2><span style="color:#fa00d4">手机也可以支付</span>，浏览器输入网址： <span style="color:#000cff;"><?php echo $result->weburl;?></span> 进行支付，支付成功
            <span style="color: #ff0000;">3s</span>自动到账!<br>


            <div class="bd">
                <ul class="ul-list">
                    <li><a href="<?php echo $result->loginurl1;?>" target="_blank" title="线路1"><img src="<?php echo base_url();?>style/images/logo1.png">线路1</a>
                        <!--<i class="hot-1"></i>-->
                    </li>
                    <li><a href="<?php echo $result->loginurl2;?>" target="_blank" title="线路2"><img src="<?php echo base_url();?>style/images/logo1.png">线路2</a>
                    </li>
                    <li><a href="<?php echo $result->loginurl3;?>" target="_blank" title="线路3"><img src="<?php echo base_url();?>style/images/logo1.png">线路3</a>

                    </li>
                    <li><a href="<?php echo $result->register3;?>" target="_blank" title="线路4"><img src="<?php echo base_url();?>style/images/logo1.png">线路4</a>


                </ul>
            </div>
            <table class="content-table">
                <tbody><tr>
                    <td class="title">会员账号：</td>
                    <td class="inputtd">
                        <input name="client" id="client_type" type="hidden" value="1">
                        <input name="username" id="username" type="text" value="" class="table-input" placeholder="请填写威尼斯人娱乐城会员账户">
                    </td>
                    <td align="center" style="color: #e60012;">*必填</td>
                </tr>
                <tr>
                    <td class="title">确认账号：</td>
                    <td>
                        <input name="reusername" id="reusername" type="text" value="" class="table-input" placeholder="请确认会员账户是否正确，否则无法充值">
                    </td>
                    <td align="center" style="color: #e60012;">*必填</td>
                </tr>
                <tr>
                    <td class="title">支付类型：</td>
                    <td style="padding: 0px 15px;">


                        <label class="pay-label">
                            <input type="radio" name="channelid" class="regular-radio" data-host="" value="1" checked="">
                            <label></label>



                            <img src="<?php echo base_url();?>style/images/1478161954.jpg" alt="" style="height: 40px; width: auto; display: inline-block; position: relative;">
                            <span style="font-size: 20px; height: 36px; display: inline-block; position: relative;">
							微信						</span>
                        </label>

                        <label class="pay-label">
                            <input type="radio" name="channelid" class="regular-radio" data-host="" value="2">
                            <label></label>



                            <img src="<?php echo base_url();?>style/images/1478165175.jpg" alt="" style="height: 40px; width: auto; display: inline-block; position: relative;">
                            <span style="font-size: 20px; height: 36px; display: inline-block; position: relative;">
							支付宝						</span>
                        </label>



                    </td>
                    <td align="center" style="color: #e60012;">*必选</td>
                </tr>
                <tr>
                    <td class="title">确认额度：</td>
                    <td>
                        <input type="text" name="amount" id="amount" class="table-input" placeholder="微信、支付宝1-50000元">
                    </td>
                    <td align="center" style="color: #e60012;">*必填</td>
                </tr>

                <tr>
                    <td class="title">存款时间：</td>
                    <td>
                        <input name="paytime" id="paytime" type="text" value="" class="table-input" disabled="">
                    </td>
                    <td align="center">无需填写</td>
                </tr>
                </tbody></table>
            <div class="form-btn">
                <a href="javascript:btnOK_zf_onclick();">确认支付</a>
            </div>
            <p class="tips">
                <span style="color:#f00;">温馨提示：</span>为了避免掉单情况的发生，请您在支付完成后，需等"支付成功"页面跳转出来, 再关闭页面，以免掉单！感谢配合！！！
                <br>支付成功后，若3分钟内未能及时到达您的会员账号请联系

                <a href="tencent://message/?uin=<?php echo $result->qq1;?>&Site=&Menu=yes" style="color:#f00">【在线客服】</a> 咨询；

                <br>威尼斯人娱乐城祝您游戏愉快，盈利多多！O(∩_∩)O　　 </p>

        </h2></div>
    <div class="copyright">
        COPYRIGHT @ 威尼斯人娱乐城 RESERVED
    </div>
</form>






<script type="text/javascript">
    function getNowFormatDate() {
        var date = new Date();
        var seperator1 = "-";
        var seperator2 = ":";
        var year = date.getFullYear();
        var month = date.getMonth() + 1;
        var strDate = date.getDate();
        if ( month >= 1 && month <= 9 ) {
            month = "0" + month;
        }
        if ( strDate >= 0 && strDate <= 9 ) {
            strDate = "0" + strDate;
        }
        var currentdate = year + seperator1 + month + seperator1 + strDate +
            " " + date.getHours() + seperator2 + date.getMinutes() +
            seperator2 + date.getSeconds();
        return currentdate;
    }
    $(function () {
        var time = getNowFormatDate();
        $('#paytime').val( time );

        $( ".pay-label label" ).click( function () {
            $( this ).siblings( 'input' ).attr( 'checked', true );
        } )
    });

    function btnOK_zf_onclick() {
        var host = $( 'input:radio[name=channelid]:checked' ).attr( 'data-host' );
        //    $("#dinpayRedirect").attr("action", host+"/pay.php");

        //获取当前目录
        var str = location.href;

        var arr = str.split( "/" );

        delete arr[ arr.length - 1 ];

        var dir = arr.join( "/" );

        //alert(dir);

        $( "#payorder" ).attr( "action", "<?php echo base_url();?>payorder/order" );

        var username = $( "#username" ).val();
        var reusername = $( "#reusername" ).val();
        var amount = $( "#amount" ).val();

        var channelid = $( 'input[name="channelid"]:checked ' ).val();

        //var bankco =  $("#bankco").val();
        if ( username == null || username == "" ) {
            alert( "[提示]游戏账户不能为空！" );
            return ;
        }
        if ( username != reusername ) {
            alert( "[提示]两次输入的游戏账户不一致！" );
            return ;
        }
        if ( isNaN(amount) ) {
            alert( "[提示]存款额度非有效数字！" );
            return ;
        }

        if ( amount < 1 ) {
            alert( "[提示]1元以上才能存款！" );
            return ;
        }

        /**
         var arr = coin.toString().split(".");

         if(!(arr.length==2&&arr[1].length==2&&arr[1]%10!=0)){
			alert("[提示]支付金额必须为2位小数才能存款,如：88.08元！");
			return ;
		}
         **/
        if(channelid==7){
            if(amount>50000){
                alert('[提示]存款金额不能超过50000！');
                return ;
            }
        }
        if(channelid==14){
            if(amount>10000){
                alert('[提示]存款金额不能超过10000！');
                return ;
            }
        }
        $( "#payorder" ).submit();
        return ;
    }
</script>


</body>
</html>