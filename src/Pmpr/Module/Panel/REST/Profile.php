<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             627f680896d85             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel\REST; use Pmpr\Common\Foundation\FormMaker\Front\Form; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Panel\User; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Profile extends Common { protected ?User $userManager = null; public function __construct() { $this->rest_base = "\160\x72\x6f\146\151\x6c\145"; $this->userManager = User::symcgieuakksimmu(); parent::__construct(); } public function gomiusgyskywsqai() : ?User { return $this->userManager; } public function register_routes() { $this->register("\x2f\x75\160\144\141\164\145", ["\x61\162\x67\163" => [], "\x6d\145\164\150\157\x64\x73" => self::qucyckeykeuuaquw, "\143\x61\154\x6c\x62\141\143\153" => [$this, "\165\160\x64\x61\164\x65"]]); $this->register("\57\x67\145\x74\x2d\146\151\145\154\144\x73", ["\x61\162\x67\x73" => [], "\x6d\145\x74\x68\x6f\144\163" => self::uigoseacoukemwqc, "\x63\141\154\x6c\x62\x61\x63\x6b" => [$this, "\165\147\155\x63\x65\x63\143\147\167\141\x61\141\151\147\x69\x79"]]); $this->register("\x2f\160\162\145\166\151\145\x77\163", ["\141\x72\x67\x73" => [], "\x6d\145\x74\x68\x6f\144\x73" => self::uigoseacoukemwqc, "\x63\141\x6c\154\142\141\x63\x6b" => [$this, "\x75\x6d\x67\147\x77\x61\x77\x65\x63\163\141\x69\143\x65\161\143"]]); } public function umggwawecsaiceqc(WP_REST_Request $aqmwamyiwgeeymqa) { $mcgmicqwgaaqqqcw = $this->gomiusgyskywsqai()->aqqaucmcssiayceu(); return $this->ewmkmmsuiuwmmwoy($mcgmicqwgaaqqqcw); } public function ugmceccgwaaaigiy(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto ikqqskkqqwmwssoo; } $wsqkgswwooewwekw = $this->gsesiocqciggmauo(null, $keccaugmemegoimu); $keccaugmemegoimu = []; if (!is_array($wsqkgswwooewwekw)) { goto iwekmyyccgiyuecc; } foreach ($wsqkgswwooewwekw as $oceoauekaygmuoko => $ikgwqyuyckaewsow) { $keccaugmemegoimu[$oceoauekaygmuoko] = $this->ayssaocauwgssywa($ikgwqyuyckaewsow); ogsaaqsaogcqiouy: } ousiuuwgwkiyikyq: iwekmyyccgiyuecc: ikqqskkqqwmwssoo: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function update(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (!is_wp_error($mkucggyaiaukqoce)) { goto ogqmesokykywseys; } $keccaugmemegoimu = $mkucggyaiaukqoce; goto ykomgumacooyomsk; ogqmesokykywseys: $oceoauekaygmuoko = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::mgsccwumkcawaqcy); $ikgwqyuyckaewsow = $this->gsesiocqciggmauo($oceoauekaygmuoko, $mkucggyaiaukqoce); if ($oceoauekaygmuoko && $ikgwqyuyckaewsow) { goto cwwmimggaaecmucw; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x53\145\x67\x6d\145\x6e\x74\x20\x66\x69\145\x6c\144\40\151\163\x20\151\x73\x20\155\x69\x73\x73\x69\156\x67", PR__MDL__PANEL), 400); goto awoaooyoeoyeeqee; cwwmimggaaecmucw: $keccaugmemegoimu = $this->gomiusgyskywsqai()->uwucmiyokwcakwga($mkucggyaiaukqoce, $aqmwamyiwgeeymqa->get_params(), $ikgwqyuyckaewsow); if (is_wp_error($keccaugmemegoimu)) { goto aomysykcgikegiau; } $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\x50\x72\157\146\151\x6c\x65\40\165\x70\x64\141\164\x65\40\x73\165\x63\143\145\163\x73\146\x75\154\x6c\x79\56", PR__MDL__PANEL)); aomysykcgikegiau: awoaooyoeoyeeqee: ykomgumacooyomsk: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function gsesiocqciggmauo($oceoauekaygmuoko = null, $mkucggyaiaukqoce = null) { $wsqkgswwooewwekw = ["\x61\143\143\157\165\156\x74" => [Form::ymuegqgyuagyucws(self::csiaccacwgeeqwwo, __("\125\x73\x65\x72\x6e\141\155\x65", PR__MDL__PANEL))->oykaosmaegqwmoga()->sqcsseccsaqsoyqy()->iygyugseyaqwywyg(ManipulateArray::get($mkucggyaiaukqoce, "\x75\x73\x65\162\137\154\x6f\147\x69\156")), Form::ymuegqgyuagyucws("\162\x65\x67\151\x73\164\145\162\x65\144", __("\103\x72\x65\x61\164\145\40\101\x63\x63\157\165\x6e\x74\x20\104\x61\164\145", PR__MDL__PANEL))->oykaosmaegqwmoga()->iygyugseyaqwywyg($this->eciukqcoqmyacwow(strtotime(ManipulateArray::get($mkucggyaiaukqoce, "\165\163\145\x72\137\162\x65\x67\151\x73\x74\x65\x72\x65\x64")), ManipulateSetting::uyomwmskouyyqyyq()))], "\x70\141\163\x73\x77\157\162\144" => [Form::ymuegqgyuagyucws("\x63\165\x72\x72\145\x6e\x74\x5f\160\x61\163\163\167\x6f\162\144", __("\103\165\x72\162\145\x6e\x74\40\120\x61\x73\163\167\x6f\x72\144", PR__MDL__PANEL))->eumecwmqmukqgyea()->sqsumkuougquscyg(), Form::ymuegqgyuagyucws("\156\x65\167\137\x70\141\163\x73\x77\157\x72\x64", __("\116\x65\167\x20\x50\141\x73\163\167\157\162\144", PR__MDL__PANEL))->eumecwmqmukqgyea()->sqsumkuougquscyg(), Form::ymuegqgyuagyucws("\166\145\162\151\146\171\137\x70\141\x73\x73\167\x6f\x72\144", __("\126\x65\x72\151\146\x79\x20\120\141\163\163\167\x6f\x72\x64", PR__MDL__PANEL))->eumecwmqmukqgyea()->sqsumkuougquscyg()], "\x70\145\x72\x73\157\x6e\141\x6c" => $this->gomiusgyskywsqai()->ugmceccgwaaaigiy([], [self::meksegaoamowuwoq => $mkucggyaiaukqoce])]; $wsqkgswwooewwekw = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\160\141\x6e\x65\154\137\x70\x72\x6f\146\x69\154\x65\137\x73\x65\147\155\145\156\164\x73\137\x66\151\145\154\144\x73"), $wsqkgswwooewwekw); return ManipulateArray::get($wsqkgswwooewwekw, $oceoauekaygmuoko, $wsqkgswwooewwekw); } }
