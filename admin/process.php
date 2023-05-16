<?php
ob_start();

include 'connect.php';

if (isset($_POST['contactsetting'])) {

   $ad = $db->prepare("UPDATE contact SET
adress=:adress,
email=:email,
mobile=:mobile
");
   $update = $ad->execute(
      array(
         'adress' => $_POST['adress'],
         'email' => $_POST['email'],
         'mobile' => $_POST['mobile']

      )
   );
   if ($update) {
      header("Location:contact.php?condition=ok");

   } else {
      header("location:contact.php?condition=no");
   }

   $url = $db->prepare("UPDATE home SET
facebook=:facebook,
instagram=:instagram,
linkedin=:linkedin,
twitter=:twitter,
github=:github,
skype=:skype
");
   $update1 = $url->execute(
      array(
         'facebook' => $_POST['facebook'],
         'instagram' => $_POST['instagram'],
         'linkedin' => $_POST['linkedin'],
         'twitter' => $_POST['twitter'],
         'github' => $_POST['github'],
         'skype' => $_POST['skype']

      )
   );
   if ($update1) {
      header("Location:contact.php?condition=ok");

   } else {
      header("location:contact.php?condition=no");
   }

}


if (isset($_POST['sectioncont'])) {
   $home1 = $_POST['home'] ?? 0;
   $about1 = $_POST['about'] ?? 0;
   $resume1 = $_POST['resume'] ?? 0;
   $services1 = $_POST['services'] ?? 0;
   $portfolio1 = $_POST['portfolio'] ?? 0;
   $contact1 = $_POST['contact'] ?? 0;

   $section = $db->prepare("UPDATE section_control SET
home_section=:home,
about_section=:about,
resume_section=:resum,
services_section=:services,
portfolio_section=:portfolio,
contact_section=:contact
");
   $update2 = $section->execute(
      array(

         'home' => $home1,
         'about' => $about1,
         'resum' => $resume1,
         'services' => $services1,
         'portfolio' => $portfolio1,
         'contact' => $contact1
      )
   );
   if ($update2) {
      header("location: section.php?con=ok");
   } else {
      header("location: section.php?con=no");
   }

}




if (isset($_POST['homesett'])) {

   $home = $db->prepare("UPDATE home SET
  home_name=:title,
  home_title=:subtitle
  ");
   $update3 = $home->execute(
      array(
         'title' => $_POST['title'],
         'subtitle' => $_POST['subtitle']

      )
   );
   if ($update3) {
      header("Location:home.php?con=ok");

   } else {
      header("location:home.php?con=no");
   }
}


if(isset($_POST['aboutset'])){
   $uploads='dist/img';
   $tmp_name=$_FILES['profile']['tmp_name'];
   $name=$_FILES['profile']['name'];
   $pic="dist/img/$name";
   move_uploaded_file($tmp_name, "$uploads/$name");
   
 


   $about=$db->prepare("UPDATE about SET
  about_title=:abtitle,
  about_subtitle=:absubtitle,
  about_desc=:descriptionn,
  profile_pic=:picture
    ");
    $up=$about->execute(array(
      'abtitle'=>$_POST['title'],
      'absubtitle'=>$_POST['subtitle'],
      'descriptionn'=>$_POST['desc'],
      'picture'=>$pic
   
    ));
    if($up){
      header("Location:about.php?con=ok");
    }
    else{
      header("Location:about.php?con=no");
    }

}




if (isset($_POST['personal_info'])) {

   $about2 = $db->prepare("INSERT INTO personal_info SET
  personal_label=:per_label,
  personal_value=:per_value
  ");
   $insert = $about2->execute(
      array(
         'per_label' => $_POST['label'],
         'per_value' => $_POST['value']

      )
   );
   if ($insert) {
      header("Location:about.php?con=ok");

   } else {
      header("location:about.php?con=no");
   }

}

if (isset($_GET['delete'])) {


   $sql = 'DELETE FROM `personal_info` WHERE `personal_info`.`id` = ?';
   $del = $db->prepare($sql);
   $del->execute([
      $_GET['delete']
   ]);

   if ($del) {
      header("Location:about.php?con=ok");
   } else {
      header("location:about.php?con=no");
   }
}


if (isset($_POST['addskills'])) {

   $skils = $db->prepare("INSERT INTO skills SET
   skils_name=:skil_name,
   skils_level=:skil_level
   ");
   $insert2 = $skils->execute(
      array(
         'skil_name' => $_POST['skil_name'],
         'skil_level' => $_POST['skil_level']

      )
   );
   if ($insert2) {
      header("Location:about.php?con=ok");

   } else {
      header("location:about.php?con=no");
   }

}

if (isset($_GET['del'])) {


   $sql1 = "DELETE FROM skills WHERE `skills`.`id` = ?";
   $del1 = $db->prepare($sql1);
   $del1->execute([
      $_GET['del']
   ]);

   if ($del1) {
      header("Location:about.php?con=ok");
   } else {
      header("location:about.php?con=no");
   }
}


if (isset($_GET['delete1'])) {


   $sql2 = "DELETE FROM `resume` WHERE `resume`.`id` = ?";
   $del2 = $db->prepare($sql2);
   $del2->execute([
      $_GET['delete1']
   ]);

   if ($del2) {
      header("Location:resume.php?con=ok");
   } else {
      header("location:resume.php?con=no");
   }
}
if (isset($_POST['resume'])) {

   $resume = $db->prepare("INSERT INTO `resume` SET
   types=:typ,
   res_title=:title,
   res_time=:restime,
   res_location=:reslocation,
   res_subtitle=:ressebtitle
   ");
   $insert3 = $resume->execute(
      array(
         'typ' => $_POST['type'],
         'title' => $_POST['title'],
         'restime' => $_POST['time'],
         'reslocation' => $_POST['ins_comp'],
         'ressebtitle' => $_POST['about']

      )
   );
   if ($insert3) {
      header("Location:resume.php?con=ok");

   }
    else {
      header("location:resume.php?con=no");
   }

}

if(isset($_POST['seoset'])){
   $uploads1='dist/img';
   $tmp_name1=$_FILES['icon']['tmp_name'];
   $name1=$_FILES['icon']['name'];
   $pic1="dist/img/$name1";
   move_uploaded_file($tmp_name1, "$uploads1/$name1");
   
 


   $seo=$db->prepare("UPDATE settings SET
  set_title=:settitle,
  set_desc=:setdesc,
  set_keyworrds=:setkeywords,
  icon=:seticon
    ");
    $up1=$seo->execute(array(
      'settitle'=>$_POST['settitle'],
      'setdesc'=>$_POST['setdesc'],
      'setkeywords'=>$_POST['setkeywords'],
      'seticon'=>$pic1
   
    ));
    if($up1){
      header("Location:seo.php?con=ok");
    }
    else{
      header("Location:seo.php?con=no");
    }

}

if(isset($_POST['accountset'])){
   $uploads2='dist/img';
   $tmp_name2=$_FILES['adminpic']['tmp_name'];
   $name2=$_FILES['adminpic']['name'];
   $pic2="dist/img/$name2";
   move_uploaded_file($tmp_name2, "$uploads2/$name2");
   
 


   $account=$db->prepare("UPDATE `admin` SET
  ad_logo=:logo,
  ad_name=:adname,
  ad_title=:adtitle,
  ad_usarname=:usarname,
  ad_password=:passwords,
  ad_pic=:picture
    ");
    $up2=$account->execute(array(
      'logo'=>$_POST['logo'],
      'adname'=>$_POST['name'],
      'adtitle'=>$_POST['title'],
      'usarname'=>$_POST['usarname'],
      'passwords'=>$_POST['password'],
      'picture'=>$pic2
   
    ));
    if($up2){
      header("Location:account.php?con=ok");
    }
    else{
      header("Location:account.php?con=no");
    }

}

if(isset($_POST['portsetting'])){
   $uploads3='dist/img';
   $tmp_name3=$_FILES['portpicture']['tmp_name'];
   $name3=$_FILES['portpicture']['name'];
   $pic3="dist/img/$name3";
   move_uploaded_file($tmp_name3, "$uploads3/$name3");
   



   $portfolio=$db->prepare("INSERT INTO portfolio SET
  project_type=:protypes,
  project_name=:proname,
  project_link=:prolink,
  project_pic=:propic
    ");
    $ins=$portfolio->execute(array(
      'protypes'=>$_POST['porttype'],
      'proname'=>$_POST['portname'],
      'prolink'=>$_POST['portlink'],
      'propic'=>$pic3
   
    ));
    if($ins){
      header("Location:portfolio.php?con=ok");
    }
    else{
      header("Location:portfolio.php?con=no");
    }

}
if (isset($_GET['action'])) {


   $sql3 = "DELETE FROM `portfolio` WHERE `portfolio`.`id` = ?";
   $del3 = $db->prepare($sql3);
   $del3->execute([
      $_GET['action']
   ]);

   if ($del3) {
      header("Location:portfolio.php?con=ok");
   } else {
      header("location:portfolio.php?con=no");
   }
}







?>