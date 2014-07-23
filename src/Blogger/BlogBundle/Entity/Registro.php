<?php

namespace Blogger\BlogBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

use Blogger\BlogBundle\Entity\User;

/**
 * @ORM\Table(name="utilizador")
 * @ORM\HasLifecycleCallbacks()
 */
class Registro
{
    /**
     * @Assert\Type(type="Blogger\BlogBundle\Entity\User")
     * @Assert\Valid()
     */
    protected $user;

    /**
     * @Assert\NotBlank()
     * @Assert\True()
     */
    protected $termsAccepted;

    public function setUser(User $user)
    {
        $this->user = $user;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function getTermosAceites()
    {
        return $this->termsAccepted;
    }

    public function setTermosAceites($termsAccepted)
    {
        $this->termsAccepted = (Boolean) $termsAccepted;
    }
}

