<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends AbstractController
{
    /**
     * @Route("/lucky/number")
     */
    public function number()
    {
        $number = random_int(0, 100);

        return $this->render('lucky/index.html.twig', [
            'number' => $number,
        ]);
    }

    /**
     * @Route(
     *      "/lol/{number}",
     *      requirements={
     *          "number": "\d+",
     *         }
     * )
     */
    public function myNumber($number)
    {
        return $this->render('lucky/index.html.twig', [
            'number' => $number,
        ]);
    }

}
