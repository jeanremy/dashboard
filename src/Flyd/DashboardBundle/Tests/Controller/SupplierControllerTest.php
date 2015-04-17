<?php

namespace Flyd\DashboardBundle\Tests\Controller;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ClientControllerTest extends WebTestCase
{

	/*
	 *
	 * Test si la page suppliers/ renvoie au moins un fournisseur
	 *
	 */
	public function testShow()
	{
		$client = static::createClient(array(), array(
		    'PHP_AUTH_USER' => 'jr',
		    'PHP_AUTH_PW'   => 'jr',
		));

		$crawler = $client->request('GET', '/suppliers');
		$this->assertGreaterThan(0, $crawler->filter('html:contains(".supplier")')->count());
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

		$crawler = $client->request('GET', '/supplier/add');

		$form = $crawler->selectButton('flyd_dashboardbundle_supplier_save')->form();

		// définit certaines valeurs
		$form['flyd_dashboardbundle_supplier[name]'] 		= 'Fournisseur de test';
		$form['flyd_dashboardbundle_supplier[job]'] 		= 'Job de test';

		// soumet le formulaire
		$crawler = $client->submit($form);


		$this->assertEquals(1, $crawler->filter('html:contains("Fournisseur bien enregistré.")')->count());
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
		$crawler = $client->request('GET', '/suppliers');
		$link = $crawler->filter('.bloc__title a:contains("Fournisseur de test")')->first()->link();
		$crawler = $client->click($link);
		//On vérifie qu'on est bien sur la bonne page
		$this->assertEquals(1, $crawler->filter('h1:contains("Fournisseur de test")')->count());

		// On clique sur le bouton modifier
		$link = $crawler->filter('.btn--edit')->first()->link();
		$crawler = $client->click($link);
		//On vérifie qu'on est bien sur la bonne page
		$this->assertEquals(1, $crawler->filter('.breadcrumb:contains("Modifier")')->count()); 

		// On modifie le métier
		$form = $crawler->selectButton('Enregistrer')->form();
		$form['flyd_dashboardbundle_supplier[job]'] 	= 'Job de test modifié ' . rand(1,4);
		$crawler = $client->submit($form);	


		//On vérifie que ça a marché
		$this->assertEquals(1, $crawler->filter('html:contains("Supplier bien enregistré.")')->count());

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
		$crawler = $client->request('GET', '/suppliers');
		$link = $crawler->filter('.bloc__title a:contains("Fournisseur de test")')->first()->link();
		$crawler = $client->click($link);
		//On vérifie qu'on est bien sur la bonne page
		$this->assertGreaterThan(0, $crawler->filter('h1:contains("Fournisseur de test")')->count());

		// On clique sur le bouton modifier
		$link = $crawler->filter('.btn--delete')->first()->link();
		$crawler = $client->click($link);
		//On vérifie qu'on est bien sur la bonne page
		$this->assertEquals(1, $crawler->filter('.breadcrumb:contains("Supprimer")')->count()); 

		// On modifie le métier
		$form = $crawler->selectButton('Supprimer')->form();
		$crawler = $client->submit($form);	

		//On vérifie que ça a marché
		$this->assertEquals(1, $crawler->filter('html:contains("Le fournisseur a bien été supprimé.")')->count());

	}
}

