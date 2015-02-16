<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ESagaco.tpMateriMasfacil
 *
 * @ORM\Table(name="e_sagaco.tp_materi_masfacil")
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clMateriMasfacilRepository")
 */
class clMateriMasfacil
{
    /**
     * @var integer
     *
     * @ORM\Column(name="co_materi_masfacil", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="e_sagaco.seq_tp_materi_masfacil_co_materi_masfacil_1", allocationSize=1, initialValue=1)
     */
    private $coMateriMasfacil;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_materi_masfacil", type="string", length=50, nullable=false)
     */
    private $txMateriMasfacil;

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
     * Get coMateriMasfacil
     *
     * @return integer 
     */
    public function getCoMateriMasfacil()
    {
        return $this->coMateriMasfacil;
    }

    /**
     * Set txMateriMasfacil
     *
     * @param string $txMateriMasfacil
     * @return clMateriMasfacil
     */
    public function setTxMateriMasfacil($txMateriMasfacil)
    {
        $this->txMateriMasfacil = $txMateriMasfacil;

        return $this;
    }

    /**
     * Get txMateriMasfacil
     *
     * @return string 
     */
    public function getTxMateriMasfacil()
    {
        return $this->txMateriMasfacil;
    }

    /**
     * Set fhCreacion
     *
     * @param \DateTime $fhCreacion
     * @return clMateriMasfacil
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
     * @return clMateriMasfacil
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
