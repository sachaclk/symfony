<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Fortune;
use AppBundle\Form\FortuneType;
use AppBundle\Form\CommentType;
use AppBundle\Entity\Comment;
use Pagerfanta\Pagerfanta;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $session = $this->get('session')->all();
        $fortunes = new Pagerfanta($this->getDoctrine()->getRepository("AppBundle:Fortune")->findLasts());
        // $fortunes->setMaxPerPage(1);
        $fortunes->setCurrentPage($request->get("page",1));
        return $this->render('default/index.html.twig', array(
            'fortunes'=>$fortunes,
            'session'=>$session
        ));
    }

    /**
    * @Route("/validate/{id}", name="validate")
    */
    public function validateAction($id)
   {
      $em = $this->getDoctrine()->getManager();
      $fortune = $em->getRepository("AppBundle:Fortune")->find($id);
      $fortune->onPublished();
      $em->flush();
      return $this->redirectToRoute("homepage");
   }

     /**
     * @Route("/vote_up/{id}", name="vote_up")
     */
     public function setVoteUp($id)
    {
       if ($this->get('session')->get("votedUp".$id)){
       return $this->redirectToRoute("quote", array('id'=>$id));

       }
       $this->get('session')->set("votedUp".$id, "true");
       $this->getDoctrine()->getRepository("AppBundle:Fortune")->find($id)->voteUp();
       $this->getDoctrine()->getManager()->flush();
       return $this->redirectToRoute("quote", array('id'=>$id));
    }


    /**
     * @Route("/vote_down/{id}", name="vote_down")
     */
     public function setVoteDown($id)
    {
        if ($this->get('session')->get("votedDown".$id)){
       return $this->redirectToRoute("quote", array('id'=>$id));
       }
       $this->get('session')->set("votedDown".$id, "true");
       $this->getDoctrine()->getRepository("AppBundle:Fortune")->find($id)->voteDown();
       $this->getDoctrine()->getManager()->flush();
       return $this->redirectToRoute("quote", array('id'=>$id));
    }

    /**
     * @Route("/bestpunchline", name="punchline")
     */
    public function showBestRatedAction()
    {
        $session = $this->get('session')->all();
        return $this->render('default/showBestRated.html.twig', array (
            'fortunes'=>$this->getDoctrine()->getRepository("AppBundle:Fortune")->findBestRated(),
            'session'=>$session
            ));
    }




    /**
     * @Route("/by_author/{author}", name="author")
     */
    public function showByAuthorAction($author)
    {
        $session = $this->get('session')->all();
        return $this->render('default/showByAuthor.html.twig', array (
            'fortunes'=>$this->getDoctrine()->getRepository("AppBundle:Fortune")->findByAuthor($author),
            'session'=>$session
            ));
    }

    /**
     * @Route("/new", name="create")
     */
    public function createAction(Request $request)
    {

        $form = $this->createForm(new FortuneType, new Fortune);

        $form ->handleRequest($request);
        if ($form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $quote=$form->getData();
            $em->persist($form->getData());
            $em->flush();

            return $this->redirectToRoute('quote', array ('id'=>$quote->getId()));
        }
        return $this->render('default/create.html.twig', array (
            'form'=>$form->createView()
            ));
    }

    /**
     * @Route("/quote/{id}", name="quote")
     */
    public function showOneQuoteAction(Fortune $fortune, $id, Request $request)
    {
        $session = $this->get('session')->all();
         $form = $this->createForm(new CommentType, new Comment);

          $form ->handleRequest($request);
            if ($form->isValid()){
                $em = $this->getDoctrine()->getManager();
                $comment = $form->getData();
                $comment->setFortune($fortune);

                $em->persist($comment);
                $em->flush();
                return $this->redirectToRoute('quote', array ('id'=>$fortune->getId()));
            }
       return $this->render('default/showByQuote.html.twig', array (
            'fortunes'=>$this->getDoctrine()->getRepository("AppBundle:Fortune")->findByQuote($id),
             'form'=>$form->createView(),
             'session'=>$session
            ));
    }


    /**
     * @Route("/quote/edit/{id}", name="edit_quote")
     */
     public function editQuoteAction($id, Request $request)
     {
               $fortunes = $this->getDoctrine()->getRepository("AppBundle:Fortune")->find($id);
               $form = $this->createForm(new FortuneType, $fortunes);
                $form->createView();

               $form ->handleRequest($request);
               if ($form->isValid()){
                   $em = $this->getDoctrine()->getManager();
                   $fortunes=$form->getData();
                   $em->flush();

                   return $this->redirectToRoute('quote', array ('id'=>$fortunes->getId()));
               }
               return $this->render('default/editQuote.html.twig', array (
               'fortune' => $fortunes,
               'form' => $form->createView()
                   ));
     }

/**
* @Route("/moderate", name="moderate")
*/
      public function moderateAction(Request $request)
      {
          $session = $this->get('session')->all();
          // ICI LA FONCTION QUI PERMET DE METTRE LA QUOTE EN ATTENTE ET LAFFICHER
          return $this->render('default/moderate.html.twig', array (
              'fortunes'=>$this->getDoctrine()->getRepository("AppBundle:Fortune")->findPublished(),
              'session'=>$session
              ));
      }


}
