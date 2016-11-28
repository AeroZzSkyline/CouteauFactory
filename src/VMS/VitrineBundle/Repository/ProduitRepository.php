<?php

namespace VMS\VitrineBundle\Repository;

/**
 * ProduitRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProduitRepository extends \Doctrine\ORM\EntityRepository
{
    public function findByDateLimit($limit)
    {
        $qb = $this->createQueryBuilder('p');

        $qb->orderBy('p.id', 'DESC')->setMaxResults($limit);

        return $qb->getQuery()->getResult();

    }


    public function findByCategoryLimit($categorie, $limit, $id)
    {
        $qb = $this->createQueryBuilder('p');

        $qb->where('p.categorie = :categorie')
            ->setParameter('categorie', $categorie)
        ->andWhere($qb->expr()->neq('p.id', $id))
            ->orderBy('p.id', 'DESC')->setMaxResults($limit);

        return $qb->getQuery()->getResult();
    }
}
