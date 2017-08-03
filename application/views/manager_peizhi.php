<title></title>
</head>
<body>

<div class="page-container">
    <form  class="form form-horizontal" id="peizhiForm">
        <div class="col-xs-8 col-sm-8">
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2">链接一</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input type="text" class="input-text" value="<?php echo $result->mburl1;?>" placeholder="" id="" name="mburl1">
                </div>
            </div>

            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2">链接二</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input type="text" class="input-text" value="<?php echo $result->mburl2;?>" placeholder="" id="" name="mburl2">
                </div>
            </div>

            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2">链接三</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input type="text" class="input-text" value="<?php echo $result->mburl3;?>" placeholder="" id="" name="mburl3">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2">链接四</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input type="text" class="input-text" value="<?php echo $result->mburl4;?>" placeholder="" id="" name="mburl4">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2">免费开户</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input type="text" class="input-text" value="<?php echo $result->openaccount;?>" placeholder="" id="" name="openaccount">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2">客服链接</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input type="text" class="input-text" value="<?php echo $result->service;?>" placeholder="" id="" name="service">
                </div>
            </div>

            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2">充值链接</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input type="text" class="input-text" value="<?php echo $result->topup;?>" placeholder="" id="" name="topup">
                </div>
            </div>


        </div>

        <div class="col-xs-12 col-sm-12">
            <div class="row cl">
                <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">

                    <button onclick="btn_save();" class="btn btn-secondary radius" type="button"><i class="Hui-iconfont"></i> 保存</button>

                </div>
            </div>
        </div>



    </form>
</div>
<script type="text/javascript" src="<?php echo base_url();?>lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>lib/layer/2.1/layer.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>lib/layer/2.1/extend/layer.ext.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>static/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>static/h-ui.admin/js/H-ui.admin.js"></script>
<script>
    function btn_save() {
        $.ajax({
            url:"<?php echo base_url();?>manager/mbsave",
            type:"POST",
            dataType:'json',
            data:$("#peizhiForm").serialize(),
            success:function (data) {

                if(data.result>0)
                {
                    layer.msg('保存成功!',{icon:1,time:1000});
                }
            }
        });
    }
</script>
</body>
</html>