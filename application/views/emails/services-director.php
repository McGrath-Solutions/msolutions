<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="UTF-8">
<title>McGrath Solutions Request for IT Services</title>
<style>
#wrapper{position: relative; width: 600px; margin: auto; border: 10px #d96d00 solid;}
#main_content{padding: 5px;}
p {padding: 6px 0 6px 0;}
h1{font-size: 22px; font-weight: bolder;}
h2{font-size: 18px; font-weight: bold;}
</style>
</head>

<body>
    <div id="wrapper">
        
        <div id="main_content">

            <h1>McGrath Solutions Request for IT Services</h1>  
    
                <h2>Organization Information</h2>
    
                    <p>
                    <?= $this->input->post('name');?><br />
                    <?= $this->input->post('street');?><br />
                    <?= $this->input->post('city') . ', ' . $this->input->post('states') . ' ' . $this->input->post('zip');?>
                    </p>
                
                <h2>Organization Contact Person</h2>
    
                    <p>
                    Name: <?= $this->input->post('fname') . ' ' . $this->input->post('lname');?><br />
                    Title: <?= $this->input->post('title');?><br />
                    Primary Phone: <?= $this->input->post('pphone');?><br />
                    <?php if($this->input->post('sphone') != ''){ ?>Secondary Phone: <?= $this->input->post('sphone');?><br /><?php } ?>
                    Email: <?= $this->input->post('email');?>
                    </p>
    
                <h2>Organization Details</h2>
    
                    <p>
                    Description of Organization:<br />
                    <?= $this->input->post('describe');?><br /><br />
                    Number of Staff and Volunteers: <?= $this->input->post('numStaff');?><br />
                    Number of People Served: <?= $this->input->post('numServed');?><br />
                    Is a nonprofit? <?= $this->input->post('np');?>
                    </p>
    
                <h2>Services Requested</h2>

                    <ul>
                        <li>Consulting<?php if($this->input->post('Consulting') == 'Consulting'){echo ' - X';}?></li>
                        <li>Systems Analysis and Design<?php if($this->input->post('Systems') == 'Systems'){echo ' - X';}?></li>
                        <li>Database Administration<?php if($this->input->post('Database') == 'Database'){echo ' - X';}?></li>
                        <li>Technical Writing<?php if($this->input->post('Writing') == 'Writing'){echo ' - X';}?></li>
                        <li>Training<?php if($this->input->post('Training') == 'Training'){  echo ' - X';}?></li>
                        <li>Technical Support<?php if($this->input->post('Technical') == 'Technical'){echo ' - X';}?></li>
                        <li>Software Development<?php if($this->input->post('Software') == 'Software'){echo ' - X';}?></li>
                        <li>Web Design and Maintenance<?php if($this->input->post('Web') == 'Web'){echo ' - X';}?></li>
                        <li>Other<?php if($this->input->post('Other') == 'Other'){echo ' - X';}?></li>
                    </ul>
                
                    <p>More details on services requested: <br />
                    <?= $this->input->post('more');?></p>
                
                <?php if($this->input->post('otherInfo') != ''){ ?>
                <h2>Other Information</h2>
                <p><?= $this->input->post('otherInfo');?></p>
                <?php } ?>
        </div>
    </div>
</body>
</html>