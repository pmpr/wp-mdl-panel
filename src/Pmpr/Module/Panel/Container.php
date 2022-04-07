<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624eb19f36008             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel; use Pmpr\Common\Foundation\Container\Container as BaseClass; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; class Container extends BaseClass { const gomekwmqwuwyuugo = "\160\141\156\x65\x6c\56\152\x73\x6f\156"; const sakykaywcqsiwqgm = "\120\101\116\105\x4c\137\103\x4f\x4e\106\x49\x47\x5f\x50\x41\x54\x48"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public function uwmueckkyiscecgi($iyggcmwmcqmocmwm = null, array $gqgemcmoicmgaqie = []) : ?string { $aaokuekaimigoyue = trailingslashit(self::ismwwqmwgmqqocke); $cgmkimaosyyuqeyg = trailingslashit(get_site_url()); $mqumqwwemwgskykc = "{$cgmkimaosyyuqeyg}{$aaokuekaimigoyue}"; if (!$iyggcmwmcqmocmwm) { goto wyuemgggaqogsmsq; } $mqumqwwemwgskykc = trailingslashit($mqumqwwemwgskykc) . "\x23{$iyggcmwmcqmocmwm}"; wyuemgggaqogsmsq: if (!$gqgemcmoicmgaqie) { goto guykyqecgswcsmws; } $mqumqwwemwgskykc = DecoratorQuery::yqymaqmqiqmmmsoo($gqgemcmoicmgaqie, $mqumqwwemwgskykc); guykyqecgswcsmws: return $mqumqwwemwgskykc; } }
