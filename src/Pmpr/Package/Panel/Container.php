<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61d48b50e72c2             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Panel; use Pmpr\Common\Foundation\Container\Container as BaseClass; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; class Container extends BaseClass { const ismwwqmwgmqqocke = "\x70\x61\156\145\154"; const gomekwmqwuwyuugo = "\x70\141\156\145\x6c\x2e\152\163\157\156"; const sakykaywcqsiwqgm = "\x50\101\x4e\105\114\137\x43\117\x4e\106\111\107\137\x50\x41\124\110"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public function uwmueckkyiscecgi($iyggcmwmcqmocmwm = null, array $gqgemcmoicmgaqie = []) : ?string { $aaokuekaimigoyue = trailingslashit(self::ismwwqmwgmqqocke); $cgmkimaosyyuqeyg = trailingslashit(get_site_url()); $mqumqwwemwgskykc = "{$cgmkimaosyyuqeyg}{$aaokuekaimigoyue}"; if (!$iyggcmwmcqmocmwm) { goto aueaceeyommgkicu; } $mqumqwwemwgskykc = trailingslashit($mqumqwwemwgskykc) . "\43{$iyggcmwmcqmocmwm}"; aueaceeyommgkicu: if (!$gqgemcmoicmgaqie) { goto mysueeoswqgccmui; } $mqumqwwemwgskykc = DecoratorQuery::yqymaqmqiqmmmsoo($gqgemcmoicmgaqie, $mqumqwwemwgskykc); mysueeoswqgccmui: return $mqumqwwemwgskykc; } }
