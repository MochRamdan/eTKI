
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('assets/img/user2-160x160.jpg');?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata['id'];?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
            </button>
          </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('index.php/Article');?>"><i class="fa fa-circle-o text-red"></i> Articles</a></li>
            <li><a href="<?php echo base_url('index.php/Product');?>"><i class="fa fa-circle-o text-yellow"></i> Products</a></li>
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> Sales</a></li>
          </ul>
        </li>
        <li>
          <a href="../calendar.html">
            <i class="fa fa-calendar"></i> <span>Calendar</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>
          </a>
        </li>
        <li>
          <a href="../mailbox/mailbox.html">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Others</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
            <li><a href="../examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
            <li><a href="../examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
            <li><a href="../examples/login.html"><i class="fa fa-circle-o"></i> LogOut</a></li>
            <li><a href="../examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
            <li><a href="../examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
            <li><a href="../examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
            <li><a href="../examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
            <li><a href="../examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
            <li><a href="../examples/pace.html"><i class="fa fa-circle-o"></i> Pace Page</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tables
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <!-- /.box -->
          <div class="box">
            <div class="box-header">
              <!-- <button class="btn btn-sm btn-info btn-flat" id="btnAdd"><i class="fa fa-plus"></i></button> -->
              <a href="<?php echo base_url('index.php/Article/add');?>" class="btn btn-sm btn-info btn-flat"><i class="fa fa-plus"></i></a>
              <button class="btn btn-sm btn-default btn-flat" id="btnRefresh" onclick="reload_table()"><i class="fa fa-refresh"></i></button>
              <div class="alert alert-success" style="margin-top: 5px; display: none;"></div>
              <div class="alert alert-danger" style="margin-top: 5px; display: none;"></div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div style="overflow: auto;">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Title Article</th>
                    <th>Modified at</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody id="showdata">
                  
                  </tbody>
                </table>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>
</div>
<!-- ./wrapper -->
<!-- modal -->
<div class="modal fade" id="modal_form" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-maroon color-palette">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body form">
        <form action="" id="form" class="form-horizontal">
          <input type="hidden" value="" name="id_product">
          <div class="form-body">
            <div class="form-group">
              <label class="control-label col-md-3">Name Product</label>
              <div class="col-md-9">
                <input type="text" name="name_product" placeholder="Name Product.." class="form-control">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3">Stock</label>
              <div class="col-md-9">
                <input type="number" name="stock" placeholder="Stock.." class="form-control">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3">Unit</label>
              <div class="col-md-9">
                <input type="text" name="unit" placeholder="Ex: Kg gr.." class="form-control">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3">Price</label>
              <div class="col-md-9">
                <input type="number" name="price" placeholder="Price.." class="form-control">
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" id="btnSave" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!-- modal upload image -->
<div class="modal fade" id="modal_image" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-maroon color-palette">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body form">
        <form action="" id="formimage" class="form-horizontal">
          <input type="hidden" value="" name="id_image">
          <input type="hidden" value="" name="id_product">
          <div class="form-body">
            <div class="form-group">
              <label class="control-label col-md-3">Description Product</label>
              <div class="col-md-9">
                <textarea name="description" class="form-control"></textarea>
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3">Image</label>
              <div class="col-md-9">
                <input type="file" name="image" id="image" class="form-control">
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" id="btnImage" class="btn btn-primary">Save Image</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="deleteModal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Confirm Delete</h4>
      </div>
      <div class="modal-body">
          Do you want to delete this record?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" id="btnDelete" class="btn btn-danger">Delete</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- jQuery 3 -->
<script src="<?php echo base_url('assets/bower_components/jquery/dist/jquery.min.js')?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('assets/bower_components/bootstrap/dist/js/bootstrap.min.js');?>"></script>
<!-- DataTables -->
<script src="<?php echo base_url('assets/bower_components/datatables.net/js/jquery.dataTables.min.js');?>"></script>
<script src="<?php echo base_url('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js');?>"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url('assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js');?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url('assets/bower_components/fastclick/lib/fastclick.js');?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/js/adminlte.min.js');?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/js/demo.js');?>"></script>
<!-- page script -->
<script>
  var table;
  $(document).ready(function (){
    $('#example1').DataTable({
      "processing":false,
      "serverSide":true,
      "order":[],
      "ajax":{  
        url:"<?php echo base_url('index.php/Article/ajax_list')?>",  
        type:"POST"  
      },  
      "columnDefs":[  
        {  
          "targets":[0],  
          "orderable":false,  
        },  
      ], 
    })
  })

  function reload_table(){
    table.ajax.reload();
  }

  function edit(id){
    var url = "<?php echo base_url('index.php/Article/ajax_edit/')?>"+id;
    var form = "<?php echo base_url('index.php/Article/add/')?>";
    $.ajax({
      url: url,
      type: "GET",
      data: '{}',
      dataType: "JSON",
      success: function(data){
        window.location = form+data;
        // console.log(data);
      },
      error: function(jqXHR, textStatus, errorThrown){
        alert('Error Get Data From ajax');
      }
    })
  }

  //delete
  function hapus(id){
    var url = "<?php echo base_url('index.php/Article/article_delete/')?>"+id;
    $('#deleteModal').modal('show');
    //prevent previous handler - unbind()
    $('#btnDelete').unbind().click(function(){
      $.ajax({
        type: "ajax",
        method: "GET",
        async: false,
        url: url,
        //data: {id:id},
        dataType: 'json',
        success: function(response){
          if(response.success){
            $('#deleteModal').modal('hide');
            $('.alert-success').html('Employee Deleted successfully').fadeIn().delay(4000).fadeOut('slow');
          }else{
            alert('Error');
          }
          table.ajax.reload();
        },
        error: function(jqXHR, textStatus, errorThrown){
          alert('Error deleting');
        }
      })
    })
  }
</script>

</body>
</html>