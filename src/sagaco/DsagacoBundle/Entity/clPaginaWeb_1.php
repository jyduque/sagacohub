<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * tb_pagina_web
 *
 * @ORM\Table(name="tb_pagina_web")
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clPaginaWebRepository")
 */
class clPaginaWeb
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
     * @ORM\Column(name="co_pagina_web", type="integer")
     */
    private $coPaginaWeb;

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
     * @var string
     *
     * @ORM\Column(name="tx_descripcion", type="text", nullable=true)
     */
    private $txDescripcion;

    /** @ORM\ManyToOne(targetEntity="sagaco\DsagacoBundle\Entity\clPersona") */
    protected $tb_persona;
    
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
     * Set coPaginaWeb
     *
     * @param integer $coPaginaWeb
     * @return tb_pagina_web
     */
    public function setCoPaginaWeb($coPaginaWeb)
    {
        $this->coPaginaWeb = $coPaginaWeb;

        return $this;
    }

    /**
     * Get coPaginaWeb
     *
     * @return integer 
     */
    public function getCoPaginaWeb()
    {
        return $this->coPaginaWeb;
    }

    /**
     * Set txDireccUrl
     *
     * @param string $txDireccUrl
     * @return tb_pagina_web
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
     * @return tb_pagina_web
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
     * Set txDescripcion
     *
     * @param string $txDescripcion
     * @return tb_pagina_web
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
     * Set tb_persona
     *
     * @param string $tb_persona
     * @return tb_pagina_web
     */
    public function settb_persona($tb_persona)
    {
        $this->tb_persona = $tb_persona;

        return $this;
    }
    
    /**
     * Get tb_persona
     *
     * @return string 
     */
    public function gettb_persona()
    {
        return $this->tb_persona;
    }
}
