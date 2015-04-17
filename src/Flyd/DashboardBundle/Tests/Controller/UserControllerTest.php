<?php

namespace Flyd\DashboardBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UserControllerTest extends WebTestCase
{
    /*
     *
     * Test si la page projects/ renvoie au moins un projet
     *
     */
    public function testShow()
    {
        $client = static::createClient(array(), array(
            'PHP_AUTH_USER' => 'jr',
            'PHP_AUTH_PW'   => 'jr',
        ));

        $crawler = $client->request('GET', '/users');
        $this->assertGreaterThan(0, $crawler->filter('html:contains(".user")')->count());
    }

    /*
     *
     * Test si l'ajout fonctionne
     *
     */
    public function testAdd()
    {
        $client = static::createClient(array(), array(
            'PHP_AUTH_USER' => 'jr',
            'PHP_AUTH_PW'   => 'jr',
        ));
        $client->followRedirects();

        $crawler = $client->request('GET', '/user/add');

        $form = $crawler->selectButton('flyd_dashboardbundle_user_save')->form();

        $form['flyd_dashboardbundle_project[title]']      = 'Projet de test';
        $form['flyd_dashboardbundle_project[category]']   = 1;

        // soumet le formulaire
       // $crawler = $client->submit($form);

        //$this->assertEquals(1, $crawler->filter('html:contains("Projet bien enregistré.")')->count());

    }



    /*
     *
     * Test si l'edit d'un client
     *
     */
    public function testEdit()
    {
      /*  $client = static::createClient(array(), array(
            'PHP_AUTH_USER' => 'jr',
            'PHP_AUTH_PW'   => 'jr',
        ));
        $client->followRedirects();

        $client = static::createClient(array(), array(
            'PHP_AUTH_USER' => 'jr',
            'PHP_AUTH_PW'   => 'jr',
        ));
        $client->followRedirects();

        $crawler = $client->request('GET', '/clients');
        $link = $crawler->filter('.bloc__title a')->first()->link();
        $crawler = $client->click($link);
        $newproject = $crawler->selectLink('Projet de test')->first()->link();
        $crawler = $client->click($newproject);

        $link = $crawler->filter('.btn--edit')->first()->link();
        $crawler = $client->click($link);
        $form = $crawler->selectButton('Enregistrer')->form();
        $form['flyd_dashboardbundle_project_edit[status]'] = 2;
        $crawler = $client->submit($form);
        $this->assertEquals(1, $crawler->filter('html:contains("Projet bien enregistré.")')->count());*/

    }

    /*
     *
     * Test le delete d'un client
     *
     */
    public function testDelete()
    {
/*        $client = static::createClient(array(), array(
            'PHP_AUTH_USER' => 'jr',
            'PHP_AUTH_PW'   => 'jr',
        ));
        $client->followRedirects();

        $client = static::createClient(array(), array(
            'PHP_AUTH_USER' => 'jr',
            'PHP_AUTH_PW'   => 'jr',
        ));
        $client->followRedirects();

        $crawler = $client->request('GET', '/clients');
        $link = $crawler->filter('.bloc__title a')->first()->link();
        $crawler = $client->click($link);
        $newproject = $crawler->selectLink('Projet de test')->first()->link();
        $crawler = $client->click($newproject);

        $link = $crawler->filter('.btn--delete')->first()->link();
        $crawler = $client->click($link);
        $form = $crawler->selectButton('Supprimer')->form();
        $crawler = $client->submit($form);
        $this->assertEquals(1, $crawler->filter('html:contains("Le projet a bien été supprimé.")')->count());*/

    }
}
