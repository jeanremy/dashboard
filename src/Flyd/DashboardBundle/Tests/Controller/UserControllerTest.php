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

        $crawler = $client->request('GET', '/users/');
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

        $form['flyd_dashboardbundle_user[username]']            = 'User de test';
        $form['flyd_dashboardbundle_user[job]']                 = 'Job de test';
        $form['flyd_dashboardbundle_user[email]']               = 'fakeemail@fakeprovider.fr';
        $form['flyd_dashboardbundle_user[password][first]']     = 'test';
        $form['flyd_dashboardbundle_user[password][second]']    = 'test';


        // soumet le formulaire
        $crawler = $client->submit($form);

        $this->assertEquals(1, $crawler->filter('html:contains("Utilisateur bien enregistré.")')->count());

    }



    /*
     *
     * Test si l'edit d'un client
     *
     */
    /*public function testEdit()
    {
        $client = static::createClient(array(), array(
            'PHP_AUTH_USER' => 'User de test',
            'PHP_AUTH_PW'   => 'test',
        ));
        $client->followRedirects();

        $crawler = $client->request('GET', '/users');
        $link = $crawler->filter('.bloc__title a')->first()->link();
        $crawler = $client->click($link);
        $newproject = $crawler->selectLink('User de test')->first()->link();
        $crawler = $client->click($newproject);

        $link = $crawler->filter('.btn--edit')->first()->link();
        $crawler = $client->click($link);
        $form = $crawler->selectButton('Enregistrer')->form();
        $form['flyd_dashboardbundle_user_edit[job]'] = 'Job de test modifié';
        $crawler = $client->submit($form);
        $this->assertEquals(1, $crawler->filter('html:contains("Utilisateur bien enregistré.")')->count());

    }*/

    /*
     *
     * Test le delete d'un user
     *
     */
    /*public function testDelete()
    {
        $client = static::createClient(array(), array(
            'PHP_AUTH_USER' => 'User de test',
            'PHP_AUTH_PW'   => 'test',
        ));
        $client->followRedirects();

        $crawler = $client->request('GET', '/users');
        $link = $crawler->filter('.bloc__title a')->first()->link();
        $crawler = $client->click($link);
        $newproject = $crawler->selectLink('User de test')->first()->link();
        $crawler = $client->click($newproject);

        $link = $crawler->filter('.btn--delete')->first()->link();
        $crawler = $client->click($link);
        $form = $crawler->selectButton('Supprimer')->form();
        $crawler = $client->submit($form);
        $this->assertEquals(1, $crawler->filter('html:contains("L\'utilisateur a bien été supprimé.")')->count());

    }*/
}
