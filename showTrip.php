<?php



session_start();

if(isset($_POST["reg"]))
{
    $conn = new mysqli('localhost', 'root', '', 'libmaster');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO tripreg (id,userid,checkin,price,duration,image,location,city,status,vestors) VALUES ('$_GET[id]','$_SESSION[userid]','$_GET[startDate]','$_GET[price]','$_GET[duration]','$_GET[image]','$_GET[location]','$_GET[city]','1','$_POST[vestors]')";


    if ($conn->query($sql) === TRUE)
    {
        header('location:Home.php');
    }
    $conn->close();

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <title> Tourism | Regisration </title>
    <link rel="shortcut icon" href="Tourism/imgs/icons8-tourism-64.png">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="Tourism/assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="Tourism/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="Tourism/assets/css/demo.css" />
    <link rel="stylesheet" href="Tourism/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="Tourism/assets/vendor/libs/apex-charts/apex-charts.css" />
    <script src="Tourism/assets/vendor/js/helpers.js"></script>
    <script src="Tourism/assets/js/config.js"></script>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="style_packeges.css">
    <link rel="stylesheet" href="bootstrap.css">


    <link rel="stylesheet" href="style.css">


</head>
<body>

<!-- header section starts-->

<header class="header" style="background-color: white">

    <a href="#" class="logo"> <img src="Tourism/imgs/Tourism.PNG" alt style="height: 70px;width: 150px;margin-left: -25px"></a>

    <nav class="navbar">
        <div id="nav-close" class="fas fa-times"></div>
        <div  style="margin-left:-50px">
            <a href="Home.php" style="margin-right: 25px">home</a>
            <a href="userProfile.php" style="margin-right: 25px">Profile</a>
            <a href="UserHistory.php" style="margin-right: 25px">My Trips</a>
            <a href="#packages" style="margin-right: 25px">packages</a>
            <a href="serve.php" style="margin-right: 25px">Hospitality</a>
            <a href="trans.php" style="margin-right: 25px">Transportation</a>
        </div>
    </nav>

</header>
<div style="margin-top: 50px"></div>

<div class="fh5co-hero">
    <div class="fh5co-overlay" style="background-image:url(<?php echo $_GET['image'];?>);background-repeat: no-repeat;background-size: cover;">
    </div>
    <div class="fh5co-cover" data-stellar-background-ratio="0.5" >
        <div class="desc">

            <div class="container">


                <div class="row">
                    <div class="col-sm-5 col-md-5">


                        <!-- <a href="index.html" id="main-logo">Travel</a> -->
                        <div class="tabulation animate-box">


<form method="post" action="">

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="flights">
                                    <div class="row">

                                        <div class="col-xxs-12 col-xs-6 mt">
                                            <div class="input-field">
                                                <label for="name">Full Name</label>
                                                <input type="text" id="name" name="Full Name" value="<?php echo $_SESSION['username']; ?>" placeholder="Your name..">
                                            </div>

                                        </div>

                                        <div class="col-xxs-12 col-xs-6 mt">
                                            <div class="input-field">
                                                <label for="E-mail">E-mail</label>
                                                <input type="text" id="E-mail" name="E-mail" value="<?php echo $_SESSION['email']; ?>"placeholder="Your name..">
                                            </div>
                                        </div>
                                        <div class="col-xxs-12 col-xs-6 mt alternate">
                                            <div class="input-field">
                                                <label for="date-start">Check In:</label>
                                                <input type="text" class="form-control" id="date-start"  value="<?php echo $_GET["startDate"];?>" placeholder="mm/dd/yyyy"/>
                                            </div>
                                        </div>
                                        <div class="col-xxs-12 col-xs-6 mt alternate">
                                            <div class="input-field">
                                                <label for="date-end">Duration:</label>
                                                <input type="text" class="form-control" id="date-end"  value="<?php echo $_GET["duration"];?>" placeholder=""/>
                                            </div>
                                        </div>

                                        <div class="col-xxs-12 col-xs-6 mt">
                                            <section>
                                                <label ># of visitors:</label>
                                                <input type="text" id="visitors" name="vestors" value="<?php echo $_GET["vestors"]?>">
                                            </section>
                                        </div>


                                    </div>
                                </div>

                            </div>
</form>
                        </div>
                    </div>


                    <div class="desc2 animate-box">
                        <div class="col-sm-7 col-sm-push-1 col-md-7 col-md-push-1">
                            <h2><?php echo $_GET["city"];?></h2>
                            <p></p>

                            <span class="price"><?php echo $_GET["price"];?> $</span>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

</div>



<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="script_Trip_List.js"></script>

</body>
</html>
