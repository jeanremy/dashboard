<?php

namespace Flyd\DashboardBundle\Tests\Controller;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ClientControllerTest extends WebTestCase
{

	public function testShow()
	{
		$client = static::createClient(array(), array(
		    'PHP_AUTH_USER' => 'pf',
		    'PHP_AUTH_PW'   => 'pf',
		));

		$crawler = $client->request('GET', '/clients');

		$this->assertTrue($client->getResponse()->isSuccessful());
	}
}

