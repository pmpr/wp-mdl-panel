<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6267a00dd33fe             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel\REST; use Exception; use Firebase\JWT\JWT; use Pmpr\Common\Foundation\Decorator\DecoratorUser; use Pmpr\Common\Foundation\FormMaker\Front\Field\Field; use Pmpr\Common\Foundation\FormMaker\Front\Form; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Auth extends Common { const gagkiiqqiysqqgmc = "\x72\x65\x67\151\163\x74\x65\x72"; const soawgaqmsgmysyma = "\x72\145\163\x65\x74\137\160\x61\163\163\x77\x6f\x72\x64"; const igswqqsosoeiociu = "\146\x6f\x72\147\x6f\x74\137\160\x61\x73\x73\167\x6f\162\144"; const scagkwwiiquocimc = "\154\141\163\x74\x5f\156\x61\155\145"; const kagqiwogmiguosiw = "\146\x69\162\x73\164\x5f\156\x61\x6d\x65"; const miqkwqsewyogmsak = "\165\x73\x65\162\x5f\154\157\x67\151\156"; const iqgqyoowkoeugsck = "\165\163\145\162\x5f\x70\141\x73\163\167\157\162\144"; const oysqakmiwsaqskce = "\x72\x65\160\x65\x61\x74\x5f\x70\141\x73\163\167\x6f\162\144"; protected ?WP_Error $error = null; public function __construct() { $this->rest_base = "\141\x75\x74\x68"; parent::__construct(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x77\160\x5f\x6c\157\x67\157\x75\164", [$this, "\x6f\x79\x77\x77\155\x77\167\x77\x71\x65\165\x69\x6f\x6d\x6b\x61"], 999); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x72\145\163\145\164\x5f\160\x72\x65\x5f\x64\x69\x73\160\141\x74\143\150", [$this, "\x79\x77\163\x69\x69\151\153\x75\163\x77\x6f\171\x6f\167\x61\167"])->cecaguuoecmccuse("\144\x65\164\145\x72\x6d\151\156\x65\x5f\143\165\162\162\145\x6e\164\x5f\165\x73\x65\162", [$this, "\141\x65\151\x63\145\x6b\141\x73\x67\x6f\153\165\165\x6f\161\x6d"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("\147\x65\x74\x5f\x6a\167\x74\137\x61\165\164\x68\137\x75\163\x65\x72"), [$this, "\151\x73\163\x73\x73\165\x79\147\x79\x65\x77\x75\x61\163\x77\x61"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x67\x65\x74\137\x6a\167\x74\x5f\141\165\164\x68\x5f\x74\x6f\153\x65\x6e"), [$this, "\x73\x79\147\145\x65\161\147\167\171\167\x6d\171\147\x73\171\x75"]); parent::kgquecmsgcouyaya(); } public function euekiyuksecoccus() : ?WP_Error { return $this->error; } public function yauwooaeicgosquo(?WP_Error $iswcokucwmiosiaq) : void { $this->error = $iswcokucwmiosiaq; } public function aeicekasgokuuoqm($mkucggyaiaukqoce) { $qoockacwwamsuscm = rest_get_url_prefix(); $wigqmiauciuswcom = ManipulateServer::ekcymmyqoceukosc(); if (!(strpos($wigqmiauciuswcom, $qoockacwwamsuscm) && strpos($wigqmiauciuswcom, "\x2f\160\141\x6e\145\154\x2f\141\165\164\150\57\x76\145\x72\x69\146\x79"))) { goto mkwskuycuyguqqok; } $keccaugmemegoimu = $this->sygeeqgwywmygsyu(false); if (is_wp_error($keccaugmemegoimu) && $keccaugmemegoimu->get_error_code() != "\x6e\x6f\137\x61\x75\164\150\137\x68\x65\141\144\145\162") { goto cuykwgmswkskqkyi; } [$mgegoogckgsumooq, $smecmmgoykqcaieu] = $keccaugmemegoimu; $mkucggyaiaukqoce = $smecmmgoykqcaieu->data->user->id; goto kuicqywysciceggs; cuykwgmswkskqkyi: $this->yauwooaeicgosquo($keccaugmemegoimu); kuicqywysciceggs: mkwskuycuyguqqok: return $mkucggyaiaukqoce; } public function register_routes() { $this->register("\57\x67\145\x74\x2d\x66\151\x65\154\144\x73", ["\x61\x72\147\x73" => [], "\x6d\x65\x74\x68\x6f\x64\x73" => self::uigoseacoukemwqc, "\143\x61\154\x6c\x62\141\x63\153" => [$this, "\x75\147\155\x63\x65\143\x63\x67\x77\x61\x61\141\x69\x67\x69\x79"]]); $this->register("\57\x6d\x65", ["\141\162\x67\x73" => [], "\x6d\x65\164\150\x6f\x64\x73" => self::uigoseacoukemwqc, "\x63\x61\154\154\x62\141\143\x6b" => [$this, "\141\165\x6f\163\171\x69\x73\165\141\153\147\x75\171\x69\x6d\x77"]]); $this->register("\57\x6c\x6f\147\151\x6e", ["\141\162\147\163" => [], "\155\145\164\x68\157\x64\163" => self::qucyckeykeuuaquw, "\x63\x61\154\x6c\x62\141\x63\153" => [$this, "\x6b\x6b\155\153\143\x79\x73\x79\143\x65\171\151\167\163\x6b\161"]]); $this->register("\57\162\145\147\x69\x73\164\145\x72", ["\141\x72\x67\x73" => [], "\155\x65\x74\x68\157\x64\163" => self::qucyckeykeuuaquw, "\x63\141\154\x6c\x62\141\143\153" => [$this, "\155\145\157\x77\x63\165\155\165\x65\x69\145\145\x63\145\145\141"]]); $this->register("\x2f\x6c\157\x67\x6f\x75\164", ["\141\x72\x67\x73" => [], "\x6d\145\x74\x68\x6f\144\x73" => self::qucyckeykeuuaquw, "\x63\x61\x6c\154\142\x61\x63\x6b" => [$this, "\x61\151\x61\155\147\x6b\151\145\167\x77\141\153\157\145\147\171"]]); $this->register("\57\166\x65\162\x69\146\171", ["\141\x72\x67\x73" => [], "\x6d\x65\x74\x68\x6f\144\x73" => self::uigoseacoukemwqc, "\143\x61\x6c\x6c\x62\141\x63\153" => [$this, "\165\x73\x73\x6f\x77\x6b\x69\147\165\155\x6f\141\x6f\x6f\167\157"]]); $this->register("\57\x63\150\141\x6e\x67\145\55\160\x61\x73\x73\x77\157\x72\x64", ["\x61\x72\x67\163" => [], "\x6d\x65\164\150\x6f\144\163" => self::ouuaeeeqeqkagcgi, "\x63\x61\x6c\154\x62\141\x63\153" => [$this, "\x61\147\143\171\167\153\x77\141\x6f\x71\153\x6b\x63\143\x67\153"]]); $this->register("\x2f\162\x65\163\x65\164\55\x70\x61\163\x73\x77\157\162\x64", ["\x61\162\x67\x73" => [], "\x6d\145\x74\x68\x6f\x64\x73" => self::qucyckeykeuuaquw, "\143\141\154\x6c\x62\141\143\x6b" => [$this, "\x73\x71\x61\x6f\x71\x71\x6f\157\x71\x6f\167\165\147\x6d\x63\x77"]]); $this->woekqgykywwycyci(); } public function oywwmwwwqeuiomka($mkucggyaiaukqoce) { } public function ugmceccgwaaaigiy(WP_REST_Request $aqmwamyiwgeeymqa) { $ikgwqyuyckaewsow = $this->cqsmgqiwwuasmkiq(); if ($ikgwqyuyckaewsow) { goto sqiciiuwmykocycc; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x63\x61\x6e\x20\156\157\164\40\x66\x6f\165\x6e\144\40\162\x65\161\x75\145\163\164\x65\144\x20\x66\151\x65\154\144\x73\x2e", PR__MDL__PANEL), 404); goto eequksumcoogyoem; sqiciiuwmykocycc: foreach ($ikgwqyuyckaewsow as $ymqmyyeuycgmigyo => $ccamueccusigaaio) { foreach ($ccamueccusigaaio as $momcykaoccoymeig => $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto iomcaiwewsawiamu; } $aiowsaccomcoikus->uuagoowwgcuosuuu()->eumecwmqmukqgyea()->qigsyyqgewgskemg("\x66\x6f\x72\155\x2d\x63\157\x6e\x74\162\x6f\154\55\x73\x6f\x6c\x69\x64\40\x66\x6f\x6e\x74\55\163\151\x7a\145\55\x68\64\40\x68\x2d\141\165\x74\x6f\40\x70\55\65")->gkkgsyeumismsyse("\x66\157\156\x74\55\x73\151\172\x65\55\150\66\40\146\157\x6e\x74\55\167\x65\x69\x67\150\x74\55\142\x6f\x6c\144\x65\162\40\x74\x65\170\x74\x2d\x64\x61\x72\153"); $ikgwqyuyckaewsow[$ymqmyyeuycgmigyo][$momcykaoccoymeig] = $aiowsaccomcoikus; if (!($ccamueccusigaaio == self::gagkiiqqiysqqgmc)) { goto kiqogmwcgcamwiig; } $aiowsaccomcoikus->smcqugueqiumkygs(); kiqogmwcgcamwiig: iomcaiwewsawiamu: yowsmsiyimmimemc: } kwagwqyusyiyoaqs: $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x70\x61\x6e\x65\154\x5f\x61\x75\x74\x68\137{$ymqmyyeuycgmigyo}\137\x66\x69\x65\x6c\144\163"), $ccamueccusigaaio); $ikgwqyuyckaewsow[$ymqmyyeuycgmigyo] = $this->ayssaocauwgssywa($ccamueccusigaaio); eqkauqciwewmgeoi: } sciwggaeogcoesiu: $keccaugmemegoimu = $ikgwqyuyckaewsow; eequksumcoogyoem: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function mmusmqyoussiyygq(WP_REST_Request $aqmwamyiwgeeymqa, string $ccamueccusigaaio) { $icwicymcioeyeyek = []; $ikgwqyuyckaewsow = $this->cqsmgqiwwuasmkiq($ccamueccusigaaio); if (!$ikgwqyuyckaewsow) { goto goacqqsgaaigyuaw; } foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto yiwiqaqmwiogawym; } $eqgoocgaqwqcimie = $this->swmwoeaaeqiouswg($aqmwamyiwgeeymqa, $aiowsaccomcoikus->mwikyscisascoeea(), $aiowsaccomcoikus->oiswysuiioecsaae()); if (!($aiowsaccomcoikus->msmiagueogcsucgc() && !$eqgoocgaqwqcimie)) { goto ocokwuuquaokmasc; } $icwicymcioeyeyek = false; goto uukumskkeggaowck; ocokwuuquaokmasc: $icwicymcioeyeyek[$aiowsaccomcoikus->mwikyscisascoeea()] = $eqgoocgaqwqcimie; yiwiqaqmwiogawym: cggowoquuiwqkyew: } uukumskkeggaowck: goacqqsgaaigyuaw: return $icwicymcioeyeyek; } private function cqsmgqiwwuasmkiq(string $ccamueccusigaaio = self::ALL) : array { $owaiikyuwwwmswgc = Form::ymuegqgyuagyucws(self::muqaqimusmckkieq, __("\x45\155\x61\x69\x6c", PR__MDL__PANEL))->kyiucygqsgequoys("\x65\155\141\x69\x6c\100\141\144\144\162\x65\163\x73\56\x63\x6f\155")->mkiaygiogeeyogqm(false); $ikgwqyuyckaewsow = [self::yuguikokwoymmqem => [Form::ymuegqgyuagyucws(self::miqkwqsewyogmsak, __("\105\155\x61\151\154\x20\x6f\x72\40\125\163\x65\162\156\x61\x6d\145", PR__MDL__PANEL))->kyiucygqsgequoys("\x65\155\141\151\x6c\100\141\x64\144\x72\145\163\163\x2e\143\157\x6d")->sqcsseccsaqsoyqy(), Form::ymuegqgyuagyucws(self::iqgqyoowkoeugsck, __("\120\x61\163\163\x77\157\x72\x64", PR__MDL__PANEL))->sqsumkuougquscyg()], self::gagkiiqqiysqqgmc => [Form::ymuegqgyuagyucws(self::kagqiwogmiguosiw, __("\106\151\x72\163\x74\156\x61\x6d\x65", PR__MDL__PANEL)), Form::ymuegqgyuagyucws(self::scagkwwiiquocimc, __("\114\x61\163\x74\156\x61\x6d\x65", PR__MDL__PANEL)), Form::ymuegqgyuagyucws(self::csiaccacwgeeqwwo, __("\125\163\145\x72\x6e\141\x6d\x65", PR__MDL__PANEL))->sqcsseccsaqsoyqy(), $owaiikyuwwwmswgc, Form::ymuegqgyuagyucws(self::akywgoyaseymiyka, __("\120\141\163\x73\167\157\x72\x64", PR__MDL__PANEL))->sqsumkuougquscyg(), Form::ymuegqgyuagyucws(self::oysqakmiwsaqskce, __("\x52\x65\x70\x65\141\164\40\120\141\163\163\x77\x6f\162\144", PR__MDL__PANEL))->sqsumkuougquscyg()], self::soawgaqmsgmysyma => [], self::igswqqsosoeiociu => [$owaiikyuwwwmswgc]]; $ikgwqyuyckaewsow = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x70\141\156\145\154\x5f\141\165\x74\x68\x5f\146\151\x65\154\x64\163"), $ikgwqyuyckaewsow); return ManipulateArray::get($ikgwqyuyckaewsow, $ccamueccusigaaio, $ikgwqyuyckaewsow); } public function sqaoqqooqowugmcw(WP_REST_Request $aqmwamyiwgeeymqa) { $owaiikyuwwwmswgc = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::muqaqimusmckkieq); $keccaugmemegoimu = []; if (is_email($owaiikyuwwwmswgc)) { goto usqgaogkqgemuima; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x54\x68\145\40\x45\155\x61\x69\x6c\40\x79\x6f\165\40\x65\x6e\164\145\x72\x65\144\x20\x69\163\40\156\157\x74\40\166\141\154\151\x64\56", PR__MDL__PANEL), 400); goto mswsoaimesegiiic; usqgaogkqgemuima: if (email_exists($owaiikyuwwwmswgc)) { goto meawswgwagoqgkye; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\116\157\x20\x75\163\x65\x72\x20\146\x6f\x75\156\x64\x20\x77\151\164\150\x20\x74\150\x69\x73\x20\145\x6d\x61\151\154\40\x61\144\x64\162\145\163\x73\56", PR__MDL__PANEL), 404); goto wcesymwqykqoyuqk; meawswgwagoqgkye: try { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); } catch (Exception $iewosgggaueeyymg) { return $this->oemauiimmycumcsk($this->kyacickkomkioeyu($iewosgggaueeyymg), 500); } wcesymwqykqoyuqk: mswsoaimesegiiic: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function agcywkwaoqkkccgk(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (!is_wp_error($mkucggyaiaukqoce)) { goto qmeoaqmsuseueqiy; } $keccaugmemegoimu = $mkucggyaiaukqoce; goto ygkcacsyyckescqs; qmeoaqmsuseueqiy: $yeacayasgueouoqc = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\x63\165\x72\162\x65\156\164"); $qqwegysogaocgeww = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::akywgoyaseymiyka); if ($qqwegysogaocgeww && $yeacayasgueouoqc) { goto eiawsoasmscmqswa; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x4d\x69\163\163\151\x6e\x67\x20\160\x61\162\141\x6d\x65\164\145\162\56", PR__MDL__PANEL), 400); goto ickcmqoiosquugwe; eiawsoasmscmqswa: if ($yeacayasgueouoqc === $qqwegysogaocgeww) { goto qmiwsequckckoaei; } if (wp_check_password($yeacayasgueouoqc, $mkucggyaiaukqoce->user_pass, $mkucggyaiaukqoce->ID)) { goto kecwuwwcwokuksyq; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x45\x6e\x74\x65\162\x65\144\40\143\165\162\x72\145\x6e\x74\x20\160\x61\163\163\167\x6f\162\144\x20\x69\163\x20\x6e\x6f\164\40\x63\x6f\162\x72\145\x63\164\x2e", PR__MDL__PANEL), 400); goto qgegkeomwscwwiuw; kecwuwwcwokuksyq: $keccaugmemegoimu = new WP_Error(); $this->cqscqicucmeamkyq("\166\141\154\151\x64\141\164\x65\x5f\160\x61\163\x73\167\157\x72\x64\x5f\162\x65\163\x65\x74", $keccaugmemegoimu, $mkucggyaiaukqoce); if ($keccaugmemegoimu->has_errors()) { goto egasokooagakisiy; } reset_password($mkucggyaiaukqoce, $qqwegysogaocgeww); $keccaugmemegoimu = ["\155\x65\163\x73\141\x67\145" => __("\120\141\163\163\167\x6f\162\144\x20\x63\x68\141\x6e\x67\145\x64\40\x73\165\x63\x63\x65\163\163\146\165\154\x6c\171", PR__MDL__PANEL), "\163\164\141\164\x75\163" => 200]; egasokooagakisiy: qgegkeomwscwwiuw: goto goeoymmqqqeeoime; qmiwsequckckoaei: $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x45\x6e\164\x65\x72\x65\144\x20\143\165\162\162\x65\x6e\164\x20\160\141\163\163\x77\157\x72\x64\40\141\x6e\x64\x20\x6e\145\x77\x20\160\141\163\x73\167\157\162\144\x20\x69\163\x20\163\141\x6d\145\x2e", PR__MDL__PANEL), 400); goeoymmqqqeeoime: ickcmqoiosquugwe: ygkcacsyyckescqs: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function woekqgykywwycyci() { $uykgysuswksgmwqy = "\101\x63\x63\145\x73\x73\55\103\157\156\164\x72\x6f\x6c\x2d\x41\154\154\157\x77\55\110\145\x61\x64\145\x72\x73\54\40\x43\157\x6e\164\145\x6e\164\55\124\x79\160\x65\54\40\101\165\x74\150\157\162\151\x7a\141\x74\x69\157\156"; header(sprintf("\x41\143\143\145\163\x73\55\103\x6f\156\x74\x72\157\x6c\55\x41\x6c\x6c\x6f\x77\x2d\x48\145\x61\144\x65\162\x73\x3a\40\x25\163", $uykgysuswksgmwqy)); } public function ywsiiikuswoyowaw(WP_REST_Request $aqmwamyiwgeeymqa) { $iswcokucwmiosiaq = $this->euekiyuksecoccus(); if (!is_wp_error($iswcokucwmiosiaq)) { goto cuoqqgaygogsmmic; } $aqmwamyiwgeeymqa = $iswcokucwmiosiaq; cuoqqgaygogsmmic: return $aqmwamyiwgeeymqa; } public function meowcumueieeceea(WP_REST_Request $aqmwamyiwgeeymqa) { $icwicymcioeyeyek = $this->mmusmqyoussiyygq($aqmwamyiwgeeymqa, self::gagkiiqqiysqqgmc); if ($icwicymcioeyeyek) { goto coywmiyqgsweuiic; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\x45\x6e\164\145\162\x65\x64\x20\166\141\x6c\165\145\x73\x20\x69\163\x20\156\x6f\x74\40\166\x61\154\x69\x64\x2e", PR__MDL__PANEL), 400); goto siqagquguiemuoku; coywmiyqgsweuiic: $owaiikyuwwwmswgc = ManipulateArray::unset($icwicymcioeyeyek, self::muqaqimusmckkieq); $qqwegysogaocgeww = ManipulateArray::unset($icwicymcioeyeyek, self::akywgoyaseymiyka); $yewiaiaauukwsgku = ManipulateArray::unset($icwicymcioeyeyek, self::csiaccacwgeeqwwo); if (email_exists($owaiikyuwwwmswgc)) { goto yssscwioiyygssec; } if (username_exists($yewiaiaauukwsgku)) { goto qwcegcuowwgiccos; } $assuqkuiuewumqyu = ManipulateArray::unset($icwicymcioeyeyek, self::oysqakmiwsaqskce); if ($assuqkuiuewumqyu !== $qqwegysogaocgeww) { goto twkmiuomimomscew; } $oeucsuyqysaciasy = ManipulateWoocommerce::ayseokmqycoqaigc() ? "\143\165\x73\x74\157\155\x65\162" : "\x73\165\x62\163\143\x72\x69\x62\145\162"; $sogksuscggsicmac = wp_create_user($yewiaiaauukwsgku, $qqwegysogaocgeww, $owaiikyuwwwmswgc); if (is_wp_error($sogksuscggsicmac)) { goto eyiamcekkgkiawqy; } $mkucggyaiaukqoce = ManipulateUser::get($sogksuscggsicmac); if ($mkucggyaiaukqoce) { goto igymseewwyiocoug; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\125\163\x65\x72\x20\x6e\x6f\164\x20\146\x6f\x75\156\144", PR__MDL__PANEL)); goto mqccmesakuemceqi; igymseewwyiocoug: $mkucggyaiaukqoce->set_role($oeucsuyqysaciasy); foreach ($icwicymcioeyeyek as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $mkucggyaiaukqoce->{$uusmaiomayssaecw} = $eqgoocgaqwqcimie; sukskmcwsoysiuqu: } cgewcsueoyaeikgm: DecoratorUser::update($mkucggyaiaukqoce); $sogksuscggsicmac = $this->qasywwyamoesisyi(__("\x59\157\x75\162\x20\x61\x63\x63\157\x75\156\164\40\143\162\x65\141\x74\x65\144\40\163\165\x63\143\x65\x73\x73\146\165\154\x6c\x79", PR__MDL__PANEL), $mkucggyaiaukqoce); mqccmesakuemceqi: eyiamcekkgkiawqy: goto kooskuwkuayiuose; twkmiuomimomscew: $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\x50\141\x73\x73\x77\x6f\x72\x64\x73\x20\141\162\145\x20\156\x6f\164\40\163\x61\x6d\145", PR__MDL__PANEL), 400); kooskuwkuayiuose: goto qcessicwuikwqsis; qwcegcuowwgiccos: $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\125\163\x65\x72\156\141\155\x65\40\x61\x6c\x72\x65\x61\x64\171\40\145\x78\151\x73\x74\x73\54\x20\160\154\145\x61\x73\x65\x20\145\x6e\164\x65\162\40\x61\x6e\x6f\164\150\x65\162\x20\165\163\x65\162\156\141\155\x65", PR__MDL__PANEL), 400); qcessicwuikwqsis: goto ieumumsgyguceusy; yssscwioiyygssec: $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\105\155\141\151\154\x20\141\x6c\x72\145\141\144\171\x20\145\170\x69\163\x74\x73\54\x20\160\154\145\141\x73\x65\40\x74\162\171\40\106\157\x72\147\145\x74\x20\120\141\x73\x73\x77\x6f\x72\x64", PR__MDL__PANEL), 400); ieumumsgyguceusy: siqagquguiemuoku: return $sogksuscggsicmac; } public function aiamgkiewwakoegy(WP_REST_Request $aqmwamyiwgeeymqa) { wp_logout(); return $this->ewmkmmsuiuwmmwoy($this->qasywwyamoesisyi(__("\x4c\157\147\147\x65\144\40\x6f\x75\x74", PR__MDL__PANEL))); } public function kkmkcysyceyiwskq(WP_REST_Request $aqmwamyiwgeeymqa) { $emoqwwkmassqsoaw = $this->aumueocimuaiwyee(); if ($emoqwwkmassqsoaw) { goto kciouyuaqkyqomam; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\112\127\124\x20\151\x73\40\x6e\157\x74\40\143\x6f\156\x66\x69\x67\x75\x72\x65\x64\40\x70\x72\x6f\x70\145\162\x6c\x79\x2e", PR__MDL__PANEL), 500); goto wwkgkaecgiwggcck; kciouyuaqkyqomam: $icwicymcioeyeyek = $this->mmusmqyoussiyygq($aqmwamyiwgeeymqa, self::yuguikokwoymmqem); if ($icwicymcioeyeyek) { goto sycygoiaiqqageym; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x45\156\x74\x65\x72\145\144\x20\166\141\x6c\165\145\163\40\x69\163\40\x6e\157\x74\40\166\141\154\151\144\x2e", PR__MDL__PANEL), 400); goto gygawoqywkukmqee; sycygoiaiqqageym: try { wp_logout(); $mkucggyaiaukqoce = wp_signon($icwicymcioeyeyek); if (is_wp_error($mkucggyaiaukqoce)) { goto ycakugokkqkuqyiu; } $ycoeoaakqyskgykq = ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce); $ggmuwmqmcisegoea = time(); $wekousyuiguacggm = $ggmuwmqmcisegoea + (int) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\160\x61\156\x65\154\x5f\x61\x75\164\x68\x5f\x63\157\x6f\153\151\x65\137\x65\x78\x70\151\162\x61\x74\151\157\x6e"), DAY_IN_SECONDS * 180, $ycoeoaakqyskgykq); $mgegoogckgsumooq = ["\151\x73\163" => get_bloginfo("\165\162\154"), "\x69\x61\164" => $ggmuwmqmcisegoea, "\156\x62\x66" => $ggmuwmqmcisegoea, "\145\170\160" => $wekousyuiguacggm, "\x64\x61\164\x61" => [self::meksegaoamowuwoq => [self::gouqcwikiiygyasc => $ycoeoaakqyskgykq]]]; $mgegoogckgsumooq = JWT::encode($mgegoogckgsumooq, $emoqwwkmassqsoaw); $keccaugmemegoimu = [self::meksegaoamowuwoq => $this->ksoemussqmaacucm($ycoeoaakqyskgykq), "\164\157\x6b\x65\x6e" => $mgegoogckgsumooq, "\x65\170\x70\x69\x72\x65" => $wekousyuiguacggm]; wp_set_current_user($ycoeoaakqyskgykq, $mkucggyaiaukqoce->user_login); wp_set_auth_cookie($ycoeoaakqyskgykq); $this->cqscqicucmeamkyq("\167\x70\137\154\157\147\x69\156", $mkucggyaiaukqoce->user_login, $mkucggyaiaukqoce); goto oouoqimaaqcmccay; ycakugokkqkuqyiu: $keccaugmemegoimu = $this->oemauiimmycumcsk($mkucggyaiaukqoce->get_error_message(), 401); oouoqimaaqcmccay: } catch (Exception $wgaoewqkwgomoaai) { $keccaugmemegoimu = $this->oemauiimmycumcsk($this->kyacickkomkioeyu($wgaoewqkwgomoaai), 500); } gygawoqywkukmqee: wwkgkaecgiwggcck: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ussowkigumoaoowo($aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->sygeeqgwywmygsyu($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto umgaesggesswoaqe; } [$mgegoogckgsumooq, $smecmmgoykqcaieu] = $keccaugmemegoimu; $keccaugmemegoimu = [self::meksegaoamowuwoq => $this->ksoemussqmaacucm($smecmmgoykqcaieu->data->user->id), "\164\157\153\x65\156" => $mgegoogckgsumooq]; umgaesggesswoaqe: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function auosyisuakguyimw(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->sygeeqgwywmygsyu($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto qsygcycwieukkgwc; } [$mgegoogckgsumooq, $smecmmgoykqcaieu] = $keccaugmemegoimu; $keccaugmemegoimu = [self::meksegaoamowuwoq => $this->ksoemussqmaacucm($smecmmgoykqcaieu->data->user->id), self::uiwqcumqkgikqyue => [self::ciywsqoeiymemsys => 200], self::vswoiouoaykswgym => "\x61\x75\164\150\x5f\x67\145\x74\137\x6d\145", "\x61\x63\x63\x6f\x75\156\164" => []]; qsygcycwieukkgwc: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } }
