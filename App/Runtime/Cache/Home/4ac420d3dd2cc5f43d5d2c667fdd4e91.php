<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <title>CRM客户关系管理系统</title>
    <link rel="stylesheet" href="/CRM/Public/easyui/themes/bootstrap/easyui.css">
    <link rel="stylesheet" href="/CRM/Public/easyui/themes/icon.css">
    <link rel="stylesheet" href="/CRM/Public/css/index.css">
    <script type="text/javascript">
        var ThinkPHP = {
            'MODULE' : '/CRM/Home'
        };
    </script>
</head>
<body class="easyui-layout">

<!--系统头部-->
<div data-options="region:'north',split:true,border:false" class="layout-north">
    <div class="logo">
        <img src="/CRM/Public/img/logo.png" alt="CRM客户关系管理器">
    </div>
    <div class="info">
        退出
    </div>
</div>

<!--系统左侧菜单-->
<div data-options="region:'west',split:true,title:'导航',iconCls:'icon-world'" class="layout-west">
    <div id="tree"></div>
</div>

<!--系统主体部分-->
<div data-options="region:'center'" class="layout-center">
    <div id="tabs">
        <div title="起始页" iconCls="icon-house">
            <p>欢迎来到CRM客户关系管理系统！</p>
        </div>
    </div>
</div>

<!--系统底部-->
<div data-options="region:'south',split:true" class="layout-south">
    @2009-2016 俱乐部. Powered by ThinkPHP and EasyUI.
</div>

<div id="menu" class="easyui-menu">
    <div class="closecur">关闭</div>
    <div class="closeall">关闭所有</div>
    <div class="closeother" iconCls="icon-cross">关闭其他所有</div>
</div>

<script type="text/javascript" src="/CRM/Public/easyui/jquery.min.js"></script>
<script type="text/javascript" src="/CRM/Public/easyui/jquery.easyui.min.js"></script>
<script type="text/javascript" src="/CRM/Public/easyui/locale/easyui-lang-zh_CN.js"></script>
<script type="text/javascript" src="/CRM/Public/js/index.js"></script>
</body>
</html>