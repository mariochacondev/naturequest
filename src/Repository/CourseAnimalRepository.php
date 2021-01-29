<?php

namespace App\Repository;

use App\Entity\CourseAnimal;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CourseAnimal|null find($id, $lockMode = null, $lockVersion = null)
 * @method CourseAnimal|null findOneBy(array $criteria, array $orderBy = null)
 * @method CourseAnimal[]    findAll()
 * @method CourseAnimal[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CourseAnimalRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CourseAnimal::class);
    }

    // /**
    //  * @return CourseAnimal[] Returns an array of CourseAnimal objects
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
    public function findOneBySomeField($value): ?CourseAnimal
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
