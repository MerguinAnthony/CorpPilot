<?php

namespace App\Repository;

use App\Entity\SignId;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<SignId>
 *
 * @method SignId|null find($id, $lockMode = null, $lockVersion = null)
 * @method SignId|null findOneBy(array $criteria, array $orderBy = null)
 * @method SignId[]    findAll()
 * @method SignId[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SignIdRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SignId::class);
    }

//    /**
//     * @return SignId[] Returns an array of SignId objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('s.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?SignId
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
