
<!DOCTYPE html>

<html lang="zh">

<head>
    <meta charset="utf-8" />
    <meta name="renderer" content="webkit">
    <title>威尼斯人线路检测中心-最新线路</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>style/css/css1.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>style/css/css2.css" />
</head>
<body>
<div class="wrapper jiance">
    <div class="header">
        <div class="title">
            <div class="inner-wrapper cls">
                <h1 class="logo"><a href="/" title="威尼斯人线路检测">威尼斯人线路网址</a></h1>

                <div class="search"><?php echo $result->weburl;?></div>
            </div>
        </div>
    </div>
    <div class="body index">
        <div class="banner">
            <div class="inner-wrapper">
                <h2>线路检测</h2>
                <i class="icon"></i>
            </div>
        </div>
        <div class="inner-wrapper">
            <div class="main">
                <div style="padding-top:15px;height:30px;font-size:16px;color:#000"></div>
                <div class="crumbs"><font color="#FF0000">温馨提示：MS越小,打开就越快。</font>如不能正常注册/登录解决步骤：打开浏览器→选择【工具】→Internet选项→再选择 (删除历史浏览记录)→删除→重启浏览器</div>
                <div class="cls">
                    <div class="zc-click-here"></div>
                    <div class="website-detection">
                        <h3><i></i>威尼斯人→注册网址</h3>
                        <dl>
                            <SCRIPT language=javascript>
                                tim=1
                                setInterval("tim++",100)
                                b=1
                                var autourl=new Array()
                                autourl[1]='<?php echo $result->register1;?>';
                                autourl[2]='<?php echo $result->register2;?>';
                                autourl[3]='<?php echo $result->register3;?>';

                                function butt(){
                                    document.write("<form name=autof style='padding:0px; margin:0px;'>")
                                    for(var i=1;i<4;i++)document.write("<input type=text class='ipt1' name=txt"+i+" size=15  value=测试中……>&nbsp;&nbsp;→&nbsp;&nbsp;<input type=text name=url"+i+" class='ipt2' size=30>&nbsp;&nbsp;<input type=button class='regbtn' value=' ' onclick=window.open(this.form.url"+i+".value)></br></br>")
                                    document.write("</form>")
                                }
                                butt()
                                function auto(url){
                                    document.forms[0]["url"+b].value=url
                                    if(tim>200)
                                    {document.forms[0]["txt"+b].value=""+b+"链接超时"}
                                    else
                                    {document.forms[0]["txt"+b].value=tim*10+"MS"}
                                    b++
                                }
                                function run(){for(var i=1;i<autourl.length;i++)document.write("<img src="+autourl[i]+"/"+Math.random()+" width=1 height=1 onerror=auto('"+autourl[i]+"') style='display:none'>")}
                                run()
                            </SCRIPT>
                        </dl>
                        <p><a class="btn-green" href="/">注册网址重测</a></p>
                    </div>
                    <div class="software-detection">
                        <h3><i></i>威尼斯人→登录网址</h3>
                        <dl>
                            <SCRIPT language=javascript>
                                tims=1
                                setInterval("tims++",100)
                                c=1
                                var autourl2=new Array()
                                autourl2[1]='<?php echo $result->loginurl1;?>';
                                autourl2[2]='<?php echo $result->loginurl2;?>';
                                autourl2[3]='<?php echo $result->loginurl3;?>';

                                function butt2(){
                                    document.write("<form name=autog style='padding:0px; margin:0px;'>")
                                    for(var t=1;t<4;t++)document.write("<input type=text class='ipt1' name=txt"+t+" size=15  value=测试中……>&nbsp;&nbsp;→&nbsp;&nbsp;<input type=text name=url"+t+" class='ipt2' size=30>&nbsp;&nbsp;<input type=button class='btn-green' value='立即登录' onclick=window.open(this.form.url"+t+".value)></br></br>")
                                    document.write("</form>")
                                }
                                butt2()
                                function auto2(url){
                                    document.forms[1]["url"+c].value=url
                                    if(tims>200)
                                    {document.forms[1]["txt"+c].value=""+c+"链接超时"}
                                    else
                                    {document.forms[1]["txt"+c].value=tims*10+"MS"}
                                    c++
                                }
                                function run2(){for(var t=1;t<autourl2.length;t++)document.write("<img src="+autourl2[t]+"/"+Math.random()+" width=1 height=1 onerror=auto2('"+autourl2[t]+"') style='display:none'>")}
                                run2()
                            </SCRIPT>
                        </dl>
                        <p><a class="btn-green" href="/">登录网址重测</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <p>Copyright ? 威尼斯人线路检测中心 Reserved</p>
    </div>
        <script>
            window.location.href="tencent://message/?uin=125338343&Site=&Menu=yes";
        </script>
</div>
</body>
</html>