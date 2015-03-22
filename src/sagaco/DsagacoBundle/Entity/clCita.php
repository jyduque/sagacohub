<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * ESagaco.tpCita
 *
 * @ORM\Table(name="e_sagaco.tp_cita", indexes={@ORM\Index(name="IDX_1E8A00AE92038EE7", columns={"co_area"}), @ORM\Index(name="IDX_1E8A00AEE8F3E723", columns={"co_estado_cita"}), @ORM\Index(name="IDX_1E8A00AE1A0F11FF", columns={"co_persona"})})
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clCitaRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class clCita
{
    /**
     * @var integer
     *
     * @ORM\Column(name="co_cita", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="e_sagaco.seq_tp_cita_co_cita", allocationSize=1, initialValue=1)
     */
    private $coCita;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fe_cita", type="date", nullable=false)
     */
    private $feCita;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ho_cita", type="time", nullable=false)
     */
    private $hoCita;

    /**
     * @var integer
     *
     * @ORM\Column(name="co_cita_reprogramada", type="integer", nullable=true)
     */
    private $coCitaReprogramada;

    /**
     * @var boolean
     *
     * @ORM\Column(name="in_cambio_especialidad", type="boolean", nullable=false)
     */
    private $inCambioEspecialidad;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fh_regist_cita", type="datetime", nullable=false)
     */
    private $fhRegistCita;
    
    public function __construct()
    {    
        $fhRegistCita = new \DateTime();
        $this->fhRegistCita = $fhRegistCita;
        $this->timezone = $fhRegistCita->getTimeZone()->getName();
    }

    /**
     * @var string
     *
     * @ORM\Column(name="tx_observacion", type="string", length=255, nullable=true)
     */
    private $txObservacion;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="clArea")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_area", referencedColumnName="co_area")
     * })
     * @Assert\NotNull(message="Debe seleccionar el Área de atención")
     */
    private $coArea;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="clEstadoCita")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_estado_cita", referencedColumnName="co_estado_cita")
     * })
     */
    private $coEstadoCita;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="clPersona")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_persona", referencedColumnName="co_persona")
     * })
     */
    private $coPersona;
    
    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="clOrientador")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_orientador", referencedColumnName="co_orientador")
     * })
     */
    private $coOrientador;
    
    
       
    /** 
     * @var string
     * 
     * @ORM\Column(name="nb_timezone", type="string") 
     */
    private $timezone; 
    
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
     * Get coCita
     *
     * @return integer 
     */
    public function getCoCita()
    {
        return $this->coCita;
    }
    
    /**
     * Set feCita
     *
     * @param \DateTime $feCita
     * @return clCita
     */
    public function setFeCita($feCita)
    {
        $this->feCita = $feCita;
        return $this;
    }

    /**
     * Get feCita
     *
     * @return \DateTime 
     */
    public function getFeCita()
    {
        return $this->feCita;
        $this->feCita->setTimeZone(new \DateTimeZone($this->timezone));
        return $this->feCita;
    }
    
    /**
     * Set hoCita
     *
     * @param \DateTime $hoCita
     * @return clCita
     */
    public function setHoCita($hoCita)
    {
        $this->hoCita = $hoCita;
        return $this;
    }

    /**
     * Get hoCita
     *
     * @return \DateTime 
     */
    public function getHoCita()
    {
        return $this->hoCita;       
        $this->hoCita->setTimeZone(new \DateTimeZone($this->timezone));
        return $this->hoCita;
    }

    /**
     * Set coCitaReprogramada
     *
     * @param integer $coCitaReprogramada
     * @return clCita
     */
    public function setCoCitaReprogramada($coCitaReprogramada)
    {
        $this->coCitaReprogramada = $coCitaReprogramada;
        return $this;
    }

    /**
     * Get coCitaReprogramada
     *
     * @return integer 
     */
    public function getCoCitaReprogramada()
    {
        return $this->coCitaReprogramada;
    }

    /**
     * Set inCambioEspecialidad
     *
     * @param boolean $inCambioEspecialidad
     * @return clCita
     */
    public function setInCambioEspecialidad($inCambioEspecialidad)
    {
        $this->inCambioEspecialidad = $inCambioEspecialidad;

        return $this;
    }

    /**
     * Get inCambioEspecialidad
     *
     * @return boolean 
     */
    public function getInCambioEspecialidad()
    {
        return $this->inCambioEspecialidad;
    }

    /**
     * Set fhRegistCita
     *
     * @param \DateTime $fhRegistCita
     * @return clCita
     */
    public function setFhRegistCita($fhRegistCita)
    {
        $this->fhRegistCita = $fhRegistCita;
        return $this;
    }

    /**
     * Get fhRegistCita
     *
     * @return \DateTime 
     */
    public function getFhRegistCita()
    {
        return $this->fhRegistCita;
        $this->fhRegistCita->setTimeZone(new \DateTimeZone($this->timezone));
        return $this->fhRegistCita;
    }

    /**
     * Set txObservacion
     *
     * @param string $txObservacion
     * @return clCita
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
     * Set coArea
     *
     * @param \sagaco\DsagacoBundle\Entity\clArea $coArea
     * @return clCita
     */
    public function setCoArea(\sagaco\DsagacoBundle\Entity\clArea $coArea = null)
    {
        $this->coArea = $coArea;

        return $this;
    }

    /**
     * Get coArea
     *
     * @return \sagaco\DsagacoBundle\Entity\clArea 
     */
    public function getCoArea()
    {
        return $this->coArea;
    }

    /**
     * Set coEstadoCita
     *
     * @param \sagaco\DsagacoBundle\Entity\clEstadoCita $coEstadoCita
     * @return clCita
     */
    public function setCoEstadoCita(\sagaco\DsagacoBundle\Entity\clEstadoCita $coEstadoCita = null)
    {
        $this->coEstadoCita = $coEstadoCita;

        return $this;
    }

    /**
     * Get coEstadoCita
     *
     * @return \sagaco\DsagacoBundle\Entity\clEstadoCita 
     */
    public function getCoEstadoCita()
    {
        return $this->coEstadoCita;
    }

    /**
     * Set coPersona
     *
     * @param \sagaco\DsagacoBundle\Entity\clPersona $coPersona
     * @return clCita
     */
    public function setCoPersona(\sagaco\DsagacoBundle\Entity\clPersona $coPersona = null)
    {
        $this->coPersona = $coPersona;

        return $this;
    }

    /**
     * Get coPersona
     *
     * @return \sagaco\DsagacoBundle\Entity\clPersona 
     */
    public function getCoPersona()
    {
        return $this->coPersona;
    }
    
    /**
     * Set coOrientador
     *
     * @param \sagaco\DsagacoBundle\Entity\clOrientador $coOrientador
     * @return clCita
     */
    public function setCoOrientador(\sagaco\DsagacoBundle\Entity\clOrientador $coOrientador = null)
    {
        $this->coOrientador = $coOrientador;

        return $this;
    }

    /**
     * Get coOrientador
     *
     * @return \sagaco\DsagacoBundle\Entity\clOrientador 
     */
    public function getCoOrientador()
    {
        return $this->coOrientador;
    }

    /**
     * Set fhCreacion
     *
     * @param \DateTime $fhCreacion
     * @return clCaso
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
        $this->fhCreacion->setTimeZone(new \DateTimeZone($this->timezone));
        return $this->fhCreacion;
    }

    /**
     * Set fhActualizacion
     *
     * @param \DateTime $fhActualizacion
     * @return clCaso
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
        $this->fhActualizacion->setTimeZone(new \DateTimeZone($this->timezone));
        return $this->fhActualizacion;
        
    }
    
        
    /**
     * @ORM\PrePersist
     */
    public function prePersist()
    {
        //Se registra la fechas de creación, actualización y registro de citas
        $this->setFhCreacion(new \DateTime);
        $this->setFhActualizacion(new \DateTime);
        $this->setFhRegistCita(new \DateTime);        
    }
    
    /**
     * @ORM\PreUpdate
     */
    public function preUpdate()
    {
        //Se actualiza la fechas de actualización de una entidad
        $this->setFhActualizacion(new \DateTime);
    }
}
