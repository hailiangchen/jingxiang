<!DOCTYPE html>

<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>bet365</title>
    <link href="<?php echo base_url();?>style/css/base.css" type="text/css" rel="stylesheet">
    <link href="<?php echo base_url();?>style/css/css.css" type="text/css" rel="stylesheet">

</head>
<body class="b1">
<div class="header">
    <div class="logo">

        <img src="<?php echo base_url();?>style/images/<?php if($result->paytype==1){echo "index1_w.png";}else if($result->paytype==2){ echo "index1_1.png";}?>">
    </div>
</div>
<div class="content_c">

    <img src="<?php echo base_url();if($result->paytype==1){echo $reimg->register1;}else if($result->paytype==2){echo $reimg->register2;}?>" class="x1" style="width: 230px; height: 230px;">

    <span class="span1">￥<?php echo $result->payamount;?></span>
    <img src="<?php echo base_url();?>style/images/index1_3.png">
    <a href=""><div class="btn">完成支付</div></a>
    <br>
    <div>温馨提醒：如有问题，请联系在线QQ客服：<?php echo $reimg->qq1;?></div>
</div>


<div class="footers">
    COPYRIGHT © BET365 RESERVED
</div>



</body></html>