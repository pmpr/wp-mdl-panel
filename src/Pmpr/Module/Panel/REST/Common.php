<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66eae91609d34             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel\REST; use Exception; use Firebase\JWT\JWT; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\REST\RESTController; use Pmpr\Module\Panel\User; use WP_Error; use WP_REST_Request; use WP_User; abstract class Common extends RESTController { protected bool $abstract = false; public function __construct() { parent::__construct(); if ($this->eaiyocyuoiwqykkq()) { goto sukskmcwsoysiuqu; } $this->namespace .= "\57\x70\x61\156\x65\154"; sukskmcwsoysiuqu: } public function eaiyocyuoiwqykkq() : bool { return $this->abstract; } public function sygeeqgwywmygsyu($aqmwamyiwgeeymqa) { $mimkcuccekumiiqm = null; if (!$aqmwamyiwgeeymqa instanceof WP_REST_Request) { goto mqccmesakuemceqi; } $mimkcuccekumiiqm = $aqmwamyiwgeeymqa->get_header("\110\124\124\120\137\x41\125\x54\110\x4f\122\111\x5a\101\x54\x49\x4f\x4e"); if ($mimkcuccekumiiqm) { goto igymseewwyiocoug; } $mimkcuccekumiiqm = $aqmwamyiwgeeymqa->get_header("\122\x45\104\111\x52\105\x43\124\137\x48\x54\124\120\137\x41\125\124\110\117\x52\x49\x5a\101\124\x49\x4f\116"); igymseewwyiocoug: mqccmesakuemceqi: if ($mimkcuccekumiiqm) { goto twkmiuomimomscew; } $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $mimkcuccekumiiqm = $eiicaiwgqkgsekce->giiecckwoyiawoyy("\110\x54\x54\x50\137\x41\x55\x54\x48\x4f\x52\111\132\x41\124\x49\117\x4e", false); if ($mimkcuccekumiiqm) { goto eyiamcekkgkiawqy; } $mimkcuccekumiiqm = $eiicaiwgqkgsekce->giiecckwoyiawoyy("\x52\x45\104\111\122\x45\x43\124\x5f\x48\x54\124\120\x5f\x41\125\x54\110\117\x52\111\132\x41\124\111\117\116", false); eyiamcekkgkiawqy: twkmiuomimomscew: if ($mimkcuccekumiiqm) { goto oouoqimaaqcmccay; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x41\x75\x74\150\x6f\x72\x69\172\x61\x74\x69\157\156\40\150\x65\141\144\145\162\x20\x6e\157\164\40\146\x6f\x75\156\144", PR__MDL__PANEL), 401); goto sycygoiaiqqageym; oouoqimaaqcmccay: [$mgegoogckgsumooq] = sscanf($mimkcuccekumiiqm, "\102\x65\141\x72\145\x72\40\x25\x73"); if ($mgegoogckgsumooq && $mgegoogckgsumooq != "\156\x75\154\x6c") { goto siqagquguiemuoku; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\101\x75\164\150\x6f\x72\x69\172\141\x74\151\x6f\156\x20\150\145\x61\x64\145\x72\x20\155\x61\154\x66\x6f\x72\155\x65\x64\x2e", PR__MDL__PANEL), 401); goto ycakugokkqkuqyiu; siqagquguiemuoku: $emoqwwkmassqsoaw = $this->aumueocimuaiwyee(); if ($emoqwwkmassqsoaw) { goto ieumumsgyguceusy; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x4a\127\124\x20\151\163\x20\x6e\x6f\x74\40\x63\157\156\x66\x69\147\165\162\145\144\40\160\x72\x6f\x70\x65\162\x6c\171\56", PR__MDL__PANEL), 503); goto coywmiyqgsweuiic; ieumumsgyguceusy: try { $osyqkeauyomigiuu = JWT::decode($mgegoogckgsumooq, $emoqwwkmassqsoaw, ["\110\123\x32\65\66"]); if ($osyqkeauyomigiuu->iss == get_bloginfo("\165\x72\x6c")) { goto qcessicwuikwqsis; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\124\150\x65\40\x69\163\163\x20\144\x6f\x20\156\x6f\x74\x20\155\141\164\143\150\x20\x77\x69\x74\150\40\x74\x68\151\163\x20\163\x65\x72\166\145\162", PR__MDL__PANEL), 401); goto yssscwioiyygssec; qcessicwuikwqsis: if (isset($osyqkeauyomigiuu->data->user->id)) { goto kooskuwkuayiuose; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\125\163\x65\162\x20\x49\104\40\156\157\164\x20\146\157\165\156\144\x20\151\x6e\40\164\x68\145\x20\x74\x6f\153\145\x6e", PR__MDL__PANEL), 401); goto qwcegcuowwgiccos; kooskuwkuayiuose: $keccaugmemegoimu = [$mgegoogckgsumooq, $osyqkeauyomigiuu, $osyqkeauyomigiuu->data->user->id]; qwcegcuowwgiccos: yssscwioiyygssec: } catch (Exception $wgaoewqkwgomoaai) { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($wgaoewqkwgomoaai, 500); } coywmiyqgsweuiic: ycakugokkqkuqyiu: sycygoiaiqqageym: return $keccaugmemegoimu; } public function issssuygyewuaswa($aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->sygeeqgwywmygsyu($aqmwamyiwgeeymqa); if (!($mkucggyaiaukqoce && !is_wp_error($mkucggyaiaukqoce))) { goto kciouyuaqkyqomam; } $mkucggyaiaukqoce = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($mkucggyaiaukqoce, 2); $mkucggyaiaukqoce = $this->caokeucsksukesyo()->issssuygyewuaswa()->get($mkucggyaiaukqoce); if ($mkucggyaiaukqoce) { goto gygawoqywkukmqee; } $mkucggyaiaukqoce = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\125\x73\145\162\40\156\x6f\x74\x20\x66\157\x75\x6e\x64", PR__MDL__PANEL), 401); gygawoqywkukmqee: kciouyuaqkyqomam: return $mkucggyaiaukqoce; } public function aumueocimuaiwyee() : ?string { return (string) $this->caokeucsksukesyo()->eiwcuqigayigimak()->cmaecekuqkwmemms("\x53\x45\x43\125\x52\x45\137\x41\125\x54\110\x5f\113\105\x59", "\141\165\164\x68\x2d\163\x65\x63\x72\x65\164\55\153\145\171"); } public function ksoemussqmaacucm($mkucggyaiaukqoce) : array { $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $mkucggyaiaukqoce = $yoiguusocukqeayg->get($mkucggyaiaukqoce); return ["\141\143\x63\157\165\x6e\x74" => [Constants::eyqgmoumkowegyse => $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->qykgecyqwasqwoek($yoiguusocukqeayg->eueceegwomaqgqca($mkucggyaiaukqoce, true)), "\162\x65\x67\x69\163\x74\145\162\145\144" => $mkucggyaiaukqoce->user_registered, Constants::csiaccacwgeeqwwo => $mkucggyaiaukqoce->user_login], "\x70\x65\162\x73\157\x6e\x61\x6c" => User::symcgieuakksimmu()->ksoemussqmaacucm($mkucggyaiaukqoce)]; } }
