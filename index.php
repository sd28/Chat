<?php 
include 'db.php';

?>
<!DOCTYPE html>

<html>
<head>
    <link rel="stylesheet" href="style.css" media="all" />
    <title>
    CHAT BOX
    </title>
    <script>
    function ajax()
        {
            var req= new XMLHttpRequest();
            req.onreadystatechange=function(){
                
                if(req.readyState == 4 && req.status == 200)
                    {
                        
                        document.getElementById('chat').innerHTML = req.responseText;
                    }
                
                
            }
            req.open('GET','chat.php',true);
            req.send();
            
        }
        
        setInterval(function(){ajax();},1000);
    
    </script>
    
    
    </head>
<body onload="ajax();">
    <div id="container">
    <div id="chat_box">
        <div id="chat">
        </div>
        
    </div>
    <form method="post" action="index.php">
        <center>
        <input type="text" class="input" name="name" placeholder="enter your name" > <br>
        <textarea name="msg" rows="5" cols="10" placeholder="Enter your msg" ></textarea><br>
        <center> <input type="submit" id="submit" name="submit" value="Send"> </center>
        
        </form>   
        <?php
    if(isset($_POST['submit']))
    {

        $name=$_POST['name'];
        $msg=$_POST['msg'];
        $query="insert into chat (name,msg) values ('$name','$msg')";
$run=$con->query($query);
        if($run)
        {
            echo"<embed loop='false' src='chat.wav' hidden='true' autoplay='true' /> ";
            
        }
        
    }
                
        
        ?>
        
    </div>
    
    
    </body>
    
    
    
    
</html>