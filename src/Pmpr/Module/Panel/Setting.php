<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             68010676a6d9c             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel; use Pmpr\Common\Foundation\FormGenerator\Backend\Setting\Setting as BaseClass; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; class Setting extends BaseClass { const cuoqwcygqikwequw = 'side_logo'; const gkmwweisyowgsgii = 'small_logo'; const gskyioqkyeoaeiyk = 'page_links'; const igmwackauwsummys = 'footer_text'; const aaascawocuywsuiu = 'add_admin_for'; const qusmmwuysyaqacgm = 'auth_'; const sieuimaseocuuyem = self::qusmmwuysyaqacgm . 'mode'; const kiueeweqsgsqcgco = self::qusmmwuysyaqacgm . Constants::mkousmkiawwousws; const amceiamqoiaqkqqc = self::qusmmwuysyaqacgm . 'background_color'; const ekmmgmqqcomweoqa = '_personal_fields'; const qaoqekkamwkyqcsi = 'user_preview_fields'; const gyogiiwkqowygoes = 'require' . self::ekmmgmqqcomweoqa; const kioockukciugewka = Constants::wceagkqgmeogkoig . self::ekmmgmqqcomweoqa; const sweqwcsqywoaomyg = 'verifiable' . self::ekmmgmqqcomweoqa; public function qiccuiwooiquycsg() { $this->gswweykyogmsyawy(__('Panel', PR__MDL__PANEL))->igiywquyccyiaucw(Constants::ysgwugcqguggmigq, __('Panel Setting', PR__MDL__PANEL)); parent::qiccuiwooiquycsg(); } public function ykwqaukkycogooii() { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $gskmiygkoyikokoy = $this->acmesguiqyqgkeyk(); $this->ogimmkwaymekmoky($uuyucgkyusckoaeq->mkcwgaeaaweamyyg(Constants::uwycywkimsycqwcy)->saemoowcasogykak(IconInterface::ycwuwkomomgswcgg)->gswweykyogmsyawy(__('View', PR__MDL__PANEL))->gucwmccyimoagwcm(__('View Configuration', PR__MDL__PANEL))->kwkugmqouisgkqig($uuyucgkyusckoaeq->ycgeeoiieoiakgam(Constants::ioomakeyqiqowgmk)->gswweykyogmsyawy(__('General', PR__MDL__PANEL))->saemoowcasogykak(IconInterface::wukkqukiiuuoyiiy)->mkksewyosgeumwsa($uuyucgkyusckoaeq->quaegkgkucwyeiqg(self::gkmwweisyowgsgii)->gswweykyogmsyawy(__('Small Logo', PR__MDL__PANEL)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->quaegkgkucwyeiqg(self::cuoqwcygqikwequw)->gswweykyogmsyawy(__('Side Logo', PR__MDL__PANEL)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(self::aaascawocuywsuiu)->gswweykyogmsyawy(__('Show Admin To', PR__MDL__PANEL))->oikgogcweiiaocka()->acauweqyyugwisqc($this->caokeucsksukesyo()->issssuygyewuaswa()->yagwwwqikmkuyicq(true))))->kwkugmqouisgkqig($uuyucgkyusckoaeq->ycgeeoiieoiakgam('configs')->gswweykyogmsyawy(__('Configs', PR__MDL__PANEL))->saemoowcasogykak(IconInterface::wukkqukiiuuoyiiy)->aucimgwswmgaocae($uuyucgkyusckoaeq->doeuiogekyiwgsgw('authentication_page')->gswweykyogmsyawy(__('Authentication Page', PR__MDL__PANEL))->saemoowcasogykak(IconInterface::cokkqwmiaowmqcqs)->mkksewyosgeumwsa($uuyucgkyusckoaeq->quaegkgkucwyeiqg(self::kiueeweqsgsqcgco)->gswweykyogmsyawy(__('Image', PR__MDL__PANEL)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(self::amceiamqoiaqkqqc)->gswweykyogmsyawy(__('Background Color', PR__MDL__PANEL))->ikaowoaikyaicgge()))->aucimgwswmgaocae($uuyucgkyusckoaeq->doeuiogekyiwgsgw(Constants::yawumiieikgwoqmw)->gswweykyogmsyawy(__('Footer', PR__MDL__PANEL))->saemoowcasogykak(IconInterface::oewqcgkeeecawmom)->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(self::igmwackauwsummys)->gswweykyogmsyawy(__('Footer Text', PR__MDL__PANEL)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->qqmgmgasauucoago(self::gskyioqkyeoaeiyk)->gswweykyogmsyawy(__('Footer Links', PR__MDL__PANEL))->omsoosuoikgueyke()->gucwmccyimoagwcm(__('We show selected page as Link in footer after contact information.', PR__MDL__PANEL))->ewweaossowcqywaw($this->caokeucsksukesyo()->wmkogisswkckmeua()->kyquyqwwkoquqwwg([Constants::ccyeycyyykwuymsy => [Constants::egwoacukmsioosum, Constants::eqkeooqcsscoggia]]))))))->ogimmkwaymekmoky($uuyucgkyusckoaeq->mkcwgaeaaweamyyg('user_profile')->gswweykyogmsyawy(__('User Profile', PR__MDL__SALARY))->saemoowcasogykak(IconInterface::kswoiismmycqamse)->gucwmccyimoagwcm(__('User Profile Configuration', PR__MDL__SALARY))->kwkugmqouisgkqig($uuyucgkyusckoaeq->ycgeeoiieoiakgam(Constants::ymckmcsiymwqucoq)->saemoowcasogykak(IconInterface::saaeaweiqyuoymem)->gswweykyogmsyawy(__('Personal Fields Configuration', PR__MDL__SALARY))->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(self::kioockukciugewka)->gswweykyogmsyawy(__('Ignore Fields', PR__MDL__PANEL))->oikgogcweiiaocka()->acauweqyyugwisqc($gskmiygkoyikokoy))->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(self::gyogiiwkqowygoes)->gswweykyogmsyawy(__('Require Fields', PR__MDL__PANEL))->oikgogcweiiaocka()->acauweqyyugwisqc($gskmiygkoyikokoy))->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(self::sweqwcsqywoaomyg)->gswweykyogmsyawy(__('Verifiable Fields', PR__MDL__PANEL))->oikgogcweiiaocka()->acauweqyyugwisqc($gskmiygkoyikokoy))->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(self::qaoqekkamwkyqcsi)->gswweykyogmsyawy(__('User Preview Data', PR__MDL__PANEL))->oikgogcweiiaocka()->acauweqyyugwisqc($gskmiygkoyikokoy)))); parent::ykwqaukkycogooii(); } public function acmesguiqyqgkeyk() : array { $ikgwqyuyckaewsow = User::symcgieuakksimmu()->ugmceccgwaaaigiy([], [Constants::aisguagukaewucii => Constants::eoaiagsgqsmskugs, Constants::wacsysugayaeayag => false]); return $ikgwqyuyckaewsow; } public function swqaqgaeiewsykyc($qiouiwasaauyaaue = []) { $yckucuyiaykemqea = $this->caokeucsksukesyo()->eiwcuqigayigimak()->cmaecekuqkwmemms(Constants::gyiksueiaeykqaqq); if ($yckucuyiaykemqea) { $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->remove(trailingslashit($yckucuyiaykemqea) . Panel::gomekwmqwuwyuugo); } parent::swqaqgaeiewsykyc($qiouiwasaauyaaue); } }
