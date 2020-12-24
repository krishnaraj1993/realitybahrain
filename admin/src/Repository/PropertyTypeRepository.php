<?php

namespace App\Repository;

use App\Entity\PropertyType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\Query;

/**
 * @method PropertyType|null find($id, $lockMode = null, $lockVersion = null)
 * @method PropertyType|null findOneBy(array $criteria, array $orderBy = null)
 * @method PropertyType[]    findAll()
 * @method PropertyType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PropertyTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PropertyType::class);
    }

    public function feathAll()
    {
        $query = $this->createQueryBuilder('c')
            ->getQuery();
        return $result = $query->getResult(Query::HYDRATE_ARRAY);
    }
}
