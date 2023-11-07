<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OUR TEAM</title>
    
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap');

        *{
         margin:0px;
         padding:0px;
         box-sizing:border-box;
        }
        body
        {
         background:#81c644;
         font-family:'Josefin Sans',sans-serif;   
        }
        .about-container
        {
            background-color: khaki; /* Change background color to white */
            padding: 20px;
            text-align: center;
            width: 95%;
            margin:  auto;
            margin-top:5%;
            font-size: 25px; 
            text-align: left;

        }
        .wrapper
        {
            margin-top:10%;
        }
        .wrapper h1 
        {
            font-family:'Josefin Sans',sans-serif;
            font-size:52px;
            margin-bottom:60px;
            text-align:center;
        }
        .team
        {
            display:flex;
            text-align:center;
            width:auto;
            justify-content:center;
        }
        .team .team_member 
        {
            background:rebeccapurple;
            margin:5px;
            margin-bottom:50px;
            width:300px;
            padding:20px;
            line-height: 20px;
            color:#8e8b8b;
            position:relative;
        }
        .team .team_member  h3
        {
            color:#81c644;
            font-size:26px;
            margin-top:50px;

        }
        .team .team_member p.role
        {
            color:#ccc;
            font-size:12px;
            text-transform:uppercase;
            margin:12px 0;
        }
        .team .team_member .team_img 
        {
            width:100px;
            height:100px;
            border-radius:50px;
            position:absolute;
            top:-50px;
            left:50%;
            transform:translateX(-50%);
            background:#fff;
        }
        .team .team_member .team_img  img 
        {
            width: 110px;
            height:110px;
            padding: 0px;
            border-radius:70%;
        }
    </style>
</head>
<body>
    
    <div class="about-container">
            <center><u><h1>ABOUT US</h1></u></center><br><br>
            <p>Welcome to "Life On Wheels," your trusted partner in ambulance services. In an era where convenience and accessibility reign supreme, we are here to redefine the way you access and experience emergency medical assistance. With our innovative online platform, you can book an ambulance tailored to your specific needs with ease and efficiency.</p><br><br>
            <p><b> Premium and Non-Premium Services:</b></p>
            <p>At "Life On Wheels," we understand that every emergency is unique, and so are your requirements. That's why we offer two distinct service tiers: Premium and Non-Premium. Our Premium service is designed to cater to those who require immediate, top-notch medical attention. Whether it's a critical situation or you simply prefer a higher level of service, our Premium option ensures you receive the best care available.</p>
            <p>For those seeking a more budget-friendly option without compromising on reliability, our Non-Premium service is the perfect choice. We maintain the same dedication to quality but at a price point accessible to a wider range of individuals.</p><br><br>
            <p><b>Seamless Navigation with Google Maps Integration:</b></p>
            <p>Getting the right help to the right place at the right time is our priority. With our integrated Google Maps feature, you can pinpoint your current location and destination effortlessly. No more uncertainty or delays in reaching your desired healthcare facility. "Life On Wheels" takes the guesswork out of the equation, providing you with a smooth and efficient experience during stressful times.</p><br><br>
            <p><b>User-Friendly Experience:</b></p>
            <p>We believe in making your experience as straightforward as possible. Our user-friendly website ensures that booking an ambulance is a hassle-free process. With just a few clicks, you can secure the help you need, when you need it most. Our intuitive interface has been designed with your comfort in mind, putting you in control of your emergency.</p><br><br>
            <p><b>Engage with Us:</b></p>
            <p>Your feedback is invaluable to us. We have incorporated a dedicated "Contact Us" section on our platform to encourage open communication. Whether you have suggestions, feedback, or any concerns, we welcome your input. Our commitment to transparency and continuous improvement drives us to be responsive to your needs.</p><br><br>
            <p><b>Connect with Us on Social Media:</b></p>
            <p>Stay connected with "Life On Wheels" beyond your immediate needs. Follow us on WhatsApp, Instagram, Facebook, LinkedIn, and Twitter to stay updated on the latest developments, tips for emergency preparedness, and more. Our social media platforms are not just about ambulance services; they're a channel for us to engage with you, share valuable information, and build a stronger, safer community.</p>
            <p>In conclusion, "Life On Wheels" is not just an ambulance service; it's a commitment to your well-being. Our premium and non-premium options ensure that we cater to your specific needs, while our integrated Google Maps feature and user-friendly website make accessing our services a breeze. Your feedback and suggestions are always welcomed through our "Contact Us" section, and we invite you to connect with us on social media for updates and insights.</p>
            <p>With "Life On Wheels," you can trust that we're here for you, delivering care when it matters most. We're not just a service; we're a lifeline. Thank you for choosing us as your ambulance service provider.</p>
   
        </div>

    <div class="wrapper">
        <u><h1>ABOUT   OUR   TEAM</h1></u>
        <div class="team">
            <div class="team_member">
                <div class="team_img">
                    <img src="{{url('Frontend/images/king.jpg')}}" alt="team_member_image">
                </div>
                <h3>Kinshuk Guha</h3>
                <p class="role"><b>Developer,Founder & Designer</b></p>
                <p class="role">Hi it's Kinshuk currently pursuing Bachelor of Computer Application 3rd year from
                     "Institute of Hotel & Restaurant Management" </p>
            </div>


            <div class="team_member">
                <div class="team_img">
                    <img src="{{url('Frontend/images/afrin.jpg')}}" alt="team_member_image">
                </div>
                <h3>Afrin Gazi</h3>
                <p class="role"><b>Developer & Presentor</b></p>
                <p class="role">Hi it's Afrin currently pursuing Bachelor of Computer Application 3rd year from
                     "Institute of Hotel & Restaurant Management" </p>
            </div>


            <div class="team_member">
                <div class="team_img">
                    <img src="{{url('Frontend/images/sou.jpg')}}" alt="team_member_image">
                </div>
                    <h3>Sourav Roy</h3>
                    <p class="role"><b>Developer & Designer</b></p>
                    <p class="role">Hi it's Sourav currently pursuing Bachelor of Computer Application 3rd year from
                        "Institute of Hotel & Restaurant Management" </p>
            </div>


            <div class="team_member">
                <div class="team_img">
                    <img src="{{url('Frontend/images/puja.jpg')}}" alt="team_member_image">
                </div>
                <h3>Puja Sarkar</h3>
                <p class="role"><b>Developer & Presentor</b></p>
                <p class="role">Hi it's Puja currently pursuing Bachelor of Computer Application 3rd year from
                     "Institute of Hotel & Restaurant Management" </p>
            </div>
        </div>
    </div>
    </div>
    </div>
</body>
</html>
