<?php 
    if(isset($_GET['name']))
    $name = $_GET['name'];
    else{ ?>
        <script>
            window.location.href='index.html';
        </script>
        <?php 
    } 
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $conn = mysqli_connect("localhost","root","","school");
        $sql = "SELECT * from announcements WHERE id = $id";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $h = $row['heading'];
        $b = $row['body'];
        $f = $row['file'];
    }   
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <body>
        <style>
            .input-fiel {
                width: 40%;
    padding: 10px 0;
    margin: 5px 0;
    border-left: 0;
    border-top: 0;
    border-right: 0;
    border-bottom: 1px solid #999;
    outline: none;
    background: transparent;
    font-size: 15px;
    color: black;
    margin-left: 3%;
}
        </style>
    </body>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Softrate School | Home</title>

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">

    <!-- Font awesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" />
    <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">

    <!-- Main style sheet -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Customized home style sheet -->
    <link href="assets/css/news.css" rel="stylesheet">


    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700' rel='stylesheet' type='text/css'>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>


<!--START SCROLL TOP BUTTON -->
<a class="scrollToTop" href="#">
    <i class="fa fa-angle-up"></i>
</a>
<!-- END SCROLL TOP BUTTON -->


<!-- Start menu -->
<section id="mu-menu">
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
                <!-- LOGO -->
                <!-- TEXT BASED LOGO -->
                <a class="navbar-brand" href="index.html"><i class="fa fa-university"></i><span>Softrate School</span></a>
                <!-- IMG BASED LOGO  -->
                <!-- <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" alt="logo"></a> -->
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                    <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Announcements <span class="fa fa-angle-down"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="adminNews.php?name=<?php echo $name; ?>">News</a></li>
                            <li><a href="adminAnnouncements.php?name=<?php echo $name; ?>">Important Announcements</a></li>
                        </ul>
                    </li>
                    <li><a href="home.php?name=<?php echo $name;?>">Home</a></li>
                    <li><a href="index.html"><i class="fas fa-sign-out-alt"> Logout</i></a></li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>
</section>
<!-- End menu -->
<!-- jQuery library -->
<script src="assets/js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="assets/js/bootstrap.js"></script>
<!-- Slick slider -->
<script type="text/javascript" src="assets/js/slick.js"></script>
<!-- Counter -->
<script type="text/javascript" src="assets/js/waypoints.js"></script>
<script type="text/javascript" src="assets/js/jquery.counterup.js"></script>
<!-- Mixit slider -->
<script type="text/javascript" src="assets/js/jquery.mixitup.js"></script>
<!-- Add fancyBox -->
<script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>

<!-- Custom js -->
<script src="assets/js/custom.js"></script>

<br>
<h1 style="margin-top: 5%;"></h1>
<h1 style="margin-left: 3%;">Edit Announcement</h1>
<br>

<form method="post" enctype="multipart/form-data">
    <input class="input-fiel" type="text" placeholder="Header" name="heading" value="<?php echo $h; ?>" required>
    <br>
    <br>
    <textarea style="margin-left: 3%; width: 90%;" rows="5" type="text" placeholder="Body" name="body"><?php echo $b; ?></textarea>
    <br><br>
    <label style="margin-left:3%;" for="file">Change File: </label>
    <input class="input-fiel" type="file" name="file">
    <br>
    <?php if($f!=""){ ?> <label style="margin-left:3%;" for="delpic">Delete Pic: </label><input type="checkbox" id="myCheck" name="delpic" style="margin-left:2%;"><br> <?php } ?>
    <input type="submit" name="submit" class="btn">
    <br>
</form>

<?php 

    if(isset($_POST["submit"])){
        $heading = $_POST["heading"];
        $author = $name;
        $body="";
        if(isset($_POST["body"])){
            $body = $_POST["body"];
        }
        if(isset($_FILES['file']['name'])){
            $fileName = $_FILES['file']['name'];
            if($fileName!=""){
                error_reporting(0);
                $ext = end(explode('.',$fileName));
                $fileName = $id.'.'.$ext;
                $source = $_FILES['file']['tmp_name'];
                $destination = "uploadedFiles/announcements/".$fileName;
                if($f!=""){
                unlink("uploadedFiles/announcements/".$f);
                }
                move_uploaded_file($source,$destination);
                $sql = "UPDATE announcements SET file = '$fileName' WHERE id=$id";
                $res=mysqli_query($conn,$sql);
            }
            else{
                if(isset($_POST['delpic'])){
                    unlink("uploadedFiles/announcements/".$f);
                    $sql = "UPDATE announcements SET file = '' WHERE id=$id";
                    $res=mysqli_query($conn,$sql);                                        
                }
            }
        }
        date_default_timezone_set("Asia/kolkata");
        $currentDate = date("Y/m/d");
        $sql = "UPDATE announcements SET heading = '$heading', body= '$body' WHERE id=$id";
        $res=mysqli_query($conn,$sql);
        if($res==1){ ?>
        <script>
            alert("Updated Succesfully");
            window.location.href='adminAnnouncements.php?name=<?php echo $name;?>';            
        </script>
        <?php 
        }
        else{ ?>
            <script>
                alert("Added Succesfully");
                window.location.href='news.php?name=<?php echo $name;?>';            
            </script>
            <?php
        }
    }
?>