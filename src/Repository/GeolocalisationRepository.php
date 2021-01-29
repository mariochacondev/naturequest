<?php

namespace App\Repository;

use App\Entity\Geolocalisation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Geolocalisation|null find($id, $lockMode = null, $lockVersion = null)
 * @method Geolocalisation|null findOneBy(array $criteria, array $orderBy = null)
 * @method Geolocalisation[]    findAll()
 * @method Geolocalisation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GeolocalisationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Geolocalisation::class);
    }

    // /**
    //  * @return Geolocalisation[] Returns an array of Geolocalisation objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Geolocalisation
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
