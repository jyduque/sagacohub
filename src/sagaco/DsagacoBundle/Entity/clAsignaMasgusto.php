<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ESagaco.tpAsignaMasgusto
 *
 * @ORM\Table(name="e_sagaco.tp_asigna_masgusto")
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clAsignaMasgustoRepository")
 */
class clAsignaMasgusto
{
    /**
     * @var integer
     *
     * @ORM\Column(name="co_asigna_masgusto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="e_sagaco.seq_tp_asigna_masgusto_co_asigna_masgusto_1", allocationSize=1, initialValue=1)
     */
    private $coAsignaMasgusto;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_asigna_masgusto", type="string", length=50, nullable=false)
     */
    private $txAsignaMasgusto;

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
     * Get coAsignaMasgusto
     *
     * @return integer 
     */
    public function getCoAsignaMasgusto()
    {
        return $this->coAsignaMasgusto;
    }

    /**
     * Set txAsignaMasgusto
     *
     * @param string $txAsignaMasgusto
     * @return clAsignaMasgusto
     */
    public function setTxAsignaMasgusto($txAsignaMasgusto)
    {
        $this->txAsignaMasgusto = $txAsignaMasgusto;

        return $this;
    }

    /**
     * Get txAsignaMasgusto
     *
     * @return string 
     */
    public function getTxAsignaMasgusto()
    {
        return $this->txAsignaMasgusto;
    }

    /**
     * Set fhCreacion
     *
     * @param \DateTime $fhCreacion
     * @return clAsignaMasgusto
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
     * @return clAsignaMasgusto
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
