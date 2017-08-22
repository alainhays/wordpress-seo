<?php
/**
 * @package WPSEO\Admin\ConfigurationUI
 */

/**
 * Class WPSEO_Config_Field_Social_Profiles_Intro
 */
class WPSEO_Config_Field_Google_Search_Console_Intro extends WPSEO_Config_Field {

	/**
	 * WPSEO_Config_Field_Social_Profiles_Intro constructor.
	 */
	public function __construct() {
		parent::__construct( 'googleSearchConsoleIntro', 'HTML' );

		/* translators: %s is the plugin name */
		$intro1 = sprintf( __( '%1$s integrates with Google Search Console. Search Console is a '.
							   'must-have tool for site owners. You can use it to get a lot of data about ' .
							   'the health of your site. This data can be accessed from within %1$s ' .
							   'if you grant ia access. Don\'t have a Search Console account or is your ' .
							   'site not activated yet?', 'wordpress-seo' ), 'Yoast SEO' );

		$link = '<a href="https://kb.yoast.com/kb/how-to-connect-your-website-to-google-webmaster-tools/">' .
				esc_html( __( 'Find out how to connect Search Console to your site.') ) .
				'</a>';

		$disclaimer = __( 'Ps: we don\'t store your data in any way and don\'t have full access to your account. ' .
						  'Your privacy is safe with us.' );

		$html = '<p>' . esc_html( $intro1 ) . ' ' . $link . '</p>' . '<small>' . esc_html( $disclaimer ) . '</small>';

		$this->set_property( 'html', $html );
	}
}