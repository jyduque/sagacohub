<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ESagaco.tpAsignaCursa
 *
 * @ORM\Table(name="e_sagaco.tp_asigna_cursa")
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clAsignaCursaRepository")
 */
class clAsignaCursa
{
    /**
     * @var integer
     *
     * @ORM\Column(name="co_asigna_cursa", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="e_sagaco.seq_tp_asigna_cursa_co_asigna_cursa_1", allocationSize=1, initialValue=1)
     */
    private $coAsignaCursa;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_asigna_cursa", type="string", length=30, nullable=false)
     */
    private $txAsignaCursa;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_semestre", type="string", length=7, nullable=false)
     */
    private $txSemestre;

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
     * Get coAsignaCursa
     *
     * @return integer 
     */
    public function getCoAsignaCursa()
    {
        return $this->coAsignaCursa;
    }

    /**
     * Set txAsignaCursa
     *
     * @param string $txAsignaCursa
     * @return clAsignaCursa
     */
    public function setTxAsignaCursa($txAsignaCursa)
    {
        $this->txAsignaCursa = $txAsignaCursa;

        return $this;
    }

    /**
     * Get txAsignaCursa
     *
     * @return string 
     */
    public function getTxAsignaCursa()
    {
        return $this->txAsignaCursa;
    }

    /**
     * Set txSemestre
     *
     * @param string $txSemestre
     * @return clAsignaCursa
     */
    public function setTxSemestre($txSemestre)
    {
        $this->txSemestre = $txSemestre;

        return $this;
    }

    /**
     * Get txSemestre
     *
     * @return string 
     */
    public function getTxSemestre()
    {
        return $this->txSemestre;
    }

    /**
     * Set fhCreacion
     *
     * @param \DateTime $fhCreacion
     * @return clAsignaCursa
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
     * @return clAsignaCursa
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
