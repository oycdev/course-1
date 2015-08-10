<?php
$this->load->view('Header');
?>
<!--  
Load Page Specific CSS and JS here
Author : Rahul singh negi 
Downloaded from http://devzone.co.in
-->
<link href="<?php echo HTTP_CSS_PATH; ?>starter-template.css" rel="stylesheet">
 
<div class="page-header container">
  <h1><small>Contact Us</small></h1>
</div>


<div class="container">
    <div class="panel panel-default" style="width:49%;float:left;">
  <div class="panel-body">
    Company Name,
    123, Street,
    City, 4101254
    Country
  </div>
</div>

<div class="panel panel-default"  style="width:49%;float:left;margin-left: 5px">
  <div class="panel-body">
    Basic panel example
  </div>
</div>
</div>

  
     <hr>
<?php
$this->load->view('Footer');
?>