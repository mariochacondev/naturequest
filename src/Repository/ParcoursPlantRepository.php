<?php

namespace App\Repository;

use App\Entity\ParcoursPlant;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ParcoursPlant|null find($id, $lockMode = null, $lockVersion = null)
 * @method ParcoursPlant|null findOneBy(array $criteria, array $orderBy = null)
 * @method ParcoursPlant[]    findAll()
 * @method ParcoursPlant[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ParcoursPlantRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ParcoursPlant::class);
    }

    // /**
    //  * @return ParcoursPlant[] Returns an array of ParcoursPlant objects
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
    public function findOneBySomeField($value): ?ParcoursPlant
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
