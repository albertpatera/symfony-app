<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Menu;
use App\Repository\ArticleRepository;
use Psr\Log\LoggerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Entity;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Debug\Debug;


/**
 * Kontroler pro vykreslování článků.
 * @package App\Controller
 * User
 */
class ArticleController extends AbstractController
{
    /**
     * Načte článek podle jeho URL a předá jej do šablony.
     * Pokud není zadaná URL, nastaví se jí hodnota pro výchozí článek.
     * @param Article $article článek
     * @return Response HTTP odpověď
     * @throws NotFoundHttpException Jestliže článek s danou URL nebyl nalezen.
     * @Route("/{url?uvod}", name="article")
     * @Entity("article", expr="repository.findOneByUrl(url)")
     */
    public function index(Request $request, ArticleRepository $article, LoggerInterface $logger): Response
    {
        $defaultData = ['message' => 'Type your message here'];
        $form = $this->createFormBuilder($defaultData)
            ->add('title', TextType::class, ['attr' => ['class' => 'text-input form-control col-md-4', 'placeholder' => 'Fill the title here']])
            ->add('url', TextType::class, [ 'attr' => ['placeholder' => 'url', 'class' => 'text-input form-control']])
            ->add('perex', TextareaType::class, [ 'attr' => ['placeholder' => 'perex', 'class' => 'text-input form-control',]])
            ->add('content', TextareaType::class, ['attr' => ['class' => 'text-input form-control summernote','placeholder' => 'content', 'id' => 'summernote'], ])
            ->add('title_image', TextType::class, [ 'attr' => ['class' => 'text-input form-control','placeholder' => 'title image or url', 'required' => 0]])
            ->add('date_created', TextType::class, ['attr' => ['style' => 'display:none', 'value' =>  date('Y-m-d h:i:s') ]])
            ->add('send', SubmitType::class, ['attr' => ['class' => 'btn btn-primary']])
            ->getForm();

       // dump($form);

        $form->handleRequest($request);
        $logger->warning('some text will be here');

        if ($form->isSubmitted() && $form->isValid()) {

            // data is an array with "name", "email", and "message" keys

            $em = $this->getDoctrine()->getManager();
            $articleVar = new Article();
            try {
                $row = $this->getDoctrine()->getRepository(Article::class)->findAll();
                $this->addFlash('notice', 'super, there is ok ');
            } catch (\Exception $e) {
                throw new \Exception($e->getMessage());
            }
            $title = $form['title']->getData();
            $perex = $form['perex']->getData();
            $url = $form['url']->getData();
            $content = $form['content']->getData();
            $title_image = $form['title_image']->getData();
            $date_created = $form['date_created']->getData();


            $articleVar->setTitle($title);
            $articleVar->setContent($content);
            $articleVar->setUrl($url);
            $articleVar->setTitleImage($title_image);
            $articleVar->setDateCreated($date_created);
            print_r($articleVar);
            //Debug::enable();
         //   $logger->info(' someone added new article, called ' . $title);
            try {
                $em->persist($articleVar);
                $em->flush();
                echo "okey here";
            } catch (\Exception $e) {
                throw new \Exception($e->getMessage());
            }

            $this->addFlash('notice', 'Article was successfully added');
        }
        $row = $this->getDoctrine()->getRepository(Article::class)->findAll();
        /**
         * @TODO predelat do normalniho
         */

        $rowMenu = $this->getDoctrine()->getRepository(Menu::class)->findAll();
        dump($rowMenu);

        foreach ($rowMenu as $itemM => $valueM)
        {
            $tempMenu[] = $valueM;

        }

        foreach ($row as $item => $value) {
            $temp[] = $value;
        }


        return $this->render('article/index.html.twig', [
            'articleForm' => $form->createView(),
           'temp' => empty($temp) ? 'no result returned' : $temp,
            'menu' => $tempMenu

        ]);
    }
    public function editor(\App\Entity\Article $article) : Response
    {
        return $this->render('article/editor/editor.html.twig');
    }

    /**
     * Načte článek podle jeho URL a předá jej do šablony.
     * Pokud není zadaná URL, nastaví se jí hodnota pro výchozí článek.
     * @param Article $article článek
     * @return Response HTTP odpověď
     * @throws NotFoundHttpException Jestliže článek s danou URL nebyl nalezen.
     * @Route ("article/detail/{id?1}")
     * @Entity("article", expr="repository.findOneByUrl(url)")
     */
    public function detailAction(LoggerInterface $logger, Request $request) : Response
    {
        $id = $request->get('id');
        $logger->info('eee');
        //dump($this->getParameter(5));;
        dump($id);
        $rowDetail = $this->getDoctrine()->getRepository(Article::class)->findOneBy(['id' => $request->get('id')]);

        dump($rowDetail);
        dump($request->query->get('title'));
        foreach ($rowDetail as $item => $detail)
        {
            $tempDetail[$item] = $detail;
            dump($item);
            dump('eeee');
        }


        return $this->render('article/detail/detail.html.twig', [
            'article' => empty($rowDetail) ? '' : $rowDetail,

        ]);
    }
    /**
     * Načte článek podle jeho URL a předá jej do šablony.
     * Pokud není zadaná URL, nastaví se jí hodnota pro výchozí článek.
     * @param Menu $menu článek
     * @return Response HTTP odpověď
     * @throws NotFoundHttpException Jestliže článek s danou URL nebyl nalezen.
     * @Route("article")
     */
    public function menuAction() : Response
    {
        dump('loaded');
        return $this->render('menu/index.html.twig', [
            'article' => empty($rowDetail) ? '' : $rowDetail,

        ]);
    }
}