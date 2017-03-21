<title></title>
</head>
<body>
<div class="page-container">
    <form  class="form form-horizontal" id="peizhiForm">
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">本站网址</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo $result[0]->weburl;?>" placeholder="" id="" name="weburl">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">QQ1：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo $result[0]->qq1;?>" placeholder="" id="" name="qq1">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">QQ2：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo $result[0]->qq2;?>" placeholder="" id="" name="qq2">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">六合彩号码</label>
            <div class="formControls col-xs-1 col-sm-2">
                <input type="text" class="input-text" value="<?php echo $result[0]->qishu;?>" placeholder="期号" id="" name="qihao">
            </div>
            <div class="formControls col-xs-7 col-sm-7">
                <input type="text" class="input-text" value="<?php echo $result[0]->liuhecainum;?>" placeholder="1,2,3,4,5,6格式" id="" name="lhcnum">
            </div>
        </div>


        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">重庆时时彩：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <textarea name="cqssc" cols="" rows="10" class="textarea" placeholder="" dragonfly="true" nullmsg=""><?php echo $result[0]->shishicai;?></textarea>

            </div>
        </div>

        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">六合彩：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <textarea name="lhc" cols="" rows="10" class="textarea" placeholder="" dragonfly="true" nullmsg=""><?php echo $result[0]->liuhecai;?></textarea>

            </div>
        </div>

        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">北京赛车：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <textarea name="bjcc" cols="" rows="10" class="textarea" placeholder="" dragonfly="true" nullmsg=""><?php echo $result[0]->beijingcaiche;?></textarea>
            </div>
        </div>
        <div class="row cl">
            <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">

                <button onclick="btn_save();" class="btn btn-secondary radius" type="button"><i class="Hui-iconfont"></i> 保存</button>

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
            url:"<?php echo base_url();?>manager/savepeizhi",
            type:"POST",
            dataType:'json',
            data:$("#peizhiForm").serialize(),
            success:function (data) {

                if(data.code>0)
                {
                    layer.msg('保存成功!',{icon:1,time:1000});
                }
            }
        });
    }
</script>
</body>
</html>