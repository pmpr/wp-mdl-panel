<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6795528f61d19             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel; use Pmpr\Common\Foundation\REST\RESTRegister; use Pmpr\Module\Panel\Data\Route; abstract class AbstractPanel extends RESTRegister { protected ?string $name = null; protected ?bool $checkAuth = false; protected ?string $parent = "\160\141\x6e\145\x6c"; public function aakmagwggmkoiiyu() : ?string { return $this->name; } public function ygqycmmkoiuocoia() : ?string { return $this->parent; } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom("\160\141\x6e\145\x6c\137\163\x63\x72\151\x70\164\x73", [$this, "\167\x71\x71\143\153\x6b\155\161\x61\153\x69\161\x75\x79\143\163"])->aqaqisyssqeomwom("\x70\141\x6e\145\154\x5f\x74\x72\x61\x6e\x73\154\141\x74\x69\x6f\x6e\163", [$this, "\x77\x75\157\167\157\155\163\x61\147\x6f\x71\x6b\155\141\x69\x6f"])->aqaqisyssqeomwom("\160\x61\x6e\145\x6c\137\x72\x6f\x75\x74\x65\x5f{$this->ygqycmmkoiuocoia()}\137\143\x68\x69\154\x64\162\145\x6e", [$this, "\x63\x6d\165\x67\161\x65\147\147\x6d\167\161\151\151\x65\x79\x6d"], 10, 2); parent::kgquecmsgcouyaya(); } public function sqwgomwcqysewuks($mkucggyaiaukqoce) : array { return []; } public function oeuiuocwuggewqmk($uusmaiomayssaecw) : Route { return new Route($uusmaiomayssaecw); } public function yaegyqkcqwowauga() : array { return []; } public function cmugqeggmwqiieym($okcscwesammossuq, $mkucggyaiaukqoce) : array { if ($this->checkAuth && is_wp_error($mkucggyaiaukqoce)) { return $okcscwesammossuq; } $ikamsuaiikaggcga = $this->sqwgomwcqysewuks($mkucggyaiaukqoce); if ($ikamsuaiikaggcga) { $okcscwesammossuq = array_merge($okcscwesammossuq, $ikamsuaiikaggcga); } return $okcscwesammossuq; } public function wqqckkmqakiquycs($mismekckwcmuksik = []) : array { $mismekckwcmuksik[$this->aakmagwggmkoiiyu()] = $this->caokeucsksukesyo()->usugyumcgeaaowsi()->aqmcwcyggeiyooyg($this, "\x70\141\156\145\154\x2e\152\x73"); return $mismekckwcmuksik; } public final function wuowomsagoqkmaio($qsmicgaymwwckcsa = []) : array { $uwomkgseoiegeume = $this->yaegyqkcqwowauga(); if ($uwomkgseoiegeume) { $qsmicgaymwwckcsa = array_merge($qsmicgaymwwckcsa, $uwomkgseoiegeume); } return $qsmicgaymwwckcsa; } }
