<!DOCTYPE html>
    <html>
    <title></title>
    <head> <meta charset="UTF-8">
        <link  rel="stylesheet" >
         <style type="text/css">
        body{
            margin: 0;
            padding: 0;
            background-color: #212121;
        }
        .container{
            position: absolute;
            left: 50%;
            top: 50%;
            width: 150px;
            height: 150px;
            background-color: #212121;
            transform: translate(-50%, -50%);            
        }
        .one{
            position: absolute;
            left: -20px;
            top:  -20px;
            right: -20px;
            bottom: -20px;
           background: linear-gradient( #27ae60 , #2980b9  , #2980b9, #2980b9,#2980b9, #e67e22, #d35400);
           border-radius: 50%;
           filter: blur(50px);
            animation: animate 1s linear infinite;
        }
         .two{
            position: absolute;
            left: -10px;
            top:  -10px;
            right: -10px;
            bottom: -10px;
            background: linear-gradient( #27ae60 , #2980b9  , #2980b9, #2980b9,#2980b9, #e67e22, #d35400);
            border-radius: 50%;
            animation: animate 1s linear infinite;
        }
        .three{
            position: absolute;
            width: 100%;
            height: 100%;
        background-color: #212121;
         border-radius: 50%;
        }
        /*ANIMATION START HERE*/
        @keyframes animate{
            0%{ transform: rotate(0deg);}
             100%{ transform: rotate(360deg);}
        }      
    </style>
    <style>
      body{
      /*background: url(pic_bulbon.gif);*/    
        -webkit-background-size: cover;
        background-size: cover;
        font-family: poppins;
        font-size: 20px;
        margin: 0;
        line-height: 24px;
        background-position: center center;
        height: 94vh;*
      }
     .buio{
      background: tomato;
      width: 100%;
      text-align: center;
     }
     .buio ul {
      margin: 0;
      padding: 0;
      list-style: none;
      position: relative;
     }
     .buio ul li a {
      display: block;
      padding: 15px;
      color: #fff;
      text-decoration: none;
      width: 120px;
      font-weight: bold;
     }
      .buio ul li a:hover{
        background: #000;
        
      }
      .buio ul ul {
        display: none;
        background: #000;
        padding: 0;
        margin: 0;
        top: 100%;
        position: absolute;
      }
      .buio ul li {
        float: left;
        list-style: none;
        
      }
      .buio  ul:after{
        display: block;
        clear: both;
        content: "";
      }
      .buio ul li:hover > ul{
        display: block;
      }
      .buio ul li:hover{
        background: #000;
        transition: 0.8s;
        
      }
      .buio ul li:hover a{
         border-bottom: 6px solid yellow;
                border-radius: 12px;
        color: #fff;
      }
      .buio ul ul li {
        float: none;
        position: relative;
      }
      
      .buio ul ul li a {
        padding: 25px;
        color: #fff;
        width: 300px;
        text-align: center;
      }
      .buio ul ul li a:hover{
        background: tomato;
        color: #fff;
        transition: 0.6s;
      }
    </style>
    </head>
    <body>
    <div class="buio">
      <ul>
        <li> <a href="#">Home</a>
                             <ul>
                              <li> <a href="login_database.php">Go back to a login page</a></li>
                              <li><a href="/pro\index.php">watch the blog</a></li>
                             </ul>
                       </li>
        
        <li> <a href="#"> Profilo </a>
                                <ul>          
                                    <li> <a href="upload.php">Uploaad all file different page </a></li>
                                </ul>       
        </li>
         <li> <a href="#"> PHP CODE </a>
                            <ul>
                              <li> <a href="index.php"> sql database </a></li>
                              <li> <a href="index2.php"> index1 file </a></li>
                              <li> <a href="index3.php"> index2 file </a></li>
                              <li> <a href="index4.php"> index3 file </a></li>
                              <li> <a href="index5.php"> index4 file </a></li>
                              <li> <a href="index6.php"> set cookies js </a></li>
                               <li> <a href="test_get.php"> test_no insult PHP </a></li>
                              
                             </ul>
         </li>
         <li> <a href="#"> JAVAscript </a>
                              <ul>
                               <li> <a href="test_get_page.php">test_get_page</a></li>
                               <li> <a href="uomo.php">no isult java</a></li>
                                <li> <a href="/Graphycssjava\iframe.html">new project Java</a></li>
                              </ul>
         </li>
        <li> <a href="#">Games</a>
        <ul>
           <li> <a href="animate.php"> Animate </a></li>
        <li> <a href="animate2.php"> Animate2 </a></li>
        <li> <a href="html.php">html</a>
        </ul>
        </li>
          </ul>   
    </div>    
      <div class="container">
        <div class="one"></div>
        <div class="two"></div>
        <div class="three"></div>        
      </div>      
    </body>
  </html>