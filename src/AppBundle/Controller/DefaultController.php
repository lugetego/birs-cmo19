<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Survey;
use Doctrine\Common\Collections\ArrayCollection;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            throw $this->createAccessDeniedException();
        }
        return $this->redirectToRoute('registro_index');

    }

    /**
     * Creates a new registro entity.
     *
     * @Route("/survey", name="survey")
     * @Method({"GET", "POST"})
     */
    public function surveyAction(Request $request)
    {
        $survey = new Survey();
        $form = $this->createForm('AppBundle\Form\SurveyType', $survey);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $s1q1 = $form->get('s1q1')->getData();
            $s1q1other = $form->get('s1q1other')->getData();
            $s1q1['Other'] = $s1q1other;
            $s1q2 = $form->get('s1q2')->getData();
            $s1q2other = $form->get('s1q2other')->getData();
            $s1q2['Other'] = $s1q2other;
            $s2q10 = $form->get('s2q10')->getData();
            $s2q10other = $form->get('s2q10other')->getData();
            $s2q10['Other'] = $s2q10other;
            $survey->setS1q1($s1q1);
            $survey->setS1q2($s1q2);
            $survey->setS2q10($s2q10);
            $em->persist($survey);
            $em->flush();

            $mailer = $this->container->get('mailer');
            $message = \Swift_Message::newInstance()
                ->setSubject('BIRS-CMO 2019 - Survey')
                ->setFrom('webmaster@matmor.unam.mx')
                ->setTo(array('gerardo@matmor.unam.mx'))
                ->setBody($this->container->get('templating')->render('default/survey-email.txt.twig', array('survey' => $survey)))
            ;
            $mailer->send($message);

            return $this->render('registro/confirmsurvey.html.twig');
        }

        return $this->render('registro/survey.html.twig', array(
            'survey' => $survey,
            'form' => $form->createView(),
        ));
    }

    /**
     * Lists all registro entities.
     *
     * @Route("/results", name="survey_results")
     * @Method("GET")
     */
    public function resultsAction()
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Unable to access this page!');
        $em = $this->getDoctrine()->getManager();
        $registros = $em->getRepository('AppBundle:Survey')->findAll();
        return $this->render('default/results.html.twig', array(
            'registros' => $registros,
        ));
    }

    /**
     * Finds and displays a survey entity.
     *
     * @Route("/results/{id}", name="survey_show")
     * @Method("GET")
     */
    public function showAction(Survey $registro)
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Unable to access this page!');
        return $this->render('default/show.html.twig', array(
            'registro' => $registro,
        ));
    }

}
