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
            background:#fff;
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
    <div class="wrapper">
        <h1>ABOUT   OUR   TEAM</h1>
        <div class="team">
            <div class="team_member">
                <div class="team_img">
                    <img src="{{url('Frontend/images/king.jpg')}}" alt="team_member_image">
                </div>
                <h3>Kinshuk Guha</h3>
                <p class="role"><b>Developer,Founder & Designer</b></p>
                <p>Hi it's Kinshuk currently pursuing Bachelor of Computer Application 3rd year from
                     "Institute of Hotel & Restaurant Management" </p>
            </div>


            <div class="team_member">
                <div class="team_img">
                    <img src="{{url('Frontend/images/afrin.jpg')}}" alt="team_member_image">
                </div>
                <h3>Afrin Gazi</h3>
                <p class="role"><b>Developer & Presentor</b></p>
                <p>Hi it's Afrin currently pursuing Bachelor of Computer Application 3rd year from
                     "Institute of Hotel & Restaurant Management" </p>
            </div>


            <div class="team_member">
                <div class="team_img">
                    <img src="{{url('Frontend/images/sou.jpg')}}" alt="team_member_image">
                </div>
                    <h3>Sourav Roy</h3>
                    <p class="role"><b>Developer & Designer</b></p>
                    <p>Hi it's Sourav currently pursuing Bachelor of Computer Application 3rd year from
                        "Institute of Hotel & Restaurant Management" </p>
            </div>


            <div class="team_member">
                <div class="team_img">
                    <img src="{{url('Frontend/images/puja.jpg')}}" alt="team_member_image">
                </div>
                <h3>Puja Sarkar</h3>
                <p class="role"><b>Developer & Presentor</b></p>
                <p>Hi it's Puja currently pursuing Bachelor of Computer Application 3rd year from
                     "Institute of Hotel & Restaurant Management" </p>
            </div>
        </div>
    </div>
</body>
</html>