<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Oswald" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta property="og:image" content=<?php echo "https://www.makeamericadoodleagain.com/doodle.html?id=".$_GET['name']; ?> />
    <meta property="og:description"    content="Politics Illustrated." />
    <title>Make America Doodle Again</title>
    <script src="https://fb.me/react-0.14.7.min.js"></script>
    <script src="https://fb.me/react-dom-0.14.7.min.js"></script>
    <!--<script src="https://unpkg.com/react@15.3.2/dist/react.min.js"></script>
    <script src="https://unpkg.com/react-dom@15.3.2/dist/react-dom.min.js"></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/snap.svg/0.4.1/snap.svg-min.js"></script>
    <!--<script src="js/dropzone.js"></script>-->
    <!--<script src = "https://cdnjs.cloudflare.com/ajax/libs/babel-core/6.1.19/browser.min.js"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/babel-core/5.8.23/browser.min.js"></script>
    <script src="js/sketch.js"></script>
    
    <style>@import url(http://fonts.googleapis.com/css?family=Shadows+Into+Light);
    
    body,html{
        font-family:helvetica;
        background:#472094;
        width:100%;
        height:100%;
        position:absolute;
        margin:0px;
        overflow-x:hidden;
        overflow-y:visible;
        font-family:open sans;
    }
    
    #candidate{
        position: relative;
        width: 100%;
        max-width:400px;
        margin:auto;
        height:200px;
        font-size:40px;
        text-align:center;
    }

    #candidate[candidate="Hillary"]{
        background:url('img/clintons_face@2x.png') no-repeat center center;
        background-size:contain;
    }

    #candidate[candidate="Donald"]{
        background:url('img/trumps_face@2x.png') no-repeat center center;
        background-size:contain;
    }

    #candidate[candidate="Jill"]{
        background:url('img/steins_face@2x.png') no-repeat center center;
        background-size:contain;
    }

    #candidate[candidate="Gary"]{
        background:url('img/johnsons_face@2x.png') no-repeat center center;
        background-size:contain;
    }
    
    
    #issue{
        position: relative;
        width: 100%;
        max-width:400px;
        margin:auto;
        height:80px;
        font-size:40px;
        text-align:center;
        color:white;
        margin-top:30px;
        margin-bottom:0px;
    }
    
    #draw{
        position: relative;
        width: 100%;
        max-width:400px;
        margin:auto;
        height:10px;
        font-size:40px;
        text-align:center;
        font-weight:bold;
        margin-top:100px;
        background:url('img/doodle_title@2x.png') no-repeat center center;
        background-size:contain;
        padding: 20px 0px;
        margin-bottom:40px;
    }
    
    #stance{
        position: relative;
        width: 100%;
        max-width:400px;
        margin:auto;
        height:10px;
        font-size:40px;
        text-align:center;
        font-weight:bold;
        background:url('img/stanceon_title@2x.png') no-repeat center center;
        background-size:contain;
        padding: 20px 0px;
        margin-bottom:20px;
        margin-top:20px;
    }
    
    #stop{
        margin: auto;
        display: block;
        width: 60px;
        text-align: center;
        height: 60px;
        border-radius: 100px;
        background: black;
        line-height: 60px;
        color: white;
        background:#FE4841;
    }
    
    #search{
        display: block;
        padding: 20px;
        width: 180px;
        text-align: center;
        margin: auto;
        color:#FE4841!important;
    }


   #browserDraw{
        display: block;
        padding: 20px;
        width: 180px;
        text-align: center;
        margin: auto;
        color:#FE4841!important;
    }

    
    #doodle{
        display: block;
        padding: 20px;
        width: 150px;
        text-align: center;
        margin: auto;
        background: #FE4841;
        border-radius: 100px;
        margin-top: 20px;
        color: white;
    }
    
    #fullStance{
        text-align: center;
        margin: auto;
        max-width: 300px;
        width: 100%;
        font-size: 40px;
        background: #FE4841;
        padding: 20px;
        color: white;
        position:relative;
        top:100px;
        font-style:italic;
    }

    #fullStance>span{
        font-weight:bold;
        font-style:normal;
    }
    
    #back{
        padding:20px;
    }
    
    #timer{
        text-align:center;
        font-size: 80px;
        margin-bottom:70px;
        color:white;
    }
    
    #done{
        margin:auto;
        text-align: center;
        bottom:40px;
        position: relative;
        padding: 20px;
        width: 60px;
        border-radius: 60px;
        color: white;
        background:#FE4841;
    }

     #doneDrawing{
        margin-left:-45px;
        left:50%;
        text-align: center;
        bottom:40px;
        position: absolute;
        padding: 20px;
        background: black;
        width: 60px;
        border-radius: 60px;
        color: white;
        background:#FE4841;
    }

     #doneDrawing{
        margin-left:-45px;
        left:50%;
        text-align: center;
        bottom:40px;
        position: absolute;
        padding: 20px;
        background: black;
        width: 60px;
        border-radius: 60px;
        color: white;
        background:#FE4841;
    }
    
    #replay{
        padding:20px;
        margin:20px auto;
        background:#FE4841;
        color:white;
        border-radius:50px;
        width:100px;
        text-align:center;
    }
    
    #shareit{
        padding:20px;
        margin:auto;
        background:#FE4841;
        color:white;
        border-radius:50px;
        width:100px;
        text-align:center;
        margin-top:100px;
    }

    #mainNav{
        width:100%;
        height:50px;
        position:absolute;
        z-index:100000;
        background:#FE4841;
    }

    #logo{
        position:absolute;
        left:10px;
        height:100%;
        background:white;
        width:30px;
        background:url('img/Simple_Logo_White.png') no-repeat center center;
        background-size:contain;
    }

    #menu{
        position:absolute;
        right:10px;
        height:100%;
    }

    #menu>a>div{
        float:right;
        margin:0px 10px;
        line-height:50px;
        color:white!important;
    }

    #purpleBG{
        width:300%;
        height:200%;
        top:320px;
        margin-left:-100%;
        transform:rotate(15deg);
        background:#472094;
        position:absolute;
        z-index:0;
    }

    #chooseScreen, #drawScreen, #shareScreen{
        position:relative;
        z-index:1;
        height:100%;
    }

    #landingPage{
        height:100%;
        width:100%;
        position:absolute;
        overflow:hidden;
        background:white;
    }

    #OrDrawInBrowser{
        margin:auto;
        color:#FE4841;
        text-align:center;
    }

    #drawinBrowser{
        position:absolute;
        width:100%;
        height:100%;
        top:0px;
            z-index: 100000;
            background:rgba(0,0,0,.9);
    }

    #simple_sketch{
        top:20px;
        background: white;
        box-shadow: 0px 0px 10px rgba(0,0,0,.2);
        margin: auto;
        position: absolute;
        left: 50%;
        margin-left: -150px;
        width:300px!important;
        height:500px!important;
    }
    
    </style>
</head>
<body>
    <img id = "image" style = "margin:auto; display:block; margin-top:50px; background:white;"></div>

    <script src="https://www.gstatic.com/firebasejs/3.4.1/firebase.js"></script>

    <script>

    function getQueryParams(qs) {
        qs = qs.split('+').join(' ');

        var params = {},
            tokens,
            re = /[?&]?([^=]+)=([^&]*)/g;

        while (tokens = re.exec(qs)) {
            params[decodeURIComponent(tokens[1])] = decodeURIComponent(tokens[2]);
        }

        return params;
    }

    var query = getQueryParams(document.location.search);

    var hash = query.id;

    console.log(hash);


    // Initialize Firebase
    var config = {
    apiKey: "AIzaSyBU2gpSPOXQud13jn_XfG499tmnuARIJdI",
    authDomain: "makeamericadoodleagain.firebaseapp.com",
    databaseURL: "https://makeamericadoodleagain.firebaseio.com",
    storageBucket: 'gs://makeamericadoodleagain.appspot.com/',
    messagingSenderId: "26288147536"
    };

    firebase.initializeApp(config);

    //var hash = String(window.location.hash).replace('#','');

    

    

    var storageRef = firebase.storage().ref("doodles").child(hash+".png").getDownloadURL().then(function(url) {
      $('#image').attr('src',url);
    }).catch(function(error) {
      // Handle any errors
    });

    </script>
    
        
</body>
</html>




