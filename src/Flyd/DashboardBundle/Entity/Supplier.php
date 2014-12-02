<?php

namespace Flyd\DashboardBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Flyd\DashboardBundle\Entity\Company;

/** @ORM\Entity */
class Supplier extends Company
{
	public function __toString() {
        return $this->name;
    }

}
