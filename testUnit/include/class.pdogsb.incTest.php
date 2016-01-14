<?php

/**
 * Classe de test PHPUnit pour la classe pdogsb
 * Generated by PHPUnit_SkeletonGenerator on 2015-03-08 at 23:55:06.
 * @author Franck Noel
 * @package default
 */


/**
 * 
 */
require_once dirname(__FILE__) .  '/../../include/class.pdogsb.inc.php';
require_once dirname(__FILE__) . '/../../include/fct.inc.php';
/**
 * Classe de test pour la classe PdoGsb
 * @ignore
 */
class PdoGsbTest extends PHPUnit_Framework_TestCase {

    /**
     * @var PdoGsb
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }


    /**
     * @covers PdoGsb::getPdoGsb
     */
    public function testGetPdoGsb() {
        $this->assertNotEquals(null,\PdoGsb::getPdoGsb());
    }

    /**
     * @covers PdoGsb::getInfosVisiteur
     */
    public function testGetInfosVisiteur() {
        $gsb = \PdoGsb::getPdoGsb();
        
        //test logins faux
        $this->assertFalse($gsb->getInfosVisiteur('',''));
        $this->assertFalse($gsb->getInfosVisiteur('xx','mdp'));
        
        //test logins corrects
        $visiteur = $gsb->getInfosVisiteur('dandre','oppg5');
        $this->assertArrayHasKey('id',$visiteur);
        $this->assertArrayHasKey('nom',$visiteur);
        $this->assertArrayHasKey('prenom',$visiteur);
    }

    /**
     * @covers PdoGsb::getLesFraisHorsForfait
     */
    public function testGetLesFraisHorsForfait() {
        // Remove the following lines when you implement this test.
        $gsb = \PdoGsb::getPdoGsb();
        $this->assertTrue(count($gsb->getLesFraisHorsForfait('a17','200912')) == 0);
        $this->assertTrue(count($gsb->getLesFraisHorsForfait('','')) == 0);
        $hf = $gsb->getLesFraisHorsForfait('a17','201001');
        $this->assertTrue(count($hf) != 0);
        $this->assertArrayHasKey('id',$hf[0]);
        $this->assertArrayHasKey('idVisiteur',$hf[0]);
        $this->assertArrayHasKey('libelle',$hf[0]);
        $this->assertArrayHasKey('date',$hf[0]);
        $this->assertArrayHasKey('montant',$hf[0]);
    }

    /**
     * @covers PdoGsb::getNbjustificatifs
     */
    public function testGetNbjustificatifs() {
        // Remove the following lines when you implement this test.
        $gsb = \PdoGsb::getPdoGsb();
        
        $this->assertEquals(0,$gsb->getNbjustificatifs('',''));
        $this->assertEquals(0,$gsb->getNbjustificatifs('a17','200912'));
        $this->assertNotEquals(0,$gsb->getNbjustificatifs('a17','201001'));
    }

    /**
     * @covers PdoGsb::getLesFraisForfait
     */
    public function testGetLesFraisForfait() {
        // Remove the following lines when you implement this test.
        $gsb = \PdoGsb::getPdoGsb();
        $this->assertEquals('0',count($gsb->getLesFraisForfait('','')));
        $this->assertEquals('0',count($gsb->getLesFraisForfait('a17','200912')));
        $f = $gsb->getLesFraisForfait('a17','201001');
        $this->assertNotEquals('0',count($f));
        $this->assertArrayHasKey('idfrais',$f[0]);
        $this->assertArrayHasKey('libelle',$f[0]);
        $this->assertArrayHasKey('quantite',$f[0]);
    }

    /**
     * @covers PdoGsb::getLesIdFrais
     */
    public function testGetLesIdFrais() {
        $gsb = \PdoGsb::getPdoGsb();
        $f = $gsb->getLesIdFrais();
        $this->assertNotEquals('0', count($f));
        $this->assertArrayHasKey('idfrais',$f[0]);
    }


    /**
     * @covers PdoGsb::estPremierFraisMois
     */
    public function testEstPremierFraisMois() {
        $gsb = \PdoGsb::getPdoGsb();
        $this->assertTrue($gsb->estPremierFraisMois('',''));
        $this->assertFalse($gsb->estPremierFraisMois('a17','201001'));
    }

    /**
     * @covers PdoGsb::dernierMoisSaisi
     */
    public function testDernierMoisSaisi() {
        $gsb = \PdoGsb::getPdoGsb();
        $this->assertEquals('',$gsb->DernierMoisSaisi(''));
        $this->assertNotEquals('', $gsb->DernierMoisSaisi('a17'));
    }


    /**
     * @covers PdoGsb::getLesMoisDisponibles
     */
    public function testGetLesMoisDisponibles() {
        $gsb = \PdoGsb::getPdoGsb();
        $this->assertEquals('0', count($gsb->getLesMoisDisponibles('')));
        $this->assertNotEquals('0', count($gsb->getLesMoisDisponibles('a17')));
    }

    /**
     * @covers PdoGsb::getLesVisiteurs
     */
    public function testGetLesVisiteurs(){
        $gsb = \PdoGsb::getPdoGsb();
        $this->assertNotEquals('0', count($gsb->getLesVisiteurs()));
    }
    
    /**
     * @covers PdoGsb::getLesInfosFicheFrais
     */
    public function testGetLesInfosFicheFrais() {
        $gsb = \PdoGsb::getPdoGsb();
        $this->assertNull($gsb->getLesInfosFicheFrais('','')[0]);
        $this->assertEquals('14',count($gsb->getLesInfosFicheFrais('a17','201001')));
    }

}