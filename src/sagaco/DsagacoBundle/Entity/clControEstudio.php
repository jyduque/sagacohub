<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ESagaco.viControEstudio
 *
 * @ORM\Table(name="e_sagaco.vi_contro_estudio", uniqueConstraints={@ORM\UniqueConstraint(name="uk_vi_control_estudio_nu_cedula_in_nacionalidad", columns={"nu_cedula", "in_nacionalidad"})})
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clControEstudioRepository")
 */
class clControEstudio
{
    /**
     * @var integer
     *
     * @ORM\Column(name="co_contro_estudio", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="e_sagaco.seq_vi_contro_estudio_co_contro_estudio", allocationSize=1, initialValue=1)
     */
    private $coControEstudio;

    /**
     * @var string
     *
     * @ORM\Column(name="nu_cedula", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $nuCedula;

    /**
     * @var string
     *
     * @ORM\Column(name="in_nacionalidad", type="string", length=2, nullable=false)
     */
    private $inNacionalidad;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_primer_nombre", type="string", length=20, nullable=false)
     */
    private $txPrimerNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_segund_nombre", type="string", length=20, nullable=true)
     */
    private $txSegundNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_primer_apellido", type="string", length=20, nullable=false)
     */
    private $txPrimerApellido;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_segund_apellido", type="string", length=20, nullable=true)
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
     * @ORM\Column(name="tx_tipo_ingreso", type="string", length=50, nullable=false)
     */
    private $txTipoIngreso;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_carrera", type="string", length=50, nullable=false)
     */
    private $txCarrera;

    /**
     * @var integer
     *
     * @ORM\Column(name="nu_semest_cursados", type="integer", nullable=true)
     */
    private $nuSemestCursados;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_semest_actual", type="string", length=7, nullable=true)
     */
    private $txSemestActual;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_turno", type="string", length=15, nullable=true)
     */
    private $txTurno;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_correo_electronico", type="string", length=80, nullable=false)
     */
    private $txCorreoElectronico;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_telefo_casa", type="string", length=16, nullable=true)
     */
    private $txTelefoCasa;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_telefo_celular", type="string", length=15, nullable=true)
     */
    private $txTelefoCelular;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_pais", type="string", length=50, nullable=false)
     */
    private $txPais;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_estado", type="string", length=50, nullable=false)
     */
    private $txEstado;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_municipio", type="string", length=50, nullable=true)
     */
    private $txMunicipio;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_ciudad", type="string", length=50, nullable=false)
     */
    private $txCiudad;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_direccion1", type="string", length=50, nullable=false)
     */
    private $txDireccion1;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_direccion2", type="string", length=50, nullable=true)
     */
    private $txDireccion2;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fe_nacimiento", type="date", nullable=false)
     */
    private $feNacimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_lugar_nacimiento", type="string", length=100, nullable=true)
     */
    private $txLugarNacimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_lapso_ingreso", type="string", length=15, nullable=false)
     */
    private $txLapsoIngreso;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_condicion", type="string", length=20, nullable=true)
     */
    private $txCondicion;

    /**
     * @var string
     *
     * @ORM\Column(name="nu_indice_acumulado", type="decimal", precision=1, scale=1, nullable=false)
     */
    private $nuIndiceAcumulado;

    /**
     * @var string
     *
     * @ORM\Column(name="nu_uc_cursadas", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $nuUcCursadas;

    /**
     * @var string
     *
     * @ORM\Column(name="nu_uc_actual", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $nuUcActual;

    /**
     * @var string
     *
     * @ORM\Column(name="nu_uc_aprobadas", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $nuUcAprobadas;

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
     * Get coControEstudio
     *
     * @return integer 
     */
    public function getCoControEstudio()
    {
        return $this->coControEstudio;
    }

    /**
     * Set nuCedula
     *
     * @param string $nuCedula
     * @return clControEstudio
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
     * @return clControEstudio
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
     * @return clControEstudio
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
     * @return clControEstudio
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
     * @return clControEstudio
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
     * @return clControEstudio
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
     * @return clControEstudio
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
     * @return clControEstudio
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
     * Set txTipoIngreso
     *
     * @param string $txTipoIngreso
     * @return clControEstudio
     */
    public function setTxTipoIngreso($txTipoIngreso)
    {
        $this->txTipoIngreso = $txTipoIngreso;

        return $this;
    }

    /**
     * Get txTipoIngreso
     *
     * @return string 
     */
    public function getTxTipoIngreso()
    {
        return $this->txTipoIngreso;
    }

    /**
     * Set txCarrera
     *
     * @param string $txCarrera
     * @return clControEstudio
     */
    public function setTxCarrera($txCarrera)
    {
        $this->txCarrera = $txCarrera;

        return $this;
    }

    /**
     * Get txCarrera
     *
     * @return string 
     */
    public function getTxCarrera()
    {
        return $this->txCarrera;
    }

    /**
     * Set nuSemestCursados
     *
     * @param integer $nuSemestCursados
     * @return clControEstudio
     */
    public function setNuSemestCursados($nuSemestCursados)
    {
        $this->nuSemestCursados = $nuSemestCursados;

        return $this;
    }

    /**
     * Get nuSemestCursados
     *
     * @return integer 
     */
    public function getNuSemestCursados()
    {
        return $this->nuSemestCursados;
    }

    /**
     * Set txSemestActual
     *
     * @param string $txSemestActual
     * @return clControEstudio
     */
    public function setTxSemestActual($txSemestActual)
    {
        $this->txSemestActual = $txSemestActual;

        return $this;
    }

    /**
     * Get txSemestActual
     *
     * @return string 
     */
    public function getTxSemestActual()
    {
        return $this->txSemestActual;
    }

    /**
     * Set txTurno
     *
     * @param string $txTurno
     * @return clControEstudio
     */
    public function setTxTurno($txTurno)
    {
        $this->txTurno = $txTurno;

        return $this;
    }

    /**
     * Get txTurno
     *
     * @return string 
     */
    public function getTxTurno()
    {
        return $this->txTurno;
    }

    /**
     * Set txCorreoElectronico
     *
     * @param string $txCorreoElectronico
     * @return clControEstudio
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
     * Set txTelefoCasa
     *
     * @param string $txTelefoCasa
     * @return clControEstudio
     */
    public function setTxTelefoCasa($txTelefoCasa)
    {
        $this->txTelefoCasa = $txTelefoCasa;

        return $this;
    }

    /**
     * Get txTelefoCasa
     *
     * @return string 
     */
    public function getTxTelefoCasa()
    {
        return $this->txTelefoCasa;
    }

    /**
     * Set txTelefoCelular
     *
     * @param string $txTelefoCelular
     * @return clControEstudio
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
     * Set txPais
     *
     * @param string $txPais
     * @return clControEstudio
     */
    public function setTxPais($txPais)
    {
        $this->txPais = $txPais;

        return $this;
    }

    /**
     * Get txPais
     *
     * @return string 
     */
    public function getTxPais()
    {
        return $this->txPais;
    }

    /**
     * Set txEstado
     *
     * @param string $txEstado
     * @return clControEstudio
     */
    public function setTxEstado($txEstado)
    {
        $this->txEstado = $txEstado;

        return $this;
    }

    /**
     * Get txEstado
     *
     * @return string 
     */
    public function getTxEstado()
    {
        return $this->txEstado;
    }

    /**
     * Set txMunicipio
     *
     * @param string $txMunicipio
     * @return clControEstudio
     */
    public function setTxMunicipio($txMunicipio)
    {
        $this->txMunicipio = $txMunicipio;

        return $this;
    }

    /**
     * Get txMunicipio
     *
     * @return string 
     */
    public function getTxMunicipio()
    {
        return $this->txMunicipio;
    }

    /**
     * Set txCiudad
     *
     * @param string $txCiudad
     * @return clControEstudio
     */
    public function setTxCiudad($txCiudad)
    {
        $this->txCiudad = $txCiudad;

        return $this;
    }

    /**
     * Get txCiudad
     *
     * @return string 
     */
    public function getTxCiudad()
    {
        return $this->txCiudad;
    }

    /**
     * Set txDireccion1
     *
     * @param string $txDireccion1
     * @return clControEstudio
     */
    public function setTxDireccion1($txDireccion1)
    {
        $this->txDireccion1 = $txDireccion1;

        return $this;
    }

    /**
     * Get txDireccion1
     *
     * @return string 
     */
    public function getTxDireccion1()
    {
        return $this->txDireccion1;
    }

    /**
     * Set txDireccion2
     *
     * @param string $txDireccion2
     * @return clControEstudio
     */
    public function setTxDireccion2($txDireccion2)
    {
        $this->txDireccion2 = $txDireccion2;

        return $this;
    }

    /**
     * Get txDireccion2
     *
     * @return string 
     */
    public function getTxDireccion2()
    {
        return $this->txDireccion2;
    }

    /**
     * Set feNacimiento
     *
     * @param \DateTime $feNacimiento
     * @return clControEstudio
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
     * Set txLugarNacimiento
     *
     * @param string $txLugarNacimiento
     * @return clControEstudio
     */
    public function setTxLugarNacimiento($txLugarNacimiento)
    {
        $this->txLugarNacimiento = $txLugarNacimiento;

        return $this;
    }

    /**
     * Get txLugarNacimiento
     *
     * @return string 
     */
    public function getTxLugarNacimiento()
    {
        return $this->txLugarNacimiento;
    }

    /**
     * Set txLapsoIngreso
     *
     * @param string $txLapsoIngreso
     * @return clControEstudio
     */
    public function setTxLapsoIngreso($txLapsoIngreso)
    {
        $this->txLapsoIngreso = $txLapsoIngreso;

        return $this;
    }

    /**
     * Get txLapsoIngreso
     *
     * @return string 
     */
    public function getTxLapsoIngreso()
    {
        return $this->txLapsoIngreso;
    }

    /**
     * Set txCondicion
     *
     * @param string $txCondicion
     * @return clControEstudio
     */
    public function setTxCondicion($txCondicion)
    {
        $this->txCondicion = $txCondicion;

        return $this;
    }

    /**
     * Get txCondicion
     *
     * @return string 
     */
    public function getTxCondicion()
    {
        return $this->txCondicion;
    }

    /**
     * Set nuIndiceAcumulado
     *
     * @param string $nuIndiceAcumulado
     * @return clControEstudio
     */
    public function setNuIndiceAcumulado($nuIndiceAcumulado)
    {
        $this->nuIndiceAcumulado = $nuIndiceAcumulado;

        return $this;
    }

    /**
     * Get nuIndiceAcumulado
     *
     * @return string 
     */
    public function getNuIndiceAcumulado()
    {
        return $this->nuIndiceAcumulado;
    }

    /**
     * Set nuUcCursadas
     *
     * @param string $nuUcCursadas
     * @return clControEstudio
     */
    public function setNuUcCursadas($nuUcCursadas)
    {
        $this->nuUcCursadas = $nuUcCursadas;

        return $this;
    }

    /**
     * Get nuUcCursadas
     *
     * @return string 
     */
    public function getNuUcCursadas()
    {
        return $this->nuUcCursadas;
    }

    /**
     * Set nuUcActual
     *
     * @param string $nuUcActual
     * @return clControEstudio
     */
    public function setNuUcActual($nuUcActual)
    {
        $this->nuUcActual = $nuUcActual;

        return $this;
    }

    /**
     * Get nuUcActual
     *
     * @return string 
     */
    public function getNuUcActual()
    {
        return $this->nuUcActual;
    }

    /**
     * Set nuUcAprobadas
     *
     * @param string $nuUcAprobadas
     * @return clControEstudio
     */
    public function setNuUcAprobadas($nuUcAprobadas)
    {
        $this->nuUcAprobadas = $nuUcAprobadas;

        return $this;
    }

    /**
     * Get nuUcAprobadas
     *
     * @return string 
     */
    public function getNuUcAprobadas()
    {
        return $this->nuUcAprobadas;
    }

    /**
     * Set fhCreacion
     *
     * @param \DateTime $fhCreacion
     * @return clControEstudio
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
     * @return clControEstudio
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
        return $this->getTxPrimerNombre().' '.$this->getTxPrimerApellido();
    }
}
