<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * vi_recurs_humanos
 *
 * @ORM\Table(name="vi_recurs_humanos")
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clRecursHumanosRepository")
 */
class clRecursHumanos
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
     * @ORM\Column(name="co_recurs_humanos", type="integer")
     */
    private $coRecursHumanos;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_primer_nombre", type="string", length=15)
     */
    private $txPrimerNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_segund_nombre", type="string", length=15, nullable=true)
     */
    private $txSegundNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_primer_apellido", type="string", length=15)
     */
    private $txPrimerApellido;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_segund_apellido", type="string", length=15, nullable=true)
     */
    private $txSegundApellido;

    /**
     * @var integer
     *
     * @ORM\Column(name="nu_cedula", type="integer")
     */
    private $nuCedula;

    /**
     * @var string
     *
     * @ORM\Column(name="in_sexo", type="string", length=1)
     */
    private $inSexo;

    /**
     * @var string
     *
     * @ORM\Column(name="in_nacionalidad", type="string", length=1)
     */
    private $inNacionalidad;

    /**
     * @var string
     *
     * @ORM\Column(name="in_estado_civil", type="string", length=1)
     */
    private $inEstadoCivil;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_cargo", type="string", length=120)
     */
    private $txCargo;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_correo_electronico", type="string", length=100)
     */
    private $txCorreoElectronico;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_telefo_habitacion", type="string", length=15, nullable=true)
     */
    private $txTelefoHabitacion;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_telefo_celular", type="string", length=15, nullable=true)
     */
    private $txTelefoCelular;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_telefo_oficina", type="string", length=15, nullable=true)
     */
    private $txTelefoOficina;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_lugar_residencia", type="text", nullable=true)
     */
    private $txLugarResidencia;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_descripcion", type="text", nullable=true)
     */
    private $txDescripcion;
    
    /** @ORM\OneToOne(targetEntity="sagaco\DsagacoBundle\Entity\clBenefiHumanos") */
    protected $vi_benefi_humanos;

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
     * Set coRecursHumanos
     *
     * @param integer $coRecursHumanos
     * @return vi_recurs_humanos
     */
    public function setCoRecursHumanos($coRecursHumanos)
    {
        $this->coRecursHumanos = $coRecursHumanos;

        return $this;
    }

    /**
     * Get coRecursHumanos
     *
     * @return integer 
     */
    public function getCoRecursHumanos()
    {
        return $this->coRecursHumanos;
    }

    /**
     * Set txPrimerNombre
     *
     * @param string $txPrimerNombre
     * @return vi_recurs_humanos
     */
    public function setTxPrimerNombre($txPrimerNombre)
    {
        $this->txPrimerNombre = $txPrimerNombre;

        return $this;
    }

    /**
     * Get txPrimerNombre
     *
     * @return string 
     */
    public function getTxPrimerNombre()
    {
        return $this->txPrimerNombre;
    }

    /**
     * Set txSegundNombre
     *
     * @param string $txSegundNombre
     * @return vi_recurs_humanos
     */
    public function setTxSegundNombre($txSegundNombre)
    {
        $this->txSegundNombre = $txSegundNombre;

        return $this;
    }

    /**
     * Get txSegundNombre
     *
     * @return string 
     */
    public function getTxSegundNombre()
    {
        return $this->txSegundNombre;
    }

    /**
     * Set txPrimerApellido
     *
     * @param string $txPrimerApellido
     * @return vi_recurs_humanos
     */
    public function setTxPrimerApellido($txPrimerApellido)
    {
        $this->txPrimerApellido = $txPrimerApellido;

        return $this;
    }

    /**
     * Get txPrimerApellido
     *
     * @return string 
     */
    public function getTxPrimerApellido()
    {
        return $this->txPrimerApellido;
    }

    /**
     * Set txSegundApellido
     *
     * @param string $txSegundApellido
     * @return vi_recurs_humanos
     */
    public function setTxSegundApellido($txSegundApellido)
    {
        $this->txSegundApellido = $txSegundApellido;

        return $this;
    }

    /**
     * Get txSegundApellido
     *
     * @return string 
     */
    public function getTxSegundApellido()
    {
        return $this->txSegundApellido;
    }

    /**
     * Set nuCedula
     *
     * @param integer $nuCedula
     * @return vi_recurs_humanos
     */
    public function setNuCedula($nuCedula)
    {
        $this->nuCedula = $nuCedula;

        return $this;
    }

    /**
     * Get nuCedula
     *
     * @return integer 
     */
    public function getNuCedula()
    {
        return $this->nuCedula;
    }

    /**
     * Set inSexo
     *
     * @param string $inSexo
     * @return vi_recurs_humanos
     */
    public function setInSexo($inSexo)
    {
        $this->inSexo = $inSexo;

        return $this;
    }

    /**
     * Get inSexo
     *
     * @return string 
     */
    public function getInSexo()
    {
        return $this->inSexo;
    }

    /**
     * Set inNacionalidad
     *
     * @param string $inNacionalidad
     * @return vi_recurs_humanos
     */
    public function setInNacionalidad($inNacionalidad)
    {
        $this->inNacionalidad = $inNacionalidad;

        return $this;
    }

    /**
     * Get inNacionalidad
     *
     * @return string 
     */
    public function getInNacionalidad()
    {
        return $this->inNacionalidad;
    }

    /**
     * Set inEstadoCivil
     *
     * @param string $inEstadoCivil
     * @return vi_recurs_humanos
     */
    public function setInEstadoCivil($inEstadoCivil)
    {
        $this->inEstadoCivil = $inEstadoCivil;

        return $this;
    }

    /**
     * Get inEstadoCivil
     *
     * @return string 
     */
    public function getInEstadoCivil()
    {
        return $this->inEstadoCivil;
    }

    /**
     * Set txCargo
     *
     * @param string $txCargo
     * @return vi_recurs_humanos
     */
    public function setTxCargo($txCargo)
    {
        $this->txCargo = $txCargo;

        return $this;
    }

    /**
     * Get txCargo
     *
     * @return string 
     */
    public function getTxCargo()
    {
        return $this->txCargo;
    }

    /**
     * Set txCorreoElectronico
     *
     * @param string $txCorreoElectronico
     * @return vi_recurs_humanos
     */
    public function setTxCorreoElectronico($txCorreoElectronico)
    {
        $this->txCorreoElectronico = $txCorreoElectronico;

        return $this;
    }

    /**
     * Get txCorreoElectronico
     *
     * @return string 
     */
    public function getTxCorreoElectronico()
    {
        return $this->txCorreoElectronico;
    }

    /**
     * Set txTelefoHabitacion
     *
     * @param string $txTelefoHabitacion
     * @return vi_recurs_humanos
     */
    public function setTxTelefoHabitacion($txTelefoHabitacion)
    {
        $this->txTelefoHabitacion = $txTelefoHabitacion;

        return $this;
    }

    /**
     * Get txTelefoHabitacion
     *
     * @return string 
     */
    public function getTxTelefoHabitacion()
    {
        return $this->txTelefoHabitacion;
    }

    /**
     * Set txTelefoCelular
     *
     * @param string $txTelefoCelular
     * @return vi_recurs_humanos
     */
    public function setTxTelefoCelular($txTelefoCelular)
    {
        $this->txTelefoCelular = $txTelefoCelular;

        return $this;
    }

    /**
     * Get txTelefoCelular
     *
     * @return string 
     */
    public function getTxTelefoCelular()
    {
        return $this->txTelefoCelular;
    }

    /**
     * Set txTelefoOficina
     *
     * @param string $txTelefoOficina
     * @return vi_recurs_humanos
     */
    public function setTxTelefoOficina($txTelefoOficina)
    {
        $this->txTelefoOficina = $txTelefoOficina;

        return $this;
    }

    /**
     * Get txTelefoOficina
     *
     * @return string 
     */
    public function getTxTelefoOficina()
    {
        return $this->txTelefoOficina;
    }

    /**
     * Set txLugarResidencia
     *
     * @param string $txLugarResidencia
     * @return vi_recurs_humanos
     */
    public function setTxLugarResidencia($txLugarResidencia)
    {
        $this->txLugarResidencia = $txLugarResidencia;

        return $this;
    }

    /**
     * Get txLugarResidencia
     *
     * @return string 
     */
    public function getTxLugarResidencia()
    {
        return $this->txLugarResidencia;
    }

    /**
     * Set txDescripcion
     *
     * @param string $txDescripcion
     * @return vi_recurs_humanos
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
     * Set vi_benefi_humanos
     *
     * @param string $vi_benefi_humanos
     * @return vi_recurs_humanos
     */
    public function setvi_benefi_humanos($vi_benefi_humanos)
    {
        $this->vi_benefi_humanos = $vi_benefi_humanos;

        return $this;
    }
    
    /**
     * Get vi_benefi_humanos
     *
     * @return string 
     */
    public function getvi_benefi_humanos()
    {
        return $this->vi_benefi_humanos;
    }
}
