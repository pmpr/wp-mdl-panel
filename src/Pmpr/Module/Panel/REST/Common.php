<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63209390d9952             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel\REST; use Exception; use Firebase\JWT\JWT; use Pmpr\Common\Foundation\Decorator\DecoratorUser; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\REST\RESTController; use Pmpr\Module\Panel\User; use WP_Error; use WP_REST_Request; use WP_User; abstract class Common extends RESTController { protected bool $abstract = false; public function __construct() { parent::__construct(); if ($this->eaiyocyuoiwqykkq()) { goto wwkgkaecgiwggcck; } $this->namespace .= "\57\x70\141\x6e\x65\154"; wwkgkaecgiwggcck: } public function eaiyocyuoiwqykkq() : bool { return $this->abstract; } public function sygeeqgwywmygsyu($aqmwamyiwgeeymqa) { $mimkcuccekumiiqm = null; if (!$aqmwamyiwgeeymqa instanceof WP_REST_Request) { goto qsygcycwieukkgwc; } $mimkcuccekumiiqm = $aqmwamyiwgeeymqa->get_header("\x48\x54\x54\120\137\x41\x55\124\x48\x4f\122\x49\132\101\124\111\117\116"); if ($mimkcuccekumiiqm) { goto umgaesggesswoaqe; } $mimkcuccekumiiqm = $aqmwamyiwgeeymqa->get_header("\x52\x45\x44\x49\x52\x45\x43\124\137\x48\x54\124\x50\x5f\101\125\x54\x48\x4f\122\111\x5a\x41\124\x49\x4f\116"); umgaesggesswoaqe: qsygcycwieukkgwc: if ($mimkcuccekumiiqm) { goto quwcqmyokicssyew; } $mimkcuccekumiiqm = ManipulateServer::giiecckwoyiawoyy("\x48\124\124\120\137\x41\125\124\x48\117\122\x49\132\x41\124\x49\117\x4e", false); if ($mimkcuccekumiiqm) { goto kiwqkcaekqqyuegq; } $mimkcuccekumiiqm = ManipulateServer::giiecckwoyiawoyy("\122\105\x44\x49\x52\105\103\x54\137\x48\124\x54\x50\x5f\x41\125\x54\110\x4f\x52\x49\132\101\124\111\117\116", false); kiwqkcaekqqyuegq: quwcqmyokicssyew: if ($mimkcuccekumiiqm) { goto kqksuugcgsyeoayy; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x41\x75\x74\x68\x6f\162\x69\x7a\141\164\x69\x6f\156\x20\x68\145\x61\x64\x65\x72\x20\x6e\x6f\164\x20\x66\157\165\156\x64", PR__MDL__PANEL), 401); goto iggyqogweyosuikc; kqksuugcgsyeoayy: [$mgegoogckgsumooq] = sscanf($mimkcuccekumiiqm, "\x42\145\x61\162\x65\x72\40\45\x73"); if ($mgegoogckgsumooq && $mgegoogckgsumooq != "\156\165\154\x6c") { goto omugkkesagcyagmk; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x41\x75\x74\x68\157\162\x69\x7a\141\164\151\157\156\40\x68\x65\141\x64\145\162\40\x6d\141\154\x66\x6f\162\155\x65\144\56", PR__MDL__PANEL), 401); goto ygcsmkuycoagwyou; omugkkesagcyagmk: $emoqwwkmassqsoaw = $this->aumueocimuaiwyee(); if ($emoqwwkmassqsoaw) { goto ayyweymyuuiauamo; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x4a\x57\x54\40\151\x73\40\x6e\x6f\164\40\143\x6f\x6e\146\x69\x67\x75\x72\145\144\40\x70\162\x6f\160\145\162\154\x79\x2e", PR__MDL__PANEL), 503); goto mosqsmqimqgqoase; ayyweymyuuiauamo: try { $osyqkeauyomigiuu = JWT::decode($mgegoogckgsumooq, $emoqwwkmassqsoaw, ["\x48\123\62\x35\66"]); if ($osyqkeauyomigiuu->iss == get_bloginfo("\165\162\x6c")) { goto cmqucgoewuyieoyk; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\124\x68\145\40\151\163\163\x20\144\x6f\40\156\157\x74\x20\x6d\x61\x74\x63\150\x20\167\151\164\150\x20\164\x68\x69\163\40\x73\x65\x72\166\x65\162", PR__MDL__PANEL), 401); goto yqykqysmiquwoasu; cmqucgoewuyieoyk: if (isset($osyqkeauyomigiuu->data->user->id)) { goto iqcogmsguwoikame; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\125\x73\x65\x72\40\111\x44\40\156\x6f\164\40\x66\x6f\165\x6e\144\40\151\x6e\40\164\x68\x65\x20\164\x6f\x6b\x65\x6e", PR__MDL__PANEL), 401); goto gimmuoqwckiseaik; iqcogmsguwoikame: $keccaugmemegoimu = [$mgegoogckgsumooq, $osyqkeauyomigiuu, $osyqkeauyomigiuu->data->user->id]; gimmuoqwckiseaik: yqykqysmiquwoasu: } catch (Exception $wgaoewqkwgomoaai) { $keccaugmemegoimu = $this->oemauiimmycumcsk($this->kyacickkomkioeyu($wgaoewqkwgomoaai), 500); } mosqsmqimqgqoase: ygcsmkuycoagwyou: iggyqogweyosuikc: return $keccaugmemegoimu; } public function issssuygyewuaswa($aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->sygeeqgwywmygsyu($aqmwamyiwgeeymqa); if (!($mkucggyaiaukqoce && !is_wp_error($mkucggyaiaukqoce))) { goto ssoucoucsgccekwe; } $mkucggyaiaukqoce = ManipulateArray::get($mkucggyaiaukqoce, 2); $mkucggyaiaukqoce = ManipulateUser::get($mkucggyaiaukqoce); if ($mkucggyaiaukqoce) { goto qqewoyookaskiuek; } $mkucggyaiaukqoce = $this->oemauiimmycumcsk(__("\x55\x73\145\162\40\156\x6f\164\40\146\x6f\165\x6e\x64", PR__MDL__PANEL), 401); qqewoyookaskiuek: ssoucoucsgccekwe: return $mkucggyaiaukqoce; } public function aumueocimuaiwyee() : ?string { return (string) ManipulateSetting::cmaecekuqkwmemms("\123\x45\103\125\122\105\x5f\x41\125\x54\x48\137\x4b\105\131", "\141\165\x74\150\x2d\163\145\x63\x72\145\164\55\153\x65\x79"); } public function ksoemussqmaacucm($mkucggyaiaukqoce) : array { $mkucggyaiaukqoce = ManipulateUser::get($mkucggyaiaukqoce); return ["\x61\143\x63\157\165\156\x74" => ["\x72\x6f\154\145" => DecoratorUser::qykgecyqwasqwoek(ManipulateUser::eueceegwomaqgqca($mkucggyaiaukqoce, true)), "\162\x65\147\151\x73\164\x65\x72\145\144" => $mkucggyaiaukqoce->user_registered, self::csiaccacwgeeqwwo => $mkucggyaiaukqoce->user_login], "\x70\145\162\163\157\x6e\x61\154" => User::symcgieuakksimmu()->ksoemussqmaacucm($mkucggyaiaukqoce)]; } }
