<?php
namespace AppBundle\Entity;
use \Doctrine\ORM\EntityRepository;
use Pagerfanta\Adapter\DoctrineORMAdapter;

/**
 *
 */
 class FortuneRepository extends EntityRepository
 {

 	public function findLasts()
 	{
 		$queryBuilder = $this->createQueryBuilder('F')
    ->where("F.publishedOn = true");
 	// 	->orderBy("F.createdAt","ASC");
 		return new DoctrineORMAdapter($queryBuilder);
 	}

 	public function findBestRated()
 	{
 		return $this->createQueryBuilder('F')
 		->setMaxResults(1)
 		->orderBy("F.upVote / F.downVote", "DESC")
 		->getQuery()
 		->getResult();
 	}

 	public function findByAuthor($author)
 	{
 		return $this->createQueryBuilder('F')
 		->where("F.author = :author")
 		->setParameter("author", $author)
 		->getQuery()
 		->getResult();
 	}

 	public function findByQuote($id)
 	{
 		return $this->createQueryBuilder('F')
 		->where("F.id = :id")
 		->setParameter("id", $id)
 		->getQuery()
 		->getResult();
 	}


  public function findPublished()
  {
    return $this->createQueryBuilder('F')
 		->where("F.publishedOn = false")
 		->getQuery()
 		->getResult();
  }

 }
