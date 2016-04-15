
/**
 * 4. Allow SVG
 */	

function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');


add_action('admin_head', 'fix_svg_thumb_display');

