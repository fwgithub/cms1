<?php defined('IN_WZ') or exit('No direct script access allowed'); ?><!DOCTYPE html>
<html>
<head lang="zh-CN">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="<?php echo CHARSET;?>">
    <title><?php if(isset($seo_title)) { ?><?php echo $seo_title;?><?php } else { ?><?php echo $siteconfigs['sitename'];?><?php } ?></title>
    <meta name="keywords" content="<?php if(isset($seo_keywords)) { ?><?php echo $seo_keywords;?><?php } ?>">
    <meta name="description" content="<?php if(isset($seo_description)) { ?><?php echo $seo_description;?><?php } ?>">
    <script type="text/javascript" src="<?php echo R;?>t2/js/jquery.min.js"></script>
    <link type="text/css" rel="stylesheet" href="<?php echo R;?>t2/css/bootstrap.css">
    <link type="text/css" rel="stylesheet" href="<?php echo R;?>t2/css/style.css">
    <link type="text/css" rel="stylesheet" href="<?php echo R;?>t2/css/gwstyle.css">
    <script type="text/javascript" src="<?php echo R;?>t2/js/bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo R;?>t2/js/my.js"></script>
    <script type="text/javascript">
        var cookie_pre="<?php echo COOKIE_PRE;?>";var cookie_domain = '<?php echo COOKIE_DOMAIN;?>';var cookie_path = '<?php echo COOKIE_PATH;?>';
    </script>
    <script type="text/javascript" src="<?php echo R;?>js/base.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo R;?>t2/css/style_ie.css" />
    <![endif]-->
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Collect the nav links, forms, and other content for toggling -->
        <ul class="nav navbar-nav">
            <li class="dropdown <?php if(!isset($cid)) { ?>active<?php } ?>" id="c0">
                <a href="<?php echo WEBURL;?>" class="dropdown-toggle">首页</a>
            </li>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {
	echo "<div class=\"visual_div\" pc_action=\"content\" data=\"\"><a href=\"javascript:void(0)\" class=\"visual_edit\">修改</a>";
}
if(!class_exists('content_template_parse')) {
	$content_template_parse = load_class("content_template_parse", "content");
}
if (method_exists($content_template_parse, 'category')) {
	$rs = $content_template_parse->category(array('order'=>'sort ASC','start'=>'0','pagesize'=>'100','page'=>'0',));
	$pages = $content_template_parse->pages;$number = $content_template_parse->number;}?>
            <?php $n=1;if(is_array($rs)) foreach($rs AS $r) { ?>
            <?php if($r['pid']==0 && $r['ismenu']) { ?>
            <li class="dropdown <?php if($elasticid==$r['cid']) { ?>active<?php } ?>" id="c<?php echo $r['cid'];?>">
                <?php if($r['child']) { ?><a href="<?php echo $r['url'];?>" class="dropdown-toggle" data-toggle="dropdown"><?php echo $r['name'];?><span class="caret"></span></a><?php } else { ?><a href="<?php echo $r['url'];?>" ><?php echo $r['name'];?></a><?php } ?>
                <ul class="dropdown-menu" role="menu">
                    <?php $n=1;if(is_array($rs)) foreach($rs AS $rn) { ?>
                    <?php if($rn['pid']==$r['cid']) { ?><li><a href="<?php echo $rn['url'];?>"><?php echo $rn['name'];?></a></li><?php } ?>
                    <?php $n++;}?>
                </ul>
            </li>
            <?php } ?>
            <?php $n++;}?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </ul>
        <ul id="mylogin" class="nav navbar-nav navbar-right">
            <li><a href="<?php echo WEBURL;?>index.php?m=member&v=register">注册</a></li>
            <li><a href="<?php echo WEBURL;?>index.php?m=member&v=login">登录</a></li>
        </ul>
        <ul id="mylogined" class="nav navbar-nav navbar-right hide">
            <li><a href="<?php echo WEBURL;?>index.php?m=member"><span id="myname"></span> [会员中心]</a></li>
            <li><a href="<?php echo WEBURL;?>index.php?m=member&v=logout">退出</a></li>
        </ul>
    </div>
    <!-- /.container-fluid -->
</nav>


