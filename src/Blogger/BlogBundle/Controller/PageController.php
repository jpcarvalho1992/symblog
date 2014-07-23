<?php

namespace Blogger\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Blogger\BlogBundle\Entity\Enquiry;
use Blogger\BlogBundle\Form\EnquiryType;
use Blogger\BlogBundle\Form\BlogType;
use Symfony\Component\HttpFoundation\Request;
use Blogger\BlogBundle\Entity\Blog;
use Blogger\BlogBundle\Form\RegistroType;
use Blogger\BlogBundle\Entity\Registro;
use Symfony\Component\Security\Core\SecurityContext;

class PageController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()
                   ->getEntityManager();

        $blogs = $em->getRepository('BloggerBlogBundle:Blog')
                    ->getLatestBlogs();

        return $this->render('BloggerBlogBundle:Page:index.html.twig', array(
            'blogs' => $blogs
        ));
    }
    
    public function nacionalAction()
    {
        $em = $this->getDoctrine()
                   ->getEntityManager();

        $blogs = $em->getRepository('BloggerBlogBundle:Blog')
                    ->getNacionalBlogs();

        return $this->render('BloggerBlogBundle:Categoria:nacional.html.twig', array(
            'blogs' => $blogs
        ));
    }
    
    public function internacionalAction()
    {
        $em = $this->getDoctrine()
                   ->getEntityManager();

        $blogs = $em->getRepository('BloggerBlogBundle:Blog')
                    ->getInternacionalBlogs();

        return $this->render('BloggerBlogBundle:Categoria:internacional.html.twig', array(
            'blogs' => $blogs
        ));
    }
    
    public function economiaAction()
    {
        $em = $this->getDoctrine()
                   ->getEntityManager();

        $blogs = $em->getRepository('BloggerBlogBundle:Blog')
                    ->getEconomiaBlogs();

        return $this->render('BloggerBlogBundle:Categoria:economia.html.twig', array(
            'blogs' => $blogs
        ));
    }
    
    public function desportoAction()
    {
        $em = $this->getDoctrine()
                   ->getEntityManager();

        $blogs = $em->getRepository('BloggerBlogBundle:Blog')
                    ->getDesportoBlogs();

        return $this->render('BloggerBlogBundle:Categoria:desporto.html.twig', array(
            'blogs' => $blogs
        ));
    }
    
    public function aboutAction()
    {
        return $this->render('BloggerBlogBundle:Page:about.html.twig');
    }
    
    public function contactAction()
    {
        $enquiry = new Enquiry();
        $form = $this->createForm(new EnquiryType(), $enquiry);

        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
            $form->bind($request);

            if ($form->isValid()) {
                $message = \Swift_Message::newInstance()
                    ->setSubject('Contact enquiry from symblog')
                    ->setFrom('enquiries@symblog.co.uk')
                    ->setTo($this->container->getParameter('blogger_blog.emails.contact_email'))
                    ->setBody($this->renderView('BloggerBlogBundle:Page:contactEmail.txt.twig', array('enquiry' => $enquiry)));
                $this->get('mailer')->send($message);

                $this->get('session')->setFlash('blogger-notice', 'Your contact enquiry was successfully sent. Thank you!');

                // Redirect - This is important to prevent users re-posting
                // the form if they refresh the page
                return $this->redirect($this->generateUrl('BloggerBlogBundle_contact'));
            }
        }

        return $this->render('BloggerBlogBundle:Page:contact.html.twig', array(
            'form' => $form->createView()
        ));
    }
    
    public function sidebarAction()
    {
        $em = $this->getDoctrine()
                   ->getEntityManager();

        $tags = $em->getRepository('BloggerBlogBundle:Blog')
                   ->getTags();

        $tagWeights = $em->getRepository('BloggerBlogBundle:Blog')
                         ->getTagWeights($tags);

        $commentLimit   = $this->container
                           ->getParameter('blogger_blog.comments.latest_comment_limit');
        $latestComments = $em->getRepository('BloggerBlogBundle:Comment')
                             ->getLatestComments($commentLimit);

        return $this->render('BloggerBlogBundle:Page:sidebar.html.twig', array(
            'latestComments'    => $latestComments,
            'tags'              => $tagWeights
        ));
    }
    
    public function adicionarAction(){
        $em=$this->getDoctrine()->getEntityManager();
        $a=new blog();
        $form=$this->createForm(new blogType(), $a);
        $request=  $this->getRequest();
        if($request->isMethod('POST')){
            $form->bind($request);
            $a=$form->getData();
            $em->persist($a);
            $em->flush();
            return $this->redirect($this->generateUrl("BloggerBlogBundle_homepage"));
        }
        return $this->render('BloggerBlogBundle:Adicionar:adicionar.html.twig',array(
            'form'=>$form->createView(),
        ));
            
           
        }
        
        public function registrarAction()
        {
            $a= new Registro();
            $form=$this->createForm(new RegistroType(), $a);
            $request=  $this->getRequest();
            if($request->isMethod('POST')){
                $form->bind($request);
                $a=$form->getData();
                return $this->redirect($this->generateUrl("BloggerBlogBundle_homepage"));
            }
            return $this->render('BloggerBlogBundle:Registrar:registrar.html.twig',array(
                'form'=>$form->createView(),
            ));
        }
    
        public function criarAction(Request $request)
        {
            $em = $this->getDoctrine()->getManager();

            $form = $this->createForm(new RegistroType(), new Registro());

            $form->handleRequest($request);
            
            if ($form->isValid()) {
                $registro = $form->getData();

                $em->persist($registro->getUser());
                $em->flush();

                // Se o registro for bem sucedido
                return $this->redirect($this->generateUrl("BloggerBlogBundle_homepage"));
            }

            return $this->render(
                'BloggerBlogBundle:Registrar:registrar.html.twig',
                array('form' => $form->createView())
            );
        }
        
        public function loginAction()
        {
            $request = $this->getRequest();
            $session = $request->getSession();

            if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
                $error = $request->attributes->get(
                    SecurityContext::AUTHENTICATION_ERROR
                );
            } else {
                $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
                $session->remove(SecurityContext::AUTHENTICATION_ERROR);
            }

            return $this->render(
                'BloggerBlogBundle:Security:login.html.twig',
                array(
                    'last_username' => $session->get(SecurityContext::LAST_USERNAME),
                    'error'         => $error,
                )
            );
        }

        public function dumpStringAction()
        {
          return $this->render('BloggerBlogBundle:Security:dumpString.html.twig', array());
        }
    
}
