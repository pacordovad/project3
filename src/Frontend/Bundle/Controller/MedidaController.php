<?php

namespace Frontend\Bundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Frontend\Bundle\Entity\Medida;
use Frontend\Bundle\Form\MedidaType;

/**
 * Medida controller.
 *
 */
class MedidaController extends Controller
{

    /**
     * Lists all Medida entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('FrontendBundle:Medida')->findBy(array(),array('posicion' => 'ASC'));

        return $this->render('FrontendBundle:Medida:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Medida entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Medida();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            $this->get('session')->getFlashBag()->add(
                'success',
                'Medida creada exitosamente.'
            );
            
            return $this->redirect($this->generateUrl('medida'));
        }

        return $this->render('FrontendBundle:Medida:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Medida entity.
    *
    * @param Medida $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Medida $entity)
    {
        $form = $this->createForm(new MedidaType(), $entity, array(
            'action' => $this->generateUrl('medida_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Crear'));

        return $form;
    }

    /**
     * Displays a form to create a new Medida entity.
     *
     */
    public function newAction()
    {
        $entity = new Medida();
        $form   = $this->createCreateForm($entity);

        return $this->render('FrontendBundle:Medida:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Medida entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FrontendBundle:Medida')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Medida entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FrontendBundle:Medida:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Medida entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FrontendBundle:Medida')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Medida entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FrontendBundle:Medida:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Medida entity.
    *
    * @param Medida $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Medida $entity)
    {
        $form = $this->createForm(new MedidaType(), $entity, array(
            'action' => $this->generateUrl('medida_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Actualizar'));

        return $form;
    }
    /**
     * Edits an existing Medida entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FrontendBundle:Medida')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Medida entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            $this->get('session')->getFlashBag()->add(
                'success',
                'Medida actualizada exitosamente.'
            );
            
            return $this->redirect($this->generateUrl('medida'));
        }

        return $this->render('FrontendBundle:Medida:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Medida entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $entity = $em->getRepository('FrontendBundle:Medida')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Medida entity.');
        }

        $em->remove($entity);
        $em->flush();
        
        $this->get('session')->getFlashBag()->add(
            'success',
            'Medida eliminada exitosamente.'
        );
        

        return $this->redirect($this->generateUrl('medida'));
    }

    /**
     * Creates a form to delete a Medida entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('medida_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar'))
            ->getForm()
        ;
    }
}
