
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
            	<button class="btn btn-sm btn-info btn-flat" id="btnAdd"><i class="fa fa-plus"></i></button>
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
                    <th>Name Product</th>
                    <th>Stock</th>
                    <th>Unit</th>
                    <th>Price</th>
                    <th>Image Status</th>
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
      <div class="modal-header" style="background-color: #ff5722; color: #fff;">
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
  $(document).ready(function(){  
    table = $('#example1').DataTable({
      "processing":false,
      "serverSide":true,
      "order":[],
      "ajax":{  
        url:"<?php echo base_url('index.php/Product/ajax_list')?>",  
        type:"POST"  
      },  
      "columnDefs":[  
        {  
          "targets":[0],  
          "orderable":false,  
        },  
      ],  
    });
  });

  function reload_table(){
    table.ajax.reload();
  }

  //add product
  var save_method;
  $('#btnAdd').click(function(){
    save_method = 'add';
    $('#form')[0].reset();
    $('#modal_form').find('.modal-title').text('Add New Product');
    $('#modal_form').modal('show');
  });

  //save
  $('#btnSave').click(function(){
    //var url = $('#form').attr('action');
    var url;
    if (save_method == 'add') {
      url = '<?php echo base_url("index.php/product/product_add") ?>';
    }else{
      url = '<?php echo base_url("index.php/product/product_update") ?>';
    }
   //var data = $('#form').serialize();

    //validation form
    var productName = $('input[name=name_product]');
    var stock = $('input[name=stock]');
    var unit = $('input[name=unit]');
    var price = $('input[name=price]');
    var result = '';
    //if productName null
    if (productName.val()=='') {
      productName.parent().addClass('has-error');
    }else{
      productName.parent().removeClass('has-error');
      result +='1';
    }
    //if stock null
    if (stock.val()=='') {
      stock.parent().addClass('has-error');
    }else{
      stock.parent().removeClass('has-error');
      result +='2';
    }
    //if unit null
    if (unit.val()=='') {
      unit.parent().addClass('has-error');
    }else{
      unit.parent().removeClass('has-error');
      result +='3';
    }
    //if price null
    if (price.val()=='') {
      price.parent().addClass('has-error');
    }else{
      price.parent().removeClass('has-error');
      result +='4';
    }

    if(result=='1234'){
      $.ajax({
        url: url,
        method: 'post',
        data: $('#form').serialize(),
        dataType: 'json',
        async: false,
        success: function(response){
          if (response.success) {
            $('#modal_form').modal('hide');
            $('#form')[0].reset();
            if (response.type=='add') {
              var type = 'added';
            }else if(response.type=='update'){
              var type = 'update';
            }
            table.ajax.reload();
            $('.alert-success').html('Product '+type+' successfully').fadeIn().delay(4000).fadeOut('slow');
          }else{
            alert('Error');
          }
        },
        error: function(){
          alert('Could not add data');
        }
      });
    }
  });

  //edit
    function edit(id){
      save_method = 'update';

      $.ajax({
        url: "<?php echo base_url('index.php/Product/ajax_edit/')?>"+id,
        type: "GET",
        dataType: "JSON",
        success: function(data){
          $('[name="id_product"]').val(data.id_product);
          $('[name="name_product"]').val(data.name_product);
          $('[name="stock"]').val(data.stock);
          $('[name="unit"]').val(data.unit);
          $('[name="price"]').val(data.price);

          $('.modal-title').text('Edit Product');
          $('#modal_form').modal('show');
        },
        error: function(jqXHR, textStatus, errorThrown){
          alert('Error Get Data From ajax');
        }
      });
    }

  //edit image
  function upload(id){
    //var id = $(this).attr('data');
    $('[name="id_product"]').val(id);
    $('#modal_image').modal('show');
    $('#modal_image').find('.modal-title').text('Add Image Product');
  }

  //save image
  $('#btnImage').click(function(){
    var data = new FormData($("#formimage")[0]);
    var extension = $('#image').val().split('.').pop().toLowerCase();  
    if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
    {  
        alert("Invalid Image File");  
        $('#image').val('');  
        return false;  
    }
    else{
      $.ajax({
        url: "<?php echo base_url('index.php/Product/save_image');?>",
        type: "POST",
        data: data,
        processData: false,
        contentType: false,
        cache: false,
        async: false,
        success: function(data){
          // console.log(data);
          //alert(data);
          $('#modal_image').modal('hide');
          $('#formimage')[0].reset();
          table.ajax.reload();
          $('.alert-success').html('Add Image successfully').fadeIn().delay(4000).fadeOut('slow');
        },
        error: function(jqXHR, textStatus, errorThrown){
          alert('Error Adding Image');
        }

        // error: function(data){
        //   console.log(data);
        // }
      })
    }
  })
  
</script>

</body>
</html>