<?php

namespace Frontend\Bundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Frontend\Bundle\Entity\Figura;
use Frontend\Bundle\Form\FiguraType;

/**
 * Figura controller.
 *
 */
class FiguraController extends Controller
{

    /**
     * Lists all Figura entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('FrontendBundle:Figura')->findBy(array(),array('posicionFigura' => 'ASC'));

        return $this->render('FrontendBundle:Figura:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Figura entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Figura();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            $this->get('session')->getFlashBag()->add(
                'success',
                'Figura creada exitosamente.'
            );
            
            return $this->redirect($this->generateUrl('figura'));
        }

        return $this->render('FrontendBundle:Figura:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Figura entity.
    *
    * @param Figura $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Figura $entity)
    {
        $form = $this->createForm(new FiguraType(), $entity, array(
            'action' => $this->generateUrl('figura_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Crear'));

        return $form;
    }

    /**
     * Displays a form to create a new Figura entity.
     *
     */
    public function newAction()
    {
        $entity = new Figura();
        $form   = $this->createCreateForm($entity);

        return $this->render('FrontendBundle:Figura:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Figura entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FrontendBundle:Figura')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Figura entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FrontendBundle:Figura:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Figura entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FrontendBundle:Figura')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Figura entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FrontendBundle:Figura:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Figura entity.
    *
    * @param Figura $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Figura $entity)
    {
        $form = $this->createForm(new FiguraType(), $entity, array(
            'action' => $this->generateUrl('figura_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Actualizar'));

        return $form;
    }
    /**
     * Edits an existing Figura entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FrontendBundle:Figura')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Figura entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            $this->get('session')->getFlashBag()->add(
                'success',
                'Figura actualizada exitosamente.'
            );
            
            return $this->redirect($this->generateUrl('figura'));
        }

        return $this->render('FrontendBundle:Figura:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Figura entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $entity = $em->getRepository('FrontendBundle:Figura')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Figura entity.');
        }

        $em->remove($entity);
        $em->flush();
        
        $this->get('session')->getFlashBag()->add(
            'success',
            'Figura eliminada exitosamente.'
        );
        

        return $this->redirect($this->generateUrl('figura'));
    }

    /**
     * Creates a form to delete a Figura entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('figura_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar'))
            ->getForm()
        ;
    }
}
