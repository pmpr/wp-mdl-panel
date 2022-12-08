<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             639213a7857ba             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel; use Pmpr\Common\Foundation\Container\Container as BaseClass; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; abstract class Container extends BaseClass { const gomekwmqwuwyuugo = "\160\141\156\145\x6c\x2e\152\x73\157\x6e"; const sakykaywcqsiwqgm = "\120\x41\116\105\x4c\137\x43\x4f\116\x46\x49\107\137\x50\101\x54\x48"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public function uwmueckkyiscecgi($iyggcmwmcqmocmwm = null, array $gqgemcmoicmgaqie = []) : ?string { $aaokuekaimigoyue = trailingslashit(self::ismwwqmwgmqqocke); $cgmkimaosyyuqeyg = trailingslashit(get_site_url()); $mqumqwwemwgskykc = "{$cgmkimaosyyuqeyg}{$aaokuekaimigoyue}"; if (!$iyggcmwmcqmocmwm) { goto oocuemosmeeekgas; } $mqumqwwemwgskykc = trailingslashit($mqumqwwemwgskykc) . "\x23{$iyggcmwmcqmocmwm}"; oocuemosmeeekgas: if (!$gqgemcmoicmgaqie) { goto qkcsykuocwuyaice; } $mqumqwwemwgskykc = DecoratorQuery::yqymaqmqiqmmmsoo($gqgemcmoicmgaqie, $mqumqwwemwgskykc); qkcsykuocwuyaice: return $mqumqwwemwgskykc; } }
