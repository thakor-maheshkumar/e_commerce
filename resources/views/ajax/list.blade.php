@extends('master.app')
@section('content')
<h2>AjaxCrud Operation</h2>
<div class="container">
	<div>
		<a href="{{url('ajax/create')}}" class="btn btn-danger">Add Detail</a>
		<table class="table table-responsive">
			<thead>
			<tr>
				<td>Name</td>
				<td>Email</td>
				<td>Address</td>
				<td>Gender</td>
				<td>Hobby</td>
				<td>Action</td>
			</tr>
			</thead>
			<tbody id="tbody">
				
			</tbody>
		</table>
	</div>
	<div class="modal" id="editDetail">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Model Heading</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					<form id="detail">
						<div class="form-group">
							<label>Name</label>
							<input type="text" name="name" id="name" class="form-control">
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="text" name="email" id="email" class="form-control">
						</div>
						<div class="form-group">
							<label>Address</label>
							<input type="text" name="address" id="address" class="form-control">
						</div>
						
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@push('jquery')
<script type="text/javascript">
	getData();
		function getData(){
			$.ajax({
				type:'get',
				url:'{{URL("ajax/listData")}}',
				data:{ 
                _token:'{{ csrf_token() }}'
            },
				dataType:'json',
				success:function(data){
					console.log(data);
					var result=data.data;
					var ul='';
					$.each(result,function(key,value){
						ul+='<tr>'+'<td>'+value.name+'</td>'+
								  '<td>'+value.email+'</td>'+
								  '<td>'+value.address+'</td>'+
								  '<td>'+value.gender+'</td>'+
								  '<td>'+value.hobby+'</td>'+
								  '<td>'+'<button class="btn btn-danger edit" data-id='+value.id+' id='+value.id+'>Edit</button>'+'</td>'+
						+'</tr>';
					});
					$('#tbody').html(ul);
				}
			})
		}
		$(document).on('click','.edit',function(){
			var id=$(this).val();
			$('#editDetail').modal('show');
			var id=$(this).data("id");
			$.ajax({
				type:'get',
				url:"{{URL('ajax/edit')}}",
				data:{
					id:id
				},
				dataType:'json',
				success:function(data){
					console.log(data);
					var detailedit=$('#detail');
					detailedit.find('#name').val(data.name);
					detailedit.find('#email').val(data.email);
					detailedit.find('#address').val(data.address);
					$('#editDetail').modal('show');


				}
			});
		});
</script>
@endpush
