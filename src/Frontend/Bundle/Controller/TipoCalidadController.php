<?php

namespace Frontend\Bundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Frontend\Bundle\Entity\TipoCalidad;
use Frontend\Bundle\Form\TipoCalidadType;

/**
 * TipoCalidad controller.
 *
 */
class TipoCalidadController extends Controller
{

    /**
     * Lists all TipoCalidad entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('FrontendBundle:TipoCalidad')->findBy(array(),array('posicion' => 'ASC')); 

        return $this->render('FrontendBundle:TipoCalidad:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new TipoCalidad entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new TipoCalidad();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            $this->get('session')->getFlashBag()->add(
                'success',
                'Tipo de Calidad creada exitosamente.'
            );
            
            return $this->redirect($this->generateUrl('tipocalidad'));
        }

        return $this->render('FrontendBundle:TipoCalidad:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a TipoCalidad entity.
    *
    * @param TipoCalidad $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(TipoCalidad $entity)
    {
        $form = $this->createForm(new TipoCalidadType(), $entity, array(
            'action' => $this->generateUrl('tipocalidad_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Crear'));

        return $form;
    }

    /**
     * Displays a form to create a new TipoCalidad entity.
     *
     */
    public function newAction()
    {
        $entity = new TipoCalidad();
        $form   = $this->createCreateForm($entity);

        return $this->render('FrontendBundle:TipoCalidad:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a TipoCalidad entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FrontendBundle:TipoCalidad')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TipoCalidad entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FrontendBundle:TipoCalidad:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing TipoCalidad entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FrontendBundle:TipoCalidad')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TipoCalidad entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FrontendBundle:TipoCalidad:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a TipoCalidad entity.
    *
    * @param TipoCalidad $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(TipoCalidad $entity)
    {
        $form = $this->createForm(new TipoCalidadType(), $entity, array(
            'action' => $this->generateUrl('tipocalidad_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Actualizar'));

        return $form;
    }
    /**
     * Edits an existing TipoCalidad entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FrontendBundle:TipoCalidad')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TipoCalidad entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            $this->get('session')->getFlashBag()->add(
                'success',
                'Tipo de Calidad actualizada exitosamente.'
            );
            
            return $this->redirect($this->generateUrl('tipocalidad'));
        }

        return $this->render('FrontendBundle:TipoCalidad:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a TipoCalidad entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $entity = $em->getRepository('FrontendBundle:TipoCalidad')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TipoCalidad entity.');
        }

        $em->remove($entity);
        $em->flush();
        
        $this->get('session')->getFlashBag()->add(
            'success',
            'Tipo de Calidad eliminada exitosamente.'
        );
        

        return $this->redirect($this->generateUrl('tipocalidad'));
    }

    /**
     * Creates a form to delete a TipoCalidad entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tipocalidad_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar'))
            ->getForm()
        ;
    }
}
