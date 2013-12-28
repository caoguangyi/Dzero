<?php if(!defined("HDPHP_PATH"))exit;C("DEBUG_SHOW",false);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Dzero</title>
	<link rel="stylesheet" type="text/css" href="" />
	<script type='text/javascript' src='http://localhost/houdunwang/hdphp/hdphp/Extend/Org/Jquery/jquery-1.8.2.min.js'></script>
<script src="http://localhost/houdunwang/hdphp/hdphp/Extend/Org/hdui/js/lhgcalendar.min.js"></script>
<link href='http://localhost/houdunwang/hdphp/hdphp/Extend/Org/hdui/css/hdui.css' rel='stylesheet' media='screen'>
<script src='http://localhost/houdunwang/hdphp/hdphp/Extend/Org/hdui/js/hdui.js'></script>
<script type='text/javascript'>
		HOST = 'http://localhost';
		ROOT = 'http://localhost/houdunwang/Dzero';
		WEB = 'http://localhost/houdunwang/Dzero/index.php';
		URL = 'http://localhost/houdunwang/Dzero/index.php/News/add';
		HDPHP = 'http://localhost/houdunwang/hdphp/hdphp';
		HDPHPDATA = 'http://localhost/houdunwang/hdphp/hdphp/Data';
		HDPHPTPL = 'http://localhost/houdunwang/hdphp/hdphp/Lib/Tpl';
		HDPHPEXTEND = 'http://localhost/houdunwang/hdphp/hdphp/Extend';
		APP = 'http://localhost/houdunwang/Dzero/index.php';
		CONTROL = 'http://localhost/houdunwang/Dzero/index.php/News';
		METH = 'http://localhost/houdunwang/Dzero/index.php/News/add';
		TPL = 'http://localhost/houdunwang/Dzero/Index/Tpl';
		CONTROLTPL = 'http://localhost/houdunwang/Dzero/Index/Tpl/News';
		STATIC = 'http://localhost/houdunwang/Dzero/Index/Tpl/Static';
		PUBLIC = 'http://localhost/houdunwang/Dzero/Index/Tpl/Public';
		COMMON = 'http://localhost/houdunwang/Dzero/Common';
</script>
</head>
<body>
<form action="http://localhost/houdunwang/Dzero/index.php/News/add" method="post">
	<table class="table1">
		<tr>
			<td>标题</td>
			<td><input type="text" name="title" /></td>
		</tr>
		<tr>
			<td>标题</td>
			<td><script charset="utf-8" src="http://localhost/houdunwang/hdphp/hdphp/Extend/Org/Editor/Keditor/kindeditor-all-min.js"></script>
            <script charset="utf-8" src="http://localhost/houdunwang/hdphp/hdphp/Extend/Org/Editor/Keditor/lang/zh_CN.js"></script>
        <textarea id="hd_content" name="content"></textarea>
    <script>
        var options_content = {
        filterMode : false
                ,id : "editor_id"
        ,width : "300px"
        ,height:"200px"
                ,formatUploadUrl:false
        ,allowFileManager:false
        ,allowImageUpload:true
        ,uploadJson : "http://localhost/houdunwang/Dzero/index.php/News&m=keditor_upload&editor_type=2&Image=1&uploadsize=2000000&maximagewidth=false&maximageheight=false&hdsid=gvkbe6d817u928acss0p8ondv5"//处理上传脚本
        };var hd_content;
        KindEditor.ready(function(K) {
                    hd_content = KindEditor.create("#hd_content",options_content);
        });
        </script>
        </td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" class="btn1"/></td>
		</tr>
	</table>
	
</form>
</body>
</html>