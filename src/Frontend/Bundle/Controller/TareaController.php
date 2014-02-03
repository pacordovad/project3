<?php

namespace Frontend\Bundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Frontend\Bundle\Entity\Tarea;
use Frontend\Bundle\Form\TareaType;

/**
 * Tarea controller.
 *
 */
class TareaController extends Controller
{

    /**
     * Lists all Tarea entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $entities = null;
        $usuario= $this->get('security.context')->getToken()->getUser();
        if($usuario->getRoles()["0"] != "ROLE_ADMINISTRADOR" && $usuario->getRoles()["0"] != "ROLE_COORDINADOR"){
            $entities = $em->getRepository('FrontendBundle:Tarea')->findByUsuarioPk($usuario);
        }else{
            $entities = $em->getRepository('FrontendBundle:Tarea')->findAll();
        }
        
        return $this->render('FrontendBundle:Tarea:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Tarea entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Tarea();
        $usuario= $this->get('security.context')->getToken()->getUser();
            
        $form = $this->createCreateForm($entity,$usuario);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity->setFechaRegistro(new \DateTime());
            
            if($usuario->getRoles()["0"] != "ROLE_ADMINISTRADOR" && $usuario->getRoles()["0"] != "ROLE_COORDINADOR"){
                $entity->setUsuarioPk($usuario);
            }
            
            $em->persist($entity);
            $em->flush();

            $this->get('session')->getFlashBag()->add(
                'success',
                'Tarea creada exitosamente.'
            );
            
            return $this->redirect($this->generateUrl('tarea'));
        }

        return $this->render('FrontendBundle:Tarea:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Tarea entity.
    *
    * @param Tarea $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Tarea $entity,$usuario)
    {
        $form = $this->createForm(new TareaType(), $entity, array(
            'action' => $this->generateUrl('tarea_create'),
            'method' => 'POST',
            'usuario' => $usuario
        ));

        $form->add('submit', 'submit', array('label' => 'Crear'));

        return $form;
    }

    /**
     * Displays a form to create a new Tarea entity.
     *
     */
    public function newAction()
    {
        $entity = new Tarea();
        $usuario= $this->get('security.context')->getToken()->getUser();
        $form   = $this->createCreateForm($entity,$usuario);
        
        return $this->render('FrontendBundle:Tarea:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Tarea entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FrontendBundle:Tarea')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Tarea entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FrontendBundle:Tarea:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Tarea entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FrontendBundle:Tarea')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Tarea entity.');
        }
        $usuario= $this->get('security.context')->getToken()->getUser();
        $editForm = $this->createEditForm($entity,$usuario);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FrontendBundle:Tarea:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Tarea entity.
    *
    * @param Tarea $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Tarea $entity,$usuario)
    {
        $form = $this->createForm(new TareaType(), $entity, array(
            'action' => $this->generateUrl('tarea_update', array('id' => $entity->getId())),
            'method' => 'PUT',
            'usuario' => $usuario,
        ));

        $form->add('submit', 'submit', array('label' => 'Actualizar'));

        return $form;
    }
    /**
     * Edits an existing Tarea entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FrontendBundle:Tarea')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Tarea entity.');
        }

        $usuario= $this->get('security.context')->getToken()->getUser();
        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity,$usuario);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $usuario= $this->get('security.context')->getToken()->getUser();
            if($usuario->getRoles()["0"] != "ROLE_ADMINISTRADOR" && $usuario->getRoles()["0"] != "ROLE_COORDINADOR"){
                $entity->setUsuarioPk($usuario);
            }
            
            $em->flush();

            $this->get('session')->getFlashBag()->add(
                'success',
                'Tarea actualizada exitosamente.'
            );
            
            return $this->redirect($this->generateUrl('tarea'));
        }

        return $this->render('FrontendBundle:Tarea:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Tarea entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $entity = $em->getRepository('FrontendBundle:Tarea')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Tarea entity.');
        }

        $em->remove($entity);
        $em->flush();
        
        $this->get('session')->getFlashBag()->add(
            'success',
            'Tarea eliminada exitosamente.'
        );
        

        return $this->redirect($this->generateUrl('tarea'));
    }

    /**
     * Creates a form to delete a Tarea entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tarea_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar'))
            ->getForm()
        ;
    }
}
