
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
	<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-8">
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
                  <input type="text" class="form-control" name="name" placeholder="Enter Name" value="<?php if(isset($rows)){ echo $rows['name'];} ?>">
                </div>
                
                <div class="row">
                	<div class="col-md-6">
                		<div class="form-group">
                  			<label for="exampleInputPassword1">Age</label>
                  			<input type="text" class="form-control" name="age" id="exampleInputPassword1" placeholder="Age" value="<?php if(isset($rows)){ echo $rows['age'];} ?>">
                			</div>
                	</div>
                	
                	<div class="col-md-6">
                		<div class="form-group">
		                  <label>Gender</label>
		                  <select name="gender" class="form-control">
		                    <option <?php if(!isset($rows)){echo "selected";} ?> disabled="" >Select Gender</option>
                        <?php if (isset($rows)): ?>
                          <option value="<?php echo $rows['gender']; ?>" ><?php echo $rows['gender']; ?></option>
                        <?php endif ?>
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
                  			<input type="text" class="form-control" name="mobile_number" id="exampleInputPassword1" placeholder="Mobile Number" value="<?php if(isset($rows)){ echo $rows['mobile_number'];} ?>">
                			</div>
                	</div>
                	
                	<div class="col-md-6">
                		<div class="form-group">
                  			<label for="exampleInputPassword1">PAN Number</label>
                  			<input type="text" class="form-control" name="pan" id="exampleInputPassword1" placeholder="PAN Number" value="<?php if(isset($rows)){ echo $rows['pan'];} ?>">
                			</div>
                	</div>
                </div>
                
                <div class="row">
                	<div class="col-md-6">
                		<div class="form-group">
                  			<label for="exampleInputPassword1">Email</label>
                  			<input type="email" class="form-control" name="email" id="exampleInputPassword1" placeholder="Email" value="<?php if(isset($rows)){ echo $rows['email'];} ?>">
                			</div>
                	</div>
                	
                	<div class="col-md-6">
                		<div class="form-group">
                  			<label for="exampleInputPassword1">Introduced By</label>
                  			<input type="text" class="form-control" name="introduced_by" id="exampleInputPassword1" placeholder="Introduced By" value="<?php if(isset($rows)){ echo $rows['introduced_by'];} ?>">
                			</div>
                	</div>
                </div>
                
                <div class="row">
                	<div class="col-md-6">
                		<div class="form-group">
                  			<label for="exampleInputPassword1">Nominee</label>
                  			<input type="text" class="form-control" name="nominee" id="exampleInputPassword1" placeholder="Nominee" value="<?php if(isset($rows)){ echo $rows['nominee'];} ?>">
                			</div>
                	</div>
                	
                	<div class="col-md-6">
                		<div class="form-group">
                  			<label for="exampleInputPassword1">Relation With Nominee</label>
                  			<input type="text" class="form-control" name="relation_with_nominee" id="exampleInputPassword1" placeholder="Relation" value="<?php if(isset($rows)){ echo $rows['relation_with_nominee'];} ?>">
                			</div>
                	</div>
                </div>
                <div class="row">
                	<div class="col-md-12">
                		<div class="form-group">
                  			<label for="exampleInputPassword1">Contact Number</label>
                  			<input type="text" class="form-control" name="r_contact_number" id="exampleInputPassword1" placeholder="Contact Number" value="<?php if(isset($rows)){ echo $rows['r_contact_number'];} ?>">
                			</div>
                	</div>
                	
                	
                </div>
                <div class="row">
                	<div class="col-md-12">
                		<div class="form-group">
                  			<label for="exampleInputPassword1">Bank Name</label>
                  			<input type="text" class="form-control" name="bank_name" id="exampleInputPassword1" placeholder="Bank Name" value="<?php if(isset($rows)){ echo $rows['bank_name'];} ?>">
                			</div>
                	</div>
                	
                	
                </div>
                
                <div class="row">
                	<div class="col-md-6">
                		<div class="form-group">
                  			<label for="exampleInputPassword1">Account Number</label>
                  			<input type="text" class="form-control" name="account_number" id="exampleInputPassword1" placeholder="Account Number" value="<?php if(isset($rows)){ echo $rows['account_number'];} ?>">
                			</div>
                	</div>
                	<div class="col-md-6">
                		<div class="form-group">
                  			<label for="exampleInputPassword1">IFSC Code</label>
                  			<input type="text" class="form-control" name="ifsc_code" id="exampleInputPassword1" placeholder="IFSC Code" value="<?php if(isset($rows)){ echo $rows['ifsc_code'];} ?>">
                			</div>
                	</div>
                	
                	
                </div>
                <div class="row">
                	
                	<div class="col-md-6">
                		<div class="form-group">
                  			<label for="exampleInputPassword1">Branch Name</label>
                  			<input type="text" class="form-control" name="branch_name" id="exampleInputPassword1" placeholder="Branch Name" value="<?php if(isset($rows)){ echo $rows['branch_name'];} ?>">
                			</div>
                	</div>
                	<div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Date</label>
                        <input type="date" class="form-control" name="date" id="exampleInputPassword1" placeholder="Date" value="<?php if(isset($rows)){ echo $rows['date'];} ?>">
                      </div>
                  </div>
                	
                </div>
                
                <div class="row">
                	<div class="col-md-6">
                    <div class="form-group">
                      <label>Plan</label>
                      <select name="plan" class="form-control">
                         <option <?php if(!isset($rows)){echo "selected";} ?> disabled="" >Select plan</option>
                         <?php if (isset($rows)): ?>
                          <option value="<?php echo $rows['plan']; ?>" ><?php echo $rows['plan_title']; ?></option>
                        <?php endif ?>

                        <?php foreach ($plans as $plan): ?>
                        <option value="<?php echo $plan['plan_id']?>">
                          <?php echo $plan['plan_title'];?>
                        </option>
                      <?php endforeach ?>
              
                    </select>
                    </div>
                  </div>


                	<div class="col-md-6">
                		<div class="form-group">
		                  <label>Mode Of Payment</label>
		                  <select name="mode_of_payment" class="form-control">
		                   
                          <option <?php if(!isset($rows)){echo "selected";} ?> disabled="" >Select Mode Of Payment</option>
                        <?php if (isset($rows)): ?>
                          <option value="<?php echo $rows['mode_of_payment']; ?>" ><?php echo $rows['mode_of_payment']; ?></option>
                        <?php endif ?>
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
                  			<input type="text" class="form-control" name="amount" id="exampleInputPassword1" placeholder="Amount" value="<?php if(isset($rows)){ echo $rows['amount'];} ?>">
                			</div>
                	</div>
                	<div class="col-md-6">
                		<div class="form-group">
                  			<label for="exampleInputPassword1">Amount In Words</label>
                  			<input type="text" class="form-control" name="amount_in_words" id="exampleInputPassword1" placeholder="Amount In Words" value="<?php if(isset($rows)){ echo $rows['amount_in_words'];} ?>">
                			</div>
                	</div>
                	
                	
                </div>
                
                <div class="row">
                	<div class="col-md-6">
                		<div class="form-group">
                  			<label for="exampleInputPassword1">Payment Refrence Number</label>
                  			<input type="text" class="form-control" name="payment_ref_number" id="exampleInputPassword1" placeholder="Payment Ref. Number" value="<?php if(isset($rows)){ echo $rows['payment_ref_number'];} ?>">
                			</div>
                	</div>

                  <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Date of Activation</label>
                        <input type="date" class="form-control" name="activation_date" id="exampleInputPassword1" placeholder="Date of Activation"
                         value="<?php if(isset($rows)){ echo $rows['activation_date'];} ?>">
                      </div>
                  </div>
                	
                	
                	
                </div>
                
                <div class="col-md-12" id="response">
                	
                </div>
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button onclick="AddForm(<?php echo $rows['id']; ?>)" type="button" class="btn btn-primary pull-right">Update</button><br><br>
               
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

function AddForm(id){
  
    $.ajax({
            url :'<?php echo base_url();?>Customer/UpdateCustomer/'+id,  // Controller URL
            type : 'POST',
            data : $("#customer_form").serialize(),
            success: function(data){
           
            $('#response').html(data);	
            window.history.back();
            
        },
    });
     
}



</script>