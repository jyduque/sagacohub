<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ESagaco.tbEstado
 *
 * @ORM\Table(name="e_sagaco.tb_estado", uniqueConstraints={@ORM\UniqueConstraint(name="uk_tb_estado_co_pais_tx_inicia_estado", columns={"co_pais", "tx_inicia_estado"})}, indexes={@ORM\Index(name="IDX_6F5615103BCA9D70", columns={"co_pais"})})
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clEstadoRepository")
 */
class clEstado
{
    /**
     * @var integer
     *
     * @ORM\Column(name="co_estado", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="e_sagaco.seq_tb_estado_co_estado", allocationSize=1, initialValue=1)
     */
    private $coEstado;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_inicia_estado", type="string", length=4, nullable=false)
     */
    private $txIniciaEstado;

    /**
     * @var string
     *
     * @ORM\Column(name="nb_estado", type="string", length=50, nullable=false)
     */
    private $nbEstado;

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
     * @var \ESagaco.tbPais
     *
     * @ORM\ManyToOne(targetEntity="clPais")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_pais", referencedColumnName="co_pais")
     * })
     */
    private $coPais;



    /**
     * Get coEstado
     *
     * @return integer 
     */
    public function getCoEstado()
    {
        return $this->coEstado;
    }

    /**
     * Set txIniciaEstado
     *
     * @param string $txIniciaEstado
     * @return clEstado
     */
    public function setTxIniciaEstado($txIniciaEstado)
    {
        $this->txIniciaEstado = $txIniciaEstado;

        return $this;
    }

    /**
     * Get txIniciaEstado
     *
     * @return string 
     */
    public function getTxIniciaEstado()
    {
        return $this->txIniciaEstado;
    }

    /**
     * Set nbEstado
     *
     * @param string $nbEstado
     * @return clEstado
     */
    public function setNbEstado($nbEstado)
    {
        $this->nbEstado = $nbEstado;

        return $this;
    }

    /**
     * Get nbEstado
     *
     * @return string 
     */
    public function getNbEstado()
    {
        return $this->nbEstado;
    }

    /**
     * Set fhCreacion
     *
     * @param \DateTime $fhCreacion
     * @return clEstado
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
     * @return clEstado
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

    /**
     * Set coPais
     *
     * @param \sagaco\DsagacoBundle\Entity\clPais $coPais
     * @return clEstado
     */
    public function setCoPais(\sagaco\DsagacoBundle\Entity\clPais $coPais = null)
    {
        $this->coPais = $coPais;

        return $this;
    }

    /**
     * Get coPais
     *
     * @return \sagaco\DsagacoBundle\Entity\clPais 
     */
    public function getCoPais()
    {
        return $this->coPais;
    }
}
