<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c1fcc0bfed7             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Panel; use Pmpr\Common\Foundation\Container\Container as BaseClass; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; class Container extends BaseClass { const ismwwqmwgmqqocke = "\160\x61\156\145\154"; const CONFIG_FILE_NAME = "\x70\141\156\x65\154\x2e\152\x73\157\x6e"; const PANEL_CONFIG_PATH = "\x50\x41\x4e\105\114\137\103\x4f\x4e\x46\x49\107\137\x50\101\x54\x48"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public function uwmueckkyiscecgi($iyggcmwmcqmocmwm = null, array $gqgemcmoicmgaqie = []) : ?string { $aaokuekaimigoyue = trailingslashit(self::ismwwqmwgmqqocke); $cgmkimaosyyuqeyg = trailingslashit(get_site_url()); $mqumqwwemwgskykc = "{$cgmkimaosyyuqeyg}{$aaokuekaimigoyue}"; if (!$iyggcmwmcqmocmwm) { goto zayqqeqgcwkekwws; } $mqumqwwemwgskykc = trailingslashit($mqumqwwemwgskykc) . "\x23{$iyggcmwmcqmocmwm}"; zayqqeqgcwkekwws: if (!$gqgemcmoicmgaqie) { goto aueaceeyommgkicu; } $mqumqwwemwgskykc = DecoratorQuery::yqymaqmqiqmmmsoo($gqgemcmoicmgaqie, $mqumqwwemwgskykc); aueaceeyommgkicu: return $mqumqwwemwgskykc; } }
