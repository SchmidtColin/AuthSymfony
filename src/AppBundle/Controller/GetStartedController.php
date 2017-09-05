<?php
/**
 * Created by PhpStorm.
 * User: cw
 * Date: 05.09.2017
 * Time: 10:44
 */

namespace AppBundle\Controller;

use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GetStartedController extends Controller
{

    /**
     *
     * @Method({"GET"})
     * @ApiDoc(
     *     resource=true,
     *     description="Anzeigen der Startseite"
     * )
     *
     * @Route("/aut/{user}")
     */
    public function showAction($user)
    {
        return $this->render('start.html.twig', array('user' => $user));
    }

}