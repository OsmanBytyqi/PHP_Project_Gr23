<?php

require './controllers/ContactController.php';

$message = new ContactController;

if(isset($_POST["name"])&&isset($_POST["email"])&&isset($_POST["message"])){
    $message->store($_POST);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
    <title>Document</title>
    <link rel="stylesheet" href="css/homepage.css">
    <link rel="stylesheet" href="css/contact.css">  
    <script src="script.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=Andika+New+Basic&family=Dancing+Script:wght@700&family=Indie+Flower&display=swap" rel="stylesheet">
</head>

<body>
    <?php include 'inc/navbar.php'; ?>
    <footer>
    <?php 
            if(!empty($userMessage)) {
                echo "<p>$userMessage</p>";
            } 
        ?> 
        <div class=" title">
            <h1>CONTACT US</h1>
            
        </div>
        <div class="box">
            <form action="contact.php" method="post" id="myform">
                <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name." required><br>
                <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email." required><br>
                <textarea name="message" class="form-control" id="message" placeholder="Message" rows="4" required></textarea><br>
                <input type="button" name="submit" class="form-control submit"  value="SEND MESSAGE" id="submit" require>
  
            </form>
        </div>
     
    </footer>

  
    <script>
        
        $(document).ready(function(){
            $("#submit").click(function(){
                var name=$("#name").val();
                var email=$("#email").val();
                var message=$("#message").val();

                $.ajax({
                    url:"contact.php",
                    method:"post",
                    data:{name:name,email:email,message:message},
                    success:function(data){
                        alert('your message has been sent!')
                    }
                    

                })
            })


        })

        let clear=document.getElementsByClassName("#form-control submit");
        

        clear.addEventListener('click',(e)=>{
        let name=document.getElementById("#name").value="";
        let email=document.getElementById("#email").value="";
        let message=document.getElementById("#message").value="";

        });
       


    </script>

   
   </body>