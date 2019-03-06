<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Depannage
 *
 * @ORM\Table(name="depannage", indexes={@ORM\Index(name="id_depanneurs", columns={"id_depanneurs"}), @ORM\Index(name="id_panne", columns={"id_panne"}), @ORM\Index(name="id_voiture", columns={"id_voiture"})})
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DepannageRepository")
 */
class Depannage
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_start", type="datetime", nullable=false)
     */
    private $dateStart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_end", type="datetime", nullable=false)
     */
    private $dateEnd;

    /**
     * @var \Depanneur
     *
     * @ORM\ManyToOne(targetEntity="Depanneur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_depanneurs", referencedColumnName="id")
     * })
     */
    private $idDepanneurs;

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
     * @var \Voiture
     *
     * @ORM\ManyToOne(targetEntity="Voiture")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_voiture", referencedColumnName="id")
     * })
     */
    private $idVoiture;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dateStart
     *
     * @param \DateTime $dateStart
     *
     * @return Depannage
     */
    public function setDateStart($dateStart)
    {
        $this->dateStart = $dateStart;

        return $this;
    }

    /**
     * Get dateStart
     *
     * @return \DateTime
     */
    public function getDateStart()
    {
        return $this->dateStart;
    }

    /**
     * Set dateEnd
     *
     * @param \DateTime $dateEnd
     *
     * @return Depannage
     */
    public function setDateEnd($dateEnd)
    {
        $this->dateEnd = $dateEnd;

        return $this;
    }

    /**
     * Get dateEnd
     *
     * @return \DateTime
     */
    public function getDateEnd()
    {
        return $this->dateEnd;
    }

    /**
     * Set idDepanneurs
     *
     * @param \AppBundle\Entity\Depanneur $idDepanneurs
     *
     * @return Depannage
     */
    public function setIdDepanneurs(\AppBundle\Entity\Depanneur $idDepanneurs = null)
    {
        $this->idDepanneurs = $idDepanneurs;

        return $this;
    }

    /**
     * Get idDepanneurs
     *
     * @return \AppBundle\Entity\Depanneur
     */
    public function getIdDepanneurs()
    {
        return $this->idDepanneurs;
    }

    /**
     * Set idPanne
     *
     * @param \AppBundle\Entity\Panne $idPanne
     *
     * @return Depannage
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
     * Set idVoiture
     *
     * @param \AppBundle\Entity\Voiture $idVoiture
     *
     * @return Depannage
     */
    public function setIdVoiture(\AppBundle\Entity\Voiture $idVoiture = null)
    {
        $this->idVoiture = $idVoiture;

        return $this;
    }

    /**
     * Get idVoiture
     *
     * @return \AppBundle\Entity\Voiture
     */
    public function getIdVoiture()
    {
        return $this->idVoiture;
    }
}
