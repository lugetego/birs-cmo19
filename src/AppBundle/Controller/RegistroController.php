<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Registro;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Registro controller.
 *
 * @Route("registro")
 */
class RegistroController extends Controller
{
    /**
     * Lists all registro entities.
     *
     * @Route("/", name="registro_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Unable to access this page!');

        $em = $this->getDoctrine()->getManager();

        $registros = $em->getRepository('AppBundle:Registro')->findAll();

        return $this->render('registro/index.html.twig', array(
            'registros' => $registros,
        ));
    }

    /**
     * Creates a new registro entity.
     *
     * @Route("/new", name="registro_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {

        // TODO: Especificar fecha límite
        $now = new \DateTime();
        $deadline = new \DateTime('2019-06-30');
        if($now >= $deadline)
            return $this->render(':registro:closed.html.twig');

        $registro = new Registro();
        $form = $this->createForm('AppBundle\Form\RegistroType', $registro);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($registro);
            $em->flush();

            $mailer = $this->container->get('mailer');
            $message = \Swift_Message::newInstance()
                ->setSubject('BIRS-CMO 2019 - Registro Number Theory in the Americas 2019')
                ->setFrom('webmaster@matmor.unam.mx')
                ->setTo(array($registro->getEmail()))
                ->setBcc(array('gerardo@matmor.unam.mx'))
                ->setBody($this->container->get('templating')->render('registro/confirmacion-email.txt.twig', array('registro' => $registro)))
            ;
            $mailer->send($message);

            return $this->render('registro/confirmacion.html.twig');
        }

        return $this->render('registro/new.html.twig', array(
            'registro' => $registro,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a registro entity.
     *
     * @Route("/{slug}", name="registro_show")
     * @Method("GET")
     */
    public function showAction(Registro $registro)
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Unable to access this page!');

        $deleteForm = $this->createDeleteForm($registro);

        return $this->render('registro/show.html.twig', array(
            'registro' => $registro,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing registro entity.
     *
     * @Route("/{slug}/edit", name="registro_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Registro $registro)
    {
        $deleteForm = $this->createDeleteForm($registro);
        $editForm = $this->createForm('AppBundle\Form\RegistroType', $registro);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('registro_edit', array('slug' => $registro->getSlug()));
        }

        return $this->render('registro/edit.html.twig', array(
            'registro' => $registro,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Referencia entity.
     *
     * @Route("/{slug}/eval", name="registro_eval")
     * @Method({"GET", "POST"})
     */
    public function evalAction(Request $request, Registro $registro)
    {

        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('AppBundle:Registro')->find($registro);

        $formEval = $this->createFormBuilder($entity)

            ->add('aceptado','Symfony\Component\Form\Extension\Core\Type\ChoiceType', array(
                'choices'  => array(
                    'Si' => true,
                    'No' => false,
                ),
                'choices_as_values' => true,
                'expanded'=>true,
                'required'=>false,
                'placeholder'=>false,

            ))
            ->add('confirmado','Symfony\Component\Form\Extension\Core\Type\ChoiceType', array(
                'choices'  => array(
                    'Si' => true,
                    'No' => false,
                ),
                'choices_as_values' => true,
                'expanded'=>true,
                'required'=>false,
                'placeholder'=>false,
            ))
            ->add('comentarios', 'Symfony\Component\Form\Extension\Core\Type\TextareaType',  array(
                'label' => 'Comentarios',
                'required'=>false,

            ))

            ->getForm();

        $formEval->handleRequest($request);

        if ($formEval->isSubmitted() && $formEval->isValid()) {

            $em->persist($entity);

            $em->flush();

            return $this->redirectToRoute('registro_show', array('slug' => $registro->getSlug()));

        }
        // $form   = $this->createForm($formEval, $entity);
        return $this->render('registro/eval.html.twig', array('registro' => $formEval->createView(),'slug'=> $registro->getSlug()));
        //return $this->redirect($this->generateUrl('registro_show', array('id' => $id)));

    }


    /**
     * Deletes a registro entity.
     *
     * @Route("/{id}", name="registro_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Registro $registro)
    {
        $form = $this->createDeleteForm($registro);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($registro);
            $em->flush();
        }

        return $this->redirectToRoute('registro_index');
    }

    /**
     * Creates a form to delete a registro entity.
     *
     * @param Registro $registro The registro entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Registro $registro)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('registro_delete', array('id' => $registro->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
