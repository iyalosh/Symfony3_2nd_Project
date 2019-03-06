<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Voiture
 *
 * @ORM\Table(name="voiture", indexes={@ORM\Index(name="id_panne", columns={"id_panne"}), @ORM\Index(name="id", columns={"id"})})
 * @ORM\Entity(repositoryClass="AppBundle\Repository\VoitureRepository")
 */
class Voiture
{
    /**
     * @var string
     *
     * @ORM\Column(name="marque", type="string", length=255, nullable=false)
     */
    private $marque;

    /**
     * @var string
     *
     * @ORM\Column(name="modele", type="string", length=255, nullable=false)
     */
    private $modele;

    /**
     * @var \Panne
     *
     * @ORM\ManyToOne(targetEntity="Panne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_panne", referencedColumnName="id")
     * })
     */
    private $idPanne;

    /**
     * @var \Depannage
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Depannage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id", referencedColumnName="id_voiture")
     * })
     */
    private $id;



    /**
     * Set marque
     *
     * @param string $marque
     *
     * @return Voiture
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;

        return $this;
    }

    /**
     * Get marque
     *
     * @return string
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * Set modele
     *
     * @param string $modele
     *
     * @return Voiture
     */
    public function setModele($modele)
    {
        $this->modele = $modele;

        return $this;
    }

    /**
     * Get modele
     *
     * @return string
     */
    public function getModele()
    {
        return $this->modele;
    }

    /**
     * Set idPanne
     *
     * @param \AppBundle\Entity\Panne $idPanne
     *
     * @return Voiture
     */
    public function setIdPanne(\AppBundle\Entity\Panne $idPanne = null)
    {
        $this->idPanne = $idPanne;

        return $this;
    }

    /**
     * Get idPanne
     *
     * @return \AppBundle\Entity\Panne
     */
    public function getIdPanne()
    {
        return $this->idPanne;
    }

    /**
     * Set id
     *
     * @param \AppBundle\Entity\Depannage $id
     *
     * @return Voiture
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
}
