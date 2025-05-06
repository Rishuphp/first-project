<?php  
$pageTitle = "About Us";
include('includes/header.php');
?>
<div class="py-5 bg-secondary">
<div class="container">
    <h4 class="text-white text-center"><?= webSetting1('title');?></h4>
</div>
</div>
<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4><?= webSetting1('title');?></h4>
                <div class="underline m"></div>
                <?php
            $introQuery = "SELECT * FROM about_us ";
            $result = mysqli_query($conn,$introQuery);
            if($result){
                if(mysqli_num_rows($result) > 0){
                    foreach($result as $row){

                        ?>
                         
               
                    
                         <?php if($row['image'] != '') : ?>
                        <img src="<?= $row['image'];?>" class="w-100 rounded" alt="Img" style="min-height:200px;max-height:200px;"/>
                    <?php else: ?>
                        <img src="assets/images/no-img.jpg" class="w-100 rounded" alt="Img"style="min-height:200px;max-height:200px;"/>
                    <?php endif; ?>
                  
                        
                        <p><br>
                        <?= $row['paragraph'];?>
                        </p>
                   
                         
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
</div>

<?php  include('includes/footer.php');?>
