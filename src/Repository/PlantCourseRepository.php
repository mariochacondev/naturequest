<?php

namespace App\Repository;

use App\Entity\PlantCourse;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PlantCourse|null find($id, $lockMode = null, $lockVersion = null)
 * @method PlantCourse|null findOneBy(array $criteria, array $orderBy = null)
 * @method PlantCourse[]    findAll()
 * @method PlantCourse[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PlantCourseRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PlantCourse::class);
    }

    // /**
    //  * @return PlantCourse[] Returns an array of PlantCourse objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PlantCourse
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
