<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6796c26f925d0             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel; use Pmpr\Common\Foundation\REST\RESTRegister; use Pmpr\Module\Panel\Data\Route; abstract class AbstractPanel extends RESTRegister { protected ?string $name = null; protected ?bool $checkAuth = false; protected ?string $parent = "\x70\141\156\x65\x6c"; public function aakmagwggmkoiiyu() : ?string { return $this->name; } public function ygqycmmkoiuocoia() : ?string { return $this->parent; } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom("\x70\x61\x6e\x65\154\x5f\163\143\x72\151\160\164\x73", [$this, "\167\161\x71\143\x6b\153\155\161\x61\153\x69\x71\165\x79\143\x73"])->aqaqisyssqeomwom("\x70\141\156\145\x6c\137\164\162\x61\156\x73\x6c\x61\164\x69\x6f\156\163", [$this, "\167\x75\x6f\167\157\155\x73\x61\x67\x6f\161\153\155\141\151\157"])->aqaqisyssqeomwom("\160\141\156\x65\154\x5f\162\x6f\165\x74\x65\137{$this->ygqycmmkoiuocoia()}\x5f\143\x68\x69\154\144\162\145\156", [$this, "\x63\x6d\165\147\x71\x65\x67\x67\x6d\167\x71\151\x69\x65\x79\x6d"], 10, 2); parent::kgquecmsgcouyaya(); } public function sqwgomwcqysewuks($mkucggyaiaukqoce) : array { return []; } public function oeuiuocwuggewqmk($uusmaiomayssaecw) : Route { return new Route($uusmaiomayssaecw); } public function yaegyqkcqwowauga() : array { return []; } public function cmugqeggmwqiieym($okcscwesammossuq, $mkucggyaiaukqoce) : array { if ($this->checkAuth && is_wp_error($mkucggyaiaukqoce)) { return $okcscwesammossuq; } $ikamsuaiikaggcga = $this->sqwgomwcqysewuks($mkucggyaiaukqoce); if ($ikamsuaiikaggcga) { $okcscwesammossuq = array_merge($okcscwesammossuq, $ikamsuaiikaggcga); } return $okcscwesammossuq; } public function wqqckkmqakiquycs($mismekckwcmuksik = []) : array { $mismekckwcmuksik[$this->aakmagwggmkoiiyu()] = $this->caokeucsksukesyo()->usugyumcgeaaowsi()->aqmcwcyggeiyooyg($this, "\x70\x61\156\x65\154\56\x6a\163"); return $mismekckwcmuksik; } public final function wuowomsagoqkmaio($qsmicgaymwwckcsa = []) : array { $uwomkgseoiegeume = $this->yaegyqkcqwowauga(); if ($uwomkgseoiegeume) { $qsmicgaymwwckcsa = array_merge($qsmicgaymwwckcsa, $uwomkgseoiegeume); } return $qsmicgaymwwckcsa; } }
