<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ESagaco.tbSemestre
 *
 * @ORM\Table(name="e_sagaco.tb_semestre")
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clSemestreRepository")
 */
class clSemestre
{
    /**
     * @var integer
     *
     * @ORM\Column(name="co_semestre", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="e_sagaco.seq_tb_semestre_co_semestre", allocationSize=1, initialValue=1)
     */
    private $coSemestre;

    /**
     * @var boolean
     *
     * @ORM\Column(name="in_activo", type="boolean", nullable=true)
     */
    private $inActivo;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_semestre", type="string", length=7, nullable=false)
     */
    private $txSemestre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fe_inicio", type="date", nullable=false)
     */
    private $feInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fe_fin", type="date", nullable=false)
     */
    private $feFin;

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
     * Get coSemestre
     *
     * @return integer 
     */
    public function getCoSemestre()
    {
        return $this->coSemestre;
    }

    /**
     * Set inActivo
     *
     * @param boolean $inActivo
     * @return clSemestre
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
     * Set txSemestre
     *
     * @param string $txSemestre
     * @return clSemestre
     */
    public function setTxSemestre($txSemestre)
    {
        $this->txSemestre = $txSemestre;

        return $this;
    }

    /**
     * Get txSemestre
     *
     * @return string 
     */
    public function getTxSemestre()
    {
        return $this->txSemestre;
    }

    /**
     * Set feInicio
     *
     * @param \DateTime $feInicio
     * @return clSemestre
     */
    public function setFeInicio($feInicio)
    {
        $this->feInicio = $feInicio;

        return $this;
    }

    /**
     * Get feInicio
     *
     * @return \DateTime 
     */
    public function getFeInicio()
    {
        return $this->feInicio;
    }

    /**
     * Set feFin
     *
     * @param \DateTime $feFin
     * @return clSemestre
     */
    public function setFeFin($feFin)
    {
        $this->feFin = $feFin;

        return $this;
    }

    /**
     * Get feFin
     *
     * @return \DateTime 
     */
    public function getFeFin()
    {
        return $this->feFin;
    }

    /**
     * Set fhCreacion
     *
     * @param \DateTime $fhCreacion
     * @return clSemestre
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
     * @return clSemestre
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
        return $this->getTxSemestre();
    }
}
