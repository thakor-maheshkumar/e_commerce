@extends('master.app')
@section('content')
<h2>Category Table</h2>
<div class="container-fluid">
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                            <li class="breadcrumb-item active">Basic</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Basic Tables</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="col-md-4">
                                    @if(Session::has('success'))
                                    <div class="alert alert-success">{{Session::get('success')}}</div>
                                    @endif
                                </div>
                                <div class="col-md-4">
                                     @if(Session::has('danger'))
                                     <div class="alert alert-danger">{{Session::get('danger')}}</div>
                                     @endif
                                </div>
                                <div class="card-box">
                                    <button class="btn btn-success" id="add">Add Detail</button>
                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Gender</th>
                                                <th>Hobby</th>
                                                <th>State</th>
                                                <th>images</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody id="jjj">
    
                                            
                                            </tbody>
                                        </table>
                                    </div>
                                </div> <!-- end card-box -->
                            </div> <!-- end col -->
                        </div>                        
                    </div>
                    <div class="modal" id="myModal">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Modal Heading</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <form method="post" enctype="multipart/form-data" id="imageUploadForm">
                                    @csrf
                                <div class="modal-body">
                                    <div class="form-group">
                                       <label>Name</label>
                                       <input type="text" name="name" placeholder="name" class="form-control" id="name">
                                    </div>
                                    <div class="form-group">
                                        <label>Gender</label>
                                        <input type="radio" name="gender" id="gender" value="male">Male
                                        <input type="radio" name="gender" id="gender" value="female">Female
                                    </div>
                                    <div class="form-group">
                                        <label>Hobby</label>
                                        <input type="checkbox" name="hobby[]" id="hobby" value="reading">Reading
                                        <input type="checkbox" name="hobby[]" id="hobby"value="writing" >Writing
                                        <input type="checkbox" name="hobby[]" id="hobby" value="playing" >Playing
                                    </div>
                                    <div class="form-group">
                                        <label>State</label>
                                        <select class="form-control state" name="state[]" id="state" style="width: 250px" multiple>
                                            <option value="select State">Select State</option>
                                            <option value="Gujarat">Gujarat</option>
                                            <option value="Maharastra">Maharastra</option>
                                            <option value="Goa">Goa</option>
                                        </select>
                                    </div>
                                      <label>Image</label>
                                      <input type="file" name="image" class="form-control" id="image">  
                                    <div class="form-group">
                                        <input type="submit" name="submit" class="btn btn-success" id="addA">Submit
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="modal" id="editModalManager">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Modal Heading</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <form method="post" enctype="multipart/form-data" id="UploadForm">
                                    @csrf
                                <div class="modal-body">
                                    <div class="form-group">
                                       <label>Name</label>
                                       <input type="text" name="name" placeholder="name" class="form-control" id="name">
                                    </div>
                                    <div class="form-group">
                                        <label>Gender</label>
                                        <input type="radio" name="gender" class="gender" id="gender" value="Male">Male
                                        <input type="radio" name="gender" class="gender" id="gender" value="Female">Female 
                                    </div>
                                    <input type="hidden" name="id" id="id">
                                    
                                    <div class="form-group">
                                        <label>Hobby</label>
                                        <input type="checkbox" name="hobby[]" id="hobby" value="reading">Reading
                                        <input type="checkbox" name="hobby[]" id="hobby"value="writing" >Writing
                                        <input type="checkbox" name="hobby[]" id="hobby" value="playing" >Playing
                                    </div>
                                    <div class="form-group">
                                        <label>State</label>
                                        <select class="form-control state" name="state[]" id="editState" style="width: 250px" multiple>
                                            <option value="select State">Select State</option>
                                            <option value="Gujarat">Gujarat</option>
                                            <option value="Maharastra">Maharastra</option>
                                            <option value="Goa">Goa</option>
                                        </select>
                                    </div>
                                      <label>Image</label>
                                      <input type="file" name="image" class="form-control" id="image">  
                                    <div class="form-group">
                                        <input type="submit" name="submit" class="btn btn-success" id="addA">Submit
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
@endsection
@push('jquery')
<script type="text/javascript">
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
</script>
<script type="text/javascript">
    $(document).on('click','#add',function(){
        $('#myModal').show('modal');
    });
    $(document).on('click','#addA',function(){
        $('#myModal').hide('modal');
    });
    /*$(document).on('click','#addA',function(e){
        e.preventDefault();
        var name=$('#name').val();
        var gender=$('#gender:checked').val();
        var hobby=$('#hobby:checked').val();
        var state=$('#state').val();
        //c//onsole.log(state);
         var image=$('#image').val();
         //console.log(image);

        $.ajax({
            type:"post",
            url:"{{url('manager/store')}}",
            enctype:'multipart/form-data',
            processData:false,
            contentType:false,
            cache:false,
            data:{
                 "_token": "{{ csrf_token() }}",
                name:name,
                gender:gender,
                hobby:hobby,
                state:state,
                image:image,
            },
            //contentType:false,
            //processData:false,
            success:function(data){
                console.log(data);
            }
        })



    })*/
    $(document).ready(function(e){
        $('#imageUploadForm').on('submit',function(e){
            e.preventDefault();
            var formData=new FormData(this);
            $.ajax({
                type:"post",
                url:"{{url('manager/store')}}",
                data:formData,
                dataType:'json',
                cache:false,
                contentType:false,
                processData:false,
                success:function(data)
                {
                     console.log(data);
                     getManagerData();
                     //location.reload();
                    ///$('#imageUploadForm').trigger('');
                    $('#myModal').modal('hide')
                }
            })
        })
    });
    $(document).on('click','.edit',function(e){
        e.preventDefault();
        var id=$(this).val();
        
        $('#editModalManager').modal('show');
        $.ajax({
            type:'get',
            url:'{{url("manager/edit")}}',
            data:{
                id:id
            },
            dataType:'json',
            success:function(data){
                var managerUpdate=$('#UploadForm');
                managerUpdate.find('#id').val(data.id);
                managerUpdate.find('#name').val(data.name);
                managerUpdate.find("#gender").val(data.gender);
                managerUpdate.find('#hobby').val(data.hobby);
                managerUpdate.find('#state').val(data.state);
                $('#editModalManager').modal('show');
            }

        })
    })
    getManagerData();
    function getManagerData(){
        $.ajax({
            type:'get',
            url:'{{URL("manager/getdata")}}',
            dataType:'json',
             success:function(data){
                console.log(data);
                var managerData='';
                var resultData=data.data;
                $.each(resultData,function(key,value){

                   // console.log(resultData.value);
                  managerData+='<tr>'+'<td>'+value.name+'</td>'+
                                         '<td>'+value.gender+'</td>'+
                                         '<td>'+value.hobby+'</td>'+
                                         '<td>'+value.state+'</td>'+
                                         '<td><img src="/images/'+value.image+'" alt="" width="70">'+'</td>'+
                                         '<td><button class="btn btn-success edit" id="edit" value='+value.id+'>Edit</button>'+'</td>'
                     +'</tr>';
                 });
                 $('#jjj').html(managerData);
            }
        });
    }
</script>
    <script type="text/javascript">
    $(document).ready(function(){
        $('.state').select2({
        });
    });
</script>
@endpush