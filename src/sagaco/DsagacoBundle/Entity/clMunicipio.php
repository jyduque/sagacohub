<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ESagaco.tbMunicipio
 *
 * @ORM\Table(name="e_sagaco.tb_municipio", uniqueConstraints={@ORM\UniqueConstraint(name="uk_tb_municipio_co_estado_tx_inicia_municipio", columns={"co_estado", "tx_inicia_municipio"})}, indexes={@ORM\Index(name="IDX_AE18C511C82EC2C6", columns={"co_estado"})})
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clMunicipioRepository")
 */
class clMunicipio
{
    /**
     * @var integer
     *
     * @ORM\Column(name="co_municipio", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="e_sagaco.seq_tb_municipio_co_municipio", allocationSize=1, initialValue=1)
     */
    private $coMunicipio;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_inicia_municipio", type="string", length=4, nullable=false)
     */
    private $txIniciaMunicipio;

    /**
     * @var string
     *
     * @ORM\Column(name="nb_municipio", type="string", length=50, nullable=false)
     */
    private $nbMunicipio;

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
     * @var \ESagaco.tbEstado
     *
     * @ORM\ManyToOne(targetEntity="clEstado")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_estado", referencedColumnName="co_estado")
     * })
     */
    private $coEstado;



    /**
     * Get coMunicipio
     *
     * @return integer 
     */
    public function getCoMunicipio()
    {
        return $this->coMunicipio;
    }

    /**
     * Set txIniciaMunicipio
     *
     * @param string $txIniciaMunicipio
     * @return clMunicipio
     */
    public function setTxIniciaMunicipio($txIniciaMunicipio)
    {
        $this->txIniciaMunicipio = $txIniciaMunicipio;

        return $this;
    }

    /**
     * Get txIniciaMunicipio
     *
     * @return string 
     */
    public function getTxIniciaMunicipio()
    {
        return $this->txIniciaMunicipio;
    }

    /**
     * Set nbMunicipio
     *
     * @param string $nbMunicipio
     * @return clMunicipio
     */
    public function setNbMunicipio($nbMunicipio)
    {
        $this->nbMunicipio = $nbMunicipio;

        return $this;
    }

    /**
     * Get nbMunicipio
     *
     * @return string 
     */
    public function getNbMunicipio()
    {
        return $this->nbMunicipio;
    }

    /**
     * Set fhCreacion
     *
     * @param \DateTime $fhCreacion
     * @return clMunicipio
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
     * @return clMunicipio
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
     * Set coEstado
     *
     * @param \sagaco\DsagacoBundle\Entity\clEstado $coEstado
     * @return clMunicipio
     */
    public function setCoEstado(\sagaco\DsagacoBundle\Entity\clEstado $coEstado = null)
    {
        $this->coEstado = $coEstado;

        return $this;
    }

    /**
     * Get coEstado
     *
     * @return \sagaco\DsagacoBundle\Entity\clEstado 
     */
    public function getCoEstado()
    {
        return $this->coEstado;
    }
}
