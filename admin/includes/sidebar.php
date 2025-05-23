<?php
$pageName = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'],"/") +1);
echo $pageName;
?>
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" index.php ">
      <h4>BYTOSOFT </h4>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      
    <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link
            <?= $pageName == 'index.php' ? 'active':'';?> 
            "href="index.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-home <?= $pageName == 'index.php' ? 'text-white':'text-dark';?>  text-lg"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Header Section</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link  
          
           
           <?= $pageName == 'header.php' ? 'active':'';?> 
            "href="header.php">
           
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa fa-globe <?= $pageName == 'header.php' ? 'text-white':'text-dark';?>   text-lg"></i>
              
            </div>
            <span class="nav-link-text ms-1">Header</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Home </h6>
        </li>
        <li class="nav-item">
          <a class="nav-link
          <?= $pageName == 'homepage.php' ? 'active':'';?>   
          " href="homepage.php ">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa fa-home <?= $pageName == 'homepage.php' ? 'text-white':'text-dark';?>  text-lg"></i>
              
            </div>
            <span class="nav-link-text ms-1">Home Page</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">About </h6>
        </li>
        <li class="nav-item">
          <a class="nav-link
          <?= $pageName == 'about-us-page.php' ? 'active':'';?>   
          " href="about-us-page.php ">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa fa-home <?= $pageName == 'about-us-page.php' ? 'text-white':'text-dark';?>  text-lg"></i>
              
            </div>
            <span class="nav-link-text ms-1">About Page</span>
          </a>
        </li>

        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Enquiries</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link
          <?= $pageName == 'enquiries.php' ? 'active':'';?>   
          " href="enquiries.php ">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa fa-bullhorn <?= $pageName == 'enquiries.php' ? 'text-white':'text-dark';?>  text-lg"></i>
              
            </div>
            <span class="nav-link-text ms-1">Enquiries</span>
          </a>
        </li>
       
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Manage Services</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link  
           <?= $pageName == 'services.php' ? 'active':'';?> 
           <?= $pageName == 'services-create.php' ? 'active':'';?> 
           <?= $pageName == 'services-edit.php' ? 'active':'';?> 
            "href="services.php">
           
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa fa-cogs <?= $pageName == 'services.php' ? 'text-white':'text-dark';?>   text-lg"></i>
              
            </div>
            <span class="nav-link-text ms-1">Services</span>
          </a>
        </li>
       
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Site Management</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link  
           <?= $pageName == 'users.php' ? 'active':'';?> 
           <?= $pageName == 'users-create.php' ? 'active':'';?> 
           <?= $pageName == 'users-edit.php' ? 'active':'';?> 
          " href="users.php ">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa fa-user-plus <?= $pageName == 'users.php' ? 'text-white':'text-dark';?> text-lg"></i>
              
            </div>
            <span class="nav-link-text ms-1">Admin / Users</span>
          </a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link  
           <?= $pageName == 'social-media.php' ? 'active':'';?> 
          " href="social-media.php ">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa fa-globe <?= $pageName == 'social-media.php' ? 'text-white':'text-dark';?> text-lg"></i>
              
            </div>
            <span class="nav-link-text ms-1">Social Media</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link  
           <?= $pageName == 'settings.php' ? 'active':'';?> 
          " href="settings.php ">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa fa-globe <?= $pageName == 'settings.php' ? 'text-white':'text-dark';?> text-lg"></i>
              
            </div>
            <span class="nav-link-text ms-1">Setting</span>
          </a>
        </li>
        
      </ul>
    </div>
    <div class="sidenav-footer mx-3 ">
     
      <a class="btn btn-primary mt-3 w-100" href="logout.php">
        LogOut
    </a>
    </div>
  </aside>