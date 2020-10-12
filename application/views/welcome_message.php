<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
	<h1>Welcome to CodeIgniter!</h1>
	<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#addModal">Add Employee</button>

	<table class="table">
	<tr>
	<th>Name</th>
	<th>Email</th>
	<th>Phone</th>
	<th>Address</th>
	<th>City</th>
	<th>Salary</th>
	<th>Country</th>
	<th>Action</th>
	</tr>
	<tbody class="employeedata">
	
	</tbody>
	</table>

	</div>
<!-- Trigger the modal with a button -->

<!-- Modal -->
<div id="addModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
       <form id="employeeform">
	    <div class="form-group">
    <label for="email">Name:</label>
    <input type="text" class="form-control"name="name" id="name">
  </div>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control"name="email" id="email">
  </div>
   <div class="form-group">
    <label for="phone">Phone:</label>
    <input type="text" class="form-control"name="phone" id="phone">
  </div>
   <div class="form-group">
    <label for="address">Address:</label>
    <input type="text"name="address" class="form-control" id="address">
  </div>
  <div class="form-group">
    <label for="city">City:</label>
    <input type="text" name="city"class="form-control" id="city">
  </div>
  <div class="form-group">
    <label for="salary">Salary:</label>
   
	<select class="form-control"name="salary"id="salary">
	<option value="10000">10000</option>
	<option value="20000">20000</option>
	<option value="30000">30000</option>
	</select>
  </div>
  <div class="form-group">
    <label for="state">State:</label>
   
	<select class="form-control"name="state">
	<option value="Tamil Nadu">Tamil Nadu</option>
	<option value="Kerala">Kerala</option>
	<option value="Andhra">Andhra</option>
	</select>
  </div>
   <div class="form-group">
    <label for="country">Country:</label>
    <select class="form-control"name="country">
	<option value="India">India</option>
	<option value="Russia">Russia</option>
	<option value="Japan">Japan</option>
	</select>
  </div>
  <button type="submit" class="btn btn-default saveemployee">Submit</button>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


            <div class="modal fade" id="Modal_Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Employee</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
				   <form id="editemployeeform">
                       	    <div class="form-group">
    <label for="email">Name:</label>
    <input type="text" class="form-control"name="employee_id" id="employee_id">
    <input type="text" class="form-control"name="editname" id="editname">
  </div>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="text" class="form-control"name="editemail" id="editemail">
  </div>
   <div class="form-group">
    <label for="phone">Phone:</label>
    <input type="text" class="form-control"name="editphone" id="editphone">
  </div>
   <div class="form-group">
    <label for="address">Address:</label>
    <input type="text"name="editaddress" class="form-control" id="editaddress">
  </div>
  <div class="form-group">
    <label for="city">City:</label>
    <input type="text" name="editcity"class="form-control" id="editcity">
  </div>
   <div class="form-group">
    <label for="editsalary">Salary:</label>
   
	<select class="form-control"name="editsalary"id="editsalary">
	<option value="10000">10000</option>
	<option value="20000">20000</option>
	<option value="30000">30000</option>
	</select>
  </div>
  <div class="form-group">
    <label for="state">State:</label>
   
	<select class="form-control"name="editstate">
	<option value="Tamil Nadu">Tamil Nadu</option>
	<option value="Kerala">Kerala</option>
	<option value="Andhra">Andhra</option>
	</select>
  </div>
   <div class="form-group">
    <label for="country">Country:</label>
    <select class="form-control"name="editcountry">
	<option value="India">India</option>
	<option value="Russia">Russia</option>
	<option value="Japan">Japan</option>
	</select>
  </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" type="submit" id="btn_update" class="btn btn-primary">Update</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
        <!--END MODAL EDIT-->
		
		        <!--MODAL DELETE-->
         <form>
            <div class="modal fade" id="Modal_Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                       <strong>Are you sure to delete this record?</strong>
                  </div>
                  <div class="modal-footer">
                    <input type="hidden" name="employee_id" id="employee_id" class="form-control">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="button" type="submit" id="btn_delete" class="btn btn-primary">Yes</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
        <!--END MODAL DELETE-->
</body>
<script>
$(document).ready(function(){
  employeedata();
 
});
function employeedata(){
	 $.ajax({
		        type  : 'ajax',
		        url   : "<?php echo site_url('employee/employees_data')?>",
		        async : false,
		        dataType : 'json',
		        success : function(data){
					console.log();
		            var html = '';
		            var i;
		            for(i=0; i<data.length; i++){
		                html += '<tr>'+
		                  		'<td>'+data[i].name+'</td>'+
		                  		'<td>'+data[i].email+'</td>'+
		                        '<td>'+data[i].phone+'</td>'+
		                        '<td>'+data[i].address+'</td>'+
		                        '<td>'+data[i].city+'</td>'+
		                        '<td>'+data[i].salary+'</td>'+
		                        '<td>'+data[i].country+'</td>'+
		                        '<td style="text-align:right;">'+
                                    '<a href="javascript:void(0);" class="btn btn-info btn-sm edit_employee"id="'+data[i].id+'" data-name="'+data[i].name+'" data-email="'+data[i].email+'" data-phone="'+data[i].phone+'" data-address="'+data[i].address+'"data-city="'+data[i].city+'">Edit</a>'+' '+
                                    '<a href="employee/pdf/'+data[i].id+'" class="btn btn-danger btn-sm" data-id="'+data[i].id+'">Pdf</a>'+
                                    '<a href="javascript:void(0);" class="btn btn-danger btn-sm employee_delete" data-id="'+data[i].id+'">Delete</a>'+
                                '</td>'+
		                        '</tr>';
		            }
		            $('.employeedata').html(html);
		        }

		    });
			
}
 $('.saveemployee').on('click',function(){
            var form =$('#employeeform').serialize();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('employee/save')?>",
                dataType : "JSON",
                data : form,
                success: function(data){
                   $('[name="name"]').val("");
                    $('[name="email]').val("");
                    $('[name="phone"]').val("");
                    $('[name="address"]').val("");
                    $('[name="city"]').val("");
                    $('#addModal').modal('hide');
                    employeedata();
                }
            });
            return false;
        });
		 $('.employeedata').on('click','.edit_employee',function(){
            var employee_id = $(this).attr('id');
            var name = $(this).data('name');
            var email = $(this).data('email');
            var phone = $(this).data('phone');
            var address        = $(this).data('address');
            var city        = $(this).data('city');
            
            $('#Modal_Edit').modal('show');
					$('[name="employee_id"]').val(employee_id);
					$('[name="editname"]').val(name);
                    $('[name="editemail]').val(email);
                    $('[name="editphone"]').val(phone);
                    $('[name="editaddress"]').val(address);
                    $('[name="editcity"]').val(city);
           
        });
		 $('#btn_update').on('click',function(){
            var editform =$('#editemployeeform').serialize();
			console.log(editform);
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('employee/update')?>",
                dataType : "JSON",
                data : editform,
                success: function(data){
                    $('[name="employee_id"]').val("");
					$('[name="editname"]').val("");
                    $('[name="editemail]').val("");
                    $('[name="editphone"]').val("");
                    $('[name="editaddress"]').val("");
                    $('[name="editcity"]').val("");
                    $('#Modal_Edit').modal('hide');
                    employeedata();
                }
            });
            return false;
        });
		 $('.employeedata').on('click','.employee_delete',function(){
            var id = $(this).data('id');
            alert(id);
            $('#Modal_Delete').modal('show');
            $('[name="employee_id"]').val(id);
        });
		  $('#btn_delete').on('click',function(){
            var employee_id = $('#employee_id').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('employee/delete')?>",
                dataType : "JSON",
                data : {employee_id:employee_id},
                success: function(data){
                    $('[name="employee_id"]').val("");
                    $('#Modal_Delete').modal('hide');
                    employeedata();
                }
            });
            return false;
        });
</script>
</html>