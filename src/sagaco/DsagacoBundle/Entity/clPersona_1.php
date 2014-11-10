<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * tb_persona
 *
 * @ORM\Table(name="tb_persona")
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clPersonaRepository")
 */
class clPersona
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
     * @ORM\Column(name="co_persona", type="integer")
     */
    private $coPersona;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_observacion", type="text", nullable=true)
     */
    private $txObservacion;
    
    /** @ORM\ManyToOne(targetEntity="sagaco\DsagacoBundle\Entity\clGrupoRol") */
    protected $tb_grupo_rol;
    
    /** @ORM\OneToOne(targetEntity="sagaco\DsagacoBundle\Entity\clControlEstudios") */
    protected $vi_control_estudios;
    
    /** @ORM\OneToOne(targetEntity="sagaco\DsagacoBundle\Entity\clRecursHumanos") */
    protected $vi_recurs_humanos;  

    /**
     * 
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set coPersona
     *
     * @param integer $coPersona
     * @return tb_persona
     */
    public function setCoPersona($coPersona)
    {
        $this->coPersona = $coPersona;

        return $this;
    }

    /**
     * Get coPersona
     *
     * @return integer 
     */
    public function getCoPersona()
    {
        return $this->coPersona;
    }

    /**
     * Set txObservacion
     *
     * @param string $txObservacion
     * @return tb_persona
     */
    public function setTxObservacion($txObservacion)
    {
        $this->txObservacion = $txObservacion;

        return $this;
    }

    /**
     * Get txObservacion
     *
     * @return string 
     */
    public function getTxObservacion()
    {
        return $this->txObservacion;
    }
        
    /**
     * Set tb_grupo_rol
     *
     * @param string $tb_grupo_rol
     * @return tb_persona
     */
    public function settb_grupo_rol($tb_grupo_rol)
    {
        $this->tb_grupo_rol = $tb_grupo_rol;

        return $this;
    }
    
    /**
     * Get tb_grupo_rol
     *
     * @return string 
     */
    public function gettb_grupo_rol()
    {
        return $this->tb_grupo_rol;
    }
            
    /**
     * Set vi_control_estudios
     *
     * @param string $vi_control_estudios
     * @return tb_persona
     */
    public function setvi_control_estudios($vi_control_estudios)
    {
        $this->vi_control_estudios = $vi_control_estudios;

        return $this;
    }
    
    /**
     * Get vi_control_estudios
     *
     * @return string 
     */
    public function getvi_control_estudios()
    {
        return $this->vi_control_estudios;
    }
               
    /**
     * Set vi_recurs_humanos
     *
     * @param string $vi_recurs_humanos
     * @return tb_persona
     */
    public function setvi_recurs_humanos($vi_recurs_humanos)
    {
        $this->vi_recurs_humanos = $vi_recurs_humanos;

        return $this;
    }
    
    /**
     * Get vi_recurs_humanos
     *
     * @return string 
     */
    public function getvi_recurs_humanos()
    {
        return $this->vi_recurs_humanos;
    }
}
