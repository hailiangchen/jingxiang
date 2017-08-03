<title></title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i>   <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">

    <div class="cl pd-5 bg-1 bk-gray mt-20">

   <a href="javascript:;" onclick="add()" class="btn btn-primary radius"> 添加</a>

        <div class="formControls col-xs-6 col-sm-6">
            <input type="text" class="input-text" value="" placeholder="添加网站链接" id="pcurl" name="pcurl">
        </div>
    </div>

    <div class="mt-20">
        <table class="table table-border table-bordered table-bg table-hover table-sort">
            <thead>
            <tr class="text-c">

                <th width="80">ID</th>
                <th>链接</th>
                <th width="100">操作</th>

            </tr>
            </thead>
            <tbody>
            <?php foreach ($result?$result:array() as $item){?>
                <tr class="text-c">
                    <td><?php echo $item->id;?></td>
                    <td><?php echo $item->pcurl;?></td>
                    <td>
                        <a href="javascript:;" onclick="datadel(<?php echo $item->id;?>)" class="btn btn-danger radius"><i class="Hui-iconfont"></i> 删除</a>
                    </td>

                </tr>
            <?php }?>

            </tbody>
        </table>
    </div>
</div>
<script type="text/javascript" src="<?php echo base_url();?>lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>lib/layer/2.1/layer.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>static/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>static/h-ui.admin/js/H-ui.admin.js"></script>
<script type="text/javascript">
    $('.table-sort').dataTable({
        "aaSorting": [[ 1, "desc" ]],//默认第几个排序
        "bStateSave": true,//状态保存
        "aoColumnDefs": [
            //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
            {"orderable":false,"aTargets":[0]}// 不参与排序的列
        ]
    });

    function add() {
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url();?>manager/addpcurl',
            data:{"pcurl":$("#pcurl").val()},
            dataType: 'json',
            success: function(data){
                if(data.result>0)
                {
                    layer.msg('已添加!',{icon:1,time:1000});
                }
                location.reload();
            },
            error:function(data) {

            },
        });
    }
    
    function datadel(obj){
        layer.confirm('确认要删除吗？',function(index){
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url();?>manager/delpcurl',
                data:{"id":obj},
                dataType: 'json',
                success: function(data){
                    if(data.result>0)
                    {
                        layer.msg('已删除!',{icon:1,time:1000});
                    }
                    location.reload();
                },
                error:function(data) {

                },
            });
        });
    }

</script>
</body>
</html>