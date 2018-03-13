<?php
/*
* @package rjticker
*/

namespace Inc\Pages;

/**
* Admin
*/
class Admin
{
	
	public function register()
	{
		add_action( 'admin_menu', array( $this, 'add_admin_pages' ) );
	}

	public function add_admin_pages()
	{
		add_menu_page( 'RJ TICKER', 'RJ TICKER', 'manage_options', 'rj_ticker', array($this, 'admin_page_index'), 'dashicons-shop', 110 );
	}

	public function admin_page_index() {
		?>
			<div class="wrap">
				<h1>RJ Ticker Sttings</h1>
			</div>
		<?php
	}
}