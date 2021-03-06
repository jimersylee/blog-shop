<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<head>
 
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"<
    <meta name="renderer" content="webkit">
    <title>网吧云平台</title>
	<link rel="shortcut icon" href="/cloud-jimersylee/Public/favicon.ico">
    <!-- CSS文件 -->
    <link href="/cloud-jimersylee/Public/css/bootstrap.min.css" rel="stylesheet">
    <link href="/cloud-jimersylee/Public/css/font-awesome.css" rel="stylesheet">
    <link href="/cloud-jimersylee/Public/css/animate.css" rel="stylesheet">
    <link href="/cloud-jimersylee/Public/css/style.css" rel="stylesheet">
 
</head>
<body class="fixed-sidebar full-height-layout gray-bg">
    <div id="wrapper">
        <!--左侧导航开始-->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="nav-close"><i class="fa fa-times-circle"></i></div>
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
                            <!-- <span><img alt="image" class="img-circle" src="/cloud-jimersylee/Public/img/profile_small.jpg" /></span> -->
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear">
                               <span class="block m-t-xs"><strong class="font-bold"><?php echo session('user_user')?></strong></span>
                                <span class="text-muted text-xs block">超级管理员<b class="caret"></b></span>
                                </span>
                            </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a class="J_menuItem" href="accountSetting">修改资料</a>
                                </li>
                                <li><a class="J_menuItem" href="loginOut">退出登录</a>
                                </li>
                            </ul>
                        </div>
                        <div class="logo-element">H+
                        </div>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-home"></i>
                            <span class="nav-label">首页</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a class="J_menuItem" href="<?php echo U('new/index_v3',array());?>" data-index="0">首页</a>
                                <!--默认主页需在对应的菜单a元素上添加data-index="0"-->
                                
                            </li>
                            
                            
                        </ul>
                    </li>
					<li>
                        <a href="#">
                            <i class="fa fa-home"></i>
                            <span class="nav-label">用户管理</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a class="J_menuItem" href="<?php echo U('new/userView',array());?>">用户查询</a>
                                
                            </li>
                            
                            
                        </ul>
                    </li>
                    <!-- <li>
                        <a href="#">
                            <i class="fa fa-home"></i>
                            <span class="nav-label">日志管理</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a class="J_menuItem" href="<?php echo U('new/logView',array());?>">日志查询</a>
                                
                            </li>
                            
                            
                        </ul>
                    </li> -->
					<li>
                        <a href="#">
                            <i class="fa fa-home"></i>
                            <span class="nav-label">网吧管理</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a class="J_menuItem" href="<?php echo U('new/netbarView',array());?>">网吧列表</a>

                                <!--默认主页需在对应的菜单a元素上添加data-index="0"-->
                            </li>
							<li>
                                <a class="J_menuItem" href="<?php echo U('new/netbarAdd',array());?>">添加网吧</a>

                                <!--默认主页需在对应的菜单a元素上添加data-index="0"-->
                            </li>
							<li>
                                <a class="J_menuItem" href="<?php echo U('new/orderApplyView',array());?>">托管申请记录</a>

                                <!--默认主页需在对应的菜单a元素上添加data-index="0"-->
                            </li>
                            
                            
                        </ul>
                    </li>
					<li>
                        <a href="#">
                            <i class="fa fa-home"></i>
                            <span class="nav-label">系统管理</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a class="J_menuItem" href="<?php echo U('new/accountSetting',array());?>">账号设置</a>
                                
                            </li>
							<!-- <li>
                                <a class="J_menuItem" href="<?php echo U('new/systemSetting',array());?>">系统设置</a>
                                
                            </li> -->
                            
                            
                        </ul>
                    </li>
					<?php echo ($agent); ?>
					<li>
                        <a href="<?php echo U('new/logout',array());?>">
                            <i class="fa fa-home"></i>
                            <span class="nav-label">退出系统</span>
                            <span class="fa arrow"></span>
                        </a>
                        
                    </li>
                </ul>
            </div>
        </nav>
        <!--左侧导航结束-->
        <!--右侧部分开始-->
        <div id="page-wrapper" class="gray-bg dashbard-1">
             <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header"><a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars">导航</i> </a>
                        
                    </div>
					
                    
                </nav>
            </div>
            <div class="row content-tabs">
                <button class="roll-nav roll-left J_tabLeft"><i class="fa fa-angle-double-left"></i>
                </button>
                <nav class="page-tabs J_menuTabs">
                    <div class="page-tabs-content">
                        
                        <a href="javascript:;" class="active J_menuTab" data-id="<?php echo U('new/index_v3',array());?>">首页</a>
                        <!--默认主页需在对应的选项卡a元素上添加data-id="默认主页的url"-->
                    </div>
                </nav>
                <button class="roll-nav roll-right J_tabRight"><i class="fa fa-angle-double-right"></i>
                </button>
 
            </div>
            <div class="row J_mainContent" id="content-main">
                <iframe class="J_iframe" name="iframe0" width="100%" height="100%" src="<?php echo U('new/index_v3',array());?>" frameborder="0" data-id="<?php echo U('new/index_v3',array());?>" seamless></iframe>
                <!--默认主页需在对应的页面显示iframe元素上添加name="iframe0"和data-id="默认主页的url"-->
            </div>
            <div class="footer">
                <div class="pull-right">© 2015-2016 <a href="http://www.yibaikeji.com" target="_blank">杭州依佰科技有限公司</a>
                </div>
            </div>
        </div>
        <!--右侧部分结束-->
    </div>
 
    <!-- 全局js -->
    <script src="/cloud-jimersylee/Public/js/jquery.min.js?v=2.1.4"></script>
    <script src="/cloud-jimersylee/Public/js/bootstrap.min.js?v=3.3.6"></script>
    <script src="/cloud-jimersylee/Public/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="/cloud-jimersylee/Public/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="/cloud-jimersylee/Public/js/plugins/layer/layer.min.js"></script>
 
    <!-- 自定义js -->
    <script src="/cloud-jimersylee/Public/js/hplus.js?v=4.1.0"></script>
    <script type="text/javascript" src="/cloud-jimersylee/Public/js/contabs.js"></script>
 
    <!-- 第三方插件 -->
    <script src="/cloud-jimersylee/Public/js/plugins/pace/pace.min.js"></script>
 
</body>