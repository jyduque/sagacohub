<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ESagaco.tbPais
 *
 * @ORM\Table(name="e_sagaco.tb_pais", uniqueConstraints={@ORM\UniqueConstraint(name="uk_tb_pais_tx_inicia_pais", columns={"tx_inicia_pais"})})
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clPaisRepository")
 */
class clPais
{
    /**
     * @var integer
     *
     * @ORM\Column(name="co_pais", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="e_sagaco.seq_tb_pais_co_pais_seq", allocationSize=1, initialValue=1)
     */
    private $coPais;

    /**
     * @var string
     *
     * @ORM\Column(name="nb_pais", type="string", length=50, nullable=false)
     */
    private $nbPais;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_inicia_pais", type="string", length=4, nullable=false)
     */
    private $txIniciaPais;

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
     * Get coPais
     *
     * @return integer 
     */
    public function getCoPais()
    {
        return $this->coPais;
    }

    /**
     * Set nbPais
     *
     * @param string $nbPais
     * @return clPais
     */
    public function setNbPais($nbPais)
    {
        $this->nbPais = $nbPais;

        return $this;
    }

    /**
     * Get nbPais
     *
     * @return string 
     */
    public function getNbPais()
    {
        return $this->nbPais;
    }

    /**
     * Set txIniciaPais
     *
     * @param string $txIniciaPais
     * @return clPais
     */
    public function setTxIniciaPais($txIniciaPais)
    {
        $this->txIniciaPais = $txIniciaPais;

        return $this;
    }

    /**
     * Get txIniciaPais
     *
     * @return string 
     */
    public function getTxIniciaPais()
    {
        return $this->txIniciaPais;
    }

    /**
     * Set fhCreacion
     *
     * @param \DateTime $fhCreacion
     * @return clPais
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
     * @return clPais
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
