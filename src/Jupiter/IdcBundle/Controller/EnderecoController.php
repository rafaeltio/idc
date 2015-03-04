<?php

namespace Jupiter\IdcBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Jupiter\IdcBundle\Entity\Endereco;
use Jupiter\IdcBundle\Form\EnderecoType;

/**
 * Endereco controller.
 *
 * @Route("/endereco")
 */
class EnderecoController extends Controller
{

    /**
     * Lists all Endereco entities.
     *
     * @Route("/", name="endereco")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('JupiterIdcBundle:Endereco')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Endereco entity.
     *
     * @Route("/", name="endereco_create")
     * @Method("POST")
     * @Template("JupiterIdcBundle:Endereco:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Endereco();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('endereco_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Endereco entity.
     *
     * @param Endereco $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Endereco $entity)
    {
        $form = $this->createForm(new EnderecoType(), $entity, array(
            'action' => $this->generateUrl('endereco_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Endereco entity.
     *
     * @Route("/new", name="endereco_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Endereco();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Endereco entity.
     *
     * @Route("/{id}", name="endereco_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('JupiterIdcBundle:Endereco')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Endereco entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Endereco entity.
     *
     * @Route("/{id}/edit", name="endereco_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('JupiterIdcBundle:Endereco')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Endereco entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a Endereco entity.
    *
    * @param Endereco $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Endereco $entity)
    {
        $form = $this->createForm(new EnderecoType(), $entity, array(
            'action' => $this->generateUrl('endereco_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Endereco entity.
     *
     * @Route("/{id}", name="endereco_update")
     * @Method("PUT")
     * @Template("JupiterIdcBundle:Endereco:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('JupiterIdcBundle:Endereco')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Endereco entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('endereco_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Endereco entity.
     *
     * @Route("/{id}", name="endereco_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('JupiterIdcBundle:Endereco')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Endereco entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('endereco'));
    }

    /**
     * Creates a form to delete a Endereco entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('endereco_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
