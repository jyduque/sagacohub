<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ESagaco.tpAngeliRespuesta
 *
 * @ORM\Table(name="e_sagaco.tp_angeli_respuesta", indexes={@ORM\Index(name="IDX_7D457DAB130207A", columns={"co_angeli_interes"}), @ORM\Index(name="IDX_7D457DABA8023D66", columns={"co_prueba"})})
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clAngeliRespuestaRepository")
 */
class clAngeliRespuesta
{
    /**
     * @var integer
     *
     * @ORM\Column(name="co_angeli_respuesta", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="e_sagaco.seq_tp_angeli_respuesta_co_angeli_respuesta", allocationSize=1, initialValue=1)
     */
    private $coAngeliRespuesta;

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
     * @ORM\Column(name="nu_respuesta", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $nuRespuesta;

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
     * @ORM\ManyToOne(targetEntity="ESagaco.tbAngeliInteres")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_angeli_interes", referencedColumnName="co_angeli_interes")
     * })
     */
    private $coAngeliInteres;

    /**
     * @var \ESagaco.tpPrueba
     *
     * @ORM\ManyToOne(targetEntity="ESagaco.tpPrueba")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_prueba", referencedColumnName="co_prueba")
     * })
     */
    private $coPrueba;



    /**
     * Get coAngeliRespuesta
     *
     * @return integer 
     */
    public function getCoAngeliRespuesta()
    {
        return $this->coAngeliRespuesta;
    }

    /**
     * Set nuCuadro
     *
     * @param string $nuCuadro
     * @return clAngeliRespuesta
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
     * @return clAngeliRespuesta
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
     * Set nuRespuesta
     *
     * @param string $nuRespuesta
     * @return clAngeliRespuesta
     */
    public function setNuRespuesta($nuRespuesta)
    {
        $this->nuRespuesta = $nuRespuesta;

        return $this;
    }

    /**
     * Get nuRespuesta
     *
     * @return string 
     */
    public function getNuRespuesta()
    {
        return $this->nuRespuesta;
    }

    /**
     * Set fhCreacion
     *
     * @param \DateTime $fhCreacion
     * @return clAngeliRespuesta
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
     * @return clAngeliRespuesta
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
     * @param \sagaco\DsagacoBundle\Entity\ESagaco.tbAngeliInteres $coAngeliInteres
     * @return clAngeliRespuesta
     */
    public function setCoAngeliInteres(\sagaco\DsagacoBundle\Entity\clAngeliInteres $coAngeliInteres = null)
    {
        $this->coAngeliInteres = $coAngeliInteres;

        return $this;
    }

    /**
     * Get coAngeliInteres
     *
     * @return \sagaco\DsagacoBundle\Entity\ESagaco.tbAngeliInteres 
     */
    public function getCoAngeliInteres()
    {
        return $this->coAngeliInteres;
    }

    /**
     * Set coPrueba
     *
     * @param \sagaco\DsagacoBundle\Entity\ESagaco.tpPrueba $coPrueba
     * @return clAngeliRespuesta
     */
    public function setCoPrueba(\sagaco\DsagacoBundle\Entity\clPrueba $coPrueba = null)
    {
        $this->coPrueba = $coPrueba;

        return $this;
    }

    /**
     * Get coPrueba
     *
     * @return \sagaco\DsagacoBundle\Entity\ESagaco.tpPrueba 
     */
    public function getCoPrueba()
    {
        return $this->coPrueba;
    }
}
