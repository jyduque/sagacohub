<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ESagaco.tbTipoPrueba
 *
 * @ORM\Table(name="e_sagaco.tb_tipo_prueba")
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clTipoPruebaRepository")
 */
class clTipoPrueba
{
    /**
     * @var integer
     *
     * @ORM\Column(name="co_tipo_prueba", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="e_sagaco.seq_tb_tipo_prueba_co_tipo_prueba", allocationSize=1, initialValue=1)
     */
    private $coTipoPrueba;

    /**
     * @var string
     *
     * @ORM\Column(name="nb_tipo_prueba", type="string", length=50, nullable=false)
     */
    private $nbTipoPrueba;

    /**
     * @var boolean
     *
     * @ORM\Column(name="in_estado", type="boolean", nullable=false)
     */
    private $inEstado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fe_inicio_vigencia", type="date", nullable=false)
     */
    private $feInicioVigencia;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fe_fin_vigencia", type="date", nullable=true)
     */
    private $feFinVigencia;

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
     * Get coTipoPrueba
     *
     * @return integer 
     */
    public function getCoTipoPrueba()
    {
        return $this->coTipoPrueba;
    }

    /**
     * Set nbTipoPrueba
     *
     * @param string $nbTipoPrueba
     * @return clTipoPrueba
     */
    public function setNbTipoPrueba($nbTipoPrueba)
    {
        $this->nbTipoPrueba = $nbTipoPrueba;

        return $this;
    }

    /**
     * Get nbTipoPrueba
     *
     * @return string 
     */
    public function getNbTipoPrueba()
    {
        return $this->nbTipoPrueba;
    }

    /**
     * Set inEstado
     *
     * @param boolean $inEstado
     * @return clTipoPrueba
     */
    public function setInEstado($inEstado)
    {
        $this->inEstado = $inEstado;

        return $this;
    }

    /**
     * Get inEstado
     *
     * @return boolean 
     */
    public function getInEstado()
    {
        return $this->inEstado;
    }

    /**
     * Set feInicioVigencia
     *
     * @param \DateTime $feInicioVigencia
     * @return clTipoPrueba
     */
    public function setFeInicioVigencia($feInicioVigencia)
    {
        $this->feInicioVigencia = $feInicioVigencia;

        return $this;
    }

    /**
     * Get feInicioVigencia
     *
     * @return \DateTime 
     */
    public function getFeInicioVigencia()
    {
        return $this->feInicioVigencia;
    }

    /**
     * Set feFinVigencia
     *
     * @param \DateTime $feFinVigencia
     * @return clTipoPrueba
     */
    public function setFeFinVigencia($feFinVigencia)
    {
        $this->feFinVigencia = $feFinVigencia;

        return $this;
    }

    /**
     * Get feFinVigencia
     *
     * @return \DateTime 
     */
    public function getFeFinVigencia()
    {
        return $this->feFinVigencia;
    }

    /**
     * Set fhCreacion
     *
     * @param \DateTime $fhCreacion
     * @return clTipoPrueba
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
     * @return clTipoPrueba
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
