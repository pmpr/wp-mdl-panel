<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             68a661cc603d7             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel\Plugin\Woocommerce; use Pmpr\Module\Panel\Container; class Auth extends Container { public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse('woocommerce_rest_check_permissions', [$this, 'koeimwecyiiqgesk'], 10, 4); parent::kgquecmsgcouyaya(); } public function koeimwecyiiqgesk($qoowakyqgwcscuss, $mgkceomocowocqyo, $aokagokqyuysuksm, $sqeykgyoooqysmca) : bool { $sogksuscggsicmac = $this->ocksiywmkyaqseou('get_jwt_auth_token', false); if ($sogksuscggsicmac && !is_wp_error($sogksuscggsicmac)) { $mkucggyaiaukqoce = $this->caokeucsksukesyo()->issssuygyewuaswa()->get($this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($sogksuscggsicmac, 2)); if ($mkucggyaiaukqoce) { $qoowakyqgwcscuss = true; } } return $qoowakyqgwcscuss; } }
