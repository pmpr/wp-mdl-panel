<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62530b7c18a8c             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel; use Exception; use Pmpr\Common\Foundation\Decorator\DecoratorUser; use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox; use Pmpr\Common\Foundation\FormMaker\Front\Field\Field; use Pmpr\Common\Foundation\FormMaker\Front\Field\File; use Pmpr\Common\Foundation\FormMaker\Front\Field\Header; use Pmpr\Common\Foundation\FormMaker\Front\Form; use Pmpr\Common\Foundation\Manipulate\ManipulateFile; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\ManipulateValidation; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateAttachment; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use WP_Error; class User extends Container { const meweoeakkqyiwuyy = "\165\163\x65\x72\x5f\141\x76\141\164\141\162"; const akoagooquksouwka = "\165\163\x65\162\x5f\145\x6d\x61\151\154"; const kagqiwogmiguosiw = "\x66\x69\162\163\x74\137\156\x61\155\x65"; const scagkwwiiquocimc = "\154\x61\x73\x74\137\156\141\155\x65"; const ccyqsqcgksyckkcm = "\165\163\145\162\x5f\165\x72\154"; const gmyemowoaqyoqwme = "\x6e\151\x63\153\156\141\x6d\x65"; const cigcassgekcaiigg = "\137\166\x65\162\151\146\151\x65\144"; const iuwkkyuoyukacwwy = "\x6e\141\164\x69\x6f\x6e\141\x6c\x5f\143\x6f\x64\x65"; const kmyciqicaqsgiwga = "\x6e\x61\164\x69\x6f\156\x61\154\x5f\x63\x61\x72\x64"; public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\147\145\164\137\141\x76\x61\164\x61\162\x5f\x64\141\x74\141", [$this, "\157\x71\163\155\x79\165\x77\x77\147\157\x69\x79\x61\x73\145\165"], 999, 2)->cecaguuoecmccuse($this->ygyygikyocoymgaw("\160\141\156\x65\x6c\x5f\165\163\x65\x72\x5f\x67\145\164\137\x66\x69\x65\x6c\x64\x73"), [$this, "\x75\147\x6d\143\145\143\x63\147\x77\141\x61\141\151\x67\151\x79"], 10, 2); parent::kgquecmsgcouyaya(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\163\150\157\167\x5f\x75\x73\x65\162\137\x70\162\x6f\146\151\x6c\x65", [$this, "\x61\x77\x6b\161\153\x71\x61\x75\x77\167\165\x71\x67\x65\167\x75"])->qcsmikeggeemccuu("\x65\x64\x69\164\137\165\x73\x65\162\x5f\x70\x72\157\x66\x69\154\145", [$this, "\x61\167\153\x71\153\161\141\165\x77\x77\165\x71\x67\x65\x77\165"])->qcsmikeggeemccuu("\x70\145\162\163\x6f\x6e\x61\x6c\x5f\157\160\x74\x69\x6f\x6e\163\137\165\x70\144\141\x74\145", [$this, "\x6d\163\x79\163\x67\161\x65\145\x77\x6b\x71\147\x73\143\x77\x65"])->qcsmikeggeemccuu("\x65\144\x69\164\x5f\x75\163\x65\x72\x5f\x70\x72\157\x66\x69\154\x65\137\x75\x70\144\141\x74\x65", [$this, "\x6d\163\171\163\147\x71\145\145\167\153\161\x67\x73\x63\167\x65"]); parent::wigskegsqequoeks(); } public function msysgqeewkqgscwe($mkucggyaiaukqoce) { if (!DecoratorUser::scmcyesmmikkucie()) { goto csammceowmqwaamq; } $megmggkiokqkcwou = $this->ugmceccgwaaaigiy([self::meksegaoamowuwoq => $mkucggyaiaukqoce]); foreach ($megmggkiokqkcwou as $aiowsaccomcoikus) { if (!$aiowsaccomcoikus->iokkueaqiswaewyq()) { goto qmkaeeomgkwggoyo; } $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea() . self::cigcassgekcaiigg; if (isset($_POST[$aokagokqyuysuksm])) { goto cuumeogeomowqisc; } $eqgoocgaqwqcimie = 0; goto gcckqucukawcasgk; cuumeogeomowqisc: $eqgoocgaqwqcimie = 1; gcckqucukawcasgk: ManipulateUser::ksmqawcowkmegigw($aokagokqyuysuksm, $eqgoocgaqwqcimie, $mkucggyaiaukqoce); qmkaeeomgkwggoyo: uiosisocuwokwkie: } iikiiioqiyegyaak: csammceowmqwaamq: $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy([], [self::meksegaoamowuwoq => $mkucggyaiaukqoce, self::mgsccwumkcawaqcy => self::kqeokggqcsesmqco]); if (!$ikgwqyuyckaewsow) { goto ugqwuugsweqgmywk; } foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!($aiowsaccomcoikus instanceof Field && !$aiowsaccomcoikus instanceof Header)) { goto gmwykkouysyaqwqm; } $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); $eqgoocgaqwqcimie = ManipulateServer::ayueggmoqeeukqmq($aokagokqyuysuksm, ''); $quuosgimaqwocmmk = ManipulateServer::ayueggmoqeeukqmq($aokagokqyuysuksm . self::mswocgcucqoaesaa, ''); if (!($aiowsaccomcoikus instanceof File && is_numeric($quuosgimaqwocmmk))) { goto cogywoqcqummsyus; } ManipulateUser::ksmqawcowkmegigw($aokagokqyuysuksm . self::mswocgcucqoaesaa, $quuosgimaqwocmmk, $mkucggyaiaukqoce); cogywoqcqummsyus: ManipulateUser::ksmqawcowkmegigw($aokagokqyuysuksm, $eqgoocgaqwqcimie, $mkucggyaiaukqoce); gmwykkouysyaqwqm: eekcoeikaeaaeyii: } ocaguquugeamqckq: ugqwuugsweqgmywk: } public function awkqkqauwwuqgewu($mkucggyaiaukqoce) { $uiyqiwmskuuaiayw = []; if (!DecoratorUser::scmcyesmmikkucie()) { goto cscusseysqygsoiy; } $megmggkiokqkcwou = $this->ugmceccgwaaaigiy([], [self::meksegaoamowuwoq => $mkucggyaiaukqoce]); foreach ($megmggkiokqkcwou as $aiowsaccomcoikus) { if (!($aiowsaccomcoikus instanceof Field && !$aiowsaccomcoikus instanceof Header)) { goto uaqackioaiqwcocy; } if (!$aiowsaccomcoikus->iokkueaqiswaewyq()) { goto mkwkkmkgiqiamacc; } $omuyquqsuicwkeic = $aiowsaccomcoikus->mwikyscisascoeea() . self::cigcassgekcaiigg; $ieqeegkcmgkmoiyq = MetaBox::wcwmusaouiqaqeww($omuyquqsuicwkeic); $ieqeegkcmgkmoiyq->iygyugseyaqwywyg(ManipulateUser::igawqaomowicuayw($omuyquqsuicwkeic, $mkucggyaiaukqoce)); $uiyqiwmskuuaiayw[] = ["\x69\x64" => $omuyquqsuicwkeic, "\150\164\155\154" => $ieqeegkcmgkmoiyq->render(), "\x76\141\154\165\x65" => sprintf(__("\126\141\154\165\x65\40\x6f\146\x20\45\163\x3a\40\45\163", PR__MDL__PANEL), $aiowsaccomcoikus->uikgwcuascgeissw(), ManipulateHTML::ciuuiyckmsygceis($aiowsaccomcoikus->qooeaookuemoqecm())), "\x6c\141\x62\145\x6c" => sprintf(__("\126\x65\162\x69\146\171\x20\45\x73", PR__MDL__PANEL), $aiowsaccomcoikus->uikgwcuascgeissw())]; mkwkkmkgiqiamacc: uaqackioaiqwcocy: sockeswygwcskeuq: } uaukmuiwskcemcsw: cscusseysqygsoiy: $yoagueksskqiewiq = []; $gmeiukgosesecyee = $this->ugmceccgwaaaigiy([], [self::meksegaoamowuwoq => $mkucggyaiaukqoce, self::mgsccwumkcawaqcy => self::kqeokggqcsesmqco]); foreach ($gmeiukgosesecyee as $aiowsaccomcoikus) { if (!($aiowsaccomcoikus instanceof Field && !$aiowsaccomcoikus instanceof Header)) { goto cgyakcqgugqgkqiw; } $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); $ssigsiuwyemcwmys = $this->qackogceeomyqyya($aiowsaccomcoikus); if (!$ssigsiuwyemcwmys) { goto uegouoiuyoqkcscg; } $ssigsiuwyemcwmys->qigsyyqgewgskemg("\167\55\x6d\x64\55\x35\60\x20\x77\x2d\154\x67\x2d\x32\x35"); $ssigsiuwyemcwmys->iygyugseyaqwywyg($aiowsaccomcoikus->qooeaookuemoqecm()); $ssigsiuwyemcwmys->usuqmwksoeaayaig(''); $yoagueksskqiewiq[] = ["\151\x64" => $aokagokqyuysuksm, "\150\164\155\154" => $ssigsiuwyemcwmys->render(), "\x6c\x61\x62\x65\154" => $aiowsaccomcoikus->uikgwcuascgeissw()]; uegouoiuyoqkcscg: cgyakcqgugqgkqiw: mggeqkcksyaymcsa: } isgwkwacoyimiauk: if (!$yoagueksskqiewiq) { goto eeyyskqsmquyquqw; } echo $this->iuygowkemiiwqmiw("\x70\x72\157\x66\x69\154\145", [self::qescuiwgsyuikume => __("\111\x6e\146\157\162\x6d\x61\x74\151\x6f\156\40\126\145\x72\151\x66\151\x63\141\164\x69\x6f\x6e", PR__MDL__PANEL), self::ymckmcsiymwqucoq => $yoagueksskqiewiq, "\166\145\162\151\146\x69\143\x61\164\x69\157\x6e\x73" => $uiyqiwmskuuaiayw]); eeyyskqsmquyquqw: } public function qackogceeomyqyya($aiowsaccomcoikus) { $sqeykgyoooqysmca = $aiowsaccomcoikus->waecsyqmwascmqoa(self::squoamkioomemiyi); $aiowsaccomcoikus->wmiseqaieauskweu(); $siquossayskcwkea = $aiowsaccomcoikus->sacmkccceuywoqsq() + [self::squoamkioomemiyi => $sqeykgyoooqysmca]; return MetaBox::okmsgamiiemyesao($siquossayskcwkea); } public function aqqaucmcssiayceu() : array { $sogksuscggsicmac = []; $mcgmicqwgaaqqqcw = $this->weysguygiseoukqw(Setting::qaoqekkamwkyqcsi, []); $mcgmicqwgaaqqqcw = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\160\141\x6e\145\154\137\x75\x73\145\162\x5f\x70\x72\x65\x76\151\145\x77\163"), $mcgmicqwgaaqqqcw); if (!$mcgmicqwgaaqqqcw) { goto iiiccouaaqsyikae; } $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy([], [self::wacsysugayaeayag => false]); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); if (!($aiowsaccomcoikus instanceof Field && in_array($aokagokqyuysuksm, $mcgmicqwgaaqqqcw))) { goto wusciwkkckmqigms; } $sogksuscggsicmac[$aokagokqyuysuksm] = $aiowsaccomcoikus->uikgwcuascgeissw(); wusciwkkckmqigms: kqswcsysqawkcgye: } ewscugeuicukkycc: iiiccouaaqsyikae: return $sogksuscggsicmac; } public function oqsmyuwwgoiyaseu($ywmkwiwkosakssii, $mkucggyaiaukqoce) { $mowgokyeuymuwiew = $this->iqqqmsismuacmaqo($mkucggyaiaukqoce, self::meweoeakkqyiwuyy); if (!$mowgokyeuymuwiew) { goto ukkcmocamwgiqayu; } $ywmkwiwkosakssii[self::auqoykcmsiauccao] = $mowgokyeuymuwiew; ukkcmocamwgiqayu: return $ywmkwiwkosakssii; } public function iqqqmsismuacmaqo($mkucggyaiaukqoce, $uusmaiomayssaecw) { $ogomymegcoacqisg = ManipulateUser::igawqaomowicuayw($uusmaiomayssaecw, $mkucggyaiaukqoce); if (ManipulateValidation::wmcwegoisyeeosqu($ogomymegcoacqisg)) { goto mwysseaekcsiesmm; } $ogomymegcoacqisg = $this->quyeyqecsuasocgs(ManipulateUser::igawqaomowicuayw($uusmaiomayssaecw . self::mswocgcucqoaesaa, $mkucggyaiaukqoce)); mwysseaekcsiesmm: return $ogomymegcoacqisg; } public function quyeyqecsuasocgs($aiooqyausygaasqm) { $ogomymegcoacqisg = null; if (!$aiooqyausygaasqm) { goto amgsueumgaguceaa; } $ogomymegcoacqisg = ManipulateArray::get(ManipulateAttachment::uikkssqcoewckces((int) $aiooqyausygaasqm), 0); amgsueumgaguceaa: return $ogomymegcoacqisg; } public function uwucmiyokwcakwga($mkucggyaiaukqoce, $icwicymcioeyeyek, $ikgwqyuyckaewsow = []) { $sogksuscggsicmac = $this->muukeaaskkiceykc($icwicymcioeyeyek, $ikgwqyuyckaewsow); if (!(!is_wp_error($sogksuscggsicmac) && $sogksuscggsicmac)) { goto ieqesiiageaauiuw; } $ycoeoaakqyskgykq = ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce); $ecukkacusqswqoem = false; foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!($aiowsaccomcoikus instanceof Field && !$aiowsaccomcoikus instanceof Header)) { goto qukocuwgakemmyga; } if (!(!$aiowsaccomcoikus->iokkueaqiswaewyq() || !$aiowsaccomcoikus->wowamsaiqwikqoqa())) { goto uqokiksoqcwwqgio; } $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); $euwkouuykmaieusi = ManipulateArray::get($icwicymcioeyeyek, $aokagokqyuysuksm); try { $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x70\x61\x6e\145\154\x5f\x75\163\145\162\137\x73\141\166\145\137\146\x69\x65\x6c\144"), $aiowsaccomcoikus, $euwkouuykmaieusi); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\160\141\156\x65\154\x5f\165\163\145\162\x5f\x73\x61\x76\x65\137\x66\151\x65\154\144\137{$aokagokqyuysuksm}"), $euwkouuykmaieusi, $aiowsaccomcoikus); switch ($aokagokqyuysuksm) { case self::meweoeakkqyiwuyy: case self::kmyciqicaqsgiwga: if (ManipulateValidation::wmcwegoisyeeosqu($euwkouuykmaieusi)) { goto uimeeckqksqeekqq; } $aiooqyausygaasqm = ManipulateFile::lausiwamsokkqguo($euwkouuykmaieusi); if (!is_wp_error($aiooqyausygaasqm)) { goto ucqmumuygcywwqma; } $sogksuscggsicmac[self::imkacwmiuiykyuim] = $aiooqyausygaasqm->get_error_message(); goto uykousayyomcaeaa; ucqmumuygcywwqma: $ogomymegcoacqisg = $this->quyeyqecsuasocgs($aiooqyausygaasqm); ManipulateUser::ksmqawcowkmegigw($aokagokqyuysuksm, $ogomymegcoacqisg, $ycoeoaakqyskgykq); ManipulateUser::ksmqawcowkmegigw($aokagokqyuysuksm . self::mswocgcucqoaesaa, $aiooqyausygaasqm, $ycoeoaakqyskgykq); $ecukkacusqswqoem = true; uykousayyomcaeaa: uimeeckqksqeekqq: goto gommacygsykyussk; case self::ccyqsqcgksyckkcm: case self::gmyemowoaqyoqwme: case self::scagkwwiiquocimc: case self::kagqiwogmiguosiw: case self::akoagooquksouwka: $mkucggyaiaukqoce->{$aokagokqyuysuksm} = esc_sql($euwkouuykmaieusi); $ecukkacusqswqoem = true; goto gommacygsykyussk; default: if ($aokagokqyuysuksm === self::iuwkkyuoyukacwwy && !ManipulateValidation::iuceiykuqcqkwsoa($euwkouuykmaieusi)) { goto iuuuususuuuaieem; } ManipulateUser::ksmqawcowkmegigw($aokagokqyuysuksm, esc_attr($euwkouuykmaieusi), $ycoeoaakqyskgykq); goto kocqqoyymosmuksu; iuuuususuuuaieem: $this->yqkwsouguwgoywcw(sprintf(__("\45\163\40\x69\x73\40\156\157\x74\x20\x61\40\x76\141\154\x69\x64\x20\x25\163", PR__MDL__PANEL), $euwkouuykmaieusi, $aiowsaccomcoikus->uikgwcuascgeissw())); kocqqoyymosmuksu: goto gommacygsykyussk; } ukqocwewouckikso: gommacygsykyussk: } catch (Exception $wgaoewqkwgomoaai) { $sogksuscggsicmac = $this->oemauiimmycumcsk(sprintf("\x25\163\x3c\142\162\x3e\45\163", __("\146\141\151\154\145\144\x20\165\x70\144\141\164\x65\x20\160\x72\x6f\x66\x69\154\x65\72", PR__MDL__PANEL), $this->kyacickkomkioeyu($wgaoewqkwgomoaai)), 400); } uqokiksoqcwwqgio: qukocuwgakemmyga: uougwgeyiokewkkm: } gygwewcqsmwqismo: if ($ecukkacusqswqoem) { goto sioekkmekwygemyc; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\x54\150\145\162\x65\x20\151\163\x20\x6e\x6f\x74\150\151\156\147\40\146\157\162\40\165\160\x64\x61\x74\145", PR__MDL__PANEL), 400); goto yiowgigkkwsoqcci; sioekkmekwygemyc: DecoratorUser::update($mkucggyaiaukqoce); yiowgigkkwsoqcci: ieqesiiageaauiuw: return $sogksuscggsicmac; } public function muukeaaskkiceykc($eyagkkkqkwcuygso, $ikgwqyuyckaewsow) { $sogksuscggsicmac = true; foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto suqceasgacskcmkc; } $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); $euwkouuykmaieusi = ManipulateArray::get($eyagkkkqkwcuygso, $aokagokqyuysuksm); if (!$euwkouuykmaieusi && $aiowsaccomcoikus->msmiagueogcsucgc()) { goto oimkeqocuguqqsqk; } $sogksuscggsicmac = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\160\x61\x6e\x65\154\137\160\x72\157\x66\151\154\x65\137\x76\141\154\151\x64\x61\x74\x69\157\x6e\x5f\151\156\160\165\x74"), true, $aiowsaccomcoikus, $euwkouuykmaieusi); if (!(!is_wp_error($sogksuscggsicmac) && $sogksuscggsicmac)) { goto wkwamkgkwykeqkec; } switch ($aokagokqyuysuksm) { case self::ccyqsqcgksyckkcm: if (ManipulateValidation::wmcwegoisyeeosqu($euwkouuykmaieusi)) { goto wsesqmcqoiyyqkqi; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\x54\x68\x65\x20\x55\x72\154\40\171\157\x75\x20\145\156\x74\145\162\145\144\40\x69\163\x20\x6e\x6f\x74\40\166\x61\154\151\x64", PR__MDL__PANEL), 400); wsesqmcqoiyyqkqi: goto oyeyomcgkmgymogq; case self::akoagooquksouwka: if (ManipulateValidation::qkgmsqgmwoamekyk($euwkouuykmaieusi)) { goto mogkoocsoeuyoqqa; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\124\150\x65\x20\105\x6d\141\151\x6c\x20\x79\x6f\165\x20\x65\156\x74\145\162\145\x64\x20\x69\x73\x20\x6e\157\164\40\166\141\154\151\x64", PR__MDL__PANEL), 400); mogkoocsoeuyoqqa: goto oyeyomcgkmgymogq; } iesekaeqeomeuaui: oyeyomcgkmgymogq: wkwamkgkwykeqkec: goto oeocukauoyosicso; oimkeqocuguqqsqk: $sogksuscggsicmac = $this->oemauiimmycumcsk(sprintf(__("\45\x73\x20\x69\x73\x20\141\x20\x72\145\x71\x75\x69\x72\x65\40\146\151\145\x6c\x64", PR__MDL__PANEL), $aiowsaccomcoikus->uikgwcuascgeissw()), 400); goto gamqcwuwkikwqoay; oeocukauoyosicso: suqceasgacskcmkc: mscyggqcesgqqksu: } gamqcwuwkikwqoay: return $sogksuscggsicmac; } public function ugmceccgwaaaigiy($ikgwqyuyckaewsow = [], $ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [ self::meksegaoamowuwoq => null, self::aisguagukaewucii => self::ckmqoekmugkggeym, self::mgsccwumkcawaqcy => self::ALL, self::ackcaikowcokggsc => [], self::wacsysugayaeayag => true, ]); switch ($ywmkwiwkosakssii[self::mgsccwumkcawaqcy]) { case self::kqeokggqcsesmqco: $ikgwqyuyckaewsow = $this->cgaksokgcmycgmeo(); goto yykqaowwsqgqysmq; case self::ALL: default: $ikgwqyuyckaewsow = array_merge($this->ibaymmaeyoceumgw(), $this->cgaksokgcmycgmeo()); goto yykqaowwsqgqysmq; } kwiggogcgciwuwqk: yykqaowwsqgqysmq: $mkucggyaiaukqoce = $ywmkwiwkosakssii[self::meksegaoamowuwoq]; $ikgwqyuyckaewsow = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\160\x61\x6e\x65\154\x5f\x70\162\x6f\x66\151\154\145\137\x70\x65\x72\163\x6f\156\x61\x6c\x5f\146\151\x65\154\144\163"), $ikgwqyuyckaewsow, $mkucggyaiaukqoce); $kmogksmigykusaem = $ywmkwiwkosakssii[self::wacsysugayaeayag]; $okaqsamoiqqumygk = []; $yyeuwosgwymeocco = []; $gcygmsqykaykyyim = []; if (!$kmogksmigykusaem) { goto uckewycoogsogwiy; } $okaqsamoiqqumygk = $this->weysguygiseoukqw(Setting::gyogiiwkqowygoes, $okaqsamoiqqumygk); $yyeuwosgwymeocco = $this->weysguygiseoukqw(Setting::kioockukciugewka, $yyeuwosgwymeocco); $gcygmsqykaykyyim = $this->weysguygiseoukqw(Setting::sweqwcsqywoaomyg, $gcygmsqykaykyyim); uckewycoogsogwiy: $sogksuscggsicmac = []; $ooiewiwkegguusum = $ywmkwiwkosakssii[self::ackcaikowcokggsc]; $kwcqeacwucqmwmcw = null; $gsyeosaccwkauuyu = []; foreach ($ikgwqyuyckaewsow as $momcykaoccoymeig => $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto yqagomygmeoecwey; } $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); $muocgugcqiewywag = true; if (!(!$ooiewiwkegguusum || in_array($aokagokqyuysuksm, $ooiewiwkegguusum))) { goto qsgqwyqaqiowkmco; } switch ($ywmkwiwkosakssii[self::aisguagukaewucii]) { case self::ckmqoekmugkggeym: if (!$kmogksmigykusaem) { goto suqcsgaosywaauuu; } if (in_array($aokagokqyuysuksm, $yyeuwosgwymeocco)) { goto qiiigwkqeoewsuwm; } if ($aiowsaccomcoikus instanceof Header) { goto okkmcocqokkskasy; } $gsyeosaccwkauuyu[$aokagokqyuysuksm] = $momcykaoccoymeig; if (!in_array($aokagokqyuysuksm, $okaqsamoiqqumygk)) { goto ocywegekakimmwcq; } $aiowsaccomcoikus->eumecwmqmukqgyea(); ocywegekakimmwcq: if (!in_array($aokagokqyuysuksm, $gcygmsqykaykyyim)) { goto iwsmmkqaoksmocok; } $aiowsaccomcoikus->uqiyecacqiyeaqqo(); if (!ManipulateUser::igawqaomowicuayw($aokagokqyuysuksm . self::cigcassgekcaiigg, $mkucggyaiaukqoce)) { goto emqswoaawgeyosmi; } $aiowsaccomcoikus->cekywgkuyuckekeg(); emqswoaawgeyosmi: iwsmmkqaoksmocok: if (!$mkucggyaiaukqoce) { goto esikeyqyuikmaiek; } $aiowsaccomcoikus->iygyugseyaqwywyg($this->ocoqmuuikmocsqqu($mkucggyaiaukqoce, $aokagokqyuysuksm)); esikeyqyuikmaiek: okkmcocqokkskasy: goto esaqcqqwuussiiwo; qiiigwkqeoewsuwm: $muocgugcqiewywag = false; esaqcqqwuussiiwo: if (!$aiowsaccomcoikus instanceof Header) { goto mscgewkcqcoowweg; } if (!(isset($sogksuscggsicmac[$kwcqeacwucqmwmcw]) && !$gsyeosaccwkauuyu)) { goto ikqeeaysmqgcgawq; } unset($sogksuscggsicmac[$kwcqeacwucqmwmcw]); ikqeeaysmqgcgawq: $gsyeosaccwkauuyu = []; $kwcqeacwucqmwmcw = $momcykaoccoymeig; mscgewkcqcoowweg: suqcsgaosywaauuu: if (!$muocgugcqiewywag) { goto wwukgaquuyoissgy; } $sogksuscggsicmac[$aokagokqyuysuksm] = $aiowsaccomcoikus; wwukgaquuyoissgy: goto gswcoeiisamakwii; case self::emgcgiseaoouacge: default: if ($aiowsaccomcoikus instanceof Header) { goto gsygwgsiawgmqiyi; } $sogksuscggsicmac[$aokagokqyuysuksm] = $aiowsaccomcoikus->uikgwcuascgeissw(); gsygwgsiawgmqiyi: goto gswcoeiisamakwii; } yuimwyoywaiiqacs: gswcoeiisamakwii: qsgqwyqaqiowkmco: yqagomygmeoecwey: yoqakewookqoqacm: } ikuuiauwouuqawuw: if (!($kmogksmigykusaem && !$gsyeosaccwkauuyu && isset($sogksuscggsicmac[$kwcqeacwucqmwmcw]))) { goto qikaewekoecykeou; } unset($sogksuscggsicmac[$kwcqeacwucqmwmcw]); qikaewekoecykeou: return $sogksuscggsicmac; } public function ibaymmaeyoceumgw() : array { return [Form::wowyaacgaccyeici(__("\125\163\145\162\x20\111\156\x66\157", PR__MDL__PANEL)), Form::kimoeccokowuaiic(self::meweoeakkqyiwuyy, __("\x41\166\x61\x74\x61\162", PR__MDL__PANEL), sprintf(__("\101\x63\143\145\x70\x74\x65\x64\x20\x66\x69\154\x65\164\x79\x70\145\x73\40\151\163\x20\45\x73", PR__MDL__PANEL), "\x2e\160\x6e\147\54\40\x2e\152\160\x67\54\x20\x2e\x6a\x70\145\x67"))->scmsukieucuekmki(), Form::ymuegqgyuagyucws(self::kagqiwogmiguosiw, __("\106\x69\162\163\x74\40\x4e\x61\x6d\145", PR__MDL__PANEL))->eumecwmqmukqgyea(), Form::ymuegqgyuagyucws(self::scagkwwiiquocimc, __("\114\x61\163\164\40\116\141\155\x65", PR__MDL__PANEL))->eumecwmqmukqgyea(), Form::ymuegqgyuagyucws(self::gmyemowoaqyoqwme, __("\116\x69\x63\x6b\40\x4e\141\x6d\x65", PR__MDL__PANEL))->eumecwmqmukqgyea(), Form::wowyaacgaccyeici(__("\103\157\x6e\x74\x61\143\164\x20\111\156\146\x6f", PR__MDL__PANEL)), Form::ymuegqgyuagyucws(self::akoagooquksouwka, __("\x43\x6f\156\x74\x61\143\x74\x20\x45\x6d\141\x69\x6c", PR__MDL__PANEL))->saemoowcasogykak(IconFontawesomeInterface::uqmywyokmkwwmuic)->ccmwycqioaicegoc(__("\127\x65\47\154\154\40\x6e\145\x76\145\162\40\163\150\141\x72\x65\x20\171\x6f\165\x72\x20\x65\155\x61\x69\154\x20\x77\151\164\x68\40\x61\156\x79\x6f\x6e\145\x20\145\154\x73\x65\56", PR__MDL__PANEL))->mkiaygiogeeyogqm(false), Form::ymuegqgyuagyucws(self::ccyqsqcgksyckkcm, __("\x57\145\x62\x73\151\164\x65", PR__MDL__PANEL))->saemoowcasogykak(IconFontawesomeInterface::yakumqwueukksgcm)->xkgcwkwsqysqamic()]; } public function cgaksokgcmycgmeo() : array { $ikgwqyuyckaewsow = [Form::wowyaacgaccyeici(__("\126\x65\x72\x69\x66\151\143\x61\x74\151\x6f\156\40\x49\x6e\x66\157\x72\155\x61\164\151\x6f\156", PR__MDL__PANEL)), Form::ymuegqgyuagyucws(self::iuwkkyuoyukacwwy, __("\116\x61\x74\x69\157\156\141\154\40\x43\x6f\x64\x65", PR__MDL__PANEL))->igmaewykumgwoaoy("\x6d\x61\170\154\x65\x6e\147\164\x68", 10)->sqcsseccsaqsoyqy()->suaookwiwycuwmuk("\156\141\x74\151\157\156\141\154\55\143\x6f\144\145"), Form::kimoeccokowuaiic(self::kmyciqicaqsgiwga, __("\116\x61\x74\151\157\x6e\141\154\x20\x43\141\x72\x64", PR__MDL__PANEL), __("\120\x6c\145\141\x73\x65\40\165\x70\x6c\x6f\141\x64\x20\171\157\165\162\40\x6e\x61\164\x69\157\x6e\x61\154\40\x63\x61\x72\144\40\x69\155\x61\147\145", PR__MDL__PANEL))->qcgocuceocquqcuw("\x61\x63\x63\145\x70\x74", "\x2e\x6a\160\147\x2c\x20\x2e\160\x6e\147")]; return (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\160\x61\156\145\x6c\x5f\165\163\x65\x72\x5f\x63\165\163\x74\x6f\155\137\146\x69\145\154\144\163"), $ikgwqyuyckaewsow); } public function ksoemussqmaacucm($mkucggyaiaukqoce) : array { $yyimiwcuegayoskq = []; $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy([], [self::meksegaoamowuwoq => $mkucggyaiaukqoce, self::wacsysugayaeayag => false]); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!($aiowsaccomcoikus instanceof Field && !$aiowsaccomcoikus instanceof Header)) { goto aiccyaswigkaycqk; } $uusmaiomayssaecw = $aiowsaccomcoikus->mwikyscisascoeea(); $yyimiwcuegayoskq[$uusmaiomayssaecw] = $this->ocoqmuuikmocsqqu($mkucggyaiaukqoce, $uusmaiomayssaecw); aiccyaswigkaycqk: usymasgsyqgsuocg: } eucqomyqykgoiuge: return $yyimiwcuegayoskq; } private function ocoqmuuikmocsqqu($mkucggyaiaukqoce, $uusmaiomayssaecw) { if (in_array($uusmaiomayssaecw, [self::meweoeakkqyiwuyy, self::kmyciqicaqsgiwga])) { goto zayqqeqgcwkekwws; } if (isset($mkucggyaiaukqoce->{$uusmaiomayssaecw})) { goto sqyokemumceysegy; } $eqgoocgaqwqcimie = ManipulateUser::igawqaomowicuayw($uusmaiomayssaecw, $mkucggyaiaukqoce); goto oqousikwiiqagoyw; sqyokemumceysegy: $eqgoocgaqwqcimie = $mkucggyaiaukqoce->{$uusmaiomayssaecw}; oqousikwiiqagoyw: goto aueaceeyommgkicu; zayqqeqgcwkekwws: $eqgoocgaqwqcimie = $this->iqqqmsismuacmaqo($mkucggyaiaukqoce, $uusmaiomayssaecw); aueaceeyommgkicu: return $eqgoocgaqwqcimie; } }
