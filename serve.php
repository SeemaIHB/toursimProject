<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        a {
            text-decoration: none;
            display: inline-block;
            padding: 8px 16px;
        }

        a:hover {
            background-color: #52cf4f;
            color: #74f86f;
        }

        .previous {
            background-color: #f1f1f1;
            color: #000000;
            background-color: #ffffff;

           font-size:larger    }

        .next {
            background-color: #74f86f;
            color: #ffffff;
        }

        .round {
            border-radius: 50%;
        }
    </style>
    <!-- Libraries Stylesheet -->

    <link href="servicess/servicess/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="servicess/servicess/lib/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="servicess/servicess/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="servicess/servicess/css/style.css" rel="stylesheet">
    <title> Tourism | Services</title>
    <link rel="shortcut icon" href="Tourism/imgs/icons8-tourism-64.png">
</head>

<body>



<!-- Carousel Start -->

<!-- Offer Start -->
<div class="container-fluid bg-offer my-5 py-5 wow zoomIn" data-wow-delay="0.1s" style="margin-top: 0px">
    <a href="Home.php" class="previous round"><<</a>

    <div class="container py-5">
        <div class="row gx-5 justify-content-center">

                <div  style="max-width: 600px;">
                    <h1 style="color:#ffffff; position: absolute;right: 700px;top: 70px;">Services</h1>
                </div>
                <p  align="center" style="color:whitesmoke;font-size:30px;">Because we care about tourists and provide them with all the possibilities to make it easier for them and to provide them with safety and comfort
                </p>


        </div>
    </div>
</div>
<!-- Offer End -->

<!-- Testimonial Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">

            <h1 class="display-5 mb-0">Resturants</h1>
        </div>


        <div class="owl-carousel testimonial-carousel">

            <?php
            session_start();
            if ($_SESSION["email"] == null) {header('location:logIn.php');}
            $db = new mysqli('localhost', 'root', '', 'libmaster');
            if ($db->connect_error)
            {
                die("Connection failed: " . $db->connect_error);
            }
            $qrystr = "select * from resturant";
            $res = $db->query($qrystr);

            for ($i = 0; $i < $res->num_rows; $i++) {
                while ($row = $res->fetch_object()) {
                    ?>
                    <div class="text-center pb-4">
                        <img class="img-fluid mx-auto rounded-circle" src="<?php echo $row->img?>" style="width: 100px; height: 100px;" >
                        <div class="testimonial-text bg-light rounded p-4 mt-n5">
                            <p class="mt-5"><?php echo $row->des?></p>
                            <h4 class="text-truncate"><?php echo $row->name?></h4>
                            <i><?php echo $row->ph_number?></i>
                        </div>
                    </div>
                    <?php
                }
            }

            ?>


        </div>
    </div>
</div>

<br><br><br>






<!-- Pricing Plan Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="margin-bottom: 75px;">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">

            <h1 class="display-5 mb-0">Hospitals</h1>
           <br>
        </div>
        <div class="row g-5">

            <?php
            if ($_SESSION["email"] == null) {header('location:logIn.php');}
            $db = new mysqli('localhost', 'root', '', 'libmaster');
            if ($db->connect_error)
            {
                die("Connection failed: " . $db->connect_error);
            }
            $qrystr = "select * from hospitals";
            $res = $db->query($qrystr);

            for ($i = 0; $i < $res->num_rows; $i++) {
                while ($row = $res->fetch_object()) {
                    ?>
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                        <div class="position-relative border border-primary rounded">
                            <div class="bg-primary text-center pt-5 pb-4">
                                <h2 class="text-white"><?php echo $row->name;?></h2>
                                <p style="color:white;"><?php echo $row->des;?></p>
                            </div>
                            <div class="text-center py-5">
                                <p class="border-bottom border-light mb-2 pb-2">  Call emergency <span><?php echo $row->ph_number;?></span></p>
                                <p class="border-bottom border-light mb-2 pb-2"><?php echo $row->address;?></p>
                                <p class="border-bottom border-light mb-2 pb-2">Owner : <span ><?php echo $row->owner;?></span></p>
                            </div>
                            <a href="" class="btn btn-primary py-2 px-4 position-absolute top-100 start-50 translate-middle">View More</a>
                        </div>
                    </div>
                    <?php
                }
            }

            ?>



        </div>
    </div>
</div>
<!-- Pricing Plan End -->


<!-- Services Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">

            <h1 class="display-5 mb-0">Hotels</h1>
            <br>

            <div>  </div>
        </div>



        <div class="row g-5">

            <?php
            if ($_SESSION["email"] == null) {header('location:logIn.php');}
            $db = new mysqli('localhost', 'root', '', 'libmaster');
            if ($db->connect_error)
            {
                die("Connection failed: " . $db->connect_error);
            }
            $qrystr = "select * from hotels";
            $res = $db->query($qrystr);

            for ($i = 0; $i < $res->num_rows; $i++) {
                while ($row = $res->fetch_object()) {
                    ?>
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                        <div class="service-item bg-light border-bottom border-5 border-primary rounded">
                            <div class="position-relative p-5">
                                <i ></i>

                                <h3 class="mb-3"><?php echo $row->name;?></h3>
                                <p><?php echo $row->des;?></p>
                                <label class="font" for="phone">Contact :<?php echo $row->ph_number;?></label>
                                <br>
                                <label class="font" for="address">Location : <?php echo $row->address;?></label>

                                <br>
                                <a href="">see more<i class="bi bi-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            }

            ?>





        </div>
    </div>
</div>
<!-- Services End -->


<!-- Back to Top -->



<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="servicess/servicess/lib/wow/wow.min.js"></script>
<script src="servicess/servicess/lib/easing/easing.min.js"></script>
<script src="servicess/servicess/lib/waypoints/waypoints.min.js"></script>
<script src="servicess/servicess/lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Template Javascript -->
<script src="servicess/servicess/js/main.js"></script>
</body>

</html>