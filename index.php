<?php  
$pageTitle = "Home";
include('includes/header.php');
?>
<div class="container">
<?= alertMessage();?>

<?php
              $introQuery = "SELECT * FROM bannerimg ";
              $result = mysqli_query($conn,$introQuery);
              if($result){
                  if(mysqli_num_rows($result) > 0){
                      foreach($result as $row){
  
                          ?>
                           
                 
                      
                           <?php if($row['image'] != '') : ?>
                          <img src="<?= $row['image'];?>" class="w-100 rounded" alt="Img" />
                      <?php else: ?>
                          <img src="assets/images/no-img.jpg" class="w-100 rounded" alt="Img"style="min-height:200px;max-height:200px;"/>
                      <?php endif; ?>
                    
                          
                         
                     
                           
                          <?php
                      }
                  }else{
                      ?>
                      <div class="col-md-12">
                      <h5>No Service Available</h5>
                      </div>
                  
                  <?php
              }
              }else{
                  ?>
                      <div class="col-md-12">
                      <h5>Something Went Wrong!</h5>
                      </div>
                  
                  <?php
                  
              }
              ?>


    </div>
   


<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h4> <?= webSetting('title');?></h4>
                <div class="underline mx-auto"></div>
            </div>
                <?php
            $introQuery = "SELECT * FROM bannerimg `heading_description`  ";
            $result = mysqli_query($conn,$introQuery);
            if($result){
                if(mysqli_num_rows($result) > 0){
                    foreach($result as $row){

                        ?>
                         
               
                    
                    
                  
                         <div class="col-md-12 text-center">
                        <p>
                        <?= $row['heading_description'];?>
                        </p>
                   
                         </div>
                        <?php
                    }
                }else{
                    ?>
                    <div class="col-md-12">
                    <h5>No Service Available</h5>
                    </div>
                
                <?php
            }
            }else{
                ?>
                    <div class="col-md-12">
                    <h5>Something Went Wrong!</h5>
                    </div>
                
                <?php
                
            }
            ?>
        
    </div>
</div>
            </div>
  
<div class="py-5 bg-light">
    <div class="container">
        <div class="row">
            
            <div class="col-md-12 mb-4 text-center">
                <h4>Our Services</h4>
                <div class="underline mx-auto"></div>
            </div>
        <?php
            $serviceQuery = "SELECT * FROM services WHERE status='0' LIMIT 6";
            $result = mysqli_query($conn,$serviceQuery);
            if($result){
                if(mysqli_num_rows($result) > 0){
                    foreach($result as $row){

                        ?>
                         <div class="col-md-4 mb-3">
                <div class="card shadow">
                    <?php if($row['image'] != '') : ?>
                        <img src="<?= $row['image'];?>" class="w-100 rounded" alt="Img" style="min-height:200px;max-height:200px;"/>
                    <?php else: ?>
                        <img src="assets/images/no-img.jpg" class="w-100 rounded" alt="Img"style="min-height:200px;max-height:200px;"/>
                    <?php endif; ?>

                    <div class="card-body">
                        <h5><?= $row['name'];?></h5>
                        <p>
                        <?= $row['small_description'];?>
                        </p>
                    </div>
                    <a href="service.php?slug=<?= $row['slug']; ?>" class="text-primary">Read More</a>
                </div>
            </div>
                        <?php
                    }
                }else{
                    ?>
                    <div class="col-md-12">
                    <h5>No Service Available</h5>
                    </div>
                
                <?php
            }
            }else{
                ?>
                    <div class="col-md-12">
                    <h5>Something Went Wrong!</h5>
                    </div>
                
                <?php
                
            }
            ?>
        </div>
    </div>
</div>

<?php  include('includes/footer.php');?>
