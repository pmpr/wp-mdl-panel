<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62530b7c18a8c             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel\REST; use Pmpr\Common\Foundation\FormMaker\Front\Form; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Panel\User; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Profile extends Common { protected ?User $userManager = null; public function __construct() { $this->rest_base = "\160\162\157\146\151\x6c\x65"; $this->userManager = User::symcgieuakksimmu(); parent::__construct(); } public function gomiusgyskywsqai() : ?User { return $this->userManager; } public function register_routes() { $this->register("\57\165\x70\x64\x61\164\145", ["\141\162\x67\163" => [], "\x6d\145\x74\x68\x6f\144\x73" => self::qucyckeykeuuaquw, "\143\x61\154\154\x62\x61\x63\153" => [$this, "\x75\160\144\141\x74\145"]]); $this->register("\57\147\145\164\55\146\151\145\154\144\163", ["\141\162\147\163" => [], "\155\145\164\150\x6f\144\163" => self::uigoseacoukemwqc, "\x63\x61\154\154\x62\x61\x63\x6b" => [$this, "\x75\x67\x6d\143\x65\x63\x63\147\x77\x61\141\x61\151\x67\x69\x79"]]); $this->register("\x2f\x70\162\145\166\151\x65\x77\163", ["\141\162\x67\x73" => [], "\x6d\x65\x74\150\157\144\163" => self::uigoseacoukemwqc, "\143\x61\154\x6c\x62\x61\143\x6b" => [$this, "\165\155\x67\x67\x77\x61\167\145\x63\163\x61\151\143\145\161\143"]]); } public function umggwawecsaiceqc(WP_REST_Request $aqmwamyiwgeeymqa) { $mcgmicqwgaaqqqcw = $this->gomiusgyskywsqai()->aqqaucmcssiayceu(); return $this->ewmkmmsuiuwmmwoy($mcgmicqwgaaqqqcw); } public function ugmceccgwaaaigiy(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto soqqemyioggmoakg; } $wsqkgswwooewwekw = $this->gsesiocqciggmauo(null, $keccaugmemegoimu); $keccaugmemegoimu = []; if (!is_array($wsqkgswwooewwekw)) { goto wmmggowmigekyoso; } foreach ($wsqkgswwooewwekw as $oceoauekaygmuoko => $ikgwqyuyckaewsow) { $keccaugmemegoimu[$oceoauekaygmuoko] = $this->ayssaocauwgssywa($ikgwqyuyckaewsow); ywqgcegomwaiuquc: } eegqyykygiccaoeo: wmmggowmigekyoso: soqqemyioggmoakg: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function update(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (!is_wp_error($mkucggyaiaukqoce)) { goto oqugqwcyomiaaoqu; } $keccaugmemegoimu = $mkucggyaiaukqoce; goto foeeqckqsyockkak; oqugqwcyomiaaoqu: $oceoauekaygmuoko = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::mgsccwumkcawaqcy); $ikgwqyuyckaewsow = $this->gsesiocqciggmauo($oceoauekaygmuoko, $mkucggyaiaukqoce); if ($oceoauekaygmuoko && $ikgwqyuyckaewsow) { goto suswcqoyyqkkquuo; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x53\x65\x67\155\x65\x6e\x74\x20\146\151\145\154\x64\x20\151\163\x20\x69\x73\x20\155\151\x73\x73\x69\x6e\x67", PR__MDL__PANEL), 400); goto eeqesooyqagwawae; suswcqoyyqkkquuo: $keccaugmemegoimu = $this->gomiusgyskywsqai()->uwucmiyokwcakwga($mkucggyaiaukqoce, $aqmwamyiwgeeymqa->get_params(), $ikgwqyuyckaewsow); if (is_wp_error($keccaugmemegoimu)) { goto acaqummmoyiemqss; } $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\120\x72\x6f\146\x69\154\145\x20\165\160\144\x61\164\145\x20\x73\x75\143\143\145\163\163\146\x75\x6c\x6c\171\56", PR__MDL__PANEL)); acaqummmoyiemqss: eeqesooyqagwawae: foeeqckqsyockkak: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function gsesiocqciggmauo($oceoauekaygmuoko = null, $mkucggyaiaukqoce = null) { $wsqkgswwooewwekw = ["\x61\x63\x63\x6f\x75\156\x74" => [Form::ymuegqgyuagyucws(self::csiaccacwgeeqwwo, __("\125\x73\145\162\156\141\x6d\x65", PR__MDL__PANEL))->oykaosmaegqwmoga()->sqcsseccsaqsoyqy()->iygyugseyaqwywyg(ManipulateArray::get($mkucggyaiaukqoce, "\x75\163\145\162\137\x6c\157\x67\x69\x6e")), Form::ymuegqgyuagyucws("\x72\x65\x67\x69\163\164\x65\x72\x65\x64", __("\x43\162\145\141\x74\x65\40\101\143\x63\157\165\156\164\x20\x44\x61\x74\x65", PR__MDL__PANEL))->oykaosmaegqwmoga()->iygyugseyaqwywyg($this->eciukqcoqmyacwow(strtotime(ManipulateArray::get($mkucggyaiaukqoce, "\x75\x73\145\x72\137\x72\x65\147\x69\x73\x74\x65\x72\145\144")), ManipulateSetting::uyomwmskouyyqyyq()))], "\160\x61\x73\163\x77\x6f\x72\x64" => [Form::ymuegqgyuagyucws("\143\x75\162\x72\x65\x6e\164\x5f\160\x61\163\x73\x77\157\x72\x64", __("\x43\165\162\162\145\156\164\40\120\x61\x73\x73\x77\157\x72\x64", PR__MDL__PANEL))->eumecwmqmukqgyea()->sqsumkuougquscyg(), Form::ymuegqgyuagyucws("\x6e\145\x77\x5f\160\x61\x73\163\167\157\162\144", __("\116\145\x77\x20\120\141\x73\x73\x77\x6f\x72\x64", PR__MDL__PANEL))->eumecwmqmukqgyea()->sqsumkuougquscyg(), Form::ymuegqgyuagyucws("\x76\x65\x72\151\146\171\137\x70\141\163\163\x77\x6f\162\144", __("\x56\145\x72\151\146\x79\x20\120\x61\x73\x73\167\157\162\x64", PR__MDL__PANEL))->eumecwmqmukqgyea()->sqsumkuougquscyg()], "\160\x65\162\x73\x6f\156\x61\x6c" => $this->gomiusgyskywsqai()->ugmceccgwaaaigiy([], [self::meksegaoamowuwoq => $mkucggyaiaukqoce])]; $wsqkgswwooewwekw = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\160\141\x6e\145\154\137\160\x72\x6f\x66\151\x6c\x65\137\x73\x65\x67\155\x65\x6e\x74\x73\x5f\x66\x69\x65\154\144\163"), $wsqkgswwooewwekw); return ManipulateArray::get($wsqkgswwooewwekw, $oceoauekaygmuoko, $wsqkgswwooewwekw); } }
