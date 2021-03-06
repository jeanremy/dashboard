<?php

namespace Flyd\DashboardBundle\Entity;


use Doctrine\ORM\EntityRepository;

/**
 * ProjectTaskUserRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProjectTaskUserRepository extends EntityRepository
{
	/*
	 * getFirstPendingTask 
	 * Recherche la prochaine tâche En cours
	 * @return Task
	 */
	public function getFirstPendingTask($projectid)
	{

		$query = $this->createQueryBuilder('ptu')
    					->where('s.name LIKE :status')
    					->andwhere('p.id = :project')
    					->setParameter('status', '%En cours%')
    					->setParameter('project', $projectid)
						->leftJoin('ptu.project', 'p')
						->leftJoin('ptu.status', 's')
					    ->orderBy('ptu.position', 'ASC')
					    ->setMaxResults(1)
					    ->getQuery();


	    return $query->getOneOrNullResult();
	}

	/*
	 * Recherche la prochaine tâche à venir
	 */
	public function getFirstComingTask($projectid)
	{

		$query = $this->createQueryBuilder('ptu')
    					->where('s.name = :status')
    					->andwhere('p.id = :project')
    					->setParameter('status', 'A venir')
    					->setParameter('project', $projectid)
						->leftJoin('ptu.project', 'p')
						->leftJoin('ptu.status', 's')
					    ->orderBy('ptu.position', 'ASC')
					    ->setMaxResults(1)
					    ->getQuery();


	    return $query->getOneOrNullResult();
	}

	/*
	 * Recherche les tâches importantes non terminées pour un user
	 */
	public function getImportantPtus($user_id)
	{
		$query = $this->createQueryBuilder('ptu')
						->where('ptu.important = 1')
	                    ->leftJoin('ptu.user', 'u')
						->andWhere('u.id = :id')
	                    ->setParameter('id', $user_id)
	                    ->leftJoin('ptu.status', 's')
						->andWhere('s.name != :status')
	                    ->setParameter('status', 'Terminé')
					    ->orderBy('ptu.position', 'ASC');

		return $query->getQuery()->getResult();
	}

}
