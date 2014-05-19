<?php

namespace GS\ProyectosBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * SeminarioRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class SeminarioRepository extends EntityRepository {
    /*
     * Buscar seminario por parametro de busqueda. 
     */

    public function buscarSeminarioParametro($tamano, $parametro) {
        return $this->getEntityManager()
                        ->createQuery('SELECT s FROM GSProyectosBundle:Seminario s WHERE  s.titulo LIKE :titulo OR s.fecha LIKE :fecha ORDER BY s.fecharegistro DESC')
                        ->setParameter('titulo', '%' . $parametro . '%')
                        ->setParameter('fecha', '%' . $parametro . '%')
                        ->setMaxResults($tamano)
                        ->getResult();
    }

}
