<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ESagaco.tbEstadoCita
 *
 * @ORM\Table(name="e_sagaco.tb_estado_cita")
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clEstadoCitaRepository")
 */
class clEstadoCita
{
    /**
     * @var integer
     *
     * @ORM\Column(name="co_estado_cita", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="e_sagaco.seq_tb_estado_cita_co_estado_cita", allocationSize=1, initialValue=1)
     */
    private $coEstadoCita;

    /**
     * @var string
     *
     * @ORM\Column(name="nb_estado_cita", type="string", length=20, nullable=false)
     */
    private $nbEstadoCita;

    /**
     * @var boolean
     *
     * @ORM\Column(name="in_activo", type="boolean", nullable=true)
     */
    private $inActivo;

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
     * Get coEstadoCita
     *
     * @return integer 
     */
    public function getCoEstadoCita()
    {
        return $this->coEstadoCita;
    }

    /**
     * Set nbEstadoCita
     *
     * @param string $nbEstadoCita
     * @return clEstadoCita
     */
    public function setNbEstadoCita($nbEstadoCita)
    {
        $this->nbEstadoCita = $nbEstadoCita;

        return $this;
    }

    /**
     * Get nbEstadoCita
     *
     * @return string 
     */
    public function getNbEstadoCita()
    {
        return $this->nbEstadoCita;
    }

    /**
     * Set inActivo
     *
     * @param boolean $inActivo
     * @return clEstadoCita
     */
    public function setInActivo($inActivo)
    {
        $this->inActivo = $inActivo;

        return $this;
    }

    /**
     * Get inActivo
     *
     * @return boolean 
     */
    public function getInActivo()
    {
        return $this->inActivo;
    }

    /**
     * Set fhCreacion
     *
     * @param \DateTime $fhCreacion
     * @return clEstadoCita
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
     * @return clEstadoCita
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
        return $this->getNbEstadoCita();        
    }
}
