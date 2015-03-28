<?php

namespace Flyd\DashboardBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * ProjectRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProjectRepository extends EntityRepository
{
	public function findPreciselyBy($category = null, $status = null, $user = null) 
	{
		$query = $this->createQueryBuilder('p')
						->add('where','p.id > 0') // fake condition to use &where
						->orderBy('p.deadline', 'ASC');

		if($category) {
			$query->leftJoin('p.category', 'c')
					->andWhere('c.id = :category')
	                ->setParameter('category', $category);
	    }
	    if($status != null ) {
			$query->leftJoin('p.status', 's')
					->andWhere('s.id = :status')
	                ->setParameter('status', $status);
	    } 
	    if($status === null) {
	    	$query->leftJoin('p.status', 's')
					->andWhere('s.name != :status')
	                ->setParameter('status', 'Terminé');
	    }
	    if($user) {
	        $query->leftJoin('p.users', 'u')
	        		->andWhere($query->expr()->in('u', ':user'))
	                ->setParameter('user', $user);
	    }

        return $query->getQuery()
                      ->getResult();
	}
}
