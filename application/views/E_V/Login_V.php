<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Login</title>
</head>
<body>
<div class="centered-text">
    <div class="Login_V">
       <?php echo form_open('E_C/Login_C/login');?>
  <form  action="<?php echo base_url('E_C/Login_C/login');?>" method="post">
    <h4 class="login">Login</h4>
    <div class="mb-3">
      <label for="Username" class="form-label">Username</label><br>
      <input type="email" class="form-control" id="FormEmail1" placeholder="email-id@gmail.com" name="email"><br>
      <span class="error_message"><?php echo form_error('email');?></span><br>
      <span class="login_failed"><?php echo $this->session->flashdata('no_data_found','Enter a Correct email');?></span>
    </div>
    <div class="mb-3" id="password">
      <label for="password" class="form-label">Password</label><br>
      <input type="password" class="form-control" id="FormPassword1" placeholder="Password" name="password"><br>
      <i class="fa-regular fa-eye-slash"></i>
      <i class="fa-solid fa-eye"></i><br>
      <span class="login_failed"><?php echo $this->session->flashdata('logined_failed');?></span>
      <br>
      <a class="dropdown-item" href="<?php echo base_url('E_C/Login_C/forgetpassword');?>">Forgot password?</a>
      <span class="error_message"><?php echo form_error('password');?></span>
      </div>
    <button type="submit" class="btn btn-primary" name="update">Sign in</button>
  </form>
</div>
  <div class="dropdown-divider"></div>
  <a class="dropdown-item" href="<?php echo base_url('E_C/Login_C/register');?>">New around here? Sign up</a><br>
</div>  
</body>
<style>
body{position:relative;display: flex;text-align: center;justify-content: center;   align-items: center;
    height: 100vh; /* Adjust the height as needed */}
.centered-text {background-color: rgba(100, 200, 10, 0.2);  border-radius: 10px;padding: 1rem 5rem;
    position: absolute;text-align: center;   
  }
label{position: absolute;left:0%;font-size: 1.3rem;}
.Login_V div{position:relative;margin-top:1.2rem;}
button{position:relative;margin-top:2rem;color:white;background-color: black;border-radius: 5px;border:none;
    padding: 10px;font-size: 1rem;}
.login{font-size: 2rem;}
.fa-eye{display: none;}
input{padding:0.8rem 0.5rem;width:20vw;position: relative;margin-top:0.5rem;border-radius: 5px;border:none;}
input:focus{outline: none;}
.dropdown-divider { position: relative;padding: 10px 0px;}
.mb-3 a{position: absolute;right: 0%;top:70%;}
i{position: absolute; right:10px;top:40%;cursor: pointer;}
.dropdown-divider a{position:relative;padding: 10px 0px;}
.error_message{ position:absolute; text-align: left;   color:red;left:0%;top:70%;}
.login_failed{position:absolute;text-align: left;left:0%;color:red;top: 80%;}
@media screen and (max-width: 767px) {
    /* Your CSS rules for smaller screens go here */
body{position:relative;}
.centered-text {background-color: rgba(100, 200, 10, 0.2);  border-radius: 10px;padding: 1rem 1rem;
    position: absolute;}
label{position: absolute;left:0%;font-size: 1.3rem;}
.Login_V div{position:relative;margin-top:1rem;}
button{position:relative;margin-top:2rem;color:white;background-color: black;border-radius: 5px;border:none;
    padding: 10px;font-size: 1rem;}
.login{font-size: 2rem;}
.fa-eye{display: none;}
input{padding:0.8rem 0.5rem;width:80vw;position: relative;margin-top:1rem;border-radius: 5px;border:none;}
input:focus{outline: none;}
.dropdown-divider { position: relative;padding: 10px 0px;}
.mb-3 a{position: absolute;right: 0%;top:70%;}
i{position: absolute; right:10px;top:40%;cursor: pointer;}
.dropdown-divider a{position:relative;padding: 10px 0px;}
.error_message{ position:absolute; text-align: left;   color:red;left:0%;top:70%;}
.login_failed{position:absolute;text-align: left;left:0%;color:red;top:80%;}
    
}
</style>
<script>
    const passwordi=document.getElementById('FormPassword1');
    var passwordv=document.querySelector('.fa-eye-slash');
    var passwordh=document.querySelector('.fa-eye');
    passwordv.addEventListener("click",function(){
        if(passwordi.type==='password')
        {
            passwordi.type='text';
            passwordh.style.display="block";
            passwordv.style.display="none";
        }
    });
        passwordh.addEventListener("click",function(){
        if(passwordi.type==='text')
        {
            passwordi.type='password';
            passwordv.style.display="block";
            passwordh.style.display="none";
        }
    });
</script>
</html>
