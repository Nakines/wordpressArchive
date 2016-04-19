
/**
 * 4. Allow SVG
 */	

 function fix_svg() {
    echo '<style type="text/css">
          .attachment-266x266, .thumbnail img { 
               width: 100% !important; 
               height: auto !important; 
          }
          </style>';
 }
 add_action('admin_head', 'fix_svg');
