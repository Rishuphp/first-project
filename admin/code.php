<?php
require '../config/function.php';

if (isset($_POST['saveUser'])) {
    $name = validate($_POST['name']);
    $phone = validate($_POST['phone']);
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);
    $is_ban = isset($_POST['is_ban']) == true ? 1 : 0;
    $role = validate($_POST['role']);

    if ($name != '' || $email != '' || $phone != '' || $password != '') {
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        $data = [
            'name' => $name,
            'phone' => $phone,
            'email' => $email,
            'password' => $hashedPassword,
            'is_ban' => $is_ban,
            'role' => $role
        ];
        $result = insert('users', $data);
        //    $query = "INSERT INTO users (name,phone,email,password,is_ban,role) VALUES ('$name','$phone','$email','$hashedPassword','$is_ban','$role')";
        //    $result = mysqli_query($conn,$query);

        if ($result) {
            redirect('users.php', 'User/Admin Added Successfully');
        } else {
            redirect('users-create.php', 'Somthing Went Wrong');
        }
    } else {
        redirect('users-create.php', 'Please fill all the input fields');
    }
}
if (isset($_POST['updateUser'])) {
    $name = validate($_POST['name']);
    $phone = validate($_POST['phone']);
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);
    $is_ban = isset($_POST['is_ban']) == true ? 1 : 0;
    $role = validate($_POST['role']);
    $userId = validate($_POST['userId']);
    $user = getById('users', $userId);
    if ($user['status'] != 200) {
        redirect('users-edit.php?id=' . $userId, 'No such id found');
    }

    if ($name != '' || $email != '' || $phone != '' || $password != '') {
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        $data = [
            'name' => $name,
            'phone' => $phone,
            'email' => $email,
            'password' => $hashedPassword,
            'is_ban' => $is_ban,
            'role' => $role
        ];
        $result = update('users', $userId, $data);
        if ($result) {
            redirect('users-edit.php?id=' . $userId, 'User/Admin Updated Successfully');
        } else {
            redirect('users-create.php', 'Somthing Went Wrong');
        }
    } else {
        redirect('users-create.php', 'Please fill all the input fields');
    }
}
if (isset($_POST['saveSetting'])) {
    $title = validate($_POST['title']);
    $slug = validate($_POST['slug']);
    $small_description = validate($_POST['small_description']);
    $meta_description = validate($_POST['meta_description']);
    $meta_keyword = validate($_POST['meta_keyword']);
    $email1 = validate($_POST['email1']);
    $email2 = validate($_POST['email2']);
    $phone1 = validate($_POST['phone1']);
    $phone2 = validate($_POST['phone2']);
    $address = validate($_POST['address']);
    $settingId = validate($_POST['settingId']);

    if ($settingId == 'insert') {
        $query = "INSERT INTO  settings (title,slug,small_description,meta_description,meta_keyword,email1,email2,phone1,phone2,address) 
    VALUES ('$title','$slug','$small_description','$meta_description','$meta_keyword','$email1','$email2','$phone1','$phone2','$address')";
        $result = mysqli_query($conn, $query);
    }
    if (is_numeric($settingId)) {
        $query = "UPDATE settings SET title='$title',
    slug='$slug',
    small_description='$small_description',
    meta_description='$meta_description',
    meta_keyword='$meta_keyword',
    email1='$email1',
    email2='$email2',
    phone1='$phone1',
    phone2='$phone2',
    address='$address'
    WHERE id='$settingId'";
        $result = mysqli_query($conn, $query);
    }
    if ($result) {
        redirect('settings.php', 'Settings Saved');
    } else {
        redirect('settings.php', 'Something Went Wrong.!');
    }
}
if (isset($_POST['saveSocialMedia'])) {
    $name = validate($_POST['name']);
    $url = validate($_POST['url']);
    $status = validate($_POST['status']) == true ? 1 : 0;

    if ($name != '' || $url != '') {
        $query = "INSERT INTO social_medias (name,url,status) VALUES ('$name','$url','$status')";
        $result = mysqli_query($conn, $query);

        if ($result) {
            redirect('social-media.php', 'Social Media Added Successfully');
        } else {
            redirect('social-media-create.php', 'Somthing Went Wrong');
        }
    } else {
        redirect('social-media-create.php', 'Please fill all the input fields');
    }
}
if (isset($_POST['updateSocialMedia'])) {
    $name = validate($_POST['name']);
    $url = validate($_POST['url']);
    $status = validate($_POST['status']) == true ? 1 : 0;

    $socialMediaId = validate($_POST['socialMediaId']);

    if ($name != '' || $url != '') {
        $query = "UPDATE  social_medias SET name='$name',url='$url',status='$status' WHERE id='$socialMediaId' LIMIT 1";
        $result = mysqli_query($conn, $query);

        if ($result) {
            redirect('social-media.php', 'Social Media Updated Successfully');
        } else {
            redirect('social-media-edit.php?id=' . $socialMediaId, 'Somthing Went Wrong');
        }
    } else {
        redirect('social-media-edit.php', 'Please fill all the input fields');
    }
}
if (isset($_POST['saveService'])) {
    $name = validate($_POST['name']);
    $slug = str_replace(' ', '-', strtolower($name));
    $small_description = validate($_POST['small_description']);
    $long_description = validate($_POST['long_description']);
    if ($_FILES['image']['size'] > 0) {
        $image = $_FILES['image']['name'];
        $imageFileTypes = strtolower(pathinfo($image, PATHINFO_EXTENSION));
        if ($imageFileTypes != 'jpg' && $imageFileTypes != 'jpeg' && $imageFileTypes != 'png') {
            redirect('services.php', 'Sorry only JPG, JPEG, PNG images only');
        }
        $path = "../assets/uploads/services/";
        $imgExt = pathinfo($image, PATHINFO_EXTENSION);
        $filename = time() . '.' . $image;

        $finalImage = 'assets/uploads/services/' . $filename;
    } else {
        $finalImage = NULL;
    }

    $meta_title = validate($_POST['meta_title']);
    $meta_description = validate($_POST['meta_description']);
    $meta_keyword = validate($_POST['meta_keyword']);
    $status = validate($_POST['status']) == true ? '1' : '0';

    $query = "INSERT INTO services (name,slug,small_description,long_description,image,meta_title,meta_description,meta_keyword,status) 
    VALUES ('$name','$slug','$small_description','$long_description','$finalImage','$meta_title','$meta_description','$meta_keyword','$status')";
    $result = mysqli_query($conn, $query);
    if ($result) {
        if ($_FILES['image']['size'] > 0) {
            move_uploaded_file($_FILES['image']['tmp_name'], $path . $filename);
        }
        redirect('services.php', 'Services Added Successfully');
    } else {
        redirect('services.php', 'Something Went Wrong!');
    }
}
if (isset($_POST['updateService'])) {
    $serviceId = validate($_POST['serviceId']);
    $name = validate($_POST['name']);

    $slug = str_replace(' ', '-', strtolower($name));
    $small_description = validate($_POST['small_description']);
    $long_description = validate($_POST['long_description']);

    $service = getById('services', $serviceId);

    if ($_FILES['image']['size'] > 0) {
        $image = $_FILES['image']['name'];
        $imageFileTypes = strtolower(pathinfo($image, PATHINFO_EXTENSION));
        if ($imageFileTypes != 'jpg' && $imageFileTypes != 'jpeg' && $imageFileTypes != 'png') {
            redirect('services.php', 'Sorry only JPG, JPEG, PNG images only');
        }
        $path = "../assets/uploads/services/";
        $deleteImage = "../" . $service['data']['image'];
        if (file_exists($deleteImage)) {
            unlink($deleteImage);
        }

        $imgExt = pathinfo($image, PATHINFO_EXTENSION);
        $filename = time() . '.' . $image;

        $finalImage = 'assets/uploads/services/' . $filename;
    } else {
        $finalImage =  $service['data']['image'];
    }

    $meta_title = validate($_POST['meta_title']);
    $meta_description = validate($_POST['meta_description']);
    $meta_keyword = validate($_POST['meta_keyword']);
    $status = validate($_POST['status']) == true ? '1' : '0';

    $query = "UPDATE services SET 
    name='$name',
    slug='$slug',
    small_description='$small_description',
    long_description='$long_description',
    image='$finalImage',
    meta_title='$meta_title',
    meta_description='$meta_description',
    meta_keyword='$meta_keyword',
    status='$status'
    WHERE id='$serviceId' ";
    $result = mysqli_query($conn, $query);
    if ($result) {
        if ($_FILES['image']['size'] > 0) {
            move_uploaded_file($_FILES['image']['tmp_name'], $path . $filename);
        }
        redirect('services-edit.php?id=' . $serviceId, 'Services Updated Successfully');
    } else {
        redirect('services-edit.php?id=' . $serviceId, 'Something Went Wrong!');
    }
}
if (isset($_POST['updateEnquiryStatus'])) {
    $enquiryId = validate($_POST['enquiryId']);
    $status = validate($_POST['status']);

    $query = "UPDATE enquires SET status='$status' WHERE id='$enquiryId'";
    $result = mysqli_query($conn, $query);
    if ($result) {
        redirect('enquiries-view.php?id=' . $enquiryId, 'Enquiry Status Updated.');
    } else {
        redirect('enquiries-view.php?id=' . $enquiryId, 'Something Went Wrong!');
    }
}

if (isset($_POST['homesetting'])) {
    $title = validate($_POST['title']);
    $slug = validate($_POST['slug']);
    $heading_description = validate($_POST['heading_description']);
    $heading = validate($_POST['heading']);
    
    $settingId = validate($_POST['settingId']);
    if ($_FILES['image']['size'] > 0) {
        $image = $_FILES['image']['name'];
       
        $imageFileTypes = strtolower(pathinfo($image, PATHINFO_EXTENSION));
        
       
        
        if ($imageFileTypes != 'jpg' && $imageFileTypes != 'jpeg' && $imageFileTypes != 'png') {
            redirect('homepage.php', 'Sorry only JPG, JPEG, PNG images only');
        }
        $path = "../assets/uploads/services/";
        $imgExt = pathinfo($image, PATHINFO_EXTENSION);
        $filename = time() . '.' . $image;

        $finalImage = 'assets/uploads/services/' . $filename;
    } else {
        $finalImage = NULL;
    }
    if ($_FILES['image2']['size'] > 0) {
        $image2 = $_FILES['image2']['name'];
       
        $imageFileTypes = strtolower(pathinfo($image2, PATHINFO_EXTENSION));
        
       
        
        if ($imageFileTypes != 'jpg' && $imageFileTypes != 'jpeg' && $imageFileTypes != 'png') {
            redirect('homepage.php', 'Sorry only JPG, JPEG, PNG images only');
        }
        $path = "../assets/uploads/services/";
        $imgExt = pathinfo($image, PATHINFO_EXTENSION);
        $filename2 = time() . '.' . $image2;

        $finalImage2 = 'assets/uploads/services/' . $filename2;
    } else {
        $finalImage2 = NULL;
    }
    if ($_FILES['image3']['size'] > 0) {
        $image3 = $_FILES['image3']['name'];
       
        $imageFileTypes = strtolower(pathinfo($image3, PATHINFO_EXTENSION));
        
       
        
        if ($imageFileTypes != 'jpg' && $imageFileTypes != 'jpeg' && $imageFileTypes != 'png') {
            redirect('homepage.php', 'Sorry only JPG, JPEG, PNG images only');
        }
        $path = "../assets/uploads/services/";
        $imgExt = pathinfo($image3, PATHINFO_EXTENSION);
        $filename3 = time() . '.' . $image3;

        $finalImage3 = 'assets/uploads/services/' . $filename3;
    } else {
        $finalImage3 = NULL;
    }
   
    if ($settingId == 'insert') {
        $query = "INSERT INTO  bannerimg (title,slug,heading_description,heading,image,image2,image3) 
    VALUES ('$title','$slug','$heading_description','$heading','$finalImage','$finalImage2','$finalImage3')";
        $result = mysqli_query($conn, $query);
    
    }
   
    
    if (is_numeric($settingId)) {
    $query = "UPDATE bannerimg SET title='$title',

slug='$slug',
heading_description='$heading_description',
heading='$heading',
image='$finalImage',
image2='$finalImage2',
image3='$finalImage3'

WHERE id='$settingId'";
    $result = mysqli_query($conn, $query);
    }
  
    if ($result) {
        if ($_FILES['image']['size'] > 0) {
            move_uploaded_file($_FILES['image']['tmp_name'], $path . $filename);
        }
        if ($_FILES['image2']['size'] > 0) {
            move_uploaded_file($_FILES['image2']['tmp_name'], $path . $filename2);
        }
        if ($_FILES['image3']['size'] > 0) {
            move_uploaded_file($_FILES['image3']['tmp_name'], $path . $filename3);
        }
        redirect('homepage.php', 'Settings Saved');
    } else {
        redirect('homepage.php', 'Something Went Wrong.!');
    }
}
if (isset($_POST['aboutsetting'])) {
    $title = validate($_POST['title']);
    $slug = validate($_POST['slug']);
 
    $paragraph = validate($_POST['paragraph']);
    $settingId = validate($_POST['settingId']);
    if ($_FILES['image']['size'] > 0) {
        $image = $_FILES['image']['name'];
        $imageFileTypes = strtolower(pathinfo($image, PATHINFO_EXTENSION));
        if ($imageFileTypes != 'jpg' && $imageFileTypes != 'jpeg' && $imageFileTypes != 'png') {
            redirect('about-us-page.php', 'Sorry only JPG, JPEG, PNG images only');
        }
        $path = "../assets/uploads/services/";
        $imgExt = pathinfo($image, PATHINFO_EXTENSION);
        $filename = time() . '.' . $image;

        $finalImage = 'assets/uploads/services/' . $filename;
    } else {
        $finalImage = NULL;
    }

    if ($settingId == 'insert') {
        $query = "INSERT INTO  about_us (id,title,paragraph,image) 
    VALUES ('$title','$paragraph','$finalImage')";
        $result = mysqli_query($conn, $query);
    }
    
    if (is_numeric($settingId)) {
        $query = "UPDATE about_us SET title='$title',
    
    
    paragraph='$paragraph',
    image='$finalImage'
    
   
    WHERE id='$settingId'";
        $result = mysqli_query($conn, $query);
    }
    
    if ($result) {
        if ($_FILES['image']['size'] > 0) {
            move_uploaded_file($_FILES['image']['tmp_name'], $path . $filename);
        }
        redirect('about-us-page.php', 'Settings Saved');
    } else {
        redirect('about-us-page.php', 'Something Went Wrong.!');
    }
}
if (isset($_POST['headersetting'])) {
    $title = validate($_POST['title']);
    $navbar1 = validate($_POST['navbar1']);
    $navbar2 = validate($_POST['navbar2']);
    $navbar3 = validate($_POST['navbar3']);
    $navbar4 = validate($_POST['navbar4']);
    $settingId = validate($_POST['settingId']);
    if ($_FILES['logo']['size'] > 0) {
        $logo = $_FILES['logo']['name'];
        $imageFileTypes = strtolower(pathinfo($logo, PATHINFO_EXTENSION));
        if ($imageFileTypes != 'jpg' && $imageFileTypes != 'jpeg' && $imageFileTypes != 'png') {
            redirect('header.php', 'Sorry only JPG, JPEG, PNG images only');
        }
        $path = "../assets/uploads/services/";
        $imgExt = pathinfo($logo, PATHINFO_EXTENSION);
        $filename = time() . '.' . $logo;

        $finalImage = 'assets/uploads/services/' . $filename;
    } else {
        $finalImage = NULL;
    }

    if ($settingId == 'insert') {
        $query = "INSERT INTO  header (title,navbar1,navbar2,navbar3,navbar4,logo) 
    VALUES ('$title','$navbar1','$navbar2','$navbar3','$navbar4','$finalImage')";
        $result = mysqli_query($conn, $query);
    }
    
    if (is_numeric($settingId)) {
        $query = "UPDATE header SET title='$title',
    
    
    navbar1='$navbar1',
    navbar2='$navbar2',
    navbar3='$navbar3',
    navbar4='$navbar4',
    logo='$finalImage'
    WHERE id='$settingId'";
        $result = mysqli_query($conn, $query);
    }
    
    if ($result) {
        if ($_FILES['logo']['size'] > 0) {
            move_uploaded_file($_FILES['logo']['tmp_name'], $path . $filename);
        }
        redirect('header.php', 'Settings Saved');
    } else {
        redirect('header.php', 'Something Went Wrong.!');
    }
}
?>
