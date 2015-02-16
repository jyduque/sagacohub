<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ESagaco.tpHistorPersona
 *
 * @ORM\Table(name="e_sagaco.tp_histor_persona", indexes={@ORM\Index(name="IDX_FB36AA5F60F526BB", columns={"co_ciudad"}), @ORM\Index(name="IDX_FB36AA5F1A0F11FF", columns={"co_persona"})})
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clHistorPersonaRepository")
 */
class clHistorPersona
{
    /**
     * @var integer
     *
     * @ORM\Column(name="co_histor_persona", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="e_sagaco.seq_tp_histor_persona_co_histor_persona", allocationSize=1, initialValue=1)
     */
    private $coHistorPersona;

    /**
     * @var boolean
     *
     * @ORM\Column(name="in_activo", type="boolean", nullable=false)
     */
    private $inActivo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fe_inicio", type="date", nullable=false)
     */
    private $feInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fe_cierre", type="date", nullable=false)
     */
    private $feCierre;

    /**
     * @var boolean
     *
     * @ORM\Column(name="in_estudia", type="boolean", nullable=false)
     */
    private $inEstudia;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_estudi_especifique", type="string", length=100, nullable=true)
     */
    private $txEstudiEspecifique;

    /**
     * @var boolean
     *
     * @ORM\Column(name="in_trabaja", type="boolean", nullable=false)
     */
    private $inTrabaja;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_lugar_trabajo", type="string", length=50, nullable=true)
     */
    private $txLugarTrabajo;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_direccion1", type="string", length=50, nullable=true)
     */
    private $txDireccion1;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_direccion2", type="string", length=50, nullable=true)
     */
    private $txDireccion2;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_observacion", type="string", length=255, nullable=true)
     */
    private $txObservacion;

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
     * @var \ESagaco.tbCiudad
     *
     * @ORM\ManyToOne(targetEntity="ESagaco.tbCiudad")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_ciudad", referencedColumnName="co_ciudad")
     * })
     */
    private $coCiudad;

    /**
     * @var \ESagaco.tbPersona
     *
     * @ORM\ManyToOne(targetEntity="ESagaco.tbPersona")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_persona", referencedColumnName="co_persona")
     * })
     */
    private $coPersona;



    /**
     * Get coHistorPersona
     *
     * @return integer 
     */
    public function getCoHistorPersona()
    {
        return $this->coHistorPersona;
    }

    /**
     * Set inActivo
     *
     * @param boolean $inActivo
     * @return clHistorPersona
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
     * Set feInicio
     *
     * @param \DateTime $feInicio
     * @return clHistorPersona
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
     * Set feCierre
     *
     * @param \DateTime $feCierre
     * @return clHistorPersona
     */
    public function setFeCierre($feCierre)
    {
        $this->feCierre = $feCierre;

        return $this;
    }

    /**
     * Get feCierre
     *
     * @return \DateTime 
     */
    public function getFeCierre()
    {
        return $this->feCierre;
    }

    /**
     * Set inEstudia
     *
     * @param boolean $inEstudia
     * @return clHistorPersona
     */
    public function setInEstudia($inEstudia)
    {
        $this->inEstudia = $inEstudia;

        return $this;
    }

    /**
     * Get inEstudia
     *
     * @return boolean 
     */
    public function getInEstudia()
    {
        return $this->inEstudia;
    }

    /**
     * Set txEstudiEspecifique
     *
     * @param string $txEstudiEspecifique
     * @return clHistorPersona
     */
    public function setTxEstudiEspecifique($txEstudiEspecifique)
    {
        $this->txEstudiEspecifique = $txEstudiEspecifique;

        return $this;
    }

    /**
     * Get txEstudiEspecifique
     *
     * @return string 
     */
    public function getTxEstudiEspecifique()
    {
        return $this->txEstudiEspecifique;
    }

    /**
     * Set inTrabaja
     *
     * @param boolean $inTrabaja
     * @return clHistorPersona
     */
    public function setInTrabaja($inTrabaja)
    {
        $this->inTrabaja = $inTrabaja;

        return $this;
    }

    /**
     * Get inTrabaja
     *
     * @return boolean 
     */
    public function getInTrabaja()
    {
        return $this->inTrabaja;
    }

    /**
     * Set txLugarTrabajo
     *
     * @param string $txLugarTrabajo
     * @return clHistorPersona
     */
    public function setTxLugarTrabajo($txLugarTrabajo)
    {
        $this->txLugarTrabajo = $txLugarTrabajo;

        return $this;
    }

    /**
     * Get txLugarTrabajo
     *
     * @return string 
     */
    public function getTxLugarTrabajo()
    {
        return $this->txLugarTrabajo;
    }

    /**
     * Set txDireccion1
     *
     * @param string $txDireccion1
     * @return clHistorPersona
     */
    public function setTxDireccion1($txDireccion1)
    {
        $this->txDireccion1 = $txDireccion1;

        return $this;
    }

    /**
     * Get txDireccion1
     *
     * @return string 
     */
    public function getTxDireccion1()
    {
        return $this->txDireccion1;
    }

    /**
     * Set txDireccion2
     *
     * @param string $txDireccion2
     * @return clHistorPersona
     */
    public function setTxDireccion2($txDireccion2)
    {
        $this->txDireccion2 = $txDireccion2;

        return $this;
    }

    /**
     * Get txDireccion2
     *
     * @return string 
     */
    public function getTxDireccion2()
    {
        return $this->txDireccion2;
    }

    /**
     * Set txObservacion
     *
     * @param string $txObservacion
     * @return clHistorPersona
     */
    public function setTxObservacion($txObservacion)
    {
        $this->txObservacion = $txObservacion;

        return $this;
    }

    /**
     * Get txObservacion
     *
     * @return string 
     */
    public function getTxObservacion()
    {
        return $this->txObservacion;
    }

    /**
     * Set fhCreacion
     *
     * @param \DateTime $fhCreacion
     * @return clHistorPersona
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
     * @return clHistorPersona
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
     * Set coCiudad
     *
     * @param \sagaco\DsagacoBundle\Entity\ESagaco.tbCiudad $coCiudad
     * @return clHistorPersona
     */
    public function setCoCiudad(\sagaco\DsagacoBundle\Entity\clCiudad $coCiudad = null)
    {
        $this->coCiudad = $coCiudad;

        return $this;
    }

    /**
     * Get coCiudad
     *
     * @return \sagaco\DsagacoBundle\Entity\ESagaco.tbCiudad 
     */
    public function getCoCiudad()
    {
        return $this->coCiudad;
    }

    /**
     * Set coPersona
     *
     * @param \sagaco\DsagacoBundle\Entity\ESagaco.tbPersona $coPersona
     * @return clHistorPersona
     */
    public function setCoPersona(\sagaco\DsagacoBundle\Entity\clPersona $coPersona = null)
    {
        $this->coPersona = $coPersona;

        return $this;
    }

    /**
     * Get coPersona
     *
     * @return \sagaco\DsagacoBundle\Entity\ESagaco.tbPersona 
     */
    public function getCoPersona()
    {
        return $this->coPersona;
    }
}
