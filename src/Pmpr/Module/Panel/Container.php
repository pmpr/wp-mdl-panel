<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62cefafa30515             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel; use Pmpr\Common\Foundation\Container\Container as BaseClass; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; class Container extends BaseClass { const gomekwmqwuwyuugo = "\x70\141\x6e\x65\154\56\x6a\x73\x6f\x6e"; const sakykaywcqsiwqgm = "\x50\x41\x4e\105\x4c\137\103\117\x4e\106\111\x47\137\x50\x41\124\x48"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public function uwmueckkyiscecgi($iyggcmwmcqmocmwm = null, array $gqgemcmoicmgaqie = []) : ?string { $aaokuekaimigoyue = trailingslashit(self::ismwwqmwgmqqocke); $cgmkimaosyyuqeyg = trailingslashit(get_site_url()); $mqumqwwemwgskykc = "{$cgmkimaosyyuqeyg}{$aaokuekaimigoyue}"; if (!$iyggcmwmcqmocmwm) { goto foeeqckqsyockkak; } $mqumqwwemwgskykc = trailingslashit($mqumqwwemwgskykc) . "\x23{$iyggcmwmcqmocmwm}"; foeeqckqsyockkak: if (!$gqgemcmoicmgaqie) { goto iekumemscwieugqw; } $mqumqwwemwgskykc = DecoratorQuery::yqymaqmqiqmmmsoo($gqgemcmoicmgaqie, $mqumqwwemwgskykc); iekumemscwieugqw: return $mqumqwwemwgskykc; } }
