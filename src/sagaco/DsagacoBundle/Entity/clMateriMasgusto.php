<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ESagaco.tpMateriMasgusto
 *
 * @ORM\Table(name="e_sagaco.tp_materi_masgusto")
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clMateriMasgustoRepository")
 */
class clMateriMasgusto
{
    /**
     * @var integer
     *
     * @ORM\Column(name="co_materi_masgusto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="e_sagaco.seq_tp_materi_masgusto_co_materi_masgusto_1", allocationSize=1, initialValue=1)
     */
    private $coMateriMasgusto;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_materi_masgusto", type="string", length=50, nullable=false)
     */
    private $txMateriMasgusto;

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
     * Get coMateriMasgusto
     *
     * @return integer 
     */
    public function getCoMateriMasgusto()
    {
        return $this->coMateriMasgusto;
    }

    /**
     * Set txMateriMasgusto
     *
     * @param string $txMateriMasgusto
     * @return clMateriMasgusto
     */
    public function setTxMateriMasgusto($txMateriMasgusto)
    {
        $this->txMateriMasgusto = $txMateriMasgusto;

        return $this;
    }

    /**
     * Get txMateriMasgusto
     *
     * @return string 
     */
    public function getTxMateriMasgusto()
    {
        return $this->txMateriMasgusto;
    }

    /**
     * Set fhCreacion
     *
     * @param \DateTime $fhCreacion
     * @return clMateriMasgusto
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
     * @return clMateriMasgusto
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
