<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Belajar Codeigniter</title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/datatables/css/dataTables.bootstrap.css'); ?>">
</head>
<body>

	<div class="container">
		<h1>Belajar Codeigniter</h1>
		<h3>Book Store</h3>

		<button type="button" class="btn btn-success" onclick="add_book()"><i class="glyphicon glyphicon-plus"></i> Add Book</button>

		<br>
		<br>

		<table id="table_id" class="table table-stripped table-bordered">
			<thead>
				<tr>
					<th>Book ID</th>
					<th>Book ISBN</th>
					<th>Book Title</th>
					<th>Book Author</th>
					<th>Book Category</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach($books as $book){?>
				<tr>
					<td><?php echo $book->book_id ;?></td>
					<td><?php echo $book->book_isbn ;?></td>
					<td><?php echo $book->book_title ;?></td>
					<td><?php echo $book->book_author ;?></td>
					<td><?php echo $book->book_category ;?></td>
					<td>
						<button class="btn btn-warning" onclick="edit_book(<?php echo $book->book_id;?>)"><i class="glyphicon glyphicon-pencil"></i></button>
						<button class="btn btn-danger" onclick="delete_book(<?php echo $book->book_id;?>)"><i class="glyphicon glyphicon-remove"></i></button>
					</td>
				</tr>
			<?php } ?>
			</tbody>
		</table>
	</div>


	<!-- link to js-->
	<script src="<?php echo base_url('assets/jquery/jquery-3.4.1.min.js');?>"></script>

	<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js');?>"></script>

	<script src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js');?>"></script>

	<script src="<?php echo base_url('assets/datatables/js/dataTables.bootstrap.js');?>"></script>

	<!-- js -->
	<script type="text/javascript">
		$(document).ready(function() {
			$('#table_id').DataTable();
		});

		var save_method;
		//var table;

		function add_book() {
			save_method = 'add';
			$('#form')[0].reset();
			$('.modal-title').text('Add Book');
			$('#modal_form').modal('show');
		}

		function save() {
			var url;

			if(save_method == 'add') {
				url = '<?php echo site_url("index.php/Book/book_add") ;?>';
			} else {
				url = '<?php echo site_url("index.php/Book/book_update") ;?>';
			}

			$.ajax({
				url: url,
				type: "POST",
				data: $('#form').serialize(),
				dataType: "JSON",
				success: function(data) {
					$('#modal_form').modal('hide');
					location.reload();
				},
				error: function(jqXHR, textStatus, errorThrown) {
					alert('Error Adding/ Update Data');
				}
			});
		}

		function edit_book(id){
			save_method = 'update';
			$('#form')[0].reset();

			//load data dari ajax
			$.ajax({
				url: "<?php echo site_url('index.php/book/ajax_edit/')?>/"+id,
				type: "GET",
				dataType: "JSON",
				success: function(data){
					$('[name="book_id"]').val(data.book_id);
					$('[name="book_isbn"]').val(data.book_isbn);
					$('[name="book_title"]').val(data.book_title);
					$('[name="book_author"]').val(data.book_author);
					$('[name="book_category"]').val(data.book_category);

					$('.modal-title').text('Edit Book');

					$('#modal_form').modal('show');
				},
				error: function(jqXHR, textStatus, errorThrown){
					alert('Error Get Data From Ajax');
				}
			});
		}

		function delete_book(id){
			if (confirm('Are you sure delete data?')) {

				//ajax delete data dari database
				$.ajax({
					url: "<?php echo site_url('index.php/book/book_delete/')?>/"+id,
					type: "POST",
					dataType: "JSON",
					success: function(data){
						location.reload();
					},
					error: function(jqXHR, textStatus, errorThrown){
						alert('Error Deleting Data');
					}
				});
			}
		}

	</script>

	<div class="modal fade" id="modal_form" role="dialog">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title"></h4>
	      </div>
	      <div class="modal-body form">
	      	<form action="#" id="form" class="form-horizontal">
	      		<input type="hidden" value="" name="book_id">
	      		<div class="form-body">
	      			<div class="form-group">
	      				<label class="control-label col-md-3">Book ISBN</label>
	      				<div class="col-md-9">
	      					<input type="text" name="book_isbn" placeholder="Book ISBN" class="form-control">
	      				</div>
	      			</div>

	      			<div class="form-group">
	      				<label class="control-label col-md-3">Book Title</label>
	      				<div class="col-md-9">
	      					<input type="text" name="book_title" placeholder="Book Title" class="form-control">
	      				</div>
	      			</div>

	      			<div class="form-group">
	      				<label class="control-label col-md-3">Book Author</label>
	      				<div class="col-md-9">
	      					<input type="text" name="book_author" placeholder="Book Author" class="form-control">
	      				</div>
	      			</div>

	      			<div class="form-group">
	      				<label class="control-label col-md-3">Book Category</label>
	      				<div class="col-md-9">
	      					<input type="text" name="book_category" placeholder="Book Category" class="form-control">
	      				</div>
	      			</div>


	      		</div>
	      	</form>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary" onclick="save()">Submit</button>
	      </div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->

</body>
</html>