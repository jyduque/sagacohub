<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * tb_grupo_rol
 *
 * @ORM\Table(name="tb_grupo_rol")
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clGrupoRolRepository")
 */
class clGrupoRol
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
     * @ORM\Column(name="co_tipo_rol", type="integer")
     */
    private $coTipoRol;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_descripcion", type="text")
     */
    private $txDescripcion;


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
     * Set coTipoRol
     *
     * @param integer $coTipoRol
     * @return tb_grupo_rol
     */
    public function setCoTipoRol($coTipoRol)
    {
        $this->coTipoRol = $coTipoRol;

        return $this;
    }

    /**
     * Get coTipoRol
     *
     * @return integer 
     */
    public function getCoTipoRol()
    {
        return $this->coTipoRol;
    }

    /**
     * Set txDescripcion
     *
     * @param string $txDescripcion
     * @return tb_grupo_rol
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
}
