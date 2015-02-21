<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ESagaco.tbEstadoCivil
 *
 * @ORM\Table(name="e_sagaco.tb_estado_civil")
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clEstadoCivilRepository")
 */
class clEstadoCivil
{
    /**
     * @var integer
     *
     * @ORM\Column(name="co_estado_civil", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="e_sagaco.seq_tb_estado_civil_co_estado_civil", allocationSize=1, initialValue=1)
     */
    private $coEstadoCivil;

    /**
     * @var string
     *
     * @ORM\Column(name="in_estado_civil", type="string", length=2, nullable=false)
     */
    private $inEstadoCivil;

    /**
     * @var string
     *
     * @ORM\Column(name="nb_estado_civil", type="string", length=15, nullable=false)
     */
    private $nbEstadoCivil;

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
     * Get coEstadoCivil
     *
     * @return integer 
     */
    public function getCoEstadoCivil()
    {
        return $this->coEstadoCivil;
    }

    /**
     * Set inEstadoCivil
     *
     * @param string $inEstadoCivil
     * @return clEstadoCivil
     */
    public function setInEstadoCivil($inEstadoCivil)
    {
        $this->inEstadoCivil = $inEstadoCivil;

        return $this;
    }

    /**
     * Get inEstadoCivil
     *
     * @return string 
     */
    public function getInEstadoCivil()
    {
        return $this->inEstadoCivil;
    }

    /**
     * Set nbEstadoCivil
     *
     * @param string $nbEstadoCivil
     * @return clEstadoCivil
     */
    public function setNbEstadoCivil($nbEstadoCivil)
    {
        $this->nbEstadoCivil = $nbEstadoCivil;

        return $this;
    }

    /**
     * Get nbEstadoCivil
     *
     * @return string 
     */
    public function getNbEstadoCivil()
    {
        return $this->nbEstadoCivil;
    }

    /**
     * Set fhCreacion
     *
     * @param \DateTime $fhCreacion
     * @return clEstadoCivil
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
     * @return clEstadoCivil
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
        return $this->getNbEstadoCivil();
    }
}
