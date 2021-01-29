<?php

namespace App\Repository;

use App\Entity\ButtonPlant;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ButtonPlant|null find($id, $lockMode = null, $lockVersion = null)
 * @method ButtonPlant|null findOneBy(array $criteria, array $orderBy = null)
 * @method Button[]    findAll()
 * @method Button[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ButtonPlantRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ButtonPlant::class);
    }

    // /**
    //  * @return ButtonPlant[] Returns an array of Button objects
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
    public function findOneBySomeField($value): ?ButtonPlant
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
