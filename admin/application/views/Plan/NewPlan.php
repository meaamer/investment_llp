
    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
        <div class="col-md-1"></div>
          <div class="content-header-left col-md-6 col-xs-12 mb-1">
            <h2 class="content-header-title">New Plan</h2>
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
					<h4 class="card-title" id="basic-layout-colored-form-control">User Info</h4>
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

						<form class="form" id="new_plan_form">
							<div class="form-body" id="new_plan_form">
								<h4 class="form-section"><i class="icon-android-subway"></i>Plan Details</h4>
								<div class="row">
								
								<div class="col-md-3">
										<div class="form-group">
											<label for="userinput3">Plan Name</label>
											<input type="text" value="<?php if( isset($rows) ){echo $rows['plan_title'];}?>" id="plan_title" name="plan_title"
											class="form-control border-primary" placeholder="Plan Name">
										</div>
									</div>
									
									<div class="col-md-3">
										<div class="form-group">
											<label for="userinput3">Plan Code</label>
											<input type="text" value="<?php if( isset($rows) ){echo $rows['plan_code'];}?>" id="plan_code" name="plan_code" 
											class="form-control border-primary" placeholder="Plan Code">
										</div>
									</div>
									
									<div class="col-md-3">
										<div class="form-group">
											<label for="userinput2">Plan Duration</label>
											<input type="text" value="<?php if( isset($rows) ){echo $rows['plan_duration'];}?>" id="plan_duration" name="plan_duration" 
											class="form-control border-primary" placeholder="Plan Duration">	

										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label for="userinput2">Plan Percentage</label>
											<input type="text" id="percentage" value="<?php if( isset($rows) ){echo $rows['percentage'];}?>" name="percentage" 
											class="form-control border-primary" placeholder="Percentage">	

										</div>
									</div>
									
								</div>

							</div>

							<div class="form-actions right">
								<?php if (isset($rows)): ?>
								
								
								<button type="button" id="continue" class="btn btn-warning" onclick="UpdatePlan(<?php echo $rows['plan_id'];?>)">
									<i  class="icon-check2"></i> Update Plan
								</button>
								<?php else: ?>
									<button type="button" id="continue" class="btn btn-primary" onclick="AddPlan();">
									<i class="icon-check2"></i> Add Plan
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
function AddPlan(){
		
		//var type=$('#duration option:selected').val();
		//var cab_id=$("#cab").val();
		
		var form =$("#new_plan_form");
		$.ajax({
      		type:"POST",
     		url:"<?php echo base_url()?>Plan/AddNewPlan",
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
	
	
	
	
	
	
	/****Ajax for Updating Plan****/
	function UpdatePlan(id){
		alert(id);
		//var type=$('#duration option:selected').val();
		//var cab_id=$("#cab").val();
		
		var form =$("#new_plan_form");
		$.ajax({
      		type:"POST",
     		url:"<?php echo base_url()?>Plan/UpdatePlan/"+id,
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
   
