<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66870825de9a6             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Module\Panel\Plugin\Plugin; use Pmpr\Module\Panel\REST\REST; use Pmpr\Module\Panel\Setting as Options; class Panel extends ComponentInitiator { const gomekwmqwuwyuugo = "\160\x61\156\145\x6c\56\x6a\x73\x6f\x6e"; const sakykaywcqsiwqgm = "\120\x41\116\x45\x4c\x5f\x43\117\x4e\x46\x49\107\x5f\x50\x41\124\x48"; public function register() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\x50\x61\156\x65\154", PR__MDL__PANEL); }, self::wuowaiyouwecckaw => false]); } public function mameiwsayuyquoeq() { if (!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { goto yiowgigkkwsoqcci; } Setting::symcgieuakksimmu(); yiowgigkkwsoqcci: if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq()) { goto ieqesiiageaauiuw; } User::symcgieuakksimmu(); REST::symcgieuakksimmu(); Asset::symcgieuakksimmu(); Plugin::symcgieuakksimmu(); Rewrite::symcgieuakksimmu(); ieqesiiageaauiuw: } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x69\x6e\151\164", [$this, "\161\141\x79\151\x65\x75\x73\143\163\x73\153\151\x71\141\x63\163"]); } public function qayieuscsskiqacs() { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (!($yckucuyiaykemqea = $gkyciwoiiisgywcs->cmaecekuqkwmemms(self::gyiksueiaeykqaqq))) { goto suqceasgacskcmkc; } $wkcwykowmmmwioqs = self::gomekwmqwuwyuugo; $kicoywcqyusguqsa = [Setting::okkqqmwseqscceye, Setting::cuoqwcygqikwequw . self::mswocgcucqoaesaa, Setting::gkmwweisyowgsgii . self::mswocgcucqoaesaa]; $iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk(); if ($iiaumsgauuyeqksw->exists(trailingslashit($yckucuyiaykemqea) . $wkcwykowmmmwioqs)) { goto oeocukauoyosicso; } $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); $uiewakwqscemywuo = ["\146\x72\157\156\164\137\x75\x72\x6c" => $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy(), "\141\x64\155\x69\156\x5f\x75\162\x6c" => $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->ewcokmoyomeywmkg(), self::NAME => $qkqgcaykemoiecma->ciqkaakiwsgqwiqu(self::NAME), self::eqkeooqcsscoggia => $qkqgcaykemoiecma->ciqkaakiwsgqwiqu(self::eqkeooqcsscoggia)]; $amakmumgguksgmum = Options::symcgieuakksimmu(); if (!($qiouiwasaauyaaue = $amakmumgguksgmum::symcgieuakksimmu()->gkwkqmwweiawigae())) { goto oimkeqocuguqqsqk; } foreach ($qiouiwasaauyaaue as $omqquekswieeogws => $omkysikckkcieckq) { if (!in_array($omqquekswieeogws, $kicoywcqyusguqsa, true)) { goto oyeyomcgkmgymogq; } goto mscyggqcesgqqksu; oyeyomcgkmgymogq: switch ($omqquekswieeogws) { case $amakmumgguksgmum::cuoqwcygqikwequw: case $amakmumgguksgmum::gkmwweisyowgsgii: if (!($weowoqykiyuqcwam = $amakmumgguksgmum::symcgieuakksimmu()->giiuwsmyumqwwiyq($omqquekswieeogws))) { goto mogkoocsoeuyoqqa; } $eaeiswmwiqewicoc = $this->caokeucsksukesyo()->iqsmaqoiukeasukw(); $uiewakwqscemywuo[$omqquekswieeogws] = $gkyciwoiiisgywcs->get($eaeiswmwiqewicoc->uikkssqcoewckces((int) $weowoqykiyuqcwam), 0); $uiewakwqscemywuo["{$omqquekswieeogws}\137\x68\164\x6d\154"] = $eaeiswmwiqewicoc->qaeeusqkgwagwaqc($weowoqykiyuqcwam); mogkoocsoeuyoqqa: goto iesekaeqeomeuaui; case $amakmumgguksgmum::gskyioqkyeoaeiyk: $uiewakwqscemywuo[$omqquekswieeogws] = $this->caokeucsksukesyo()->wmkogisswkckmeua()->eqmcwusgemkccwqc($omkysikckkcieckq); goto iesekaeqeomeuaui; default: $uiewakwqscemywuo[$omqquekswieeogws] = $omkysikckkcieckq; } wsesqmcqoiyyqkqi: iesekaeqeomeuaui: mscyggqcesgqqksu: } gamqcwuwkikwqoay: if (!($iiaumsgauuyeqksw->mkdir($yckucuyiaykemqea) && $iiaumsgauuyeqksw->coeoweawgagkycwe($yckucuyiaykemqea))) { goto wkwamkgkwykeqkec; } $iiaumsgauuyeqksw->mikiwoyomouecayw($yckucuyiaykemqea, $wkcwykowmmmwioqs, $uiewakwqscemywuo); wkwamkgkwykeqkec: oimkeqocuguqqsqk: oeocukauoyosicso: suqceasgacskcmkc: } }
