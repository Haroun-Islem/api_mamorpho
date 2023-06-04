<?php

namespace App\Repository;

use App\Entity\ClothingsOutfits;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ClothingsOutfits>
 *
 * @method ClothingsOutfits|null find($id, $lockMode = null, $lockVersion = null)
 * @method ClothingsOutfits|null findOneBy(array $criteria, array $orderBy = null)
 * @method ClothingsOutfits[]    findAll()
 * @method ClothingsOutfits[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClothingsOutfitsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ClothingsOutfits::class);
    }

    public function save(ClothingsOutfits $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ClothingsOutfits $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ClothingsOutfits[] Returns an array of ClothingsOutfits objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ClothingsOutfits
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
