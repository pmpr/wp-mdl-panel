<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c02775ada4a             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Panel\REST; use Exception; use Firebase\JWT\JWT; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\REST\RESTController; use Pmpr\Package\Panel\User; use WP_Error; use WP_REST_Request; use WP_User; abstract class Common extends RESTController { protected bool $abstract = false; public function __construct() { parent::__construct(); if ($this->eaiyocyuoiwqykkq()) { goto cecuyayqoioasumi; } $this->namespace .= "\x2f\x70\x61\x6e\145\154"; cecuyayqoioasumi: } public function eaiyocyuoiwqykkq() : bool { return $this->abstract; } public function sygeeqgwywmygsyu($aqmwamyiwgeeymqa) { $mimkcuccekumiiqm = null; if (!$aqmwamyiwgeeymqa instanceof WP_REST_Request) { goto qogqewiwmwiwskgm; } $mimkcuccekumiiqm = $aqmwamyiwgeeymqa->get_header("\x48\124\124\120\137\x41\125\124\x48\x4f\x52\x49\132\x41\124\111\117\x4e"); if ($mimkcuccekumiiqm) { goto qiaqsassksqiuyae; } $mimkcuccekumiiqm = $aqmwamyiwgeeymqa->get_header("\x52\x45\104\111\122\x45\103\124\x5f\x48\x54\124\120\137\101\x55\124\110\x4f\x52\x49\x5a\x41\x54\111\117\116"); qiaqsassksqiuyae: qogqewiwmwiwskgm: if ($mimkcuccekumiiqm) { goto qwigomakwmyiwkgo; } $mimkcuccekumiiqm = ManipulateServer::giiecckwoyiawoyy("\110\124\124\120\x5f\x41\125\124\110\117\122\x49\x5a\101\124\111\117\116", false); if ($mimkcuccekumiiqm) { goto qgoiooayqmqqsiok; } $mimkcuccekumiiqm = ManipulateServer::giiecckwoyiawoyy("\122\x45\104\111\122\105\x43\124\137\x48\x54\124\120\x5f\101\x55\124\x48\x4f\122\x49\132\x41\124\111\117\x4e", false); qgoiooayqmqqsiok: qwigomakwmyiwkgo: if ($mimkcuccekumiiqm) { goto kwagwqyusyiyoaqs; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x41\x75\x74\x68\x6f\x72\151\x7a\141\x74\x69\x6f\x6e\40\150\x65\141\x64\x65\x72\x20\156\x6f\x74\40\x66\157\x75\x6e\x64", PR__PKG__PANEL), 401); goto yowsmsiyimmimemc; kwagwqyusyiyoaqs: [$mgegoogckgsumooq] = sscanf($mimkcuccekumiiqm, "\x42\x65\141\162\x65\x72\x20\45\163"); if ($mgegoogckgsumooq && $mgegoogckgsumooq != "\156\165\154\154") { goto sciwggaeogcoesiu; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\101\165\164\x68\x6f\x72\x69\172\x61\x74\151\157\x6e\40\150\145\141\x64\145\x72\40\155\141\x6c\146\x6f\x72\155\x65\x64\56", PR__PKG__PANEL), 401); goto eqkauqciwewmgeoi; sciwggaeogcoesiu: $emoqwwkmassqsoaw = $this->aumueocimuaiwyee(); if ($emoqwwkmassqsoaw) { goto kuicqywysciceggs; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x4a\x57\124\40\x69\163\40\156\157\164\40\x63\x6f\156\146\x69\x67\165\x72\145\144\40\x70\x72\x6f\160\x65\162\x6c\x79\56", PR__PKG__PANEL), 503); goto mkwskuycuyguqqok; kuicqywysciceggs: try { $osyqkeauyomigiuu = JWT::decode($mgegoogckgsumooq, $emoqwwkmassqsoaw, ["\x48\x53\62\x35\x36"]); if ($osyqkeauyomigiuu->iss == get_bloginfo("\x75\x72\x6c")) { goto csscmcacoikwsecs; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x54\x68\145\40\x69\x73\x73\x20\144\157\x20\156\157\164\x20\155\141\164\x63\150\40\167\x69\164\x68\40\x74\x68\x69\x73\40\163\145\x72\166\145\x72", PR__PKG__PANEL), 401); goto cuykwgmswkskqkyi; csscmcacoikwsecs: if (isset($osyqkeauyomigiuu->data->user->id)) { goto myoicgcuugciueis; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\125\x73\145\x72\40\111\104\40\156\157\x74\x20\x66\157\165\x6e\144\x20\x69\156\40\x74\150\145\40\164\157\x6b\145\x6e", PR__PKG__PANEL), 401); goto asmecuqiyyswueqe; myoicgcuugciueis: $keccaugmemegoimu = [$mgegoogckgsumooq, $osyqkeauyomigiuu, $osyqkeauyomigiuu->data->user->id]; asmecuqiyyswueqe: cuykwgmswkskqkyi: } catch (Exception $wgaoewqkwgomoaai) { $keccaugmemegoimu = $this->oemauiimmycumcsk($this->kyacickkomkioeyu($wgaoewqkwgomoaai), 500); } mkwskuycuyguqqok: eqkauqciwewmgeoi: yowsmsiyimmimemc: return $keccaugmemegoimu; } public function issssuygyewuaswa($aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->sygeeqgwywmygsyu($aqmwamyiwgeeymqa); if (!($mkucggyaiaukqoce && !is_wp_error($mkucggyaiaukqoce))) { goto iomcaiwewsawiamu; } $mkucggyaiaukqoce = ManipulateArray::get($mkucggyaiaukqoce, 2); $mkucggyaiaukqoce = ManipulateUser::get($mkucggyaiaukqoce); if ($mkucggyaiaukqoce) { goto kiqogmwcgcamwiig; } $mkucggyaiaukqoce = $this->oemauiimmycumcsk(__("\125\163\145\162\x20\x6e\x6f\164\40\146\x6f\165\156\144", PR__PKG__PANEL), 401); kiqogmwcgcamwiig: iomcaiwewsawiamu: return $mkucggyaiaukqoce; } public function aumueocimuaiwyee() : ?string { return (string) ManipulateSetting::cmaecekuqkwmemms("\123\105\103\x55\122\x45\137\101\x55\124\x48\137\x4b\x45\131", "\141\x75\x74\150\x2d\163\x65\x63\x72\x65\x74\55\x6b\145\171"); } public function ksoemussqmaacucm($mkucggyaiaukqoce) : array { $mkucggyaiaukqoce = ManipulateUser::get($mkucggyaiaukqoce); return ["\141\x63\x63\157\165\x6e\x74" => ["\165\x73\145\x72\156\141\155\145" => $mkucggyaiaukqoce->user_login, "\162\x65\x67\x69\163\164\x65\162\x65\144" => $mkucggyaiaukqoce->user_registered], "\160\x65\x72\163\157\x6e\x61\x6c" => User::symcgieuakksimmu()->ksoemussqmaacucm($mkucggyaiaukqoce)]; } }
