<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6720b747c652b             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel\REST; use Exception; use Firebase\JWT\JWT; use Pmpr\Common\Foundation\FormGenerator\Field; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Auth extends Common { const gagkiiqqiysqqgmc = "\x72\x65\x67\151\x73\164\145\162"; const soawgaqmsgmysyma = "\162\x65\x73\145\164\x5f\x70\x61\163\163\x77\x6f\x72\x64"; const igswqqsosoeiociu = "\146\x6f\x72\147\x6f\x74\x5f\160\x61\x73\x73\x77\x6f\x72\144"; const scagkwwiiquocimc = "\x6c\x61\x73\164\x5f\156\x61\155\x65"; const kagqiwogmiguosiw = "\146\x69\x72\163\x74\137\156\x61\x6d\145"; const miqkwqsewyogmsak = "\165\163\145\x72\137\154\157\147\x69\156"; const iqgqyoowkoeugsck = "\x75\163\x65\x72\x5f\x70\141\163\x73\x77\x6f\x72\x64"; const oysqakmiwsaqskce = "\x72\145\160\x65\141\x74\x5f\x70\x61\163\163\x77\x6f\x72\144"; protected ?WP_Error $error = null; public function __construct() { $this->rest_base = "\141\165\x74\150"; parent::__construct(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x77\160\x5f\x6c\157\x67\157\x75\x74", [$this, "\157\171\x77\x77\x6d\x77\167\x77\161\145\x75\151\157\155\x6b\x61"], 999); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x72\145\163\x65\x74\137\160\162\145\x5f\144\x69\x73\x70\x61\x74\143\x68", [$this, "\x79\167\x73\x69\x69\x69\x6b\165\163\x77\157\x79\x6f\x77\x61\x77"])->cecaguuoecmccuse("\x64\x65\164\145\162\155\x69\x6e\x65\137\143\165\162\x72\145\156\164\x5f\165\x73\x65\x72", [$this, "\x61\x65\x69\x63\145\153\141\x73\x67\157\153\165\x75\157\161\155"]); $this->aqaqisyssqeomwom("\x67\145\164\x5f\x6a\x77\164\x5f\x61\x75\164\x68\x5f\x75\x73\x65\x72", [$this, "\151\163\163\x73\163\165\x79\147\x79\145\167\x75\141\x73\167\x61"])->aqaqisyssqeomwom("\x67\145\164\137\152\x77\164\x5f\x61\x75\164\150\137\164\x6f\x6b\x65\156", [$this, "\163\171\147\145\x65\161\x67\x77\x79\167\155\x79\x67\163\x79\165"]); parent::kgquecmsgcouyaya(); } public function euekiyuksecoccus() : ?WP_Error { return $this->error; } public function yauwooaeicgosquo(?WP_Error $iswcokucwmiosiaq) : void { $this->error = $iswcokucwmiosiaq; } public function aeicekasgokuuoqm($mkucggyaiaukqoce) { $qoockacwwamsuscm = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->ymsasggoakmgguqk(); $wigqmiauciuswcom = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(); if (strpos($wigqmiauciuswcom, $qoockacwwamsuscm) && strpos($wigqmiauciuswcom, "\x2f\160\x61\x6e\145\154\x2f\x61\165\x74\150\x2f\x76\x65\x72\x69\146\171")) { $keccaugmemegoimu = $this->sygeeqgwywmygsyu(false); if (is_wp_error($keccaugmemegoimu) && $keccaugmemegoimu->get_error_code() !== "\x6e\157\x5f\141\165\x74\x68\x5f\150\x65\x61\x64\145\162") { $this->yauwooaeicgosquo($keccaugmemegoimu); } else { [$mgegoogckgsumooq, $smecmmgoykqcaieu] = $keccaugmemegoimu; $mkucggyaiaukqoce = $smecmmgoykqcaieu->data->user->id; } } return $mkucggyaiaukqoce; } public function register_routes() { $this->register("\x2f\147\x65\164\55\x66\151\145\154\144\163", [Constants::wwgusigoaksqmwsm => [$this, "\x75\x67\x6d\143\145\143\143\147\x77\x61\x61\x61\x69\147\x69\x79"]]); $this->register("\57\155\145", [Constants::wwgusigoaksqmwsm => [$this, "\x61\x75\x6f\x73\x79\151\163\x75\141\153\x67\165\x79\151\155\x77"]]); $this->register("\57\x6c\157\x67\x69\x6e", [Constants::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, Constants::wwgusigoaksqmwsm => [$this, "\153\x6b\x6d\153\143\171\x73\171\x63\145\171\x69\x77\x73\153\x71"]]); $this->register("\57\x72\145\147\151\x73\164\x65\162", [Constants::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, Constants::wwgusigoaksqmwsm => [$this, "\155\145\157\167\143\x75\155\x75\x65\151\x65\145\143\145\x65\x61"]]); $this->register("\x2f\154\x6f\147\157\x75\164", [Constants::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, Constants::wwgusigoaksqmwsm => [$this, "\x61\151\x61\155\x67\x6b\151\145\167\x77\141\153\157\x65\x67\x79"]]); $this->register("\57\x76\145\162\x69\146\171", [Constants::wwgusigoaksqmwsm => [$this, "\x75\x73\x73\x6f\167\153\151\x67\x75\155\157\141\157\157\x77\157"]]); $this->register("\x2f\x63\150\x61\156\x67\x65\55\x70\141\x73\x73\167\157\162\x64", [Constants::oaggieeykyaoiiyw => self::ouuaeeeqeqkagcgi, Constants::wwgusigoaksqmwsm => [$this, "\x61\x67\143\x79\167\x6b\x77\141\157\x71\153\x6b\143\x63\147\153"]]); $this->register("\x2f\x72\145\x73\x65\164\55\160\x61\x73\163\x77\x6f\162\x64", [Constants::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, Constants::wwgusigoaksqmwsm => [$this, "\x73\x71\141\x6f\x71\161\x6f\x6f\161\x6f\167\165\147\x6d\143\167"]]); $this->woekqgykywwycyci(); } public function oywwmwwwqeuiomka($mkucggyaiaukqoce) { } public function ugmceccgwaaaigiy(WP_REST_Request $aqmwamyiwgeeymqa) { $ikgwqyuyckaewsow = $this->cqsmgqiwwuasmkiq(); if ($ikgwqyuyckaewsow) { foreach ($ikgwqyuyckaewsow as $ymqmyyeuycgmigyo => $ccamueccusigaaio) { foreach ($ccamueccusigaaio as $momcykaoccoymeig => $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field) { $aiowsaccomcoikus->uuagoowwgcuosuuu()->eumecwmqmukqgyea()->qigsyyqgewgskemg("\x66\157\162\x6d\x2d\x63\x6f\156\164\x72\157\x6c\55\x73\x6f\x6c\x69\144\40\146\157\156\x74\55\163\x69\x7a\145\55\x68\64\40\x68\x2d\x61\x75\x74\x6f\40\160\55\x35")->gkkgsyeumismsyse("\x66\157\x6e\x74\55\x73\151\x7a\145\55\x68\x36\x20\x66\157\156\x74\x2d\x77\145\151\147\150\x74\x2d\142\157\x6c\x64\145\x72\x20\164\145\x78\164\55\144\x61\x72\x6b"); $ikgwqyuyckaewsow[$ymqmyyeuycgmigyo][$momcykaoccoymeig] = $aiowsaccomcoikus; if ($ccamueccusigaaio == self::gagkiiqqiysqqgmc) { $aiowsaccomcoikus->smcqugueqiumkygs(); } } } $this->ocksiywmkyaqseou("\x70\141\x6e\145\x6c\x5f\x61\x75\x74\x68\137{$ymqmyyeuycgmigyo}\137\146\151\145\x6c\x64\163", $ccamueccusigaaio); $ikgwqyuyckaewsow[$ymqmyyeuycgmigyo] = $this->ayssaocauwgssywa($ccamueccusigaaio); } $keccaugmemegoimu = $ikgwqyuyckaewsow; } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x63\141\x6e\x20\x6e\157\164\x20\146\x6f\165\156\x64\x20\162\x65\x71\165\x65\163\x74\145\144\x20\x66\x69\x65\x6c\144\163\56", PR__MDL__PANEL), 404); } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function mmusmqyoussiyygq(WP_REST_Request $aqmwamyiwgeeymqa, string $ccamueccusigaaio) { $icwicymcioeyeyek = []; $ikgwqyuyckaewsow = $this->cqsmgqiwwuasmkiq($ccamueccusigaaio); if ($ikgwqyuyckaewsow) { foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field) { $eqgoocgaqwqcimie = $this->swmwoeaaeqiouswg($aqmwamyiwgeeymqa, $aiowsaccomcoikus->mwikyscisascoeea(), $aiowsaccomcoikus->oiswysuiioecsaae()); if ($aiowsaccomcoikus->msmiagueogcsucgc() && !$eqgoocgaqwqcimie) { $icwicymcioeyeyek = false; break; } $icwicymcioeyeyek[$aiowsaccomcoikus->mwikyscisascoeea()] = $eqgoocgaqwqcimie; } } } return $icwicymcioeyeyek; } private function cqsmgqiwwuasmkiq(string $ccamueccusigaaio = Constants::ALL) : array { $gusoaiguqeaommcc = $this->caokeucsksukesyo()->kugiyqykwaskawsc(); $owaiikyuwwwmswgc = $gusoaiguqeaommcc->ymuegqgyuagyucws(Constants::muqaqimusmckkieq)->gswweykyogmsyawy(__("\x45\155\141\x69\154", PR__MDL__PANEL))->kyiucygqsgequoys("\145\155\141\151\154\100\x61\x64\x64\x72\145\163\x73\x2e\143\157\155")->mkiaygiogeeyogqm(); $ikgwqyuyckaewsow = [Constants::yuguikokwoymmqem => [$gusoaiguqeaommcc->ymuegqgyuagyucws(self::miqkwqsewyogmsak)->gswweykyogmsyawy(__("\x45\x6d\x61\x69\154\x20\x6f\162\40\125\163\x65\162\156\141\155\145", PR__MDL__PANEL))->kyiucygqsgequoys("\145\x6d\141\x69\x6c\x40\x61\x64\144\162\145\163\x73\56\143\157\155")->kqqqugemmqagucuq(), $gusoaiguqeaommcc->ymuegqgyuagyucws(self::iqgqyoowkoeugsck)->gswweykyogmsyawy(__("\x50\x61\163\x73\167\157\162\x64", PR__MDL__PANEL))->sqsumkuougquscyg()], self::gagkiiqqiysqqgmc => [$gusoaiguqeaommcc->ymuegqgyuagyucws(self::kagqiwogmiguosiw)->gswweykyogmsyawy(__("\106\x69\x72\163\x74\156\141\155\x65", PR__MDL__PANEL)), $gusoaiguqeaommcc->ymuegqgyuagyucws(self::scagkwwiiquocimc)->gswweykyogmsyawy(__("\114\141\163\164\x6e\x61\155\x65", PR__MDL__PANEL)), $gusoaiguqeaommcc->ymuegqgyuagyucws(Constants::csiaccacwgeeqwwo)->gswweykyogmsyawy(__("\125\163\x65\162\x6e\141\155\x65", PR__MDL__PANEL))->kqqqugemmqagucuq(), $owaiikyuwwwmswgc, $gusoaiguqeaommcc->ymuegqgyuagyucws(Constants::akywgoyaseymiyka)->gswweykyogmsyawy(__("\120\x61\x73\163\167\157\x72\144", PR__MDL__PANEL))->sqsumkuougquscyg(), $gusoaiguqeaommcc->ymuegqgyuagyucws(self::oysqakmiwsaqskce)->gswweykyogmsyawy(__("\122\x65\x70\145\x61\164\40\120\x61\163\x73\167\157\x72\x64", PR__MDL__PANEL))->sqsumkuougquscyg()], self::soawgaqmsgmysyma => [], self::igswqqsosoeiociu => [$owaiikyuwwwmswgc]]; $ikgwqyuyckaewsow = (array) $this->ocksiywmkyaqseou("\x70\141\156\145\x6c\137\141\165\164\150\x5f\146\x69\145\154\144\163", $ikgwqyuyckaewsow); return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ikgwqyuyckaewsow, $ccamueccusigaaio, $ikgwqyuyckaewsow); } public function sqaoqqooqowugmcw(WP_REST_Request $aqmwamyiwgeeymqa) { $owaiikyuwwwmswgc = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::muqaqimusmckkieq); $keccaugmemegoimu = []; if ($this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->qkgmsqgmwoamekyk($owaiikyuwwwmswgc)) { if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->uyoiiusukoigeusy($owaiikyuwwwmswgc)) { try { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); } catch (Exception $wgaoewqkwgomoaai) { return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($wgaoewqkwgomoaai, 500); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x4e\x6f\40\165\163\x65\x72\x20\x66\x6f\x75\156\x64\40\x77\151\x74\150\40\x74\x68\151\163\40\145\x6d\141\x69\154\x20\141\x64\144\162\x65\x73\x73\56", PR__MDL__PANEL), 404); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\124\150\145\40\105\x6d\x61\x69\x6c\40\x79\x6f\x75\40\145\x6e\164\145\162\145\144\x20\x69\163\40\x6e\x6f\164\40\166\141\x6c\x69\144\x2e", PR__MDL__PANEL), 400); } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function agcywkwaoqkkccgk(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (!is_wp_error($mkucggyaiaukqoce)) { $yeacayasgueouoqc = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\143\x75\x72\x72\x65\x6e\x74"); $qqwegysogaocgeww = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::akywgoyaseymiyka); if ($qqwegysogaocgeww && $yeacayasgueouoqc) { if ($yeacayasgueouoqc === $qqwegysogaocgeww) { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\105\156\164\145\x72\x65\x64\40\143\165\162\162\145\x6e\x74\x20\160\x61\163\163\167\x6f\162\x64\40\x61\x6e\144\40\x6e\x65\x77\40\160\x61\163\x73\x77\157\x72\144\x20\x69\163\x20\163\141\x6d\145\x2e", PR__MDL__PANEL), 400); } else { if ($this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->eoiyuwsiwqyqiyom($yeacayasgueouoqc, $mkucggyaiaukqoce->user_pass, $mkucggyaiaukqoce->ID)) { $keccaugmemegoimu = new WP_Error(); $this->cqscqicucmeamkyq("\166\x61\154\x69\x64\x61\164\145\137\x70\141\x73\163\x77\x6f\x72\144\137\x72\145\x73\145\164", $keccaugmemegoimu, $mkucggyaiaukqoce); if (!$keccaugmemegoimu->has_errors()) { $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->sqaoqqooqowugmcw($mkucggyaiaukqoce, $qqwegysogaocgeww); $keccaugmemegoimu = [Constants::ciywsqoeiymemsys => 200, Constants::eoskkkieowogacws => __("\120\x61\163\163\167\157\x72\144\40\x63\150\141\156\x67\145\x64\x20\x73\x75\143\143\145\x73\x73\146\165\x6c\154\171", PR__MDL__PANEL)]; } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\105\x6e\x74\x65\162\145\144\x20\x63\x75\x72\162\x65\156\164\x20\x70\x61\x73\x73\167\157\162\144\40\151\163\40\x6e\x6f\164\x20\x63\157\x72\x72\145\143\x74\56", PR__MDL__PANEL), 400); } } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x4d\x69\x73\163\x69\156\147\40\x70\141\162\x61\155\145\164\x65\x72\x2e", PR__MDL__PANEL), 400); } } else { $keccaugmemegoimu = $mkucggyaiaukqoce; } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function woekqgykywwycyci() { $uykgysuswksgmwqy = "\x41\x63\x63\x65\163\163\x2d\x43\157\156\164\x72\x6f\154\55\101\x6c\x6c\x6f\167\55\110\145\141\144\145\162\x73\x2c\x20\x43\x6f\x6e\164\145\x6e\164\x2d\x54\171\x70\x65\54\x20\x41\165\x74\150\157\x72\151\172\141\164\x69\x6f\156"; header(sprintf("\101\143\143\145\x73\x73\55\x43\x6f\156\164\162\157\154\55\x41\x6c\154\157\167\55\x48\145\141\x64\145\x72\x73\72\40\45\163", $uykgysuswksgmwqy)); } public function ywsiiikuswoyowaw(WP_REST_Request $aqmwamyiwgeeymqa) { $iswcokucwmiosiaq = $this->euekiyuksecoccus(); if (is_wp_error($iswcokucwmiosiaq)) { $aqmwamyiwgeeymqa = $iswcokucwmiosiaq; } return $aqmwamyiwgeeymqa; } public function meowcumueieeceea(WP_REST_Request $aqmwamyiwgeeymqa) { $icwicymcioeyeyek = $this->mmusmqyoussiyygq($aqmwamyiwgeeymqa, self::gagkiiqqiysqqgmc); if ($icwicymcioeyeyek) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $ewgmommeawggyaek = $this->uwkmaywceaaaigwo()->issssuygyewuaswa(); $owaiikyuwwwmswgc = $gkyciwoiiisgywcs->unset($icwicymcioeyeyek, Constants::muqaqimusmckkieq); $qqwegysogaocgeww = $gkyciwoiiisgywcs->unset($icwicymcioeyeyek, Constants::akywgoyaseymiyka); $yewiaiaauukwsgku = $gkyciwoiiisgywcs->unset($icwicymcioeyeyek, Constants::csiaccacwgeeqwwo); if ($ewgmommeawggyaek->uyoiiusukoigeusy($owaiikyuwwwmswgc)) { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x45\155\141\151\154\40\x61\154\162\x65\x61\x64\171\x20\145\170\x69\x73\164\163\x2c\x20\x70\154\145\x61\163\145\40\x74\x72\x79\x20\106\157\162\x67\x65\x74\x20\x50\x61\x73\x73\x77\x6f\162\144", PR__MDL__PANEL), 400); } else { if ($ewgmommeawggyaek->wskwomgayscmiwqy($yewiaiaauukwsgku)) { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x55\x73\x65\x72\156\141\x6d\x65\x20\x61\154\162\x65\141\x64\x79\40\145\170\151\x73\x74\163\x2c\x20\x70\x6c\x65\x61\163\145\40\x65\156\164\145\x72\40\141\x6e\x6f\164\150\145\162\40\x75\x73\145\x72\x6e\x61\155\145", PR__MDL__PANEL), 400); } else { $assuqkuiuewumqyu = $gkyciwoiiisgywcs->unset($icwicymcioeyeyek, self::oysqakmiwsaqskce); if ($assuqkuiuewumqyu !== $qqwegysogaocgeww) { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\120\141\163\163\167\x6f\x72\144\x73\40\141\162\145\x20\x6e\x6f\x74\x20\163\141\x6d\x65", PR__MDL__PANEL), 400); } else { $oeucsuyqysaciasy = $this->caokeucsksukesyo()->wikusamwomuogoau()->ggocakcisguuokai() ? Constants::qkimqmacosgcwmug : Constants::kuqwimiimiqsimgo; $sogksuscggsicmac = $ewgmommeawggyaek->gesyeyeaqmiskuoo($yewiaiaauukwsgku, $qqwegysogaocgeww, $owaiikyuwwwmswgc); if (!is_wp_error($sogksuscggsicmac)) { $mkucggyaiaukqoce = $this->caokeucsksukesyo()->issssuygyewuaswa()->get($sogksuscggsicmac); if ($mkucggyaiaukqoce) { $mkucggyaiaukqoce->set_role($oeucsuyqysaciasy); foreach ($icwicymcioeyeyek as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $mkucggyaiaukqoce->{$uusmaiomayssaecw} = $eqgoocgaqwqcimie; } $ewgmommeawggyaek->update($mkucggyaiaukqoce); $sogksuscggsicmac = $this->qasywwyamoesisyi(__("\x59\157\165\162\x20\141\143\143\x6f\x75\x6e\x74\40\x63\x72\x65\x61\164\145\x64\x20\x73\165\143\143\145\163\x73\x66\165\154\154\x79", PR__MDL__PANEL), $mkucggyaiaukqoce); } else { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x55\x73\x65\162\x20\156\157\164\40\x66\157\165\156\x64", PR__MDL__PANEL)); } } } } } } else { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x45\x6e\x74\x65\x72\145\x64\x20\166\x61\154\x75\x65\163\x20\x69\163\x20\156\157\164\x20\x76\141\154\151\144\x2e", PR__MDL__PANEL), 400); } return $sogksuscggsicmac; } public function aiamgkiewwakoegy(WP_REST_Request $aqmwamyiwgeeymqa) { $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->aiamgkiewwakoegy(); return $this->ewmkmmsuiuwmmwoy($this->qasywwyamoesisyi(__("\x4c\x6f\x67\147\145\144\x20\157\165\x74", PR__MDL__PANEL))); } public function kkmkcysyceyiwskq(WP_REST_Request $aqmwamyiwgeeymqa) { $emoqwwkmassqsoaw = $this->aumueocimuaiwyee(); if ($emoqwwkmassqsoaw) { $icwicymcioeyeyek = $this->mmusmqyoussiyygq($aqmwamyiwgeeymqa, Constants::yuguikokwoymmqem); if ($icwicymcioeyeyek) { try { $ewgmommeawggyaek = $this->uwkmaywceaaaigwo()->issssuygyewuaswa(); $ewgmommeawggyaek->aiamgkiewwakoegy(); $mkucggyaiaukqoce = $ewgmommeawggyaek->hmisgsqkawsgmqou($icwicymcioeyeyek); if (is_wp_error($mkucggyaiaukqoce)) { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($mkucggyaiaukqoce->get_error_message(), 401); } else { $ycoeoaakqyskgykq = $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($mkucggyaiaukqoce); $ggmuwmqmcisegoea = time(); $wekousyuiguacggm = $ggmuwmqmcisegoea + (int) $this->ocksiywmkyaqseou("\160\x61\x6e\145\154\x5f\141\165\x74\x68\x5f\143\x6f\x6f\153\x69\145\137\145\x78\160\151\162\141\x74\151\157\x6e", DAY_IN_SECONDS * 180, $ycoeoaakqyskgykq); $mgegoogckgsumooq = ["\x69\163\x73" => $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->ciqkaakiwsgqwiqu(Constants::auqoykcmsiauccao), "\151\x61\x74" => $ggmuwmqmcisegoea, "\156\x62\x66" => $ggmuwmqmcisegoea, "\145\x78\x70" => $wekousyuiguacggm, "\144\141\164\x61" => [Constants::meksegaoamowuwoq => [Constants::gouqcwikiiygyasc => $ycoeoaakqyskgykq]]]; $mgegoogckgsumooq = JWT::encode($mgegoogckgsumooq, $emoqwwkmassqsoaw); $keccaugmemegoimu = [Constants::meksegaoamowuwoq => $this->ksoemussqmaacucm($ycoeoaakqyskgykq), Constants::sygmkaeayiiouiwm => $mgegoogckgsumooq, Constants::uikygkewwaiowmwe => $wekousyuiguacggm]; $ewgmommeawggyaek->kkkuqwaqakeaykmo($ycoeoaakqyskgykq, $mkucggyaiaukqoce->user_login); $ewgmommeawggyaek->qsgmugaqymqgqayy($ycoeoaakqyskgykq); $this->cqscqicucmeamkyq("\x77\160\137\x6c\157\x67\x69\x6e", $mkucggyaiaukqoce->user_login, $mkucggyaiaukqoce); } } catch (Exception $wgaoewqkwgomoaai) { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($wgaoewqkwgomoaai, 500); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\105\156\164\x65\x72\145\x64\x20\x76\141\x6c\x75\x65\163\40\151\x73\x20\x6e\x6f\164\x20\166\141\154\x69\144\56", PR__MDL__PANEL), 400); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\112\x57\x54\x20\x69\163\x20\156\157\164\40\143\x6f\156\x66\x69\x67\x75\162\x65\x64\x20\160\162\157\x70\145\162\154\x79\56", PR__MDL__PANEL), 500); } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ussowkigumoaoowo($aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->sygeeqgwywmygsyu($aqmwamyiwgeeymqa); if (!is_wp_error($keccaugmemegoimu)) { [$mgegoogckgsumooq, $smecmmgoykqcaieu] = $keccaugmemegoimu; $keccaugmemegoimu = [Constants::meksegaoamowuwoq => $this->ksoemussqmaacucm($smecmmgoykqcaieu->data->user->id), Constants::sygmkaeayiiouiwm => $mgegoogckgsumooq]; } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function auosyisuakguyimw(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->sygeeqgwywmygsyu($aqmwamyiwgeeymqa); if (!is_wp_error($keccaugmemegoimu)) { [$mgegoogckgsumooq, $smecmmgoykqcaieu] = $keccaugmemegoimu; $keccaugmemegoimu = [Constants::meksegaoamowuwoq => $this->ksoemussqmaacucm($smecmmgoykqcaieu->data->user->id), Constants::uiwqcumqkgikqyue => [Constants::ciywsqoeiymemsys => 200], Constants::vswoiouoaykswgym => "\x61\x75\164\150\137\x67\x65\x74\x5f\155\145", "\141\143\143\x6f\x75\x6e\164" => []]; } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } }
