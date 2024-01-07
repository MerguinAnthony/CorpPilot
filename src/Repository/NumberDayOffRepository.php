<?php

namespace App\Repository;

use App\Entity\NumberDayOff;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<NumberDayOff>
 *
 * @method NumberDayOff|null find($id, $lockMode = null, $lockVersion = null)
 * @method NumberDayOff|null findOneBy(array $criteria, array $orderBy = null)
 * @method NumberDayOff[]    findAll()
 * @method NumberDayOff[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NumberDayOffRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NumberDayOff::class);
    }

//    /**
//     * @return NumberDayOff[] Returns an array of NumberDayOff objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('n')
//            ->andWhere('n.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('n.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?NumberDayOff
//    {
//        return $this->createQueryBuilder('n')
//            ->andWhere('n.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
