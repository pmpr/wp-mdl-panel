<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67e1693d37958             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel; use Exception; use Pmpr\Common\Foundation\FormGenerator\Frontend\Field\Field; use Pmpr\Common\Foundation\FormGenerator\Frontend\Field\Header; use Pmpr\Common\Foundation\FormGenerator\Frontend\Field\Media; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use WP_Error; class User extends Container { const cigcassgekcaiigg = '_verified'; public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse('get_avatar_data', [$this, 'oqsmyuwwgoiyaseu'], 999, 2); $this->aqaqisyssqeomwom('panel_user_get_fields', [$this, 'ugmceccgwaaaigiy'], 10, 2)->waqewsckuayqguos('panel_user_save_info', [$this, 'uwucmiyokwcakwga'], 10, 3); parent::kgquecmsgcouyaya(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('show_user_profile', [$this, 'awkqkqauwwuqgewu'])->qcsmikeggeemccuu('edit_user_profile', [$this, 'awkqkqauwwuqgewu'])->qcsmikeggeemccuu('personal_options_update', [$this, 'msysgqeewkqgscwe'])->qcsmikeggeemccuu('edit_user_profile_update', [$this, 'msysgqeewkqgscwe']); parent::wigskegsqequoeks(); } public function msysgqeewkqgscwe($mkucggyaiaukqoce) { $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie()) { $megmggkiokqkcwou = $this->ugmceccgwaaaigiy([Constants::meksegaoamowuwoq => $mkucggyaiaukqoce]); foreach ($megmggkiokqkcwou as $aiowsaccomcoikus) { if ($aiowsaccomcoikus->iokkueaqiswaewyq()) { $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea() . self::cigcassgekcaiigg; if ($eiicaiwgqkgsekce->ayueggmoqeeukqmq($aokagokqyuysuksm) === Constants::ON) { $eqgoocgaqwqcimie = 1; } else { $eqgoocgaqwqcimie = 0; } $yoiguusocukqeayg->ksmqawcowkmegigw($aokagokqyuysuksm, $eqgoocgaqwqcimie, $mkucggyaiaukqoce); } } } $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy([], [Constants::meksegaoamowuwoq => $mkucggyaiaukqoce, Constants::mgsccwumkcawaqcy => Constants::kqeokggqcsesmqco]); if ($ikgwqyuyckaewsow) { foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field && !$aiowsaccomcoikus instanceof Header) { $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); $eqgoocgaqwqcimie = $eiicaiwgqkgsekce->ayueggmoqeeukqmq($aokagokqyuysuksm, ''); if ($eqgoocgaqwqcimie) { $yoiguusocukqeayg->ksmqawcowkmegigw($aokagokqyuysuksm, $eqgoocgaqwqcimie, $mkucggyaiaukqoce); } else { $yoiguusocukqeayg->smqukgcyacswysqa($aokagokqyuysuksm, $mkucggyaiaukqoce); } } } } } public function awkqkqauwwuqgewu($mkucggyaiaukqoce) { $uiyqiwmskuuaiayw = []; if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie()) { $megmggkiokqkcwou = $this->ugmceccgwaaaigiy([], [Constants::meksegaoamowuwoq => $mkucggyaiaukqoce]); foreach ($megmggkiokqkcwou as $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field && !$aiowsaccomcoikus instanceof Header) { if ($aiowsaccomcoikus->iokkueaqiswaewyq()) { $omuyquqsuicwkeic = $aiowsaccomcoikus->mwikyscisascoeea() . self::cigcassgekcaiigg; $ieqeegkcmgkmoiyq = $this->caokeucsksukesyo()->wmkogisswkckmeua()->wcwmusaouiqaqeww($omuyquqsuicwkeic); $ieqeegkcmgkmoiyq->iygyugseyaqwywyg($this->caokeucsksukesyo()->issssuygyewuaswa()->igawqaomowicuayw($omuyquqsuicwkeic, $mkucggyaiaukqoce) ? Constants::ON : Constants::OFF); $eqgoocgaqwqcimie = $aiowsaccomcoikus->qooeaookuemoqecm(); $wwgucssaecqekuek = ['class' => 'mt-2']; $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); if ($aiowsaccomcoikus instanceof Media) { $wwgucssaecqekuek['src'] = $this->caokeucsksukesyo()->iqsmaqoiukeasukw()->mgaeeqsgeoukeokc($eqgoocgaqwqcimie); $wwgucssaecqekuek[Constants::qomookamaskuoswk] = 120; $wwgucssaecqekuek = $swqimwqeweekeusq->igmaewykumgwoaoy($wwgucssaecqekuek, 'class', 'img-fluid'); $mcqieaigyeeyaksm = $swqimwqeweekeusq->qgsekwygcgawekeq('img', $wwgucssaecqekuek); $eqgoocgaqwqcimie = $swqimwqeweekeusq->yuawgssgauywkiia($mcqieaigyeeyaksm, $eqgoocgaqwqcimie, ['target' => '_blank']); } else { $eqgoocgaqwqcimie = $swqimwqeweekeusq->ciuuiyckmsygceis($eqgoocgaqwqcimie, $wwgucssaecqekuek); } $uiyqiwmskuuaiayw[] = [Constants::gouqcwikiiygyasc => $omuyquqsuicwkeic, Constants::gsqoooskigukokks => $ieqeegkcmgkmoiyq->render(), Constants::ciyoccqkiamemcmm => sprintf(__('Value of %s: %s', PR__MDL__PANEL), $aiowsaccomcoikus->qcgakseyaikigqco(), $eqgoocgaqwqcimie), Constants::uissasisiuymwsmu => sprintf(__('Verify %s', PR__MDL__PANEL), $aiowsaccomcoikus->qcgakseyaikigqco())]; } } } } $yoagueksskqiewiq = []; $gmeiukgosesecyee = $this->ugmceccgwaaaigiy([], [Constants::meksegaoamowuwoq => $mkucggyaiaukqoce, Constants::mgsccwumkcawaqcy => Constants::kqeokggqcsesmqco]); foreach ($gmeiukgosesecyee as $aiowsaccomcoikus) { $aiowsaccomcoikus->aisqaugyiikgesqo(); if ($aiowsaccomcoikus instanceof Field && !$aiowsaccomcoikus instanceof Header) { $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); $ssigsiuwyemcwmys = $this->oocoemuigcmgeymo($aiowsaccomcoikus); if ($ssigsiuwyemcwmys) { $ssigsiuwyemcwmys->qigsyyqgewgskemg('w-md-50 w-lg-25'); $ssigsiuwyemcwmys->iygyugseyaqwywyg($aiowsaccomcoikus->qooeaookuemoqecm()); $ssigsiuwyemcwmys->gswweykyogmsyawy(''); $yoagueksskqiewiq[] = [Constants::gouqcwikiiygyasc => $aokagokqyuysuksm, Constants::gsqoooskigukokks => $ssigsiuwyemcwmys->render(), Constants::uissasisiuymwsmu => $aiowsaccomcoikus->qcgakseyaikigqco()]; } } } if ($yoagueksskqiewiq) { echo $this->iuygowkemiiwqmiw('profile', [Constants::qescuiwgsyuikume => __('Information Verification', PR__MDL__PANEL), Constants::ymckmcsiymwqucoq => $yoagueksskqiewiq, 'verifications' => $uiyqiwmskuuaiayw, 'verifications_title' => __('Verifiable fields', PR__MDL__PANEL)]); } } public function oocoemuigcmgeymo($aiowsaccomcoikus) { $sqeykgyoooqysmca = $aiowsaccomcoikus->waecsyqmwascmqoa(Constants::squoamkioomemiyi); $aiowsaccomcoikus->wmiseqaieauskweu(); $siquossayskcwkea = $aiowsaccomcoikus->sacmkccceuywoqsq() + [Constants::squoamkioomemiyi => $sqeykgyoooqysmca]; return $this->caokeucsksukesyo()->wmkogisswkckmeua()->ocegoqcckecwgays($siquossayskcwkea); } public function aqqaucmcssiayceu() : array { $sogksuscggsicmac = []; $mcgmicqwgaaqqqcw = $this->weysguygiseoukqw(Setting::qaoqekkamwkyqcsi, []); $mcgmicqwgaaqqqcw = $this->ocksiywmkyaqseou('panel_user_previews', $mcgmicqwgaaqqqcw); if ($mcgmicqwgaaqqqcw) { $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy([], [Constants::wacsysugayaeayag => false]); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); if ($aiowsaccomcoikus instanceof Field && in_array($aokagokqyuysuksm, $mcgmicqwgaaqqqcw, true)) { $sogksuscggsicmac[$aokagokqyuysuksm] = $aiowsaccomcoikus->qcgakseyaikigqco(); } } } return $sogksuscggsicmac; } public function oqsmyuwwgoiyaseu($ywmkwiwkosakssii, $sqwmoeogqwooeukc) { $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $mkucggyaiaukqoce = $yoiguusocukqeayg->mikwgiscckkeomia($sqwmoeogqwooeukc); if ($yoiguusocukqeayg->is($mkucggyaiaukqoce) && ($mowgokyeuymuwiew = $this->iqqqmsismuacmaqo($sqwmoeogqwooeukc, Constants::meweoeakkqyiwuyy))) { $ywmkwiwkosakssii[Constants::auqoykcmsiauccao] = $mowgokyeuymuwiew; } return $ywmkwiwkosakssii; } public function iqqqmsismuacmaqo($mkucggyaiaukqoce, $uusmaiomayssaecw) { $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $ogomymegcoacqisg = $yoiguusocukqeayg->igawqaomowicuayw($uusmaiomayssaecw, $mkucggyaiaukqoce); if (!$this->caokeucsksukesyo()->gyecsegqciqykomu()->wmcwegoisyeeosqu($ogomymegcoacqisg)) { $ogomymegcoacqisg = $this->quyeyqecsuasocgs($yoiguusocukqeayg->igawqaomowicuayw($uusmaiomayssaecw, $mkucggyaiaukqoce)); } return $ogomymegcoacqisg; } public function quyeyqecsuasocgs($aiooqyausygaasqm) { $ogomymegcoacqisg = null; if ($aiooqyausygaasqm) { $ogomymegcoacqisg = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->caokeucsksukesyo()->iqsmaqoiukeasukw()->uikkssqcoewckces((int) $aiooqyausygaasqm), 0); } return $ogomymegcoacqisg; } public function uwucmiyokwcakwga($mkucggyaiaukqoce, $icwicymcioeyeyek, $ikgwqyuyckaewsow = []) { $sogksuscggsicmac = $this->muukeaaskkiceykc($icwicymcioeyeyek, $ikgwqyuyckaewsow); if ($sogksuscggsicmac && !is_wp_error($sogksuscggsicmac)) { $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $ycoeoaakqyskgykq = $yoiguusocukqeayg->iooowgsqoyqseyuu($mkucggyaiaukqoce); $ecukkacusqswqoem = false; foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field && !$aiowsaccomcoikus instanceof Header) { if (!$aiowsaccomcoikus->iokkueaqiswaewyq() || !$aiowsaccomcoikus->wowamsaiqwikqoqa()) { $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); $euwkouuykmaieusi = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, $aokagokqyuysuksm); try { $this->ewcsyqaaigkicgse('panel_user_save_field', $aiowsaccomcoikus, $euwkouuykmaieusi); $this->ewcsyqaaigkicgse("panel_user_save_field_{$aokagokqyuysuksm}", $euwkouuykmaieusi, $aiowsaccomcoikus); switch ($aokagokqyuysuksm) { case Constants::meweoeakkqyiwuyy: case Constants::kmyciqicaqsgiwga: if ($euwkouuykmaieusi && !$cwaqscoiqkokyase->wmcwegoisyeeosqu($euwkouuykmaieusi)) { $aiooqyausygaasqm = $this->caokeucsksukesyo()->iuekyyeesukysksy()->lausiwamsokkqguo($euwkouuykmaieusi); if (!is_wp_error($aiooqyausygaasqm)) { $swwmymiaiosiyqis = $yoiguusocukqeayg->igawqaomowicuayw($aokagokqyuysuksm, $ycoeoaakqyskgykq); if ($yoiguusocukqeayg->ksmqawcowkmegigw($aokagokqyuysuksm, $aiooqyausygaasqm, $ycoeoaakqyskgykq)) { if ($swwmymiaiosiyqis) { $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->delete($swwmymiaiosiyqis, true); } $ecukkacusqswqoem = true; } } else { $sogksuscggsicmac[Constants::imkacwmiuiykyuim] = $aiooqyausygaasqm->get_error_message(); } } break; case Constants::ccyqsqcgksyckkcm: case Constants::gmyemowoaqyoqwme: case Constants::scagkwwiiquocimc: case Constants::kagqiwogmiguosiw: case Constants::akoagooquksouwka: $mkucggyaiaukqoce->{$aokagokqyuysuksm} = esc_sql($euwkouuykmaieusi); $ecukkacusqswqoem = true; break; default: if ($aokagokqyuysuksm === Constants::iuwkkyuoyukacwwy && !$cwaqscoiqkokyase->iuceiykuqcqkwsoa($euwkouuykmaieusi) || $aokagokqyuysuksm === Constants::uymswsomcyoqsegc && !$cwaqscoiqkokyase->qawecuimqqcqwgsw($euwkouuykmaieusi)) { $this->caokeucsksukesyo()->euekiyuksecoccus()->yqkwsouguwgoywcw(sprintf(__('%s is not a valid %s', PR__MDL__PANEL), $euwkouuykmaieusi, $aiowsaccomcoikus->qcgakseyaikigqco())); } else { $yoiguusocukqeayg->ksmqawcowkmegigw($aokagokqyuysuksm, esc_sql($euwkouuykmaieusi), $ycoeoaakqyskgykq); $ecukkacusqswqoem = true; } break; } } catch (Exception $wgaoewqkwgomoaai) { $aagguieukukuysce = $this->caokeucsksukesyo()->euekiyuksecoccus(); $sogksuscggsicmac = $aagguieukukuysce->gosmqcmmomkqwmis(sprintf('%s<br>%s', __('failed update profile:', PR__MDL__PANEL), $aagguieukukuysce->skauuuoqcaiseuks($wgaoewqkwgomoaai)), 400); } } } } if ($ecukkacusqswqoem) { $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->update($mkucggyaiaukqoce); } else { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__('There is nothing for update', PR__MDL__PANEL), 400); } } return $sogksuscggsicmac; } public function muukeaaskkiceykc($eyagkkkqkwcuygso, $ikgwqyuyckaewsow) { $sogksuscggsicmac = true; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $okguqgiiewywyoaq = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu(); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field) { $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); $euwkouuykmaieusi = $gkyciwoiiisgywcs->get($eyagkkkqkwcuygso, $aokagokqyuysuksm); if (!$euwkouuykmaieusi && $aiowsaccomcoikus->msmiagueogcsucgc()) { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__('%s is a require field', PR__MDL__PANEL), $aiowsaccomcoikus->qcgakseyaikigqco()), 400); break; } else { $sogksuscggsicmac = $this->ocksiywmkyaqseou('panel_profile_validation_input', true, $aiowsaccomcoikus, $euwkouuykmaieusi); if (!is_wp_error($sogksuscggsicmac) && $sogksuscggsicmac) { switch ($aokagokqyuysuksm) { case Constants::ccyqsqcgksyckkcm: if (!$cwaqscoiqkokyase->wmcwegoisyeeosqu($euwkouuykmaieusi)) { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__('The Url you entered is not valid', PR__MDL__PANEL), 400); } break; case Constants::akoagooquksouwka: if (!$okguqgiiewywyoaq->qkgmsqgmwoamekyk($euwkouuykmaieusi)) { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__('The Email you entered is not valid', PR__MDL__PANEL), 400); } break; } } } } } return $sogksuscggsicmac; } public function ugmceccgwaaaigiy($ikgwqyuyckaewsow = [], $ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [ Constants::meksegaoamowuwoq => null, Constants::aisguagukaewucii => Constants::ckmqoekmugkggeym, Constants::mgsccwumkcawaqcy => Constants::ALL, Constants::ackcaikowcokggsc => [], Constants::wacsysugayaeayag => true, ]); switch ($ywmkwiwkosakssii[Constants::mgsccwumkcawaqcy]) { case Constants::kqeokggqcsesmqco: $ikgwqyuyckaewsow = $this->cgaksokgcmycgmeo(); break; case Constants::ALL: default: $ikgwqyuyckaewsow = array_merge($this->ibaymmaeyoceumgw(), $this->cgaksokgcmycgmeo()); break; } $mkucggyaiaukqoce = $ywmkwiwkosakssii[Constants::meksegaoamowuwoq]; $ikgwqyuyckaewsow = $this->ocksiywmkyaqseou('panel_profile_personal_fields', $ikgwqyuyckaewsow, $mkucggyaiaukqoce); $kmogksmigykusaem = $ywmkwiwkosakssii[Constants::wacsysugayaeayag]; $okaqsamoiqqumygk = []; $yyeuwosgwymeocco = []; $gcygmsqykaykyyim = []; if ($kmogksmigykusaem) { $okaqsamoiqqumygk = $this->weysguygiseoukqw(Setting::gyogiiwkqowygoes, $okaqsamoiqqumygk); $yyeuwosgwymeocco = $this->weysguygiseoukqw(Setting::kioockukciugewka, $yyeuwosgwymeocco); $gcygmsqykaykyyim = $this->weysguygiseoukqw(Setting::sweqwcsqywoaomyg, $gcygmsqykaykyyim); } $sogksuscggsicmac = []; $ooiewiwkegguusum = $ywmkwiwkosakssii[Constants::ackcaikowcokggsc]; $kwcqeacwucqmwmcw = null; $gsyeosaccwkauuyu = []; $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); foreach ($ikgwqyuyckaewsow as $momcykaoccoymeig => $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field) { $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); $muocgugcqiewywag = true; if (!$ooiewiwkegguusum || in_array($aokagokqyuysuksm, $ooiewiwkegguusum, true)) { $aiowsaccomcoikus = $this->ocksiywmkyaqseou("panel_profile_{$aokagokqyuysuksm}_field", $aiowsaccomcoikus, $mkucggyaiaukqoce); switch ($ywmkwiwkosakssii[Constants::aisguagukaewucii]) { case Constants::ckmqoekmugkggeym: if ($kmogksmigykusaem) { if (in_array($aokagokqyuysuksm, $yyeuwosgwymeocco, true)) { $muocgugcqiewywag = false; } else { if (!$aiowsaccomcoikus instanceof Header) { $gsyeosaccwkauuyu[$aokagokqyuysuksm] = $momcykaoccoymeig; if (in_array($aokagokqyuysuksm, $okaqsamoiqqumygk, true)) { $aiowsaccomcoikus->eumecwmqmukqgyea(); } if (in_array($aokagokqyuysuksm, $gcygmsqykaykyyim, true)) { $aiowsaccomcoikus->uqiyecacqiyeaqqo(); if ($yoiguusocukqeayg->igawqaomowicuayw($aokagokqyuysuksm . self::cigcassgekcaiigg, $mkucggyaiaukqoce)) { $aiowsaccomcoikus->cekywgkuyuckekeg(); } } if ($mkucggyaiaukqoce) { $aiowsaccomcoikus->iygyugseyaqwywyg($this->ocoqmuuikmocsqqu($mkucggyaiaukqoce, $aokagokqyuysuksm, false)); } } } if ($aiowsaccomcoikus instanceof Header) { if (isset($sogksuscggsicmac[$kwcqeacwucqmwmcw]) && !$gsyeosaccwkauuyu) { unset($sogksuscggsicmac[$kwcqeacwucqmwmcw]); } $gsyeosaccwkauuyu = []; $kwcqeacwucqmwmcw = $momcykaoccoymeig; } } if ($muocgugcqiewywag) { $sogksuscggsicmac[$aokagokqyuysuksm] = $aiowsaccomcoikus; } break; case Constants::emgcgiseaoouacge: default: if (!$aiowsaccomcoikus instanceof Header) { $sogksuscggsicmac[$aokagokqyuysuksm] = $aiowsaccomcoikus->qcgakseyaikigqco(); } break; } } } } if ($kmogksmigykusaem && !$gsyeosaccwkauuyu && isset($sogksuscggsicmac[$kwcqeacwucqmwmcw])) { unset($sogksuscggsicmac[$kwcqeacwucqmwmcw]); } return $sogksuscggsicmac; } public function ibaymmaeyoceumgw() : array { $gusoaiguqeaommcc = $this->caokeucsksukesyo()->kugiyqykwaskawsc(); return [$gusoaiguqeaommcc->wowyaacgaccyeici()->gswweykyogmsyawy(__('User Info', PR__MDL__PANEL)), $gusoaiguqeaommcc->quaegkgkucwyeiqg(Constants::meweoeakkqyiwuyy)->gswweykyogmsyawy(__('Face Picture', PR__MDL__PANEL))->kogekgsaaqoeosuc()->wsacuksekeaemucu(204800), $gusoaiguqeaommcc->ymuegqgyuagyucws(Constants::kagqiwogmiguosiw)->gswweykyogmsyawy(__('First Name', PR__MDL__PANEL))->eumecwmqmukqgyea(), $gusoaiguqeaommcc->ymuegqgyuagyucws(Constants::scagkwwiiquocimc)->gswweykyogmsyawy(__('Last Name', PR__MDL__PANEL))->eumecwmqmukqgyea(), $gusoaiguqeaommcc->ymuegqgyuagyucws(Constants::gmyemowoaqyoqwme)->gswweykyogmsyawy(__('Nick Name', PR__MDL__PANEL))->eumecwmqmukqgyea(), $gusoaiguqeaommcc->uouyygwcgsmygaee(Constants::eqkeooqcsscoggia)->gswweykyogmsyawy(__('Description about yourself', PR__MDL__PANEL))->qsecygiycssgacqs(2), $gusoaiguqeaommcc->wowyaacgaccyeici()->gswweykyogmsyawy(__('Contact Info', PR__MDL__PANEL)), $gusoaiguqeaommcc->ymuegqgyuagyucws(Constants::akoagooquksouwka)->gswweykyogmsyawy(__('Email', PR__MDL__PANEL))->saemoowcasogykak(IconInterface::yeegwaaeowmycesi)->mkiaygiogeeyogqm(), $gusoaiguqeaommcc->ymuegqgyuagyucws(Constants::ccyqsqcgksyckkcm)->gswweykyogmsyawy(__('Website', PR__MDL__PANEL))->saemoowcasogykak(IconInterface::emuwacasoaaageiq)->xkgcwkwsqysqamic()]; } public function cgaksokgcmycgmeo() : array { $gusoaiguqeaommcc = $this->caokeucsksukesyo()->kugiyqykwaskawsc(); $ikgwqyuyckaewsow = [$gusoaiguqeaommcc->ymuegqgyuagyucws(Constants::uymswsomcyoqsegc)->gswweykyogmsyawy(__('Mobile', PR__MDL__PANEL))->smigkcmumwkgamkk()->saemoowcasogykak(IconInterface::iacqisugsscswegy), $gusoaiguqeaommcc->wowyaacgaccyeici()->gswweykyogmsyawy(__('Address Information', PR__MDL__PANEL)), $gusoaiguqeaommcc->uouyygwcgsmygaee(Constants::iiysuomqoogiagwe)->gswweykyogmsyawy(__('Address', PR__MDL__PANEL))->qsecygiycssgacqs(2), $gusoaiguqeaommcc->ymuegqgyuagyucws(Constants::gwiayggcmggiwoua)->gswweykyogmsyawy(__('Postal Code', PR__MDL__PANEL))->kqqqugemmqagucuq(), $gusoaiguqeaommcc->wowyaacgaccyeici()->gswweykyogmsyawy(__('Verification Information', PR__MDL__PANEL)), $gusoaiguqeaommcc->ymuegqgyuagyucws(Constants::iuwkkyuoyukacwwy)->gswweykyogmsyawy(__('National Code', PR__MDL__PANEL))->igmaewykumgwoaoy('maxlength', 10)->kqqqugemmqagucuq()->suaookwiwycuwmuk('national-code'), $gusoaiguqeaommcc->quaegkgkucwyeiqg(Constants::kmyciqicaqsgiwga)->gswweykyogmsyawy(__('National Card', PR__MDL__PANEL))->kogekgsaaqoeosuc()->wsacuksekeaemucu(204800)]; return (array) $this->ocksiywmkyaqseou('panel_user_custom_fields', $ikgwqyuyckaewsow); } public function ksoemussqmaacucm($mkucggyaiaukqoce) : array { $yyimiwcuegayoskq = []; $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy([], [Constants::meksegaoamowuwoq => $mkucggyaiaukqoce, Constants::wacsysugayaeayag => false]); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field && !$aiowsaccomcoikus instanceof Header) { $uusmaiomayssaecw = $aiowsaccomcoikus->mwikyscisascoeea(); $yyimiwcuegayoskq[$uusmaiomayssaecw] = $this->ocoqmuuikmocsqqu($mkucggyaiaukqoce, $uusmaiomayssaecw); } } return $yyimiwcuegayoskq; } private function ocoqmuuikmocsqqu($mkucggyaiaukqoce, $uusmaiomayssaecw, string $mgkceomocowocqyo = Constants::uwycywkimsycqwcy) { if (Constants::uwycywkimsycqwcy === $mgkceomocowocqyo && in_array($uusmaiomayssaecw, [Constants::meweoeakkqyiwuyy, Constants::kmyciqicaqsgiwga], true)) { $eqgoocgaqwqcimie = $this->iqqqmsismuacmaqo($mkucggyaiaukqoce, $uusmaiomayssaecw); } else { if (isset($mkucggyaiaukqoce->{$uusmaiomayssaecw})) { $eqgoocgaqwqcimie = $mkucggyaiaukqoce->{$uusmaiomayssaecw}; } else { $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->issssuygyewuaswa()->igawqaomowicuayw($uusmaiomayssaecw, $mkucggyaiaukqoce); } } return $eqgoocgaqwqcimie; } }
