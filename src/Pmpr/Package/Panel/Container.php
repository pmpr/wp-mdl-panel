<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c0323dbc649             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Panel; use Pmpr\Common\Foundation\Container\Container as BaseClass; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; class Container extends BaseClass { const ismwwqmwgmqqocke = "\x70\141\156\x65\x6c"; const CONFIG_FILE_NAME = "\x70\x61\156\x65\x6c\56\152\x73\157\156"; const PANEL_CONFIG_PATH = "\x50\x41\x4e\105\x4c\137\x43\x4f\x4e\106\111\107\137\x50\x41\124\x48"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public function uwmueckkyiscecgi($iyggcmwmcqmocmwm = null, array $gqgemcmoicmgaqie = []) : ?string { $aaokuekaimigoyue = trailingslashit(self::ismwwqmwgmqqocke); $cgmkimaosyyuqeyg = trailingslashit(get_site_url()); $mqumqwwemwgskykc = "{$cgmkimaosyyuqeyg}{$aaokuekaimigoyue}"; if (!$iyggcmwmcqmocmwm) { goto zayqqeqgcwkekwws; } $mqumqwwemwgskykc = trailingslashit($mqumqwwemwgskykc) . "\x23{$iyggcmwmcqmocmwm}"; zayqqeqgcwkekwws: if (!$gqgemcmoicmgaqie) { goto aueaceeyommgkicu; } $mqumqwwemwgskykc = DecoratorQuery::yqymaqmqiqmmmsoo($gqgemcmoicmgaqie, $mqumqwwemwgskykc); aueaceeyommgkicu: return $mqumqwwemwgskykc; } }
