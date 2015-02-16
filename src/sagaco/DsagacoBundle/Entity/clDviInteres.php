<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ESagaco.tbDviInteres
 *
 * @ORM\Table(name="e_sagaco.tb_dvi_interes", indexes={@ORM\Index(name="IDX_8DECE2B497C73F23", columns={"co_dvi_area"})})
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clDviInteresRepository")
 */
class clDviInteres
{
    /**
     * @var integer
     *
     * @ORM\Column(name="co_dvi_interes", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="e_sagaco.seq_tb_dvi_interes_co_dvi_interes", allocationSize=1, initialValue=1)
     */
    private $coDviInteres;

    /**
     * @var string
     *
     * @ORM\Column(name="nb_dvi_interes", type="string", length=255, nullable=false)
     */
    private $nbDviInteres;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fh_creacion", type="datetime", nullable=false)
     */
    private $fhCreacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fh_actualizacion", type="datetime", nullable=false)
     */
    private $fhActualizacion;

    /**
     * @var \ESagaco.tbDviArea
     *
     * @ORM\ManyToOne(targetEntity="clDviArea")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_dvi_area", referencedColumnName="co_dvi_area")
     * })
     */
    private $coDviArea;



    /**
     * Get coDviInteres
     *
     * @return integer 
     */
    public function getCoDviInteres()
    {
        return $this->coDviInteres;
    }

    /**
     * Set nbDviInteres
     *
     * @param string $nbDviInteres
     * @return clDviInteres
     */
    public function setNbDviInteres($nbDviInteres)
    {
        $this->nbDviInteres = $nbDviInteres;

        return $this;
    }

    /**
     * Get nbDviInteres
     *
     * @return string 
     */
    public function getNbDviInteres()
    {
        return $this->nbDviInteres;
    }

    /**
     * Set fhCreacion
     *
     * @param \DateTime $fhCreacion
     * @return clDviInteres
     */
    public function setFhCreacion($fhCreacion)
    {
        $this->fhCreacion = $fhCreacion;

        return $this;
    }

    /**
     * Get fhCreacion
     *
     * @return \DateTime 
     */
    public function getFhCreacion()
    {
        return $this->fhCreacion;
    }

    /**
     * Set fhActualizacion
     *
     * @param \DateTime $fhActualizacion
     * @return clDviInteres
     */
    public function setFhActualizacion($fhActualizacion)
    {
        $this->fhActualizacion = $fhActualizacion;

        return $this;
    }

    /**
     * Get fhActualizacion
     *
     * @return \DateTime 
     */
    public function getFhActualizacion()
    {
        return $this->fhActualizacion;
    }

    /**
     * Set coDviArea
     *
     * @param \sagaco\DsagacoBundle\Entity\clDviArea $coDviArea
     * @return clDviInteres
     */
    public function setCoDviArea(\sagaco\DsagacoBundle\Entity\clDviArea $coDviArea = null)
    {
        $this->coDviArea = $coDviArea;

        return $this;
    }

    /**
     * Get coDviArea
     *
     * @return \sagaco\DsagacoBundle\Entity\clDviArea 
     */
    public function getCoDviArea()
    {
        return $this->coDviArea;
    }
}
