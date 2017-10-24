<?php

namespace Mooc\CourseBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Mooc\CourseBundle\Entity\Followcourse;
use Mooc\CourseBundle\Form\FollowcourseType;

/**
 * Followcourse controller.
 *
 */
class FollowcourseController extends Controller
{

    /**
     * Lists all Followcourse entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MoocCourseBundle:Followcourse')->findAll();

        return $this->render('MoocCourseBundle:Followcourse:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Followcourse entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Followcourse();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('followcourse_show', array('id' => $entity->getId())));
        }

        return $this->render('MoocCourseBundle:Followcourse:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Followcourse entity.
     *
     * @param Followcourse $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Followcourse $entity)
    {
        $form = $this->createForm(new FollowcourseType(), $entity, array(
            'action' => $this->generateUrl('followcourse_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Followcourse entity.
     *
     */
    public function newAction()
    {
        $entity = new Followcourse();
        $form   = $this->createCreateForm($entity);

        return $this->render('MoocCourseBundle:Followcourse:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Followcourse entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MoocCourseBundle:Followcourse')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Followcourse entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MoocCourseBundle:Followcourse:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Followcourse entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MoocCourseBundle:Followcourse')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Followcourse entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MoocCourseBundle:Followcourse:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Followcourse entity.
    *
    * @param Followcourse $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Followcourse $entity)
    {
        $form = $this->createForm(new FollowcourseType(), $entity, array(
            'action' => $this->generateUrl('followcourse_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Followcourse entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MoocCourseBundle:Followcourse')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Followcourse entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('followcourse_edit', array('id' => $id)));
        }

        return $this->render('MoocCourseBundle:Followcourse:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Followcourse entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MoocCourseBundle:Followcourse')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Followcourse entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('followcourse'));
    }

    /**
     * Creates a form to delete a Followcourse entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('followcourse_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
