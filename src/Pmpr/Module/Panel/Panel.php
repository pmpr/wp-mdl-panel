<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             68010676a6d9c             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel; use Pmpr\Common\Foundation\Container\ModuleInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Panel\Plugin\Woocommerce\Woocommerce; use Pmpr\Module\Panel\REST\REST; class Panel extends ModuleInitiator { const gomekwmqwuwyuugo = 'panel.json'; const sakykaywcqsiwqgm = 'PANEL_CONFIG_PATH'; public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __('Panel', PR__MDL__PANEL); }, Constants::wuowaiyouwecckaw => false, Constants::sguyaymiiiiewame => Setting::class]); } public function mameiwsayuyquoeq() { if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq()) { User::symcgieuakksimmu(); REST::symcgieuakksimmu(); Asset::symcgieuakksimmu(); Rewrite::symcgieuakksimmu(); Woocommerce::symcgieuakksimmu(); } } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('init', [$this, 'qayieuscsskiqacs']); } public function qayieuscsskiqacs() { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if ($yckucuyiaykemqea = $gkyciwoiiisgywcs->cmaecekuqkwmemms(Constants::gyiksueiaeykqaqq)) { $wkcwykowmmmwioqs = self::gomekwmqwuwyuugo; $kicoywcqyusguqsa = [ Constants::okkqqmwseqscceye, ]; $iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk(); if (!$iiaumsgauuyeqksw->exists(trailingslashit($yckucuyiaykemqea) . $wkcwykowmmmwioqs)) { $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); $uiewakwqscemywuo = ['front_url' => $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy(), 'admin_url' => $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->ewcokmoyomeywmkg(), Constants::NAME => $qkqgcaykemoiecma->ciqkaakiwsgqwiqu(Constants::NAME), Constants::eqkeooqcsscoggia => $qkqgcaykemoiecma->ciqkaakiwsgqwiqu(Constants::eqkeooqcsscoggia)]; $ykquycoiqesuckco = $this->kmuweyayaqoeqiyw(); if ($ykquycoiqesuckco && ($qiouiwasaauyaaue = $ykquycoiqesuckco->gkwkqmwweiawigae())) { foreach ($qiouiwasaauyaaue as $omqquekswieeogws => $omkysikckkcieckq) { if (in_array($omqquekswieeogws, $kicoywcqyusguqsa, true)) { continue; } switch ($omqquekswieeogws) { case Setting::cuoqwcygqikwequw: case Setting::kiueeweqsgsqcgco: case Setting::gkmwweisyowgsgii: if ($mcqieaigyeeyaksm = $ykquycoiqesuckco->giiuwsmyumqwwiyq($omqquekswieeogws)) { $eaeiswmwiqewicoc = $this->caokeucsksukesyo()->iqsmaqoiukeasukw(); $uiewakwqscemywuo[$omqquekswieeogws] = $eaeiswmwiqewicoc->uikkssqcoewckces((int) $mcqieaigyeeyaksm)[0] ?? ''; $uiewakwqscemywuo["{$omqquekswieeogws}_html"] = $eaeiswmwiqewicoc->qaeeusqkgwagwaqc($mcqieaigyeeyaksm); } break; case Setting::gskyioqkyeoaeiyk: $uiewakwqscemywuo[$omqquekswieeogws] = $this->caokeucsksukesyo()->wmkogisswkckmeua()->eqmcwusgemkccwqc($omkysikckkcieckq); break; default: $uiewakwqscemywuo[$omqquekswieeogws] = $omkysikckkcieckq; } } if ($iiaumsgauuyeqksw->mkdir($yckucuyiaykemqea) && $iiaumsgauuyeqksw->coeoweawgagkycwe($yckucuyiaykemqea)) { $iiaumsgauuyeqksw->mikiwoyomouecayw($yckucuyiaykemqea, $wkcwykowmmmwioqs, $uiewakwqscemywuo); } } } } } }
