<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             679574b826ab3             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Panel\Plugin\Plugin; use Pmpr\Module\Panel\Plugin\Woocommerce\Woocommerce; use Pmpr\Module\Panel\REST\REST; class Panel extends ComponentInitiator { const gomekwmqwuwyuugo = "\x70\x61\x6e\145\154\56\x6a\x73\157\156"; const sakykaywcqsiwqgm = "\x50\x41\x4e\x45\x4c\x5f\103\117\116\106\111\107\x5f\x50\101\x54\x48"; public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __("\x50\x61\156\x65\x6c", PR__MDL__PANEL); }, Constants::wuowaiyouwecckaw => false, Constants::sguyaymiiiiewame => Setting::class]); } public function mameiwsayuyquoeq() { if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq()) { User::symcgieuakksimmu(); REST::symcgieuakksimmu(); Asset::symcgieuakksimmu(); Rewrite::symcgieuakksimmu(); Woocommerce::symcgieuakksimmu(); } } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\151\x6e\151\x74", [$this, "\x71\141\171\151\x65\165\163\x63\163\x73\153\x69\161\141\143\x73"]); } public function qayieuscsskiqacs() { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if ($yckucuyiaykemqea = $gkyciwoiiisgywcs->cmaecekuqkwmemms(Constants::gyiksueiaeykqaqq)) { $wkcwykowmmmwioqs = self::gomekwmqwuwyuugo; $kicoywcqyusguqsa = [ Constants::okkqqmwseqscceye, ]; $iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk(); if (!$iiaumsgauuyeqksw->exists(trailingslashit($yckucuyiaykemqea) . $wkcwykowmmmwioqs)) { $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); $uiewakwqscemywuo = ["\x66\x72\x6f\x6e\x74\137\x75\x72\154" => $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy(), "\x61\144\x6d\x69\x6e\137\165\162\x6c" => $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->ewcokmoyomeywmkg(), Constants::NAME => $qkqgcaykemoiecma->ciqkaakiwsgqwiqu(Constants::NAME), Constants::eqkeooqcsscoggia => $qkqgcaykemoiecma->ciqkaakiwsgqwiqu(Constants::eqkeooqcsscoggia)]; $ykquycoiqesuckco = $this->kmuweyayaqoeqiyw(); if ($ykquycoiqesuckco && ($qiouiwasaauyaaue = $ykquycoiqesuckco->gkwkqmwweiawigae())) { foreach ($qiouiwasaauyaaue as $omqquekswieeogws => $omkysikckkcieckq) { if (in_array($omqquekswieeogws, $kicoywcqyusguqsa, true)) { continue; } switch ($omqquekswieeogws) { case Setting::cuoqwcygqikwequw: case Setting::kiueeweqsgsqcgco: case Setting::gkmwweisyowgsgii: if ($mcqieaigyeeyaksm = $ykquycoiqesuckco->giiuwsmyumqwwiyq($omqquekswieeogws)) { $eaeiswmwiqewicoc = $this->caokeucsksukesyo()->iqsmaqoiukeasukw(); $uiewakwqscemywuo[$omqquekswieeogws] = $eaeiswmwiqewicoc->uikkssqcoewckces((int) $mcqieaigyeeyaksm)[0] ?? ''; $uiewakwqscemywuo["{$omqquekswieeogws}\x5f\x68\x74\155\154"] = $eaeiswmwiqewicoc->qaeeusqkgwagwaqc($mcqieaigyeeyaksm); } break; case Setting::gskyioqkyeoaeiyk: $uiewakwqscemywuo[$omqquekswieeogws] = $this->caokeucsksukesyo()->wmkogisswkckmeua()->eqmcwusgemkccwqc($omkysikckkcieckq); break; default: $uiewakwqscemywuo[$omqquekswieeogws] = $omkysikckkcieckq; } } if ($iiaumsgauuyeqksw->mkdir($yckucuyiaykemqea) && $iiaumsgauuyeqksw->coeoweawgagkycwe($yckucuyiaykemqea)) { $iiaumsgauuyeqksw->mikiwoyomouecayw($yckucuyiaykemqea, $wkcwykowmmmwioqs, $uiewakwqscemywuo); } } } } } }
