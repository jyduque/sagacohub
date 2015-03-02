<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ESagaco.tbAngeliConfiguracion
 *
 * @ORM\Table(name="e_sagaco.tb_angeli_configuracion", uniqueConstraints={@ORM\UniqueConstraint(name="uk_tb_angeli_configuracion_nu_cuadro_co_angeli_interes_tx_letra", columns={"nu_cuadro", "co_angeli_interes", "tx_letra"})}, indexes={@ORM\Index(name="IDX_94CC930C130207A", columns={"co_angeli_interes"})})
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clAngeliConfiguracionRepository")
 */
class clAngeliConfiguracion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="co_angeli_configuracion", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="e_sagaco.seq_tb_angeli_configuracion_co_angeli_configuracion", allocationSize=1, initialValue=1)
     */
    private $coAngeliConfiguracion;

    /**
     * @var string
     *
     * @ORM\Column(name="nu_cuadro", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $nuCuadro;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_letra", type="string", length=2, nullable=false)
     */
    private $txLetra;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_descripcion", type="string", length=255, nullable=false)
     */
    private $txDescripcion;

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
     * @var \ESagaco.tbAngeliInteres
     *
     * @ORM\ManyToOne(targetEntity="clAngeliInteres")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_angeli_interes", referencedColumnName="co_angeli_interes")
     * })
     */
    private $coAngeliInteres;



    /**
     * Get coAngeliConfiguracion
     *
     * @return integer 
     */
    public function getCoAngeliConfiguracion()
    {
        return $this->coAngeliConfiguracion;
    }

    /**
     * Set nuCuadro
     *
     * @param string $nuCuadro
     * @return clAngeliConfiguracion
     */
    public function setNuCuadro($nuCuadro)
    {
        $this->nuCuadro = $nuCuadro;

        return $this;
    }

    /**
     * Get nuCuadro
     *
     * @return string 
     */
    public function getNuCuadro()
    {
        return $this->nuCuadro;
    }

    /**
     * Set txLetra
     *
     * @param string $txLetra
     * @return clAngeliConfiguracion
     */
    public function setTxLetra($txLetra)
    {
        $this->txLetra = $txLetra;

        return $this;
    }

    /**
     * Get txLetra
     *
     * @return string 
     */
    public function getTxLetra()
    {
        return $this->txLetra;
    }

    /**
     * Set txDescripcion
     *
     * @param string $txDescripcion
     * @return clAngeliConfiguracion
     */
    public function setTxDescripcion($txDescripcion)
    {
        $this->txDescripcion = $txDescripcion;

        return $this;
    }

    /**
     * Get txDescripcion
     *
     * @return string 
     */
    public function getTxDescripcion()
    {
        return $this->txDescripcion;
    }

    /**
     * Set fhCreacion
     *
     * @param \DateTime $fhCreacion
     * @return clAngeliConfiguracion
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
     * @return clAngeliConfiguracion
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
     * Set coAngeliInteres
     *
     * @param \sagaco\DsagacoBundle\Entity\clAngeliInteres $coAngeliInteres
     * @return clAngeliConfiguracion
     */
    public function setCoAngeliInteres(\sagaco\DsagacoBundle\Entity\clAngeliInteres $coAngeliInteres = null)
    {
        $this->coAngeliInteres = $coAngeliInteres;

        return $this;
    }

    /**
     * Get coAngeliInteres
     *
     * @return \sagaco\DsagacoBundle\Entity\clAngeliInteres 
     */
    public function getCoAngeliInteres()
    {
        return $this->coAngeliInteres;
    }
}
