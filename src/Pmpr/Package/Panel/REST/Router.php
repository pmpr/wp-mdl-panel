<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             616134c32181e             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Panel\REST; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconBrandInterface; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Package\Panel\Data\Route; use Pmpr\Package\Panel\Setting as OptionsSetting; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Router extends Common { public function __construct() { $this->rest_base = "\162\157\165\x74\145"; parent::__construct(); } public function register_routes() { $this->register("\x2f\x6c\x69\x73\164", ["\x61\x72\147\x73" => [], "\155\145\164\150\x6f\x64\163" => self::READABLE, "\143\x61\154\x6c\142\141\x63\x6b" => [$this, "\x63\x69\165\147\x77\157\x6f\141\x73\141\161\143\171\x77\141\x73"]]); } public function ciugwooasaqcywas(WP_REST_Request $aqmwamyiwgeeymqa) { goto awwaiioyywmokwsm; cuseccewekgcgkyg: $suuagcecoyuweoqk = []; goto kgysyqkoqgwmoscq; goaowamiyyamueiw: $woaeeewomgcuesaa->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\162\x65\x64\x69\x72\145\143\164\x2d\141\x64\155\x69\156")->qoowicksguscqyks(get_admin_url())->wiskakymeaywyeuw(true)->jyumyyugiwwiqomk(PHP_INT_MAX)->gswweykyogmsyawy(__("\101\144\x6d\151\156\x20\x41\162\145\141", PR__PKG__PANEL))->saemoowcasogykak(IconBrandInterface::ICON_WORDPRESS)); goto iaomqomgiwiegoca; uaicwcqwauosmsqm: $ssygqisoeqwgkquw = OptionsSetting::eiwcuqigayigimak(OptionsSetting::ADD_ADMIN_TO, []); goto gsqcoqqsioiyoykq; ookcgumoacskyymy: $ikamsuaiikaggcga = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\160\141\x6e\x65\x6c\x5f\162\x65\163\x74\137\x72\x6f\165\x74\x65\x73"), [$woaeeewomgcuesaa], $this, $woaeeewomgcuesaa, $mkucggyaiaukqoce); goto cuseccewekgcgkyg; iaomqomgiwiegoca: sooecucuakgkuyis: goto ysweqawmawicakeo; awwaiioyywmokwsm: $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); goto ckwmkquuyyugigom; ysweqawmawicakeo: ywqakqkmmcoceqka: goto owisckseoogsugqq; makomwwyomweyamm: kwsqgqmwyyeykgum: goto oqwcmgwimeisusoe; ckwmkquuyyugigom: $woaeeewomgcuesaa = $this->oeuiuocwuggewqmk("\154\x61\171\x6f\x75\164")->faioisokmmaeimoo()->qksaqgcokiqamueg("\57")->wiskakymeaywyeuw(false)->askmmuauqcuuqsea("\120\x61\x6e\145\154\x4c\141\171\x6f\x75\164")->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\x75\x73\x65\x72")->faioisokmmaeimoo()->askmmuauqcuuqsea("\120\141\156\x65\x6c\125\163\145\x72")->gswweykyogmsyawy(__("\x55\x73\145\x72", PR__PKG__PANEL))->saemoowcasogykak(IconFontawesomeInterface::ICON_USER)->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\x70\x72\x6f\x66\151\154\145")->faioisokmmaeimoo()->askmmuauqcuuqsea("\120\x61\156\x65\x6c\120\x72\157\146\151\154\x65")->gswweykyogmsyawy(__("\125\x73\x65\x72\x20\x50\162\x6f\146\151\x6c\x65", PR__PKG__PANEL))->saemoowcasogykak(IconFontawesomeInterface::ICON_USER_PEN)->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\160\x65\x72\x73\x6f\x6e\x61\154")->wiskakymeaywyeuw(false)->askmmuauqcuuqsea("\120\x61\156\145\154\120\162\157\x66\151\x6c\x65\120\x65\162\163\x6f\x6e\x61\x6c")->saemoowcasogykak(IconFontawesomeInterface::ICON_USER)->gswweykyogmsyawy(__("\120\145\x72\x73\157\x6e\141\x6c\x20\111\156\x66\157\x72\155\141\164\151\157\x6e", PR__PKG__PANEL))->gucwmccyimoagwcm(__("\125\160\144\141\164\145\40\171\157\165\162\40\x70\x65\162\x73\157\x6e\141\154\x20\151\156\x66\x6f\162\x6d\x61\164\x69\x6f\x6e", PR__PKG__PANEL)))->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\141\x63\143\157\x75\156\164")->wiskakymeaywyeuw(false)->askmmuauqcuuqsea("\x50\141\x6e\x65\154\120\162\157\146\151\154\145\101\x63\x63\x6f\165\156\164")->gswweykyogmsyawy(__("\101\x63\143\157\x75\156\164\40\111\156\x66\157\x72\155\x61\164\151\157\156", PR__PKG__PANEL))->saemoowcasogykak(IconFontawesomeInterface::ICON_CIRCLE_USER)->gucwmccyimoagwcm(__("\123\145\x65\40\x79\x6f\x75\162\x20\141\x63\x63\x6f\165\156\164\x20\151\x6e\146\x6f\162\x6d\141\164\x69\157\156", PR__PKG__PANEL)))->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\x70\141\x73\163\167\157\x72\x64")->wiskakymeaywyeuw(false)->askmmuauqcuuqsea("\120\141\x6e\145\x6c\120\x72\157\x66\151\x6c\145\x50\x61\x73\163\x77\x6f\162\x64")->gswweykyogmsyawy(__("\x43\x68\141\156\x67\145\x20\120\141\163\x73\167\157\x72\144", PR__PKG__PANEL))->saemoowcasogykak(IconFontawesomeInterface::ICON_UNLOCK_KEYHOLE)->gucwmccyimoagwcm(__("\103\x68\141\x6e\x67\145\x20\x79\x6f\165\x72\x20\x61\x63\143\x6f\165\156\x74\x20\160\141\163\x73\167\x6f\162\x64", PR__PKG__PANEL)))))->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\155\157\x64\165\154\145")->faioisokmmaeimoo()->jyumyyugiwwiqomk(50)->askmmuauqcuuqsea("\x50\x61\x6e\145\154\x4d\157\144\x75\154\x65")->gswweykyogmsyawy(__("\115\157\144\165\154\145\x73", PR__PKG__PANEL))->saemoowcasogykak(IconFontawesomeInterface::ICON_PLUG)); goto cumeycwmuuqawwyu; oqwcmgwimeisusoe: return $this->ewmkmmsuiuwmmwoy(ManipulateArray::yaeiiwwyckwugsem($suuagcecoyuweoqk)); goto acesyuieuuqwgkwm; kgysyqkoqgwmoscq: foreach ($ikamsuaiikaggcga as $cociqcumeacycoeq) { goto ekakkiuuquqkccse; egkeqqgakieyimuq: koukiyqaccegmquc: goto cakuguiciaiaeukg; ekakkiuuquqkccse: if (!$cociqcumeacycoeq instanceof Route) { goto koukiyqaccegmquc; } goto oqwwacmigasucsoc; cakuguiciaiaeukg: emauuoieewwoeyqq: goto wswikooyuaaouqgk; oqwwacmigasucsoc: $suuagcecoyuweoqk[$cociqcumeacycoeq->aakmagwggmkoiiyu()] = $cociqcumeacycoeq->sacmkccceuywoqsq(true, [self::REQUEST => $aqmwamyiwgeeymqa, self::USER => $mkucggyaiaukqoce]); goto egkeqqgakieyimuq; wswikooyuaaouqgk: } goto makomwwyomweyamm; owisckseoogsugqq: $woaeeewomgcuesaa = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x70\x61\x6e\x65\x6c\x5f\162\x65\x73\164\x5f\x62\141\x73\x65\x5f\162\157\165\164\145"), $woaeeewomgcuesaa, $this, $mkucggyaiaukqoce); goto ookcgumoacskyymy; gsqcoqqsioiyoykq: if (!($ssygqisoeqwgkquw && ManipulateUser::esmswawesuyogmik($ssygqisoeqwgkquw, $mkucggyaiaukqoce))) { goto sooecucuakgkuyis; } goto goaowamiyyamueiw; cumeycwmuuqawwyu: if (is_wp_error($mkucggyaiaukqoce)) { goto ywqakqkmmcoceqka; } goto uaicwcqwauosmsqm; acesyuieuuqwgkwm: } public function oeuiuocwuggewqmk($uusmaiomayssaecw) : Route { return new Route($uusmaiomayssaecw); } }
