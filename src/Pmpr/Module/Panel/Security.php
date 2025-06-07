<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             68445550d64b6             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Security\AbstractSecurity; use WP_REST_Request; class Security extends AbstractSecurity { public function kgquecmsgcouyaya() { parent::kgquecmsgcouyaya(); $this->aqaqisyssqeomwom('panel_auth_verify', [$this, 'aygyoawiqemowuem'], 10, 2); } public function aygyoawiqemowuem($sogksuscggsicmac, $aqmwamyiwgeeymqa) { if ($aqmwamyiwgeeymqa instanceof WP_REST_Request && !is_wp_error($sogksuscggsicmac) && $this->wmkggougegmmywqg('auth')) { $ussowkigumoaoowo = $this->gmcyoyosemugmkgg('auth', true, $aqmwamyiwgeeymqa->get_params()); if (!$ussowkigumoaoowo[Constants::imqkacyywmmamsqm]) { $sogksuscggsicmac = $ussowkigumoaoowo[Constants::iwyueouqaqegmcas]; } } return $sogksuscggsicmac; } }
