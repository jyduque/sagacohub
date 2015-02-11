<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ESagaco.tpAsignaMasdificil
 *
 * @ORM\Table(name="e_sagaco.tp_asigna_masdificil")
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clAsignaMasdificilRepository")
 */
class clAsignaMasdificil
{
    /**
     * @var integer
     *
     * @ORM\Column(name="co_asigna_masdificil", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="e_sagaco.seq_tp_asigna_masdificil_co_asigna_masdificil_1", allocationSize=1, initialValue=1)
     */
    private $coAsignaMasdificil;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_asigna_masdificil", type="string", length=50, nullable=false)
     */
    private $txAsignaMasdificil;

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
     * Get coAsignaMasdificil
     *
     * @return integer 
     */
    public function getCoAsignaMasdificil()
    {
        return $this->coAsignaMasdificil;
    }

    /**
     * Set txAsignaMasdificil
     *
     * @param string $txAsignaMasdificil
     * @return clAsignaMasdificil
     */
    public function setTxAsignaMasdificil($txAsignaMasdificil)
    {
        $this->txAsignaMasdificil = $txAsignaMasdificil;

        return $this;
    }

    /**
     * Get txAsignaMasdificil
     *
     * @return string 
     */
    public function getTxAsignaMasdificil()
    {
        return $this->txAsignaMasdificil;
    }

    /**
     * Set fhCreacion
     *
     * @param \DateTime $fhCreacion
     * @return clAsignaMasdificil
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
     * @return clAsignaMasdificil
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
