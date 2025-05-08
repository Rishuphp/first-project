<?php
include('includes/header.php');


?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Title/Banner Image Settings</h4>
            </div>
            <div class="card-body">
                <?= alertMessage();?>
                <form action="code.php" method="POST" enctype="multipart/form-data" >
                <?php
                    $setting =getById('bannerimg',71);
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
                    <label>Upload Banner Image 1 </label>
                    <input type="file" name="image"  class="form-control">
                    <img src="<?= '../'.$setting['data']['image'] ?>" style="width:70px;height:70px" alt="Img"/>

                    </div>
                    <div class="mb-3">
                    <label>Upload Banner Image 2</label>
                    <input type="file" name="image2"  class="form-control">
                    <img src="<?= '../'.$setting['data']['image2'] ?>" style="width:70px;height:70px" alt="Img"/>

                    </div><div class="mb-3">
                    <label>Upload Banner Image 3</label>
                    <input type="file" name="image3"  class="form-control">
                    <img src="<?= '../'.$setting['data']['image3'] ?>" style="width:70px;height:70px" alt="Img"/>

                    </div>
                    
                    <h4 class="my-3">Heading Description Settings</h4>
                    <div class="mb-3">
                        <label>Heading</label>
                        <textarea name="heading" class="form-control" rows="3"><?= $setting['data']['heading'] ?? ""?></textarea>
                    </div>
                    <div class="mb-3">
                    <label>Heading Description</label>
                    <textarea name="heading_description"  class="form-control mySummernote" rows="3"><?= $setting['data']['heading_description'] ?? ""?></textarea>
                    </div>
                   
                    <div class="mb-3 text-end">
                        <button type="submit"name="homesetting"class="btn btn-primary">Save Settings</button>
                    </div>
                     
                </form>
            </div>
        </div>
    </div>
</div>