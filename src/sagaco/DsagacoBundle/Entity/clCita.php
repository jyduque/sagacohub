<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ESagaco.tpCita
 *
 * @ORM\Table(name="e_sagaco.tp_cita", indexes={@ORM\Index(name="IDX_1E8A00AE92038EE7", columns={"co_area"}), @ORM\Index(name="IDX_1E8A00AEE8F3E723", columns={"co_estado_cita"}), @ORM\Index(name="IDX_1E8A00AE1A0F11FF", columns={"co_persona"}), @ORM\Index(name="IDX_1E8A00AEBFB8F821", columns={"co_horari_cita"})})
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clCitaRepository")
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

    /**
     * @var string
     *
     * @ORM\Column(name="tx_observacion", type="string", length=255, nullable=true)
     */
    private $txObservacion;

    /**
     * @var \ESagaco.tbArea
     *
     * @ORM\ManyToOne(targetEntity="clArea")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_area", referencedColumnName="co_area")
     * })
     */
    private $coArea;

    /**
     * @var \ESagaco.tbEstadoCita
     *
     * @ORM\ManyToOne(targetEntity="clEstadoCita")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_estado_cita", referencedColumnName="co_estado_cita")
     * })
     */
    private $coEstadoCita;

    /**
     * @var \ESagaco.tbPersona
     *
     * @ORM\ManyToOne(targetEntity="clPersona")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_persona", referencedColumnName="co_persona")
     * })
     */
    private $coPersona;

    /**
     * @var \ESagaco.tpHorariCita
     *
     * @ORM\ManyToOne(targetEntity="clHorariCita")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_horari_cita", referencedColumnName="co_horari_cita")
     * })
     */
    private $coHorariCita;



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
     * Set coHorariCita
     *
     * @param \sagaco\DsagacoBundle\Entity\clHorariCita $coHorariCita
     * @return clCita
     */
    public function setCoHorariCita(\sagaco\DsagacoBundle\Entity\clHorariCita $coHorariCita = null)
    {
        $this->coHorariCita = $coHorariCita;

        return $this;
    }

    /**
     * Get coHorariCita
     *
     * @return \sagaco\DsagacoBundle\Entity\clHorariCita 
     */
    public function getCoHorariCita()
    {
        return $this->coHorariCita;
    }
}
