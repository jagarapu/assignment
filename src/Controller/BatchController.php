<?php

namespace App\Controller;

use App\Entity\Batch;
use App\Form\BatchFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BatchController extends AbstractController
{
    /**
     * @Route("/batch", name="batch_search")
     */
    public function index(Request $request): Response
    {
        $batch = new Batch();
        $form = $this->createForm(BatchFormType::class, $batch);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->addFlash('success', 'Passport valid!');
            return $this->redirectToRoute('batch_search');
        } else {
            $this->addFlash('success', 'Invalid passport');
        }

        return $this->render('batch/index.html.twig', [
            'batch' => $batch,
            'form' => $form->createView(),
        ]);
    }
}
