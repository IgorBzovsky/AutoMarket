<?php
    namespace AppBundle\Entity;

    use Doctrine\ORM\Mapping as ORM;

    /**
    * Class Model
    * @package AppBundle\Entity
    * 
    * @ORM\Entity
    * @ORM\Table(name="models")
    */
    class Model{

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
        * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Brand", inversedBy="models")
        * @ORM\JoinColumn(name="brand_id", referencedColumnName="id", nullable=false)
        */
        private $brand;

        /**
        * @ORM\OneToMany(targetEntity="AppBundle\Entity\Car", mappedBy="model")
        */
        private $cars;
    
        public function __construct(){
            $this->cars = new \Doctrine\Common\Collections\ArrayCollection();
        }
    }