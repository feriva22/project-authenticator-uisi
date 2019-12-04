<?php

namespace App\Repository;

use App\Entity\Karyawan;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Karyawan|null find($id, $lockMode = null, $lockVersion = null)
 * @method Karyawan|null findOneBy(array $criteria, array $orderBy = null)
 * @method Karyawan[]    findAll()
 * @method Karyawan[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class KaryawanRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Karyawan::class);
    }

    // /**
    //  * @return Karyawan[] Returns an array of Karyawan objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('k')
            ->andWhere('k.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('k.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Karyawan
    {
        return $this->createQueryBuilder('k')
            ->andWhere('k.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
