<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/15 0015
 * Time: 下午 15:47
 */

namespace AppBundle\EventListener;

use AppBundle\Service\TranslatorService;
use AppBundle\Util\Redis;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;

class RequestListener
{
    public function onKernelRequest(GetResponseEvent $event)
    {
        global $kernel;
        $request = $event->getRequest();
        $IBID=$request->get('IBID')?:'';
        if($IBID){$request->getSession()->set('IBID',$IBID);$request->getSession()->save();}
        $lang=$request->getSession()->get('lang');
        if(empty($lang)){$lang='cn';$request->getSession()->set('lang','cn');$request->getSession()->save();}
        $kernel->getContainer()->get('translator')->setLocale($lang);
        $request->setLocale($lang);
        $request->setDefaultLocale($lang);
        if(! $this->checkURIIsLogin($request->getPathInfo())  ) {
            $session_userInfo = $request->getSession()->get('userInfo');
            $redisuserdata=Redis::instance()->get(isset($session_userInfo['accessToken'])?$session_userInfo['accessToken']:'');
            $session_id_sign=$request->getSession()->get('SESSION_ID_SIGN');
            $session_chk_sign=md5(session_id().md5(date('Ymd')).$_SERVER['REMOTE_ADDR']);
            if (empty($redisuserdata) || $session_chk_sign !=$session_id_sign){
                $request->getSession()->remove('userInfo');
                $request->getSession()->remove('SESSION_ID_SIGN');
                $request->getSession()->save();
                header('Location: /user/index');exit;
            }
        }
    }
    private function checkURIIsLogin($uri){
        return true;
        $notrights=['/test','/user/index','/messages/trans/read','/messages/trans','/lang/setting','/member/login','/captcha/getCaptcha','/captcha/window','/form/register_real',
        '/email/reset/pass','/analog/login','/form/register_demo','/register/account/demo','/v/verify/email','/form/register_agent_q','/user/email/update/pass','/upload/image',
        '/user/send/email','/register/account/info','/form/register_agent','/register/account/agent/g','/register/account/agent','/guest/book','/audit/not/info','/user/eliminate/cache',
        '/user/config/delete','/uploader/document/{year}/{month}/{day}/{filename}'];

        if(substr($uri,0,6)=='/_wdt/' || substr($uri,0,4)=='/js/'|| substr($uri,0,5)=='/css/' || substr($uri,0,17)=='/uploader/images/' || substr($uri,0,19)=='/uploader/document/' || substr($uri,0,18)=='/payment/callback/' ){return true;}

        if(in_array($uri,$notrights)){
            return true;
        }
        return false;
    }
}