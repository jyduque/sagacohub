<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * tp_entrevista
 *
 * @ORM\Table(name="tp_entrevista")
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clEntrevistaRepository")
 */
class clEntrevista
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
     * @ORM\Column(name="co_entrevista", type="integer")
     */
    private $coEntrevista;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_historia", type="text", nullable=true)
     */
    private $txHistoria;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_datos_general", type="text", nullable=true)
     */
    private $txDatosGeneral;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_motivo", type="text", nullable=true)
     */
    private $txMotivo;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_tratamiento", type="text", nullable=true)
     */
    private $txTratamiento;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_observacion", type="text", nullable=true)
     */
    private $txObservacion;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_descripcion", type="text", nullable=true)
     */
    private $txDescripcion;
    
    /** @ORM\OneToOne(targetEntity="sagaco\DsagacoBundle\Entity\clTipoEntrevista") */
    protected $tb_tipo_entrevista;
    
    /** @ORM\ManyToOne(targetEntity="sagaco\DsagacoBundle\Entity\clOrientador") */
    protected $tb_orientador;
    
    /** @ORM\ManyToOne(targetEntity="sagaco\DsagacoBundle\Entity\clCita") */
    protected $tp_cita;
    
    /** @ORM\ManyToOne(targetEntity="sagaco\DsagacoBundle\Entity\clCaso") */
    protected $tp_caso;

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
     * Set coEntrevista
     *
     * @param integer $coEntrevista
     * @return tp_entrevista
     */
    public function setCoEntrevista($coEntrevista)
    {
        $this->coEntrevista = $coEntrevista;

        return $this;
    }

    /**
     * Get coEntrevista
     *
     * @return integer 
     */
    public function getCoEntrevista()
    {
        return $this->coEntrevista;
    }

    /**
     * Set txHistoria
     *
     * @param string $txHistoria
     * @return tp_entrevista
     */
    public function setTxHistoria($txHistoria)
    {
        $this->txHistoria = $txHistoria;

        return $this;
    }

    /**
     * Get txHistoria
     *
     * @return string 
     */
    public function getTxHistoria()
    {
        return $this->txHistoria;
    }

    /**
     * Set txDatosGeneral
     *
     * @param string $txDatosGeneral
     * @return tp_entrevista
     */
    public function setTxDatosGeneral($txDatosGeneral)
    {
        $this->txDatosGeneral = $txDatosGeneral;

        return $this;
    }

    /**
     * Get txDatosGeneral
     *
     * @return string 
     */
    public function getTxDatosGeneral()
    {
        return $this->txDatosGeneral;
    }

    /**
     * Set txMotivo
     *
     * @param string $txMotivo
     * @return tp_entrevista
     */
    public function setTxMotivo($txMotivo)
    {
        $this->txMotivo = $txMotivo;

        return $this;
    }

    /**
     * Get txMotivo
     *
     * @return string 
     */
    public function getTxMotivo()
    {
        return $this->txMotivo;
    }

    /**
     * Set txTratamiento
     *
     * @param string $txTratamiento
     * @return tp_entrevista
     */
    public function setTxTratamiento($txTratamiento)
    {
        $this->txTratamiento = $txTratamiento;

        return $this;
    }

    /**
     * Get txTratamiento
     *
     * @return string 
     */
    public function getTxTratamiento()
    {
        return $this->txTratamiento;
    }

    /**
     * Set txObservacion
     *
     * @param string $txObservacion
     * @return tp_entrevista
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
     * Set txDescripcion
     *
     * @param string $txDescripcion
     * @return tp_entrevista
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
     * Set tb_tipo_entrevista
     *
     * @param string $tb_tipo_entrevista
     * @return tp_entrevista
     */
    public function settb_tipo_entrevista($tb_tipo_entrevista)
    {
        $this->tb_tipo_entrevista = $tb_tipo_entrevista;

        return $this;
    }
    
    /**
     * Get tb_tipo_entrevista
     *
     * @return string 
     */
    public function gettb_tipo_entrevista()
    {
        return $this->tb_tipo_entrevista;
    }
    
    /**
     * Set tb_orientador
     *
     * @param string $tb_orientador
     * @return tp_entrevista
     */
    public function settb_orientador($tb_orientador)
    {
        $this->tb_orientador = $tb_orientador;

        return $this;
    }
    
    /**
     * Get tb_orientador
     *
     * @return string 
     */
    public function gettb_orientador()
    {
        return $this->tb_orientador;
    }
    
    /**
     * Set tp_cita
     *
     * @param string $tp_cita
     * @return tp_entrevista
     */
    public function settp_cita($tp_cita)
    {
        $this->tp_cita = $tp_cita;

        return $this;
    }
    
    /**
     * Get tp_cita
     *
     * @return string 
     */
    public function gettp_cita()
    {
        return $this->tp_cita;
    }
               
    /**
     * Set tp_caso
     *
     * @param string $tp_caso
     * @return tp_entrevista
     */
    public function settp_caso($tp_caso)
    {
        $this->tp_caso = $tp_caso;

        return $this;
    }
    
    /**
     * Get tp_caso
     *
     * @return string 
     */
    public function gettp_caso()
    {
        return $this->tp_caso;
    }
}
