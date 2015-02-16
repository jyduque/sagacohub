<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ESagaco.tpMateriAltorendimiento
 *
 * @ORM\Table(name="e_sagaco.tp_materi_altorendimiento")
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clMateriAltorendimientoRepository")
 */
class clMateriAltorendimiento
{
    /**
     * @var integer
     *
     * @ORM\Column(name="co_materi_altorendimiento", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="e_sagaco.seq_tp_materi_altorendimiento_co_materi_altorendimiento_1", allocationSize=1, initialValue=1)
     */
    private $coMateriAltorendimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_materi_altorendimiento", type="string", length=50, nullable=false)
     */
    private $txMateriAltorendimiento;

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
     * Get coMateriAltorendimiento
     *
     * @return integer 
     */
    public function getCoMateriAltorendimiento()
    {
        return $this->coMateriAltorendimiento;
    }

    /**
     * Set txMateriAltorendimiento
     *
     * @param string $txMateriAltorendimiento
     * @return clMateriAltorendimiento
     */
    public function setTxMateriAltorendimiento($txMateriAltorendimiento)
    {
        $this->txMateriAltorendimiento = $txMateriAltorendimiento;

        return $this;
    }

    /**
     * Get txMateriAltorendimiento
     *
     * @return string 
     */
    public function getTxMateriAltorendimiento()
    {
        return $this->txMateriAltorendimiento;
    }

    /**
     * Set fhCreacion
     *
     * @param \DateTime $fhCreacion
     * @return clMateriAltorendimiento
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
     * @return clMateriAltorendimiento
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
