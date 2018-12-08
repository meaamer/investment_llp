
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Vendor Outstation Tariff
      </h1>
      <ol class="breadcrumb">
        
      </ol>
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
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Vendor Name</th>
                  <th>Can Name</th>
                  <th>Cab Image</th>
                  <th>Outstation Per Km </th>
                  <th>Extra Per Km </th>
                  <th>Average Per Km</th>
                  
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                
                <?php if ( !empty($outstations) ): $i=0; ?>
    			<?php foreach ( $outstations as $outstation ): $i++; ?>
        
    				
                <tr id="reload<?php echo $outstation['vendor_outstation_id'];?>">
                  <td><?php echo $i; ?></td>
                  <td><?php echo $outstation['vendor_name']; ?></td>
                  <td><?php echo $outstation['cab_name']; ?></td>
                  <td>
                  	<img width="100" src="<?php echo base_url('assets/uploads/').$outstation['cab_image'];?>" alt="" />
                  </td>
                  <td><?php echo $outstation['outstation_per_kilometer']; ?>/-</td>
                  <td><?php echo $outstation['extra_per_kilometer']; ?>/-</td>
                  
                  <td><?php echo $outstation['average_per_kilometer']; ?>/-</td>
                  
                  <td>
                  	<a href="<?php echo base_url('VendorPricing/OSList/').$outstation['vendor_outstation_id'];?>" class="btn btn-danger"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                  	<button type="button" class="btn btn-danger" 
                  	onclick="delete_OS(<?php echo $outstation['vendor_outstation_id'];?>);">
                  	<i class="fa fa-trash" aria-hidden="true"></i></button>
                  	
                  </td>
                </tr>
                
                <?php endforeach ?>
				<?php endif ?>
            
                </tbody>
                <tfoot>
                
                </tfoot>
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
  
  
  <script>
function delete_OS(id){

    alertify.confirm("confirm","Sure You Want To Delete This.",function(){
    $.ajax({
    type:"POST",
    url:"<?php echo base_url()?>VendorPricing/DeleteOS/"+id,
    success: function(response)
    {
      alertify.success(response);
      $('#reload'+id).remove();
    }
  });
  },
  function(){
    alertify.error('Cancel');
  })
}
</script>
 