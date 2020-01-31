
	$(document).on('click','#add',function(e){
		e.preventDefault();
		var insert=[];
		$('.hobby').each(function(){
			if($(this).is(":checked")){
				insert.push($(this).val());
			}
		});
		insert=insert.toString();
		var name=$('#name').val();
		var email=$('#email').val();
		var address=$('#address').val();
		var gender=$('#gender:checked').val();
		var hobby=$('#hobby:checked').val();
		$.ajax({
			type:'post',
			url:'store',
			//headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
			data:{
				"_token": $('#token').val(),
				name:name,
				email:email,
				address:address,
				gender:gender,
				hobby:insert,
			},
			success:function(data){
				console.log(data);
				window.location='list';
			}

		});
	});
