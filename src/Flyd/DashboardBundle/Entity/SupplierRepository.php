<?php

namespace Flyd\DashboardBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * SupplierRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class SupplierRepository extends EntityRepository
{
	public function getSuppliersWithout($existingsuppliers) {
		$tab = array();
		foreach ($existingsuppliers as $value) {
			$tab[] = $value->getId();
		}

		$query = $this->createQueryBuilder('a')
                      ->select(array('a.id', 'a.name', 'a.job'));
        $query = $query->add('where', $query->expr()->notIn('a', ':c'))
                      ->setParameter('c', $tab)
                      ->getQuery()
                      ->getResult();
        return $query;
	}
}
