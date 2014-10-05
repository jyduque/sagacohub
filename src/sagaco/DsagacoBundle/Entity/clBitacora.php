<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * th_bitacora
 *
 * @ORM\Table(name="th_bitacora")
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clBitacoraRepository")
 */
class clBitacora
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="co_bitacora", type="integer")
     */
    private $coBitacora;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_direcc_url", type="text")
     */
    private $txDireccUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_direcc_ip", type="text")
     */
    private $txDireccIp;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fh_fecha_hora", type="datetime")
     */
    private $fhFechaHora;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_descripcion", type="text", nullable=true)
     */
    private $txDescripcion;
    
    /** @ORM\ManyToOne(targetEntity="sagaco\DsagacoBundle\Entity\clPaginaWeb") */
    protected $tb_pagina_web;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set coBitacora
     *
     * @param integer $coBitacora
     * @return th_bitacora
     */
    public function setCoBitacora($coBitacora)
    {
        $this->coBitacora = $coBitacora;

        return $this;
    }

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
     * @return th_bitacora
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
     * @return th_bitacora
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
     * @return th_bitacora
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
     * Set txDescripcion
     *
     * @param string $txDescripcion
     * @return th_bitacora
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
     * Set tb_pagina_web
     *
     * @param string $tb_pagina_web
     * @return th_bitacora
     */
    public function settb_pagina_web($tb_pagina_web)
    {
        $this->tb_pagina_web = $tb_pagina_web;

        return $this;
    }
    
    /**
     * Get tb_pagina_web
     *
     * @return string 
     */
    public function gettb_pagina_web()
    {
        return $this->tb_pagina_web;
    }
}
