<?php

namespace sagaco\DsagacoBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;  

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
/**
 * ESagaco.tbSemestre
 *
 * @ORM\Table(name="e_sagaco.tb_semestre",uniqueConstraints={@ORM\UniqueConstraint(name="uk_tb_semestre_nu_semest_anio_nu_semest_lapso", columns={"nu_semest_anio", "nu_semest_lapso"})})          
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clSemestreRepository")
 * @UniqueEntity(fields={"nuSemestAnio", "nuSemestLapso"}, errorPath="nuSemestLapso", message="Ya existe un Semestre con esas condiciones")
 * 
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
     * @ORM\Column(name="in_activo", type="boolean", nullable=false)
     * @Assert\NotNull(message="Debe seleccionar el estado")
     */
    private $inActivo;

    /**
     * @var string
     *
     * @ORM\Column(name="nu_semest_anio", type="decimal", precision=10, scale=0, nullable=false)
     * @Assert\NotNull(message="Debe seleccionar el Semestre")
     */
    private $nuSemestAnio;
    
    /**
     * @var string
     *
     * @ORM\Column(name="nu_semest_lapso", type="decimal", precision=10, scale=0, nullable=false)
     * @Assert\NotNull(message="Debe seleccionar el Semestre")
     */
    private $nuSemestLapso;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fe_inicio", type="date", nullable=false)
     * @Assert\NotNull(message="Debe seleccionar fecha de vigencia válida")
     * @Assert\Date()
     */
    private $feInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fe_fin", type="date", nullable=false)
     * @Assert\NotNull(message="Debe seleccionar fecha de vigencia válida")
     * @Assert\Date()
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
     * Set nuSemestAnio
     *
     * @param string $nuSemestAnio
     * @return clSemestre
     */
    public function setNuSemestAnio($nuSemestAnio)
    {
        $this->nuSemestAnio = $nuSemestAnio;

        return $this;
    }
    
    /**
     * Set nuSemestLapso
     *
     * @param string nuSemestLapso
     * @return clSemestre
     */
    public function setNuSemestLapso($nuSemestLapso)
    {
        $this->nuSemestLapso = $nuSemestLapso;

        return $this;
    }
    
    /**
     * Get nuSemestAnio
     *
     * @return string 
     */
    public function getNuSemestAnio()
    {
        return $this->nuSemestAnio;
    }
    
    /**
     * Get nuSemestLapso
     *
     * @return string 
     */
    public function getNuSemestLapso()
    {
        return $this->nuSemestLapso;
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
        return $this->getNuSemestAnio().'-'.$this->getNuSemestLapso();        
    }
}
