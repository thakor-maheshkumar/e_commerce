@extends('master.app')
@section('content')
<div class="container">
	<div class="table table-responsive">
		<button class="btn btn-success" id="openModal">Add</button>
		<table class="table table-bordered">
			<thead>
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Address</th>
				<th>Action</th>
			</tr>
			</thead>
			<tbody id="opb">
				 
			</tbody>
		</table>
	</div>
</div>
<div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Modal Header</h4>
				</div>
				<div class="modal-body">
					<form method="post" action="#" id="forminsert">
						@csrf
					<label>Name</label>
					<input type="text" name="name" class="form-control" placeholder="name" id="name">
					<input type="hidden" name="id" id="id">
					<label>Email</label>
					<input type="text" name="email" class="form-control" placeholder="email" id="email">
					<label>Address</label>
					<input type="text" name="address" class="form-control" placeholder="address" id="address">
					<button class="btn btn-success" id="add">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="editModal" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Edit Modal</h4>
				</div>
				<div class="modal-body">
					<form id="formUpdate" method="post">
						@csrf
					<div class="form-group">
					<label>Name</label>
					<input type="text" name="name" class="form-control" id="name">
					</div>
					<input type="hidden" name="id" id="id">
					<div class="form-group">
					<label>Email</label>
					<input type="text" name="email" class="form-control" id="email">
					</div>
					<div class="form-group">
					<label>Address</label>
					<input type="text" name="address" class="form-control" id="address">
					</div>
					<button class="btn btn-success" type="submit" name="submit">Edit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection
@push('jquery')
<script type="text/javascript">
	$(document).on('click','#openModal',function(){
	$("#myModal").modal('show');
	$('#add').on('click',function(e){
		e.preventDefault();
		var name=$('#name').val();
		var email=$('#email').val();
		var address=$('#address').val();
		$.ajax({
			type:'post',
			url:'{{URL("new/store")}}',
			data:{
				"_token": "{{ csrf_token() }}",
				name:name,
				email:email,
				address:address,
			},
			success:function(data)
			{
			console.log(data);
			getData();
			$('#forminsert').trigger('reset');
			$('#myModal').modal('hide');	
			}
		});
		});
	});
	getData();
	function getData(){
			$.ajax({
				type:'get',
				url:'{{URL("getDatalist")}}',
				dataType:'json',
				data:{
					"_token": "{{ csrf_token() }}",
				}
				success:function(data){
					console.log(data);
					var tb='';
					var result=data.data;
					$.each(result,function(key,value){
						tb+='<tr>'+'<td>'+value.name+'</td>'
								  +'<td>'+value.email+'</td>'
								  +'<td>'+value.address+'</td>'
								  +'<td>'+'<button  class="btn btn-success edit" value='+value.id+'>Edit'+'</button>'+'</td>'
						+'</tr>';
					});
					$('#opb').html(tb);
				}
			});
		}
	</script>
	<script type="text/javascript">
	$(document).on('click','.edit',function(e){
		e.preventDefault(e);
		var id=$(this).val();
		$('#editModal').modal('show');
		$.ajax({
			type:"get",
			url:"{{url('new/edit')}}",
			data:{id:id},
			success:function(data){
				var formupdate=$('#formUpdate');
				formupdate.find("#id").val(data.id);
				formupdate.find("#name").val(data.name);
				formupdate.find("#email").val(data.email);
				formupdate.find("#address").val(data.address);
				$("#editModal").modal('show');
			}
		});
	});
	$('#formUpdate').on('submit',function(e){
		e.preventDefault(e);
		var abc=$(this).serialize();
		$.ajax({
			type:"post",
			url:"{{url('new/update')}}",
			data:abc,
			dataType:'json',
			success:function(data){
				$('#formUpdate').trigger('reset');
				getData();
				$('#editModal').modal('hide');
			}
		});
	});
</script>
@endpush