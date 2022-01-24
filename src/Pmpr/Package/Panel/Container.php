<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61eed20349717             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Panel; use Pmpr\Common\Foundation\Container\Container as BaseClass; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; class Container extends BaseClass { const ismwwqmwgmqqocke = "\x70\x61\156\145\x6c"; const gomekwmqwuwyuugo = "\160\x61\x6e\x65\154\x2e\152\x73\157\156"; const sakykaywcqsiwqgm = "\x50\x41\116\105\114\137\103\x4f\x4e\x46\111\107\x5f\120\101\124\x48"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public function uwmueckkyiscecgi($iyggcmwmcqmocmwm = null, array $gqgemcmoicmgaqie = []) : ?string { $aaokuekaimigoyue = trailingslashit(self::ismwwqmwgmqqocke); $cgmkimaosyyuqeyg = trailingslashit(get_site_url()); $mqumqwwemwgskykc = "{$cgmkimaosyyuqeyg}{$aaokuekaimigoyue}"; if (!$iyggcmwmcqmocmwm) { goto ucuoeymyqeokgsya; } $mqumqwwemwgskykc = trailingslashit($mqumqwwemwgskykc) . "\43{$iyggcmwmcqmocmwm}"; ucuoeymyqeokgsya: if (!$gqgemcmoicmgaqie) { goto yuuyikiacmmueosu; } $mqumqwwemwgskykc = DecoratorQuery::yqymaqmqiqmmmsoo($gqgemcmoicmgaqie, $mqumqwwemwgskykc); yuuyikiacmmueosu: return $mqumqwwemwgskykc; } }
