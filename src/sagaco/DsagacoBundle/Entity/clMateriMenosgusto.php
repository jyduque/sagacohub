<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ESagaco.tpMateriMenosgusto
 *
 * @ORM\Table(name="e_sagaco.tp_materi_menosgusto")
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clMateriMenosgustoRepository")
 */
class clMateriMenosgusto
{
    /**
     * @var integer
     *
     * @ORM\Column(name="co_materi_menosgusto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="e_sagaco.seq_tp_materi_menosgusto_co_materi_menosgusto_1", allocationSize=1, initialValue=1)
     */
    private $coMateriMenosgusto;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_materi_menosgusto", type="string", length=50, nullable=false)
     */
    private $txMateriMenosgusto;

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
     * Get coMateriMenosgusto
     *
     * @return integer 
     */
    public function getCoMateriMenosgusto()
    {
        return $this->coMateriMenosgusto;
    }

    /**
     * Set txMateriMenosgusto
     *
     * @param string $txMateriMenosgusto
     * @return clMateriMenosgusto
     */
    public function setTxMateriMenosgusto($txMateriMenosgusto)
    {
        $this->txMateriMenosgusto = $txMateriMenosgusto;

        return $this;
    }

    /**
     * Get txMateriMenosgusto
     *
     * @return string 
     */
    public function getTxMateriMenosgusto()
    {
        return $this->txMateriMenosgusto;
    }

    /**
     * Set fhCreacion
     *
     * @param \DateTime $fhCreacion
     * @return clMateriMenosgusto
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
     * @return clMateriMenosgusto
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
