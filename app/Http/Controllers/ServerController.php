<?php
/**
 *
 * @description :微信服务通讯
 * @author      :游川江<youcj@duocai.cn>
 * @copyright   :Copyright © 2016-2017
 * @datetime    :2016/4/30 0030 18:25
 *
 */
namespace App\Http\Controllers;

class ServerController extends Controller{

    /**
     * 处理微信的请求消息
     *
     * @return string
     */
    public function serve()
    {
        $wechat = app('wechat');
        $wechat->server->setMessageHandler(function($message){
            return "测试回复";
        });

        return $wechat->server->serve();
    }
}