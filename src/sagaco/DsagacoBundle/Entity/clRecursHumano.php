<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ESagaco.viRecursHumano
 *
 * @ORM\Table(name="e_sagaco.vi_recurs_humano")
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clRecursHumanoRepository")
 */
class clRecursHumano
{
    /**
     * @var integer
     *
     * @ORM\Column(name="co_recurs_humano", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="e_sagaco.seq_vi_recurs_humano_co_recurs_humano", allocationSize=1, initialValue=1)
     */
    private $coRecursHumano;

    /**
     * @var string
     *
     * @ORM\Column(name="nu_cedula", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $nuCedula;

    /**
     * @var string
     *
     * @ORM\Column(name="in_nacionalidad", type="string", length=1, nullable=false)
     */
    private $inNacionalidad;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_primer_nombre", type="string", length=15, nullable=false)
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
     * @ORM\Column(name="tx_primer_apellido", type="string", length=15, nullable=false)
     */
    private $txPrimerApellido;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_segund_apellido", type="string", length=15, nullable=true)
     */
    private $txSegundApellido;

    /**
     * @var string
     *
     * @ORM\Column(name="in_sexo", type="string", length=2, nullable=false)
     */
    private $inSexo;

    /**
     * @var string
     *
     * @ORM\Column(name="in_estado_civil", type="string", length=2, nullable=false)
     */
    private $inEstadoCivil;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_cargo", type="string", length=120, nullable=false)
     */
    private $txCargo;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_correo_electronico", type="string", length=100, nullable=false)
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
     * @ORM\Column(name="tx_lugar_residencia", type="string", length=255, nullable=true)
     */
    private $txLugarResidencia;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fe_nacimiento", type="date", nullable=false)
     */
    private $feNacimiento;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fh_creacion", type="datetime", nullable=true)
     */
    private $fhCreacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fh_actualizacion", type="datetime", nullable=true)
     */
    private $fhActualizacion;



    /**
     * Get coRecursHumano
     *
     * @return integer 
     */
    public function getCoRecursHumano()
    {
        return $this->coRecursHumano;
    }

    /**
     * Set nuCedula
     *
     * @param string $nuCedula
     * @return clRecursHumano
     */
    public function setNuCedula($nuCedula)
    {
        $this->nuCedula = $nuCedula;

        return $this;
    }

    /**
     * Get nuCedula
     *
     * @return string 
     */
    public function getNuCedula()
    {
        return $this->nuCedula;
    }

    /**
     * Set inNacionalidad
     *
     * @param string $inNacionalidad
     * @return clRecursHumano
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
     * Set txPrimerNombre
     *
     * @param string $txPrimerNombre
     * @return clRecursHumano
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
     * @return clRecursHumano
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
     * @return clRecursHumano
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
     * @return clRecursHumano
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
     * Set inSexo
     *
     * @param string $inSexo
     * @return clRecursHumano
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
     * Set inEstadoCivil
     *
     * @param string $inEstadoCivil
     * @return clRecursHumano
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
     * @return clRecursHumano
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
     * @return clRecursHumano
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
     * @return clRecursHumano
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
     * @return clRecursHumano
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
     * @return clRecursHumano
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
     * @return clRecursHumano
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
     * Set feNacimiento
     *
     * @param \DateTime $feNacimiento
     * @return clRecursHumano
     */
    public function setFeNacimiento($feNacimiento)
    {
        $this->feNacimiento = $feNacimiento;

        return $this;
    }

    /**
     * Get feNacimiento
     *
     * @return \DateTime 
     */
    public function getFeNacimiento()
    {
        return $this->feNacimiento;
    }

    /**
     * Set fhCreacion
     *
     * @param \DateTime $fhCreacion
     * @return clRecursHumano
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
     * @return clRecursHumano
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
    
    public function __toString()
    {
        return $this->getTxPrimerNombre();//.' '.$this->getTxPrimerApellido();
    }
}
