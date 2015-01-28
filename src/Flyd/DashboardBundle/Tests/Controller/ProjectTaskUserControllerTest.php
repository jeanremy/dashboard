<?php

namespace Flyd\DashboardBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ProjectTaskUserControllerTest extends WebTestCase
{
    public function testEdiat()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/projecttaskuser/{id}/edit');
    }

}
