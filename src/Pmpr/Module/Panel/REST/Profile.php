<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             625c3f480aa9f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel\REST; use Pmpr\Common\Foundation\FormMaker\Front\Form; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Panel\User; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Profile extends Common { protected ?User $userManager = null; public function __construct() { $this->rest_base = "\x70\x72\157\146\151\x6c\145"; $this->userManager = User::symcgieuakksimmu(); parent::__construct(); } public function gomiusgyskywsqai() : ?User { return $this->userManager; } public function register_routes() { $this->register("\57\165\160\x64\141\164\x65", ["\141\162\147\x73" => [], "\155\145\164\x68\x6f\144\163" => self::qucyckeykeuuaquw, "\143\x61\154\x6c\x62\141\x63\x6b" => [$this, "\x75\x70\144\141\x74\x65"]]); $this->register("\57\147\145\164\x2d\146\x69\x65\x6c\144\163", ["\x61\162\x67\x73" => [], "\155\145\x74\x68\x6f\144\x73" => self::uigoseacoukemwqc, "\143\141\154\154\x62\x61\x63\153" => [$this, "\165\x67\155\143\x65\x63\x63\147\167\x61\141\141\x69\147\x69\x79"]]); $this->register("\57\x70\x72\145\166\x69\145\167\163", ["\141\x72\147\x73" => [], "\155\145\164\x68\x6f\x64\x73" => self::uigoseacoukemwqc, "\x63\141\154\154\x62\141\x63\x6b" => [$this, "\165\155\x67\x67\167\x61\x77\145\143\163\x61\x69\143\145\x71\x63"]]); } public function umggwawecsaiceqc(WP_REST_Request $aqmwamyiwgeeymqa) { $mcgmicqwgaaqqqcw = $this->gomiusgyskywsqai()->aqqaucmcssiayceu(); return $this->ewmkmmsuiuwmmwoy($mcgmicqwgaaqqqcw); } public function ugmceccgwaaaigiy(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto acaqummmoyiemqss; } $wsqkgswwooewwekw = $this->gsesiocqciggmauo(null, $keccaugmemegoimu); $keccaugmemegoimu = []; if (!is_array($wsqkgswwooewwekw)) { goto soqqemyioggmoakg; } foreach ($wsqkgswwooewwekw as $oceoauekaygmuoko => $ikgwqyuyckaewsow) { $keccaugmemegoimu[$oceoauekaygmuoko] = $this->ayssaocauwgssywa($ikgwqyuyckaewsow); wmmggowmigekyoso: } ywqgcegomwaiuquc: soqqemyioggmoakg: acaqummmoyiemqss: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function update(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (!is_wp_error($mkucggyaiaukqoce)) { goto foeeqckqsyockkak; } $keccaugmemegoimu = $mkucggyaiaukqoce; goto iekumemscwieugqw; foeeqckqsyockkak: $oceoauekaygmuoko = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::mgsccwumkcawaqcy); $ikgwqyuyckaewsow = $this->gsesiocqciggmauo($oceoauekaygmuoko, $mkucggyaiaukqoce); if ($oceoauekaygmuoko && $ikgwqyuyckaewsow) { goto eeqesooyqagwawae; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x53\x65\x67\155\145\x6e\164\x20\146\151\x65\x6c\144\x20\x69\163\x20\x69\x73\x20\x6d\151\163\163\x69\156\x67", PR__MDL__PANEL), 400); goto oqugqwcyomiaaoqu; eeqesooyqagwawae: $keccaugmemegoimu = $this->gomiusgyskywsqai()->uwucmiyokwcakwga($mkucggyaiaukqoce, $aqmwamyiwgeeymqa->get_params(), $ikgwqyuyckaewsow); if (is_wp_error($keccaugmemegoimu)) { goto suswcqoyyqkkquuo; } $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\120\x72\157\x66\x69\x6c\145\x20\x75\160\144\141\x74\145\40\x73\x75\143\143\x65\163\x73\x66\165\x6c\x6c\171\x2e", PR__MDL__PANEL)); suswcqoyyqkkquuo: oqugqwcyomiaaoqu: iekumemscwieugqw: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function gsesiocqciggmauo($oceoauekaygmuoko = null, $mkucggyaiaukqoce = null) { $wsqkgswwooewwekw = ["\x61\x63\x63\157\x75\156\x74" => [Form::ymuegqgyuagyucws(self::csiaccacwgeeqwwo, __("\x55\x73\145\x72\x6e\141\155\145", PR__MDL__PANEL))->oykaosmaegqwmoga()->sqcsseccsaqsoyqy()->iygyugseyaqwywyg(ManipulateArray::get($mkucggyaiaukqoce, "\165\x73\145\x72\137\x6c\x6f\x67\151\x6e")), Form::ymuegqgyuagyucws("\x72\145\x67\151\x73\x74\145\162\145\144", __("\x43\162\145\141\164\x65\x20\x41\x63\x63\157\x75\x6e\x74\x20\x44\141\x74\x65", PR__MDL__PANEL))->oykaosmaegqwmoga()->iygyugseyaqwywyg($this->eciukqcoqmyacwow(strtotime(ManipulateArray::get($mkucggyaiaukqoce, "\165\163\x65\162\x5f\x72\145\147\151\x73\164\145\162\145\x64")), ManipulateSetting::uyomwmskouyyqyyq()))], "\160\x61\x73\x73\x77\157\x72\x64" => [Form::ymuegqgyuagyucws("\x63\165\x72\162\x65\x6e\164\137\160\x61\x73\x73\x77\x6f\162\144", __("\x43\165\x72\x72\145\x6e\x74\x20\120\141\163\x73\x77\157\162\144", PR__MDL__PANEL))->eumecwmqmukqgyea()->sqsumkuougquscyg(), Form::ymuegqgyuagyucws("\x6e\x65\167\137\x70\x61\163\163\x77\157\x72\144", __("\x4e\145\167\x20\120\141\x73\x73\167\x6f\162\144", PR__MDL__PANEL))->eumecwmqmukqgyea()->sqsumkuougquscyg(), Form::ymuegqgyuagyucws("\166\x65\x72\x69\146\x79\x5f\x70\141\163\x73\x77\157\x72\x64", __("\x56\145\162\x69\146\x79\x20\120\141\163\163\x77\157\162\x64", PR__MDL__PANEL))->eumecwmqmukqgyea()->sqsumkuougquscyg()], "\x70\x65\x72\x73\157\x6e\141\x6c" => $this->gomiusgyskywsqai()->ugmceccgwaaaigiy([], [self::meksegaoamowuwoq => $mkucggyaiaukqoce])]; $wsqkgswwooewwekw = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x70\141\156\x65\154\137\160\162\x6f\146\x69\154\x65\137\x73\145\x67\x6d\145\x6e\164\163\x5f\146\151\145\x6c\144\x73"), $wsqkgswwooewwekw); return ManipulateArray::get($wsqkgswwooewwekw, $oceoauekaygmuoko, $wsqkgswwooewwekw); } }
