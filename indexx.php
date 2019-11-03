<?php
include('login.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
header("location: loginedhome.html"); // Redirecting To Profile Page
}
?> 


<!DOCTYPE html>
<html>
    <head>
     <title> Manvir's Place </title>  
        <style>
             @import url('https://fonts.googleapis.com/css?family=Bangers|Quicksand&display=swap');
                   .head
        {
        background-color: black;
        color:white;
        font-family: 'Bangers', cursive;
        font-size: 7em;
        }0
        
        
        *{
            margin-top: 0px;
                  box-sizing: border-box;
         }
                  
                  
                   .nav
            {
                display: grid;
                grid-template-columns: 50% 50%;
                grid-gap: 0px;
                text-align: center;
            }
                             #home
            {
                font-size: 3em;
                font-family: 'Bangers', cursive;
               
            }
                   a
            {
                text-decoration: none;
                 color:black;
                
            }
            a:hover
            {
                color:white;
            }
                    #home:hover
            {
                border: 2px solid black;
                border-style:outset;

            }
                   #regis
            {
                            margin-top: 70px;
                            margin-bottom: 70px;
                            margin-left: 300px;
                            margin-right: 300px;
                            background-color:  black;
                  }
                  .sub
                  {
                       background-color: white;
                       font-family: 'Bangers', cursive;
                       font-size: 2em;
                       padding: 20px 20px 20px 20px;
                            border: none;
                      
                  }
                  .sub:hover
                  {
                       background-color: grey;
                       font-family: 'Bangers', cursive; 
                       font-size: 2em;
                       padding: 20px 20px 20px 20px;
                            border-style: none;
                           
                  }
          
           #inp1
                  {
                            font-family: 'Quicksand',sans-serif;
                            border: 3px solid white;
                            border-collapse: collapse;
                            
                            padding-right: 10px;
                            padding-left: 20px;
                            font-size: 2em;
                            margin-left: 40px;
                            width:800px;
                            border-radius: 20px;
                            shape-margin:3px;
                            
                  }
                  
                  .rad1
                  {
                      font-family: 'Quicksand',sans-serif;    
                        padding-right: 10px;
                            padding-left: 20px;
                            font-size: 2em;
                            margin-left: 40px;
                            width:600px;
                            color: aliceblue;
                            
                  } .foot
                  {
                            display:grid;
                            grid-template-columns: 100%;
                            margin-top: 10px;
                            background-color: grey;
                            align-content: center;
                    }
            #link1
                  {
                            display: inline;
                            font-family:  'Quicksand', sans-serif ; 
                            font-size: 2em;
                            padding: 20px;
                            font-style: oblique;
                  }
                  li
                  {
                            display: inline;
                  }
                  footer
                  {
                            text-align: center;
                  }
              </style>
          </head>

<body>
               <div class=head>
    <center> Manvir's Place</center>    
    </div>
    <div class = nav>
        <div id=home style="background-color: #f79256"><a href="newhome.html" >Back to Home</a></div>
        <div id=home style="background-color: #7dcfb6"><a href="registration.html" >New user? Sign-up here</a></div>
   
    </div>
          
           <div id="regis">
                      <center> <div id=home style="color: white;padding-top: 30px; font-size: 4em">LOGIN</div></center>
           <form method="POST" action="">     
                      <div style="font-family: 'Quicksand', sans-serif ; font-size: 2em; color: white; margin-left: 40px"><br><b>E-mail address :</b></div>
                        
               <input type="email" style="background-color: #7dcfb6;  border-style: none;" placeholder="mariasmith@gmail.com" id=inp1 name="emailid">  
                         <div style="font-family: 'Quicksand', sans-serif ; font-size: 2em; color: white; margin-left: 40px"><br><b>Password :</b></div>
                    
                 <input type="password" style="background-color: #00b2ca;  border-style: none;" placeholder="password" id=inp1 name="password"> 
                     
                       
                        <br><br><br><br>
                  
                     <center><button name="submit" type="submit" value="Submit" class="sub">Submit</button>
                      <span><?php echo $error; ?></span></center> 
                        <br><br>
                        
                        
              </form>
             
             
             
                     
          </div> 
            <div class=foot>
        <footer>
                   
                    <ul>
                             <b> <li style="font-family: 'Bangers', cursive;font-size:3em;letter-spacing: 3px">Contact us on </li>  
                              <li id=link1><a href=loginedhome.html>Github</a></li>
                              <li id=link1><a href=loginedhome.html>LinkedIn</a></li>
                                       <li id=link1><a href=loginedhome.html>G-mail</a></li></b>
                              <li style="text-align: right; background-color: black; color: white; font-size: 3em; font-family:  'Bangers', cursive; letter-spacing: 3px margin-top:10px">MANVIR'S PLACE</li>
                              
                    </ul>  
                  <br>
                  <div style="font-family: 'Quicksand', sans-serif ;"><strong>© All rights reserved by the owner.</strong></div>
                    
        </footer>
    </div>
          </body>
          
</html>
          