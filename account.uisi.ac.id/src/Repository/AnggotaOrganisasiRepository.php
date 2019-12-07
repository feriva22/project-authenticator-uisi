<?php

namespace App\Repository;

use App\Entity\AnggotaOrganisasi;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method AnggotaOrganisasi|null find($id, $lockMode = null, $lockVersion = null)
 * @method AnggotaOrganisasi|null findOneBy(array $criteria, array $orderBy = null)
 * @method AnggotaOrganisasi[]    findAll()
 * @method AnggotaOrganisasi[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AnggotaOrganisasiRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AnggotaOrganisasi::class);
    }

    // /**
    //  * @return AnggotaOrganisasi[] Returns an array of AnggotaOrganisasi objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?AnggotaOrganisasi
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
