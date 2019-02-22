<?php

namespace App\Controller;

use App\Entity\Zaznam;
use App\Form\ZaznamType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/tabulka/zaznam/{id}/edit", name="admin_edit")
     */
    public function edit(Zaznam $zaznam, Request $request, EntityManagerInterface $em)
    {
        $form = $this->createForm(ZaznamType::class, $zaznam);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            /** @var Zaznam $zaznam */
            $zaznam = $form->getData();
            $em->persist($zaznam);
            $em->flush();
            $this->addFlash('success', 'Article Created! Knowledge is power!');
            return $this->redirectToRoute('tabulka_action');
        }
        return $this->render('admin/edit.html.twig', [
            'ZaznamType' => $form->createView()
        ]);

    }





}
