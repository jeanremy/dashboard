<?php

namespace Flyd\DashboardBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

/**
 * UserRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UserRepository extends EntityRepository
{
	/**
	 * Get Users by Project
	 *
	 * @param id $project
	 * @return ArrayCollection
	 */
	public function getByProject($id) 
	{
		$query = $this->_em->createQuery(
		    'SELECT u
		    FROM FlydDashboardBundle:User u
		    JOIN  project_user p ON p.project_id = :project_id 
		    WHERE u.price > :price
		    ORDER BY u.price ASC'
		)
		->setParameter('project_id', $id);

		/*$products = $query->getResult();
		$query = $this->_em->createQuery('SELECT a FROM User a WHERE b.user_id = a.id');
		$query->setParameter('project_id', $project);
		$tasks = $this->createQueryBuilder('t')->join('t.users', 'u', 'WITH', 'u.id = :id');
		$query = $this->createQueryBuilder('u')->join('u.projects', 'p', 'WITH', 'p.id = :id');
		$query->setParameter('id', $id);*/

		return $query->getResult();
	}
}
