<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6267ca54eb306             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel; use Pmpr\Common\Foundation\Container\Container as BaseClass; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; class Container extends BaseClass { const gomekwmqwuwyuugo = "\x70\141\156\x65\154\56\x6a\163\x6f\156"; const sakykaywcqsiwqgm = "\120\x41\x4e\x45\x4c\x5f\103\117\x4e\106\x49\107\137\x50\101\x54\110"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public function uwmueckkyiscecgi($iyggcmwmcqmocmwm = null, array $gqgemcmoicmgaqie = []) : ?string { $aaokuekaimigoyue = trailingslashit(self::ismwwqmwgmqqocke); $cgmkimaosyyuqeyg = trailingslashit(get_site_url()); $mqumqwwemwgskykc = "{$cgmkimaosyyuqeyg}{$aaokuekaimigoyue}"; if (!$iyggcmwmcqmocmwm) { goto ooeausyowguqicuo; } $mqumqwwemwgskykc = trailingslashit($mqumqwwemwgskykc) . "\43{$iyggcmwmcqmocmwm}"; ooeausyowguqicuo: if (!$gqgemcmoicmgaqie) { goto egyyiccaeeiooaua; } $mqumqwwemwgskykc = DecoratorQuery::yqymaqmqiqmmmsoo($gqgemcmoicmgaqie, $mqumqwwemwgskykc); egyyiccaeeiooaua: return $mqumqwwemwgskykc; } }
