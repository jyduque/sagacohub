<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ESagaco.tbDviArea
 *
 * @ORM\Table(name="e_sagaco.tb_dvi_area", uniqueConstraints={@ORM\UniqueConstraint(name="uk_tb_dvi_area_nb_dvi_area", columns={"nb_dvi_area"})})
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clDviAreaRepository")
 */
class clDviArea
{
    /**
     * @var integer
     *
     * @ORM\Column(name="co_dvi_area", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="e_sagaco.seq_tb_dvi_area_co_dvi_area_1", allocationSize=1, initialValue=1)
     */
    private $coDviArea;

    /**
     * @var string
     *
     * @ORM\Column(name="nb_dvi_area", type="string", length=255, nullable=false)
     */
    private $nbDviArea;

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
     * Get coDviArea
     *
     * @return integer 
     */
    public function getCoDviArea()
    {
        return $this->coDviArea;
    }

    /**
     * Set nbDviArea
     *
     * @param string $nbDviArea
     * @return clDviArea
     */
    public function setNbDviArea($nbDviArea)
    {
        $this->nbDviArea = $nbDviArea;

        return $this;
    }

    /**
     * Get nbDviArea
     *
     * @return string 
     */
    public function getNbDviArea()
    {
        return $this->nbDviArea;
    }

    /**
     * Set fhCreacion
     *
     * @param \DateTime $fhCreacion
     * @return clDviArea
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
     * @return clDviArea
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
    
    public function __toString()
    {
        return $this->getNbDviArea();
    }
}
