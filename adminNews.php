<?php 
if(isset($_GET['name']))
$name = $_GET['name'];
else{ ?>
    <script>
        window.location.href='index.html';
    </script>
    <?php 
}
$conn = mysqli_connect("localhost","root","","school");
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT file FROM news WHERE id=$id";
    $res = $conn->query($sql);
    $row = $res->fetch_assoc();
    $f = $row['file'];
    if($f!=""){
    unlink("uploadedFiles/news/".$f);
    }
    $sql = "DELETE FROM news WHERE id=$id";
    $conn->query($sql);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SOFTRATE SCHOOL | Blog</title>

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


    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700' rel='stylesheet' type='text/css'>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <body>
        <style>
            .popup {
                display: none;
                position: fixed;
                top: 30%;
                left: 35%;
                z-index: 1;
                text-align: center;
                background-color: rgb(196, 195, 193);
                color: black;
                padding: 30px;
            }

            .popup-button {
                padding: 5px;
                width: max-content;
                min-width: 30%;
                text-align: center;
                border: none;
            }

            @media screen and (max-width: 600px) {
                .popup {
                    display: none;
                    position: fixed;
                    top: 30%;
                    left: 13%;
                    z-index: 1;
                    text-align: center;
                    background-color: rgb(196, 195, 193);
                    color: black;
                    padding: 30px;
                }
            }
        </style>
    </body>
</head>

<body>

    <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
        <i class="fa fa-angle-up"></i>
    </a>
    <!-- END SCROLL TOP BUTTON -->

    <!-- Start header  -->
    <header id="mu-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="mu-header-area">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="mu-header-top-left">
                                    <div class="mu-top-email">
                                        <i class="fa fa-envelope"></i>
                                        <span>schools@softrate.org</span>
                                    </div>
                                    <div class="mu-top-phone">
                                        <i class="fa fa-phone"></i>
                                        <span>+91 9123456789</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="mu-header-top-right">
                                    <nav>
                                        <ul class="mu-top-social-nav">
                                            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                            <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                            <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                            <li><a href="#"><span class="fa fa-youtube"></span></a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End header  -->
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
                    <a class="navbar-brand" href="index.html"><i class="fa fa-university"></i><span>SOFTRATE SCHOOL</span></a>
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
    <!-- Start search box -->
    <div id="mu-search">
        <div class="mu-search-area">
            <button class="mu-search-close"><span class="fa fa-close"></span></button>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <form class="mu-search-form">
                            <input type="search" placeholder="Type Your Keyword(s) & Hit Enter">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End search box -->
    <!-- Page breadcrumb -->
    <section id="mu-page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-page-breadcrumb-area">
                        <h2>News</h2>
                        <ol class="breadcrumb">
                            <li><a href="#">Admin</a></li>
                            <li class="active">News</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumb -->
    <section id="mu-course-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-course-content-area">
                        <div class="row">
                            <div class="col-md-9">
                                <!-- start course content container -->
                                <div class="mu-course-container mu-blog-archive">
                                    <div class="row">
                                        <?php 
                                            $sql = "SELECT * FROM news ORDER BY date DESC";
                                            $result = $conn->query($sql);
                                            if($result->num_rows > 0){
                                                while($row = $result->fetch_assoc()){
                                        ?>            
                                        <div class="col-md-6 col-sm-6">
                                            <article class="mu-blog-single-item">
                                                <figure class="mu-blog-single-img">
                                                <?php if($row['file']!=""){ ?><a href="#"><img src="uploadedFiles/news/<?php echo $row['file']; ?>" alt="img"></a><?php } ?>
                                                    <figcaption class="mu-blog-caption">
                                                        <h3><a href="#"><?php echo $row['heading'];?></a></h3>
                                                    </figcaption>
                                                </figure>
                                                <div class="mu-blog-meta">
                                                    <a href="#">By <?php echo $row['author'];?> </a>
                                                    <a href="#"><?php echo $row['date'];?></a>
                                                    <span><i class="fa fa-comments-o"></i>87</span>
                                                </div>
                                                <div class="mu-blog-description">
                                                    <p><?php echo $row['body'];?></p>
                                                    <a href="editNews.php?name=<?php echo $name;?>&id=<?php echo $row['id'];?>"><button class="mu-read-more-btn" style="color: black; border-radius:30px">Edit</button></a>
                                                    <button class="mu-read-more-btn" style="color: black; border-radius:30px" onclick="openForm(<?php echo $row['id'];?>)">Delete</button>
                                                </div>
                                            </article>
                                        </div>
                                        <?php 
                                                }
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <!-- end course content container -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- Start footer -->
    <footer id="mu-footer">
        
        <!-- start footer bottom -->
        <div class="mu-footer-bottom">
            <div class="container">
                <div class="mu-footer-bottom-area">
                    <p>&copy; All Right Reserved. Designed by <a href="http://www.softrate.com/" rel="nofollow">softrate India</a></p>
                </div>
            </div>
        </div>
        <!-- end footer bottom -->
    </footer>
    <!-- End footer -->

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

</body>
<div class="popup" id="del" style="width: max-content; margin:auto">
    <h1 style="font-size: 120%;">Are you sure to delete it.</h1>
    <br>
    <button class="mu-read-more-btn" style="border-radius:30px;color: black" onclick="closeForm();">Cancel</button>
    <button class="mu-read-more-btn" style="border-radius:30px;color: black" onclick="redirect()">Delete</button>
</div>

</html>


<script>
    function openForm(val) {
        window.v = val;
        document.getElementById("del").style.display = "block";
    }

    function closeForm() {
        document.getElementById("del").style.display = "none";
    }
    function redirect(){
        closeForm();
        window.location.href="adminNews.php?name=<?php echo $name;?>&id="+window.v;
    }
</script>