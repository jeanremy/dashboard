<?php

namespace Flyd\DashboardBundle\Tests\Controller;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ProjectCanvasControllerTest extends WebTestCase
{

	/*
	 *
	 * Test si la page projectcanvas/ renvoie au moins un modèle
	 *
	 */
	public function testShow()
	{
		$client = static::createClient(array(), array(
		    'PHP_AUTH_USER' => 'jr',
		    'PHP_AUTH_PW'   => 'jr',
		));

		$crawler = $client->request('GET', '/projectcanvas/');
		$this->assertGreaterThan(0, $crawler->filter('html:contains(".projectcanvas")')->count());
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

		$crawler = $client->request('GET', '/projectcanvas/add');

		$form = $crawler->selectButton('flyd_dashboardbundle_projectcanvas_save')->form();

		// définit certaines valeurs
		$form['flyd_dashboardbundle_projectcanvas[name]'] 	= 'Modèle de test';

		// soumet le formulaire
		$crawler = $client->submit($form);


		$this->assertEquals(1, $crawler->filter('html:contains("Modèle de projet bien enregistré.")')->count());
	}


	/*
	 *
	 * Test si l'edit d'un client
	 *
	 */
	public function testEdit()
	{
		$client = static::createClient(array(), array(
		    'PHP_AUTH_USER' => 'jr',
		    'PHP_AUTH_PW'   => 'jr',
		));
		$client->followRedirects();

		// On clique sur le lien Fournisseur de test
		$crawler = $client->request('GET', '/projectcanvas');
		$link = $crawler->filter('.bloc__title a:contains("Modèle de test")')->first()->link();
		$crawler = $client->click($link);
		//On vérifie qu'on est bien sur la bonne page
		$this->assertEquals(1, $crawler->filter('h1:contains("Modèle de test")')->count());

		// On clique sur le bouton modifier
		$link = $crawler->filter('.btn--edit')->first()->link();
		$crawler = $client->click($link);
		//On vérifie qu'on est bien sur la bonne page
		$this->assertEquals(1, $crawler->filter('.breadcrumb:contains("Modifier")')->count()); 

		// On modifie le métier
		$form = $crawler->selectButton('Enregistrer')->form();
		$form['flyd_dashboardbundle_projectcanvas[name]'] 	= 'Modèle de test modifié';
		$crawler = $client->submit($form);	


		//On vérifie que ça a marché
		$this->assertEquals(1, $crawler->filter('html:contains("Modèle de projet bien enregistré.")')->count());

	}

	/*
	 *
	 * Test le delete d'un client
	 *
	 */
	public function testDelete()
	{
		$client = static::createClient(array(), array(
		    'PHP_AUTH_USER' => 'jr',
		    'PHP_AUTH_PW'   => 'jr',
		));
		$client->followRedirects();

		// On clique sur le lien Fournisseur de test
		$crawler = $client->request('GET', '/projectcanvas');
		$link = $crawler->filter('.bloc__title a:contains("Modèle de test modifié")')->first()->link();
		$crawler = $client->click($link);
		//On vérifie qu'on est bien sur la bonne page
		$this->assertGreaterThan(0, $crawler->filter('h1:contains("Modèle de test modifié")')->count());

		// On clique sur le bouton modifier
		$link = $crawler->filter('.btn--delete')->first()->link();
		$crawler = $client->click($link);
		//On vérifie qu'on est bien sur la bonne page
		$this->assertEquals(1, $crawler->filter('.breadcrumb:contains("Supprimer")')->count()); 

		// On modifie le métier
		$form = $crawler->selectButton('Supprimer')->form();
		$crawler = $client->submit($form);	

		//On vérifie que ça a marché
		$this->assertEquals(1, $crawler->filter('html:contains("Le modèle de projet a bien été supprimé.")')->count());

	}
}

