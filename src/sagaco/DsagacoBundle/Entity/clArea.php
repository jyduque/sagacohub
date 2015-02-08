<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ESagaco.tbArea
 *
 * @ORM\Table(name="e_sagaco.tb_area")
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clAreaRepository")
 */
class clArea
{
    /**
     * @var integer
     *
     * @ORM\Column(name="co_area", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="e_sagaco.seq_tb_area_co_area_1", allocationSize=1, initialValue=1)
     */
    private $coArea;

    /**
     * @var string
     *
     * @ORM\Column(name="nb_area", type="string", length=255, nullable=false)
     */
    private $nbArea;

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
     * Get coArea
     *
     * @return integer 
     */
    public function getCoArea()
    {
        return $this->coArea;
    }

    /**
     * Set nbArea
     *
     * @param string $nbArea
     * @return clArea
     */
    public function setNbArea($nbArea)
    {
        $this->nbArea = $nbArea;

        return $this;
    }

    /**
     * Get nbArea
     *
     * @return string 
     */
    public function getNbArea()
    {
        return $this->nbArea;
    }

    /**
     * Set fhCreacion
     *
     * @param \DateTime $fhCreacion
     * @return clArea
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
     * @return clArea
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
}
