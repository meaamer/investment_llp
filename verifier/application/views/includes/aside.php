	<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('assets/dist/img/user2-160x160.jpg');?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Dashboard</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        
        <li class="">
          <a href="<?php echo base_url('Dashboard');?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            
          </a>
         
        </li>
        
       
        <li class="treeview">
          <a href="#">
            <i class="fa fa-building"></i>
            <span>Applications</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('Customer/CustomerListView');?>">
            <i class="fa fa-circle-o"></i>Unverified Application</a></li>
            <li><a href="<?php echo base_url('Customer/VerifiedList');?>">
            <i class="fa fa-circle-o"></i>Verified Application</a></li>
          </ul>
        </li>
         
       
       <li class="treeview">
          <a href="#">
            <i class="fa fa-money"></i>
            <span>Setting</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('CompanyPricing/Local');?>">
            <i class="fa fa-circle-o"></i>Profile Setting</a></li>
            
            
          </ul>
        </li>
        
       <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i> <span>Vendors</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('Vendor/Register');?>">
            <i class="fa fa-circle-o"></i>Add Vendor</a></li>
            <li><a href="<?php echo base_url('Vendor/VendorList');?>">
            <i class="fa fa-circle-o"></i> Vendor List</a></li>
          </ul>
        </li>
        
        
      <li class="treeview">
         <a href="#">
            <i class="fa fa-rupee"></i>
            <span>Add Vendor Tariff </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('VendorPricing/Local');?>">
            <i class="fa fa-circle-o"></i>Add Local Tariff</a></li>
            <li><a href="<?php echo base_url('VendorPricing/OS');?>">
            <i class="fa fa-circle-o"></i>Add Outstation Tariff</a></li>
            <li><a href="<?php echo base_url('VendorPricing/TR');?>">
            <i class="fa fa-circle-o"></i>Add Transfer Tariff</a></li>
            
          </ul>
        </li>
       

		
        
        <li class="treeview">
        	<a href="#">
            <i class="fa fa-list-alt"></i>
            <span> Cabs</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          
         <ul class="treeview-menu">
            <li><a href="<?php echo base_url('Cabs/Register');?>">
            <i class="fa fa-circle-o"></i>Add Cab</a></li>
            <li><a href="<?php echo base_url('Cabs/CabList');?>">
            <i class="fa fa-circle-o"></i> Cab List</a></li>
           
            
          </ul>
        </li>

        <li class="">
          <a href="<?php echo base_url('Reports/GetReports');?>">
            <i class="fa fa-dashboard"></i> <span>Reports</span>
           
          </a>
         
        </li>-->
        
    </ul>
    </section>
    <!-- /.sidebar -->
  </aside>


