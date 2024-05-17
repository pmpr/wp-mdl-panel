<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6646a89c0e6c9             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel; use Pmpr\Common\Foundation\Container\Container as BaseClass; abstract class Container extends BaseClass { public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public function uwmueckkyiscecgi($iyggcmwmcqmocmwm = null, array $gqgemcmoicmgaqie = []) : ?string { $aaokuekaimigoyue = trailingslashit(self::ismwwqmwgmqqocke); $cgmkimaosyyuqeyg = trailingslashit($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->qasciyckimeascmg()); $mqumqwwemwgskykc = "{$cgmkimaosyyuqeyg}{$aaokuekaimigoyue}"; if (!$iyggcmwmcqmocmwm) { goto aiccyaswigkaycqk; } $mqumqwwemwgskykc = trailingslashit($mqumqwwemwgskykc) . "\43{$iyggcmwmcqmocmwm}"; aiccyaswigkaycqk: if (!$gqgemcmoicmgaqie) { goto sqyokemumceysegy; } $mqumqwwemwgskykc = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo($gqgemcmoicmgaqie, $mqumqwwemwgskykc); sqyokemumceysegy: return $mqumqwwemwgskykc; } }
