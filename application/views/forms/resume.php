<h1>Submit Resume</h1>

<?php 

if(validation_errors()) 	
{	
    echo '<div class="errors">There are errors in your form submission. Please fix the error(s) listed below.</div>';	
    echo validation_errors();
}

if($upload_errors != '') 	
{
    echo '<div class="errors">There was an error(s) uploading your resume. Please fix the error(s) listed below.</div>';
    foreach ($upload_errors as $error => $value):
        echo '<div class="errors"><a href="#resume">' . $value . '</a></div>';
    endforeach;
}
?>

<div id="el"></div>

<p>Thank you for your interest in McGrath Solutions. Please fill out the brief form and submit your resume, 
    or email your resume to <a href='mailto:resume@mcgrathsolutions.org'>resume@mcgrathsolutions.org</a>.</p>

<?php
$form_attributes = array('id' => 'resumeform', 'name' => 'resumeform');

$fname = array(
        'name'        => 'fname',
        'id'          => 'fname',
        'value'       => $this->input->post('fname'),
        'maxlength'   => '100',
        'size'        => '50',
        'aria-required' => 'true',
      );

$lname = array(
        'name'        => 'lname',
        'id'          => 'lname',
        'value'       => $this->input->post('lname'),
        'maxlength'   => '100',
        'size'        => '50',
        'aria-required' => 'true',
      );

$street = array(
        'name'        => 'street',
        'id'          => 'street',
        'value'       => $this->input->post('street'),
        'maxlength'   => '100',
        'size'        => '50',
        'aria-required' => 'true',
      );

$city = array(
        'name'        => 'city',
        'id'          => 'city',
        'value'       => $this->input->post('city'),
        'maxlength'   => '100',
        'size'        => '50',
        'aria-required' => 'true',
      );

$states = array(
        " " => " ",
        "XX" => "Not in US or Canada",
        "AL" => "Alabama",
        "AK" => "Alaska",
        "AB" => "Alberta",
        "AS" => "America Samoa",
        "AZ" => "Arizona",
        "AR" => "Arkansas",
        "BC" => "British Columbia",
        "CA" => "California",
        "CO" => "Colorado",
        "CT" => "Connecticut",
        "DE" => "Delaware",
        "DC" => "District of Columbia",
        "FL" => "Florida",
        "GA" => "Georgia",
        "GUAM" => "Guam",
        "HI" => "Hawaii",
        "ID" => "Idaho",
        "IL" => "Illinois",
        "IN" => "Indiana",
        "IA" => "Iowa",
        "KS" => "Kansas",
        "KY" => "Kentucky",
        "LA" => "Louisiana",
        "ME" => "Maine",
        "MB" => "Manitba",
        "MD" => "Maryland",
        "MA" => "Massachusetts",
        "MI" => "Michigan",
        "MN" => "Minnesota",
        "MS" => "Mississippi",
        "MO" => "Missouri",
        "MT" => "Montana",
        "NE" => "Nebraska",
        "NV" => "Nevada",
        "NB" => "New Brunswick",
        "NH" => "New Hampshire",
        "NJ" => "New Jersey",
        "NM" => "New Mexico",
        "NY" => "New York",
        "NL" => "Newfoundland and Labrador",
        "NC" => "North Carolina",
        "ND" => "North Dakota",
        "NT" => "Northwest Territories",
        "MP" => "Northern Marianas Islands",
        "NS" => "Nova Scotia",
        "NU" => "Nunavut",
        "OH" => "Ohio",
        "OK" => "Oklahoma",
        "ON" => "Ontario",
        "OR" => "Oregon",
        "PA" => "Pennsylvania",
        "PE" => "Prince Edward Island",
        "PR" => "Puero Rico",
        "QC" => "Quebec",
        "RI" => "Rhode Island",
        "SK" => "Saskatchewan",
        "SC" => "South Carolina",
        "SD" => "South Dakota",
        "TN" => "Tennessee",
        "TX" => "Texas",
        "VI" => "US Virgin Islands",
        "UT" => "Utah",
        "VT" => "Vermont",
        "VA" => "Virginia",
        "WA" => "Washington",
        "WV" => "West Virginia",
        "WI" => "Wisconsin",
        "WY" => "Wyoming",
        "YT" => "Yukon",
      );

$zip = array(
        'name'        => 'zip',
        'id'          => 'zip',
        'value'       => $this->input->post('zip'),
        'maxlength'   => '6',
        'size'        => '6',
      );

$pphone = array(
        'name'        => 'pphone',
        'id'          => 'pphone',
        'value'       => $this->input->post('pphone'),
        'maxlength'   => '15',
        'size'        => '15',
        'aria-required' => 'true',
      );

$sphone = array(
        'name'        => 'sphone',
        'id'          => 'sphone',
        'value'       => $this->input->post('sphone'),
        'maxlength'   => '15',
        'size'        => '15',
      );

$email = array(
        'name'        => 'email',
        'id'          => 'email',
        'value'       => $this->input->post('email'),
        'maxlength'   => '100',
        'size'        => '50',
        'aria-required' => 'true',
      );

$skills = array(
    'name'        => 'skills',
    'id'          => 'skills',
    'value'       => $this->input->post('skills'),
    'cols'       => '50',
    'rows'     => '5',
    );

$reset = array(
    'name' => 'button_reset',
    'id' => 'button_reset',
    'value' => 'true',
    'type' => 'reset',
    'content' => 'Reset Form'
);

$submit = array(
    'name' => 'button_submit',
    'id' => 'button_submit',
    'value' => 'true',
    'type' => 'submit',
    'content' => 'Submit Form'
);

if($job_apply != '')
{
    echo form_open_multipart(base_url('associates-and-volunteers/submit-resume/' . ($job_apply) . '.html'), $form_attributes);      
}
else 
{
    echo form_open_multipart(base_url('associates-and-volunteers/submit-resume.html'), $form_attributes);
}

echo form_label('First Name <span class="required">(required)</span>: ', 'fname') . '<br />'; 
echo form_input($fname) . '<br />';
echo form_label('Last Name <span class="required">(required)</span>: ', 'lname') . '<br />'; 
echo form_input($lname) . '<br />';
echo form_label('Street Address <span class="required">(required)</span>: ', 'street') . '<br />';
echo form_input($street) . '<br />';
echo form_label('City <span class="required">(required)</span>: ', 'city') . '<br />';
echo form_input($city) . '<br />';
echo form_label('State, Territory or Province <span class="required">(required)</span>: ', 'states') . '<br />';
echo form_dropdown('states', $states, $this->input->post('states'), 'id="states"') . '<br />';
echo form_label('Zip or Postal Code: ', 'zip') . '<br />';
echo form_input($zip) . '<br />';
echo form_label('Primary Phone <span class="required">(required)</span>: ', 'pphone') . '<br />';
echo form_input($pphone) . '<br />';
echo form_label('Secondary Phone: ', 'sphone') . '<br />';
echo form_input($sphone) . '<br />';
echo form_label('Email <span class="required">(required)</span>: ', 'email') . '<br />';
echo form_input($email);

$fs1_att = array('id' => 'position');
echo form_fieldset('What kind of position are you looking for (check all that apply)?', $fs1_att);
    echo '<input type="checkbox" id="internship" name="internship" value="Internship"' . set_checkbox('internship', 'Internship') . '/>';
    echo form_label(' Internship', 'internship') . '<br />';
    echo '<input type="checkbox" id="volunteer" name="volunteer" value="Volunteer"' . set_checkbox('volunteer', 'Volunteer') . '/>';
    echo form_label(' Volunteer', 'volunteer') . '<br />';
    echo '<input type="checkbox" id="staff" name="staff" value="Permanent Staff"' . set_checkbox('staff', 'Permanent Staff') . '/>';
    echo form_label(' Permanent Staff', 'staff');
echo form_fieldset_close();

$fs2_att = array('id' => 'hours');
echo form_fieldset('What kind of hours are you looking for (check all that apply)?', $fs2_att);
    echo '<input type="checkbox" id="parttime" name="parttime" value="Part Time"' . set_checkbox('parttime', 'Part Time') . '/>';
    echo form_label(' Part Time', 'parttime') . '<br />';
    echo '<input type="checkbox" id="fulltime" name="fulltime" value="Full Time"' . set_checkbox('fulltime', 'Full Time') . '/>';
    echo form_label(' Full Time', 'fulltime');
echo form_fieldset_close();

echo form_label('Include a brief summary of your skills and experience: ', 'skills') . '<br />'; 
echo form_textarea($skills) . '<br />';
echo form_label('Upload Resume <span class="required">(required)</span>: ', 'resume') . '<br />';
echo '<input type="file" name="resume" id="resume"  />';
echo form_hidden('job', $job_apply);

echo '<div>';
echo form_button($reset);
echo form_button($submit);
echo '</div>';

echo form_close();
?>

<p>&nbsp;</p>

    <script>
var validator = new FormValidator('resumeform', [{
    name: 'fname',
    display: '<a href="#fname">First Name</a>',    
    rules: 'trim|required|min_length[1]|max_length[100]'
},
{
    name: 'lname',
    display: '<a href="#lname">Last Name</a>',    
    rules: 'trim|required|min_length[1]|max_length[100]'
},
{
    name: 'street',
    display: '<a href="#street">Street Address</a>',    
    rules: 'trim|required|min_length[1]|max_length[100]'
},
{
    name: 'city',
    display: '<a href="#city">City</a>',    
    rules: 'trim|required|min_length[1]|max_length[100]'
},
{
    name: 'states',
    display: '<a href="#states">State, Territory or Province</a>',    
    rules: 'required|alpha|min_length[1]|max_length[50]'
},
{
    name: 'zip',
    display: '<a href="#zip">Zip or Postal Code</a>',    
    rules: 'trim|min_length[5]|max_length[6]'
},
{
    name: 'pphone',
    display: '<a href="#pphone">Primary Phone Number</a>',    
    rules: 'required|alpha_dash|min_length[10]|max_length[15]'
},
{
    name: 'sphone',
    display: '<a href="#sphone">Secondary Phone Number</a>',    
    rules: 'alpha_dash|min_length[10]|max_length[15]'
},
{
    name: 'email',
    display: '<a href="#email">Email</a>',    
    rules: 'trim|required|valid_email|min_length[10]|max_length[100]'
},
{
    name: 'internship',
    display: '<a href="#internship">Internship</a>',    
    rules: 'alpha|exact_length[10]'
},
{
    name: 'volunteer',
    display: '<a href="#volunteer">Volunteer</a>',    
    rules: 'alpha|exact_length[9]'
},
{
    name: 'staff',
    display: '<a href="#staff">Permanent Staff</a>',    
    rules: 'exact_length[15]'
},
{
    name: 'parttime',
    display: '<a href="#parttime">Part Time</a>',    
    rules: 'exact_length[9]'
},
{
    name: 'fulltime',
    display: '<a href="#fulltime">Full Time</a>',    
    rules: 'exact_length[9]'
},
{
    name: 'skills',
    display: '<a href="#skills">Skills and Experience</a>',    
    rules: 'trim|max_length[1000]'
},
{
    name: 'resume',
    display: '<a href="#resume">Upload Resume</a>',    
    rules: 'required|is_file_type[docx,doc,txt,rtf,pdf]'
},
{
    name: 'job',
    display: 'Job Applying for',    
    rules: 'max_length[100]'
}], function(errors) {
    if (errors.length > 0) {
        // Show the errors
        var errorString = 'There are errors in your form submission. Please fix the error(s) listed below.\n';
        
        for (var i = 0, errorLength = errors.length; i < errorLength; i++) {
            errorString += errors[i].message + '<br />';
        }
        
        el.innerHTML = errorString;
    }
});
</script>
