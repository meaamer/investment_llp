
    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
        <div class="col-md-1"></div>
          <div class="content-header-left col-md-6 col-xs-12 mb-1">
            <h2 class="content-header-title">New Executive</h2>
          </div>
          <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
            <div class="breadcrumb-wrapper col-xs-12">
              
            </div>
          </div>
        </div>
        <div class="content-body"><!-- Basic form layout section start -->
<section id="basic-form-layouts">
	<div class="row match-height">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title" id="basic-layout-colored-form-control">Add New Executive</h4>
					<a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
					<div class="heading-elements">
						<ul class="list-inline mb-0">
							<li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
							
							<li><a data-action="expand"><i class="icon-expand2"></i></a></li>
							
						</ul>
					</div>
				</div>
				<div class="card-body collapse in" id="thisbook">
					<div class="card-block">

						<div class="card-text">
							
						</div>

						<form class="form" id="new_exe_form">
							<div class="form-body" id="new_exe_form">
								<h4 class="form-section"><i class="icon-android-subway"></i>Executive Details</h4>
								<div class="row">
								
								<div class="col-md-4">
										<div class="form-group">
											<label for="userinput3">Executive Name</label>
											<input type="text" id="exe_name" name="exe_name" 
											class="form-control border-primary" value="<?php if( isset($rows) ){echo $rows['exe_name'];}?>" placeholder="Executive Name">
										</div>
									</div>
									
									<div class="col-md-4">
										<div class="form-group">
											<label for="userinput2">Executive Contact Number</label>
											<input type="text" id="exe_contact_number" name="exe_contact_number" 
											class="form-control border-primary" value="<?php if( isset($rows) ){echo $rows['exe_contact_number'];}?>" placeholder="Contact Number">	

										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="userinput2">UID</label>
											<input type="text" value="<?php if( isset($rows) ){echo $rows['uid'];}?>" id="uid" name="uid" 
											class="form-control border-primary" placeholder="UID Number">	

										</div>
									</div>
									
								</div>
								<div class="row">
								
								<div class="col-md-4">
										<div class="form-group">
											<label for="userinput3">Executive Login</label>
											<input type="text" value="<?php if( isset($rows) ){echo $rows['exe_login'];}?>" id="exe_login" name="exe_login" 
											class="form-control border-primary" placeholder="Executive Login">
										</div>
									</div>
									
									<div class="col-md-4">
										<div class="form-group">
											<label for="userinput2">Executive Password</label>
											<input type="text" value="<?php if( isset($rows) ){echo $rows['exe_password'];}?>" id="exe_password" name="exe_password" 
											class="form-control border-primary" placeholder="Executive Password">	

										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="userinput2">Address</label>
											<input type="text" value="<?php if( isset($rows) ){echo $rows['exe_address'];}?>" id="exe_address" name="exe_address" 
											class="form-control border-primary" placeholder="Address">	

										</div>
									</div>
									
								</div>

							</div>
							
							<div class="form-actions right">
								<?php if (isset($rows)): ?>
								
								
								<button type="button" id="continue" class="btn btn-warning" onclick="UpdateExe(<?php echo $rows['exe_id'];?>)">
									<i  class="icon-check2"></i> Update Executive
								</button>
								<?php else: ?>
									<button type="button" id="continue" class="btn btn-primary" onclick="AddExe();">
									<i class="icon-check2"></i> Add Executive 
								</button>	
								<?php endif ?>	
							</div>

							
							
							<div id="errors"></div>
						</form>
						<div id="error" style="width:40%;"></div>
						<div class="fare_details" style="width:40%;"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

</section>




<!-- // Basic form layout section end -->
        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    
    
    
<script>

/****Ajax for Adding News Plan****/
function AddExe(){
		
		//var type=$('#duration option:selected').val();
		//var cab_id=$("#cab").val();
		
		var form =$("#new_exe_form");
		$.ajax({
      		type:"POST",
     		url:"<?php echo base_url()?>Executive/AddNewExe",
     		data:form.serialize(),
      		//data:form.serialize(),
      		beforeSend: function(){
				//$('#continue').prop('disabled',true);
			},
      		success: function(response){
      			//alert(response);
      			$('#errors').html(response);	
      			
	     }
	    });
	}
	
	
	
	
	function UpdateExe(exe_id){
		
		//var type=$('#duration option:selected').val();
		//var cab_id=$("#cab").val();
		
		var form =$("#new_exe_form");
		$.ajax({
      		type:"POST",
     		url:"<?php echo base_url()?>Executive/UpdateExe/"+exe_id,
     		data:form.serialize(),
      		//data:form.serialize(),
      		beforeSend: function(){
				//$('#continue').prop('disabled',true);
			},
      		success: function(response){
      			//alert(response);
      			$('#errors').html(response);	
      			
	     }
	    });
	}
			
</script>
   
