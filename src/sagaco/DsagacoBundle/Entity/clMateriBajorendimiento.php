<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ESagaco.tpMateriBajorendimiento
 *
 * @ORM\Table(name="e_sagaco.tp_materi_bajorendimiento")
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clMateriBajorendimientoRepository")
 */
class clMateriBajorendimiento
{
    /**
     * @var integer
     *
     * @ORM\Column(name="co_materi_bajorendimiento", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="e_sagaco.seq_tp_materi_bajorendimiento_co_materi_bajorendimiento_1", allocationSize=1, initialValue=1)
     */
    private $coMateriBajorendimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_materi_bajorendimiento", type="string", length=50, nullable=false)
     */
    private $txMateriBajorendimiento;

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
     * Get coMateriBajorendimiento
     *
     * @return integer 
     */
    public function getCoMateriBajorendimiento()
    {
        return $this->coMateriBajorendimiento;
    }

    /**
     * Set txMateriBajorendimiento
     *
     * @param string $txMateriBajorendimiento
     * @return clMateriBajorendimiento
     */
    public function setTxMateriBajorendimiento($txMateriBajorendimiento)
    {
        $this->txMateriBajorendimiento = $txMateriBajorendimiento;

        return $this;
    }

    /**
     * Get txMateriBajorendimiento
     *
     * @return string 
     */
    public function getTxMateriBajorendimiento()
    {
        return $this->txMateriBajorendimiento;
    }

    /**
     * Set fhCreacion
     *
     * @param \DateTime $fhCreacion
     * @return clMateriBajorendimiento
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
     * @return clMateriBajorendimiento
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
