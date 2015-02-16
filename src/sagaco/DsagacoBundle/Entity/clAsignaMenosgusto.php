<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ESagaco.tpAsignaMenosgusto
 *
 * @ORM\Table(name="e_sagaco.tp_asigna_menosgusto")
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clAsignaMenosgustoRepository")
 */
class clAsignaMenosgusto
{
    /**
     * @var integer
     *
     * @ORM\Column(name="co_asigna_menosgusto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="e_sagaco.seq_tp_asigna_menosgusto_co_asigna_menosgusto_1", allocationSize=1, initialValue=1)
     */
    private $coAsignaMenosgusto;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_asigna_menosgusto", type="string", length=50, nullable=false)
     */
    private $txAsignaMenosgusto;

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
     * Get coAsignaMenosgusto
     *
     * @return integer 
     */
    public function getCoAsignaMenosgusto()
    {
        return $this->coAsignaMenosgusto;
    }

    /**
     * Set txAsignaMenosgusto
     *
     * @param string $txAsignaMenosgusto
     * @return clAsignaMenosgusto
     */
    public function setTxAsignaMenosgusto($txAsignaMenosgusto)
    {
        $this->txAsignaMenosgusto = $txAsignaMenosgusto;

        return $this;
    }

    /**
     * Get txAsignaMenosgusto
     *
     * @return string 
     */
    public function getTxAsignaMenosgusto()
    {
        return $this->txAsignaMenosgusto;
    }

    /**
     * Set fhCreacion
     *
     * @param \DateTime $fhCreacion
     * @return clAsignaMenosgusto
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
     * @return clAsignaMenosgusto
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
