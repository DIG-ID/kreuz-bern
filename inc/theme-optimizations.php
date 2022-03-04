<?php

/**
 * Disable self pingbacks
*/
function kreuz_disable_self_pingbacks( &$links ) {
	foreach ( $links as $l => $link )
				if ( 0 === strpos( $link, get_option( 'home' ) ) )
						unset($links[$l]);
}

add_action( 'pre_ping', 'kreuz_disable_self_pingbacks' );

/**
 * Remove Query Strings
 */
function remove_query_strings() {
	if ( ! is_admin() ) {
			add_filter( 'script_loader_src', 'remove_query_strings_split', 15 );
			add_filter( 'style_loader_src', 'remove_query_strings_split', 15 );
	}
}

function remove_query_strings_split( $src ) {
	$output = preg_split("/(&ver|\?ver)/", $src);
	return $output[0];
}
add_action( 'init', 'remove_query_strings' );

/**
 * Disable embeds
 */
function my_deregister_scripts() {
	wp_dequeue_script( 'wp-embed' );
}

add_action( 'wp_footer', 'my_deregister_scripts' );


/**
 * Disable the emoji's
 */
function disable_emojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' ); 
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' ); 
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
	add_filter( 'wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2 );
}
add_action( 'init', 'disable_emojis' );

/**
 * Filter function used to remove the tinymce emoji plugin.
 *
 * @param array $plugins 
 * @return array Difference betwen the two arrays
 */
function disable_emojis_tinymce( $plugins ) {
	if ( is_array( $plugins ) ) {
		return array_diff( $plugins, array( 'wpemoji' ) );
	} else {
		return array();
	}
}

 /**
 * Remove emoji CDN hostname from DNS prefetching hints.
 *
 * @param array $urls URLs to print for resource hints.
 * @param string $relation_type The relation type the URLs are printed for.
 * @return array Difference betwen the two arrays.
 */
function disable_emojis_remove_dns_prefetch( $urls, $relation_type ) {
	if ( 'dns-prefetch' == $relation_type ) {
	/** This filter is documented in wp-includes/formatting.php */
		$emoji_svg_url = apply_filters( 'emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/' );

		$urls = array_diff( $urls, array( $emoji_svg_url ) );

	}
	return $urls;

}

/**
 * Disable RSS feed.
 */
function itsme_disable_feed() {
	wp_die( __( 'No feed available, please visit the <a href="'. esc_url( home_url( '/' ) ) .'">homepage</a>!' ) );
}

add_action( 'do_feed', 'itsme_disable_feed', 1 );
add_action( 'do_feed_rdf', 'itsme_disable_feed', 1 );
add_action( 'do_feed_rss', 'itsme_disable_feed', 1 );
add_action( 'do_feed_rss2', 'itsme_disable_feed', 1 );
add_action( 'do_feed_atom', 'itsme_disable_feed', 1 );
add_action( 'do_feed_rss2_comments', 'itsme_disable_feed', 1 );
add_action( 'do_feed_atom_comments', 'itsme_disable_feed', 1 );


class FLHM_HTML_Compression
{
protected $flhm_compress_css = true;
protected $flhm_compress_js = true;
protected $flhm_info_comment = true;
protected $flhm_remove_comments = true;
protected $html;
public function __construct($html)
{
if (!empty($html))
{
$this->flhm_parseHTML($html);
}
}
public function __toString()
{
return $this->html;
}
protected function flhm_bottomComment($raw, $compressed)
{
$raw = strlen($raw);
$compressed = strlen($compressed);
$savings = ($raw-$compressed) / $raw * 100;
$savings = round($savings, 2);
return '<!--HTML compressed, size saved '.$savings.'%. From '.$raw.' bytes, now '.$compressed.' bytes-->';
}
protected function flhm_minifyHTML($html)
{
$pattern = '/<(?<script>script).*?<\/script\s*>|<(?<style>style).*?<\/style\s*>|<!(?<comment>--).*?-->|<(?<tag>[\/\w.:-]*)(?:".*?"|\'.*?\'|[^\'">]+)*>|(?<text>((<[^!\/\w.:-])?[^<]*)+)|/si';
preg_match_all($pattern, $html, $matches, PREG_SET_ORDER);
$overriding = false;
$raw_tag = false;
$html = '';
foreach ($matches as $token)
{
$tag = (isset($token['tag'])) ? strtolower($token['tag']) : null;
$content = $token[0];
if (is_null($tag))
{
if ( !empty($token['script']) )
{
$strip = $this->flhm_compress_js;
}
else if ( !empty($token['style']) )
{
$strip = $this->flhm_compress_css;
}
else if ($content == '<!--wp-html-compression no compression-->')
{
$overriding = !$overriding; 
continue;
}
else if ($this->flhm_remove_comments)
{
if (!$overriding && $raw_tag != 'textarea')
{
$content = preg_replace('/<!--(?!\s*(?:\[if [^\]]+]|<!|>))(?:(?!-->).)*-->/s', '', $content);
}
}
}
else
{
if ($tag == 'pre' || $tag == 'textarea')
{
$raw_tag = $tag;
}
else if ($tag == '/pre' || $tag == '/textarea')
{
$raw_tag = false;
}
else
{
if ($raw_tag || $overriding)
{
$strip = false;
}
else
{
$strip = true; 
$content = preg_replace('/(\s+)(\w++(?<!\baction|\balt|\bcontent|\bsrc)="")/', '$1', $content); 
$content = str_replace(' />', '/>', $content);
}
}
} 
if ($strip)
{
$content = $this->flhm_removeWhiteSpace($content);
}
$html .= $content;
} 
return $html;
} 
public function flhm_parseHTML($html)
{
$this->html = $this->flhm_minifyHTML($html);
if ($this->flhm_info_comment)
{
$this->html .= "\n" . $this->flhm_bottomComment($html, $this->html);
}
}
protected function flhm_removeWhiteSpace($str)
{
$str = str_replace("\t", ' ', $str);
$str = str_replace("\n",  '', $str);
$str = str_replace("\r",  '', $str);
$str = str_replace("// The customizer requires postMessage and CORS (if the site is cross domain).",'',$str);
while (stristr($str, '  '))
{
$str = str_replace('  ', ' ', $str);
}   
return $str;
}
}
function flhm_wp_html_compression_finish($html)
{
return new FLHM_HTML_Compression($html);
}
function flhm_wp_html_compression_start()
{
ob_start('flhm_wp_html_compression_finish');
}
add_action('get_header', 'flhm_wp_html_compression_start');