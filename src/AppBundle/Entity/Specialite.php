<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Specialite
 *
 * @ORM\Table(name="specialite")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SpecialiteRepository")
 */
class Specialite
{
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * var \Depanneur
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * ORM\OneToOne(targetEntity="Depanneur")
     * ORM\JoinColumns({
     *   ORM\JoinColumn(name="id", referencedColumnName="id_specialite")
     * })
     */
    private $id;



    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Specialite
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
     * Set id
     *
     * @param \AppBundle\Entity\Depanneur $id
     *
     * @return Specialite
     */
    public function setId(\AppBundle\Entity\Depanneur $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return \AppBundle\Entity\Depanneur
     */
    public function getId()
    {
        return $this->id;
    }
}
