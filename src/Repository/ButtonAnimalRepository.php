<?php

namespace App\Repository;

use App\Entity\ButtonAnimal;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ButtonAnimal|null find($id, $lockMode = null, $lockVersion = null)
 * @method ButtonAnimal|null findOneBy(array $criteria, array $orderBy = null)
 * @method ButtonAnimal[]    findAll()
 * @method ButtonAnimal[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ButtonAnimalRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ButtonAnimal::class);
    }

    // /**
    //  * @return ButtonAnimal[] Returns an array of ButtonAnimal objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ButtonAnimal
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
