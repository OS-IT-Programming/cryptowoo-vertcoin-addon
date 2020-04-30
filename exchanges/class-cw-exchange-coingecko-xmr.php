<?php
if ( ! defined( 'ABSPATH' ) ) {
	die();
}// Exit if accessed directly

/**
 * CoinGecko Exchange Rates Class
 *
 * @category CryptoWoo
 * @package Exchange
 * @subpackage ExchangeBase
 * Author: We Program IT | legal company name: OS IT Programming AS | Company org nr: NO 921 074 077
 * Author URI: https://weprogram.it
 */
class CW_Exchange_CoinGecko_VTC extends CW_Exchange_CoinGecko {
	/** Create and return search currency ID for exchange API (for exchanges that use ID instead of currency code)
	 * This function is used by cryptocurrency addons to add their search currency id. If it has data use it.
	 * Default is false because most exchanges does not use ids but currency code.
	 *
	 * @return string|int|false
	 */
	protected function get_search_currency_id() {
		return 'vertcoin';
	}
}
