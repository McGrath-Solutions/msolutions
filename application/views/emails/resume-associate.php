<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="UTF-8">
<title>McGrath Solutions Resume Received</title>
<style>
#wrapper{position: relative; width: 480px; margin: auto; border: 5px #d96d00 solid; padding: 10px;}
#header{width: 480px; height: 120px; border-bottom: 1px #666666 solid;}
#main_content{padding: 5px;}
#signature{font-size: 15px; font-style: italic; font-weight: bold; width: 300px; border-top: 1px #666666 solid;}
p {padding: 6px 0 6px 0;}
h1{font-size: 20px; font-weight: bolder;}
</style>
</head>

<body>
    <div id="wrapper">
        <div id="header">
            <a href="<?= base_url() ?>"><img src="<?= base_url('assets/image/black-logo-with-words.png') ?>" alt="McGrath Solutions Logo" /></a>
        </div>
        
        <div id="main_content">
            <h1>McGrath Solutions Resume Received</h1>  
            <p>Dear <?= $this->input->post('fname') . ' ' . $this->input->post('lname');?>,</p>
            <?php if($this->input->post('job') != ''){ ?>
                <p>Thank you for applying for the position of <?= $this->input->post('job');?>. If you are a match for
                the position, we will contact you for an interview. Please give us 1-2 weeks to review all resumes.
                If you are not a match, we will keep your resume on file and contact you when other positions open up.</p>
            
            <?php }else{ ?>
                <p>Thank you for submitting your resume to McGrath Solutions, Inc. We review each resume by hand and try our best to match associates with projects that meet their interests.
                We will keep your resume on file and contact you when positions open up. Also, please check our web site for all
                the latest opportunities.</p>
            <?php } ?>
            
            <p>If you have any questions or concerns, please contact me at the number and email below.</p>
            <p>Regards,<br />Samantha</p>
            
            <div id="signature">
                Samantha Moreno, CRC<br />
                Director of Volunteer and Employment Services<br /> 
                McGrath Solutions, Inc.<br />
                865-441-6888<br />
                <a href="mailto:smoreno@mcgrathsolutions.org">smoreno@mcgrathsolutions.org</a><br />
                <a href="<?= base_url() ?>">www.mcgrathsolutions.org</a>
            </div>
        </div>
    </div>
</body>
</html>