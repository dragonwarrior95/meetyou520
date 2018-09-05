<?php
/**
 * Created by PhpStorm.
 * User: dragon
 * Date: 2018/7/8
 * Time: 14:37
 */

namespace frontend\controllers\api;

use yii\web\Controller;


class AjaxController extends Controller
{
    public function actionIndex()
    {
        echo 'curl/index======================='."\n";
        $url=$_POST['video_url'];
        echo 'url: ' .$url;
//        $url = 'https://www.iqiyi.com/v_19rqzez984.html#curid=1301876200_762c06344bc9d2c37ae896897b67bc58';
        $this->getTitle($url);
        //$url = 'http://www.beipy.com/';//url链接地址
        echo $this->getTitle($url);
//        return $this->render('index');
    }

    public function getTitle($url){
        $header = array('user-agent:'.$_SERVER['HTTP_USER_AGENT']);
        $data = $this->curl_https($url);
        preg_match('/<title>(.*)<\/title>/', $data, $matches);
        return $matches[1];
    }

    /** curl 获取 https 请求
     * @param String $url        请求的url
     * @param Array  $data       要發送的數據
     * @param Array  $header     请求时发送的header
     * @param int    $timeout    超时时间，默认30s
     */
    public function curl_https($url, $data=array(), $header=array(), $timeout=30){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // 跳过证书检查
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);  // 从证书中检查SSL加密算法是否存在
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        //curl_setopt($ch, CURLOPT_POST, true);
        //curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);
        $response = curl_exec($ch);
        if($error=curl_error($ch)){
            die($error);
        }
        curl_close($ch);
        return $response;
    }
}