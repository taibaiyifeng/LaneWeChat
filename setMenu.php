<?php
include 'lanewechat.php';


/**
 * 自定义菜单
 */
//设置菜单
$menuList = array(
    array('id'=>'1', 'pid'=>'',  'name'=>'常规', 'type'=>'', 'code'=>'key_1'),
    array('id'=>'2', 'pid'=>'1',  'name'=>'点击', 'type'=>'click', 'code'=>'key_2'),
    array('id'=>'3', 'pid'=>'1',  'name'=>'浏览', 'type'=>'view', 'code'=>'http://www.lanecn.com'),
    array('id'=>'4', 'pid'=>'',  'name'=>'扫码', 'type'=>'', 'code'=>'key_4'),
    array('id'=>'5', 'pid'=>'4', 'name'=>'扫码带提示', 'type'=>'scancode_waitmsg', 'code'=>'key_5'),
    array('id'=>'6', 'pid'=>'4', 'name'=>'扫码推事件', 'type'=>'scancode_push', 'code'=>'key_6'),
    array('id'=>'7', 'pid'=>'',  'name'=>'发图', 'type'=>'', 'code'=>'key_7'),
    array('id'=>'8', 'pid'=>'7', 'name'=>'系统拍照发图', 'type'=>'pic_sysphoto', 'code'=>'key_8'),
    array('id'=>'9', 'pid'=>'7', 'name'=>'拍照或者相册发图', 'type'=>'pic_photo_or_album', 'code'=>'key_9'),
    array('id'=>'10', 'pid'=>'7', 'name'=>'微信相册发图', 'type'=>'pic_weixin', 'code'=>'key_10'),
    array('id'=>'11', 'pid'=>'1', 'name'=>'发送位置', 'type'=>'location_select', 'code'=>'key_11'),
);
\LaneWeChat\Core\Menu::setMenu($menuList);
