<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6267a00dd33fe             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel; use Exception; use Pmpr\Common\Foundation\Decorator\DecoratorUser; use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox; use Pmpr\Common\Foundation\FormMaker\Front\Field\Field; use Pmpr\Common\Foundation\FormMaker\Front\Field\File; use Pmpr\Common\Foundation\FormMaker\Front\Field\Header; use Pmpr\Common\Foundation\FormMaker\Front\Form; use Pmpr\Common\Foundation\Manipulate\ManipulateFile; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\ManipulateValidation; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateAttachment; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use WP_Error; class User extends Container { const uymswsomcyoqsegc = "\x70\150\157\156\x65\x5f\156\x75\155\142\x65\x72"; const meweoeakkqyiwuyy = "\x75\x73\x65\162\137\x61\x76\141\x74\x61\x72"; const akoagooquksouwka = "\165\x73\145\x72\137\145\155\x61\x69\154"; const kagqiwogmiguosiw = "\x66\151\162\x73\164\x5f\156\141\155\145"; const scagkwwiiquocimc = "\x6c\141\x73\164\137\x6e\141\155\145"; const ccyqsqcgksyckkcm = "\165\x73\x65\162\x5f\165\162\x6c"; const gmyemowoaqyoqwme = "\x6e\x69\x63\x6b\x6e\x61\155\145"; const cigcassgekcaiigg = "\137\x76\145\162\x69\x66\x69\x65\x64"; const iuwkkyuoyukacwwy = "\x6e\x61\x74\151\x6f\x6e\x61\154\x5f\x63\157\144\145"; const kmyciqicaqsgiwga = "\x6e\x61\x74\151\157\156\x61\x6c\x5f\x63\141\162\x64"; public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x67\x65\x74\x5f\x61\166\141\164\x61\x72\137\x64\141\x74\141", [$this, "\x6f\x71\163\x6d\x79\165\167\x77\147\157\x69\x79\x61\163\x65\165"], 999, 2)->cecaguuoecmccuse($this->ygyygikyocoymgaw("\160\x61\156\x65\x6c\x5f\165\x73\145\x72\137\147\145\164\137\x66\x69\145\154\x64\163"), [$this, "\165\147\x6d\143\145\143\x63\147\x77\141\141\x61\x69\x67\151\171"], 10, 2); parent::kgquecmsgcouyaya(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x73\150\x6f\167\137\165\x73\145\162\137\160\162\157\x66\151\154\145", [$this, "\141\x77\153\x71\153\x71\141\x75\167\167\x75\x71\147\145\167\165"])->qcsmikeggeemccuu("\145\x64\151\x74\137\165\163\x65\162\x5f\160\x72\157\146\x69\x6c\x65", [$this, "\141\x77\153\161\x6b\161\x61\x75\x77\x77\x75\x71\x67\x65\167\x75"])->qcsmikeggeemccuu("\160\x65\x72\163\157\156\141\154\x5f\157\160\164\151\157\x6e\x73\137\165\x70\144\141\x74\x65", [$this, "\155\163\171\x73\x67\161\x65\145\167\153\161\147\163\x63\167\145"])->qcsmikeggeemccuu("\145\x64\x69\164\x5f\x75\163\145\162\137\160\162\x6f\146\x69\x6c\145\x5f\x75\x70\144\x61\x74\x65", [$this, "\155\x73\171\163\x67\x71\145\145\x77\153\x71\x67\x73\x63\167\145"]); parent::wigskegsqequoeks(); } public function msysgqeewkqgscwe($mkucggyaiaukqoce) { if (!DecoratorUser::scmcyesmmikkucie()) { goto eekcoeikaeaaeyii; } $megmggkiokqkcwou = $this->ugmceccgwaaaigiy([self::meksegaoamowuwoq => $mkucggyaiaukqoce]); foreach ($megmggkiokqkcwou as $aiowsaccomcoikus) { if (!$aiowsaccomcoikus->iokkueaqiswaewyq()) { goto ocaguquugeamqckq; } $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea() . self::cigcassgekcaiigg; if (isset($_POST[$aokagokqyuysuksm])) { goto qmkaeeomgkwggoyo; } $eqgoocgaqwqcimie = 0; goto csammceowmqwaamq; qmkaeeomgkwggoyo: $eqgoocgaqwqcimie = 1; csammceowmqwaamq: ManipulateUser::ksmqawcowkmegigw($aokagokqyuysuksm, $eqgoocgaqwqcimie, $mkucggyaiaukqoce); ocaguquugeamqckq: gcckqucukawcasgk: } cuumeogeomowqisc: eekcoeikaeaaeyii: $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy([], [self::meksegaoamowuwoq => $mkucggyaiaukqoce, self::mgsccwumkcawaqcy => self::kqeokggqcsesmqco]); if (!$ikgwqyuyckaewsow) { goto sockeswygwcskeuq; } foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!($aiowsaccomcoikus instanceof Field && !$aiowsaccomcoikus instanceof Header)) { goto uaukmuiwskcemcsw; } $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); $eqgoocgaqwqcimie = ManipulateServer::ayueggmoqeeukqmq($aokagokqyuysuksm, ''); $quuosgimaqwocmmk = ManipulateServer::ayueggmoqeeukqmq($aokagokqyuysuksm . self::mswocgcucqoaesaa, ''); if (!($aiowsaccomcoikus instanceof File && is_numeric($quuosgimaqwocmmk))) { goto ugqwuugsweqgmywk; } ManipulateUser::ksmqawcowkmegigw($aokagokqyuysuksm . self::mswocgcucqoaesaa, $quuosgimaqwocmmk, $mkucggyaiaukqoce); ugqwuugsweqgmywk: ManipulateUser::ksmqawcowkmegigw($aokagokqyuysuksm, $eqgoocgaqwqcimie, $mkucggyaiaukqoce); uaukmuiwskcemcsw: gmwykkouysyaqwqm: } cogywoqcqummsyus: sockeswygwcskeuq: } public function awkqkqauwwuqgewu($mkucggyaiaukqoce) { $uiyqiwmskuuaiayw = []; if (!DecoratorUser::scmcyesmmikkucie()) { goto cgyakcqgugqgkqiw; } $megmggkiokqkcwou = $this->ugmceccgwaaaigiy([], [self::meksegaoamowuwoq => $mkucggyaiaukqoce]); foreach ($megmggkiokqkcwou as $aiowsaccomcoikus) { if (!($aiowsaccomcoikus instanceof Field && !$aiowsaccomcoikus instanceof Header)) { goto uegouoiuyoqkcscg; } if (!$aiowsaccomcoikus->iokkueaqiswaewyq()) { goto mggeqkcksyaymcsa; } $omuyquqsuicwkeic = $aiowsaccomcoikus->mwikyscisascoeea() . self::cigcassgekcaiigg; $ieqeegkcmgkmoiyq = MetaBox::wcwmusaouiqaqeww($omuyquqsuicwkeic); $ieqeegkcmgkmoiyq->iygyugseyaqwywyg(ManipulateUser::igawqaomowicuayw($omuyquqsuicwkeic, $mkucggyaiaukqoce) ? "\157\x6e" : "\157\146\146"); $eqgoocgaqwqcimie = $aiowsaccomcoikus->qooeaookuemoqecm(); $wwgucssaecqekuek = ["\x63\x6c\x61\x73\163" => "\155\164\55\x32"]; if ($aiowsaccomcoikus instanceof File) { goto cscusseysqygsoiy; } $eqgoocgaqwqcimie = ManipulateHTML::ciuuiyckmsygceis($eqgoocgaqwqcimie, $wwgucssaecqekuek); goto isgwkwacoyimiauk; cscusseysqygsoiy: $wwgucssaecqekuek["\163\x72\143"] = $eqgoocgaqwqcimie; $wwgucssaecqekuek[self::qomookamaskuoswk] = 120; $wwgucssaecqekuek = ManipulateHTML::igmaewykumgwoaoy($wwgucssaecqekuek, "\x63\x6c\141\x73\163", "\x69\155\x67\55\146\x6c\x75\x69\144"); $mcqieaigyeeyaksm = ManipulateHTML::qgsekwygcgawekeq("\x69\155\x67", $wwgucssaecqekuek); $eqgoocgaqwqcimie = ManipulateHTML::yuawgssgauywkiia($mcqieaigyeeyaksm, $eqgoocgaqwqcimie, ["\164\141\162\x67\x65\x74" => "\x5f\x62\x6c\x61\156\153"]); isgwkwacoyimiauk: $uiyqiwmskuuaiayw[] = [self::gouqcwikiiygyasc => $omuyquqsuicwkeic, self::gsqoooskigukokks => $ieqeegkcmgkmoiyq->render(), self::ciyoccqkiamemcmm => sprintf(__("\126\x61\154\x75\x65\x20\157\146\40\x25\163\x3a\40\45\163", PR__MDL__PANEL), $aiowsaccomcoikus->uikgwcuascgeissw(), $eqgoocgaqwqcimie), self::uissasisiuymwsmu => sprintf(__("\126\x65\162\151\146\x79\x20\45\163", PR__MDL__PANEL), $aiowsaccomcoikus->uikgwcuascgeissw())]; mggeqkcksyaymcsa: uegouoiuyoqkcscg: uaqackioaiqwcocy: } mkwkkmkgiqiamacc: cgyakcqgugqgkqiw: $yoagueksskqiewiq = []; $gmeiukgosesecyee = $this->ugmceccgwaaaigiy([], [self::meksegaoamowuwoq => $mkucggyaiaukqoce, self::mgsccwumkcawaqcy => self::kqeokggqcsesmqco]); foreach ($gmeiukgosesecyee as $aiowsaccomcoikus) { if (!($aiowsaccomcoikus instanceof Field && !$aiowsaccomcoikus instanceof Header)) { goto wusciwkkckmqigms; } $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); $ssigsiuwyemcwmys = $this->qackogceeomyqyya($aiowsaccomcoikus); if (!$ssigsiuwyemcwmys) { goto kqswcsysqawkcgye; } $ssigsiuwyemcwmys->qigsyyqgewgskemg("\x77\x2d\155\x64\55\x35\60\40\167\x2d\x6c\147\x2d\x32\65"); $ssigsiuwyemcwmys->iygyugseyaqwywyg($aiowsaccomcoikus->qooeaookuemoqecm()); $ssigsiuwyemcwmys->usuqmwksoeaayaig(''); $yoagueksskqiewiq[] = [self::gouqcwikiiygyasc => $aokagokqyuysuksm, self::gsqoooskigukokks => $ssigsiuwyemcwmys->render(), self::uissasisiuymwsmu => $aiowsaccomcoikus->uikgwcuascgeissw()]; kqswcsysqawkcgye: wusciwkkckmqigms: ewscugeuicukkycc: } eeyyskqsmquyquqw: if (!$yoagueksskqiewiq) { goto iiiccouaaqsyikae; } echo $this->iuygowkemiiwqmiw("\160\x72\157\146\151\154\x65", [self::qescuiwgsyuikume => __("\x49\x6e\146\157\162\155\141\164\151\157\x6e\x20\x56\145\x72\x69\146\151\143\141\x74\151\157\x6e", PR__MDL__PANEL), self::ymckmcsiymwqucoq => $yoagueksskqiewiq, "\166\x65\x72\151\x66\x69\x63\141\x74\151\x6f\x6e\x73" => $uiyqiwmskuuaiayw, "\x76\145\x72\151\x66\151\x63\x61\x74\151\157\156\163\137\x74\151\164\154\x65" => __("\126\x65\x72\x69\146\x69\x61\x62\154\145\40\146\151\x65\154\x64\x73", PR__MDL__PANEL)]); iiiccouaaqsyikae: } public function qackogceeomyqyya($aiowsaccomcoikus) { $sqeykgyoooqysmca = $aiowsaccomcoikus->waecsyqmwascmqoa(self::squoamkioomemiyi); $aiowsaccomcoikus->wmiseqaieauskweu(); $siquossayskcwkea = $aiowsaccomcoikus->sacmkccceuywoqsq() + [self::squoamkioomemiyi => $sqeykgyoooqysmca]; return MetaBox::okmsgamiiemyesao($siquossayskcwkea); } public function aqqaucmcssiayceu() : array { $sogksuscggsicmac = []; $mcgmicqwgaaqqqcw = $this->weysguygiseoukqw(Setting::qaoqekkamwkyqcsi, []); $mcgmicqwgaaqqqcw = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x70\141\156\145\x6c\137\165\163\145\x72\137\x70\162\x65\x76\151\x65\167\x73"), $mcgmicqwgaaqqqcw); if (!$mcgmicqwgaaqqqcw) { goto gygwewcqsmwqismo; } $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy([], [self::wacsysugayaeayag => false]); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); if (!($aiowsaccomcoikus instanceof Field && in_array($aokagokqyuysuksm, $mcgmicqwgaaqqqcw, true))) { goto amgsueumgaguceaa; } $sogksuscggsicmac[$aokagokqyuysuksm] = $aiowsaccomcoikus->uikgwcuascgeissw(); amgsueumgaguceaa: mwysseaekcsiesmm: } ukkcmocamwgiqayu: gygwewcqsmwqismo: return $sogksuscggsicmac; } public function oqsmyuwwgoiyaseu($ywmkwiwkosakssii, $mkucggyaiaukqoce) { $mowgokyeuymuwiew = $this->iqqqmsismuacmaqo($mkucggyaiaukqoce, self::meweoeakkqyiwuyy); if (!$mowgokyeuymuwiew) { goto uougwgeyiokewkkm; } $ywmkwiwkosakssii[self::auqoykcmsiauccao] = $mowgokyeuymuwiew; uougwgeyiokewkkm: return $ywmkwiwkosakssii; } public function iqqqmsismuacmaqo($mkucggyaiaukqoce, $uusmaiomayssaecw) { $ogomymegcoacqisg = ManipulateUser::igawqaomowicuayw($uusmaiomayssaecw, $mkucggyaiaukqoce); if (ManipulateValidation::wmcwegoisyeeosqu($ogomymegcoacqisg)) { goto gommacygsykyussk; } $ogomymegcoacqisg = $this->quyeyqecsuasocgs(ManipulateUser::igawqaomowicuayw($uusmaiomayssaecw . self::mswocgcucqoaesaa, $mkucggyaiaukqoce)); gommacygsykyussk: return $ogomymegcoacqisg; } public function quyeyqecsuasocgs($aiooqyausygaasqm) { $ogomymegcoacqisg = null; if (!$aiooqyausygaasqm) { goto ukqocwewouckikso; } $ogomymegcoacqisg = ManipulateArray::get(ManipulateAttachment::uikkssqcoewckces((int) $aiooqyausygaasqm), 0); ukqocwewouckikso: return $ogomymegcoacqisg; } public function uwucmiyokwcakwga($mkucggyaiaukqoce, $icwicymcioeyeyek, $ikgwqyuyckaewsow = []) { $sogksuscggsicmac = $this->muukeaaskkiceykc($icwicymcioeyeyek, $ikgwqyuyckaewsow); if (!(!is_wp_error($sogksuscggsicmac) && $sogksuscggsicmac)) { goto iesekaeqeomeuaui; } $ycoeoaakqyskgykq = ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce); $ecukkacusqswqoem = false; foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!($aiowsaccomcoikus instanceof Field && !$aiowsaccomcoikus instanceof Header)) { goto gamqcwuwkikwqoay; } if (!(!$aiowsaccomcoikus->iokkueaqiswaewyq() || !$aiowsaccomcoikus->wowamsaiqwikqoqa())) { goto ieqesiiageaauiuw; } $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); $euwkouuykmaieusi = ManipulateArray::get($icwicymcioeyeyek, $aokagokqyuysuksm); try { $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x70\141\156\x65\x6c\x5f\x75\163\x65\x72\137\163\x61\166\145\137\146\151\145\x6c\144"), $aiowsaccomcoikus, $euwkouuykmaieusi); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x70\141\156\x65\154\x5f\165\163\145\x72\137\x73\141\166\145\x5f\x66\151\x65\154\144\x5f{$aokagokqyuysuksm}"), $euwkouuykmaieusi, $aiowsaccomcoikus); switch ($aokagokqyuysuksm) { case self::meweoeakkqyiwuyy: case self::kmyciqicaqsgiwga: if (ManipulateValidation::wmcwegoisyeeosqu($euwkouuykmaieusi)) { goto qukocuwgakemmyga; } $aiooqyausygaasqm = ManipulateFile::lausiwamsokkqguo($euwkouuykmaieusi); if (!is_wp_error($aiooqyausygaasqm)) { goto kocqqoyymosmuksu; } $sogksuscggsicmac[self::imkacwmiuiykyuim] = $aiooqyausygaasqm->get_error_message(); goto uqokiksoqcwwqgio; kocqqoyymosmuksu: $ogomymegcoacqisg = $this->quyeyqecsuasocgs($aiooqyausygaasqm); ManipulateUser::ksmqawcowkmegigw($aokagokqyuysuksm, $ogomymegcoacqisg, $ycoeoaakqyskgykq); ManipulateUser::ksmqawcowkmegigw($aokagokqyuysuksm . self::mswocgcucqoaesaa, $aiooqyausygaasqm, $ycoeoaakqyskgykq); $ecukkacusqswqoem = true; uqokiksoqcwwqgio: qukocuwgakemmyga: goto uimeeckqksqeekqq; case self::ccyqsqcgksyckkcm: case self::gmyemowoaqyoqwme: case self::scagkwwiiquocimc: case self::kagqiwogmiguosiw: case self::akoagooquksouwka: $mkucggyaiaukqoce->{$aokagokqyuysuksm} = esc_sql($euwkouuykmaieusi); $ecukkacusqswqoem = true; goto uimeeckqksqeekqq; default: if ($aokagokqyuysuksm === self::iuwkkyuoyukacwwy && !ManipulateValidation::iuceiykuqcqkwsoa($euwkouuykmaieusi) || $aokagokqyuysuksm === self::uymswsomcyoqsegc && !ManipulateValidation::ggkeeqsuoskqeimq($euwkouuykmaieusi)) { goto sioekkmekwygemyc; } ManipulateUser::ksmqawcowkmegigw($aokagokqyuysuksm, esc_attr($euwkouuykmaieusi), $ycoeoaakqyskgykq); goto yiowgigkkwsoqcci; sioekkmekwygemyc: $this->yqkwsouguwgoywcw(sprintf(__("\x25\163\40\151\x73\x20\156\157\164\x20\141\x20\166\141\x6c\x69\144\40\x25\x73", PR__MDL__PANEL), $euwkouuykmaieusi, $aiowsaccomcoikus->uikgwcuascgeissw())); yiowgigkkwsoqcci: goto uimeeckqksqeekqq; } iuuuususuuuaieem: uimeeckqksqeekqq: } catch (Exception $wgaoewqkwgomoaai) { $sogksuscggsicmac = $this->oemauiimmycumcsk(sprintf("\x25\x73\74\x62\x72\76\45\163", __("\146\x61\x69\154\x65\x64\40\x75\160\144\141\x74\145\40\x70\162\x6f\x66\151\154\x65\x3a", PR__MDL__PANEL), $this->kyacickkomkioeyu($wgaoewqkwgomoaai)), 400); } ieqesiiageaauiuw: gamqcwuwkikwqoay: uykousayyomcaeaa: } ucqmumuygcywwqma: if ($ecukkacusqswqoem) { goto mscyggqcesgqqksu; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\124\150\x65\162\145\x20\x69\x73\x20\156\157\164\150\x69\156\147\x20\146\157\162\x20\165\160\144\141\164\x65", PR__MDL__PANEL), 400); goto oyeyomcgkmgymogq; mscyggqcesgqqksu: DecoratorUser::update($mkucggyaiaukqoce); oyeyomcgkmgymogq: iesekaeqeomeuaui: return $sogksuscggsicmac; } public function muukeaaskkiceykc($eyagkkkqkwcuygso, $ikgwqyuyckaewsow) { $sogksuscggsicmac = true; foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto ikuuiauwouuqawuw; } $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); $euwkouuykmaieusi = ManipulateArray::get($eyagkkkqkwcuygso, $aokagokqyuysuksm); if (!$euwkouuykmaieusi && $aiowsaccomcoikus->msmiagueogcsucgc()) { goto kwiggogcgciwuwqk; } $sogksuscggsicmac = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x70\x61\156\x65\154\x5f\160\162\x6f\x66\x69\154\145\137\166\141\x6c\x69\144\141\164\151\157\156\137\x69\156\x70\165\164"), true, $aiowsaccomcoikus, $euwkouuykmaieusi); if (!(!is_wp_error($sogksuscggsicmac) && $sogksuscggsicmac)) { goto yykqaowwsqgqysmq; } switch ($aokagokqyuysuksm) { case self::ccyqsqcgksyckkcm: if (ManipulateValidation::wmcwegoisyeeosqu($euwkouuykmaieusi)) { goto oeocukauoyosicso; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\x54\150\145\x20\125\x72\x6c\x20\171\x6f\x75\40\145\156\x74\x65\x72\145\144\x20\151\x73\x20\156\157\x74\x20\x76\141\154\151\144", PR__MDL__PANEL), 400); oeocukauoyosicso: goto wkwamkgkwykeqkec; case self::akoagooquksouwka: if (ManipulateValidation::qkgmsqgmwoamekyk($euwkouuykmaieusi)) { goto suqceasgacskcmkc; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\x54\x68\x65\40\105\155\141\x69\154\40\x79\x6f\x75\x20\145\x6e\x74\x65\x72\145\144\40\x69\163\x20\156\x6f\164\x20\166\x61\x6c\151\144", PR__MDL__PANEL), 400); suqceasgacskcmkc: goto wkwamkgkwykeqkec; } oimkeqocuguqqsqk: wkwamkgkwykeqkec: yykqaowwsqgqysmq: goto uckewycoogsogwiy; kwiggogcgciwuwqk: $sogksuscggsicmac = $this->oemauiimmycumcsk(sprintf(__("\x25\163\40\151\163\40\x61\40\x72\x65\161\165\151\162\145\40\146\151\145\154\x64", PR__MDL__PANEL), $aiowsaccomcoikus->uikgwcuascgeissw()), 400); goto wsesqmcqoiyyqkqi; uckewycoogsogwiy: ikuuiauwouuqawuw: mogkoocsoeuyoqqa: } wsesqmcqoiyyqkqi: return $sogksuscggsicmac; } public function ugmceccgwaaaigiy($ikgwqyuyckaewsow = [], $ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [ self::meksegaoamowuwoq => null, self::aisguagukaewucii => self::ckmqoekmugkggeym, self::mgsccwumkcawaqcy => self::ALL, self::ackcaikowcokggsc => [], self::wacsysugayaeayag => true, ]); switch ($ywmkwiwkosakssii[self::mgsccwumkcawaqcy]) { case self::kqeokggqcsesmqco: $ikgwqyuyckaewsow = $this->cgaksokgcmycgmeo(); goto yoqakewookqoqacm; case self::ALL: default: $ikgwqyuyckaewsow = array_merge($this->ibaymmaeyoceumgw(), $this->cgaksokgcmycgmeo()); goto yoqakewookqoqacm; } gswcoeiisamakwii: yoqakewookqoqacm: $mkucggyaiaukqoce = $ywmkwiwkosakssii[self::meksegaoamowuwoq]; $ikgwqyuyckaewsow = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\160\x61\x6e\145\154\x5f\x70\162\x6f\146\x69\154\145\x5f\x70\x65\x72\163\157\x6e\x61\154\x5f\146\x69\145\154\144\x73"), $ikgwqyuyckaewsow, $mkucggyaiaukqoce); $kmogksmigykusaem = $ywmkwiwkosakssii[self::wacsysugayaeayag]; $okaqsamoiqqumygk = []; $yyeuwosgwymeocco = []; $gcygmsqykaykyyim = []; if (!$kmogksmigykusaem) { goto yuimwyoywaiiqacs; } $okaqsamoiqqumygk = $this->weysguygiseoukqw(Setting::gyogiiwkqowygoes, $okaqsamoiqqumygk); $yyeuwosgwymeocco = $this->weysguygiseoukqw(Setting::kioockukciugewka, $yyeuwosgwymeocco); $gcygmsqykaykyyim = $this->weysguygiseoukqw(Setting::sweqwcsqywoaomyg, $gcygmsqykaykyyim); yuimwyoywaiiqacs: $sogksuscggsicmac = []; $ooiewiwkegguusum = $ywmkwiwkosakssii[self::ackcaikowcokggsc]; $kwcqeacwucqmwmcw = null; $gsyeosaccwkauuyu = []; foreach ($ikgwqyuyckaewsow as $momcykaoccoymeig => $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto aiccyaswigkaycqk; } $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); $muocgugcqiewywag = true; if (!(!$ooiewiwkegguusum || in_array($aokagokqyuysuksm, $ooiewiwkegguusum, true))) { goto usymasgsyqgsuocg; } switch ($ywmkwiwkosakssii[self::aisguagukaewucii]) { case self::ckmqoekmugkggeym: if (!$kmogksmigykusaem) { goto yqagomygmeoecwey; } if (in_array($aokagokqyuysuksm, $yyeuwosgwymeocco, true)) { goto suqcsgaosywaauuu; } if ($aiowsaccomcoikus instanceof Header) { goto mscgewkcqcoowweg; } $gsyeosaccwkauuyu[$aokagokqyuysuksm] = $momcykaoccoymeig; if (!in_array($aokagokqyuysuksm, $okaqsamoiqqumygk, true)) { goto okkmcocqokkskasy; } $aiowsaccomcoikus->eumecwmqmukqgyea(); okkmcocqokkskasy: if (!in_array($aokagokqyuysuksm, $gcygmsqykaykyyim, true)) { goto esaqcqqwuussiiwo; } $aiowsaccomcoikus->uqiyecacqiyeaqqo(); if (!ManipulateUser::igawqaomowicuayw($aokagokqyuysuksm . self::cigcassgekcaiigg, $mkucggyaiaukqoce)) { goto qiiigwkqeoewsuwm; } $aiowsaccomcoikus->cekywgkuyuckekeg(); qiiigwkqeoewsuwm: esaqcqqwuussiiwo: if (!$mkucggyaiaukqoce) { goto ikqeeaysmqgcgawq; } $aiowsaccomcoikus->iygyugseyaqwywyg($this->ocoqmuuikmocsqqu($mkucggyaiaukqoce, $aokagokqyuysuksm)); ikqeeaysmqgcgawq: mscgewkcqcoowweg: goto wwukgaquuyoissgy; suqcsgaosywaauuu: $muocgugcqiewywag = false; wwukgaquuyoissgy: if (!$aiowsaccomcoikus instanceof Header) { goto qsgqwyqaqiowkmco; } if (!(isset($sogksuscggsicmac[$kwcqeacwucqmwmcw]) && !$gsyeosaccwkauuyu)) { goto gsygwgsiawgmqiyi; } unset($sogksuscggsicmac[$kwcqeacwucqmwmcw]); gsygwgsiawgmqiyi: $gsyeosaccwkauuyu = []; $kwcqeacwucqmwmcw = $momcykaoccoymeig; qsgqwyqaqiowkmco: yqagomygmeoecwey: if (!$muocgugcqiewywag) { goto qikaewekoecykeou; } $sogksuscggsicmac[$aokagokqyuysuksm] = $aiowsaccomcoikus; qikaewekoecykeou: goto iwsmmkqaoksmocok; case self::emgcgiseaoouacge: default: if ($aiowsaccomcoikus instanceof Header) { goto eucqomyqykgoiuge; } $sogksuscggsicmac[$aokagokqyuysuksm] = $aiowsaccomcoikus->uikgwcuascgeissw(); eucqomyqykgoiuge: goto iwsmmkqaoksmocok; } esikeyqyuikmaiek: iwsmmkqaoksmocok: usymasgsyqgsuocg: aiccyaswigkaycqk: emqswoaawgeyosmi: } ocywegekakimmwcq: if (!($kmogksmigykusaem && !$gsyeosaccwkauuyu && isset($sogksuscggsicmac[$kwcqeacwucqmwmcw]))) { goto sqyokemumceysegy; } unset($sogksuscggsicmac[$kwcqeacwucqmwmcw]); sqyokemumceysegy: return $sogksuscggsicmac; } public function ibaymmaeyoceumgw() : array { return [Form::wowyaacgaccyeici(__("\125\163\x65\x72\x20\x49\x6e\x66\x6f", PR__MDL__PANEL)), Form::kimoeccokowuaiic(self::meweoeakkqyiwuyy, __("\x41\166\141\x74\x61\162", PR__MDL__PANEL))->scmsukieucuekmki()->wsacuksekeaemucu(204800), Form::ymuegqgyuagyucws(self::kagqiwogmiguosiw, __("\x46\x69\x72\x73\x74\x20\x4e\141\x6d\x65", PR__MDL__PANEL))->eumecwmqmukqgyea(), Form::ymuegqgyuagyucws(self::scagkwwiiquocimc, __("\x4c\x61\163\164\40\116\141\x6d\x65", PR__MDL__PANEL))->eumecwmqmukqgyea(), Form::ymuegqgyuagyucws(self::gmyemowoaqyoqwme, __("\x4e\151\143\153\40\116\141\155\145", PR__MDL__PANEL))->eumecwmqmukqgyea(), Form::wowyaacgaccyeici(__("\x43\157\x6e\x74\141\143\x74\x20\111\x6e\146\x6f", PR__MDL__PANEL)), Form::ymuegqgyuagyucws(self::akoagooquksouwka, __("\x45\x6d\141\x69\x6c", PR__MDL__PANEL))->saemoowcasogykak(IconFontawesomeInterface::uqmywyokmkwwmuic)->mkiaygiogeeyogqm(false), Form::ymuegqgyuagyucws(self::uymswsomcyoqsegc, __("\x4d\x6f\x62\x69\x6c\x65", PR__MDL__PANEL))->saemoowcasogykak(IconFontawesomeInterface::iowyguocewicoegk)->smigkcmumwkgamkk(), Form::ymuegqgyuagyucws(self::ccyqsqcgksyckkcm, __("\x57\145\x62\x73\151\164\x65", PR__MDL__PANEL))->saemoowcasogykak(IconFontawesomeInterface::yakumqwueukksgcm)->xkgcwkwsqysqamic()]; } public function cgaksokgcmycgmeo() : array { $ikgwqyuyckaewsow = [Form::wowyaacgaccyeici(__("\x56\x65\x72\x69\x66\x69\x63\141\164\151\157\156\40\x49\156\x66\x6f\162\x6d\x61\x74\151\157\x6e", PR__MDL__PANEL)), Form::ymuegqgyuagyucws(self::iuwkkyuoyukacwwy, __("\116\141\x74\151\x6f\156\x61\x6c\40\103\x6f\144\145", PR__MDL__PANEL))->igmaewykumgwoaoy("\155\141\170\154\x65\x6e\147\x74\150", 10)->sqcsseccsaqsoyqy()->suaookwiwycuwmuk("\x6e\141\x74\x69\x6f\x6e\x61\x6c\55\x63\157\x64\x65"), Form::kimoeccokowuaiic(self::kmyciqicaqsgiwga, __("\116\x61\164\x69\x6f\156\x61\x6c\x20\x43\141\x72\144", PR__MDL__PANEL))->esauscaiuyiikmgc()->wsacuksekeaemucu(204800)]; return (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\160\x61\x6e\x65\154\x5f\165\163\x65\x72\x5f\143\x75\163\x74\157\155\x5f\146\x69\x65\154\144\163"), $ikgwqyuyckaewsow); } public function ksoemussqmaacucm($mkucggyaiaukqoce) : array { $yyimiwcuegayoskq = []; $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy([], [self::meksegaoamowuwoq => $mkucggyaiaukqoce, self::wacsysugayaeayag => false]); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!($aiowsaccomcoikus instanceof Field && !$aiowsaccomcoikus instanceof Header)) { goto aueaceeyommgkicu; } $uusmaiomayssaecw = $aiowsaccomcoikus->mwikyscisascoeea(); $yyimiwcuegayoskq[$uusmaiomayssaecw] = $this->ocoqmuuikmocsqqu($mkucggyaiaukqoce, $uusmaiomayssaecw); aueaceeyommgkicu: zayqqeqgcwkekwws: } oqousikwiiqagoyw: return $yyimiwcuegayoskq; } private function ocoqmuuikmocsqqu($mkucggyaiaukqoce, $uusmaiomayssaecw) { if (in_array($uusmaiomayssaecw, [self::meweoeakkqyiwuyy, self::kmyciqicaqsgiwga], true)) { goto ucuoeymyqeokgsya; } if (isset($mkucggyaiaukqoce->{$uusmaiomayssaecw})) { goto mysueeoswqgccmui; } $eqgoocgaqwqcimie = ManipulateUser::igawqaomowicuayw($uusmaiomayssaecw, $mkucggyaiaukqoce); goto egmayaiikwsskgmy; mysueeoswqgccmui: $eqgoocgaqwqcimie = $mkucggyaiaukqoce->{$uusmaiomayssaecw}; egmayaiikwsskgmy: goto yuuyikiacmmueosu; ucuoeymyqeokgsya: $eqgoocgaqwqcimie = $this->iqqqmsismuacmaqo($mkucggyaiaukqoce, $uusmaiomayssaecw); yuuyikiacmmueosu: return $eqgoocgaqwqcimie; } }
