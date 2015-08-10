<?php
$this->load->view('admin/vwHeader');
?>
<!--  
Author : Rahul Negi
-->

      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Products <small>Manage Products Module</small></h1>
            <ol class="breadcrumb">
              <li><a href="Users"><i class="icon-dashboard"></i> Products</a></li>
              <li class="active"><i class="icon-file-alt"></i> Products</li>
              
              
              <button class="btn btn-primary" type="button" style="float:right;">Add New Product</button>
              <div style="clear: both;"></div>
            </ol>
          </div>
        </div><!-- /.row -->

        
            
            <div class="table-responsive">
              <table class="table table-hover tablesorter">
                <thead>
                  <tr>
                    <th class="header">Product <i class="fa fa-sort"></i></th>
                    <th class="header">Code <i class="fa fa-sort"></i></th>
                    <th class="header">Quantity<i class="fa fa-sort"></i></th>
                    <th class="header">Price [per peice]<i class="fa fa-sort"></i></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Product1</td>
                    <td>182938</td>
                    <td>188</td>
                    <td>$33</td>
                  </tr>
                  <tr>
                   <td>Product1</td>
                    <td>182938</td>
                    <td>188</td>
                    <td>$33</td>
                  </tr>
                  <tr>
					<td>Product1</td>
                    <td>182938</td>
                    <td>188</td>
                    <td>$33</td>
                  </tr>
                  <tr>
                    <td>Product1</td>
                    <td>182938</td>
                    <td>188</td>
                    <td>$33</td>
                  </tr>
                  <tr>
                    <td>Product1</td>
                    <td>182938</td>
                    <td>188</td>
                    <td>$33</td>
                  </tr>
                  <tr>
                     <td>Product1</td>
                    <td>182938</td>
                    <td>188</td>
                    <td>$33</td>
                  </tr>
                  <tr>
                     <td>Product1</td>
                    <td>182938</td>
                    <td>188</td>
                    <td>$33</td>
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