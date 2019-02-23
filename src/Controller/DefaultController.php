<?php
namespace App\Controller;
use App\Entity\Zaznam;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request ;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController ;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response ;

class DefaultController extends AbstractController
{


    /**
     * @Route(path="/", name="index_action")
     */
    public function login (EntityManagerInterface $em) {


//        return $this->render('default/login.html.twig');

        return $this->redirectToRoute('app_login');

    }

    /**
     * @Route(path="/tabulka", name="tabulka_action")
     */
    public function tabulka (EntityManagerInterface $em ) {

        /** @var Zaznam[] $zaznam */
          $zaznam= $em -> getRepository(Zaznam::class)->findAll();
//        $zaznam = $this->getDoctrine()->getRepository('Zaznam')->findAll();

        return $this->render('default/tabulka.html.twig',[
            'zaznam' => $zaznam
        ]);

    }


}