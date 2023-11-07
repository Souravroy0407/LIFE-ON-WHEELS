<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="{{url('Frontend/css/style3.css')}}" type="text/css" media="all" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="container">
        <div class="item">
            <div class="contact">
                <div class="first-text">Let's get in touch</div>
                <img src="{{url('Frontend/images/contact.jpg')}}" alt="" class="image">
                <div class="social-links">
                    <span class="secnd-text"><b>Connect With Us:</b></span>
                    <ul class="social-media">
                        <li><a href="https://www.facebook.com/profile.php?id=61550583998897&mibextid=ZbWKwL"><i class='bx bxl-facebook'></i></a></li>
                        <li><a href="https://twitter.com/LifeOnWheels023?t=0_HDTgmFVYxyqAumdhYxBA&s=09"><i class='bx bxl-twitter'></i></a></li>
                        <li><a href="https://www.instagram.com/lifeonwheels023/"><i class='bx bxl-instagram'></i></a></li>
                        <li><a href="https://www.linkedin.com/in/life-on-wheels-394a99290"><i class='bx bxl-linkedin'></i></a></li>
                    </ul>
                </div>
            </div>
                <div class="submit-form">
                    <h4 class="third-text">Contact Us</h4>
                    <form onsubmit="sendEmail(); return false;">
                        <div class="input-box">
                            <input type="text" class="input" name="name" id="name" required>
                            <label for="">Name</label>
                        </div>
                        <div class="input-box">
                            <input type="email" name="email" id="email" class="input" required>
                            <label for="">Email</label>
                        </div>
                        <div class="input-box">
                            <input type="tel" class="input" name="phone" id="phone" required>
                            <label for="">Phone</label>
                        </div>
                        <div class="input-box">
                            <textarea name="message" class="input" required id="message" cols="30" rows="10" required></textarea>
                            <label for="">Message</label>
                        </div>
                        <input type="submit" class="btn" value="Submit">
                    </form>


                    <script src="https://smtpjs.com/v3/smtp.js"></script>
                    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                    <script>
                        function sendEmail() {
                            var name= document.getElementById("name").value;
                            var email= document.getElementById("email").value;
                            var phone= document.getElementById("phone").value;
                            var message= document.getElementById("message").value;


                            var body ="Name: "+name+ "<br/><br/> Email: "+email+"<br/><br/> Contact Number : "+phone+"<br/><br/> Message: "+message;
                            
                            var sub="New Mail From: "+email;
                            Email.send({
                                Host: "smtp.elasticemail.com",
                                Username: "lifeonwheels023@gmail.com",
                                Password: "8F41E0F811098788765B8E7D28FBDD2D6EEF",
                                To: 'lifeonwheels023@gmail.com',
                                From: "lifeonwheels023@gmail.com",
                                Subject: sub,
                                Body: body
                            }).then(
                                function (message) {
                                    swal({
                                    title: "Successful!",
                                    text: "Email Has Sent Successfully!",
                                    icon: "success",
                                    button: "ok",
                                    }).then((value) => {
                                    if (value) {
                                        window.location.href = "/"; 
                                    }
                                    });
                                }
                            );

                            // Prevent form submission
                            return false;
                        }
                    </script>
             </div>        
        </div>
    </div>
</body>
</html>
