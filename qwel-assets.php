<?php
/*
Plugin Name: Qwel Assets Beta
Description: This is an asset when using the theme "Qwel".
Version: 1.0
Requires PHP: 7.4
Author: Taigo Ito
Author URI: https://qwel.design/
License: GNU General Public License v3 or later
License URI: https://www.gnu.org/licenses/gpl-3.0.html
 */


defined( 'ABSPATH' ) || exit;


class Qwel_Assets {
		
	public function __construct() {
    // ブロックスタイルを追加 (エディター)
    add_action( 'enqueue_block_editor_assets', [ $this, 'add_block_styles' ] );

    // CSSファイルを読み込み (エディター)
    add_action( 'enqueue_block_assets', [ $this, 'enqueue_scripts' ] );

		// CSS, JSファイルを読み込み (フロント)
		add_action( 'wp_enqueue_scripts', [ $this, 'enqueue_scripts' ] );

	}

  public function add_block_styles() {
    // blockStyles.js
    wp_enqueue_script(
      'qwel-block-styles',
      plugins_url( 'blockStyles.js', __FILE__ ),
      [ 'wp-blocks' ]
    );

  }

  public function enqueue_scripts() {
    // バージョン情報
    $version = '1.0';

		// style.css
		wp_enqueue_style(
			'qwel-style',
			plugins_url( 'style.css', __FILE__ ),
			[],
      $version
		);

    // init.js (フロントエンドのみ)
    if ( !is_admin() ) {
      wp_enqueue_script(
        'qwel-init',
        plugins_url( 'init.js', __FILE__ ),
        [],
        $version,
        true
      );
    }

  }

}

new Qwel_Assets();
