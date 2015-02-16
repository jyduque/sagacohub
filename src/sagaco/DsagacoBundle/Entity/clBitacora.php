<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ESagaco.thBitacora
 *
 * @ORM\Table(name="e_sagaco.th_bitacora", indexes={@ORM\Index(name="IDX_2E4A3401A0F11FF", columns={"co_persona"})})
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clBitacoraRepository")
 */
class clBitacora
{
    /**
     * @var integer
     *
     * @ORM\Column(name="co_bitacora", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="e_sagaco.seq_th_bitacora_co_bitacora", allocationSize=1, initialValue=1)
     */
    private $coBitacora;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_direcc_url", type="string", length=255, nullable=false)
     */
    private $txDireccUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_direcc_ip", type="string", length=255, nullable=false)
     */
    private $txDireccIp;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fh_fecha_hora", type="datetime", nullable=false)
     */
    private $fhFechaHora;

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
     * @var \ESagaco.tbPersona
     *
     * @ORM\ManyToOne(targetEntity="clPersona")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_persona", referencedColumnName="co_persona")
     * })
     */
    private $coPersona;



    /**
     * Get coBitacora
     *
     * @return integer 
     */
    public function getCoBitacora()
    {
        return $this->coBitacora;
    }

    /**
     * Set txDireccUrl
     *
     * @param string $txDireccUrl
     * @return clBitacora
     */
    public function setTxDireccUrl($txDireccUrl)
    {
        $this->txDireccUrl = $txDireccUrl;

        return $this;
    }

    /**
     * Get txDireccUrl
     *
     * @return string 
     */
    public function getTxDireccUrl()
    {
        return $this->txDireccUrl;
    }

    /**
     * Set txDireccIp
     *
     * @param string $txDireccIp
     * @return clBitacora
     */
    public function setTxDireccIp($txDireccIp)
    {
        $this->txDireccIp = $txDireccIp;

        return $this;
    }

    /**
     * Get txDireccIp
     *
     * @return string 
     */
    public function getTxDireccIp()
    {
        return $this->txDireccIp;
    }

    /**
     * Set fhFechaHora
     *
     * @param \DateTime $fhFechaHora
     * @return clBitacora
     */
    public function setFhFechaHora($fhFechaHora)
    {
        $this->fhFechaHora = $fhFechaHora;

        return $this;
    }

    /**
     * Get fhFechaHora
     *
     * @return \DateTime 
     */
    public function getFhFechaHora()
    {
        return $this->fhFechaHora;
    }

    /**
     * Set fhCreacion
     *
     * @param \DateTime $fhCreacion
     * @return clBitacora
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
     * @return clBitacora
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
     * Set coPersona
     *
     * @param \sagaco\DsagacoBundle\Entity\clPersona $coPersona
     * @return clBitacora
     */
    public function setCoPersona(\sagaco\DsagacoBundle\Entity\clPersona $coPersona = null)
    {
        $this->coPersona = $coPersona;

        return $this;
    }

    /**
     * Get coPersona
     *
     * @return \sagaco\DsagacoBundle\Entity\clPersona 
     */
    public function getCoPersona()
    {
        return $this->coPersona;
    }
}
