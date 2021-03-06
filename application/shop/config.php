<?php

return [

    'url_route_on' => true,
    'url_route_must'  =>  false,
    //模板参数替换
    'view_replace_str' => array(
        '__js__'   =>'/template/member/default/statisc/js',
        '__css__'   =>'/template/member/default/statisc/css',
        '__img__'   =>'/template/member/default/statisc/img',
        '__font__'   =>'/template/member/default/statisc/font',
        '__lay__'   =>'/template/backmanager/default/statisc/layui',
        '__images__' => '/template/backmanager/default/statisc/img',
        '__CSS__' => '/public/statisc/admin/css',
        '__JS__'  => '/public/statisc/admin/js',
        '__IMG__' => '/public/statisc/admin/images',
        '__CS__'  =>'/public/statisc/css',
        '__JSS__'  =>'/public/statisc/js',
        '__IMAGE__'  =>'/public/statisc/img',
        '__PLUG__'  =>'/public/statisc/plugins',
        '__LAY__'=>'/public/statisc/layui',
        '__LAYCSS__'=>'/public/statisc/layui/css'
    ),
    'template' => [
        // 模板引擎类型 支持 php think 支持扩展
        // 'view_path'    => './application/admin/view/default/',
        'view_path'    => './template/backmanager/default/mall/',
        //'theme_name'   =>'default',
        'theme_name'   =>'',
    ],
    'order_prefix'=>'abcdef',
];
