<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6241d63ca9d63             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel; use Exception; use Pmpr\Common\Foundation\Decorator\DecoratorUser; use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox; use Pmpr\Common\Foundation\FormMaker\Front\Field\Field; use Pmpr\Common\Foundation\FormMaker\Front\Field\File; use Pmpr\Common\Foundation\FormMaker\Front\Field\Header; use Pmpr\Common\Foundation\FormMaker\Front\Form; use Pmpr\Common\Foundation\Manipulate\ManipulateFile; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\ManipulateValidation; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateAttachment; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use WP_Error; class User extends Container { const meweoeakkqyiwuyy = "\x75\163\145\162\x5f\x61\x76\141\x74\x61\x72"; const akoagooquksouwka = "\165\x73\x65\162\137\x65\x6d\141\x69\x6c"; const kagqiwogmiguosiw = "\146\x69\x72\163\164\137\x6e\141\x6d\145"; const scagkwwiiquocimc = "\x6c\x61\163\164\137\156\x61\x6d\x65"; const ccyqsqcgksyckkcm = "\x75\163\x65\x72\137\x75\x72\154"; const gmyemowoaqyoqwme = "\x6e\x69\143\153\x6e\141\x6d\145"; const cigcassgekcaiigg = "\x5f\x76\145\x72\x69\x66\151\x65\x64"; const iuwkkyuoyukacwwy = "\156\141\164\x69\157\x6e\141\154\x5f\143\x6f\x64\145"; const kmyciqicaqsgiwga = "\x6e\141\164\151\x6f\x6e\141\154\137\x63\x61\162\x64"; public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x67\145\164\137\x61\x76\141\164\141\x72\x5f\x64\141\x74\x61", [$this, "\157\x71\163\x6d\x79\165\x77\x77\x67\157\x69\x79\141\163\x65\165"], 999, 2)->cecaguuoecmccuse($this->ygyygikyocoymgaw("\160\141\156\x65\154\x5f\165\163\x65\x72\137\x67\x65\x74\137\146\151\145\x6c\x64\x73"), [$this, "\165\147\155\143\x65\143\143\x67\x77\x61\141\141\151\147\x69\x79"], 10, 2); parent::kgquecmsgcouyaya(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x73\x68\157\167\x5f\165\163\x65\x72\137\160\x72\x6f\x66\151\x6c\x65", [$this, "\x61\167\153\x71\x6b\x71\141\x75\x77\167\x75\x71\147\145\x77\x75"])->qcsmikeggeemccuu("\x65\144\x69\x74\x5f\165\163\145\x72\137\160\162\157\x66\151\154\145", [$this, "\x61\167\x6b\161\x6b\161\141\165\x77\x77\165\x71\147\x65\167\165"])->qcsmikeggeemccuu("\160\x65\x72\163\x6f\x6e\141\154\137\x6f\x70\x74\x69\157\156\163\x5f\165\160\x64\x61\x74\x65", [$this, "\x6d\x73\x79\x73\x67\161\x65\x65\167\153\x71\x67\x73\143\x77\x65"])->qcsmikeggeemccuu("\x65\144\151\164\x5f\x75\163\145\x72\137\x70\162\x6f\x66\151\154\x65\x5f\x75\x70\144\141\x74\x65", [$this, "\x6d\x73\x79\163\147\x71\x65\x65\x77\x6b\x71\x67\x73\x63\x77\145"]); parent::wigskegsqequoeks(); } public function msysgqeewkqgscwe($mkucggyaiaukqoce) { if (!DecoratorUser::scmcyesmmikkucie()) { goto qicwaskssogcokgm; } $megmggkiokqkcwou = $this->ugmceccgwaaaigiy([self::meksegaoamowuwoq => $mkucggyaiaukqoce]); foreach ($megmggkiokqkcwou as $aiowsaccomcoikus) { if (!$aiowsaccomcoikus->iokkueaqiswaewyq()) { goto usquiuuyiyqaeyiu; } $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea() . self::cigcassgekcaiigg; if (isset($_POST[$aokagokqyuysuksm])) { goto hoeeyiowekaeemko; } $eqgoocgaqwqcimie = 0; goto kymkucucyeoeikim; hoeeyiowekaeemko: $eqgoocgaqwqcimie = 1; kymkucucyeoeikim: ManipulateUser::ksmqawcowkmegigw($aokagokqyuysuksm, $eqgoocgaqwqcimie, $mkucggyaiaukqoce); usquiuuyiyqaeyiu: iekumemscwieugqw: } foeeqckqsyockkak: qicwaskssogcokgm: $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy([], [self::meksegaoamowuwoq => $mkucggyaiaukqoce, self::mgsccwumkcawaqcy => self::kqeokggqcsesmqco]); if (!$ikgwqyuyckaewsow) { goto aegysmeecgcgayyw; } foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!($aiowsaccomcoikus instanceof Field && !$aiowsaccomcoikus instanceof Header)) { goto gaomwagkcciesyqy; } $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); $eqgoocgaqwqcimie = ManipulateServer::ayueggmoqeeukqmq($aokagokqyuysuksm, ''); $quuosgimaqwocmmk = ManipulateServer::ayueggmoqeeukqmq($aokagokqyuysuksm . self::mswocgcucqoaesaa, ''); if (!($aiowsaccomcoikus instanceof File && is_numeric($quuosgimaqwocmmk))) { goto esuiysskoweawsue; } ManipulateUser::ksmqawcowkmegigw($aokagokqyuysuksm . self::mswocgcucqoaesaa, $quuosgimaqwocmmk, $mkucggyaiaukqoce); esuiysskoweawsue: ManipulateUser::ksmqawcowkmegigw($aokagokqyuysuksm, $eqgoocgaqwqcimie, $mkucggyaiaukqoce); gaomwagkcciesyqy: uqqaiagaeqgqgaiy: } uguigkcmukuouway: aegysmeecgcgayyw: } public function awkqkqauwwuqgewu($mkucggyaiaukqoce) { $uiyqiwmskuuaiayw = []; if (!DecoratorUser::scmcyesmmikkucie()) { goto cgiscsqwwgqqaeqi; } $megmggkiokqkcwou = $this->ugmceccgwaaaigiy([], [self::meksegaoamowuwoq => $mkucggyaiaukqoce]); foreach ($megmggkiokqkcwou as $aiowsaccomcoikus) { if (!($aiowsaccomcoikus instanceof Field && !$aiowsaccomcoikus instanceof Header)) { goto skkamseieeusycye; } if (!$aiowsaccomcoikus->iokkueaqiswaewyq()) { goto wiysogeqqwgioyka; } $omuyquqsuicwkeic = $aiowsaccomcoikus->mwikyscisascoeea() . self::cigcassgekcaiigg; $ieqeegkcmgkmoiyq = MetaBox::wcwmusaouiqaqeww($omuyquqsuicwkeic); $ieqeegkcmgkmoiyq->iygyugseyaqwywyg(ManipulateUser::igawqaomowicuayw($omuyquqsuicwkeic, $mkucggyaiaukqoce)); $uiyqiwmskuuaiayw[] = ["\151\144" => $omuyquqsuicwkeic, "\x68\x74\x6d\x6c" => $ieqeegkcmgkmoiyq->render(), "\166\141\x6c\x75\145" => sprintf(__("\x56\141\154\x75\x65\x20\157\146\x20\45\x73\72\x20\x25\x73", PR__MDL__PANEL), $aiowsaccomcoikus->uikgwcuascgeissw(), ManipulateHTML::ciuuiyckmsygceis($aiowsaccomcoikus->qooeaookuemoqecm())), "\154\x61\x62\x65\154" => sprintf(__("\x56\x65\162\151\x66\x79\x20\x25\163", PR__MDL__PANEL), $aiowsaccomcoikus->uikgwcuascgeissw())]; wiysogeqqwgioyka: skkamseieeusycye: soaccwqimeksgwiw: } suqkuqygkkgwyaie: cgiscsqwwgqqaeqi: $yoagueksskqiewiq = []; $gmeiukgosesecyee = $this->ugmceccgwaaaigiy([], [self::meksegaoamowuwoq => $mkucggyaiaukqoce, self::mgsccwumkcawaqcy => self::kqeokggqcsesmqco]); foreach ($gmeiukgosesecyee as $aiowsaccomcoikus) { if (!($aiowsaccomcoikus instanceof Field && !$aiowsaccomcoikus instanceof Header)) { goto cmegwsegsosyqcai; } $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); $ssigsiuwyemcwmys = $this->qackogceeomyqyya($aiowsaccomcoikus); if (!$ssigsiuwyemcwmys) { goto ewymsmkkiksgwysk; } $ssigsiuwyemcwmys->qigsyyqgewgskemg("\167\x2d\155\x64\x2d\65\60\x20\x77\x2d\154\x67\x2d\62\65"); $ssigsiuwyemcwmys->iygyugseyaqwywyg($aiowsaccomcoikus->qooeaookuemoqecm()); $ssigsiuwyemcwmys->usuqmwksoeaayaig(''); $yoagueksskqiewiq[] = ["\x69\x64" => $aokagokqyuysuksm, "\x68\x74\x6d\x6c" => $ssigsiuwyemcwmys->render(), "\154\141\x62\x65\154" => $aiowsaccomcoikus->uikgwcuascgeissw()]; ewymsmkkiksgwysk: cmegwsegsosyqcai: giaacoqqqsekcayy: } syiqkaasoueowwui: if (!$yoagueksskqiewiq) { goto wmywuusgukmmaams; } echo $this->iuygowkemiiwqmiw("\x70\162\x6f\146\151\x6c\145", [self::qescuiwgsyuikume => __("\111\x6e\146\157\x72\155\141\164\x69\x6f\x6e\x20\126\145\x72\x69\146\151\x63\141\x74\151\x6f\156", PR__MDL__PANEL), self::ymckmcsiymwqucoq => $yoagueksskqiewiq, "\166\x65\162\x69\x66\151\143\x61\164\151\157\x6e\x73" => $uiyqiwmskuuaiayw]); wmywuusgukmmaams: } public function qackogceeomyqyya($aiowsaccomcoikus) { $sqeykgyoooqysmca = $aiowsaccomcoikus->waecsyqmwascmqoa(self::squoamkioomemiyi); $aiowsaccomcoikus->wmiseqaieauskweu(); $siquossayskcwkea = $aiowsaccomcoikus->sacmkccceuywoqsq() + [self::squoamkioomemiyi => $sqeykgyoooqysmca]; return MetaBox::okmsgamiiemyesao($siquossayskcwkea); } public function aqqaucmcssiayceu() : array { $sogksuscggsicmac = []; $mcgmicqwgaaqqqcw = $this->weysguygiseoukqw(Setting::qaoqekkamwkyqcsi, []); $mcgmicqwgaaqqqcw = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\160\x61\x6e\x65\x6c\x5f\165\163\x65\x72\x5f\160\x72\145\166\151\145\167\163"), $mcgmicqwgaaqqqcw); if (!$mcgmicqwgaaqqqcw) { goto scisgsyemmsekgos; } $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy([], [self::wacsysugayaeayag => false]); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); if (!($aiowsaccomcoikus instanceof Field && in_array($aokagokqyuysuksm, $mcgmicqwgaaqqqcw))) { goto egyyiccaeeiooaua; } $sogksuscggsicmac[$aokagokqyuysuksm] = $aiowsaccomcoikus->uikgwcuascgeissw(); egyyiccaeeiooaua: ooeausyowguqicuo: } gkyawqqcmigqgaiq: scisgsyemmsekgos: return $sogksuscggsicmac; } public function oqsmyuwwgoiyaseu($ywmkwiwkosakssii, $mkucggyaiaukqoce) { $mowgokyeuymuwiew = $this->iqqqmsismuacmaqo($mkucggyaiaukqoce, self::meweoeakkqyiwuyy); if (!$mowgokyeuymuwiew) { goto cewmoqyysgsmuiya; } $ywmkwiwkosakssii[self::auqoykcmsiauccao] = $mowgokyeuymuwiew; cewmoqyysgsmuiya: return $ywmkwiwkosakssii; } public function iqqqmsismuacmaqo($mkucggyaiaukqoce, $uusmaiomayssaecw) { $ogomymegcoacqisg = ManipulateUser::igawqaomowicuayw($uusmaiomayssaecw, $mkucggyaiaukqoce); if (ManipulateValidation::wmcwegoisyeeosqu($ogomymegcoacqisg)) { goto igooksugieceoege; } $ogomymegcoacqisg = $this->quyeyqecsuasocgs(ManipulateUser::igawqaomowicuayw($uusmaiomayssaecw . self::mswocgcucqoaesaa, $mkucggyaiaukqoce)); igooksugieceoege: return $ogomymegcoacqisg; } public function quyeyqecsuasocgs($aiooqyausygaasqm) { $ogomymegcoacqisg = null; if (!$aiooqyausygaasqm) { goto omqiayeucoioqoao; } $ogomymegcoacqisg = ManipulateArray::get(ManipulateAttachment::uikkssqcoewckces((int) $aiooqyausygaasqm), 0); omqiayeucoioqoao: return $ogomymegcoacqisg; } public function uwucmiyokwcakwga($mkucggyaiaukqoce, $icwicymcioeyeyek, $ikgwqyuyckaewsow = []) { $sogksuscggsicmac = $this->muukeaaskkiceykc($icwicymcioeyeyek, $ikgwqyuyckaewsow); if (!(!is_wp_error($sogksuscggsicmac) && $sogksuscggsicmac)) { goto wagqgeqymeqoeuyi; } $ycoeoaakqyskgykq = ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce); $ecukkacusqswqoem = false; foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!($aiowsaccomcoikus instanceof Field && !$aiowsaccomcoikus instanceof Header)) { goto eeauyscekuckoues; } if (!(!$aiowsaccomcoikus->iokkueaqiswaewyq() || !$aiowsaccomcoikus->wowamsaiqwikqoqa())) { goto mwsmsguqqkcwiiuk; } $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); $euwkouuykmaieusi = ManipulateArray::get($icwicymcioeyeyek, $aokagokqyuysuksm); try { $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x70\141\x6e\145\154\x5f\x75\x73\x65\x72\137\163\x61\x76\x65\137\x66\151\x65\154\x64"), $aiowsaccomcoikus, $euwkouuykmaieusi); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\160\141\x6e\145\x6c\x5f\x75\163\145\162\137\163\x61\x76\x65\137\146\151\x65\x6c\144\x5f{$aokagokqyuysuksm}"), $euwkouuykmaieusi, $aiowsaccomcoikus); switch ($aokagokqyuysuksm) { case self::meweoeakkqyiwuyy: case self::kmyciqicaqsgiwga: if (ManipulateValidation::wmcwegoisyeeosqu($euwkouuykmaieusi)) { goto wakmayaoqoskekqy; } $aiooqyausygaasqm = ManipulateFile::lausiwamsokkqguo($euwkouuykmaieusi); if (!is_wp_error($aiooqyausygaasqm)) { goto sggawugoykqcmsug; } $sogksuscggsicmac[self::imkacwmiuiykyuim] = $aiooqyausygaasqm->get_error_message(); goto wkeuuycukmuqiaom; sggawugoykqcmsug: $ogomymegcoacqisg = $this->quyeyqecsuasocgs($aiooqyausygaasqm); ManipulateUser::ksmqawcowkmegigw($aokagokqyuysuksm, $ogomymegcoacqisg, $ycoeoaakqyskgykq); ManipulateUser::ksmqawcowkmegigw($aokagokqyuysuksm . self::mswocgcucqoaesaa, $aiooqyausygaasqm, $ycoeoaakqyskgykq); $ecukkacusqswqoem = true; wkeuuycukmuqiaom: wakmayaoqoskekqy: goto kqgcyoscsusgoaqi; case self::ccyqsqcgksyckkcm: case self::gmyemowoaqyoqwme: case self::scagkwwiiquocimc: case self::kagqiwogmiguosiw: case self::akoagooquksouwka: $mkucggyaiaukqoce->{$aokagokqyuysuksm} = esc_sql($euwkouuykmaieusi); $ecukkacusqswqoem = true; goto kqgcyoscsusgoaqi; default: if ($aokagokqyuysuksm === self::iuwkkyuoyukacwwy && !ManipulateValidation::iuceiykuqcqkwsoa($euwkouuykmaieusi)) { goto qmuwoecuacmkwgem; } ManipulateUser::ksmqawcowkmegigw($aokagokqyuysuksm, esc_attr($euwkouuykmaieusi), $ycoeoaakqyskgykq); goto owmuceyswmgueasi; qmuwoecuacmkwgem: $this->yqkwsouguwgoywcw(sprintf(__("\45\x73\x20\x69\163\40\x6e\157\164\x20\141\x20\x76\x61\154\151\144\x20\x25\163", PR__MDL__PANEL), $euwkouuykmaieusi, $aiowsaccomcoikus->uikgwcuascgeissw())); owmuceyswmgueasi: goto kqgcyoscsusgoaqi; } ueigkucgaucgeimc: kqgcyoscsusgoaqi: } catch (Exception $wgaoewqkwgomoaai) { $sogksuscggsicmac = $this->oemauiimmycumcsk(sprintf("\x25\x73\x3c\x62\162\76\45\163", __("\x66\141\151\x6c\145\144\x20\x75\160\x64\x61\164\x65\40\160\x72\x6f\146\x69\154\145\72", PR__MDL__PANEL), $this->kyacickkomkioeyu($wgaoewqkwgomoaai)), 400); } mwsmsguqqkcwiiuk: eeauyscekuckoues: wgewmqieuamsoayy: } ugqaaewwmkocwwgy: if ($ecukkacusqswqoem) { goto eogwckcymuugikuy; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\124\150\145\x72\x65\x20\151\163\40\156\x6f\x74\150\x69\156\x67\40\x66\x6f\162\x20\165\x70\144\141\x74\145", PR__MDL__PANEL), 400); goto msemumccgceyugmg; eogwckcymuugikuy: DecoratorUser::update($mkucggyaiaukqoce); msemumccgceyugmg: wagqgeqymeqoeuyi: return $sogksuscggsicmac; } public function muukeaaskkiceykc($eyagkkkqkwcuygso, $ikgwqyuyckaewsow) { $sogksuscggsicmac = true; foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto mugqyyeayeyggqqk; } $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); $euwkouuykmaieusi = ManipulateArray::get($eyagkkkqkwcuygso, $aokagokqyuysuksm); if (!$euwkouuykmaieusi && $aiowsaccomcoikus->msmiagueogcsucgc()) { goto emmsycooskoqmgeg; } $sogksuscggsicmac = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\160\x61\156\x65\154\x5f\x70\162\157\146\x69\x6c\x65\137\166\x61\x6c\151\144\141\x74\x69\x6f\x6e\137\x69\156\160\x75\x74"), true, $aiowsaccomcoikus, $euwkouuykmaieusi); if (!(!is_wp_error($sogksuscggsicmac) && $sogksuscggsicmac)) { goto qgeugwymkkiacwoc; } switch ($aokagokqyuysuksm) { case self::ccyqsqcgksyckkcm: if (ManipulateValidation::wmcwegoisyeeosqu($euwkouuykmaieusi)) { goto ciykoyeioqgyaeqo; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\x54\x68\145\x20\125\162\154\40\171\x6f\165\x20\x65\x6e\x74\145\162\145\x64\40\x69\x73\40\156\157\x74\40\x76\141\x6c\151\144", PR__MDL__PANEL), 400); ciykoyeioqgyaeqo: goto wcugqegqsuuuwqao; case self::akoagooquksouwka: if (ManipulateValidation::qkgmsqgmwoamekyk($euwkouuykmaieusi)) { goto mqicocmqegwukkwg; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\124\x68\x65\40\x45\x6d\141\x69\154\x20\x79\157\165\40\x65\x6e\x74\145\x72\x65\144\x20\x69\163\40\x6e\157\x74\x20\166\x61\x6c\151\144", PR__MDL__PANEL), 400); mqicocmqegwukkwg: goto wcugqegqsuuuwqao; } asiqwuoswmigcaki: wcugqegqsuuuwqao: qgeugwymkkiacwoc: goto ouamogymawucwswu; emmsycooskoqmgeg: $sogksuscggsicmac = $this->oemauiimmycumcsk(sprintf(__("\x25\x73\x20\151\x73\40\x61\40\x72\x65\161\x75\x69\162\x65\x20\146\151\x65\154\144", PR__MDL__PANEL), $aiowsaccomcoikus->uikgwcuascgeissw()), 400); goto qoqskyuuwueqkquk; ouamogymawucwswu: mugqyyeayeyggqqk: iwsuawwqomaowuii: } qoqskyuuwueqkquk: return $sogksuscggsicmac; } public function ugmceccgwaaaigiy($ikgwqyuyckaewsow = [], $ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [ self::meksegaoamowuwoq => null, self::aisguagukaewucii => self::ckmqoekmugkggeym, self::mgsccwumkcawaqcy => self::ALL, self::ackcaikowcokggsc => [], self::wacsysugayaeayag => true, ]); switch ($ywmkwiwkosakssii[self::mgsccwumkcawaqcy]) { case self::kqeokggqcsesmqco: $ikgwqyuyckaewsow = $this->cgaksokgcmycgmeo(); goto acsqgiuageaasiyy; case self::ALL: default: $ikgwqyuyckaewsow = array_merge($this->ibaymmaeyoceumgw(), $this->cgaksokgcmycgmeo()); goto acsqgiuageaasiyy; } oomguqikqokqwgku: acsqgiuageaasiyy: $mkucggyaiaukqoce = $ywmkwiwkosakssii[self::meksegaoamowuwoq]; $ikgwqyuyckaewsow = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x70\x61\x6e\145\154\x5f\x70\162\157\x66\151\x6c\145\137\160\145\x72\x73\157\156\x61\x6c\137\146\x69\145\x6c\144\163"), $ikgwqyuyckaewsow, $mkucggyaiaukqoce); $kmogksmigykusaem = $ywmkwiwkosakssii[self::wacsysugayaeayag]; $okaqsamoiqqumygk = []; $yyeuwosgwymeocco = []; $gcygmsqykaykyyim = []; if (!$kmogksmigykusaem) { goto samwkqgwouggsguc; } $okaqsamoiqqumygk = $this->weysguygiseoukqw(Setting::gyogiiwkqowygoes, $okaqsamoiqqumygk); $yyeuwosgwymeocco = $this->weysguygiseoukqw(Setting::kioockukciugewka, $yyeuwosgwymeocco); $gcygmsqykaykyyim = $this->weysguygiseoukqw(Setting::sweqwcsqywoaomyg, $gcygmsqykaykyyim); samwkqgwouggsguc: $sogksuscggsicmac = []; $ooiewiwkegguusum = $ywmkwiwkosakssii[self::ackcaikowcokggsc]; $kwcqeacwucqmwmcw = null; $gsyeosaccwkauuyu = []; foreach ($ikgwqyuyckaewsow as $momcykaoccoymeig => $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto iikiiioqiyegyaak; } $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); $muocgugcqiewywag = true; if (!(!$ooiewiwkegguusum || in_array($aokagokqyuysuksm, $ooiewiwkegguusum))) { goto gicyayswqyuoekcq; } switch ($ywmkwiwkosakssii[self::aisguagukaewucii]) { case self::ckmqoekmugkggeym: if (!$kmogksmigykusaem) { goto ykomgumacooyomsk; } if (in_array($aokagokqyuysuksm, $yyeuwosgwymeocco)) { goto aomysykcgikegiau; } if ($aiowsaccomcoikus instanceof Header) { goto ikqqskkqqwmwssoo; } $gsyeosaccwkauuyu[$aokagokqyuysuksm] = $momcykaoccoymeig; if (!in_array($aokagokqyuysuksm, $okaqsamoiqqumygk)) { goto kqqiegkuqagcqsya; } $aiowsaccomcoikus->eumecwmqmukqgyea(); kqqiegkuqagcqsya: if (!in_array($aokagokqyuysuksm, $gcygmsqykaykyyim)) { goto ogsaaqsaogcqiouy; } $aiowsaccomcoikus->uqiyecacqiyeaqqo(); if (!ManipulateUser::igawqaomowicuayw($aokagokqyuysuksm . self::cigcassgekcaiigg, $mkucggyaiaukqoce)) { goto ousiuuwgwkiyikyq; } $aiowsaccomcoikus->cekywgkuyuckekeg(); ousiuuwgwkiyikyq: ogsaaqsaogcqiouy: if (!$mkucggyaiaukqoce) { goto iwekmyyccgiyuecc; } $aiowsaccomcoikus->iygyugseyaqwywyg($this->ocoqmuuikmocsqqu($mkucggyaiaukqoce, $aokagokqyuysuksm)); iwekmyyccgiyuecc: ikqqskkqqwmwssoo: goto cwwmimggaaecmucw; aomysykcgikegiau: $muocgugcqiewywag = false; cwwmimggaaecmucw: if (!$aiowsaccomcoikus instanceof Header) { goto ogqmesokykywseys; } if (!(isset($sogksuscggsicmac[$kwcqeacwucqmwmcw]) && !$gsyeosaccwkauuyu)) { goto awoaooyoeoyeeqee; } unset($sogksuscggsicmac[$kwcqeacwucqmwmcw]); awoaooyoeoyeeqee: $gsyeosaccwkauuyu = []; $kwcqeacwucqmwmcw = $momcykaoccoymeig; ogqmesokykywseys: ykomgumacooyomsk: if (!$muocgugcqiewywag) { goto mqkmcysgoiaouiwm; } $sogksuscggsicmac[$aokagokqyuysuksm] = $aiowsaccomcoikus; mqkmcysgoiaouiwm: goto kkumywowcoycymeo; case self::emgcgiseaoouacge: default: if ($aiowsaccomcoikus instanceof Header) { goto kosaqwikueyksqmw; } $sogksuscggsicmac[$aokagokqyuysuksm] = $aiowsaccomcoikus->uikgwcuascgeissw(); kosaqwikueyksqmw: goto kkumywowcoycymeo; } miweggwqeiaeweia: kkumywowcoycymeo: gicyayswqyuoekcq: iikiiioqiyegyaak: guykyqecgswcsmws: } wyuemgggaqogsmsq: if (!($kmogksmigykusaem && !$gsyeosaccwkauuyu && isset($sogksuscggsicmac[$kwcqeacwucqmwmcw]))) { goto uiosisocuwokwkie; } unset($sogksuscggsicmac[$kwcqeacwucqmwmcw]); uiosisocuwokwkie: return $sogksuscggsicmac; } public function ibaymmaeyoceumgw() : array { return [Form::wowyaacgaccyeici(__("\125\x73\x65\x72\x20\x49\156\x66\x6f", PR__MDL__PANEL)), Form::kimoeccokowuaiic(self::meweoeakkqyiwuyy, __("\101\x76\x61\x74\x61\162", PR__MDL__PANEL), sprintf(__("\x41\143\143\145\160\x74\x65\144\x20\146\x69\x6c\x65\x74\x79\160\145\163\40\151\x73\x20\x25\x73", PR__MDL__PANEL), "\56\x70\156\147\54\40\56\x6a\160\147\54\40\x2e\x6a\x70\x65\x67"))->scmsukieucuekmki(), Form::ymuegqgyuagyucws(self::kagqiwogmiguosiw, __("\106\151\x72\163\x74\x20\x4e\141\x6d\145", PR__MDL__PANEL))->eumecwmqmukqgyea(), Form::ymuegqgyuagyucws(self::scagkwwiiquocimc, __("\x4c\141\x73\x74\40\116\141\x6d\x65", PR__MDL__PANEL))->eumecwmqmukqgyea(), Form::ymuegqgyuagyucws(self::gmyemowoaqyoqwme, __("\116\151\x63\153\40\x4e\x61\x6d\145", PR__MDL__PANEL))->eumecwmqmukqgyea(), Form::wowyaacgaccyeici(__("\x43\157\156\164\141\143\x74\x20\x49\156\x66\157", PR__MDL__PANEL)), Form::ymuegqgyuagyucws(self::akoagooquksouwka, __("\x43\x6f\x6e\x74\x61\x63\x74\40\105\155\141\x69\154", PR__MDL__PANEL))->saemoowcasogykak(IconFontawesomeInterface::uqmywyokmkwwmuic)->ccmwycqioaicegoc(__("\127\145\x27\x6c\154\40\156\x65\166\145\162\40\163\150\x61\162\145\40\x79\157\x75\x72\40\145\155\x61\x69\x6c\x20\167\x69\164\x68\x20\x61\156\x79\157\x6e\x65\x20\145\154\x73\145\56", PR__MDL__PANEL))->mkiaygiogeeyogqm(false), Form::ymuegqgyuagyucws(self::ccyqsqcgksyckkcm, __("\x57\145\x62\163\x69\164\x65", PR__MDL__PANEL))->saemoowcasogykak(IconFontawesomeInterface::yakumqwueukksgcm)->xkgcwkwsqysqamic()]; } public function cgaksokgcmycgmeo() : array { $ikgwqyuyckaewsow = [Form::wowyaacgaccyeici(__("\x56\145\x72\151\146\151\x63\x61\164\151\x6f\x6e\x20\x49\x6e\146\x6f\x72\x6d\141\164\x69\x6f\156", PR__MDL__PANEL)), Form::ymuegqgyuagyucws(self::iuwkkyuoyukacwwy, __("\x4e\141\x74\x69\157\x6e\x61\154\40\103\157\144\145", PR__MDL__PANEL))->igmaewykumgwoaoy("\x6d\x61\170\x6c\145\156\x67\164\x68", 10)->sqcsseccsaqsoyqy()->suaookwiwycuwmuk("\156\141\164\151\x6f\156\x61\154\55\x63\157\x64\145"), Form::kimoeccokowuaiic(self::kmyciqicaqsgiwga, __("\116\x61\x74\x69\157\x6e\x61\x6c\40\x43\141\x72\144", PR__MDL__PANEL), __("\x50\x6c\x65\x61\163\145\40\165\160\x6c\157\x61\x64\40\x79\x6f\165\x72\40\156\141\x74\151\157\156\x61\x6c\x20\143\x61\x72\144\40\151\155\x61\x67\x65", PR__MDL__PANEL))->qcgocuceocquqcuw("\141\143\x63\145\160\164", "\x2e\152\x70\x67\x2c\x20\56\x70\x6e\x67")]; return (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x70\x61\x6e\145\x6c\137\165\163\145\162\x5f\x63\165\163\164\157\x6d\x5f\x66\x69\x65\x6c\x64\163"), $ikgwqyuyckaewsow); } public function ksoemussqmaacucm($mkucggyaiaukqoce) : array { $yyimiwcuegayoskq = []; $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy([], [self::meksegaoamowuwoq => $mkucggyaiaukqoce, self::wacsysugayaeayag => false]); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!($aiowsaccomcoikus instanceof Field && !$aiowsaccomcoikus instanceof Header)) { goto qmkaeeomgkwggoyo; } $uusmaiomayssaecw = $aiowsaccomcoikus->mwikyscisascoeea(); $yyimiwcuegayoskq[$uusmaiomayssaecw] = $this->ocoqmuuikmocsqqu($mkucggyaiaukqoce, $uusmaiomayssaecw); qmkaeeomgkwggoyo: gcckqucukawcasgk: } cuumeogeomowqisc: return $yyimiwcuegayoskq; } private function ocoqmuuikmocsqqu($mkucggyaiaukqoce, $uusmaiomayssaecw) { if (in_array($uusmaiomayssaecw, [self::meweoeakkqyiwuyy, self::kmyciqicaqsgiwga])) { goto eekcoeikaeaaeyii; } if (isset($mkucggyaiaukqoce->{$uusmaiomayssaecw})) { goto csammceowmqwaamq; } $eqgoocgaqwqcimie = ManipulateUser::igawqaomowicuayw($uusmaiomayssaecw, $mkucggyaiaukqoce); goto ocaguquugeamqckq; csammceowmqwaamq: $eqgoocgaqwqcimie = $mkucggyaiaukqoce->{$uusmaiomayssaecw}; ocaguquugeamqckq: goto cogywoqcqummsyus; eekcoeikaeaaeyii: $eqgoocgaqwqcimie = $this->iqqqmsismuacmaqo($mkucggyaiaukqoce, $uusmaiomayssaecw); cogywoqcqummsyus: return $eqgoocgaqwqcimie; } }
