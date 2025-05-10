<?php
include('includes/header.php');


?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Header Setting</h4>
            </div>
            <div class="card-body">
                <?= alertMessage();?>
                <form action="code.php" method="POST"enctype="multipart/form-data" >
                    <?php
                    $setting =getById('header',1);
                    ?>
                    
                    <input type="hidden" name="settingId" value="<?=$setting['data']['id'] ?? 'insert'?>"/>
                    <div class="mb-3">
                
                    <label>Header Title </label>
                        <input type="text" name="title"value="<?= $setting['data']['title'] ?? ""?>" class="form-control">
                    </div>
                    <div class="mb-3">
                    <label>Upload Title Logo </label>
                    <input type="file" name="logo"  class="form-control">
                    <img src="<?= '../'.$setting['data']['logo'] ?>" style="width:70px;height:70px" alt="Img"/>

                    </div>
                   
                    <div class="mb-3">
                <a href="users-create.php" class="btn btn-primary float-end">Add Navigation Bar</a>
                <h4>Header Navigation Bar Setting</h4>
                    <label>Header Navigation Bar 1 </label>
                    <input type="text" name="navbar1"  class="form-control"value="<?= $setting['data']['navbar1'] ?? ""?>" >
                    </div>
                    <div class="mb-3">
                        <label>Header Navigation Bar 2</label>
                        <input type="text" name="navbar2" class="form-control"value="<?= $setting['data']['navbar2'] ?? ""?>"/>
                    </div>
                    <div class="mb-3">
                        <label>Header Navigation Bar 3</label>
                        <input type="text" name="navbar3" class="form-control"value="<?= $setting['data']['navbar3'] ?? ""?>"/>
                    </div>
                    <div class="mb-3">
                        <label>Header Navigation Bar4</label>
                        <input type="text" name="navbar4" class="form-control"value="<?= $setting['data']['navbar4'] ?? ""?>"/>
                    </div>
                    <div class="mb-3 text-end">
                        <button type="submit"name="headersetting"class="btn btn-primary">Save Settings</button>
                    </div>
                   
                 
                </form>
            </div>
        </div>
    </div>
</div>