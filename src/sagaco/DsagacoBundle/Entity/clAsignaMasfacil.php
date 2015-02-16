<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ESagaco.tpAsignaMasfacil
 *
 * @ORM\Table(name="e_sagaco.tp_asigna_masfacil")
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clAsignaMasfacilRepository")
 */
class clAsignaMasfacil
{
    /**
     * @var integer
     *
     * @ORM\Column(name="co_asigna_masfacil", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="e_sagaco.seq_tp_asigna_masfacil_co_asigna_masfacil_1", allocationSize=1, initialValue=1)
     */
    private $coAsignaMasfacil;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_asigna_masfacil", type="string", length=50, nullable=false)
     */
    private $txAsignaMasfacil;

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
     * Get coAsignaMasfacil
     *
     * @return integer 
     */
    public function getCoAsignaMasfacil()
    {
        return $this->coAsignaMasfacil;
    }

    /**
     * Set txAsignaMasfacil
     *
     * @param string $txAsignaMasfacil
     * @return clAsignaMasfacil
     */
    public function setTxAsignaMasfacil($txAsignaMasfacil)
    {
        $this->txAsignaMasfacil = $txAsignaMasfacil;

        return $this;
    }

    /**
     * Get txAsignaMasfacil
     *
     * @return string 
     */
    public function getTxAsignaMasfacil()
    {
        return $this->txAsignaMasfacil;
    }

    /**
     * Set fhCreacion
     *
     * @param \DateTime $fhCreacion
     * @return clAsignaMasfacil
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
     * @return clAsignaMasfacil
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
