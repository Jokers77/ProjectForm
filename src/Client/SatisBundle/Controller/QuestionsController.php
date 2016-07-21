<?php

namespace Client\SatisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Client\SatisBundle\Entity\Etape;

class QuestionsController extends Controller
{
	public function addQuestionAction() {

		
		$em = $this->getDoctrine()->getEntityManager();


		$etape = new Etape();
		$etape->setLibelle('Question')
			  ->setCheckFin('soustitre');

		$em->persist($etape);
		$em->flush();


		return $this->render('SatisBundle:Questions:addQuestion.html.twig');
	}
}
