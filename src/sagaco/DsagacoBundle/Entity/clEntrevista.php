<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ESagaco.tpEntrevista
 *
 * @ORM\Table(name="e_sagaco.tp_entrevista", indexes={@ORM\Index(name="IDX_76159AFF830BBB13", columns={"co_tipo_entrevista"}), @ORM\Index(name="IDX_76159AFFDD4AC395", columns={"co_caso"}), @ORM\Index(name="IDX_76159AFF7BA029ED", columns={"co_cita"})})
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clEntrevistaRepository")
 */
class clEntrevista
{
    /**
     * @var integer
     *
     * @ORM\Column(name="co_entrevista", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="e_sagaco.seq_tp_entrevista_co_entrevista", allocationSize=1, initialValue=1)
     */
    private $coEntrevista;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fh_entrevista", type="datetime", nullable=false)
     */
    private $fhEntrevista;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ho_inicio", type="time", nullable=false)
     */
    private $hoInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ho_culminacion", type="time", nullable=false)
     */
    private $hoCulminacion;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_motivo_individual", type="string", length=255, nullable=true)
     */
    private $txMotivoIndividual;

    /**
     * @var boolean
     *
     * @ORM\Column(name="in_solici_espontanea", type="boolean", nullable=true)
     */
    private $inSoliciEspontanea;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_motivo_entrevista", type="string", length=255, nullable=true)
     */
    private $txMotivoEntrevista;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_tratamiento", type="string", length=255, nullable=true)
     */
    private $txTratamiento;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_observacion", type="string", length=255, nullable=true)
     */
    private $txObservacion;

    /**
     * @var \ESagaco.tbTipoEntrevista
     *
     * @ORM\ManyToOne(targetEntity="clTipoEntrevista")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_tipo_entrevista", referencedColumnName="co_tipo_entrevista")
     * })
     */
    private $coTipoEntrevista;

    /**
     * @var \ESagaco.tpCaso
     *
     * @ORM\ManyToOne(targetEntity="clCaso")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_caso", referencedColumnName="co_caso")
     * })
     */
    private $coCaso;

    /**
     * @var \ESagaco.tpCita
     *
     * @ORM\ManyToOne(targetEntity="clCita")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_cita", referencedColumnName="co_cita")
     * })
     */
    private $coCita;



    /**
     * Get coEntrevista
     *
     * @return integer 
     */
    public function getCoEntrevista()
    {
        return $this->coEntrevista;
    }

    /**
     * Set fhEntrevista
     *
     * @param \DateTime $fhEntrevista
     * @return clEntrevista
     */
    public function setFhEntrevista($fhEntrevista)
    {
        $this->fhEntrevista = $fhEntrevista;

        return $this;
    }

    /**
     * Get fhEntrevista
     *
     * @return \DateTime 
     */
    public function getFhEntrevista()
    {
        return $this->fhEntrevista;
    }

    /**
     * Set hoInicio
     *
     * @param \DateTime $hoInicio
     * @return clEntrevista
     */
    public function setHoInicio($hoInicio)
    {
        $this->hoInicio = $hoInicio;

        return $this;
    }

    /**
     * Get hoInicio
     *
     * @return \DateTime 
     */
    public function getHoInicio()
    {
        return $this->hoInicio;
    }

    /**
     * Set hoCulminacion
     *
     * @param \DateTime $hoCulminacion
     * @return clEntrevista
     */
    public function setHoCulminacion($hoCulminacion)
    {
        $this->hoCulminacion = $hoCulminacion;

        return $this;
    }

    /**
     * Get hoCulminacion
     *
     * @return \DateTime 
     */
    public function getHoCulminacion()
    {
        return $this->hoCulminacion;
    }

    /**
     * Set txMotivoIndividual
     *
     * @param string $txMotivoIndividual
     * @return clEntrevista
     */
    public function setTxMotivoIndividual($txMotivoIndividual)
    {
        $this->txMotivoIndividual = $txMotivoIndividual;

        return $this;
    }

    /**
     * Get txMotivoIndividual
     *
     * @return string 
     */
    public function getTxMotivoIndividual()
    {
        return $this->txMotivoIndividual;
    }

    /**
     * Set inSoliciEspontanea
     *
     * @param boolean $inSoliciEspontanea
     * @return clEntrevista
     */
    public function setInSoliciEspontanea($inSoliciEspontanea)
    {
        $this->inSoliciEspontanea = $inSoliciEspontanea;

        return $this;
    }

    /**
     * Get inSoliciEspontanea
     *
     * @return boolean 
     */
    public function getInSoliciEspontanea()
    {
        return $this->inSoliciEspontanea;
    }

    /**
     * Set txMotivoEntrevista
     *
     * @param string $txMotivoEntrevista
     * @return clEntrevista
     */
    public function setTxMotivoEntrevista($txMotivoEntrevista)
    {
        $this->txMotivoEntrevista = $txMotivoEntrevista;

        return $this;
    }

    /**
     * Get txMotivoEntrevista
     *
     * @return string 
     */
    public function getTxMotivoEntrevista()
    {
        return $this->txMotivoEntrevista;
    }

    /**
     * Set txTratamiento
     *
     * @param string $txTratamiento
     * @return clEntrevista
     */
    public function setTxTratamiento($txTratamiento)
    {
        $this->txTratamiento = $txTratamiento;

        return $this;
    }

    /**
     * Get txTratamiento
     *
     * @return string 
     */
    public function getTxTratamiento()
    {
        return $this->txTratamiento;
    }

    /**
     * Set txObservacion
     *
     * @param string $txObservacion
     * @return clEntrevista
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
     * Set coTipoEntrevista
     *
     * @param \sagaco\DsagacoBundle\Entity\clTipoEntrevista $coTipoEntrevista
     * @return clEntrevista
     */
    public function setCoTipoEntrevista(\sagaco\DsagacoBundle\Entity\clTipoEntrevista $coTipoEntrevista = null)
    {
        $this->coTipoEntrevista = $coTipoEntrevista;

        return $this;
    }

    /**
     * Get coTipoEntrevista
     *
     * @return \sagaco\DsagacoBundle\Entity\clTipoEntrevista 
     */
    public function getCoTipoEntrevista()
    {
        return $this->coTipoEntrevista;
    }

    /**
     * Set coCaso
     *
     * @param \sagaco\DsagacoBundle\Entity\clCaso $coCaso
     * @return clEntrevista
     */
    public function setCoCaso(\sagaco\DsagacoBundle\Entity\clCaso $coCaso = null)
    {
        $this->coCaso = $coCaso;

        return $this;
    }

    /**
     * Get coCaso
     *
     * @return \sagaco\DsagacoBundle\Entity\clCaso 
     */
    public function getCoCaso()
    {
        return $this->coCaso;
    }

    /**
     * Set coCita
     *
     * @param \sagaco\DsagacoBundle\Entity\clCita $coCita
     * @return clEntrevista
     */
    public function setCoCita(\sagaco\DsagacoBundle\Entity\clCita $coCita = null)
    {
        $this->coCita = $coCita;

        return $this;
    }

    /**
     * Get coCita
     *
     * @return \sagaco\DsagacoBundle\Entity\clCita 
     */
    public function getCoCita()
    {
        return $this->coCita;
    }
}
