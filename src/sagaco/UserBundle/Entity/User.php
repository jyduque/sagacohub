<?php

namespace sagaco\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * ESagaco.tpUsuario
 * 
 * @ORM\Entity
 * @ORM\Table(name="e_sagaco.tp_usuario")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(name="co_usuario", type="integer")
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="e_sagaco.seq_tp_usuario_co_usuario", allocationSize=1, initialValue=1)
     */
    protected $id;
    
    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
}
