<?php
$this->load->view('admin/vwHeader');
?>
<!--  
Author : Rahul Negi
-->

      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Users <small>Manage Users Module</small></h1>
            <ol class="breadcrumb">
              <li><a href="Users"><i class="icon-dashboard"></i> Users</a></li>
              <li class="active"><i class="icon-file-alt"></i> Users</li>
              
              
              <button class="btn btn-primary" type="button" style="float:right;">Add New User</button>
              <div style="clear: both;"></div>
            </ol>
          </div>
        </div><!-- /.row -->

        
            
            <div class="table-responsive">
              <table class="table table-hover tablesorter">
                <thead>
                  <tr>
                    <th class="header">UserName <i class="fa fa-sort"></i></th>
                    <th class="header">Email <i class="fa fa-sort"></i></th>
                    <th class="header">Last Login <i class="fa fa-sort"></i></th>
                    <th class="header">Signup Date<i class="fa fa-sort"></i></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Sumit</td>
                    <td>sumit@example.com</td>
                    <td>Jan 1,2014</td>
                    <td>Jan 1,2014</td>
                  </tr>
                  <tr>
					<td>Ravi</td>
                    <td>Ravi@example.com</td>
                    <td>Jan 1,2014</td>
                    <td>Jan 1,2014</td>
                  </tr>
                  <tr>
                    <td>Tom</td>
                    <td>Tom@example.com</td>
                    <td>Jan 3,2014</td>
                    <td>Jan 1,2014</td>
                  </tr>
                  <tr>
                   <td>Tina</td>
                    <td>Tina@example.com</td>
                    <td>Jan 1,2014</td>
                    <td>Jan 1,2014</td>
                  </tr>
                  <tr>
                    <td>Sam</td>
                    <td>Sam@example.com</td>
                    <td>Jan 1,2014</td>
                    <td>Jan 1,2014</td>
                  </tr>
                  <tr>
                    <td>John</td>
                    <td>John@example.com</td>
                    <td>Oct 23,2013</td>
                    <td>June 5,2014</td>
                  </tr>
                  <tr>
                    <td>Joseph</td>
                    <td>Joseph@example.com</td>
                    <td>Jan 1,2014</td>
                    <td>Jan 1,2014</td>
                  </tr>
                </tbody>
              </table>
            </div>
        
        <ul class="pagination pagination-sm">
                <li class="disabled"><a href="#"><<</a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">>></a></li>
              </ul>
        
        
      </div><!-- /#page-wrapper -->

<?php
$this->load->view('admin/vwFooter');
?>