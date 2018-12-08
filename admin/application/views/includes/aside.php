
    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <!-- main menu-->
    <div data-scroll-to-active="true" class="main-menu menu-fixed menu-dark menu-accordion menu-shadow">
      <!-- main menu header-->
      <div class="main-menu-header">
        
      </div>
      <!-- / main menu header-->
      <!-- main menu content-->
      <div class="main-menu-content">
        <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
          <li class=" nav-item"><a href="<?php echo base_url('#');?>"><i class="icon-home3"></i><span data-i18n="nav.dash.main" class="menu-title">Dashboard</span></a></li>
          
           <li class=" nav-item"><a href=""><i class="icon-briefcase4"></i><span data-i18n="nav.dash.main" class="menu-title">Plan</span></a>
           	<ul class="menu-content">
              
              <li><a href="<?php echo base_url();?>Plan/NewPlan" data-i18n="nav.dash.main" class="menu-item">New Plan</a></li>
              <li><a href="<?php echo base_url();?>Plan/PlanList" data-i18n="nav.dash.main" class="menu-item">Plan List</a></li>
              
            </ul>
           
           </li>
           
           <li class=" nav-item"><a href=""><i class="icon-users3"></i><span data-i18n="nav.dash.main" class="menu-title">Executive</span></a>
           	<ul class="menu-content">
              
              <li><a href="<?php echo base_url();?>Executive/NewExecutive" data-i18n="nav.dash.main" class="menu-item">New Executive</a></li>
              <li><a href="<?php echo base_url();?>Executive/ExecutiveList" data-i18n="nav.dash.main" class="menu-item">Executive List</a></li>
              
            </ul>
           
           </li>
          
			<li class=" nav-item"><a href=""><i class="icon-users3"></i><span data-i18n="nav.dash.main" class="menu-title">Verifier</span></a>
           	<ul class="menu-content">
              
              <li><a href="<?php echo base_url();?>Verifier/NewVerifier" data-i18n="nav.dash.main" class="menu-item">New Verifier</a></li>
              <li><a href="<?php echo base_url();?>Verifier/VerifierList" data-i18n="nav.dash.main" class="menu-item">Verifier List</a></li>
              
            </ul>
           
           </li>


           <li class=" nav-item"><a href=""><i class="fa fa-user-circle-o"></i><span data-i18n="nav.dash.main" class="menu-title">Customers</span></a>
            <ul class="menu-content">
              
             
              <li><a href="<?php echo base_url();?>Customer/CustomerListView" data-i18n="nav.dash.main" class="menu-item">Rejected</a></li>

              <li><a href="<?php echo base_url();?>Customer/PendingList" data-i18n="nav.dash.main" class="menu-item">Pending</a></li>

              <li><a href="<?php echo base_url();?>Customer/VerifiedList" data-i18n="nav.dash.main" class="menu-item">Verified</a></li>
              
            </ul>
           
           </li>



           <li class=" nav-item"><a href=""><i class="fa fa-money"></i><span data-i18n="nav.dash.main" class="menu-title">Make Payment</span></a>
            <ul class="menu-content">
              
             
              <li><a href="<?php echo base_url();?>MakePayment/CustomerDetail" data-i18n="nav.dash.main" class="menu-item">Payment</a></li>

            </ul>
           
           </li>

        
           <li class=" nav-item"><a href="<?php echo base_url();?>Login/Update"><i class="icon-cog3"></i><span data-i18n="nav.dash.main" class="menu-title">Settings</span></a></li>
           <li class=" nav-item"><a href="<?php echo base_url('Login/Logout');?>"><i class="icon-power3"></i><span data-i18n="nav.dash.main" class="menu-title">Logout</span></a></li>
          
        </ul>
      </div>
      <!-- /main menu content-->
      <!-- main menu footer-->
      <!-- include includes/menu-footer-->
      <!-- main menu footer-->
    </div>
    <!-- / main menu-->
