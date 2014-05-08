<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
  * General Asset Secure Helper
  *
  * Helps generate secure links to asset files of any sort. Asset type should be the
  * name of the folder they are stored in.
  *
  * @access		public
  * @param		string    the name of the file or asset
  * @param		string    the asset type (name of folder)
  * @param		string    optional, module name
  * @return		string    full url to asset
  */
function other_asset_secure_url($asset_name, $module_name = NULL, $asset_type = NULL)
{
    $obj =& get_instance();
    $secure_asset_url = $obj->config->item('secure_asset_url');

    $asset_location = $secure_asset_url.'assets/';

    if(!empty($module_name)):
            $asset_location .= 'modules/'.$module_name.'/';
    endif;

    $asset_location .= $asset_type.'/'.$asset_name;

    return $asset_location;

}
// ------------------------------------------------------------------------

/**
  * CSS Asset Secure Helper
  *
  * Helps generate CSS asset secure locations.
  *
  * @access		public
  * @param		string    the name of the file or asset
  * @param		string    optional, module name
  * @return		string    full url to css asset
  */
function css_asset_secure_url($asset_name, $module_name = NULL)
{
    return other_asset_secure_url($asset_name, $module_name, 'css');
}
// ------------------------------------------------------------------------

/**
  * CSS Asset HTML Secure Helper
  *
  * Helps generate CSS asset secure locations.
  *
  * @access		public
  * @param		string    the name of the file or asset
  * @param		string    optional, module name
  * @param		string    optional, extra attributes
  * @return		string    HTML code for JavaScript asset
  */
function css_asset_secure($asset_name, $module_name = NULL, $attributes = array())
{
    $attribute_str = _parse_asset_html($attributes);
    return '<link href="'.css_asset_secure_url($asset_name, $module_name).'" rel="stylesheet" type="text/css"'.$attribute_str.' />';
}
// ------------------------------------------------------------------------

/**
  * Image Asset Secure Helper
  *
  * Helps generate image asset secure locations.
  *
  * @access		public
  * @param		string    the name of the file or asset
  * @param		string    optional, module name
  * @return		string    full url to image asset
  */
function image_asset_secure_url($asset_name, $module_name = NULL)
{
    return other_asset_secure_url($asset_name, $module_name, 'image');
}
// ------------------------------------------------------------------------

/**
  * Image Asset HTML Secure Helper
  *
  * Helps generate secure image HTML.
  *
  * @access		public
  * @param		string    the name of the file or asset
  * @param		string    optional, module name
  * @param		string    optional, extra attributes
  * @return		string    HTML code for image asset
  */
function image_asset_secure($asset_name, $module_name = '', $attributes = array())
{
    $attribute_str = _parse_asset_html($attributes);
    return '<img src="'.image_asset_secure_url($asset_name, $module_name).'"'.$attribute_str.' />';
}
// ------------------------------------------------------------------------

/**
  * JavaScript Asset Secure URL Helper
  *
  * Helps generate JavaScript secure asset locations.
  *
  * @access		public
  * @param		string    the name of the file or asset
  * @param		string    optional, module name
  * @return		string    full url to JavaScript asset
  */
function js_asset_secure_url($asset_name, $module_name = NULL)
{
    return other_asset_secure_url($asset_name, $module_name, 'js');
}
// ------------------------------------------------------------------------

/**
  * JavaScript Asset HTML Secure Helper
  *
  * Helps generate JavaScript asset secure locations.
  *
  * @access		public
  * @param		string    the name of the file or asset
  * @param		string    optional, module name
  * @return		string    HTML code for JavaScript asset
  */
function js_asset_secure($asset_name, $module_name = NULL)
{
    return '<script type="text/javascript" src="'.js_asset_secure_url($asset_name, $module_name).'"></script>';
}
// ------------------------------------------------------------------------

/* End of file MS_asset_helper.php */
/* Location: ./application/helpers/MS_asset_helper.php */