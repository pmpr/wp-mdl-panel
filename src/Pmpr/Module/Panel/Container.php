<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             625c3f480aa9f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel; use Pmpr\Common\Foundation\Container\Container as BaseClass; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; class Container extends BaseClass { const gomekwmqwuwyuugo = "\x70\x61\156\x65\154\x2e\152\163\157\156"; const sakykaywcqsiwqgm = "\x50\101\x4e\x45\x4c\x5f\103\x4f\x4e\106\111\x47\137\120\x41\124\x48"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public function uwmueckkyiscecgi($iyggcmwmcqmocmwm = null, array $gqgemcmoicmgaqie = []) : ?string { $aaokuekaimigoyue = trailingslashit(self::ismwwqmwgmqqocke); $cgmkimaosyyuqeyg = trailingslashit(get_site_url()); $mqumqwwemwgskykc = "{$cgmkimaosyyuqeyg}{$aaokuekaimigoyue}"; if (!$iyggcmwmcqmocmwm) { goto ooeausyowguqicuo; } $mqumqwwemwgskykc = trailingslashit($mqumqwwemwgskykc) . "\43{$iyggcmwmcqmocmwm}"; ooeausyowguqicuo: if (!$gqgemcmoicmgaqie) { goto egyyiccaeeiooaua; } $mqumqwwemwgskykc = DecoratorQuery::yqymaqmqiqmmmsoo($gqgemcmoicmgaqie, $mqumqwwemwgskykc); egyyiccaeeiooaua: return $mqumqwwemwgskykc; } }
