<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66cb56f0b4dc1             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel; use Pmpr\Common\Foundation\Container\Container as BaseClass; abstract class Container extends BaseClass { public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public function uwmueckkyiscecgi($iyggcmwmcqmocmwm = null, array $gqgemcmoicmgaqie = []) : ?string { $aaokuekaimigoyue = trailingslashit(self::ismwwqmwgmqqocke); $cgmkimaosyyuqeyg = trailingslashit($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->qasciyckimeascmg()); $mqumqwwemwgskykc = "{$cgmkimaosyyuqeyg}{$aaokuekaimigoyue}"; if (!$iyggcmwmcqmocmwm) { goto ikqeeaysmqgcgawq; } $mqumqwwemwgskykc = trailingslashit($mqumqwwemwgskykc) . "\43{$iyggcmwmcqmocmwm}"; ikqeeaysmqgcgawq: if (!$gqgemcmoicmgaqie) { goto mscgewkcqcoowweg; } $mqumqwwemwgskykc = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo($gqgemcmoicmgaqie, $mqumqwwemwgskykc); mscgewkcqcoowweg: return $mqumqwwemwgskykc; } }
