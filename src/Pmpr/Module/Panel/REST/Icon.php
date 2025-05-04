<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             681751ecf2ea8             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel\REST; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Icon extends Common { public function __construct() { $this->rest_base = Constants::qgqyauaqwqmqseim; parent::__construct(); } public function register_routes() { $this->register('/store', [Constants::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, Constants::wwgusigoaksqmwsm => [$this, 'aaeyeciuoqooykka']]); } public function aaeyeciuoqooykka(WP_REST_Request $aqmwamyiwgeeymqa) { $cegeqaoecgsygmiq = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::qgqyauaqwqmqseim); $kisaucuwwaaiwuqe = $this->caokeucsksukesyo()->usugyumcgeaaowsi()->eyamqkqiykagecsw($cegeqaoecgsygmiq, [Constants::aisguagukaewucii => Constants::auqoykcmsiauccao]); return $this->ewmkmmsuiuwmmwoy($kisaucuwwaaiwuqe); } }
