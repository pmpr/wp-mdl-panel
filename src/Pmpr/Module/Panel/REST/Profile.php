<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63209390d9952             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel\REST; use Pmpr\Common\Foundation\FormMaker\Front\Form; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Panel\User; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Profile extends Common { protected ?User $userManager = null; public function __construct() { $this->rest_base = "\x70\x72\157\x66\x69\x6c\x65"; $this->userManager = User::symcgieuakksimmu(); parent::__construct(); } public function gomiusgyskywsqai() : ?User { return $this->userManager; } public function register_routes() { $this->register("\57\x75\160\x64\x61\x74\x65", ["\141\x72\x67\163" => [], "\155\x65\x74\150\x6f\144\163" => self::qucyckeykeuuaquw, "\x63\x61\154\154\142\141\143\153" => [$this, "\165\160\144\141\x74\x65"]]); $this->register("\57\x67\145\x74\55\146\151\x65\x6c\144\x73", ["\141\162\x67\163" => [], "\x6d\x65\x74\x68\x6f\144\163" => self::uigoseacoukemwqc, "\143\141\x6c\154\142\141\x63\x6b" => [$this, "\x75\x67\x6d\x63\145\143\143\147\167\141\x61\x61\x69\x67\151\x79"]]); $this->register("\57\160\162\145\x76\x69\x65\167\163", ["\x61\162\x67\163" => [], "\x6d\x65\164\150\x6f\144\163" => self::uigoseacoukemwqc, "\x63\x61\x6c\x6c\x62\x61\143\x6b" => [$this, "\x75\155\x67\x67\x77\141\167\x65\143\163\x61\x69\x63\145\161\x63"]]); } public function umggwawecsaiceqc(WP_REST_Request $aqmwamyiwgeeymqa) { $mcgmicqwgaaqqqcw = $this->gomiusgyskywsqai()->aqqaucmcssiayceu(); return $this->ewmkmmsuiuwmmwoy($mcgmicqwgaaqqqcw); } public function ugmceccgwaaaigiy(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto ywqgcegomwaiuquc; } $wsqkgswwooewwekw = $this->gsesiocqciggmauo(null, $keccaugmemegoimu); $keccaugmemegoimu = []; if (!is_array($wsqkgswwooewwekw)) { goto eegqyykygiccaoeo; } foreach ($wsqkgswwooewwekw as $oceoauekaygmuoko => $ikgwqyuyckaewsow) { $keccaugmemegoimu[$oceoauekaygmuoko] = $this->ayssaocauwgssywa($ikgwqyuyckaewsow); miyqyeiwquwsacsm: } qkcyqocqqwmqgqww: eegqyykygiccaoeo: ywqgcegomwaiuquc: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function update(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (!is_wp_error($mkucggyaiaukqoce)) { goto suswcqoyyqkkquuo; } $keccaugmemegoimu = $mkucggyaiaukqoce; goto eeqesooyqagwawae; suswcqoyyqkkquuo: $oceoauekaygmuoko = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::mgsccwumkcawaqcy); $ikgwqyuyckaewsow = $this->gsesiocqciggmauo($oceoauekaygmuoko, $mkucggyaiaukqoce); if ($oceoauekaygmuoko && $ikgwqyuyckaewsow) { goto soqqemyioggmoakg; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x53\145\147\x6d\145\156\164\x20\x66\151\145\154\144\40\151\x73\40\151\x73\40\155\151\x73\163\x69\x6e\x67", PR__MDL__PANEL), 400); goto acaqummmoyiemqss; soqqemyioggmoakg: $keccaugmemegoimu = $this->gomiusgyskywsqai()->uwucmiyokwcakwga($mkucggyaiaukqoce, $aqmwamyiwgeeymqa->get_params(), $ikgwqyuyckaewsow); if (is_wp_error($keccaugmemegoimu)) { goto wmmggowmigekyoso; } $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\120\162\x6f\146\x69\154\145\40\x75\x70\x64\x61\x74\x65\40\x73\x75\x63\143\x65\163\x73\146\165\154\x6c\171\x2e", PR__MDL__PANEL)); wmmggowmigekyoso: acaqummmoyiemqss: eeqesooyqagwawae: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function gsesiocqciggmauo($oceoauekaygmuoko = null, $mkucggyaiaukqoce = null) { $wsqkgswwooewwekw = ["\x61\x63\143\x6f\x75\x6e\x74" => [Form::ymuegqgyuagyucws(self::csiaccacwgeeqwwo, __("\125\x73\145\x72\x6e\141\155\x65", PR__MDL__PANEL))->oykaosmaegqwmoga()->sqcsseccsaqsoyqy()->iygyugseyaqwywyg(ManipulateArray::get($mkucggyaiaukqoce, "\165\x73\x65\162\137\154\x6f\x67\151\156")), Form::ymuegqgyuagyucws("\162\145\147\x69\x73\x74\145\162\145\x64", __("\103\162\x65\141\x74\145\x20\x41\x63\x63\x6f\165\156\164\40\104\141\x74\145", PR__MDL__PANEL))->oykaosmaegqwmoga()->iygyugseyaqwywyg($this->eciukqcoqmyacwow(strtotime(ManipulateArray::get($mkucggyaiaukqoce, "\x75\x73\145\162\x5f\162\145\147\x69\163\x74\145\162\x65\144")), ManipulateSetting::uyomwmskouyyqyyq()))], "\160\141\x73\x73\167\x6f\162\144" => [Form::ymuegqgyuagyucws("\143\165\162\x72\145\156\164\x5f\160\x61\x73\x73\x77\x6f\162\144", __("\x43\x75\x72\x72\x65\x6e\164\40\120\141\163\x73\167\157\x72\x64", PR__MDL__PANEL))->eumecwmqmukqgyea()->sqsumkuougquscyg(), Form::ymuegqgyuagyucws("\x6e\145\167\137\160\x61\x73\x73\x77\x6f\162\x64", __("\116\145\167\x20\120\141\x73\163\167\157\x72\x64", PR__MDL__PANEL))->eumecwmqmukqgyea()->sqsumkuougquscyg(), Form::ymuegqgyuagyucws("\166\x65\162\151\x66\171\137\x70\x61\x73\163\167\157\162\x64", __("\126\x65\162\151\x66\x79\x20\120\x61\163\x73\x77\x6f\162\144", PR__MDL__PANEL))->eumecwmqmukqgyea()->sqsumkuougquscyg()], "\x70\x65\162\x73\157\x6e\141\154" => $this->gomiusgyskywsqai()->ugmceccgwaaaigiy([], [self::meksegaoamowuwoq => $mkucggyaiaukqoce])]; $wsqkgswwooewwekw = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\160\141\156\145\x6c\x5f\160\162\x6f\x66\x69\154\145\137\163\145\x67\x6d\x65\x6e\x74\163\x5f\x66\151\x65\154\x64\163"), $wsqkgswwooewwekw); return ManipulateArray::get($wsqkgswwooewwekw, $oceoauekaygmuoko, $wsqkgswwooewwekw); } }
