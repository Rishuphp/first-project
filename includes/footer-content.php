
      <div class="footer">
            <div class="container">
               
                <div class="row">
                    <div class="col-md-6 col-lg-4 " >
                         <?php
            $introQuery = "SELECT * FROM header ";
            $result = mysqli_query($conn,$introQuery);
            if($result){
                if(mysqli_num_rows($result) > 0){
                    foreach($result as $row){

                        ?>
                      
                      <?php }}}?>
                        <div class="footer-about">
                            <h3>
                                <?php if($row['logo'] != '') : ?>
                        <img src="<?= $row['logo'];?>" class="w-100 rounded" alt="Img" style="min-height:50px;max-height:50px; width:50px;"/>
                    <?php else: ?>
                       
                    <?php endif; ?>
                            </h3>
                            <p>
                                 <?= webSetting('small_description') ?? 'Meta Desc'; ?>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-8">
                        <div class="row">
                            <div class="col-md-6 col-lg-4">
                                 <?php
        $socialMedia = getAll('social_medias');
        if($socialMedia){
            if(mysqli_num_rows($socialMedia) > 0){
                foreach($socialMedia as $socialItem){
                    ?>
                                    <?php }}}?>
                                <div class="footer-link">
                                    <h3>Service Area</h3>
                                    <a href="<?=$socialItem['url']?>"><?=$socialItem['name']?></a>
                                    <a href="<?=$socialItem['url']?>"><?=$socialItem['name']?></a>
                                    <a href="<?=$socialItem['url']?>"><?=$socialItem['name']?></a>
                                    <a href="<?=$socialItem['url']?>"><?=$socialItem['name']?></a>
                                    <a href="<?=$socialItem['url']?>"><?=$socialItem['name']?></a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                 <?php
            $introQuery = "SELECT * FROM header ";
            $result = mysqli_query($conn,$introQuery);
            if($result){
                if(mysqli_num_rows($result) > 0){
                    foreach($result as $row){

                        ?>
                        <?php }}}?>
                                <div class="footer-link">
                                    <h3>Useful Link</h3>
                                    <a href="index.php"><?=webSetting4('navbar1');?></a>
                                    <a href="about-us.php"><?=webSetting4('navbar2');?></a>
                                    <a href="services.php"><?=webSetting4('navbar3');?></a>
                                    <a href="contact-us.php"><?=webSetting4('navbar4');?></a>
                                   
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="footer-contact">
                                    <h3>Get In Touch</h3>
                                    <p><i class="fa fa-map-marker-alt"></i><?= webSetting('address') ?? ''; ?></p>
                                    <p><i class="fa fa-phone-alt"></i><?= webSetting('phone1') ?? ''; ?></p>
                                    <p><i class="fa fa-envelope"></i><?= webSetting('email1') ?? ''; ?></p>
                                    <div class="footer-social">
                                        <a href=""><i class="fab fa-twitter"></i></a>
                                        <a href=""><i class="fab fa-facebook-f"></i></a>
                                        <a href=""><i class="fab fa-youtube"></i></a>
                                        <a href=""><i class="fab fa-instagram"></i></a>
                                        <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container footer-menu">
                <div class="f-menu">
                    <a href="">Terms of use</a>
                    <a href="">Privacy policy</a>
                    <a href="">Cookies</a>
                    <a href="">Help</a>
                    <a href="">FQAs</a>
                </div>
            </div>
            <div class="container copyright">
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy; <a href="index.php"><?= webSetting('title');?></a>, All Right Reserved.</p>
                    </div>
                    <div class="col-md-6">
                        <p>Designed By <a href="https://bytosoft.com">BYTOSOFT</a></p>
                    </div>
                </div>
            </div>
        </div>
</div>
