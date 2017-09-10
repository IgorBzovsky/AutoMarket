<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* Class Brand
* @package AppBundle\Entity
* @ORM\Entity
* @ORM\Table(name="brands")
*/
class Brand{

    /**
    * @ORM\Column(type="integer")
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    private $id;

    /**
    * @ORM\Column(type="string")
    */
    private $name;

    /**
    * @ORM\OneToMany(targetEntity="AppBundle\Entity\Model", mappedBy="brand")
    */
    private $models;

    public function __construct(){
        $this->models = new \Doctrine\Common\Collections\ArrayCollection();
    }
}