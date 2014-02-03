<?php

namespace Frontend\Bundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Frontend\Bundle\Entity\PasoPedido;
use Frontend\Bundle\Form\PasoPedidoType;

/**
 * PasoPedido controller.
 *
 */
class PasoPedidoController extends Controller
{

    /**
     * Lists all PasoPedido entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('FrontendBundle:PasoPedido')->findBy(array(),array('posicion' => 'ASC'));

        return $this->render('FrontendBundle:PasoPedido:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new PasoPedido entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new PasoPedido();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            $this->get('session')->getFlashBag()->add(
                'success',
                'PasoPedido creada exitosamente.'
            );
            
            return $this->redirect($this->generateUrl('pasopedido'));
        }

        return $this->render('FrontendBundle:PasoPedido:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a PasoPedido entity.
    *
    * @param PasoPedido $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(PasoPedido $entity)
    {
        $form = $this->createForm(new PasoPedidoType(), $entity, array(
            'action' => $this->generateUrl('pasopedido_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Crear'));

        return $form;
    }

    /**
     * Displays a form to create a new PasoPedido entity.
     *
     */
    public function newAction()
    {
        $entity = new PasoPedido();
        $form   = $this->createCreateForm($entity);

        return $this->render('FrontendBundle:PasoPedido:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a PasoPedido entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FrontendBundle:PasoPedido')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PasoPedido entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FrontendBundle:PasoPedido:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing PasoPedido entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FrontendBundle:PasoPedido')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PasoPedido entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FrontendBundle:PasoPedido:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a PasoPedido entity.
    *
    * @param PasoPedido $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(PasoPedido $entity)
    {
        $form = $this->createForm(new PasoPedidoType(), $entity, array(
            'action' => $this->generateUrl('pasopedido_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Actualizar'));

        return $form;
    }
    /**
     * Edits an existing PasoPedido entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FrontendBundle:PasoPedido')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PasoPedido entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            $this->get('session')->getFlashBag()->add(
                'success',
                'PasoPedido actualizada exitosamente.'
            );
            
            return $this->redirect($this->generateUrl('pasopedido'));
        }

        return $this->render('FrontendBundle:PasoPedido:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a PasoPedido entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $entity = $em->getRepository('FrontendBundle:PasoPedido')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PasoPedido entity.');
        }

        $em->remove($entity);
        $em->flush();
        
        $this->get('session')->getFlashBag()->add(
            'success',
            'PasoPedido eliminada exitosamente.'
        );
        

        return $this->redirect($this->generateUrl('pasopedido'));
    }

    /**
     * Creates a form to delete a PasoPedido entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('pasopedido_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar'))
            ->getForm()
        ;
    }
}
