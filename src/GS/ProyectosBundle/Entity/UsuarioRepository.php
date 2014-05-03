<?php

namespace GS\ProyectosBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * UsuarioRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UsuarioRepository extends EntityRepository
{
      public function buscarUsuarios($primernombre, $primerapellido) {
        return $this->getEntityManager()
                        ->createQuery('SELECT u FROM GSProyectosBundle:Usuario u WHERE (u.primernombre LIKE :primernombre  AND u.primerapellido LIKE :primerapellido) OR u.primernombre LIKE :primernombre OR u.primerapellido LIKE :primerapellido ')
                        ->setParameter('primernombre', '%' . $primernombre . '%')
                        ->setParameter('primerapellido', '%' . $primerapellido . '%')
                        ->getResult();
    }
    
//     public function contarUsuariosActivos() {
//        return $this->getEntityManager()
//                        ->createQuery('SELECT COUNT(u.numerodocumentoidentidad) FROM GSProyectosBundle:Usuario u WHERE u.user = :')                    
//                        ->getResult();
//    }
}
