




  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-4">
        <h1>
        Customers List
      </h1>
      </div>
      <div class="col-md-6">
       
      </div>
      </div>
      
     
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
   
        <div class="col-xs-12">
          
          <div class="box">
            <div class="box-header">
              
            </div>
            <!-- /.box-header -->
            <div class="box-body">
             <div>
              <table id="table_data" class="table table-bordered table-striped">
                
             <thead>

                <tr>
                <th>Customer ID</th>
                  <th>Customer Name</th>
                  <th >Contact Number</th>
                  <th>Amount</th>
                  <th>Plan</th>
                  <th>Account Number</th>
                  <th>PAN Number</th>
                  <th>Status</th>
                  <th>Action</th>
                  
                </tr>
               </thead>  
               
                </table>
                </div>
               
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
	
$(document).ready(function(){  
      var dataTable = $('#table_data').DataTable({  
           "processing":true,  
           "serverSide":true,  
           "order":[],  
           "ajax":{  
                url:"<?php echo base_url() . 'Customer/CustomerList/2'; ?>",  
                type:"POST"  
           },  
           "columnDefs":[  
                {  
                     "targets":[2,3,4,5,6,8],  
                     "orderable":false,  
                },  
           ],

           
           
           
           "fnRowCallback": function( nRow, aData, iDisplayIndex, iDisplayIndexFull ) {
           	console.log(aData);
					$(nRow).attr('id', aData[10]);
            }
             
      });  
 });  
 
  
	
</script>
 