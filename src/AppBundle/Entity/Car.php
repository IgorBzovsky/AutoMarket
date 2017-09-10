<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* Class Car
* @package AppBundle\Entity
* @ORM\Entity
* @ORM\Table(name="cars")
*/
class Car{
/**
    * @ORM\Column(type="integer")
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    private $id;
    
    /**
    * @ORM\Column(type="string")
    */
    private $body;

    /**
    * @ORM\Column(type="string")
    */
    private $engine;

    /**
    * @ORM\Column(type="integer")
    */
    private $year;
   
    /**
    * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Model", inversedBy="cars")
    * @ORM\JoinColumn(name="model_id", referencedColumnName="id", nullable=false)
    */
    private $model;
}