<?php

namespace App\Repository;

use App\Entity\RoutePlant;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method RoutePlant|null find($id, $lockMode = null, $lockVersion = null)
 * @method RoutePlant|null findOneBy(array $criteria, array $orderBy = null)
 * @method RoutePlant[]    findAll()
 * @method RoutePlant[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RoutePlantRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RoutePlant::class);
    }

    // /**
    //  * @return RoutePlant[] Returns an array of RoutePlant objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?RoutePlant
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
