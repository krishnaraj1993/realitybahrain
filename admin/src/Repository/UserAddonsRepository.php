<?php

namespace App\Repository;

use App\Entity\UserAddons;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\Query;

/**
 * @method UserAddons|null find($id, $lockMode = null, $lockVersion = null)
 * @method UserAddons|null findOneBy(array $criteria, array $orderBy = null)
 * @method UserAddons[]    findAll()
 * @method UserAddons[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserAddonsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UserAddons::class);
    }

    public function getAll()
    {
        return $this->createQueryBuilder('p')
            ->getQuery()
            ->getResult(Query::HYDRATE_ARRAY);

    }

    public function getByCondition()
    {
        return $this->createQueryBuilder('p')
            ->getQuery()
            ->getResult(Query::HYDRATE_ARRAY);

    }
}
