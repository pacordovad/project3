<?php

namespace Frontend\Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $usuario= $this->get('security.context')->getToken()->getUser();

        if($usuario->getRoles()["0"] != "ROLE_ADMINISTRADOR"){
            return $this->redirect($this->generateUrl('pedido_produccion'));
        }else{
            return $this->redirect($this->generateUrl('pedido_control'));
        }
    }
}
