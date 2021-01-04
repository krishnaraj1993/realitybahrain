<?php

namespace App\Repository;

use App\Entity\ApplicationAssets;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\Query;

/**
 * @method ApplicationAssets|null find($id, $lockMode = null, $lockVersion = null)
 * @method ApplicationAssets|null findOneBy(array $criteria, array $orderBy = null)
 * @method ApplicationAssets[]    findAll()
 * @method ApplicationAssets[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ApplicationAssetsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ApplicationAssets::class);
    }

    public function feathAll()
    {
        return $this->createQueryBuilder('p')
            ->getQuery()
            ->getResult(Query::HYDRATE_ARRAY);
    }

    public function feathById($id)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.id = :id')
            ->setParameter('id', $id)
            ->getQuery()
            ->getResult(Query::HYDRATE_ARRAY);
    }

    public function feathByPropertyId($id)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.property = :id')
            ->setParameter('id', $id)
            ->getQuery()
            ->getResult(Query::HYDRATE_ARRAY);
    }
}
