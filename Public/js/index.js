
//内容切换选项卡
$('#tabs').tabs({
    fit:true,
    border:false,
    onContextMenu:function(e,title,index)
    {
        e.preventDefault();

        var menu = $('#menu');
        var _this = this;

        //右击弹出菜单
        menu.menu('show',{
            top: e.pageY,
            left: e.pageX
        });

        //将起始页禁用关闭
        if(index == 0)
        {
            menu.menu('disableItem',$('.closecur')[0])
        }else{
            menu.menu('enableItem',$('.closecur')[0])
        }

        //三个关闭方法
        menu.menu({
           onClick:function(item)
           {
               var tablist = $(_this).tabs('tabs');

               switch (item.text)
               {
                   case '关闭':
                       $(_this).tabs('close',index);
                       break;

                   case '关闭所有':
                       for(var i = tablist.length;i > 0;i--)
                       {
                           $(_this).tabs('close',i);
                       }
                       break;

                   case '关闭其他所有':
                       for(var i = tablist.length;i > 0;i--)
                       {
                           if(i != index)
                           {
                               $(_this).tabs('close',i);
                           }
                       }
                       $(_this).tabs('select',1);
                       break;
               }
           }
        });
    }
});

//左侧树形导航
$('#tree').tree({
    url : ThinkPHP['MODULE'] + '/Index/getTree',
    lines:true,
    animate:true,
    onClick:function(node)
    {
        var tabs = $('#tabs');

        //判断是否有链接
        if(node.url)
        {
            //判断是否打开标签页
            if(tabs.tabs('exists',node.text))
            {
                tabs.tabs('select',node.text)
            }else{
                //添加选项卡
                tabs.tabs('add',{
                    title:node.text,
                    closable:true,
                    iconCls:node.iconCls,
                    href:ThinkPHP['MODULE'] + '/' + node.url
                });
            }
        }
    }
});