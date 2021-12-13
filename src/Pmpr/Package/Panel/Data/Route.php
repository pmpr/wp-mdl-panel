<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61b74efff1c89             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Panel\Data; use Pmpr\Common\Foundation\Data\Data; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; use Pmpr\Common\Foundation\Traits\ToArrayTrait; use Pmpr\Package\Panel\Panel; class Route extends Data { use ToArrayTrait; protected $parent = null; protected $redirect = false; protected ?array $meta = []; protected int $priority = 1; protected ?string $key = null; protected bool $enable = true; protected ?string $link = null; protected ?string $name = null; protected ?string $icon = null; protected ?string $path = null; protected bool $divider = false; protected ?string $title = null; protected ?array $children = []; protected bool $showInMenu = true; protected ?string $component = null; protected ?string $description = null; public function __construct(string $uusmaiomayssaecw = null) { $this->key = $uusmaiomayssaecw; $this->qksaqgcokiqamueg($uusmaiomayssaecw); } public function cisyiemkeykgkomc() : ?string { return $this->key; } public function aakmagwggmkoiiyu() : ?string { return $this->name; } public function qmgcisuuikgmqcsu() : ?string { return $this->link; } public function qoowicksguscqyks(?string $iwywmkygwewiamwm) : self { goto iaomqomgiwiegoca; owisckseoogsugqq: return $this; goto ookcgumoacskyymy; ysweqawmawicakeo: $this->link = $iwywmkygwewiamwm; goto owisckseoogsugqq; iaomqomgiwiegoca: $this->faioisokmmaeimoo(); goto ysweqawmawicakeo; ookcgumoacskyymy: } public function wywmmeyauqkeskeq(bool $oqkgomucoyswikgk) : self { $this->enable = $oqkgomucoyswikgk; return $this; } public function meqceykmywmqgoym() : ?string { return $this->description; } public function gucwmccyimoagwcm(?string $ukwokcuqauuosmoo) : self { goto cuseccewekgcgkyg; kgysyqkoqgwmoscq: $this->description = $ukwokcuqauuosmoo; goto makomwwyomweyamm; makomwwyomweyamm: return $this; goto oqwcmgwimeisusoe; cuseccewekgcgkyg: $this->giwmekimakcaawsq(self::DESCRIPTION, $ukwokcuqauuosmoo); goto kgysyqkoqgwmoscq; oqwcmgwimeisusoe: } public function faioisokmmaeimoo($ioakuqckwescecsy = true) : self { goto qiaaqkymeuuueoqk; qumkwsqqocooyuoq: asaowisseacciyia: goto gcskyqewysqaceeg; gwiaimosqoiquwkc: goto asaowisseacciyia; goto owgakkqgckqcegoi; gcskyqewysqaceeg: return $this; goto kkewoqqowugagwoy; owgakkqgckqcegoi: acesyuieuuqwgkwm: goto cigesysuauaiccms; cigesysuauaiccms: $this->redirect = true; goto qumkwsqqocooyuoq; qiaaqkymeuuueoqk: if ($ioakuqckwescecsy) { goto acesyuieuuqwgkwm; } goto ugswokwmkumcmigc; ugswokwmkumcmigc: $this->giwmekimakcaawsq("\x72\145\x64\x69\162\145\143\x74", true); goto gwiaimosqoiquwkc; kkewoqqowugagwoy: } public function esccuisocaaouywi($gwqgmkqcgwwmweom) : self { $this->redirect = $gwqgmkqcgwwmweom; return $this; } public function yqeeiukmseiyuici() : array { goto ocgkwqqmgasuoies; ooysmgyeqoiesgqm: if (empty($okcscwesammossuq)) { goto wsemeeocquawyauo; } goto kwoyiysciqumswcy; magymcqykamwqigw: return $gwqgmkqcgwwmweom; goto ukogwqiuuuakkawy; kwoyiysciqumswcy: $wcgsoqmmciswkmiq = reset($okcscwesammossuq); goto aaogeemgkogagkai; wmaeicoyyciuaiuy: $okcscwesammossuq = $this->mmoaikqueyiwcesm(); goto ooysmgyeqoiesgqm; ocgkwqqmgasuoies: $gwqgmkqcgwwmweom = []; goto wmaeicoyyciuaiuy; aaogeemgkogagkai: if (!($wcgsoqmmciswkmiq instanceof Route && !$wcgsoqmmciswkmiq->cqyswgsawqcqagee())) { goto wwswmaewcaisauei; } goto qqmmycmsoqegcqqw; oiiqqgyqmggyiums: wsemeeocquawyauo: goto magymcqykamwqigw; qqmmycmsoqegcqqw: $gwqgmkqcgwwmweom = [self::NAME => $wcgsoqmmciswkmiq->eyeeaqcaaugamymu()]; goto isqwwmikecauwyuc; isqwwmikecauwyuc: wwswmaewcaisauei: goto oiiqqgyqmggyiums; ukogwqiuuuakkawy: } public function eyeeaqcaaugamymu() : ?string { goto oymyqcoekqyuiguq; jkgouewqysmscmqs: return $aiieyweysaukqemc; goto sgiuwkisugmewmcs; asqqqqakiagymemk: gicmaqmuscawegie: goto jkgouewqysmscmqs; ucksaiwquekagyqe: $egcmyoygeaayoowa = $omwmuycmeqcqokom->eyeeaqcaaugamymu(); goto iyeswoaqkaeggiiy; oymyqcoekqyuiguq: $aiieyweysaukqemc = $this->cisyiemkeykgkomc(); goto ayamomygygmgwgkg; iyeswoaqkaeggiiy: $aiieyweysaukqemc = "{$egcmyoygeaayoowa}\x5f{$aiieyweysaukqemc}"; goto asqqqqakiagymemk; gygqgauaceiuawkq: if (!$omwmuycmeqcqokom instanceof Route) { goto gicmaqmuscawegie; } goto ucksaiwquekagyqe; ayamomygygmgwgkg: $omwmuycmeqcqokom = $this->ygqycmmkoiuocoia(); goto gygqgauaceiuawkq; sgiuwkisugmewmcs: } public function giwmekimakcaawsq($uusmaiomayssaecw, $eqgoocgaqwqcimie) : self { $this->meta[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; return $this; } public function gwckcieqcmsaysow($uusmaiomayssaecw) : bool { return isset($this->meta[$uusmaiomayssaecw]); } public function kygqaqiwaucqacqm() : bool { return $this->showInMenu; } public function wiskakymeaywyeuw(bool $cyiwaggmwimigmcc) : self { $this->showInMenu = $cyiwaggmwimigmcc; return $this; } public function mmuyuqussqkgkega($omwmuycmeqcqokom) : self { $this->parent = $omwmuycmeqcqokom; return $this; } public function ygqycmmkoiuocoia() { return $this->parent; } public function cqusmgskowmesgcg() : ?string { return $this->component; } public function askmmuauqcuuqsea(?string $wksoawcgagcgoask) : self { $this->component = $wksoawcgagcgoask; return $this; } public function cqyswgsawqcqagee() : bool { return $this->divider; } public function gckcwqgiewywsgeq() : self { $this->divider = true; return $this; } public function eyamqkqiykagecsw() : ?string { return $this->icon; } public function saemoowcasogykak(?string $wkaqekwwgqsqwcoi) : self { goto kceeuicccqscwgsu; iquecygaakmiomeg: $this->giwmekimakcaawsq(self::ICON, $wkaqekwwgqsqwcoi); goto eacysqsegwcqawsa; kceeuicccqscwgsu: $this->icon = $wkaqekwwgqsqwcoi; goto iquecygaakmiomeg; eacysqsegwcqawsa: return $this; goto yimeskeioamqmuwg; yimeskeioamqmuwg: } public function amqagusacuuuaswg() : ?string { return $this->path; } public function qksaqgcokiqamueg(?string $mkomwsiykqigmqca) : self { $this->path = $mkomwsiykqigmqca; return $this; } public function jyumyyugiwwiqomk(int $sqqewmoeaekuyyas) : self { $this->priority = $sqqewmoeaekuyyas; return $this; } public function yywskysiycwkwsgw() : ?int { return $this->priority; } public function qcgakseyaikigqco() : ?string { return $this->title; } public function gswweykyogmsyawy(?string $meqocwsecsywiiqs) : self { goto yeemsgmumygmumqw; yeemsgmumygmumqw: $this->giwmekimakcaawsq(self::TITLE, $meqocwsecsywiiqs); goto wkaoyycsoeoyqcae; cwugokqsmiomgmqg: return $this; goto uuuceqkseqkqawko; wkaoyycsoeoyqcae: $this->title = $meqocwsecsywiiqs; goto cwugokqsmiomgmqg; uuuceqkseqkqawko: } public function mmoaikqueyiwcesm() : ?array { return $this->children; } public function kkisyguyosoyymqs() : bool { return !empty($this->mmoaikqueyiwcesm()); } public function pmouaioykaoceyag(Route $wcgsoqmmciswkmiq) : self { goto ekoegocuqoycoeyq; akeoaicoieaiekcw: return $this; goto kskqquqsegiiogek; yksamaucqkqsawkk: $this->children[$wcgsoqmmciswkmiq->cisyiemkeykgkomc()] = $wcgsoqmmciswkmiq; goto akeoaicoieaiekcw; ekoegocuqoycoeyq: $wcgsoqmmciswkmiq->mmuyuqussqkgkega($this); goto yksamaucqkqsawkk; kskqquqsegiiogek: } public function eswyoccyuiyiqkco(array $okcscwesammossuq) : Route { goto wwcwmkowgooocaem; becceuuwokgoaewy: return $this; goto wyugqoowakyicyic; qgkiguggkyiycwow: mocaoayiouggauiy: goto becceuuwokgoaewy; wwcwmkowgooocaem: foreach ($okcscwesammossuq as $wcgsoqmmciswkmiq) { $this->pmouaioykaoceyag($wcgsoqmmciswkmiq); ygskksomysgaokek: } goto qgkiguggkyiycwow; wyugqoowakyicyic: } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { goto mmmqqoemusicwgqg; omsmaougqkqigogw: iuysqgmmgqiywssm: goto geasgywiogoeamek; wiaesksmicgikqcm: kucqcgeesiccuuia: goto mcucegiogmuyogki; iaoyeugekskmewgs: $this->redirect = $this->yqeeiukmseiyuici(); goto iokemmkgmcaksiqu; gsiaskgsukseumig: $this->askmmuauqcuuqsea(ucfirst(ManipulateString::qoqowykumameucwa($this->aakmagwggmkoiiyu()))); goto syiyemqigyugagks; auaigccmwqwsqsku: foreach ($okcscwesammossuq as $wcgsoqmmciswkmiq) { goto amqgiisymksuuuss; iwgmywqocewwgoeo: $wcgsoqmmciswkmiq->mmuyuqussqkgkega($this); goto syoeqaqkseguwmgy; gwkawguwsamuomuo: oycuaqewsskgkqci: goto ucasigqmoiwaimkk; sgiouaqukyycswqm: ocmagamuyawyiyka: goto gwkawguwsamuomuo; syoeqaqkseguwmgy: $sacmkccceuywoqsq[$wcgsoqmmciswkmiq->cisyiemkeykgkomc()] = $wcgsoqmmciswkmiq->sacmkccceuywoqsq(true, $ywmkwiwkosakssii); goto sgiouaqukyycswqm; amqgiisymksuuuss: if (!$wcgsoqmmciswkmiq instanceof Route) { goto ocmagamuyawyiyka; } goto iwgmywqocewwgoeo; ucasigqmoiwaimkk: } goto wiaesksmicgikqcm; okagauksoqkoqygi: $mkucggyaiaukqoce = ManipulateArray::get($ywmkwiwkosakssii, self::USER); goto eciksmgaqikwegwq; measoqewessauqma: $sacmkccceuywoqsq = []; goto auaigccmwqwsqsku; qckouamqueqiykqi: if (!$okcscwesammossuq) { goto uugwmywmaqomeksa; } goto measoqewessauqma; ucaoyoamaycsiacq: weouocwmwicayyiy: goto iuyagqakcieasiua; woqkgwmkmqsuceuy: goto iuysqgmmgqiywssm; goto imwiyqcekcykscui; xogaycsaesgqeqig: if (!(!$this->cqusmgskowmesgcg() && !$this->qmgcisuuikgmqcsu())) { goto aeaciamekuqyieys; } goto gsiaskgsukseumig; iuyagqakcieasiua: goto gkkwmqoacciwomqs; goto oasisywuwssumsok; qweyymyuuqwcmkqg: if (is_bool($gwqgmkqcgwwmweom) && $gwqgmkqcgwwmweom) { goto ggyoywwggggekycs; } goto guqmgiqaaowaauyo; eciksmgaqikwegwq: $aqmwamyiwgeeymqa = ManipulateArray::get($ywmkwiwkosakssii, self::REQUEST); goto kieyoaoawqacqamy; mccimkgwkkamsime: $this->giwmekimakcaawsq("\x72\x65\144\x69\x72\145\x63\164", $this->yqeeiukmseiyuici()); goto ucaoyoamaycsiacq; gqaimiooakyykccy: uugwmywmaqomeksa: goto agemeseegiuuowgo; mmmqqoemusicwgqg: $this->name = $this->eyeeaqcaaugamymu(); goto iquugwoswgkoiieg; guqmgiqaaowaauyo: if (!$this->gwckcieqcmsaysow("\162\x65\x64\x69\x72\145\143\x74")) { goto weouocwmwicayyiy; } goto mccimkgwkkamsime; mcucegiogmuyogki: $this->children = ManipulateArray::yaeiiwwyckwugsem($sacmkccceuywoqsq); goto gqaimiooakyykccy; oasisywuwssumsok: ggyoywwggggekycs: goto iaoyeugekskmewgs; iquugwoswgkoiieg: if ($this->cqyswgsawqcqagee()) { goto ugiqiewymimqecsu; } goto xogaycsaesgqeqig; imwiyqcekcykscui: ugiqiewymimqecsu: goto umemmgiwimkymaya; agemeseegiuuowgo: if (!$this->ygqycmmkoiuocoia() instanceof Route) { goto wowmysuygugawmmu; } goto goswwiomuackymqi; gykuaukukosiocoy: wowmysuygugawmmu: goto camawumockccayaq; geasgywiogoeamek: $gwqgmkqcgwwmweom = $this->redirect; goto qweyymyuuqwcmkqg; syiyemqigyugagks: aeaciamekuqyieys: goto woqkgwmkmqsuceuy; goswwiomuackymqi: $this->mmuyuqussqkgkega($this->ygqycmmkoiuocoia()->cisyiemkeykgkomc()); goto gykuaukukosiocoy; kieyoaoawqacqamy: $okcscwesammossuq = DecoratorHook::sscegwueamckwmcy("\x70\x61\156\145\154\137\x72\157\165\x74\145\137{$this->cisyiemkeykgkomc()}\x5f\x63\x68\x69\x6c\144\x72\145\156", $this->mmoaikqueyiwcesm(), $mkucggyaiaukqoce, $aqmwamyiwgeeymqa); goto qckouamqueqiykqi; umemmgiwimkymaya: $this->qksaqgcokiqamueg(''); goto omsmaougqkqigogw; iokemmkgmcaksiqu: gkkwmqoacciwomqs: goto okagauksoqkoqygi; camawumockccayaq: } }
