<title></title>
</head>
<body>
<div class="page-container">
    <form  class="form form-horizontal" method="post" action="<?php echo base_url('manager/uploadfile')?>" name="aliform" enctype="multipart/form-data" id="aliform">
        <div class="col-xs-8 col-sm-8">
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2">支付宝二维码</label>
                <div class="formControls col-xs-6 col-sm-6">
                    <input type="file" class="input-text" value="" placeholder="" id="alifile" name="file">
                    <input type="hidden" name="code" value="2">
                </div>
                <div class="formControls col-xs-2 col-sm-2">
                    <button class="btn btn-secondary radius" type="submit"><i class="Hui-iconfont"></i> 保存</button>
                </div>
            </div>
        </div>
    </form>

    <form  class="form form-horizontal" method="post" action="<?php echo base_url('manager/uploadfile')?>" name="weiform" enctype="multipart/form-data" id="weiform">
        <div class="col-xs-8 col-sm-8">
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2">微信二维码</label>
                <div class="formControls col-xs-6 col-sm-6">
                    <input type="file" class="input-text" value="" placeholder="" id="weifile" name="file">
                    <input type="hidden" name="code" value="1">
                </div>
                <div class="formControls col-xs-2 col-sm-2">
                    <button  class="btn btn-secondary radius" type="submit"><i class="Hui-iconfont"></i> 保存</button>
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

</body>
</html>