<?php

namespace VMS\VitrineBundle\Repository;
use VMS\VitrineBundle\Entity\Categorie;

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
    
    public function findArray($array)
    {
        $dql = $this->createQueryBuilder('p');

        $dql
            ->where('p.id IN (:array)')
            ->setParameter('array', $array)
        ;
        return $dql->getQuery()->getResult();
    }

    public function findFilters($categorie, $priceMin, $priceMax, $text)
    {
        $qb = $this->createQueryBuilder('p')
            ->innerJoin('p.categorie', 'c');
        $where  = '';
        $params = [];

        if ($priceMin > 0 && $priceMax > $priceMin) {
            $where = 'p.prix BETWEEN :priceMin AND :priceMax';
            $params['priceMin'] = $priceMin;
            $params['priceMax'] = $priceMax;
        } elseif ($priceMin > 0) {
            $where = 'p.prix > :priceMin';
            $params['priceMin'] = $priceMin;
        } elseif ($priceMax > 0) {
            $where = 'p.prix < :priceMax';
            $params['priceMax'] = $priceMax;
        }
        if ($categorie instanceof Categorie) {
            if (!empty($where)) {
                $where .= ' AND ';
            }
            $where .= 'c.id = :categorie';
            $params['categorie'] = $categorie->getId();
        }
        if ($text != '') {
            if (!empty($where)) {
                $where .= ' AND ';
            }
            $where .= 'p.libelle LIKE :text';
            $params['text'] = '%'.$text.'%';
        }
        if (!empty($where)) {
            $qb
                ->where($where)
                ->setParameters($params);
        }

        return $qb->getQuery()->getResult();
    }
}
