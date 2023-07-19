<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64b78604525b9             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel; use Pmpr\Common\Foundation\Container\Container as BaseClass; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; abstract class Container extends BaseClass { const gomekwmqwuwyuugo = "\160\141\156\x65\x6c\56\x6a\163\157\156"; const sakykaywcqsiwqgm = "\x50\101\116\105\x4c\x5f\103\117\116\106\111\x47\137\120\101\x54\110"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public function uwmueckkyiscecgi($iyggcmwmcqmocmwm = null, array $gqgemcmoicmgaqie = []) : ?string { $aaokuekaimigoyue = trailingslashit(self::ismwwqmwgmqqocke); $cgmkimaosyyuqeyg = trailingslashit(get_site_url()); $mqumqwwemwgskykc = "{$cgmkimaosyyuqeyg}{$aaokuekaimigoyue}"; if (!$iyggcmwmcqmocmwm) { goto oeocukauoyosicso; } $mqumqwwemwgskykc = trailingslashit($mqumqwwemwgskykc) . "\x23{$iyggcmwmcqmocmwm}"; oeocukauoyosicso: if (!$gqgemcmoicmgaqie) { goto suqceasgacskcmkc; } $mqumqwwemwgskykc = DecoratorQuery::yqymaqmqiqmmmsoo($gqgemcmoicmgaqie, $mqumqwwemwgskykc); suqceasgacskcmkc: return $mqumqwwemwgskykc; } }
