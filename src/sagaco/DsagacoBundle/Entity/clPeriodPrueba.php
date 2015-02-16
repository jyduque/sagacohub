<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ESagaco.tpPeriodPrueba
 *
 * @ORM\Table(name="e_sagaco.tp_period_prueba")
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clPeriodPruebaRepository")
 */
class clPeriodPrueba
{
    /**
     * @var integer
     *
     * @ORM\Column(name="co_period_prueba", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="e_sagaco.seq_tp_period_prueba_co_period_prueba_1", allocationSize=1, initialValue=1)
     */
    private $coPeriodPrueba;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_lapso", type="string", length=7, nullable=false)
     */
    private $txLapso;

    /**
     * @var string
     *
     * @ORM\Column(name="nu_indice_academico", type="decimal", precision=1, scale=1, nullable=false)
     */
    private $nuIndiceAcademico;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_causa", type="string", length=50, nullable=false)
     */
    private $txCausa;

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
     * Get coPeriodPrueba
     *
     * @return integer 
     */
    public function getCoPeriodPrueba()
    {
        return $this->coPeriodPrueba;
    }

    /**
     * Set txLapso
     *
     * @param string $txLapso
     * @return clPeriodPrueba
     */
    public function setTxLapso($txLapso)
    {
        $this->txLapso = $txLapso;

        return $this;
    }

    /**
     * Get txLapso
     *
     * @return string 
     */
    public function getTxLapso()
    {
        return $this->txLapso;
    }

    /**
     * Set nuIndiceAcademico
     *
     * @param string $nuIndiceAcademico
     * @return clPeriodPrueba
     */
    public function setNuIndiceAcademico($nuIndiceAcademico)
    {
        $this->nuIndiceAcademico = $nuIndiceAcademico;

        return $this;
    }

    /**
     * Get nuIndiceAcademico
     *
     * @return string 
     */
    public function getNuIndiceAcademico()
    {
        return $this->nuIndiceAcademico;
    }

    /**
     * Set txCausa
     *
     * @param string $txCausa
     * @return clPeriodPrueba
     */
    public function setTxCausa($txCausa)
    {
        $this->txCausa = $txCausa;

        return $this;
    }

    /**
     * Get txCausa
     *
     * @return string 
     */
    public function getTxCausa()
    {
        return $this->txCausa;
    }

    /**
     * Set fhCreacion
     *
     * @param \DateTime $fhCreacion
     * @return clPeriodPrueba
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
     * @return clPeriodPrueba
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
