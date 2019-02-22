<?php

namespace App\Repository;

use App\Entity\Zaznam;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Zaznam|null find($id, $lockMode = null, $lockVersion = null)
 * @method Zaznam|null findOneBy(array $criteria, array $orderBy = null)
 * @method Zaznam[]    findAll()
 * @method Zaznam[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ZaznamRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Zaznam::class);
    }

    // /**
    //  * @return Zaznam[] Returns an array of Zaznam objects
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
    public function findOneBySomeField($value): ?Zaznam
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
