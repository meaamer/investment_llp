<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
      <div class="col-md-1"></div>
        <div class="col-md-10">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Booking Details</h3>
             
                
                
                <a href="<?php echo base_url('Customer/CustomerListView/').$details['id']; ?>" 
                  class="btn btn-primary pull-right">Edit</a>
                
       
           		 
   
            </div>           
              <!--<button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#modal-default" 
              onclick="get_vendor(<?php echo $details['booking_id']?>);">Assign</button>
            </div>-->
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 170px">Customer ID</th>
                  <td id="form_id" ><?php  echo $details['id'];?></td>
                  <td id="id" style="display: none;" ><?php  echo $details['id'];?></td>
                </tr>
                <tr>
                  <th style="width: 170px">Name</th>
                  <td id="id" ><?php echo $details['name'];?></td>
                  
                </tr>
                
                <tr>
                  
                  <th style="width: 170px">Gender</th>
                  <td><?php echo $details['gender'];?></td>
                  
                </tr>
                
                 <tr>
                  <th style="width: 170px">Contact Number</th>
                  <td><?php echo $details['mobile_number'];?></td>
                 </tr>
                 
                 <tr>
                  <th style="width: 170px">PAN Number</th>
                  <td id="city" ><?php echo $details['pan'];?></td>
                 </tr>
                 
                 <tr>
                  <th style="width: 170px">Email</th>
                  <td><?php echo $details['email'];?></td>
                  
                </tr>
                <tr>
                  
                  <th style="width: 170px">Introduced By</th>
                  <td id="type" ><?php echo $details['introduced_by'];?></td>
                  
                </tr>
                 <tr>
                  <th style="width: 170px">Nominee</th>
                  <td><?php echo $details['nominee'];?></td>
                  
                </tr>
                 <tr>
                  
                  <th style="width: 170px">Relationship With Nominee</th>
                  <td><?php echo $details['relation_with_nominee'];?></td>
                  
                </tr>
                 <tr>
                  
                  <th style="width: 170px">Nominee Contact Number</th>
                  <td><?php echo $details['r_contact_number'];?></td>
             </tr>
            
             	
                
                <tr>
                  <th style="width: 170px">Account Number</th>
                  <td><?php echo $details['account_number'];?></td>
                </tr>
                 <tr>
                  
                  <th style="width: 170px">IFSC</th>
                  <td><?php echo $details['ifsc_code'];?></td>
                </tr>
                <tr>
                  
                  <th style="width: 170px">Branch Name</th>
                  <td><?php echo $details['branch_name'];?></td>
                </tr>
                <tr>
                  
                  <th style="width: 170px">Date</th>
                  <td><?php echo $details['date'];?></td>
                </tr>
                <tr>
                  
                  <th style="width: 170px">Mode Of Payment</th>
                  <td><?php echo $details['mode_of_payment'];?></td>
                </tr>
                <tr>
                  
                  <th style="width: 170px">Amount</th>
                  <td> &#8377; <b><?php echo $details['amount'];?>/- </b> <i>(<?php echo $details['amount_in_words'];?>)</i> </td>
                </tr>
                <tr>
                  
                  <th style="width: 170px">Payment Ref. Number</th>
                  <td><?php echo $details['payment_ref_number'];?></td>
                </tr>
                
                <tr>
                  
                  <th style="width: 170px">Plan</th>
                  <td> <b><?php echo $details['plan_title'];?></b> </td>
                </tr>
                
                <?php if($details['status']==0){
                	echo '<tr>
                  
                  <th style="width: 170px">Activation Date</th>
                  <td> <form id="customer_form" >
                  <div class="form-group col-md-6">
                  		<input name="activation_date" class="form-control" id="exampleInputEmail1"  type="date" />
                  </div>		
                  </form> </td>
                </tr>';
                } ?>
                
                
                
                <tr>
                  
                  <th style="width: 170px"><?php if($details['status']==1){echo 'Status'; }?></th>
                  <td><?php  if($details['status']==0){
                  		echo '<a onclick="VerifyFrom('.$details['id'].');" class="btn btn-warning btn-md" >Verify</a>';	
                  }else if($details['status']==1){
                  		echo '<a class="btn btn-success btn-xs" >Verified</a>';
                  }?></td>
                </tr>
                
                <tr>
                	<td id="response" ></td>
                </tr>
                
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



<script type="text/javascript">
	function VerifyFrom(id){
		//alert(id);
		
		$.ajax({
            url :'<?php echo base_url();?>'+id, 
            type : 'POST',
            data : $("#customer_form").serialize(),
            success: function(data){
            alertify.error(data);
            $('#response').html(data);	
            
        },
    });
		
		
		
		
	}
	
	
	
</script>
