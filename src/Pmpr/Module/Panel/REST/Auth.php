<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63978bf4612f2             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel\REST; use Exception; use Firebase\JWT\JWT; use Pmpr\Common\Foundation\Decorator\DecoratorUser; use Pmpr\Common\Foundation\FormMaker\Front\Field\Field; use Pmpr\Common\Foundation\FormMaker\Front\Form; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Auth extends Common { const gagkiiqqiysqqgmc = "\x72\145\147\151\x73\164\145\x72"; const soawgaqmsgmysyma = "\x72\x65\x73\145\x74\137\x70\141\163\163\x77\157\x72\x64"; const igswqqsosoeiociu = "\x66\x6f\162\147\x6f\x74\137\160\141\x73\x73\167\157\x72\x64"; const scagkwwiiquocimc = "\154\x61\x73\164\x5f\x6e\141\155\x65"; const kagqiwogmiguosiw = "\x66\x69\x72\x73\164\x5f\x6e\x61\155\145"; const miqkwqsewyogmsak = "\165\x73\x65\162\137\x6c\x6f\x67\x69\156"; const iqgqyoowkoeugsck = "\x75\163\145\162\137\160\x61\163\x73\x77\x6f\x72\144"; const oysqakmiwsaqskce = "\162\145\x70\145\141\x74\137\x70\141\x73\163\167\157\x72\x64"; protected ?WP_Error $error = null; public function __construct() { $this->rest_base = "\x61\165\x74\150"; parent::__construct(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x77\x70\x5f\x6c\157\147\x6f\x75\164", [$this, "\x6f\x79\167\x77\155\x77\x77\x77\x71\x65\x75\151\157\155\x6b\x61"], 999); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x72\x65\163\145\x74\137\160\x72\x65\137\144\151\163\160\x61\x74\x63\150", [$this, "\171\167\163\x69\x69\x69\153\x75\x73\x77\157\x79\x6f\x77\x61\x77"])->cecaguuoecmccuse("\144\x65\164\x65\162\155\151\156\x65\137\143\165\162\x72\x65\156\164\137\165\163\x65\x72", [$this, "\141\x65\151\x63\x65\153\x61\163\x67\x6f\153\165\x75\157\161\155"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x67\x65\164\137\152\167\x74\x5f\141\165\164\x68\137\x75\x73\145\x72"), [$this, "\x69\x73\163\163\163\x75\171\x67\171\x65\x77\x75\x61\163\167\141"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("\147\145\164\x5f\x6a\x77\x74\137\x61\x75\x74\150\137\164\157\153\145\156"), [$this, "\x73\171\147\x65\145\x71\x67\167\171\167\x6d\171\x67\x73\171\x75"]); parent::kgquecmsgcouyaya(); } public function euekiyuksecoccus() : ?WP_Error { return $this->error; } public function yauwooaeicgosquo(?WP_Error $iswcokucwmiosiaq) : void { $this->error = $iswcokucwmiosiaq; } public function aeicekasgokuuoqm($mkucggyaiaukqoce) { $qoockacwwamsuscm = rest_get_url_prefix(); $wigqmiauciuswcom = ManipulateServer::ekcymmyqoceukosc(); if (!(strpos($wigqmiauciuswcom, $qoockacwwamsuscm) && strpos($wigqmiauciuswcom, "\57\x70\x61\156\x65\154\x2f\x61\x75\x74\150\x2f\x76\x65\x72\x69\146\171"))) { goto ogqmesokykywseys; } $keccaugmemegoimu = $this->sygeeqgwywmygsyu(false); if (is_wp_error($keccaugmemegoimu) && $keccaugmemegoimu->get_error_code() != "\x6e\157\137\141\165\x74\x68\137\150\145\x61\144\145\x72") { goto cwwmimggaaecmucw; } [$mgegoogckgsumooq, $smecmmgoykqcaieu] = $keccaugmemegoimu; $mkucggyaiaukqoce = $smecmmgoykqcaieu->data->user->id; goto awoaooyoeoyeeqee; cwwmimggaaecmucw: $this->yauwooaeicgosquo($keccaugmemegoimu); awoaooyoeoyeeqee: ogqmesokykywseys: return $mkucggyaiaukqoce; } public function register_routes() { $this->register("\x2f\x67\x65\164\x2d\x66\151\x65\154\144\163", ["\x61\162\147\x73" => [], "\155\x65\164\150\x6f\144\x73" => self::uigoseacoukemwqc, "\143\x61\154\x6c\142\141\x63\x6b" => [$this, "\165\147\155\143\x65\143\x63\x67\167\141\141\141\151\x67\x69\171"]]); $this->register("\57\x6d\145", ["\141\x72\x67\x73" => [], "\155\x65\164\x68\157\x64\x73" => self::uigoseacoukemwqc, "\143\141\x6c\x6c\142\141\143\x6b" => [$this, "\141\x75\157\x73\171\x69\x73\165\141\153\x67\165\x79\x69\155\167"]]); $this->register("\57\154\157\x67\151\x6e", ["\x61\162\147\163" => [], "\x6d\145\x74\x68\x6f\x64\163" => self::qucyckeykeuuaquw, "\x63\x61\x6c\154\x62\141\x63\153" => [$this, "\153\153\155\x6b\x63\x79\163\x79\x63\145\x79\151\x77\x73\153\x71"]]); $this->register("\57\162\145\147\151\x73\x74\145\x72", ["\x61\x72\x67\x73" => [], "\x6d\x65\x74\x68\157\x64\163" => self::qucyckeykeuuaquw, "\x63\141\154\x6c\x62\141\x63\x6b" => [$this, "\155\145\x6f\167\143\x75\155\165\145\151\x65\x65\x63\x65\x65\141"]]); $this->register("\57\154\x6f\147\157\x75\x74", ["\141\162\147\x73" => [], "\x6d\145\x74\x68\x6f\144\163" => self::qucyckeykeuuaquw, "\x63\141\x6c\x6c\x62\x61\143\153" => [$this, "\x61\x69\141\155\x67\153\x69\145\167\x77\x61\153\x6f\x65\147\x79"]]); $this->register("\57\166\x65\x72\x69\146\171", ["\x61\162\x67\163" => [], "\x6d\x65\164\150\157\x64\x73" => self::uigoseacoukemwqc, "\143\141\x6c\x6c\142\x61\x63\x6b" => [$this, "\165\163\x73\x6f\x77\153\151\147\x75\x6d\x6f\141\x6f\157\x77\x6f"]]); $this->register("\57\143\150\x61\156\147\x65\55\160\141\x73\163\167\x6f\162\x64", ["\141\x72\x67\x73" => [], "\155\145\164\150\157\x64\163" => self::ouuaeeeqeqkagcgi, "\x63\x61\x6c\154\142\141\x63\x6b" => [$this, "\x61\147\143\x79\167\x6b\167\141\x6f\x71\x6b\x6b\143\x63\x67\153"]]); $this->register("\57\x72\145\x73\x65\164\x2d\160\141\x73\x73\167\157\x72\x64", ["\141\x72\x67\x73" => [], "\x6d\x65\x74\x68\157\x64\163" => self::qucyckeykeuuaquw, "\x63\x61\154\154\x62\x61\143\153" => [$this, "\163\161\141\157\x71\x71\157\157\x71\x6f\x77\165\147\x6d\143\167"]]); $this->woekqgykywwycyci(); } public function oywwmwwwqeuiomka($mkucggyaiaukqoce) { } public function ugmceccgwaaaigiy(WP_REST_Request $aqmwamyiwgeeymqa) { $ikgwqyuyckaewsow = $this->cqsmgqiwwuasmkiq(); if ($ikgwqyuyckaewsow) { goto cuumeogeomowqisc; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\143\141\156\40\156\157\x74\40\x66\157\x75\x6e\x64\40\162\145\x71\x75\145\163\164\145\x64\x20\146\151\145\154\144\163\56", PR__MDL__PANEL), 404); goto gcckqucukawcasgk; cuumeogeomowqisc: foreach ($ikgwqyuyckaewsow as $ymqmyyeuycgmigyo => $ccamueccusigaaio) { foreach ($ccamueccusigaaio as $momcykaoccoymeig => $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto uiosisocuwokwkie; } $aiowsaccomcoikus->uuagoowwgcuosuuu()->eumecwmqmukqgyea()->qigsyyqgewgskemg("\x66\x6f\x72\155\55\143\x6f\156\164\x72\157\154\55\163\x6f\x6c\x69\144\40\x66\x6f\156\x74\x2d\163\151\x7a\145\x2d\150\x34\40\150\55\141\165\x74\x6f\x20\x70\55\65")->gkkgsyeumismsyse("\x66\157\156\164\x2d\163\151\x7a\x65\55\x68\66\40\x66\157\x6e\164\55\167\x65\x69\x67\150\164\55\x62\157\154\144\145\x72\x20\164\x65\170\164\55\144\x61\162\x6b"); $ikgwqyuyckaewsow[$ymqmyyeuycgmigyo][$momcykaoccoymeig] = $aiowsaccomcoikus; if (!($ccamueccusigaaio == self::gagkiiqqiysqqgmc)) { goto iikiiioqiyegyaak; } $aiowsaccomcoikus->smcqugueqiumkygs(); iikiiioqiyegyaak: uiosisocuwokwkie: gicyayswqyuoekcq: } kosaqwikueyksqmw: $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x70\141\x6e\145\x6c\137\x61\165\x74\150\x5f{$ymqmyyeuycgmigyo}\137\146\151\x65\x6c\144\x73"), $ccamueccusigaaio); $ikgwqyuyckaewsow[$ymqmyyeuycgmigyo] = $this->ayssaocauwgssywa($ccamueccusigaaio); mqkmcysgoiaouiwm: } ykomgumacooyomsk: $keccaugmemegoimu = $ikgwqyuyckaewsow; gcckqucukawcasgk: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function mmusmqyoussiyygq(WP_REST_Request $aqmwamyiwgeeymqa, string $ccamueccusigaaio) { $icwicymcioeyeyek = []; $ikgwqyuyckaewsow = $this->cqsmgqiwwuasmkiq($ccamueccusigaaio); if (!$ikgwqyuyckaewsow) { goto cogywoqcqummsyus; } foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto eekcoeikaeaaeyii; } $eqgoocgaqwqcimie = $this->swmwoeaaeqiouswg($aqmwamyiwgeeymqa, $aiowsaccomcoikus->mwikyscisascoeea(), $aiowsaccomcoikus->oiswysuiioecsaae()); if (!($aiowsaccomcoikus->msmiagueogcsucgc() && !$eqgoocgaqwqcimie)) { goto ocaguquugeamqckq; } $icwicymcioeyeyek = false; goto qmkaeeomgkwggoyo; ocaguquugeamqckq: $icwicymcioeyeyek[$aiowsaccomcoikus->mwikyscisascoeea()] = $eqgoocgaqwqcimie; eekcoeikaeaaeyii: csammceowmqwaamq: } qmkaeeomgkwggoyo: cogywoqcqummsyus: return $icwicymcioeyeyek; } private function cqsmgqiwwuasmkiq(string $ccamueccusigaaio = self::ALL) : array { $owaiikyuwwwmswgc = Form::ymuegqgyuagyucws(self::muqaqimusmckkieq, __("\105\x6d\141\151\x6c", PR__MDL__PANEL))->kyiucygqsgequoys("\145\x6d\x61\x69\x6c\x40\141\x64\x64\162\x65\163\x73\x2e\143\157\x6d")->mkiaygiogeeyogqm(false); $ikgwqyuyckaewsow = [self::yuguikokwoymmqem => [Form::ymuegqgyuagyucws(self::miqkwqsewyogmsak, __("\105\155\141\151\154\x20\x6f\x72\x20\x55\x73\x65\162\156\x61\155\x65", PR__MDL__PANEL))->kyiucygqsgequoys("\145\x6d\x61\x69\x6c\x40\141\144\144\162\x65\x73\163\56\143\157\155")->sqcsseccsaqsoyqy(), Form::ymuegqgyuagyucws(self::iqgqyoowkoeugsck, __("\120\141\x73\x73\167\x6f\162\x64", PR__MDL__PANEL))->sqsumkuougquscyg()], self::gagkiiqqiysqqgmc => [Form::ymuegqgyuagyucws(self::kagqiwogmiguosiw, __("\x46\x69\162\163\164\156\x61\x6d\145", PR__MDL__PANEL)), Form::ymuegqgyuagyucws(self::scagkwwiiquocimc, __("\114\141\163\x74\x6e\141\155\x65", PR__MDL__PANEL)), Form::ymuegqgyuagyucws(self::csiaccacwgeeqwwo, __("\125\x73\145\162\156\141\x6d\x65", PR__MDL__PANEL))->sqcsseccsaqsoyqy(), $owaiikyuwwwmswgc, Form::ymuegqgyuagyucws(self::akywgoyaseymiyka, __("\x50\141\163\163\167\157\x72\x64", PR__MDL__PANEL))->sqsumkuougquscyg(), Form::ymuegqgyuagyucws(self::oysqakmiwsaqskce, __("\x52\x65\x70\145\x61\164\x20\120\x61\x73\163\x77\157\162\144", PR__MDL__PANEL))->sqsumkuougquscyg()], self::soawgaqmsgmysyma => [], self::igswqqsosoeiociu => [$owaiikyuwwwmswgc]]; $ikgwqyuyckaewsow = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x70\x61\x6e\145\x6c\x5f\x61\x75\164\150\x5f\146\151\x65\154\144\163"), $ikgwqyuyckaewsow); return ManipulateArray::get($ikgwqyuyckaewsow, $ccamueccusigaaio, $ikgwqyuyckaewsow); } public function sqaoqqooqowugmcw(WP_REST_Request $aqmwamyiwgeeymqa) { $owaiikyuwwwmswgc = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::muqaqimusmckkieq); $keccaugmemegoimu = []; if (is_email($owaiikyuwwwmswgc)) { goto uaukmuiwskcemcsw; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\124\150\x65\x20\105\155\x61\x69\x6c\x20\x79\157\165\40\145\x6e\x74\x65\162\145\144\x20\151\163\x20\x6e\x6f\164\x20\x76\141\154\151\x64\x2e", PR__MDL__PANEL), 400); goto sockeswygwcskeuq; uaukmuiwskcemcsw: if (email_exists($owaiikyuwwwmswgc)) { goto gmwykkouysyaqwqm; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x4e\157\40\165\163\x65\x72\x20\x66\157\165\x6e\x64\40\x77\151\164\x68\40\164\x68\151\163\x20\145\155\141\x69\x6c\x20\x61\144\x64\162\x65\x73\x73\56", PR__MDL__PANEL), 404); goto ugqwuugsweqgmywk; gmwykkouysyaqwqm: try { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); } catch (Exception $iewosgggaueeyymg) { return $this->oemauiimmycumcsk($this->kyacickkomkioeyu($iewosgggaueeyymg), 500); } ugqwuugsweqgmywk: sockeswygwcskeuq: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function agcywkwaoqkkccgk(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (!is_wp_error($mkucggyaiaukqoce)) { goto eeyyskqsmquyquqw; } $keccaugmemegoimu = $mkucggyaiaukqoce; goto ewscugeuicukkycc; eeyyskqsmquyquqw: $yeacayasgueouoqc = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\143\165\162\162\x65\x6e\x74"); $qqwegysogaocgeww = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::akywgoyaseymiyka); if ($qqwegysogaocgeww && $yeacayasgueouoqc) { goto uegouoiuyoqkcscg; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\115\x69\163\163\x69\156\x67\40\x70\141\162\x61\155\x65\x74\x65\x72\x2e", PR__MDL__PANEL), 400); goto cgyakcqgugqgkqiw; uegouoiuyoqkcscg: if ($yeacayasgueouoqc === $qqwegysogaocgeww) { goto isgwkwacoyimiauk; } if (wp_check_password($yeacayasgueouoqc, $mkucggyaiaukqoce->user_pass, $mkucggyaiaukqoce->ID)) { goto uaqackioaiqwcocy; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x45\156\x74\145\162\145\144\x20\x63\x75\x72\162\x65\156\164\x20\160\x61\x73\x73\167\x6f\x72\144\40\x69\163\40\156\157\164\40\143\x6f\162\x72\x65\x63\164\56", PR__MDL__PANEL), 400); goto cscusseysqygsoiy; uaqackioaiqwcocy: $keccaugmemegoimu = new WP_Error(); $this->cqscqicucmeamkyq("\166\141\154\151\x64\x61\x74\x65\137\x70\x61\163\163\x77\157\162\144\137\x72\x65\163\x65\164", $keccaugmemegoimu, $mkucggyaiaukqoce); if ($keccaugmemegoimu->has_errors()) { goto mkwkkmkgiqiamacc; } reset_password($mkucggyaiaukqoce, $qqwegysogaocgeww); $keccaugmemegoimu = ["\155\145\163\x73\x61\147\145" => __("\120\141\x73\x73\x77\x6f\162\144\x20\143\150\x61\156\147\145\144\40\163\165\143\143\x65\x73\163\146\x75\154\x6c\x79", PR__MDL__PANEL), "\163\x74\x61\x74\x75\x73" => 200]; mkwkkmkgiqiamacc: cscusseysqygsoiy: goto mggeqkcksyaymcsa; isgwkwacoyimiauk: $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x45\x6e\164\145\x72\x65\x64\x20\143\x75\x72\162\145\x6e\164\40\x70\x61\163\163\167\x6f\x72\x64\40\141\x6e\x64\40\x6e\145\167\40\x70\x61\163\163\x77\157\162\x64\40\151\163\40\x73\x61\155\145\x2e", PR__MDL__PANEL), 400); mggeqkcksyaymcsa: cgyakcqgugqgkqiw: ewscugeuicukkycc: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function woekqgykywwycyci() { $uykgysuswksgmwqy = "\x41\x63\143\x65\163\163\55\x43\157\x6e\164\162\x6f\154\x2d\101\154\x6c\x6f\167\x2d\110\145\141\x64\145\162\x73\x2c\x20\x43\x6f\156\x74\x65\x6e\164\x2d\124\171\x70\x65\x2c\40\101\165\x74\150\157\162\151\172\x61\x74\x69\157\156"; header(sprintf("\101\143\143\145\x73\163\x2d\x43\157\x6e\x74\162\x6f\154\55\x41\154\x6c\x6f\167\55\x48\x65\141\144\x65\162\x73\x3a\40\45\x73", $uykgysuswksgmwqy)); } public function ywsiiikuswoyowaw(WP_REST_Request $aqmwamyiwgeeymqa) { $iswcokucwmiosiaq = $this->euekiyuksecoccus(); if (!is_wp_error($iswcokucwmiosiaq)) { goto kqswcsysqawkcgye; } $aqmwamyiwgeeymqa = $iswcokucwmiosiaq; kqswcsysqawkcgye: return $aqmwamyiwgeeymqa; } public function meowcumueieeceea(WP_REST_Request $aqmwamyiwgeeymqa) { $icwicymcioeyeyek = $this->mmusmqyoussiyygq($aqmwamyiwgeeymqa, self::gagkiiqqiysqqgmc); if ($icwicymcioeyeyek) { goto uimeeckqksqeekqq; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\x45\x6e\x74\145\x72\145\144\x20\x76\141\x6c\165\145\x73\40\x69\x73\40\156\157\x74\40\166\x61\154\x69\x64\56", PR__MDL__PANEL), 400); goto iuuuususuuuaieem; uimeeckqksqeekqq: $owaiikyuwwwmswgc = ManipulateArray::unset($icwicymcioeyeyek, self::muqaqimusmckkieq); $qqwegysogaocgeww = ManipulateArray::unset($icwicymcioeyeyek, self::akywgoyaseymiyka); $yewiaiaauukwsgku = ManipulateArray::unset($icwicymcioeyeyek, self::csiaccacwgeeqwwo); if (email_exists($owaiikyuwwwmswgc)) { goto ucqmumuygcywwqma; } if (username_exists($yewiaiaauukwsgku)) { goto gommacygsykyussk; } $assuqkuiuewumqyu = ManipulateArray::unset($icwicymcioeyeyek, self::oysqakmiwsaqskce); if ($assuqkuiuewumqyu !== $qqwegysogaocgeww) { goto gygwewcqsmwqismo; } $oeucsuyqysaciasy = ManipulateWoocommerce::ayseokmqycoqaigc() ? "\x63\165\163\164\157\x6d\x65\162" : "\163\165\x62\163\143\x72\151\142\x65\x72"; $sogksuscggsicmac = wp_create_user($yewiaiaauukwsgku, $qqwegysogaocgeww, $owaiikyuwwwmswgc); if (is_wp_error($sogksuscggsicmac)) { goto amgsueumgaguceaa; } $mkucggyaiaukqoce = ManipulateUser::get($sogksuscggsicmac); if ($mkucggyaiaukqoce) { goto ukkcmocamwgiqayu; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\x55\x73\x65\x72\x20\156\157\164\40\x66\157\x75\x6e\144", PR__MDL__PANEL)); goto mwysseaekcsiesmm; ukkcmocamwgiqayu: $mkucggyaiaukqoce->set_role($oeucsuyqysaciasy); foreach ($icwicymcioeyeyek as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $mkucggyaiaukqoce->{$uusmaiomayssaecw} = $eqgoocgaqwqcimie; iiiccouaaqsyikae: } wusciwkkckmqigms: DecoratorUser::update($mkucggyaiaukqoce); $sogksuscggsicmac = $this->qasywwyamoesisyi(__("\131\x6f\x75\x72\40\141\x63\x63\157\165\156\x74\x20\x63\162\145\x61\164\145\144\x20\163\165\143\x63\x65\x73\x73\x66\x75\154\x6c\x79", PR__MDL__PANEL), $mkucggyaiaukqoce); mwysseaekcsiesmm: amgsueumgaguceaa: goto uougwgeyiokewkkm; gygwewcqsmwqismo: $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\120\x61\163\163\x77\x6f\x72\x64\x73\x20\x61\162\145\40\x6e\157\x74\x20\163\141\x6d\x65", PR__MDL__PANEL), 400); uougwgeyiokewkkm: goto ukqocwewouckikso; gommacygsykyussk: $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\x55\x73\x65\162\156\141\x6d\145\x20\x61\x6c\x72\x65\x61\144\x79\40\145\170\151\163\x74\163\54\x20\160\x6c\145\141\x73\x65\x20\145\156\164\x65\x72\40\141\x6e\157\x74\150\x65\162\x20\165\x73\145\162\156\141\x6d\145", PR__MDL__PANEL), 400); ukqocwewouckikso: goto uykousayyomcaeaa; ucqmumuygcywwqma: $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\105\x6d\x61\x69\154\x20\x61\154\x72\x65\x61\144\x79\x20\145\170\151\163\164\163\x2c\x20\160\154\145\141\163\145\40\164\x72\x79\40\x46\x6f\162\147\145\x74\40\120\x61\163\x73\167\x6f\x72\144", PR__MDL__PANEL), 400); uykousayyomcaeaa: iuuuususuuuaieem: return $sogksuscggsicmac; } public function aiamgkiewwakoegy(WP_REST_Request $aqmwamyiwgeeymqa) { wp_logout(); return $this->ewmkmmsuiuwmmwoy($this->qasywwyamoesisyi(__("\x4c\157\x67\147\145\x64\40\x6f\x75\x74", PR__MDL__PANEL))); } public function kkmkcysyceyiwskq(WP_REST_Request $aqmwamyiwgeeymqa) { $emoqwwkmassqsoaw = $this->aumueocimuaiwyee(); if ($emoqwwkmassqsoaw) { goto yiowgigkkwsoqcci; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x4a\x57\124\40\151\163\40\156\x6f\164\40\143\x6f\x6e\x66\x69\x67\x75\x72\145\144\40\160\x72\157\x70\x65\x72\x6c\x79\56", PR__MDL__PANEL), 500); goto ieqesiiageaauiuw; yiowgigkkwsoqcci: $icwicymcioeyeyek = $this->mmusmqyoussiyygq($aqmwamyiwgeeymqa, self::yuguikokwoymmqem); if ($icwicymcioeyeyek) { goto qukocuwgakemmyga; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x45\x6e\x74\x65\x72\145\x64\x20\166\x61\x6c\x75\x65\163\x20\151\x73\x20\156\157\164\x20\x76\141\x6c\151\144\x2e", PR__MDL__PANEL), 400); goto sioekkmekwygemyc; qukocuwgakemmyga: try { wp_logout(); $mkucggyaiaukqoce = wp_signon($icwicymcioeyeyek); if (is_wp_error($mkucggyaiaukqoce)) { goto kocqqoyymosmuksu; } $ycoeoaakqyskgykq = ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce); $ggmuwmqmcisegoea = time(); $wekousyuiguacggm = $ggmuwmqmcisegoea + (int) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\160\141\156\x65\154\x5f\x61\x75\164\x68\x5f\x63\157\157\x6b\x69\145\137\x65\170\160\x69\162\x61\164\x69\157\156"), DAY_IN_SECONDS * 180, $ycoeoaakqyskgykq); $mgegoogckgsumooq = ["\151\163\163" => get_bloginfo("\165\x72\x6c"), "\151\x61\x74" => $ggmuwmqmcisegoea, "\156\x62\146" => $ggmuwmqmcisegoea, "\145\x78\x70" => $wekousyuiguacggm, "\144\141\164\x61" => [self::meksegaoamowuwoq => [self::gouqcwikiiygyasc => $ycoeoaakqyskgykq]]]; $mgegoogckgsumooq = JWT::encode($mgegoogckgsumooq, $emoqwwkmassqsoaw); $keccaugmemegoimu = [self::meksegaoamowuwoq => $this->ksoemussqmaacucm($ycoeoaakqyskgykq), "\x74\x6f\x6b\x65\x6e" => $mgegoogckgsumooq, "\145\x78\160\x69\162\145" => $wekousyuiguacggm]; wp_set_current_user($ycoeoaakqyskgykq, $mkucggyaiaukqoce->user_login); wp_set_auth_cookie($ycoeoaakqyskgykq); $this->cqscqicucmeamkyq("\x77\x70\137\154\157\147\x69\x6e", $mkucggyaiaukqoce->user_login, $mkucggyaiaukqoce); goto uqokiksoqcwwqgio; kocqqoyymosmuksu: $keccaugmemegoimu = $this->oemauiimmycumcsk($mkucggyaiaukqoce->get_error_message(), 401); uqokiksoqcwwqgio: } catch (Exception $wgaoewqkwgomoaai) { $keccaugmemegoimu = $this->oemauiimmycumcsk($this->kyacickkomkioeyu($wgaoewqkwgomoaai), 500); } sioekkmekwygemyc: ieqesiiageaauiuw: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ussowkigumoaoowo($aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->sygeeqgwywmygsyu($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto gamqcwuwkikwqoay; } [$mgegoogckgsumooq, $smecmmgoykqcaieu] = $keccaugmemegoimu; $keccaugmemegoimu = [self::meksegaoamowuwoq => $this->ksoemussqmaacucm($smecmmgoykqcaieu->data->user->id), "\x74\157\x6b\145\156" => $mgegoogckgsumooq]; gamqcwuwkikwqoay: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function auosyisuakguyimw(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->sygeeqgwywmygsyu($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto mscyggqcesgqqksu; } [$mgegoogckgsumooq, $smecmmgoykqcaieu] = $keccaugmemegoimu; $keccaugmemegoimu = [self::meksegaoamowuwoq => $this->ksoemussqmaacucm($smecmmgoykqcaieu->data->user->id), self::uiwqcumqkgikqyue => [self::ciywsqoeiymemsys => 200], self::vswoiouoaykswgym => "\x61\165\164\x68\x5f\147\x65\164\137\x6d\145", "\141\143\143\x6f\165\x6e\164" => []]; mscyggqcesgqqksu: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } }
