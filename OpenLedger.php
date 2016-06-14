<?php

/**
 * Blockchain.php
 *
 * Blockchain modules manager, Adapted from Graphene-PHP.
 *
 * @author     Valentin D'Emmanuele
 * @copyright  2016 Valentin D'Emmanuele
 * @license    Mozilla Public License Version 2.0
 * @version    1.0
 */


require_once "src/auto.php";


/**
 * This class initialize each component of the library
 */
class OpenLedger
{
	public function __construct($account){
		$this->name = $account;
		$this->API = new OpenLedgerAPI("http://46.101.155.22/graphene-php/OL.php");
		$this->Wallet = new OpenLedgerWallet($this);
		$this->DEX = new OpenLedgerDEX($this);
		$this->Asset = new OpenLedgerAsset($this);
	}
}