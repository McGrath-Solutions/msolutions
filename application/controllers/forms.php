<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Forms extends CI_Controller {
    
    public function __construct() 
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="errors">', '</div>');
        $this->load->library('email');
        $this->load->library('upload');
        $this->load->config('form_config');
        $this->load->helper('form');
        
    } // end constructor
    
    /**
    * Form Resume
    * 
    * Displays and processes the submit resume form.
    * 
    * @param type $form_job job applying for
    */
    public function form_resume($form_job = '') 
    {
        // check to see if form exists
        if (!file_exists(APPPATH . '/views/forms/resume.php')) {
            show_404();
        }
        
        // Set data array values
        $data['page_title'] = 'Submit Resume';
        $data['directory'] = 'Associates and Volunteers';
        $data['description'] = $this->config->item('submit-resume-des');
        $data['job_apply'] = str_replace('%20', ' ', $form_job); // strip %20 (space) from job
        $data['upload_errors'] = ''; // tracks errors with uploading resume
        
        // error validation rules
        $this->form_validation->set_rules('fname', '<a href="#fname">First Name</a>', 'trim|required|min_length[1]|max_length[100]|xss_clean');
        $this->form_validation->set_rules('lname', '<a href="#lname">Last Name</a>', 'trim|required|min_length[1]|max_length[100]|xss_clean');
        $this->form_validation->set_rules('street', '<a href="#street">Street Address</a>', 'trim|required|min_length[1]|max_length[100]|xss_clean');
        $this->form_validation->set_rules('city', '<a href="#city">City</a>', 'trim|required|min_length[1]|max_length[100]|xss_clean');
        $this->form_validation->set_rules('states', '<a href="#states">State, Territory or Province</a>', 'required|alpha|min_length[1]|max_length[50]|xss_clean');
        $this->form_validation->set_rules('zip', '<a href="#zip">Zip or Postal Code</a>', 'trim|min_length[5]|max_length[6]|xss_clean');
        $this->form_validation->set_rules('pphone', '<a href="#pphone">Primary Phone Number</a>', 'required|alpha_dash|min_length[10]|max_length[15]|xss_clean');
        $this->form_validation->set_rules('sphone', '<a href="#sphone">Secondary Phone Number</a>', 'alpha_dash|min_length[10]|max_length[15]|xss_clean');
        $this->form_validation->set_rules('email', '<a href="#email">Email</a>', 'trim|required|valid_email|min_length[10]|max_length[100]|xss_clean');
        $this->form_validation->set_rules('internship', '<a href="#internship">Internship</a>', 'alpha|exact_length[10]|xss_clean');
        $this->form_validation->set_rules('volunteer', '<a href="#volunteer">Volunteer</a>', 'alpha|exact_length[9]|xss_clean');
        $this->form_validation->set_rules('staff', '<a href="#staff">Permanent Staff</a>', 'exact_length[15]|xss_clean');
        $this->form_validation->set_rules('parttime', '<a href="#parttime">Part Time</a>', 'exact_length[9]|xss_clean');
        $this->form_validation->set_rules('fulltime', '<a href="#fulltime">Full Time</a>', 'exact_length[9]|xss_clean');
        $this->form_validation->set_rules('skills', '<a href="#skills">Skills and Experience</a>', 'trim|max_length[1000]|xss_clean');
        $this->form_validation->set_rules('job', 'Job Applying for', 'max_length[100]|xss_clean');
                
        // form validation has not been run or has failed
        if ($this->form_validation->run() == FALSE) 
        { 
            // display the form
            $data['job_apply'] = str_replace('%20', ' ', $form_job); // when form is redisplayed keep job value
            $this->_top($data);
            $this->load->view('forms/resume', $data);
            $this->_bottom();
        } 
        // everything is good - process form
        else 
        {
            // check to see if errors occurred during file upload of resume
            if ( ! $this->upload->do_upload('resume'))
            {
		$data['upload_errors'] = array('error' => $this->upload->display_errors('<div class="errors">','</div>'));
                $this->_top($data);
                $this->load->view('forms/resume', $data);
                $this->_bottom();
            }
            // no file upload errors - submit form
            else
            {
                // upload resume to server
                $data['upload_data'] = array('upload_data' => $this->upload->data());
            
                // send emails
                $this->_email_resume_to_associate();
                $this->_email_resume_to_director();

                // display success page
                $this->_top($data);
                $this->load->view('forms/resume-success');
                $this->_bottom();
            }
        }
    } // End Form Resume
    
    /**
    * Form Services
    * 
    * Displays and processes request for information technology services form.
    * 
    */
    public function form_services() 
    {
        // check to see if form exists
        if (!file_exists(APPPATH . '/views/forms/services.php')) {
            show_404();
        }
        
        // Set data array values
        $data['page_title'] = 'Request Information Technology Services';
        $data['description'] = $this->config->item('request-information-technology-services-des');
        $data['directory'] = 'IT Services';
        
        // error validation rules
        $this->form_validation->set_rules('name', '<a href="#name">Organization Name</a>', 'trim|required|min_length[1]|max_length[100]|xss_clean');
        $this->form_validation->set_rules('street', '<a href="#street">Street Address</a>', 'trim|required|min_length[1]|max_length[100]|xss_clean');
        $this->form_validation->set_rules('city', '<a href="#city">City</a>', 'trim|required|min_length[1]|max_length[100]|xss_clean');
        $this->form_validation->set_rules('states', '<a href="#states">State, Territory or Province</a>', 'required|alpha|min_length[1]|max_length[50]|xss_clean');
        $this->form_validation->set_rules('zip', '<a href="#zip">Zip or Postal Code</a>', 'trim|min_length[5]|max_length[6]|xss_clean');
        $this->form_validation->set_rules('fname', '<a href="#fname">First Name</a>', 'trim|required|min_length[1]|max_length[100]|xss_clean');
        $this->form_validation->set_rules('lname', '<a href="#lname">Last Name</a>', 'trim|required|min_length[1]|max_length[100]|xss_clean');
        $this->form_validation->set_rules('title', '<a href="#title">Title or Position</a>', 'trim|required|min_length[1]|max_length[100]|xss_clean');
        $this->form_validation->set_rules('pphone', '<a href="#pphone">Primary Phone Number</a>', 'required|alpha_dash|min_length[10]|max_length[15]|xss_clean');
        $this->form_validation->set_rules('sphone', '<a href="#sphone">Secondary Phone Number</a>', 'alpha_dash|min_length[10]|max_length[15]|xss_clean');
        $this->form_validation->set_rules('email', '<a href="#email">Email</a>', 'trim|required|valid_email|min_length[10]|max_length[100]|xss_clean');
        $this->form_validation->set_rules('describe', '<a href="#describe">Briefly describe your organization</a>', 'trim|required|max_length[1000]|xss_clean');
        $this->form_validation->set_rules('numStaff', '<a href="#numStaff">Number of Staff or Volunteers</a>', 'trim|required|numeric|min_length[1]|max_length[10]|xss_clean');
        $this->form_validation->set_rules('numServed', '<a href="#numServed">Number of People Served</a>', 'trim|required|numeric|min_length[1]|max_length[10]|xss_clean');
        $this->form_validation->set_rules('np', '<a href="#nonprofit">Are you a nonprofit?</a>', 'required|alpha|min_length[2]|max_length[3]|xss_clean');
        $this->form_validation->set_rules('Consulting', '<a href="#Consulting">Consulting</a>', 'alpha|exact_length[10]|xss_clean');
        $this->form_validation->set_rules('Systems', '<a href="#Systems">Systems Analysis and Design</a>', 'alpha|exact_length[7]|xss_clean');
        $this->form_validation->set_rules('Database', '<a href="#Database">Database Administration</a>', 'alpha|exact_length[8]|xss_clean');
        $this->form_validation->set_rules('Writing', '<a href="#Writing">Technical Writing</a>', 'alpha|exact_length[7]|xss_clean');
        $this->form_validation->set_rules('Training', '<a href="#Training">Training</a>', 'alpha|exact_length[8]|xss_clean');
        $this->form_validation->set_rules('Technical', '<a href="#Technical">Technical Support</a>', 'alpha|exact_length[9]|xss_clean');
        $this->form_validation->set_rules('Software', '<a href="#Software">Software Development</a>', 'alpha|exact_length[8]|xss_clean');
        $this->form_validation->set_rules('Web', '<a href="#Web">Web Design and Maintenance</a>', 'alpha|exact_length[3]|xss_clean');
        $this->form_validation->set_rules('Other', '<a href="#Other">Other</a>', 'alpha|exact_length[5]|xss_clean');
        $this->form_validation->set_rules('more', '<a href="#more">Provide more details on the services you are requesting</a>', 'trim|required|max_length[1000]|xss_clean');
        $this->form_validation->set_rules('otherInfo', '<a href="#otherInfo">List or describe any other information you would like to share</a>', 'trim|max_length[1000]|xss_clean');
                
        // form validation has not been run or has failed
        if ($this->form_validation->run() == FALSE) 
        { 
            // display the form
            $this->_top($data);
            $this->load->view('forms/services', $data);
            $this->_bottom();
        } 
        // everything is good - process form and access next page
        else 
        {
            // send emails
            $this->_email_request_to_associate();
            $this->_email_request_to_director();

            // display success page
            $this->_top($data);
            $this->load->view('forms/services-success');
            $this->_bottom();
         }
    } // End Form Service
    
    /**
     * Top
     * 
     * Displays header and sidebar.
     * 
     * @param type $data
     */
    private function _top($data)
    {
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
    }// End Top
    
    /**
     * Bottom 
     * 
     * Displays footer 
     */
    private function _bottom()
    {
        $this->load->view('templates/end-sidebar');
        $this->load->view('templates/footer');
    }// End Bottom 
    
    /**
     * Email Resume to Director
     * 
     * Email the resume form data to the director.
     * 
     */
    private function _email_resume_to_director()
    {
        $this->email->from($this->input->post('email'), $this->input->post('fname') . " " . $this->input->post('lname'));
        $this->email->reply_to($this->input->post('email'), $this->input->post('fname') . " " . $this->input->post('lname'));
        $this->email->to($this->config->item('resume_email_to'));
        $this->email->cc($this->config->item('resume_cc_to'));
        
        $this->email->subject($this->config->item('resume_subject'));
	
        $this->email->message($this->load->view('emails/resume-director', $this->input->post(NULL, TRUE), TRUE));
        
        $upload_data = $this->upload->data();
        $this->email->attach($upload_data['full_path']);
        
        $this->email->send();
    } // End Email Resume to Director
    
    /**
     * Email Resume to Associate
     * 
     * Email response to the submitter that resume was successfully received.
     * 
     */
    private function _email_resume_to_associate()
    {
        $this->email->from($this->config->item('resume_from'), $this->config->item('resume_from_name'));
        $this->email->reply_to($this->config->item('resume_reply_to'), $this->config->item('resume_reply_to_name'));
        $this->email->to($this->input->post('email'));
        
        $this->email->subject($this->config->item('resume_subject'));
	
        $this->email->message($this->load->view('emails/resume-associate', $this->input->post(NULL, TRUE), TRUE));
        
        $this->email->send();
    } // End Email Resume to Associate
    
    /**
     * Email Request to Director
     * 
     * Email the request form data to the director.
     * 
     */
    private function _email_request_to_director()
    {
        $this->email->from($this->input->post('email'), $this->input->post('fname') . " " . $this->input->post('lname'));
        $this->email->reply_to($this->input->post('email'), $this->input->post('fname') . " " . $this->input->post('lname'));
        $this->email->to($this->config->item('services_email_to'));
        $this->email->cc($this->config->item('services_cc_to'));
        
        $this->email->subject($this->config->item('services_subject'));
	
        $this->email->message($this->load->view('emails/services-director', $this->input->post(NULL, TRUE), TRUE));
        
        $this->email->send();
    } // Email Request to Director
    
    /**
     * Email Request to Associate
     * 
     * Email response to the submitter that request was successfully received.
     * 
     */
    private function _email_request_to_associate()
    {
        $this->email->from($this->config->item('services_from'), $this->config->item('services_from_name'));
        $this->email->reply_to($this->config->item('services_reply_to'), $this->config->item('services_reply_to_name'));
        $this->email->to($this->input->post('email'));
        
        $this->email->subject($this->config->item('services_subject'));
	
        $this->email->message($this->load->view('emails/services-associate', $this->input->post(NULL, TRUE), TRUE));
        
        $this->email->send();
    } // End Email Request to Associate
}

/* End of file forms.php */
/* Location: ./application/controllers/forms.php */