<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             660dc183e80f5             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel\REST; use Exception; use Firebase\JWT\JWT; use Pmpr\Common\Foundation\FormGenerator\Field; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Auth extends Common { const gagkiiqqiysqqgmc = "\x72\145\x67\151\x73\x74\x65\x72"; const soawgaqmsgmysyma = "\x72\x65\163\x65\164\137\x70\x61\x73\x73\x77\x6f\162\144"; const igswqqsosoeiociu = "\146\157\162\x67\x6f\x74\x5f\160\x61\x73\x73\167\x6f\x72\144"; const scagkwwiiquocimc = "\x6c\x61\x73\164\x5f\156\141\155\145"; const kagqiwogmiguosiw = "\x66\151\162\163\164\137\x6e\x61\155\x65"; const miqkwqsewyogmsak = "\x75\163\145\162\137\x6c\x6f\x67\151\156"; const iqgqyoowkoeugsck = "\x75\163\145\x72\137\160\x61\163\x73\167\157\162\x64"; const oysqakmiwsaqskce = "\x72\x65\x70\x65\x61\x74\x5f\x70\x61\x73\163\x77\x6f\x72\144"; protected ?WP_Error $error = null; public function __construct() { $this->rest_base = "\x61\x75\164\x68"; parent::__construct(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\167\160\x5f\x6c\x6f\x67\x6f\165\164", [$this, "\157\x79\x77\x77\155\x77\167\167\161\145\x75\x69\157\155\x6b\141"], 999); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x72\x65\163\x65\164\137\160\x72\x65\137\x64\151\163\160\x61\164\143\150", [$this, "\171\167\163\151\x69\x69\x6b\x75\163\x77\157\x79\x6f\167\x61\167"])->cecaguuoecmccuse("\144\145\x74\x65\162\x6d\x69\x6e\x65\137\x63\165\x72\x72\x65\156\164\x5f\165\x73\x65\x72", [$this, "\141\145\x69\143\x65\x6b\141\x73\x67\157\153\165\x75\x6f\x71\155"]); $this->aqaqisyssqeomwom("\147\x65\x74\137\x6a\167\164\137\x61\x75\x74\x68\137\x75\x73\x65\x72", [$this, "\x69\x73\163\163\163\165\x79\147\171\145\x77\x75\x61\163\x77\x61"])->aqaqisyssqeomwom("\147\x65\164\137\x6a\167\x74\x5f\141\x75\x74\150\137\x74\157\x6b\x65\x6e", [$this, "\x73\171\x67\145\145\x71\x67\x77\171\167\x6d\171\147\x73\171\165"]); parent::kgquecmsgcouyaya(); } public function euekiyuksecoccus() : ?WP_Error { return $this->error; } public function yauwooaeicgosquo(?WP_Error $iswcokucwmiosiaq) : void { $this->error = $iswcokucwmiosiaq; } public function aeicekasgokuuoqm($mkucggyaiaukqoce) { $qoockacwwamsuscm = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->ymsasggoakmgguqk(); $wigqmiauciuswcom = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(); if (!(strpos($wigqmiauciuswcom, $qoockacwwamsuscm) && strpos($wigqmiauciuswcom, "\x2f\x70\x61\156\145\x6c\x2f\x61\165\x74\150\57\x76\x65\x72\151\146\x79"))) { goto uykousayyomcaeaa; } $keccaugmemegoimu = $this->sygeeqgwywmygsyu(false); if (is_wp_error($keccaugmemegoimu) && $keccaugmemegoimu->get_error_code() != "\156\x6f\x5f\141\165\x74\x68\137\x68\145\x61\x64\x65\162") { goto ukqocwewouckikso; } [$mgegoogckgsumooq, $smecmmgoykqcaieu] = $keccaugmemegoimu; $mkucggyaiaukqoce = $smecmmgoykqcaieu->data->user->id; goto ucqmumuygcywwqma; ukqocwewouckikso: $this->yauwooaeicgosquo($keccaugmemegoimu); ucqmumuygcywwqma: uykousayyomcaeaa: return $mkucggyaiaukqoce; } public function register_routes() { $this->register("\x2f\147\x65\x74\55\146\x69\x65\x6c\144\163", [self::wwgusigoaksqmwsm => [$this, "\x75\147\x6d\x63\x65\x63\x63\x67\x77\x61\141\x61\151\x67\x69\x79"]]); $this->register("\x2f\x6d\145", [self::wwgusigoaksqmwsm => [$this, "\141\165\x6f\x73\x79\x69\x73\x75\141\153\147\x75\171\x69\x6d\167"]]); $this->register("\x2f\154\x6f\147\151\156", [self::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, self::wwgusigoaksqmwsm => [$this, "\x6b\x6b\x6d\153\x63\x79\163\171\143\145\x79\x69\x77\x73\x6b\161"]]); $this->register("\57\162\x65\x67\x69\163\x74\145\x72", [self::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, self::wwgusigoaksqmwsm => [$this, "\x6d\x65\157\x77\143\165\x6d\x75\145\x69\145\145\x63\145\145\x61"]]); $this->register("\57\x6c\157\x67\x6f\165\x74", [self::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, self::wwgusigoaksqmwsm => [$this, "\x61\151\141\155\147\153\151\x65\x77\167\x61\153\157\x65\x67\x79"]]); $this->register("\x2f\166\x65\x72\151\146\x79", [self::wwgusigoaksqmwsm => [$this, "\165\x73\x73\157\x77\153\151\x67\165\155\157\141\x6f\x6f\x77\157"]]); $this->register("\57\x63\x68\x61\x6e\147\145\55\x70\x61\x73\x73\167\x6f\162\x64", [self::oaggieeykyaoiiyw => self::ouuaeeeqeqkagcgi, self::wwgusigoaksqmwsm => [$this, "\141\x67\x63\x79\x77\153\x77\141\157\x71\x6b\153\143\143\147\x6b"]]); $this->register("\57\x72\145\163\x65\x74\x2d\160\141\163\x73\167\x6f\162\x64", [self::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, self::wwgusigoaksqmwsm => [$this, "\163\161\141\157\161\x71\157\x6f\161\157\167\x75\x67\155\143\x77"]]); $this->woekqgykywwycyci(); } public function oywwmwwwqeuiomka($mkucggyaiaukqoce) { } public function ugmceccgwaaaigiy(WP_REST_Request $aqmwamyiwgeeymqa) { $ikgwqyuyckaewsow = $this->cqsmgqiwwuasmkiq(); if ($ikgwqyuyckaewsow) { goto yiowgigkkwsoqcci; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\143\141\x6e\x20\x6e\x6f\164\x20\146\x6f\x75\156\144\x20\162\145\161\x75\x65\x73\164\145\144\40\x66\x69\x65\154\x64\163\56", PR__MDL__PANEL), 404); goto ieqesiiageaauiuw; yiowgigkkwsoqcci: foreach ($ikgwqyuyckaewsow as $ymqmyyeuycgmigyo => $ccamueccusigaaio) { foreach ($ccamueccusigaaio as $momcykaoccoymeig => $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto sioekkmekwygemyc; } $aiowsaccomcoikus->uuagoowwgcuosuuu()->eumecwmqmukqgyea()->qigsyyqgewgskemg("\x66\x6f\x72\x6d\x2d\x63\x6f\x6e\164\x72\x6f\x6c\x2d\x73\x6f\154\151\x64\x20\146\157\156\x74\x2d\163\151\172\x65\55\x68\x34\x20\150\55\141\165\x74\157\40\160\x2d\x35")->gkkgsyeumismsyse("\x66\x6f\156\164\55\163\x69\x7a\x65\x2d\150\66\x20\146\x6f\x6e\164\x2d\x77\145\x69\x67\150\x74\55\142\x6f\x6c\144\x65\162\40\164\x65\x78\x74\x2d\x64\x61\x72\x6b"); $ikgwqyuyckaewsow[$ymqmyyeuycgmigyo][$momcykaoccoymeig] = $aiowsaccomcoikus; if (!($ccamueccusigaaio == self::gagkiiqqiysqqgmc)) { goto qukocuwgakemmyga; } $aiowsaccomcoikus->smcqugueqiumkygs(); qukocuwgakemmyga: sioekkmekwygemyc: uqokiksoqcwwqgio: } kocqqoyymosmuksu: $this->ocksiywmkyaqseou("\160\x61\156\145\x6c\137\141\x75\164\x68\137{$ymqmyyeuycgmigyo}\137\x66\151\x65\x6c\144\x73", $ccamueccusigaaio); $ikgwqyuyckaewsow[$ymqmyyeuycgmigyo] = $this->ayssaocauwgssywa($ccamueccusigaaio); iuuuususuuuaieem: } uimeeckqksqeekqq: $keccaugmemegoimu = $ikgwqyuyckaewsow; ieqesiiageaauiuw: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function mmusmqyoussiyygq(WP_REST_Request $aqmwamyiwgeeymqa, string $ccamueccusigaaio) { $icwicymcioeyeyek = []; $ikgwqyuyckaewsow = $this->cqsmgqiwwuasmkiq($ccamueccusigaaio); if (!$ikgwqyuyckaewsow) { goto wsesqmcqoiyyqkqi; } foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto iesekaeqeomeuaui; } $eqgoocgaqwqcimie = $this->swmwoeaaeqiouswg($aqmwamyiwgeeymqa, $aiowsaccomcoikus->mwikyscisascoeea(), $aiowsaccomcoikus->oiswysuiioecsaae()); if (!($aiowsaccomcoikus->msmiagueogcsucgc() && !$eqgoocgaqwqcimie)) { goto oyeyomcgkmgymogq; } $icwicymcioeyeyek = false; goto gamqcwuwkikwqoay; oyeyomcgkmgymogq: $icwicymcioeyeyek[$aiowsaccomcoikus->mwikyscisascoeea()] = $eqgoocgaqwqcimie; iesekaeqeomeuaui: mscyggqcesgqqksu: } gamqcwuwkikwqoay: wsesqmcqoiyyqkqi: return $icwicymcioeyeyek; } private function cqsmgqiwwuasmkiq(string $ccamueccusigaaio = self::ALL) : array { $gusoaiguqeaommcc = $this->caokeucsksukesyo()->kugiyqykwaskawsc(); $owaiikyuwwwmswgc = $gusoaiguqeaommcc->ymuegqgyuagyucws(self::muqaqimusmckkieq)->gswweykyogmsyawy(__("\105\155\141\x69\154", PR__MDL__PANEL))->kyiucygqsgequoys("\145\155\x61\151\x6c\x40\x61\x64\x64\x72\x65\163\x73\x2e\x63\x6f\x6d")->mkiaygiogeeyogqm(); $ikgwqyuyckaewsow = [self::yuguikokwoymmqem => [$gusoaiguqeaommcc->ymuegqgyuagyucws(self::miqkwqsewyogmsak)->gswweykyogmsyawy(__("\105\155\x61\151\154\40\157\162\x20\x55\163\x65\x72\156\141\155\x65", PR__MDL__PANEL))->kyiucygqsgequoys("\145\155\141\151\154\x40\x61\x64\x64\x72\145\163\163\56\x63\x6f\x6d")->kqqqugemmqagucuq(), $gusoaiguqeaommcc->ymuegqgyuagyucws(self::iqgqyoowkoeugsck)->gswweykyogmsyawy(__("\120\141\163\163\167\157\x72\144", PR__MDL__PANEL))->sqsumkuougquscyg()], self::gagkiiqqiysqqgmc => [$gusoaiguqeaommcc->ymuegqgyuagyucws(self::kagqiwogmiguosiw)->gswweykyogmsyawy(__("\x46\x69\162\x73\164\156\141\155\145", PR__MDL__PANEL)), $gusoaiguqeaommcc->ymuegqgyuagyucws(self::scagkwwiiquocimc)->gswweykyogmsyawy(__("\x4c\x61\x73\164\156\141\155\145", PR__MDL__PANEL)), $gusoaiguqeaommcc->ymuegqgyuagyucws(self::csiaccacwgeeqwwo)->gswweykyogmsyawy(__("\x55\163\145\x72\156\x61\155\x65", PR__MDL__PANEL))->kqqqugemmqagucuq(), $owaiikyuwwwmswgc, $gusoaiguqeaommcc->ymuegqgyuagyucws(self::akywgoyaseymiyka)->gswweykyogmsyawy(__("\120\141\x73\163\x77\157\x72\x64", PR__MDL__PANEL))->sqsumkuougquscyg(), $gusoaiguqeaommcc->ymuegqgyuagyucws(self::oysqakmiwsaqskce)->gswweykyogmsyawy(__("\x52\145\160\x65\x61\x74\x20\x50\x61\163\x73\167\157\x72\x64", PR__MDL__PANEL))->sqsumkuougquscyg()], self::soawgaqmsgmysyma => [], self::igswqqsosoeiociu => [$owaiikyuwwwmswgc]]; $ikgwqyuyckaewsow = (array) $this->ocksiywmkyaqseou("\160\141\156\145\154\137\141\x75\x74\x68\137\146\x69\x65\154\144\x73", $ikgwqyuyckaewsow); return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ikgwqyuyckaewsow, $ccamueccusigaaio, $ikgwqyuyckaewsow); } public function sqaoqqooqowugmcw(WP_REST_Request $aqmwamyiwgeeymqa) { $owaiikyuwwwmswgc = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::muqaqimusmckkieq); $keccaugmemegoimu = []; if ($this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->qkgmsqgmwoamekyk($owaiikyuwwwmswgc)) { goto oimkeqocuguqqsqk; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x54\x68\x65\x20\105\155\141\151\x6c\x20\x79\x6f\165\40\x65\156\x74\145\x72\145\x64\x20\151\x73\x20\x6e\x6f\164\x20\x76\x61\154\x69\144\56", PR__MDL__PANEL), 400); goto oeocukauoyosicso; oimkeqocuguqqsqk: if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->uyoiiusukoigeusy($owaiikyuwwwmswgc)) { goto mogkoocsoeuyoqqa; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\116\157\x20\x75\x73\145\x72\40\146\157\165\x6e\x64\x20\x77\x69\164\x68\40\164\x68\x69\163\40\145\x6d\x61\x69\x6c\40\x61\x64\144\x72\x65\163\163\x2e", PR__MDL__PANEL), 404); goto wkwamkgkwykeqkec; mogkoocsoeuyoqqa: try { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); } catch (Exception $iewosgggaueeyymg) { return $this->oemauiimmycumcsk($this->kyacickkomkioeyu($iewosgggaueeyymg), 500); } wkwamkgkwykeqkec: oeocukauoyosicso: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function agcywkwaoqkkccgk(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (!is_wp_error($mkucggyaiaukqoce)) { goto yuimwyoywaiiqacs; } $keccaugmemegoimu = $mkucggyaiaukqoce; goto ocywegekakimmwcq; yuimwyoywaiiqacs: $yeacayasgueouoqc = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\x63\x75\x72\x72\145\156\164"); $qqwegysogaocgeww = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::akywgoyaseymiyka); if ($qqwegysogaocgeww && $yeacayasgueouoqc) { goto yoqakewookqoqacm; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x4d\151\163\163\151\x6e\147\40\160\x61\162\x61\x6d\x65\164\x65\x72\x2e", PR__MDL__PANEL), 400); goto gswcoeiisamakwii; yoqakewookqoqacm: if ($yeacayasgueouoqc === $qqwegysogaocgeww) { goto uckewycoogsogwiy; } if ($this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->eoiyuwsiwqyqiyom($yeacayasgueouoqc, $mkucggyaiaukqoce->user_pass, $mkucggyaiaukqoce->ID)) { goto yykqaowwsqgqysmq; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\105\156\164\x65\162\145\x64\40\x63\x75\162\162\x65\x6e\164\40\160\141\163\163\x77\157\x72\x64\x20\x69\x73\x20\x6e\157\x74\x20\x63\157\x72\x72\x65\x63\x74\x2e", PR__MDL__PANEL), 400); goto kwiggogcgciwuwqk; yykqaowwsqgqysmq: $keccaugmemegoimu = new WP_Error(); $this->cqscqicucmeamkyq("\x76\x61\x6c\151\144\141\164\x65\x5f\160\x61\x73\163\x77\x6f\x72\144\137\x72\x65\x73\145\x74", $keccaugmemegoimu, $mkucggyaiaukqoce); if ($keccaugmemegoimu->has_errors()) { goto suqceasgacskcmkc; } $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->sqaoqqooqowugmcw($mkucggyaiaukqoce, $qqwegysogaocgeww); $keccaugmemegoimu = [self::ciywsqoeiymemsys => 200, self::eoskkkieowogacws => __("\x50\141\x73\163\x77\x6f\162\144\x20\143\x68\141\x6e\147\x65\144\40\x73\x75\143\x63\x65\x73\163\x66\x75\154\x6c\x79", PR__MDL__PANEL)]; suqceasgacskcmkc: kwiggogcgciwuwqk: goto ikuuiauwouuqawuw; uckewycoogsogwiy: $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\105\x6e\164\145\162\145\x64\x20\x63\165\162\x72\x65\156\x74\40\160\141\x73\x73\167\x6f\x72\144\40\x61\x6e\x64\x20\x6e\x65\167\x20\x70\x61\x73\163\x77\157\162\144\40\151\163\40\x73\x61\x6d\145\56", PR__MDL__PANEL), 400); ikuuiauwouuqawuw: gswcoeiisamakwii: ocywegekakimmwcq: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function woekqgykywwycyci() { $uykgysuswksgmwqy = "\x41\143\x63\145\x73\x73\x2d\103\x6f\156\x74\x72\157\154\55\x41\x6c\x6c\157\167\x2d\110\x65\x61\144\145\x72\x73\54\x20\103\x6f\x6e\x74\x65\156\164\55\124\x79\x70\145\54\x20\x41\165\164\150\157\x72\x69\172\141\164\151\157\156"; header(sprintf("\x41\143\143\145\163\163\x2d\103\157\156\x74\x72\x6f\x6c\x2d\x41\x6c\x6c\157\167\x2d\x48\145\x61\x64\x65\x72\x73\72\x20\45\163", $uykgysuswksgmwqy)); } public function ywsiiikuswoyowaw(WP_REST_Request $aqmwamyiwgeeymqa) { $iswcokucwmiosiaq = $this->euekiyuksecoccus(); if (!is_wp_error($iswcokucwmiosiaq)) { goto emqswoaawgeyosmi; } $aqmwamyiwgeeymqa = $iswcokucwmiosiaq; emqswoaawgeyosmi: return $aqmwamyiwgeeymqa; } public function meowcumueieeceea(WP_REST_Request $aqmwamyiwgeeymqa) { $icwicymcioeyeyek = $this->mmusmqyoussiyygq($aqmwamyiwgeeymqa, self::gagkiiqqiysqqgmc); if ($icwicymcioeyeyek) { goto yqagomygmeoecwey; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\105\x6e\164\x65\162\x65\144\40\166\141\154\165\145\163\40\x69\x73\40\156\157\x74\x20\166\141\x6c\151\x64\56", PR__MDL__PANEL), 400); goto qikaewekoecykeou; yqagomygmeoecwey: $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $ewgmommeawggyaek = $this->uwkmaywceaaaigwo()->issssuygyewuaswa(); $owaiikyuwwwmswgc = $gkyciwoiiisgywcs->unset($icwicymcioeyeyek, self::muqaqimusmckkieq); $qqwegysogaocgeww = $gkyciwoiiisgywcs->unset($icwicymcioeyeyek, self::akywgoyaseymiyka); $yewiaiaauukwsgku = $gkyciwoiiisgywcs->unset($icwicymcioeyeyek, self::csiaccacwgeeqwwo); if ($ewgmommeawggyaek->uyoiiusukoigeusy($owaiikyuwwwmswgc)) { goto gsygwgsiawgmqiyi; } if ($ewgmommeawggyaek->wskwomgayscmiwqy($yewiaiaauukwsgku)) { goto suqcsgaosywaauuu; } $assuqkuiuewumqyu = $gkyciwoiiisgywcs->unset($icwicymcioeyeyek, self::oysqakmiwsaqskce); if ($assuqkuiuewumqyu !== $qqwegysogaocgeww) { goto ikqeeaysmqgcgawq; } $oeucsuyqysaciasy = $this->caokeucsksukesyo()->wikusamwomuogoau()->ggocakcisguuokai() ? self::qkimqmacosgcwmug : "\163\x75\142\163\x63\162\x69\x62\145\162"; $sogksuscggsicmac = $ewgmommeawggyaek->gesyeyeaqmiskuoo($yewiaiaauukwsgku, $qqwegysogaocgeww, $owaiikyuwwwmswgc); if (is_wp_error($sogksuscggsicmac)) { goto esaqcqqwuussiiwo; } $mkucggyaiaukqoce = $this->caokeucsksukesyo()->issssuygyewuaswa()->get($sogksuscggsicmac); if ($mkucggyaiaukqoce) { goto okkmcocqokkskasy; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\x55\163\145\x72\x20\x6e\x6f\164\40\146\x6f\165\156\x64", PR__MDL__PANEL)); goto qiiigwkqeoewsuwm; okkmcocqokkskasy: $mkucggyaiaukqoce->set_role($oeucsuyqysaciasy); foreach ($icwicymcioeyeyek as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $mkucggyaiaukqoce->{$uusmaiomayssaecw} = $eqgoocgaqwqcimie; esikeyqyuikmaiek: } iwsmmkqaoksmocok: $ewgmommeawggyaek->update($mkucggyaiaukqoce); $sogksuscggsicmac = $this->qasywwyamoesisyi(__("\131\157\x75\162\40\141\143\143\157\x75\156\164\x20\x63\162\145\x61\x74\x65\144\x20\163\165\x63\x63\145\163\x73\146\x75\154\154\x79", PR__MDL__PANEL), $mkucggyaiaukqoce); qiiigwkqeoewsuwm: esaqcqqwuussiiwo: goto mscgewkcqcoowweg; ikqeeaysmqgcgawq: $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\x50\x61\x73\163\167\157\x72\x64\x73\40\141\162\x65\40\x6e\x6f\x74\x20\x73\x61\x6d\145", PR__MDL__PANEL), 400); mscgewkcqcoowweg: goto wwukgaquuyoissgy; suqcsgaosywaauuu: $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\x55\x73\145\162\156\141\155\145\40\x61\154\162\145\141\x64\x79\x20\145\x78\x69\x73\164\163\54\x20\160\x6c\x65\x61\x73\145\x20\145\x6e\x74\145\162\x20\141\x6e\157\164\x68\x65\x72\x20\165\163\x65\162\156\x61\155\145", PR__MDL__PANEL), 400); wwukgaquuyoissgy: goto qsgqwyqaqiowkmco; gsygwgsiawgmqiyi: $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\x45\x6d\x61\x69\x6c\x20\x61\x6c\x72\145\x61\144\x79\x20\145\x78\x69\x73\x74\x73\54\40\x70\154\145\141\x73\x65\40\x74\x72\x79\40\106\157\x72\x67\x65\x74\40\120\141\x73\163\167\x6f\162\x64", PR__MDL__PANEL), 400); qsgqwyqaqiowkmco: qikaewekoecykeou: return $sogksuscggsicmac; } public function aiamgkiewwakoegy(WP_REST_Request $aqmwamyiwgeeymqa) { $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->aiamgkiewwakoegy(); return $this->ewmkmmsuiuwmmwoy($this->qasywwyamoesisyi(__("\x4c\157\x67\147\x65\x64\x20\x6f\165\164", PR__MDL__PANEL))); } public function kkmkcysyceyiwskq(WP_REST_Request $aqmwamyiwgeeymqa) { $emoqwwkmassqsoaw = $this->aumueocimuaiwyee(); if ($emoqwwkmassqsoaw) { goto oqousikwiiqagoyw; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x4a\x57\x54\x20\x69\163\40\156\157\164\x20\x63\157\156\146\x69\147\x75\x72\145\144\40\x70\x72\157\x70\x65\162\154\x79\x2e", PR__MDL__PANEL), 500); goto zayqqeqgcwkekwws; oqousikwiiqagoyw: $icwicymcioeyeyek = $this->mmusmqyoussiyygq($aqmwamyiwgeeymqa, self::yuguikokwoymmqem); if ($icwicymcioeyeyek) { goto aiccyaswigkaycqk; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x45\x6e\164\x65\x72\x65\x64\40\166\x61\154\165\x65\163\40\x69\x73\40\156\157\164\x20\x76\x61\x6c\151\x64\56", PR__MDL__PANEL), 400); goto sqyokemumceysegy; aiccyaswigkaycqk: try { $ewgmommeawggyaek = $this->uwkmaywceaaaigwo()->issssuygyewuaswa(); $ewgmommeawggyaek->aiamgkiewwakoegy(); $mkucggyaiaukqoce = $ewgmommeawggyaek->hmisgsqkawsgmqou($icwicymcioeyeyek); if (is_wp_error($mkucggyaiaukqoce)) { goto eucqomyqykgoiuge; } $ycoeoaakqyskgykq = $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($mkucggyaiaukqoce); $ggmuwmqmcisegoea = time(); $wekousyuiguacggm = $ggmuwmqmcisegoea + (int) $this->ocksiywmkyaqseou("\x70\x61\156\145\x6c\137\141\165\164\150\137\143\157\157\x6b\151\145\137\145\170\x70\x69\162\x61\x74\x69\x6f\156", DAY_IN_SECONDS * 180, $ycoeoaakqyskgykq); $mgegoogckgsumooq = ["\x69\163\163" => $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->ciqkaakiwsgqwiqu(self::auqoykcmsiauccao), "\151\141\x74" => $ggmuwmqmcisegoea, "\156\142\146" => $ggmuwmqmcisegoea, "\145\170\x70" => $wekousyuiguacggm, "\144\x61\164\x61" => [self::meksegaoamowuwoq => [self::gouqcwikiiygyasc => $ycoeoaakqyskgykq]]]; $mgegoogckgsumooq = JWT::encode($mgegoogckgsumooq, $emoqwwkmassqsoaw); $keccaugmemegoimu = [self::meksegaoamowuwoq => $this->ksoemussqmaacucm($ycoeoaakqyskgykq), "\164\x6f\x6b\145\x6e" => $mgegoogckgsumooq, "\x65\x78\x70\x69\x72\145" => $wekousyuiguacggm]; $ewgmommeawggyaek->kkkuqwaqakeaykmo($ycoeoaakqyskgykq, $mkucggyaiaukqoce->user_login); $ewgmommeawggyaek->qsgmugaqymqgqayy($ycoeoaakqyskgykq); $this->cqscqicucmeamkyq("\167\x70\137\154\157\x67\151\x6e", $mkucggyaiaukqoce->user_login, $mkucggyaiaukqoce); goto usymasgsyqgsuocg; eucqomyqykgoiuge: $keccaugmemegoimu = $this->oemauiimmycumcsk($mkucggyaiaukqoce->get_error_message(), 401); usymasgsyqgsuocg: } catch (Exception $wgaoewqkwgomoaai) { $keccaugmemegoimu = $this->oemauiimmycumcsk($this->kyacickkomkioeyu($wgaoewqkwgomoaai), 500); } sqyokemumceysegy: zayqqeqgcwkekwws: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ussowkigumoaoowo($aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->sygeeqgwywmygsyu($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto aueaceeyommgkicu; } [$mgegoogckgsumooq, $smecmmgoykqcaieu] = $keccaugmemegoimu; $keccaugmemegoimu = [self::meksegaoamowuwoq => $this->ksoemussqmaacucm($smecmmgoykqcaieu->data->user->id), "\164\157\153\145\x6e" => $mgegoogckgsumooq]; aueaceeyommgkicu: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function auosyisuakguyimw(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->sygeeqgwywmygsyu($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto mysueeoswqgccmui; } [$mgegoogckgsumooq, $smecmmgoykqcaieu] = $keccaugmemegoimu; $keccaugmemegoimu = [self::meksegaoamowuwoq => $this->ksoemussqmaacucm($smecmmgoykqcaieu->data->user->id), self::uiwqcumqkgikqyue => [self::ciywsqoeiymemsys => 200], self::vswoiouoaykswgym => "\x61\165\164\150\137\x67\x65\164\x5f\155\145", "\141\143\143\x6f\x75\x6e\x74" => []]; mysueeoswqgccmui: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } }
