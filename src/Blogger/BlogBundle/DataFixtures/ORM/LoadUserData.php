<?php
namespace Blogger\BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Blogger\BlogBundle\Entity\User;

class LoadUserData implements FixtureInterface, ContainerAwareInterface
{

    /**
     * @var ContainerInterface
     */
    private $container;

    /**
     * {@inheritDoc}
     */
    public function setContainer(ContainerInterface $container = null)
    {
        var_dump('getting container here');
        $this->container = $container;
    }

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
      $user1 = new User();
      $user1 ->setUsername("daniel");
      $user1 ->setSalt(md5(uniqid()));
      $encoder = $this->container->get('security.encoder_factory')->getEncoder($user1);
      $user1 ->setPassword($encoder->encodePassword('12345', $user1 ->getSalt()));
      $user1 ->setEmail("daniel@gmail.com");
      $manager->persist($user1);
      
      $user2 = new User();
      $user2 ->setUsername("rui");
      $user2 ->setSalt(md5(uniqid()));
      $encoder = $this->container->get('security.encoder_factory')->getEncoder($user2);
      $user2 ->setPassword($encoder->encodePassword('12345', $user2 ->getSalt()));
      $user2 ->setEmail("ricardo@gmail.com");
      $manager->persist($user2);
      
      $user3 = new User();
      $user3 ->setUsername("ricardo");
      $user3 ->setSalt(md5(uniqid()));
      $encoder = $this->container->get('security.encoder_factory')->getEncoder($user3);
      $user3 ->setPassword($encoder->encodePassword('12345', $user3 ->getSalt()));
      $user3 ->setEmail("ricardo@gmail.com");
      $manager->persist($user3);
      $manager->flush();
    }
}