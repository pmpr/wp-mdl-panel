<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c02775ada4a             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Panel\REST; use Pmpr\Common\Foundation\FormMaker\Front\Form; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Package\Panel\User; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Profile extends Common { protected ?User $userManager = null; public function __construct() { $this->rest_base = "\x70\x72\157\146\x69\154\x65"; $this->userManager = User::symcgieuakksimmu(); parent::__construct(); } public function gomiusgyskywsqai() : ?User { return $this->userManager; } public function register_routes() { $this->register("\57\165\160\144\141\164\x65", ["\x61\162\x67\163" => [], "\x6d\145\164\x68\x6f\144\x73" => self::qucyckeykeuuaquw, "\x63\141\154\154\x62\141\143\x6b" => [$this, "\165\x70\x64\141\164\145"]]); $this->register("\x2f\147\x65\164\x2d\146\151\x65\154\x64\x73", ["\x61\162\147\163" => [], "\155\x65\x74\150\x6f\x64\163" => self::uigoseacoukemwqc, "\143\x61\154\x6c\142\x61\x63\x6b" => [$this, "\x75\x67\155\x63\145\x63\143\x67\x77\x61\141\x61\x69\x67\x69\x79"]]); $this->register("\x2f\160\162\145\166\x69\x65\167\x73", ["\141\x72\147\x73" => [], "\155\145\164\150\157\x64\163" => self::uigoseacoukemwqc, "\143\x61\x6c\x6c\x62\x61\x63\153" => [$this, "\x75\x6d\147\147\x77\141\x77\145\143\163\141\151\x63\x65\x71\143"]]); } public function umggwawecsaiceqc(WP_REST_Request $aqmwamyiwgeeymqa) { $mcgmicqwgaaqqqcw = $this->gomiusgyskywsqai()->aqqaucmcssiayceu(); return $this->ewmkmmsuiuwmmwoy($mcgmicqwgaaqqqcw); } public function ugmceccgwaaaigiy(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto qqewoyookaskiuek; } $wsqkgswwooewwekw = $this->gsesiocqciggmauo(null, $keccaugmemegoimu); $keccaugmemegoimu = []; if (!is_array($wsqkgswwooewwekw)) { goto iggyqogweyosuikc; } foreach ($wsqkgswwooewwekw as $oceoauekaygmuoko => $ikgwqyuyckaewsow) { $keccaugmemegoimu[$oceoauekaygmuoko] = $this->ayssaocauwgssywa($ikgwqyuyckaewsow); kqksuugcgsyeoayy: } ygcsmkuycoagwyou: iggyqogweyosuikc: qqewoyookaskiuek: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function update(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (!is_wp_error($mkucggyaiaukqoce)) { goto eegqyykygiccaoeo; } $keccaugmemegoimu = $mkucggyaiaukqoce; goto ywqgcegomwaiuquc; eegqyykygiccaoeo: $oceoauekaygmuoko = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::mgsccwumkcawaqcy); $ikgwqyuyckaewsow = $this->gsesiocqciggmauo($oceoauekaygmuoko, $mkucggyaiaukqoce); if ($oceoauekaygmuoko && $ikgwqyuyckaewsow) { goto qkcyqocqqwmqgqww; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\123\145\x67\x6d\145\x6e\164\40\x66\151\145\154\x64\x20\151\x73\x20\x69\163\40\155\x69\x73\163\x69\x6e\x67", PR__PKG__PANEL), 400); goto miyqyeiwquwsacsm; qkcyqocqqwmqgqww: $keccaugmemegoimu = $this->gomiusgyskywsqai()->uwucmiyokwcakwga($mkucggyaiaukqoce, $aqmwamyiwgeeymqa->get_params(), $ikgwqyuyckaewsow); if (is_wp_error($keccaugmemegoimu)) { goto ssoucoucsgccekwe; } $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\120\162\x6f\146\151\x6c\145\x20\x75\160\x64\x61\164\x65\x20\163\165\143\x63\x65\x73\163\146\165\154\154\x79\x2e", PR__PKG__PANEL)); ssoucoucsgccekwe: miyqyeiwquwsacsm: ywqgcegomwaiuquc: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function gsesiocqciggmauo($oceoauekaygmuoko = null, $mkucggyaiaukqoce = null) { $wsqkgswwooewwekw = ["\141\143\143\157\x75\x6e\164" => [Form::ymuegqgyuagyucws(self::csiaccacwgeeqwwo, __("\125\163\145\162\156\141\155\145", PR__PKG__PANEL))->oykaosmaegqwmoga()->sqcsseccsaqsoyqy()->iygyugseyaqwywyg(ManipulateArray::get($mkucggyaiaukqoce, "\x75\x73\145\x72\137\x6c\157\147\151\156")), Form::ymuegqgyuagyucws("\162\x65\147\x69\163\164\145\162\x65\144", __("\103\x72\145\141\x74\145\40\x41\143\143\x6f\x75\x6e\164\x20\104\141\x74\145", PR__PKG__PANEL))->oykaosmaegqwmoga()->iygyugseyaqwywyg($this->eciukqcoqmyacwow(strtotime(ManipulateArray::get($mkucggyaiaukqoce, "\x75\x73\145\x72\137\x72\x65\147\x69\x73\x74\x65\x72\145\144")), ManipulateSetting::uyomwmskouyyqyyq()))], "\x70\x61\163\x73\167\x6f\162\144" => [Form::ymuegqgyuagyucws("\143\x75\x72\x72\145\156\x74\137\160\x61\x73\x73\x77\x6f\162\144", __("\x43\165\162\x72\145\x6e\164\x20\x50\141\x73\163\167\x6f\162\144", PR__PKG__PANEL))->eumecwmqmukqgyea()->sqsumkuougquscyg(), Form::ymuegqgyuagyucws("\x6e\145\x77\137\160\141\163\x73\167\157\162\144", __("\x4e\145\167\x20\x50\x61\163\x73\167\157\162\144", PR__PKG__PANEL))->eumecwmqmukqgyea()->sqsumkuougquscyg(), Form::ymuegqgyuagyucws("\x76\145\162\x69\146\171\137\160\141\163\x73\167\157\x72\x64", __("\x56\145\162\x69\146\171\x20\x50\141\x73\x73\167\157\x72\144", PR__PKG__PANEL))->eumecwmqmukqgyea()->sqsumkuougquscyg()], "\160\145\x72\x73\157\156\141\154" => $this->gomiusgyskywsqai()->ugmceccgwaaaigiy([], [self::meksegaoamowuwoq => $mkucggyaiaukqoce])]; $wsqkgswwooewwekw = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\160\141\x6e\145\x6c\137\160\x72\157\146\x69\x6c\145\137\x73\145\x67\x6d\x65\156\x74\x73\137\x66\x69\145\x6c\144\163"), $wsqkgswwooewwekw); return ManipulateArray::get($wsqkgswwooewwekw, $oceoauekaygmuoko, $wsqkgswwooewwekw); } }
