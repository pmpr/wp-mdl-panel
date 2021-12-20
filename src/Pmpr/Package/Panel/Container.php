<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c066dfa419f             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Panel; use Pmpr\Common\Foundation\Container\Container as BaseClass; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; class Container extends BaseClass { const ismwwqmwgmqqocke = "\x70\x61\x6e\145\x6c"; const CONFIG_FILE_NAME = "\x70\x61\156\145\154\x2e\x6a\163\157\156"; const PANEL_CONFIG_PATH = "\x50\101\116\105\114\x5f\x43\x4f\116\x46\111\107\137\x50\x41\124\x48"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public function uwmueckkyiscecgi($iyggcmwmcqmocmwm = null, array $gqgemcmoicmgaqie = []) : ?string { $aaokuekaimigoyue = trailingslashit(self::ismwwqmwgmqqocke); $cgmkimaosyyuqeyg = trailingslashit(get_site_url()); $mqumqwwemwgskykc = "{$cgmkimaosyyuqeyg}{$aaokuekaimigoyue}"; if (!$iyggcmwmcqmocmwm) { goto zayqqeqgcwkekwws; } $mqumqwwemwgskykc = trailingslashit($mqumqwwemwgskykc) . "\x23{$iyggcmwmcqmocmwm}"; zayqqeqgcwkekwws: if (!$gqgemcmoicmgaqie) { goto aueaceeyommgkicu; } $mqumqwwemwgskykc = DecoratorQuery::yqymaqmqiqmmmsoo($gqgemcmoicmgaqie, $mqumqwwemwgskykc); aueaceeyommgkicu: return $mqumqwwemwgskykc; } }
