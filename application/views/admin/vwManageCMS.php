<?php
$this->load->view('admin/vwHeader');
?>
<!--  
Author : Rahul Negi
-->

      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>CMS <small>CMS Module</small></h1>
            <ol class="breadcrumb">
              <li><a href="CMS"><i class="icon-dashboard"></i> CMS</a></li>
              <li class="active"><i class="icon-file-alt"></i> CMS</li>        
              
             
            </ol>
          </div>
        </div><!-- /.row -->

        
            
            <div class="table-responsive">
              <table class="table table-hover tablesorter">
                <thead>
                  <tr>
                    <th class="header">Page <i class="fa fa-sort"></i></th>
                    <th class="header">Operation <i class="fa fa-sort"></i></th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                    
                    foreach($cms as $key => $val){
                    ?>
                    
                  <tr>
                    <td><?php echo $val['label']; ?></td>
                    <td>
                        <a href="<?php echo base_url(); ?>admin/cms/edit_cms/<?php echo $val['id']; ?>" class="btn btn-primary btn-xs">Edit</a>
                    </td>
                  </tr>
           <?php
                    }
           ?>
                </tbody>
              </table>
            </div>
                   
        
      </div><!-- /#page-wrapper -->

<?php
$this->load->view('admin/vwFooter');
?>