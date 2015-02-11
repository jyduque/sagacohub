<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ESagaco.tbCiudad
 *
 * @ORM\Table(name="e_sagaco.tb_ciudad", uniqueConstraints={@ORM\UniqueConstraint(name="uk_tb_ciudad_co_municipio_tx_inicia_ciudad", columns={"co_municipio", "tx_inicia_ciudad"})}, indexes={@ORM\Index(name="IDX_C78DF16DB7BB26E2", columns={"co_municipio"})})
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clCiudadRepository")
 */
class clCiudad
{
    /**
     * @var integer
     *
     * @ORM\Column(name="co_ciudad", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="e_sagaco.seq_tb_ciudad_co_ciudad", allocationSize=1, initialValue=1)
     */
    private $coCiudad;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_inicia_ciudad", type="string", length=4, nullable=false)
     */
    private $txIniciaCiudad;

    /**
     * @var string
     *
     * @ORM\Column(name="nb_ciudad", type="string", length=50, nullable=false)
     */
    private $nbCiudad;

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
     * @var \ESagaco.tbMunicipio
     *
     * @ORM\ManyToOne(targetEntity="ESagaco.tbMunicipio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_municipio", referencedColumnName="co_municipio")
     * })
     */
    private $coMunicipio;



    /**
     * Get coCiudad
     *
     * @return integer 
     */
    public function getCoCiudad()
    {
        return $this->coCiudad;
    }

    /**
     * Set txIniciaCiudad
     *
     * @param string $txIniciaCiudad
     * @return clCiudad
     */
    public function setTxIniciaCiudad($txIniciaCiudad)
    {
        $this->txIniciaCiudad = $txIniciaCiudad;

        return $this;
    }

    /**
     * Get txIniciaCiudad
     *
     * @return string 
     */
    public function getTxIniciaCiudad()
    {
        return $this->txIniciaCiudad;
    }

    /**
     * Set nbCiudad
     *
     * @param string $nbCiudad
     * @return clCiudad
     */
    public function setNbCiudad($nbCiudad)
    {
        $this->nbCiudad = $nbCiudad;

        return $this;
    }

    /**
     * Get nbCiudad
     *
     * @return string 
     */
    public function getNbCiudad()
    {
        return $this->nbCiudad;
    }

    /**
     * Set fhCreacion
     *
     * @param \DateTime $fhCreacion
     * @return clCiudad
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
     * @return clCiudad
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
     * Set coMunicipio
     *
     * @param \sagaco\DsagacoBundle\Entity\ESagaco.tbMunicipio $coMunicipio
     * @return clCiudad
     */
    public function setCoMunicipio(\sagaco\DsagacoBundle\Entity\clMunicipio $coMunicipio = null)
    {
        $this->coMunicipio = $coMunicipio;

        return $this;
    }

    /**
     * Get coMunicipio
     *
     * @return \sagaco\DsagacoBundle\Entity\ESagaco.tbMunicipio 
     */
    public function getCoMunicipio()
    {
        return $this->coMunicipio;
    }
}
