<div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
          
          
          
          
        </div>
        <div class="content-body"><!-- Basic Tables start -->




<!-- Responsive tables start -->
<div class="row">
    <div class="col-xs-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Verifier List</h4>
                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                        <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                        <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                        <li><a data-action="close"><i class="icon-cross2"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-body collapse in">
                
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Verifier Name</th>
                                <th>Verifier Contact Number</th>
                                <th>Uid</th>
                                <th>Login</th>
                                <th>Password</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $i=1; foreach($exe_list as $rows){
                        			
                        	echo '
                        	<tr id="'.$rows['ver_id'].'" >
                                <th scope="row">'.$i++.'</th>
                                <td>'.$rows['ver_name'].'</td>
                                <td>'.$rows['ver_contact_number'].'</td>
                                <td>'.$rows['ver_uid'].'</td>
                                <td>'.$rows['ver_login'].'</td>
                                <td>'.$rows['ver_password'].'</td>
                                <td onclick="Edit('.$rows['ver_id'].')" > <i style="color:blue;" class="fa fa-edit" ></i> </td>
                                <td onclick="Delete('.$rows['ver_id'].')" > <i style="color:red;" class="fa fa-trash" ></i> </td>
                                
                                
                            </tr>
                        	
                        	
                        	';	
                        		
                        	
                        	}
                        	  ?>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Responsive tables end -->


        </div>
      </div>
    </div>
    
    
    <script type="text/javascript">
    	function Edit(ver_id){
			$.ajax({
				type:"POST",
				url:"<?php echo base_url();?>Verifier/DeleteVer",
				data:{ver_id:ver_id},
				success:function(response){
					alert(response);	
				},
			})
			
			
			
		}
		
		function Delete(ver_id){
			alertify.confirm("confirm","Sure You Want To Delete This.",function(){
    			$.ajax({
				    type:"POST",
				    url:"<?php echo base_url();?>Verifier/DeleteVer",
				    data:{ver_id:ver_id},
				    success: function(response){
					      alertify.success(response);
					      $('#'+ver_id).remove();
					    }
					  });
					  },
					  function(){
					    alertify.error('Cancel');
					  })
					}
			
			
			
			/*
			$.ajax({
				type:"POST",
				url:"<?php echo base_url();?>Plan/DeletePlan",
				data:{plan_id:plan_id},
				success:function(response){
					alert(response);	
				},
			})*/
			
			
			
		
		
    </script>