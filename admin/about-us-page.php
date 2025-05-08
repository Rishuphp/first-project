<?php
include('includes/header.php');


?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>About Settings</h4>
            </div>
            <div class="card-body">
                <?= alertMessage();?>
                <form action="code.php" method="POST" enctype="multipart/form-data">
                    <?php
                    $setting =getById('about_us',1);
                    ?>
                    
                    <input type="hidden" name="settingId" value="<?=$setting['data']['id'] ?? 'insert'?>"/>
                    <div class="mb-3">
                        <label>Title</label>
                        <input type="text" name="title"value="<?= $setting['data']['title'] ?? ""?>" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>URL / Domain</label>
                        <input type="text" name="slug"value="<?=$setting['data']['slug'] ?? ""?>" class="form-control">
                    </div>
                    <div class="mb-3">
                    <label>Upload Service Image</label>
                    <input type="file" name="image"  class="form-control" >
                    <img src="<?= '../'.$setting['data']['image'] ?>" style="width:70px;height:70px" alt="Img"/>
                    </div>
                    <div class="mb-3">
                        <label>Heading_Description</label>
                        <textarea name="paragraph" class="form-control mySummernote" rows="3"><?= $setting['data']['paragraph'] ?? ""?></textarea>
                    </div>
                   
                    <div class="mb-3 text-end">
                        <button type="submit"name="aboutsetting"class="btn btn-primary">Save Settings</button>
                    </div>
                   
                 
                </form>
            </div>
        </div>
    </div>
</div>