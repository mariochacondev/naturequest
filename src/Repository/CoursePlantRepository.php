<?php

namespace App\Repository;

use App\Entity\CoursePlant;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CoursePlant|null find($id, $lockMode = null, $lockVersion = null)
 * @method CoursePlant|null findOneBy(array $criteria, array $orderBy = null)
 * @method CoursePlant[]    findAll()
 * @method CoursePlant[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CoursePlantRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CoursePlant::class);
    }

    // /**
    //  * @return CoursePlant[] Returns an array of CoursePlant objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CoursePlant
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
