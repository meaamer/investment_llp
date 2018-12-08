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
    <div class="content" style="padding: 0px !important">
        <div class="container-fluid">
           
            
            <div class="row">
            <div class="col-md-8" style="margin: auto; float:none">
                <div class="card">
                    <div class="card-header card-header-icon" data-background-color="purple">
                    <h4 class="card-title"><i class="material-icons">supervisor_account</i> New User</h4>
                     
                        
                    </div>
                    <div class="card-content">
                        
                        <form method="#" action="#" id="userForm">
                            <div class="form-group label-floating is-empty">
                            <?php if($rows==""):?> 
                                <label class="control-label">Full Name</label>
                                <input type="text" class="form-control" name="name">
                           		<span class="material-input"></span>
                           	<?php else:?>
                           		
                                <input type="text" class="form-control" name="name" value="<?php echo $rows['name'];?>">
                           		<span class="material-input"></span>
                           	<?php endif;?>	
                            </div>
                            <div class="form-group label-floating is-empty">
                             <?php if($rows==""):?> 
                                <label class="control-label">Login ID</label>
                                <input type="text" class="form-control" name="login_id" >
                           		<span class="material-input"></span>
                           	<?php else:?>	
                           		<input type="text" class="form-control" name="login_id" value="<?php echo $rows['login_id'];?>">
                           		<span class="material-input"></span>
                           	<?php endif;?>	
                            </div>
                            <div class="form-group label-floating is-empty">
                            <?php if($rows==""):?> 
                                <label class="control-label">Login Password</label>
                                <input type="password" class="form-control" name="login_pass" >
                           		<span class="material-input"></span>
                           	<?php else:?>	
                           		<input type="password" class="form-control" name="login_pass" value="<?php echo $rows['login_pass'];?>">
                           		<span class="material-input"></span>
                           	<?php endif;?>	
                            </div>
                            <div class="form-group label-floating is-empty">
                            <?php if($rows==""):?> 
                                <label class="control-label">Mobile Number</label>
                                <input type="number" min="0" class="form-control" name="mobile" >
                           		<span class="material-input"></span>
                           	<?php else:?>	
                           		<input type="number" min="0" class="form-control" name="mobile" value="<?php echo $rows['mobile'];?>">
                           		<span class="material-input"></span>	
                           	<?php endif;?>	
                            </div>
                           
                           <div class="form-group label-floating is-empty">
                           <?php if($rows==""):?> 
                                <label class="control-label">Designation</label>
                                <input type="email" class="form-control" name="designation" >
                           		<span class="material-input"></span>
                           	<?php else:?>	
                           		<input type="email" class="form-control" name="designation" value="<?php echo $rows['designation'];?>">
                           		<span class="material-input"></span>
                           	<?php endif;?>
                            </div>
                            <div id="response"></div>
                            <?php if($rows==""):?> 
                            <button type="button" onclick="create()" class="btn btn-fill btn-rose">CREATE</button>
                            <?php else:?>
                            <input type="text" name="user_id" value="<?php echo $rows['user_id'];?>" style="display: none"/>
                            <button type="button" onclick="update()" class="btn btn-fill btn-warning">UPDATE</button>
                            <?php endif;?>
                        </form>
                    </div>
                </div>
            </div>
                
                
            </div>
        </div>
    </div>
 <script>
 function create(){
 	$.post("<?php echo base_url();?>User/CreateUser",$("#userForm").serialize(),function(data){$("#response").html(data)});
 }	
 
 
 function update(){
 	$.post("<?php echo base_url();?>User/Update",$("#userForm").serialize(),function(data){$("#response").html(data)});
 }	
 </script>   
