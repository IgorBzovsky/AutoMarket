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
    }
?>