




  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-6">
        <h1>
        Customers List
      </h1>
      </div>
      <div class="col-md-4">

       <form action="<?php echo base_url('MakePayment/Search'); ?>" method="post">
                                    <div class="col-md-8">
                                        <select class="form-control" name="search_plan">
                                            <?php if (!empty($plans)): ?>
                                                <option selected="" disabled="">select plans</option>
                                                <?php foreach ($plans as $category): ?>
                                                    <option value="<?php echo $category['plan_id'] ?>">
                                                        <?php echo $category['plan_title'] ?>
                                                    </option>
                                                    
                                                <?php endforeach ?>
                                              

                                            <?php endif ?>
                                            
                                        </select>
                                    </div>
                                        <div class="col-md-2">
                                        <button type="submit" class="btn btn-info">Send</button>
                                        </div>
                                        
                                </form>

                              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Add Percentage</button>
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
                  <th>Amount</th>
                  <th>Plan</th>
                </tr>
                  
               </thead> 
               <tbody>
                 <?php if (!empty($customers)): ?>
                  <form action="<?php echo base_url('MakePayment/PayTo'); ?>" method="post">
                 <?php foreach ($customers as $pay): ?>

                   <tr>
                     <td><input type="checkbox" name="customer_id[]" value="<?php echo $pay['id']; ?>">  <?php echo $pay['id']; ?></td>
                     <td><?php echo $pay['name']; ?></td>
                     <td>
                <input type="text" name="pay_amount[]" value="<?php echo $pay['amount']; ?>" readonly></td>
                     <td>
                        <input type="hidden" name="plan_id[]" value="<?php echo $pay['plan_id']; ?>">
                      <?php echo $pay['plan_title']; ?></td>
                    
                   </tr>
                   
                 <?php endforeach ?>
             


              <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <input type="text" name="percentage" class="form-control">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      
         <button type="submit" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>
                 </form>
                 <?php endif ?>
               </tbody> 
                 
                
                 
                  
               
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
  
  
