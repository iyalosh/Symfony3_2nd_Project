<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Depanneur
 *
 * @ORM\Table(name="depanneur", indexes={@ORM\Index(name="id_specialite", columns={"id_specialite"})})
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DepanneurRepository")
 */
class Depanneur
{
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255, nullable=false)
     */
    private $prenom;

    /**
     * @var \Depannage
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Depannage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id", referencedColumnName="id_depanneurs")
     * })
     */
    private $id;

    /**
     * @var \Specialite
     *
     * @ORM\ManyToOne(targetEntity="Specialite")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_specialite", referencedColumnName="id")
     * })
     */
    private $idSpecialite;



    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Depanneur
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Depanneur
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set id
     *
     * @param \AppBundle\Entity\Depannage $id
     *
     * @return Depanneur
     */
    public function setId(\AppBundle\Entity\Depannage $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return \AppBundle\Entity\Depannage
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idSpecialite
     *
     * @param \AppBundle\Entity\Specialite $idSpecialite
     *
     * @return Depanneur
     */
    public function setIdSpecialite(\AppBundle\Entity\Specialite $idSpecialite = null)
    {
        $this->idSpecialite = $idSpecialite;

        return $this;
    }

    /**
     * Get idSpecialite
     *
     * @return \AppBundle\Entity\Specialite
     */
    public function getIdSpecialite()
    {
        return $this->idSpecialite;
    }
}
