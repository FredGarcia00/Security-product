<?

$exitLink = 'https://tidycarcan.com/product/salespage.php?affId='.$_GET['affId'].'&c1='.$_GET['c1'].'&c2='.$_GET['c2'];

?>
<html>
<head>
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<? date_default_timezone_set('America/Los_Angeles'); ?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no">

<script src="../js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
<script src="../js/jquery.min.js"></script>
<script src="../js/jquery-ui.min.js"></script>
<script src="../js/angular.min.js"></script>

<link rel="icon" type="image/png" href="../img/icon.png">

<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">



<style type="text/css">
body{
  margin: 0 0 0 0;
  font-family: 'Open Sans', sans-serif;
  background: #d5d4d0;
  padding-top: 15px;
}
a:link,
a:visited{
	text-decoration: inherit;
	color: inherit;
}
a.articleLink:link,
a.articleLink:visited{
  text-decoration: inherit;
	color:#205cc3;
  font-weight: bold;
}
a.articleLink:hover{
  color:#2b75f5;
  text-decoration: underline;
}
.clear{
	clear: both;
}
.addedTop{
  width: 100%;
  height: auto;
  text-align: center;
  color: #333;
  font-size: 17px;
  padding: 4px 0px;
}
#mainBox{
  width: 1600px;
  height: auto;
  background: #fff;
  margin: 0 auto;
  box-shadow: 0px 0px 7px #000;
}
#header{
  width: 100%;
  height: auto;
  margin: 0 auto;
  border-bottom: 2px solid #ccc;
  padding-top: 7px;
  padding-bottom: 7px;
}
#headerInner{
  width: 1250px;
  height: auto;
  margin: 0 auto;
}
#logoLeft{
  height: 70px;
  width: auto;
  float: left;
}
#textRight{
  height: 70px;
  width: auto;
  float: right;
  line-height: 70px;
  font-style: italic;
  color: #333;
  font-size: 17px;
}
#titleBox{
  width: 100%;
  height: auto;
  margin: 0 auto;
}
#titleInner{
  width: 1250px;
  height: auto;
  margin: 0 auto;
  text-align: center;
  padding-top: 20px;
}
#headline{
  width: 100%;
  height: auto;
  font-size: 34px;
  font-weight: bold;
  color: #222;
}
#author{
  width: 300px;
  height: auto;
  margin: 0 auto;
  font-size: 14px;
  font-weight: bold;
  color: #555;
  margin-top: 15px;
  padding-top: 10px;
  border-top: 1px solid #ccc;
}
#articleBox{
  width: 100%;
  height: auto;
  margin: 0 auto;
}
#articleInner{
  width: 1250px;
  height: auto;
  margin: 0 auto;
  padding-top: 35px;
}
#sidebar{
  width: 300px;
  height: auto;
  float: right;
}
.sidebarTitle{
  width: 100%;
  height: auto;
  font-size: 20px;
  text-align: left;
  font-weight: bold;
  color: #333;
  padding-bottom: 10px;
  border-bottom: 2px solid #ccc;
}
.sidebarNative{
  width: 100%;
  height: auto;
  margin: 0 auto;
  margin-top: 15px;
}
.nativeImg{
  width: 45%;
  height: auto;
  float: left;
}
.nativeText{
  width: 52%;
  height: auto;
  float: right;
  font-size: 13px;
  text-align: left;
  color: #444;
}
.nativeText:hover{
  text-decoration: underline;
}


.sidebarImg{
  width: 100%;
  height: auto;
  margin-top: 15px;
}
.sideBarText{
  width: 100%;
  height: auto;
  font-size: 17px;
  text-align: left;
  color: #333;
  margin-top: 10px;
}
#mainContent{
  width: 800px;
  height: auto;
  float: left;
  padding-bottom: 30px;
}
.articleImg{
  width: 100%;
  height: auto;
  margin: 0 auto;
  padding-bottom: 20px;
}
.articleImgsmall{
  width: 72%;
  height: auto;
  margin: 0 auto;
  padding-bottom: 20px;
}
.articleSubheader{
  width: 100%;
  height: auto;
  margin: 0 auto;
  padding-bottom: 15px;
  font-size: 22px;
  font-weight: bold;
  line-height: 28px;
  color: #17191c;
}
.blockQuote{
  width: calc(90% - 50px);
  height: auto;
  margin: 0 auto;
  border-left: 10px solid #ccc;
  background-color: #f9f9f9;
  background-image: url(../img/blockquote.png);
  background-repeat: no-repeat;
  line-height: 28px;
	padding: 10px 20px 10px 40px;
  margin-bottom: 20px;
}
.articleText{
  width: 100%;
  height: auto;
  margin: 0 auto;
  /*padding-bottom: 20px;*/
  font-size: 17px;
  line-height: 26px;
  color: #333;
}
.articleIndent{
  width: 90%;
  height: auto;
  margin: 0 auto;
  /*padding-bottom: 20px;*/
  font-size: 17px;
  line-height: 26px;
  color: #333;
}
.articleButton{
  width: calc(100% - 20px);
  height: auto;
  margin: 0 auto;
  padding: 8px;
  color: #fff;
  font-family: 'Open Sans';
  font-size: 18px;
  font-weight: bold;
  text-align: center;
  background-image: linear-gradient(to bottom,#f0ad4e 0,#eb9316 100%);
  background-repeat: repeat-x;
  border: 1px solid #e67919;
  border-radius: 4px;
}

.commentBreak{
	width:100%;
	border-bottom: 1px solid #198fff;
	margin:0 auto;
	height:80px;
}
#map {
  width: 700px;
  height: 405px
}
#footer{
  width: 100%;
  height: auto;
  margin: 0 auto;
  margin-top:60px;
  background: #5a787c;
}
#footerInner{
  width: 1040px;
  height: auto;
  margin: 0 auto;
  padding: 25px 0px;
  color: #fff;
  font-family: 'Roboto';
  font-size: 14px;
  text-align: center;
}
.linkLine{
  width: 300px;
  height: auto;
  margin: 0 auto;
  padding-top: 15px;
  color: #fff;
  font-family: 'Roboto';
  font-size: 14px;
  text-align: center;
}
.articleSubimg{
  width: 500px;
  height: auto;
  margin: 0 auto;
  padding-bottom: 20px;
}
.imageSub{
  width: 100%;
  height: auto;
  margin: 0 auto;
  padding-bottom: 20px;
  text-align: center;
  font-size: 16px;
  color: #777;
  font-style: italic;
}
li{
  padding-bottom: 15px;
}
.finalBox{
  width: calc(100% - 42px);
  height: auto;
  margin: 0 auto;
  padding: 30px 20px;
  border: 1px solid #dedede;
  margin-top: 30px;
  margin-bottom: 30px;
}
.articleButton{
  width: calc(100% - 20px);
  height: auto;
  margin: 0 auto;
  padding: 10px;
  color: #fff;
  font-family: 'Roboto';
  font-size: 30px;
  text-align: center;
  background: #63d021;
  border: none;
  outline: none;
}
.articleButton:hover{
  background: #49a511;
}
.updateBox{
  width: 100%;
  height: auto;
  margin: 0 auto;
  margin-bottom: 20px;
}
.updateTop{
  width: calc(100% - 20px);
  height: auto;
  margin: 0 auto;
  background: #459ef7;
  color: #fff;
  padding: 20px 10px;
  border-radius: 5px;
  font-size: 20px;
  font-weight: 700;
}
.updateBot{
  width: calc(100% - 20px);
  height: auto;
  margin: 0 auto;
  background: #f4f4c3;
  color: #111;
  padding: 20px 10px;
  border-radius: 2px;
  font-size: 18px;
  font-weight: 400;
}
.paperBox{
  width: calc(100% - 50px);
  height: auto;
  margin: 0 auto;
  padding: 25px;
  margin-bottom: 25px;
  background: url(../img/paperbg.jpg);
  background-repeat: repeat;
  box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.8);
}
.paperTitle{
  width: 100%;
  height: auto;
  color: #222;
  font-size: 24px;
  font-weight: 700;
  text-align: center;
  padding-bottom: 20px;
}
.paperText{
  width: 100%;
  height: auto;
  color: #222;
  font-size: 18px;
  font-weight: 400;
  text-align: left;
  padding-bottom: 20px;
}
.reviewBox{
  width: calc(100% - 50px);
  height: auto;
  padding: 25px;
  border-bottom: 1px solid #ddd;
}
.namePic{
  width: 34px;
  height: 34px;
  background: #a7a7a7;
  border-radius: 50%;
  float: left;
  position: relative;
  text-align: center;
  color: #fff;
  line-height: 34px;
  font-size: 20px;
}
.nameCheck{
  width: 12px;
  height: 12px;
  position: absolute;
  right: 0;
  bottom: 0;
  z-index: 10;
}
.dateRight{
  width: 120px;
  height: auto;
  float: right;
  font-size: 14px;
  color: #777;
}
.reviewHeader{
  width: calc(100% - 184px);
  height: 34px;
  float: left;
  margin-left: 15px;
}
.rh1{
  width: 100%;
  height: 20px;
  text-align: left;
  font-size: 14px;
  color: #777;
  line-height: 20px;
}
.rh2{
  width: 100%;
  height: 14px;
}
.reviewText{
  width: 100%;
  height: auto;
  margin-top: 15px;
  font-size: 16px;
  font-style: italic;
  color: #333;
}


@media screen and (max-width: 1600px) {
  body{
    padding-top: 10px;
  }
  #mainBox{
    width: 100%;
  }
  #headerInner,
  #titleInner,
  #articleInner{
    width: 1250px;
  }
  #mainContent{
    width: 750px;
  }
}

@media screen and (max-width: 1250px) {
  #headerInner,
  #titleInner,
  #articleInner{
    width: 95%;
  }
  .barLeft{
    width: 120px;
    font-size: 15px;
  }
  .barRight{
    width: 170px;
    font-size: 12px;
  }
  .barCenter{
    width: calc(100% - 290px);
    font-size: 11px;
  }
  #mainContent{
    width: 100%;
  }
  #sidebar{
    display: none;
  }
  #footerInner{
    width: 95%;
    font-size: 12px;
    padding: 20px 0px;
  }
  .imgSubheader{
    padding-bottom: 12px;
    font-size: 18px;
    line-height: 24px;
  }
  .articleImgsmall{
    width: 80%;
  }
  .articleSubheader{
    padding-bottom: 12px;
    font-size: 26px;
    line-height: 30px;
  }
  .articleText,
  .articleIndent{
    padding-bottom: 12px;
    font-size: 22px;
    line-height: 32px;
  }
  .articleButton{
    font-size: 24px;
  }
  #footerInner{
    width: 95%;
    font-size: 11px;
    padding: 15px 0px;
  }
  #map{
    transform: scale(0.8);
    margin-left: -80px;
  }
  .updateTop{
    width: calc(100% - 16px);
    padding: 16px 8px;
    font-size: 18px;
  }
  .updateBot{
    width: calc(100% - 16px);
    padding: 16px 8px;
    font-size: 17px;
  }
  .rh1{
    font-size: 11px;
  }
}
@media screen and (max-width: 750px) {
  .blockQuote{
		font-size:18px;
		line-height:24px;
  }
  .articleSubimg{
    width: 80%;
  }
}
</style>


</head>
<body>
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '552365194970012');
fbq('track', 'PageView');
fbq('track', 'ViewContent', {
  content_ids: ['<?php echo $_GET['utm_term'] ?>'],
  content_type: 'product',
  content_category: ['tidycar']
});
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=552365194970012&ev=PageView&noscript=1"
/></noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->



<div id="mainBox">
  <div id="header">
    <div id="headerInner">
      <div id="logoLeft">
        <img src="../img/logo1.png" height="100%" />
      </div>
      <div id="textRight">
        Advertisement - Sponsored by TidyCar
      </div>
      <div class="clear"></div>
    </div>
  </div>



  <div id="titleBox">
    <div id="titleInner">
      <div id="headline">
      Floodlight Camera
      </div>
      <div id="author">
        Jason Marcio | <?=date('l\, F d\, Y',strtotime('-9 days'));?>
      </div>
    </div>
  </div>


  <div id="articleBox">
    <div id="articleInner">
      <div id="sidebar">
        <div class="sidebarTitle">
          Sponsored By:
        </div>
        <div class="sidebarImg">
          <a href="https://about.att.com/pages/5g/how-5g-works.html" target="_blank">
            <img src="../img/attban.jpg" width="100%" />
          </a>
        </div>
        <div class="sidebarImg">
          <a href="https://www.mazdausa.com/vehicles/2020-cx-3" target="_blank">
            <img src="../img/mazdaban.jpg" width="100%" />
          </a>
        </div>
      </div>

      <div id="mainContent">
    <div class="articleImg">
      <img src="./img/splash.jpg" width="100%" />
    </div>
    <div class="articleText">
      <p>It’s just a different world today, isn’t it?</p>

      <p>
        My suburban neighborhood in middle America used to be calm and quiet. 
        When my kids were growing up, they had the ‘be home before the streetlights turn on’ rule, 
        which always worked for us. Fast-forward to now, and the kids are grown and have jobs and families 
        of their own…the only thing that’s really changed is how old we are and the neighborhood is like 
        the wrong 1985 from Back to the Future Part II.
      </p>

      <p>
        Okay, so it’s not an open warzone, but get this: apparently some kids in the neighborhood 
        thought it was a good idea to sneak around the streets and start pulling on car door handles, 
        and if they opened…let’s just say a few of my neighbors had items disappear from their cars. 
        A lot of us have various brands of doorbell cameras, and there were a few clips of this particular 
        group of kids, but it was so dark no one could identify them.
      </p>

      <p>
        One night, my wife and I were jostled awake by an ear-splitting thud. 
        I hustled downstairs to find that my front door had been kicked in—I called the cops, 
        of course, but my poor wife was scared to death. Turns out someone had thrown eggs all 
        over our downstairs windows and written some foul language in spray paint on the outside of my house. 
      </p>

	<div class="articleImgsmall" style="width:50%;">
      <img src="./img/graffiti.jpg" width="100%" />
      </div>

      <p>
        The cops took down a report, and I had to get my door and door jamb replaced. 
        Thankfully the criminals didn’t enter my home, but that was the last straw for me. 
        I decided I needed to step up my security, so I started scouting around for security 
        cameras and lights, but I quickly grew frustrated. It seemed like everything I could 
        find was either too expensive or too complicated for me to install and operate on my own. 
        I already knew the doorbell cameras most of my neighbors had were just not that effective 
        in the dark of the night, but I couldn’t find any better alternatives.
    </p>

    <p>
        The thought of guns scare me to death, but I was desperate, so I stopped in at a local firearms dealer, 
        and that’s when I met Mr. Recinos. He could tell that I was uncomfortable with firearms, 
        and when I explained my situation to him, he took me aside and said, 
        “Look, I’m gonna be honest with you—guns aren’t for everyone. 
        It sounds to me like you’d benefit from a security system that can identify these people 
        and let the police handle it.”
    </p>

    <p>
    “I agree, but I haven’t been able to find anything that works well enough at night to be of any use. 
    Well, anything that isn’t crazy expensive.”
    </p>

    <p>
    Mr. Recinos smiled and handed me a card with a website on it.
    </p>

      <div class="blockQuote">
         <i>
            “Mister, check this out. I was in the Army for a few years. I’ve been places and seen things 
            that a lot of people haven’t. When I was in, we had some pretty cool technologies for seeing 
            clearly at night, and…I love firearms, but I figure they’re a last resort for intruder break ins 
            and the like. The way I see it, I’ve used them enough overseas that if I could prevent 
            American citizens from having to do some of the things I did over there, that would be a good thing. 
            I actually designed a dual security camera and floodlight system that is exactly what you’re looking 
            for. It’s called <a class="articleLink" href="<?=$exitLink;?>">PrimeGuard</a>, and it has Color Night Vision and Infrared Vision, the same exact 
            things I used when I was overseas.”
		</i>
      </div>

      <p>
        “That’s great, and thank you for your service,” I said, 
        “but like I said, I can’t afford something like that.”
      </p>

      <p>
        “Mister, you certainly can. I didn’t create this all-in-one security camera for rich people. 
        I strongly believe every American has a right to feel safe and secure in their own home. 
        Do me a favor and check out the <a class="articleLink" href="<?=$exitLink;?>">website</a>. It actually costs much less than a firearm, sir.”
      </p>

      <p>I was taken aback by his honesty. I decided to look into PrimeGuard for myself.</p>

      </div>
    <div class="articleSubheader">
      What Is It And How Does It Work?
    </div>
    <div class="articleImgsmall" style="width:55%;">
      <img src="./img/product.jpg" width="100%" />
    </div>
    <div class="articleText">
      <p>
      <a class="articleLink" href="<?=$exitLink;?>">PrimeGuard</a> with motion detection and tracking is the perfect solution 
        for anyone who wants the safety and convenience of high-powered floodlights 
        and the airtight security of a digital recording device without the expense 
        of professional installation. For only a fraction of the cost you can get 
        the best of both worlds: PrimeGuard lights up your doors, windows, backyard, shed, 
        patio—any area around your home that requires security monitoring. 
        Designed by a combat veteran with an intimate knowledge of military-grade technology, 
        PrimeGuard is the ultimate security device, and it’s packed with cutting edge features.
      </p>

      <p>
        PrimeGuard is equipped with 8 Infrared LEDs and 2 bright LED floodlights that put out a strong 
        but not overwhelming 400 lumens. The lights are made from high-impact material that makes them 
        waterproof, heatproof, and able to withstand all kinds of weather conditions like rain or snow. 
        Don’t forget about those incredible IR LED’s: you can have IR vision up to 100 feet out, 
        and Full Color Night Vision up to 65 feet away!
      </p>

      <p>
        Completely wifi compatible, PrimeGuard will send motion detection alerts straight to your phone, 
        and comes set up out of the box for remote viewing; simply install and plug in the device, connect 
        to your wifi, and you have the power to check on your home no matter where you are. 
        Make use of the two-way speaker system to answer the door—even if you aren’t home. 
      </p>
      <p>
        Buckle up for this full list of <a class="articleLink" href="<?=$exitLink;?>">PrimeGuard's</a> incredible features:
      </p>

      <ol>
      <li>FHD 1080P Resolution</li>
      <li>Auto Tracking Function: the camera will automatically pan and follow detected movement.</li>
      <li>Motion Detection Alarm: When the camera detects movement, it will automatically send a mobile alert message to your phone.</li>
      <li>PTZ (Pan, Tilt, Zoom) Control: the camera can rotate 350 degrees horizontally and 90 degrees vertically. Manually control the rotation angle of the gimbal with your phone or allow the camera’s Auto Tracking Function to follow detected movement.</li>
      <li>Two-Way Audio Communication: Filter noise for clearer sound, engage in real-time two-way speech through the camera’s external speaker.</li>
      <li>WiFi Capable: Connect to the your home or business wifi network. No need to plug-in a hard-wired network cable.</li>
      <li>Mobile Video Surveillance: Supported on mobile phones running iOS or Android operating systems. View and monitor your camera feed at any time on your phone.</li>
      <li>IP66 Waterproof: Professional waterproof and weatherproof design.</li>
      <li>Infrared+Color Night Vision: Optimum IR viewing distance is 30-100 feet. Maximum colored night vision viewing distance is up to 65 feet.</li>
      </ol>
    </div>
    <div class="articleSubheader">
      But…Is It Really Worth All This Hype?
    </div>
    <div class="articleText">
      <p>So far, the <a class="articleLink" href="<?=$exitLink;?>">PrimeGuard</a> has sold over 9 million units directly to consumers, even without the help of being sold in stores. The PrimeGuard has been SELLING OUT every time new stock becomes available, it’s become THAT popular.</p>

      <p>And, it’s all from word of mouth. People just like you are loving it so much that they’re posting about it on instagram and telling everyone they know about it!</p>
   
    </div>
    <div class="articleImgsmall" style="width:60%;">
      <img src="./img/igpost.jpg" width="100%" style="border: 1px solid #ddd;" />
    </div>
    <div class="articleImgsmall" style="width:60%;">
      <img src="./img/igpost2.jpg" width="100%" style="border: 1px solid #ddd;" />
    </div>
    <div class="articleText">
      <p>
      The <a class="articleLink" href="<?=$exitLink;?>">PrimeGuard</a> has started to develop a cult following, 
      and with over 9,000 5-star reviews, it makes sense. 
      Here’s what customers are saying about it:
      </p>
    </div>
    <div class="reviewBox">
      <div class="namePic">
        M
        <div class="nameCheck">
          <img src="../img/revcheck.png" width="100%" />
        </div>
      </div>
      <div class="reviewHeader">
        <div class="rh1">
          <span style="font-weight: 700; color: #444; font-size: 15px;">Michael L.</span> Verified Buyer
        </div>
        <div class="rh2">
          <img src="../img/stars.png" height="100%" />
        </div>
      </div>
      <div class="dateRight">
        6/1/21
      </div>
      <div class="clear"></div>
      <div class="reviewText">
      This is much needed for every households, 
      the picture quality is good and it’s true to the pixels they 
      mentioned in the description. It’s easy to install in heights 
      and no further checking needed and everything is accessible through 
      mobile app, I have this installed just above my garage door, 
      the motion sensor is accurate and always active when movements identified.
      </div>
    </div>
    <div class="reviewBox">
      <div class="namePic">
        H
        <div class="nameCheck">
          <img src="../img/revcheck.png" width="100%" />
        </div>
      </div>
      <div class="reviewHeader">
        <div class="rh1">
          <span style="font-weight: 700; color: #444; font-size: 15px;">Hope A.</span> Verified Buyer
        </div>
        <div class="rh2">
          <img src="../img/stars.png" height="100%" />
        </div>
      </div>
      <div class="dateRight">
        6/10/21
      </div>
      <div class="clear"></div>
      <div class="reviewText">
      This security camera is pretty awesome. 
      The camera is easily accessible from my cell phone. 
      The features are pretty sweet too, it has a very loud siren!! 
      The lights are Ultra Bright 😎!! For the amount of money it cost I definitely 
      feel like I got my money's worth!
      </div>
    </div>
    <div class="reviewBox" style="border-bottom: none;">
      <div class="namePic">
        O
        <div class="nameCheck">
          <img src="../img/revcheck.png" width="100%" />
        </div>
      </div>
      <div class="reviewHeader">
        <div class="rh1">
          <span style="font-weight: 700; color: #444; font-size: 15px;">Oscar V.</span> Verified Buyer
        </div>
        <div class="rh2">
          <img src="../img/stars.png" height="100%" />
        </div>
      </div>
      <div class="dateRight">
        6/12/21
      </div>
      <div class="clear"></div>
      <div class="reviewText">
      This camera is great for the front door. 
      My front door doesn’t not have the auto lighten during the night. 
      It is hard to see. This is a really helpful camera for the front or back door.
      </div>
    </div>
    <div class="articleText">
      <p>After reading all of these glowing reviews, I was sold. I knew I needed to try out the PrimeGuard for myself. I ordered one from their<a class="articleLink" href="<?=$exitLink;?>"> official website</a>, and…</p>
    </div>
    <div class="articleSubheader">
      …Here’s What I Found.
    </div>
      <div class="articleImg" style="width:65%;">
        <img src="./img/unboxing.jpg" width="100%" />
      </div>
    <div class="articleText">
      <p>
        The <a class="articleLink" href="<?=$exitLink;?>">PrimeGuard</a> arrived in just 2 days. 
        The installation was ridiculously simple, even for someone who 
        doesn’t get along with technology like me. I followed the instructions closely, 
        measured and drilled four holes into the wall, mounted and screwed the device in place, 
        then plugged it in and fired it up.
      </p>

      <div class="articleImg" style="width:65%;">
        <img src="./img/splash.jpg" width="100%" />
      </div>

      <p>
        I was excited to see this thing in action, so when nightfall came, 
        I got the camera view open on my phone. One of my neighbors was taking his dog 
        for an evening walk, and I got an alert on my phone. 
        The floodlights came on, and the motion-tracking feature worked great. 
        It was like having my own personal spotlight—no one could have those bright lights 
        shining on them and think it was a good idea to approach my house with shenanigans in mind.
      </p>

      <div class="articleImg" style="width:65%;">
        <img src="./img/productUsage.jpg" width="100%" />
      </div>
	  <p>
        I was amazed at how clear and crisp the picture was, 
        and when I tried the Color Night Vision and IR modes, the feed was high quality. 
        The 4x zoom feature worked great, too. I showed my wife all this, and she told me 
        she could finally sleep without worry, now. No one would dare try anything with our 
        high-powered security floodlight tracking their approach to the house!
      </p>


      <p>
        Update: The <a class="articleLink" href="<?=$exitLink;?>">PrimeGuard</a> is military-grade quality, waterproof, 
        and perfect for the outdoors. We actually had a guy with his hood up 
        approach our house a few nights ago, and I’m not sure if he was up to 
        something or not—but as soon as that floodlight came on, he high-tailed 
        it out of there faster than anything.
      </p>

      <div class="articleImg" style="width:60%;">
        <img src="./img/intruder.jpg" width="100%" />
      </div>
    </div>
    <div class="articleSubheader">
      How Much Does It Cost?
    </div>
    <div class="articleText">
      <p>It’s currently on sale for 50% off at their <a class="articleLink" href="<?=$exitLink;?>"> official website</a> for just $29.88!</p>
    </div>
    <div class="articleSubheader">
      Is It Worth It?
    </div>
    <div class="articleText">
      <p>	
        I don’t want to get melodramatic here, but in terms of peace of mind, 
        this has been the best purchase of my life. It’s made my wife and I feel safe 
        in our own home again. I’m not going to lie, I actually bought another <a class="articleLink" href="<?=$exitLink;?>">PrimeGuard</a> 
        for the back door, and now that we have full coverage of the exterior of our home, 
        I feel like there’s literally nothing to worry about in terms of security. 
        PrimeGuard has given me a great deal of confidence: 
        I can clearly see anything going on around my home, 
        regardless of the lighting conditions, up to an incredible 75 feet away! 
        I get alerts when someone walks down the sidewalk in front of my home, 
        and the video is so high quality, I’m confident the police would be able 
        to identify someone if they were up to no good.
      </p>

      <p>
        PrimeGuard is the real deal. 
        If you need to step up your security game with military-grade functionality at a very reasonable price, 
        look no further.
      </p>

      </div>
    <div class="updateBox">
      <div class="updateTop">
        UPDATE
      </div>
      <div class="updateBot">
        <b>UPDATE <?=date('l\, F d\, Y',strtotime('-0 days'));?></b> - Ever since <a class="articleLink" href="<?=$exitLink;?>">PrimeGuard</a> was featured on TV, an incredible amount of buzz has been generated and has since sold over 9 million units. Due to its popularity and positive reviews, the company is so confident in their product that they are now offering a <b>one-time discount of 50% off. To see if they are still available, click on the button below.</b>
      </div>
    </div>


    <a href="<?=$exitLink;?>">
      <div class="articleButton">
        Apply Discount & Check Availability >>
      </div>
    </a>





        <div class="commentBreak" style="margin-bottom: 30px;"></div>
        <!-- Load comments -->
        <?
        $commentsUrl= 'http://blackin.top/comments/tidycar.php'; // comments location
        $commentsCh = curl_init();
        $commentsTimeout = 5;
        curl_setopt($commentsCh,CURLOPT_URL,$commentsUrl);
        curl_setopt($commentsCh,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($commentsCh,CURLOPT_CONNECTTIMEOUT,$commentsTimeout);
        $commentsData = curl_exec($commentsCh);
        curl_close($commentsCh);
        echo $commentsData;
        ?>
        <!-- End comments -->







      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>







<!--Footer-->
<div id="footer">
  <div id="footerInner">
    THIS IS AN ADVERTISEMENT AND NOT AN ACTUAL NEWS ARTICLE, BLOG, OR CONSUMER PROTECTION UPDATE
    <br /><br />
    MARKETING DISCLOSURE: This website is a market place. As such you should know that the owner has a monetary connection to the product and services advertised on the site. The owner receives payment whenever a qualified lead is referred but that is the extent of it.
    <br /><br />
    ADVERTISING DISCLOSURE: This website and the products & services referred to on the site are advertising marketplaces. This website is an advertisement and not a news publication. Any photographs of persons used on this site are models. The owner of this site and of the products and services referred to on this site only provides a service where consumers can obtain and compare.
    <br /><br />
    © <?=date('Y'); ?> All Rights Reserved.
    <br /><br />
      <a href="../contact.php" class="textLink" target="_blank" style="color: white;">Contact Us</a> -
      <a href="../terms.php" class="textLink" target="_blank" style="color: white;">Terms & Conditions</a> -
      <a href="../privacy.php" class="textLink" target="_blank" style="color: white;">Privacy Policy</a>
    <? include_once('../dmca.php'); ?>
  </div>
</div>
</body>
</html>
