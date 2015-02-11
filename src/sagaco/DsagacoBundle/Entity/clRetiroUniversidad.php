<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ESagaco.tpRetiroUniversidad
 *
 * @ORM\Table(name="e_sagaco.tp_retiro_universidad")
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clRetiroUniversidadRepository")
 */
class clRetiroUniversidad
{
    /**
     * @var integer
     *
     * @ORM\Column(name="co_retiro_universidad", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="e_sagaco.seq_tp_retiro_universidad_co_retiro_universidad_1", allocationSize=1, initialValue=1)
     */
    private $coRetiroUniversidad;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_lapso", type="string", length=7, nullable=false)
     */
    private $txLapso;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_causa", type="string", length=100, nullable=false)
     */
    private $txCausa;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_lapso_ingreso", type="string", length=7, nullable=false)
     */
    private $txLapsoIngreso;

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
     * Get coRetiroUniversidad
     *
     * @return integer 
     */
    public function getCoRetiroUniversidad()
    {
        return $this->coRetiroUniversidad;
    }

    /**
     * Set txLapso
     *
     * @param string $txLapso
     * @return clRetiroUniversidad
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
     * Set txCausa
     *
     * @param string $txCausa
     * @return clRetiroUniversidad
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
     * Set txLapsoIngreso
     *
     * @param string $txLapsoIngreso
     * @return clRetiroUniversidad
     */
    public function setTxLapsoIngreso($txLapsoIngreso)
    {
        $this->txLapsoIngreso = $txLapsoIngreso;

        return $this;
    }

    /**
     * Get txLapsoIngreso
     *
     * @return string 
     */
    public function getTxLapsoIngreso()
    {
        return $this->txLapsoIngreso;
    }

    /**
     * Set fhCreacion
     *
     * @param \DateTime $fhCreacion
     * @return clRetiroUniversidad
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
     * @return clRetiroUniversidad
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
