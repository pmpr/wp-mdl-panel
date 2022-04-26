<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6267a00dd33fe             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel; use Pmpr\Common\Foundation\Container\Container as BaseClass; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; class Container extends BaseClass { const gomekwmqwuwyuugo = "\x70\141\x6e\x65\154\56\x6a\x73\x6f\x6e"; const sakykaywcqsiwqgm = "\120\101\116\x45\114\137\103\x4f\116\106\x49\x47\137\120\x41\124\110"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public function uwmueckkyiscecgi($iyggcmwmcqmocmwm = null, array $gqgemcmoicmgaqie = []) : ?string { $aaokuekaimigoyue = trailingslashit(self::ismwwqmwgmqqocke); $cgmkimaosyyuqeyg = trailingslashit(get_site_url()); $mqumqwwemwgskykc = "{$cgmkimaosyyuqeyg}{$aaokuekaimigoyue}"; if (!$iyggcmwmcqmocmwm) { goto ooeausyowguqicuo; } $mqumqwwemwgskykc = trailingslashit($mqumqwwemwgskykc) . "\43{$iyggcmwmcqmocmwm}"; ooeausyowguqicuo: if (!$gqgemcmoicmgaqie) { goto egyyiccaeeiooaua; } $mqumqwwemwgskykc = DecoratorQuery::yqymaqmqiqmmmsoo($gqgemcmoicmgaqie, $mqumqwwemwgskykc); egyyiccaeeiooaua: return $mqumqwwemwgskykc; } }
