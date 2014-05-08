<h1>Request Information Technology Services</h1>

<?php 

if(validation_errors()) 	
{	
    echo '<div class="errors">There are errors in your form submission. Please fix the error(s) listed below.</div>';	
    echo validation_errors();
}
?>

<div id="el"></div>

<p>Thank you for your interest in McGrath Solutions. Please fill out the brief form and  
    or email <a href='mailto:mmcgrath@mcgrathsolutions.org'>mmcgrath@mcgrathsolutions.org</a>.</p>

<?php
$form_attributes = array('id' => 'serviceform', 'name' => 'serviceform');

$name = array(
        'name'        => 'name',
        'id'          => 'name',
        'value'       => $this->input->post('name'),
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

$title = array(
        'name'        => 'title',
        'id'          => 'title',
        'value'       => $this->input->post('title'),
        'maxlength'   => '100',
        'size'        => '50',
        'aria-required' => 'true',
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

$describe = array(
    'name'        => 'describe',
    'id'          => 'describe',
    'value'       => $this->input->post('describe'),
    'cols'         => '50',
    'rows'         => '5',
        'aria-required' => 'true',
    );

$numStaff = array(
        'name'        => 'numStaff',
        'id'          => 'numStaff',
        'value'       => $this->input->post('numStaff'),
        'maxlength'   => '10',
        'size'        => '10',
        'aria-required' => 'true',
      );

$numServed = array(
        'name'        => 'numServed',
        'id'          => 'numServed',
        'value'       => $this->input->post('numServed'),
        'maxlength'   => '10',
        'size'        => '10',
        'aria-required' => 'true',
      );

$more = array(
    'name'        => 'more',
    'id'          => 'more',
    'value'       => $this->input->post('more'),
    'cols'         => '50',
    'rows'         => '5',
        'aria-required' => 'true',
    );

$otherInfo = array(
    'name'        => 'otherInfo',
    'id'          => 'otherInfo',
    'value'       => $this->input->post('otherInfo'),
    'cols'         => '50',
    'rows'         => '5',
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

echo form_open(base_url('it-services/request-information-technology-services.html'), $form_attributes);

echo '<h2>Organization Information</h2>';
    echo form_label('Organization Name <span class="required">(required)</span>: ', 'name') . '<br />'; 
    echo form_input($name) . '<br />';
    echo form_label('Street Address <span class="required">(required)</span>: ', 'street') . '<br />';
    echo form_input($street) . '<br />';
    echo form_label('City <span class="required">(required)</span>: ', 'city') . '<br />';
    echo form_input($city) . '<br />';
    echo form_label('State, Territory or Province <span class="required">(required)</span>: ', 'states') . '<br />';
    echo form_dropdown('states', $states, $this->input->post('states'), 'id="states" aria-required="true"') . '<br />';
    echo form_label('Zip or Postal Code: ', 'zip') . '<br />';
    echo form_input($zip);

echo '<h2>Organization Contact Person</h2>';
    echo form_label('First Name <span class="required">(required)</span>: ', 'fname') . '<br />'; 
    echo form_input($fname) . '<br />';
    echo form_label('Last Name <span class="required">(required)</span>: ', 'lname') . '<br />'; 
    echo form_input($lname) . '<br />';
    echo form_label('Title or Position <span class="required">(required)</span>: ', 'title') . '<br />'; 
    echo form_input($title) . '<br />';
    echo form_label('Primary Phone <span class="required">(required)</span>: ', 'pphone') . '<br />';
    echo form_input($pphone) . '<br />';
    echo form_label('Secondary Phone: ', 'sphone') . '<br />';
    echo form_input($sphone) . '<br />';
    echo form_label('Email <span class="required">(required)</span>: ', 'email') . '<br />';
    echo form_input($email);

echo '<h2>Organization Details</h2>'; 
    echo form_label('Briefly describe your organization <span class="required">(required)</span>: ', 'describe') . '<br />'; 
    echo form_textarea($describe) . '<br />';
    echo form_label('How many staff or volunteers does the organization have (enter digits only) <span class="required">(required)</span>: ', 'numStaff') . '<br />'; 
    echo form_input($numStaff) . '<br />';
    echo form_label('How many people does your organization service (enter digits only) <span class="required">(required)</span>: ', 'numServed') . '<br />'; 
    echo form_input($numServed) . '<br />';
    $fs4_att = array('id' => 'nonprofit');
        echo form_fieldset('Are you a nonprofit organization <span class="required">(required)</span>?', $fs4_att);
            echo '<input id="npyes" name="np" type="radio" value="Yes"' . set_radio('np', 'Yes') . ' />';
            echo form_label(' Yes', 'npyes'); 
            echo '<input id="npno" name="np" type="radio" value="No"' . set_radio('np', 'No') . ' />';
            echo form_label(' No', 'npno');
        echo form_fieldset_close();

$fs5_att = array('id' => 'services');
echo form_fieldset('What services are you requesting (check all that apply)?', $fs5_att);
    echo '<input id="Consulting" name="Consulting" type="checkbox" value="Consulting"' . set_checkbox('Consulting', 'Consulting') . '/>';
    echo form_label(' Consulting', 'Consulting') . '<br />';
    echo '<input id="Systems" name="Systems" type="checkbox" value="Systems"' . set_checkbox('Systems', 'Systems') . '/>';
    echo form_label(' Systems Analysis and Design', 'Systems') . '<br />';
    echo '<input id="Database" name="Database" type="checkbox" value="Database"' . set_checkbox('Database', 'Database') . '/>';
    echo form_label(' Database Administration', 'Database') . '<br />';
    echo '<input id="Writing" name="Writing" type="checkbox" value="Writing"' . set_checkbox('Writing', 'Writing') . '/>';
    echo form_label(' Technical Writing', 'Writing') . '<br />';
    echo '<input id="Training" name="Training" type="checkbox" value="Training"' . set_checkbox('Training', 'Training') . '/>';
    echo form_label(' Training', 'Training') . '<br />';
    echo '<input id="Technical" name="Technical" type="checkbox" value="Technical"' . set_checkbox('Technical', 'Technical') . '/>';
    echo form_label(' Technical Support', 'Technical') . '<br />';
    echo '<input id="Software" name="Software" type="checkbox" value="Software"' . set_checkbox('Software', 'Software') . '/>';
    echo form_label(' Software Development', 'Software') . '<br />';
    echo '<input id="Web" name="Web" type="checkbox" value="Web"' . set_checkbox('Web', 'Web') . '/>';
    echo form_label(' Web Design and Maintenance', 'Web') . '<br />';
    echo '<input id="Other" name="Other" type="checkbox" value="Other"' . set_checkbox('Other', 'Other') . '/>';
    echo form_label(' Other', 'Other') . '<br /><br />';
echo form_fieldset_close();

echo form_label('Provide more details on the services you are requesting <span class="required">(required)</span>:', 'more') . '<br />'; 
echo form_textarea($more) . '<br />';
     
echo form_label('Please list or describe any other information you would like to share:', 'otherInfo') . '<br />'; 
echo form_textarea($otherInfo);

echo '<div>';
echo form_button($reset);
echo form_button($submit);
echo '</div>';

echo form_close();
?>

<p>&nbsp;</p>

    <script>
var validator = new FormValidator('serviceform', [{
    name: 'name',
    display: '<a href="#name">Organization Name</a>',
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
    name: 'title', 
    display: '<a href="#title">Title or Position</a>', 
    rules: 'trim|required|min_length[1]|max_length[100]'
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
    name: 'describe', 
    display: '<a href="#describe">Briefly describe your organization</a>', 
    rules: 'trim|required|max_length[1000]'
},
{
    name: 'numStaff', 
    display: '<a href="#numStaff">Number of Staff or Volunteers</a>', 
    rules: 'trim|required|numeric|min_length[1]|max_length[10]'
},
{
    name: 'numServed', 
    display: '<a href="#numServed">Number of People Served</a>', 
    rules: 'trim|required|numeric|min_length[1]|max_length[10]'
},
{
    name: 'np', 
    display: '<a href="#nonprofit">Are you a nonprofit?</a>', 
    rules: 'required|alpha|min_length[2]|max_length[3]'
},{
    name: 'Consulting', 
    display: '<a href="#Consulting">Consulting</a>', 
    rules: 'alpha|exact_length[10]'
},
{
    name: 'Systems', 
    display: '<a href="#Systems">Systems Analysis and Design</a>', 
    rules: 'alpha|exact_length[7]'
},
{
    name: 'Database', 
    display: '<a href="#Database">Database Administration</a>', 
    rules: 'alpha|exact_length[8]'
},
{
    name: 'Writing', 
    display: '<a href="#Writing">Technical Writing</a>', 
    rules: 'alpha|exact_length[7]'
},
{
    name: 'Training', 
    display: '<a href="#Training">Training</a>', 
    rules: 'alpha|exact_length[8]'
},
{
    name: 'Technical', 
    display: '<a href="#Technical">Technical Support</a>', 
    rules: 'alpha|exact_length[9]'
},
{
    name: 'Software', 
    display: '<a href="#Software">Software Development</a>', 
    rules: 'alpha|exact_length[8]'
},
{
    name: 'Web', 
    display: '<a href="#Web">Web Design and Maintenance</a>', 
    rules: 'alpha|exact_length[3]'
},
{
    name: 'Other', 
    display: '<a href="#Other">Other</a>', 
    rules: 'alpha|exact_length[5]'
},
{
    name: 'more', 
    display: '<a href="#more">Provide more details on the services you are requesting</a>', 
    rules: 'trim|required|max_length[1000]'
},
{
    name: 'otherInfo', 
    display: '<a href="#otherInfo">List or describe any other information you would like to share</a>', 
    rules: 'trim|max_length[1000]'
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