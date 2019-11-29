var save_method;

function addProduct() {
	save_method = 'add';
	$('#form')[0].reset();
	$('.modal-title').text('Add Product');
	$('#modal_form').modal('show');
}

function save(){
	var url;

	if (save_method == 'add') {
		url = '<?php echo base_url("index.php/Product/product_add")?>';
	}else{
		url = 'index.php/Product/product_update';
	}

	$.ajax({
		url: url,
		type: "POST",
		data: $('#form').serialize(),
		dataType: "JSON",
		success: function(data){
			$('#modal_form').modal('hide');
			location.reload();
		},
		error: function(jqXHR, textStatus, errorThrown) {
			alert('Error Adding/ Update Data');
		}
	});
}