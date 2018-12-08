 <div class="main-panel">
<frameset>
	<frame src="" name="" />
	<frame src="" name="" />
</frameset>
<nav class="navbar navbar-transparent navbar-absolute">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"> User Management </a>
            </div>
            
        </div>
    </nav>
    <div class="content" style="margin-top: 0px !important;padding: 0px !important;">
        <div class="container-fluid">
           
            
            <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" data-background-color="purple">
                        
                        <h4 class="card-title"><i class="material-icons">supervisor_account</i> User List</h4>
                        
                    </div>
                    <div class="card-content table-responsive">
                        <table class="table" id="user_data">
                            <thead class="text-primary">
                                <tr>
	                                <th>UID</th>
	                                <th>Name</th>
	                                <th>Mobile</th>
	                                <th>Login ID</th>
	                                <th>Login Pass</th>
	                                <th>Designation</th>
	                                <th>Actions</th>
	                            </tr>
                            </thead>
                            
                        </table>
                    </div>
                </div>
            </div>
                
                
            </div>
        </div>
    </div>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
      <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
      <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
      <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />      
<script type="text/javascript" language="javascript" >  
 $(document).ready(function(){  
      var dataTable = $('#user_data').DataTable({  
           "processing":true,  
           "serverSide":true,  
           "order":[],  
           "ajax":{  
                url:"<?php echo base_url() . 'User/GetUsers'; ?>",  
                type:"POST"  
           },  
           "columnDefs":[  
                {  
                     "targets":[0, 3, 4],  
                     "orderable":false,  
                },  
           ],  
      });  
 });  
 </script>  
 <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/alertify.min.js"></script>

<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/css/themes/default.min.css"/>
<script>
function Remove(id){
	alertify.confirm('Remove Alert!', 'Are you sure to remove this record', function(){ 
		$.post("<?php echo base_url();?>Remove/RemoveUser",{id:id},function(data){
			
			if(data=="1"){
				$("#"+id).remove();
				alertify.success('Removed'); 
			}
			
		});
		
	},function(){
		 alertify.error('Cancel')
	});
}
 function create(){
 	$.post("<?php echo base_url();?>User/CreateUser",$("#userForm").serialize(),function(data){$("#response").html(data)});
 }	
 </script>   
