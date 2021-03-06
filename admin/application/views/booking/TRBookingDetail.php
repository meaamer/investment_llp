
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
     
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
      <div class="col-md-2"></div>
        <div class="col-md-8">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Booking Details</h3>
               <?php if( $details['vendor_status']==1):?>
              <button class="btn btn-primary pull-right" style="margin-left: 10px;margin-bottom: 10px;" 
              data-toggle="modal" data-target="#default">Close Booking</button>
              <?php elseif($details['vendor_status']==2):?>
                <p>Booking Rejected</p>
                <?php elseif($details['vendor_status']==3):?>
                <p style="background:#ed5412;color: #fff;padding:5px;font-weight: bold;" class="pull-right" >Booking Closing in Progress</p> 
                <?php elseif($details['vendor_status']==4):?>
               <button class="btn btn-success pull-right"  onclick="ClosedBooking(<?=$details['booking_id'];?>,<?=$details['vendor_id'];?>);"  style="margin-left: 10px;margin-bottom: 10px;" data-toggle="modal" data-target="#closedbooking"  >Closed Booking Details</button>   
              <?php else:?>
              <button class="btn btn-danger pull-right"  onclick="RejectBooking(<?=$details['booking_id'];?>,<?=$details['vendor_id'];?>);"  style="margin-left: 10px;margin-bottom: 10px;"   >Reject</button>
              <button class="btn btn-success pull-right" data-toggle="modal" data-target="#acceptbooking">Accept</button>
              <?php endif;?>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 20px">1</th>
                  <th style="width: 170px">Booking ID</th>
                  <td><?php echo $details['booking_id'];?></td>
                  
                </tr>
                
                <tr>
                  <th style="width: 20px">2</th>
                  <th style="width: 170px">Cab Name</th>
                  <td><?php echo $details['cab_name'];?></td>
                  
                </tr>
                
                 <tr>
                  <th style="width: 20px">3</th>
                  <th style="width: 170px">Company Name</th>
                  <td><?php echo $details['company_name'];?></td>
                  
                </tr>
                 <tr>
                  <th style="width: 20px">4</th>
                  <th style="width: 170px">Traveller Name</th>
                  <td><?php echo $details['first_name'];?> <?php echo $details['last_name'];?></td>
                  
                </tr>
                 <tr>
                  <th style="width: 20px">5</th>
                  <th style="width: 170px">Booking Type</th>
                  <td><?php echo $details['type'];?></td>
                  
                </tr>
                 <tr>
                  <th style="width: 20px">6</th>
                  <th style="width: 170px">City</th>
                  <td><?php echo $details['from_city'];?></td>
                  
                </tr>
                 <tr>
                  <th style="width: 20px">7</th>
                  <th style="width: 170px">Mobile No</th>
                  <td><?php echo $details['mobile_number'];?></td>
                  
                </tr>
                 <tr>
                  <th style="width: 20px">8</th>
                  <th style="width: 170px">Alternate No</th>
                  <td><?php echo $details['alternate_number'];?></td>
                  
                </tr>
                 <tr>
                  <th style="width: 20px">8</th>
                  <th style="width: 170px">Date</th>
                  <td><?php echo $details['traveling_date'];?></td>
                  
                </tr>
                 <tr>
                  <th style="width: 20px">9</th>
                  <th style="width: 170px">Time</th>
                  <td><?php echo $details['traveling_time'];?></td>
                  
                </tr>
                 <tr>
                  <th style="width: 20px">10</th>
                  <th style="width: 170px">Pickup Address</th>
                  <td><?php echo $details['pickup_address'];?></td>
                  
                </tr>
                <tr>
                  <th style="width: 20px">10</th>
                  <th style="width: 170px">Drop Address</th>
                  <td><?php echo $details['drop_point'];?></td>
                  
                </tr>
                
                
              </table>
            </div>
            <!-- /.box-body -->
           
          </div>
          <!-- /.box -->

          
        </div>
        <!-- /.col -->
        
        <!-- /.col -->
      </div>
      <!-- /.row -->
      
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
<!-- accept driver details in the time of bookong accepting -->
<div class="col-lg-4 col-md-6 col-sm-12">
  <div class="form-group">
    <div class="modal fade text-lg-left" id="acceptbooking" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
      <div class="modal-dialog modal-md" role="document">
          <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title" id="myModalLabel1">Driver Details</h4>
            </div>
            <div class="modal-body">

            <form class="form" id="accepting">
            <div class="form-body">
            <div class="row" id="closing_row">
              <div class="col-md-4">
              <div class="form-group">
              <label for="complaintinput1">Driver Name</label>
              <input type="text" id="d_name" class="form-control round" 
              placeholder="Driver Name" name="d_name">
              </div>
              </div>

              <div class="col-md-4">
              <div class="form-group">
              <label for="complaintinput1">Driver Contact No</label>
              <input type="text" id="date" class="form-control round" 
              placeholder="Driver Contact No" name="d_no">
              </div>
              </div>

              <div class="col-md-4">
              <div class="form-group">
              <label for="complaintinput1">Cab No</label>
              <input type="text" id="date" class="form-control round" 
              placeholder="Cab No" name="cab_no">
              </div>
              </div>
            </div>
          </div>
       

            </div>
          <div class="modal-footer">
            
            <button type="button" class="btn btn-outline-secondary btn-success" 
            onclick="AcceptBooking(<?=$details['booking_id'];?>);">Accept Booking</button>
            <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Dismiss</button>
           </form>  
          </div>
          </div>
        </div>
    </div>
  </div>
</div>







                  <!-- Modal -->
                  <div class="modal fade text-xs-left" id="default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      <h4 class="modal-title" id="myModalLabel1">Close Booking</h4>
                      </div>
                      <div class="modal-body">
                        <form class="form" id="form_data">
                          <div class="form-body">
                          <div class="row">
                            <div class="col-md-4">
                            <div class="form-group">
                            <label for="complaintinput1">Opening Kilometer</label>
                            <input type="text"  class="form-control round" 
                            placeholder="Opening Kilometer" name="open_km">
                            </div>
                            </div>


                            <div class="col-md-4">
                            <div class="form-group">
                            <label for="complaintinput1">Closing Kilometer</label>
                            <input type="text"  class="form-control round" 
                            placeholder="Closing Kilometer" name="close_km">
                            </div>
                            </div>

                            <div class="col-md-4">
                            <div class="form-group">
                            <label for="complaintinput1">Total Kilometer</label>
                            <input type="text"  class="form-control round" 
                            placeholder="Total Kilometer" name="total_km">
                            </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6">
                            <div class="form-group">
                            <label for="complaintinput1">Extra Kilometer</label>
                            <input type="text"  class="form-control round" placeholder="Extra Kilometer"
                             name="extra_km">
                            </div>
                            </div>


                            <div class="col-md-6">
                            <div class="form-group">
                            <label for="complaintinput1">Other Charges</label>
                            <input type="text" id="complaintinput1" class="form-control round"
                             placeholder="Other Charges" name="other_charges">
                            </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6">
                            <div class="form-group">
                            <label for="complaintinput1">Advance Amount</label>
                            <input type="text"  class="form-control round" placeholder="Advance Amount"
                             name="advance">
                            </div>
                            </div>


                            <div class="col-md-6">
                            <div class="form-group">
                            <label for="complaintinput1">Reason </label>
                            <input type="text" id="complaintinput1" class="form-control round"
                             placeholder="Reason" name="reason">
                            </div>
                            </div>
                          </div>
                          <input type="hidden" name="vendor_id" value="<?php echo $details['vendor_id']; ?>">

                          <!-- <div class="row">
                            <div class="col-md-12">
                            <div class="form-group">
                            <label for="complaintinput1">Waiting Charges</label>
                            <input type="text"  class="form-control round" placeholder="Waiting Charges"
                             name="Waiting_charg">
                            </div>
                            </div>
                          </div> -->
                        </div>

              
           
                      </div>
                      <div class="modal-footer">
                       <div class="row">
                        <div id="response" class="col-md-7"></div>
                      <button type="button" class="btn btn-outline-primary" 
                      onclick="close_booking(<?php echo $details['booking_id'];?>);">Close Booking</button>
                    </form>
                      <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>

                      
                      </div>
                      </div>
                    </div>
                    </div>
                  </div>
                </div>
              </div>







<!-- show the close booking details to vendors -->
<div class="col-lg-4 col-md-6 col-sm-12">
  <div class="form-group">
    <div class="modal fade text-lg-left" id="closedbooking" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title" id="myModalLabel1">Closed Booking Details</h4>
            </div>
            <div class="modal-body" id="ClosedBookingDetail">


            </div>
          <div class="modal-footer">
            
            <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
          </div>
          </div>
        </div>
    </div>
  </div>
</div>
              

 <script type="text/javascript">
 	function AcceptBooking(booking_id)
  {
   
    var form =$("#accepting");
    $.ajax({
      type:"POST",
      url:"<?php echo base_url()?>Booking/AcceptBooking/"+booking_id,
      data:form.serialize(),
      success: function(response){
      alertify.success(response);
      window.location.reload();
      },error: function(xhr, status, error) {

      console.log(xhr);
    }
      
    });
       
         
  }
 	
 	function RejectBooking(booking_id,vendor_id){
 		//alert(vendor_id);
		alertify.confirm('Accept Booking', 'Are You sure you want to Reject This Booking', function(){ 
				$.ajax({
					url:"<?php echo base_url();?>Booking/RejectBooking",
					type:'POST',
					data:{booking_id:booking_id,vendor_id:vendor_id},
					success: function(data){
						alertify.success('Booking Rejected');
            window.location.reload();
					}
					
					
				})
				 }
                , function(){ alertify.error('Cancel')});
	
		
	}

  function close_booking(id){
    
    var form = $("#form_data");
    $.ajax({
      type:"POST",
      url:"<?php echo base_url()?>CloseBooking/TRClosing/"+id,
      data:form.serialize(),
      success: function(response){
       $("#response").html(response);
       
         
      }
    });
  }

  //show the delails of close booking to vendors
  function ClosedBooking(booking_id,vendor_id){
    //alert(id);
    $.ajax({
      url:"<?php echo base_url();?>CloseBooking/TRClosedBooking",
      type:'POST',
      //data:$('')
      data:{booking_id:booking_id,vendor_id:vendor_id},
      success: function(response){
       
         $('#ClosedBookingDetail').html(response);
        
        }
       });
  }
  
 	
 </script>              