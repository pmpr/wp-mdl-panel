<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63209390d9952             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel; use Pmpr\Common\Foundation\Container\Container as BaseClass; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; class Container extends BaseClass { const gomekwmqwuwyuugo = "\160\141\156\x65\154\56\152\163\x6f\156"; const sakykaywcqsiwqgm = "\x50\101\x4e\x45\x4c\x5f\103\x4f\116\x46\111\x47\x5f\x50\x41\124\110"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public function uwmueckkyiscecgi($iyggcmwmcqmocmwm = null, array $gqgemcmoicmgaqie = []) : ?string { $aaokuekaimigoyue = trailingslashit(self::ismwwqmwgmqqocke); $cgmkimaosyyuqeyg = trailingslashit(get_site_url()); $mqumqwwemwgskykc = "{$cgmkimaosyyuqeyg}{$aaokuekaimigoyue}"; if (!$iyggcmwmcqmocmwm) { goto iekumemscwieugqw; } $mqumqwwemwgskykc = trailingslashit($mqumqwwemwgskykc) . "\43{$iyggcmwmcqmocmwm}"; iekumemscwieugqw: if (!$gqgemcmoicmgaqie) { goto hoeeyiowekaeemko; } $mqumqwwemwgskykc = DecoratorQuery::yqymaqmqiqmmmsoo($gqgemcmoicmgaqie, $mqumqwwemwgskykc); hoeeyiowekaeemko: return $mqumqwwemwgskykc; } }
