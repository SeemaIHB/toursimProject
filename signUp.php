
<?php

$ll=0;

if(isset($_POST['signup']))
{
    $conn = new mysqli('localhost', 'root', '', 'libmaster');
    $qrystr = "select * from users";
    $res = $conn->query($qrystr);
    for ($i = 0; $i < $res->num_rows; $i++)
    {
        $row = $res->fetch_object();
        if ($row->email == $_POST['email'])
        {
            $ll = 1;

        }
    }

    if ($ll == 0)
    {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO users (username,email,password) VALUES ('$username','$email','$password')";


        if ($conn->query($sql) === TRUE)
        {

        }
        header('location:homePage.php');
        $conn->close();
    }
    else
    {
        $wrong="This Account Is Exists";
        echo "<script>alert('$wrong');</script>";
        $ll=0;
    }
}

?>

<!DOCTYPE html>
<html
  lang="en"
  class="light-style customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Creat New Account | Tourism</title>
    <link rel="shortcut icon" href="Tourism/imgs/icons8-tourism-64.png">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="Tourism/assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="Tourism/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="Tourism/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="Tourism/assets/css/demo.css" />
    <link rel="stylesheet" href="Tourism/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="Tourism/assets/vendor/css/pages/page-auth.css" />
    <script src="Tourism/assets/vendor/js/helpers.js"></script>
    <script src="Tourism/assets/js/config.js"></script>
  </head>

  <body>
    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Card -->
          <div class="card">
            <div class="card-body">
              <img src="Tourism/imgs/Tourism.PNG" alt style="height: 120px;width: 250px;margin-left: 55px;margin-bottom: 20px"/>
              <h4 class="mb-2">Adventure starts here </h4>
              <p class="mb-4">Welcome to Tourism ... </p>

              <form id="formAuthentication" class="mb-3" method="POST">
                <div class="mb-3">
                  <label for="username" class="form-label">Username</label>
                  <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username" autofocus/>
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email" />
                </div>
                <div class="mb-3 form-password-toggle">
                  <label class="form-label" for="password">Password</label>
                  <div class="input-group input-group-merge">
                    <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password"/>
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                </div>
                  <input type="submit" name="signup" value="Sign Up" class="btn btn-primary d-grid w-100">
              </form>

              <p class="text-center">
                <span>Already have an account?</span>
                <a href="logIn.php">
                  <span>Sign in instead</span>
                </a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>


    <script src="Tourism/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="Tourism/assets/vendor/libs/popper/popper.js"></script>
    <script src="Tourism/assets/vendor/js/bootstrap.js"></script>
    <script src="Tourism/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="Tourism/assets/vendor/js/menu.js"></script>
    <script src="Tourism/assets/js/main.js"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>


