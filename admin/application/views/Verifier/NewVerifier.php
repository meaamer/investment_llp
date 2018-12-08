
    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
        <div class="col-md-1"></div>
          <div class="content-header-left col-md-6 col-xs-12 mb-1">
            <h2 class="content-header-title">New Verifier</h2>
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
					<h4 class="card-title" id="basic-layout-colored-form-control">Add New Verifier</h4>
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

						<form class="form" id="new_ver_form">
							<div class="form-body" id="new_exe_form">
								<h4 class="form-section"><i class="icon-android-subway"></i>Verifier Details</h4>
								<div class="row">
								
								<div class="col-md-4">
										<div class="form-group">
											<label for="userinput3">Verifier Name</label>
											<input type="text" id="ver_name" name="ver_name" 
											class="form-control border-primary" placeholder="Verifier Name">
										</div>
									</div>
									
									<div class="col-md-4">
										<div class="form-group">
											<label for="userinput2">Verifier Contact Number</label>
											<input type="text" id="ver_contact_number" name="ver_contact_number" 
											class="form-control border-primary" placeholder="Contact Number">	

										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="userinput2">UID</label>
											<input type="text" id="ver_uid" name="ver_uid" 
											class="form-control border-primary" placeholder="UID Number">	

										</div>
									</div>
									
								</div>
								<div class="row">
								
								<div class="col-md-4">
										<div class="form-group">
											<label for="userinput3">Verifier Login</label>
											<input type="text" id="ver_login" name="ver_login" 
											class="form-control border-primary" placeholder="Verifier Login">
										</div>
									</div>
									
									<div class="col-md-4">
										<div class="form-group">
											<label for="userinput2">Verifier Password</label>
											<input type="text" id="ver_password" name="ver_password" 
											class="form-control border-primary" placeholder="Verifier Password">	

										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="userinput2">Address</label>
											<input type="text" id="ver_address" name="ver_address" 
											class="form-control border-primary" placeholder="Address">	

										</div>
									</div>
									
								</div>

							</div>

							<div class="form-actions right">
								
								<button type="button" id="continue" class="btn btn-primary" onclick="AddVer();">
									<i class="icon-check2"></i> Add Verifier
								</button>
									
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
function AddVer(){
		
		//var type=$('#duration option:selected').val();
		//var cab_id=$("#cab").val();
		
		var form =$("#new_ver_form");
		$.ajax({
      		type:"POST",
     		url:"<?php echo base_url()?>Verifier/AddNewVerifier",
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
   
