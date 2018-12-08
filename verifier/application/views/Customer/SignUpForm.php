
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
	<div class="row">
	<div class="col-md-1"></div>
	<div class="col-md-10">
    <section class="content-header">
      <h1>
      <?php if ( isset($rows) ): ?>
            Update Cab Details
        <?php else: ?>
           Customer Details 
        <?php endif ?>
        
        
      </h1>
     
    </section>
    </div>
	</div>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-1"></div>
        <div class="col-md-10">
         
        

          <!-- Input addon -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"></h3>
            </div>
            
            <div class="box-body">
            <form role="form" id="customer_form" >
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Full Name</label>
                  <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Enter Name">
                </div>
                
                <div class="row">
                	<div class="col-md-6">
                		<div class="form-group">
                  			<label for="exampleInputPassword1">Age</label>
                  			<input type="text" class="form-control" name="age" id="exampleInputPassword1" placeholder="Age">
                			</div>
                	</div>
                	
                	<div class="col-md-6">
                		<div class="form-group">
		                  <label>Gender</label>
		                  <select name="gender" class="form-control">
		                    <option selected="" disabled="" >Select Gender</option>
		                    <option value="male" >Male</option>
		                    <option value="female" >Female</option>
		                </select>
                		</div>
                	</div>
                </div>
                
                <div class="row">
                	<div class="col-md-6">
                		<div class="form-group">
                  			<label for="exampleInputPassword1">Mobile Number</label>
                  			<input type="text" class="form-control" name="mobile_number" id="exampleInputPassword1" placeholder="Mobile Number">
                			</div>
                	</div>
                	
                	<div class="col-md-6">
                		<div class="form-group">
                  			<label for="exampleInputPassword1">PAN Number</label>
                  			<input type="text" class="form-control" name="pan" id="exampleInputPassword1" placeholder="PAN Number">
                			</div>
                	</div>
                </div>
                
                <div class="row">
                	<div class="col-md-6">
                		<div class="form-group">
                  			<label for="exampleInputPassword1">Email</label>
                  			<input type="email" class="form-control" name="email" id="exampleInputPassword1" placeholder="Email">
                			</div>
                	</div>
                	
                	<div class="col-md-6">
                		<div class="form-group">
                  			<label for="exampleInputPassword1">Introduced By</label>
                  			<input type="text" class="form-control" name="introduced_by" id="exampleInputPassword1" placeholder="Introduced By">
                			</div>
                	</div>
                </div>
                
                <div class="row">
                	<div class="col-md-6">
                		<div class="form-group">
                  			<label for="exampleInputPassword1">Nominee</label>
                  			<input type="text" class="form-control" name="nominee" id="exampleInputPassword1" placeholder="Email">
                			</div>
                	</div>
                	
                	<div class="col-md-6">
                		<div class="form-group">
                  			<label for="exampleInputPassword1">Relation With Nominee</label>
                  			<input type="text" class="form-control" name="relation_with_nominee" id="exampleInputPassword1" placeholder="Relation">
                			</div>
                	</div>
                </div>
                <div class="row">
                	<div class="col-md-12">
                		<div class="form-group">
                  			<label for="exampleInputPassword1">Contact Number</label>
                  			<input type="text" class="form-control" name="r_contact_number" id="exampleInputPassword1" placeholder="Contact Number">
                			</div>
                	</div>
                	
                	
                </div>
                <div class="row">
                	<div class="col-md-12">
                		<div class="form-group">
                  			<label for="exampleInputPassword1">Bank Name</label>
                  			<input type="text" class="form-control" name="bank_name" id="exampleInputPassword1" placeholder="Bank Name">
                			</div>
                	</div>
                	
                	
                </div>
                
                <div class="row">
                	<div class="col-md-6">
                		<div class="form-group">
                  			<label for="exampleInputPassword1">Account Number</label>
                  			<input type="text" class="form-control" name="account_number" id="exampleInputPassword1" placeholder="Account Number">
                			</div>
                	</div>
                	<div class="col-md-6">
                		<div class="form-group">
                  			<label for="exampleInputPassword1">IFSC Code</label>
                  			<input type="text" class="form-control" name="ifsc_code" id="exampleInputPassword1" placeholder="IFSC Code">
                			</div>
                	</div>
                	
                	
                </div>
                <div class="row">
                	<div class="col-md-6">
                		<div class="form-group">
                  			<label for="exampleInputPassword1">Date</label>
                  			<input type="date" class="form-control" name="date" id="exampleInputPassword1" placeholder="Date">
                			</div>
                	</div>
                	<div class="col-md-6">
                		<div class="form-group">
                  			<label for="exampleInputPassword1">Signature</label>
                  			<input type="text" class="form-control" name="sign" id="exampleInputPassword1" placeholder="Signature">
                			</div>
                	</div>
                	
                	
                </div>
                
                <div class="row">
                	<div class="col-md-6">
                		<div class="form-group">
                  			<label for="exampleInputPassword1">Branch Name</label>
                  			<input type="text" class="form-control" name="branch_name" id="exampleInputPassword1" placeholder="Branch Name">
                			</div>
                	</div>
                	<div class="col-md-6">
                		<div class="form-group">
		                  <label>Mode Of Payment</label>
		                  <select name="mode_of_payment" class="form-control">
		                    <option selected="" disabled="" >Select Mode Of Payment</option>
		                    <option value="rtgs" >RTGS</option>
		                    <option value="neft" >NEFT</option>
		                    <option value="imps" >IMPS</option>
		                    <option value="check" >CHECK</option>
		                    <option value="dd" >DD</option>
		                </select>
                		</div>
                	</div>
                	
                	
                </div>
                
                <div class="row">
                	<div class="col-md-6">
                		<div class="form-group">
                  			<label for="exampleInputPassword1">Amount</label>
                  			<input type="text" class="form-control" name="amount" id="exampleInputPassword1" placeholder="Amount">
                			</div>
                	</div>
                	<div class="col-md-6">
                		<div class="form-group">
                  			<label for="exampleInputPassword1">Amount In Words</label>
                  			<input type="text" class="form-control" name="amount_in_words" id="exampleInputPassword1" placeholder="Amount In Words">
                			</div>
                	</div>
                	
                	
                </div>
                
                <div class="row">
                	<div class="col-md-6">
                		<div class="form-group">
                  			<label for="exampleInputPassword1">Payment Refrence Number</label>
                  			<input type="text" class="form-control" name="payment_ref_number" id="exampleInputPassword1" placeholder="Payment Ref. Number">
                			</div>
                	</div>
                	<div class="col-md-6">
                		<div class="form-group">
		                  <label>Plan</label>
		                  <select name="plan" class="form-control">
		                    <option selected="" disabled="" >Select Plan</option>
		                    <?php foreach ($plans as $plan): ?>
							<option value="<?php echo $plan['plan_title']?>">
								<?php echo $plan['plan_title'];?>
							</option>
							<?php endforeach ?>
							
		                </select>
                		</div>
                	</div>
                	
                	
                </div>
                
                <div class="col-md-12" id="response">
                	
                </div>
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button onclick="AddForm()" type="button" class="btn btn-primary">Submit</button>
                <button  type="reset" class="btn btn-danger pull-right">Reset</button>
              </div>
            </form>
            
            
                </div>
                <!-- /.col-lg-6 -->
              </div>
              <!-- /.row -->

       
              <!-- /input-group -->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
			
        </div>
        <!--/.col (left) -->
        <!-- right column -->
        
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  
  <script>

function AddForm(){
    alert('yaser');
    /*if (typeof FormData !== 'undefined'){
        var formData = new FormData( $("#cab_form")[0] );*/
    $.ajax({
            url :'<?php echo base_url();?>Customer/AddCustomer',  // Controller URL
            type : 'POST',
            data : $("#customer_form").serialize(),
            success: function(data){
            alertify.error(data);
            $('#response').html(data);	
            
        },
    });
     
}


function update_cab(id){
   
    if (typeof FormData !== 'undefined'){
        var formData = new FormData( $("#cab_form")[0] );
    $.ajax({
            url :'<?php echo base_url();?>Cabs/UpdateCab/'+id,  // Controller URL
            type : 'POST',
            data : formData,
            async : false,
            cache : false,
            contentType : false,
            processData : false, 
            success: function(data){
            alertify.error(data);
            history.back();
        },
    });
    } 
}
</script>