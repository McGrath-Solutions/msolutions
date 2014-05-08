<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {
    
    public function __construct() 
    {
        parent::__construct();
        
    } // end constructor

    public function view($arg1 = 'home', $arg2 = '') {
        
        // subpage; contains a directory above the page
        if($arg2 != ''){
            $path = $arg1 . '/' . $arg2; // forms full path including directory and page
            $page = $arg2; // the second argument contains the page
            $dir = $arg1; // get the directory which is the first argument
        }
        
        // top level page; does not contain directory
        else{
            $path = $arg1; // path is just the page 
            $page = $arg1; // the first argument is the page
            $dir = ''; // no directory exists
        }
        
        // check to see if page exists
        if (!file_exists(APPPATH . '/views/pages/' . $path . '.php')) {
            show_404();
        }
        
        // get the directory
        $data['directory'] = humanize($dir);
        
        // get the page title
        $data['page_title'] = humanize($page);
        
        // get meta description for page
        $data['description'] = $this->config->item($page . '-des');
        
        // get open positions from Orange HRM by parsing RSS feed
        // retrieves up to 20 positions
        if($page == 'open-positions')
        {   
            $data['rss'] = $this->rssparser->set_feed_url('https://secure.mcgrathsolutions.org/orangehrm/symfony/web/index.php/recruitmentApply/jobs.rss')->set_cache_life(30)->getFeed(20);
        }
           
        // load view header for all pages
        $this->load->view('templates/header', $data);
        
        // load page with sidebar, home page does not have sidebar
        if($page != 'home'){
            $this->load->view('templates/sidebar', $data);
            $this->load->view('pages/' . $path, $data);
            $this->load->view('templates/end-sidebar');
        }
        // load page without sidebar
        else{
            $this->load->view('pages/' . $path, $data);
        }
        
        // load footer for all pages
        $this->load->view('templates/footer');
    }
}

/* End of file pages.php */
/* Location: ./application/controllers/pages.php */