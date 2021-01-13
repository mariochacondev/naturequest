<?php

namespace App\Repository;

use App\Entity\AnimalCourse;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method AnimalCourse|null find($id, $lockMode = null, $lockVersion = null)
 * @method AnimalCourse|null findOneBy(array $criteria, array $orderBy = null)
 * @method AnimalCourse[]    findAll()
 * @method AnimalCourse[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AnimalCourseRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AnimalCourse::class);
    }

    // /**
    //  * @return AnimalCourse[] Returns an array of AnimalCourse objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?AnimalCourse
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
