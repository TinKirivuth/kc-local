<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login</title>

<style>
  body {
      font-family: Arial, Helvetica, sans-serif;
      padding: 0;
      margin: 0;
      color:#eee;
      background: url(images/phnompenh.jpg) no-repeat center center fixed; 
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
  }


  /* Full-width input fields */
  input[type=text], input[type=password] {
    width: 100%;
    padding: 6px 0px;
    margin: 0 0 20px 0;
    display: inline-block;
    border: 1px solid #ccc;
    outline: none;
    box-sizing: border-box;
  }

  /* Set a style for all buttons */
  button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
  }
  a{
    color:white;
    text-decoration: none;
  }
  button:hover {
    opacity: 0.8;
  }
  .container {
    overflow: hidden;
    background-color: rgba(0,0,0,0);
    height: 100%;
    width: 100%;
    position: absolute;
  }
  label{
    font-size: 14px;
  }
  span.psw {
    float: right;
    padding-top: 16px;
  }
  /* Change styles for span and cancel button on extra small screens */
  @media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
  }
</style>
<script src="jquery/jquery-3.2.1.min.js"></script>
</head>
<body>
<div class="container">
    <div class="" style="margin:auto;width:290px;margin-top:50px;margin-bottom:-50px;text-align:center;">
      <img src="images/kh.png" alt="" style="width:90px;border:4px solid #eee;border-radius:50%;">
    </div>

    <div style="width:290px;margin:auto;border:1px solid grey;padding:40px 20px 20px 20px;background-color:rgba(0,0,0,0.7);">
      <h2 style="text-align: center;color:yellow;">System Login</h2>
      <div>
          <label for="uname"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="txt_uname" id="txt_uname" autocomplete="off" style="background-color:transparent;border-top:none;border-left:none;border-right:none;font-size:14px;color:white;">

          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="txt_upass" id="txt_upass" autocomplete="off" style="background-color:transparent;border-top:none;border-left:none;border-right:none;font-size:14px;color:white;">

          <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
          </label>

          <input type="button" style="width:100%;background:red;border-radius: 20px;outline: none;color:white;padding:8px;border:none;cursor:pointer;margin:20px 0;font-size:15px;" name="btn-login" id="btn-login" value="Login">

          <label>
            <center><a href="#">Forgot Password.!</a></center>
          </label>

          <!-- <button type="submit" name="btn-login" id="btn-login">Login</button> -->
          <!-- <input type="button" style="width:100%;background:red;border-radius: 20px;outline: none;color:white;padding:8px;border:none;cursor:pointer;float:left;margin-bottom:10px;font-size:15px;" name="btn-login" id="btn-login" value="Login">
          <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
          </label> -->
      </div>
    </div>
</div>


<script>
  $(document).ready(function(){
    $('#btn-login').click(function(){
      var uname=$('#txt_uname');
      var upass=$('#txt_upass');
      if(uname.val()==''){
        alert('Please Enter Username..');
        uname.focus();
        return;
      }
      if(upass.val()==''){
        alert('Please Enter Password..');
        upass.focus();
        return;
      }
      $.ajax({
          url:'action/get-login.php',
          type:'POST',
          data:{uname:uname.val(),upass:upass.val()},
          cache:false,
          dataType:"json",
          success:function(data){
            if(data.login==0){
              alert('Please Try Again.');
            }else{
              window.location.href="index.php";
            }
          }
      });
    });
  });
</script>

</body>
</html>
