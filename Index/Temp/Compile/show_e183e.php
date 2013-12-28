<?php if(!defined("HDPHP_PATH"))exit;C("DEBUG_SHOW",false);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Dzero</title>
	<link rel="stylesheet" type="text/css" href="" />
	<link href="http://localhost/houdunwang/hdphp/hdphp/Extend/Org/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"><script src="http://localhost/houdunwang/hdphp/hdphp/Extend/Org/bootstrap/js/bootstrap.min.js"></script>
  <!--[if lte IE 6]>
  <link rel="stylesheet" type="text/css" href="http://localhost/houdunwang/hdphp/hdphp/Extend/Org/bootstrap/ie6/css/bootstrap-ie6.css">
  <![endif]-->
  <!--[if lte IE 7]>
  <link rel="stylesheet" type="text/css" href="http://localhost/houdunwang/hdphp/hdphp/Extend/Org/bootstrap/ie6/css/ie.css">
  <![endif]-->
</head>
<body>
<div><?php echo $page;?></div>
<a href="http://localhost/houdunwang/Dzero/index.php/News/add" class="btn btn-primary">发表文章</a>
<table class="table table-bordered">
	<tr>
		<th>ID</th>
		<th>标题</th>
		<th>操作</th>
	</tr>
	<?php if(is_array($news)):?><?php  foreach($news as $v){ ?>
	<tr>
		<td><?php echo $v['id'];?></td>
		<td><?php echo $v['title'];?></td>
		<td><a href="" class="btn btn-success">查看</a></td>
	</tr>
	<?php }?><?php endif;?>
</table>
<div style="text-align:center;"><?php echo $page;?></div>
</body>
</html>