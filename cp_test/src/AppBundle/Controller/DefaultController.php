<?php

namespace AppBundle\Controller;

use AppBundle\Service\ConfigService;
use AppBundle\Service\UploadService;
use AppBundle\Service\ZotaPayService;
use AppBundle\Util\HttpClient;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        return $this->render('user/Alipay.html.twig');
    }

    


}
