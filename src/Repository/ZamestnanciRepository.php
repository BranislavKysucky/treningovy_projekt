<?php

namespace App\Repository;

use App\Entity\Zamestnanci;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Zamestnanci|null find($id, $lockMode = null, $lockVersion = null)
 * @method Zamestnanci|null findOneBy(array $criteria, array $orderBy = null)
 * @method Zamestnanci[]    findAll()
 * @method Zamestnanci[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ZamestnanciRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Zamestnanci::class);
    }

    // /**
    //  * @return Zamestnanci[] Returns an array of Zamestnanci objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('z')
            ->andWhere('z.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('z.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Zamestnanci
    {
        return $this->createQueryBuilder('z')
            ->andWhere('z.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
