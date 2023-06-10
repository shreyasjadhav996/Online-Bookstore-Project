
<?php
  if(isset($_POST['name']))
  {
    $server='localhost';
  $username='root';
  $password='';
  $con=mysqli_connect($server,$username,$password);
  if($con)
  {
    echo "successfully connected";
  }else{
    echo $con_error;
  }

  $name=$_POST['name'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $message=$_POST['message'];

  $sql="INSERT INTO `reg_form`.`reg` (`username`, `email`, `phone`, `message`) VALUES ('$name', '$email', '$phone', 'message');";

  if($con->query($sql)==true)
  {
    echo "successfully inserted";
  }else{
    echo "ERROR : $sql <br> $con->error";
  } 

  $con->close();
  }

  


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="registration.css" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <div class="container">
      <span class="big-circle"></span>
      <img src="assets/images/shape.jpg" class="square" alt="" />
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Let's get in touch</h3>
          <div class="info">
            <div class="information">
              <img src="assets/images/location.jpg" class="icon" alt="" />
              <a href="https://goo.gl/maps/9cXj5QUntDdtcDNy8">Nivara CHS</a>
            </div>
            <div class="information">
              <img src="assets/images/email .jpg" class="icon" alt="" />
              <p>shreyasjadhav9969@gamil.com</p>
            </div>
            <div class="information">
              <img src="assets/images/call.jpg" class="icon" alt="" />
              <p>91+ 8104756084</p>
            </div>
          </div>

          <div class="social-media">
            <p>Connect with us :</p>
            <div class="social-icons">
              <a href="https://www.facebook.com/shreyas.jadhav.7773/">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="https://www.instagram.com/shreyas.ss/">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="https://www.linkedin.com/in/shreyas-jadhav-64533024b/">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>

          <form action="reg.php" autocomplete="off" method="post">
            <h3 class="title">Contact us</h3>
            <div class="input-container">
              <input type="text" name="name" class="input" />
              <label for="">Username</label>
              <span>Username</span>
            </div>
            <div class="input-container">
              <input type="email" name="email" class="input" />
              <label for="">Email</label>
              <span>Email</span>
            </div>
            <div class="input-container">
              <input type="tel" name="phone" class="input" />
              <label for="">Phone</label>
              <span>Phone</span>
            </div>
            <div class="input-container textarea">
              <textarea name="message" class="input"></textarea>
              <label for="">Message</label>
              <span>Message</span>
            </div>
            <input type="submit" value="Send" class="btn" />
            <!-- <button>s  ubmit</button> -->
          </form>
        </div>
      </div>
    </div>

    <script src="app.js"></script>
  </body>
</html>