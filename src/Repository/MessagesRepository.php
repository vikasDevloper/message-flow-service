<?php

namespace App\Repository;

use App\Entity\Messages;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use DateTime;
use DateTimeImmutable;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Messages>
 *
 * @method Messages|null find($id, $lockMode = null, $lockVersion = null)
 * @method Messages|null findOneBy(array $criteria, array $orderBy = null)
 * @method Messages[]    findAll()
 * @method Messages[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MessagesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Messages::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Messages $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(Messages $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    public function saveMessages($sender_to, $sender_from, $content, $sender_id)
    {
        return $this->json([
            'message' => 'save msg'
  
        ]);
        $newMessage= new Messages();

        return $this->json([
            'message' => 'save msg'
  
        ]);
        $date = new DateTimeImmutable();

        $newMessage
            ->setSenderId($sender_id)
            ->setSenderTo($sender_to)
            ->setSenderFrom($sender_from)
            ->setContent($content);

        $this->manager->persist($newMessage);
        $this->manager->flush();
    }

    // /**
    //  * @return Messages[] Returns an array of Messages objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    public function findOneBySenderId($queyParams)
    {
        return $this->createQueryBuilder('m')
           ->select("m.sender_id as id,m.sender_from as from
           ,m.sender_to as to,m.content, m.created_at ,m.updated_at")
            ->orWhere('m.sender_from = :fromId')
            ->orWhere('m.sender_from = :toId')
            ->orWhere('m.sender_from = :toId')
            ->andWhere('m.created_at BETWEEN :dateFrom AND :dateTo')
            ->setParameter('fromId', $queyParams["fromid"])
            ->setParameter('toId', $queyParams["toId"])
            ->setParameter('dateFrom', $queyParams["date_from"])
            ->setParameter('dateTo', $queyParams["date_to"])
            ->orderBy('m.created_at', 'DESC')
            ->setMaxResults($queyParams['per_page'])
            ->setFirstResult($queyParams['page_number'])
           ->getQuery()->getResult();
        ;
    }

    public function findDetailById($fromId)
    {
        $parameters = array(
            'status' => 1,
        );


        $query = $this->createQueryBuilder("m")
              ->select("m.sender_to as id, count(m.sender_to) as count")
              ->andwhere("m.sender_from = :val")
              ->setParameter('val', $fromId)
              ->groupBy("m.sender_to")
             // ->setParameters($parameters)
              ->getQuery()->getResult();
             return $query;
       
    }
    
}
