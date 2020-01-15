<?php
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity @ORM\Table(name ="formation")
 **/

class Formation
{
    /** @ORM\Id @ORM\column(type="integer") @ORM\GeneratedValue **/
    private $id;
   /** @ORM\column(type="string") **/
    private $nom;
    /** @ORM\column(type="string") **/
    private $date;
    /** @ORM\column(type="integer") **/
    private $duree;
    /**
     * Many formations have one lieu. This is the owning side.
     * @ORM\ManyToOne(targetEntity="Lieu", inversedBy="formations")
     * @ORM\JoinColumn(name="Lieu_id", referencedColumnName="id")
     */
    private $lieu;

    public  function  __construct()
    {

    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * @param mixed $duree
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;
    }

    /**
     * @return mixed
     */
    public function getLieu()
    {
        return $this->lieu;
    }

    /**
     * @param mixed $lieu
     */
    public function setLieu($lieu)
    {
        $this->lieu = $lieu;
    }





}