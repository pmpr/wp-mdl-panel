<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6264e98c491ab             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel\REST; use Exception; use Firebase\JWT\JWT; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\REST\RESTController; use Pmpr\Module\Panel\User; use WP_Error; use WP_REST_Request; use WP_User; abstract class Common extends RESTController { protected bool $abstract = false; public function __construct() { parent::__construct(); if ($this->eaiyocyuoiwqykkq()) { goto kiwqkcaekqqyuegq; } $this->namespace .= "\x2f\x70\x61\156\145\154"; kiwqkcaekqqyuegq: } public function eaiyocyuoiwqykkq() : bool { return $this->abstract; } public function sygeeqgwywmygsyu($aqmwamyiwgeeymqa) { $mimkcuccekumiiqm = null; if (!$aqmwamyiwgeeymqa instanceof WP_REST_Request) { goto iqcogmsguwoikame; } $mimkcuccekumiiqm = $aqmwamyiwgeeymqa->get_header("\110\124\x54\120\137\101\125\124\x48\x4f\122\111\132\x41\124\x49\x4f\116"); if ($mimkcuccekumiiqm) { goto quwcqmyokicssyew; } $mimkcuccekumiiqm = $aqmwamyiwgeeymqa->get_header("\x52\105\104\x49\122\x45\x43\x54\x5f\x48\x54\x54\120\137\x41\125\124\110\117\122\x49\x5a\101\x54\111\117\x4e"); quwcqmyokicssyew: iqcogmsguwoikame: if ($mimkcuccekumiiqm) { goto cmqucgoewuyieoyk; } $mimkcuccekumiiqm = ManipulateServer::giiecckwoyiawoyy("\110\x54\124\x50\x5f\x41\x55\x54\x48\117\122\x49\132\x41\x54\111\x4f\116", false); if ($mimkcuccekumiiqm) { goto gimmuoqwckiseaik; } $mimkcuccekumiiqm = ManipulateServer::giiecckwoyiawoyy("\x52\x45\x44\111\122\105\x43\124\137\110\x54\x54\x50\x5f\x41\x55\124\x48\x4f\122\111\x5a\x41\124\x49\117\x4e", false); gimmuoqwckiseaik: cmqucgoewuyieoyk: if ($mimkcuccekumiiqm) { goto ssoucoucsgccekwe; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\101\x75\x74\150\157\x72\x69\x7a\141\x74\x69\157\156\x20\150\x65\141\144\x65\x72\x20\156\x6f\164\40\146\x6f\x75\x6e\144", PR__MDL__PANEL), 401); goto qkcyqocqqwmqgqww; ssoucoucsgccekwe: [$mgegoogckgsumooq] = sscanf($mimkcuccekumiiqm, "\102\x65\141\162\x65\x72\x20\x25\163"); if ($mgegoogckgsumooq && $mgegoogckgsumooq != "\156\165\x6c\154") { goto iggyqogweyosuikc; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\101\x75\164\150\157\x72\x69\x7a\x61\x74\x69\x6f\156\x20\150\145\141\x64\x65\x72\40\x6d\x61\154\x66\157\162\x6d\145\x64\56", PR__MDL__PANEL), 401); goto qqewoyookaskiuek; iggyqogweyosuikc: $emoqwwkmassqsoaw = $this->aumueocimuaiwyee(); if ($emoqwwkmassqsoaw) { goto ygcsmkuycoagwyou; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\112\x57\x54\x20\x69\x73\40\x6e\x6f\164\40\143\157\x6e\x66\151\x67\x75\x72\x65\x64\40\x70\162\x6f\160\x65\x72\154\171\x2e", PR__MDL__PANEL), 503); goto kqksuugcgsyeoayy; ygcsmkuycoagwyou: try { $osyqkeauyomigiuu = JWT::decode($mgegoogckgsumooq, $emoqwwkmassqsoaw, ["\x48\123\x32\65\x36"]); if ($osyqkeauyomigiuu->iss == get_bloginfo("\x75\x72\x6c")) { goto mosqsmqimqgqoase; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x54\150\x65\x20\151\163\x73\40\144\157\40\156\x6f\164\x20\155\x61\x74\x63\x68\x20\167\x69\164\150\x20\164\x68\151\163\x20\163\145\162\x76\x65\162", PR__MDL__PANEL), 401); goto omugkkesagcyagmk; mosqsmqimqgqoase: if (isset($osyqkeauyomigiuu->data->user->id)) { goto yqykqysmiquwoasu; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x55\163\x65\162\40\111\x44\x20\156\x6f\x74\x20\x66\157\165\x6e\x64\x20\x69\156\x20\164\150\x65\40\x74\x6f\x6b\145\x6e", PR__MDL__PANEL), 401); goto ayyweymyuuiauamo; yqykqysmiquwoasu: $keccaugmemegoimu = [$mgegoogckgsumooq, $osyqkeauyomigiuu, $osyqkeauyomigiuu->data->user->id]; ayyweymyuuiauamo: omugkkesagcyagmk: } catch (Exception $wgaoewqkwgomoaai) { $keccaugmemegoimu = $this->oemauiimmycumcsk($this->kyacickkomkioeyu($wgaoewqkwgomoaai), 500); } kqksuugcgsyeoayy: qqewoyookaskiuek: qkcyqocqqwmqgqww: return $keccaugmemegoimu; } public function issssuygyewuaswa($aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->sygeeqgwywmygsyu($aqmwamyiwgeeymqa); if (!($mkucggyaiaukqoce && !is_wp_error($mkucggyaiaukqoce))) { goto eegqyykygiccaoeo; } $mkucggyaiaukqoce = ManipulateArray::get($mkucggyaiaukqoce, 2); $mkucggyaiaukqoce = ManipulateUser::get($mkucggyaiaukqoce); if ($mkucggyaiaukqoce) { goto miyqyeiwquwsacsm; } $mkucggyaiaukqoce = $this->oemauiimmycumcsk(__("\125\163\145\x72\x20\156\157\164\40\146\x6f\165\x6e\144", PR__MDL__PANEL), 401); miyqyeiwquwsacsm: eegqyykygiccaoeo: return $mkucggyaiaukqoce; } public function aumueocimuaiwyee() : ?string { return (string) ManipulateSetting::cmaecekuqkwmemms("\x53\x45\x43\x55\122\x45\137\101\x55\x54\110\x5f\113\x45\x59", "\x61\165\x74\x68\55\x73\145\143\162\x65\x74\x2d\153\145\x79"); } public function ksoemussqmaacucm($mkucggyaiaukqoce) : array { $mkucggyaiaukqoce = ManipulateUser::get($mkucggyaiaukqoce); return ["\x61\x63\x63\157\x75\156\x74" => ["\165\163\x65\x72\x6e\x61\155\145" => $mkucggyaiaukqoce->user_login, "\162\x65\x67\151\163\x74\145\162\x65\144" => $mkucggyaiaukqoce->user_registered], "\160\145\x72\x73\x6f\x6e\141\x6c" => User::symcgieuakksimmu()->ksoemussqmaacucm($mkucggyaiaukqoce)]; } }
