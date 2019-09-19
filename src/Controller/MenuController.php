<?php


namespace App\Controller;


use App\Entity\Menu;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class MenuController extends AbstractController
{
    /**
     * @param Request $request
     * @return Response
     * * @Route("/menu/db", name="menu")
     * @Entity("menu", expr="repository.findOneByUrl(url)")
     */
    public function index(Request $request) : Response
    {
        $menuItem = $this->getDoctrine()->getRepository(Menu::class)->findAll();
        dump($menuItem);


        foreach ($menuItem as $item => $value)
        {
            $menuItemArray[] = $value;
            dump($value);
        }

        dump($menuItemArray);
        return $this->render('menu/index.html.twig', [
            'item' => $menuItemArray
        ]);
    }
}