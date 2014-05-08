<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="UTF-8">
<title>McGrath Solutions Request for IT Services</title>
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
            <h1>McGrath Solutions Request for IT Services</h1>  
            <p>Dear <?= $this->input->post('fname') . ' ' . $this->input->post('lname');?>,</p>
            <p>Thank you for your interest in McGrath Solutions, Inc. We will contact you within the next 48 hours to discuss 
            your needs in more detail. We offer pricing based on your organization's revenues. We believe 
            information technology should be affordable for all.</p>
            <p>If you have any questions or concerns, please contact me at the number and email below.</p>
            <p>Regards,<br />Mike</p>
            
            <div id="signature">
                Michael McGrath, MIT<br />
                Executive Director<br /> 
                McGrath Solutions, Inc.<br />
                865-288-0912<br />
                <a href="mailto:mmcgrath@mcgrathsolutions.org">mmcgrath@mcgrathsolutions.org</a><br />
                <a href="<?= base_url() ?>">www.mcgrathsolutions.org</a>
            </div>
        </div>
    </div>
</body>
</html>