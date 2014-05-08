<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="UTF-8">
<title>McGrath Solutions Resume Received</title>
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
            <h1>McGrath Solutions Resume Received</h1>  
    
            <?php if($this->input->post('job') != ''){echo '<p>Position Applied For: ' . $this->input->post('job') . '</p>';}?>
            
            <h2>Contact Information</h2>
            
            <p>
                <?= $this->input->post('fname') . ' ' . $this->input->post('lname');?><br />
                <?= $this->input->post('street');?><br />
                <?= $this->input->post('city') . ', ' . $this->input->post('states') . ' ' . $this->input->post('zip');?><br />
                Primary Phone: <?= $this->input->post('pphone');?><br />
                <?php if($this->input->post('sphone') != ''){ ?>Secondary Phone: <?= $this->input->post('sphone');?><br /><?php } ?>
                Email: <?= $this->input->post('email');?>
            </p>
            
            <h2>Positions Seeking</h2> 
            
            <ul>
                <li><?php if($this->input->post('internship') == 'Internship'){echo 'X - ';}?>Internship</li>
                <li><?php if($this->input->post('volunteer') == 'Volunteer'){echo 'X - ';}?>Volunteer</li>
                <li><?php if($this->input->post('staff') == 'Permanent Staff'){echo 'X - ';}?>Permanent Staff</li>
            </ul>
            
            <h2>Desired Hours</h2>
   
            <ul>
                <li><?php if($this->input->post('parttime') == 'Part Time'){echo 'X - ';}?>Part Time</li>
                <li><?php if($this->input->post('fulltime') == 'Full Time'){echo 'X - ';}?>Full Time</li>
            </ul>
            
            <?php if($this->input->post('skills') != ''){ ?>
            <h2>Brief Summary of Skills and Experience</h2>
            <p><?= $this->input->post('skills');?></p>
            <?php } ?>
        </div>
    </div>
</body>
</html>