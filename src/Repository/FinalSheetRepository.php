<?php

namespace App\Repository;

use App\Entity\FinalSheet;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method FinalSheet|null find($id, $lockMode = null, $lockVersion = null)
 * @method FinalSheet|null findOneBy(array $criteria, array $orderBy = null)
 * @method FinalSheet[]    findAll()
 * @method FinalSheet[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FinalSheetRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FinalSheet::class);
    }

    // /**
    //  * @return FinalSheet[] Returns an array of FinalSheet objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?FinalSheet
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
