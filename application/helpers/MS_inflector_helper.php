<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// --------------------------------------------------------------------

/**
 * Humanize
 *
 * Takes multiple words separated by dashes and changes them to spaces
 *
 * @access	public
 * @param	string
 * @return	str
 */
if ( ! function_exists('humanize'))
{
	function humanize($str)
	{
                $str2 = ucwords(preg_replace('/[-]+/', ' ', strtolower(trim($str))));
                
                if(strstr($str2, 'And'))
                {
                    return preg_replace('/And+/', 'and', $str2);
                }
                else if(strstr($str2, 'Of'))
                {
                    return preg_replace('/Of+/', 'of', $str2);
                }
                else if(strstr($str2, 'Faq'))
                {
                    return preg_replace('/Faq+/', 'FAQ', $str2);
                }
                else if(strstr($str2, 'It'))
                {
                    return preg_replace('/It+/', 'IT', $str2);
                }
                else
                {
                    return $str2;
                }
        }
}

/**
 * Dash
 *
 * Takes multiple words separated by spaces and dashes them
 *
 * @access	public
 * @param	string
 * @return	str
 */
if ( ! function_exists('dash'))
{
	function dash($str)
	{
		return preg_replace('/[\s]+/', '-', strtolower(trim($str)));
	}
}

// --------------------------------------------------------------------

/* End of file MS_inflector_helper.php */
/* Location: ./application/helpers/MS_inflector_helper.php */