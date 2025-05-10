<div class="sticky-top">
  <div class="bg-primary py-2">

<div class="container">
  <div class="row">
    <div class="col-md-6 text-white">
      Email: <?= webSetting('email1') ?? ''; ?>
      Mobile: <?= webSetting('phone1') ?? ''; ?>
      
    </div>
    <div class="col-md-6">
      Social Media:
    </div>
  </div>
</div>
</div>

<nav class="navbar navbar-expand-lg bg-white shadow sticky-top">
  <div class="container">
    <a class="navbar-brand" href="index.php" >
    <?php
            $introQuery = "SELECT * FROM header ";
            $result = mysqli_query($conn,$introQuery);
            if($result){
                if(mysqli_num_rows($result) > 0){
                    foreach($result as $row){

                        ?>
                        
    <?php if($row['logo'] != '') : ?>
                        <img src="<?= $row['logo'];?>" class="w-100 rounded" alt="Img" style="min-height:70px;max-height:70px;"/>
                    <?php else: ?>
                       
                    <?php endif; ?>
                    <?php }}}?>
                    <br/>

  </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="index.php"><?=webSetting4('navbar1');?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about-us.php"><?=webSetting4('navbar2');?></a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="services.php" ><?=webSetting4('navbar3');?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact-us.php" ><?=webSetting4('navbar4');?></a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>
</div>
