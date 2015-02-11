<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ESagaco.tpJerarqCarrerasopsu
 *
 * @ORM\Table(name="e_sagaco.tp_jerarq_carrerasopsu")
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clJerarqCarrerasopsuRepository")
 */
class clJerarqCarrerasopsu
{
    /**
     * @var integer
     *
     * @ORM\Column(name="co_jerarq_carrerasopsu", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="e_sagaco.seq_tp_jerarq_carrerasopsu_co_jerarq_carrerasopsu_1", allocationSize=1, initialValue=1)
     */
    private $coJerarqCarrerasopsu;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_opcion", type="string", length=50, nullable=false)
     */
    private $txOpcion;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_universidad", type="string", length=100, nullable=false)
     */
    private $txUniversidad;

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
     * Get coJerarqCarrerasopsu
     *
     * @return integer 
     */
    public function getCoJerarqCarrerasopsu()
    {
        return $this->coJerarqCarrerasopsu;
    }

    /**
     * Set txOpcion
     *
     * @param string $txOpcion
     * @return clJerarqCarrerasopsu
     */
    public function setTxOpcion($txOpcion)
    {
        $this->txOpcion = $txOpcion;

        return $this;
    }

    /**
     * Get txOpcion
     *
     * @return string 
     */
    public function getTxOpcion()
    {
        return $this->txOpcion;
    }

    /**
     * Set txUniversidad
     *
     * @param string $txUniversidad
     * @return clJerarqCarrerasopsu
     */
    public function setTxUniversidad($txUniversidad)
    {
        $this->txUniversidad = $txUniversidad;

        return $this;
    }

    /**
     * Get txUniversidad
     *
     * @return string 
     */
    public function getTxUniversidad()
    {
        return $this->txUniversidad;
    }

    /**
     * Set fhCreacion
     *
     * @param \DateTime $fhCreacion
     * @return clJerarqCarrerasopsu
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
     * @return clJerarqCarrerasopsu
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
