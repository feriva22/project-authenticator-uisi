<?php

namespace App\Repository;

use App\Entity\UnitOrganisasi;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method UnitOrganisasi|null find($id, $lockMode = null, $lockVersion = null)
 * @method UnitOrganisasi|null findOneBy(array $criteria, array $orderBy = null)
 * @method UnitOrganisasi[]    findAll()
 * @method UnitOrganisasi[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UnitOrganisasiRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UnitOrganisasi::class);
    }

    // /**
    //  * @return UnitOrganisasi[] Returns an array of UnitOrganisasi objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?UnitOrganisasi
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
