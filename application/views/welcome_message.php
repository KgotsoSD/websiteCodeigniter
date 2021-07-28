<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <form action="">
            <div class="row">
                <div class="col-inputs">
                    <form action="/action_page.php">
                        
                        <div class="input-container">
                          <i class="fa fa-user icon"></i>
                          <input class="input-field" type="text" placeholder="Username" name="usrnm" required>
                        </div>
                      
                      
                        <div class="input-container">
                          <i class="fa fa-lock icon"></i>
                          <input class="input-field" type="password" placeholder="Password" name="psw" required>
                        </div>
                      
                        <button type="submit" class="btn">SIGN-IN</button>
                      </form>
                      <p style="color:cadetblue;margin-top: -40px;">Forgot password?</p>
       
                <!--<button class="button button1">SIGN IN</button>-->
                <div class="vl">

                </div>

                <div class="col-logo">
                    <span><h1 style ="color:white">logo <h1><span>
                </div>
            </div>
        </form>
    </div>
<script>
    const container = document.querySelector('.container'),
          form      = container.querySelectorAll('form'),
          submitInput = form[0].querySelector(input[type='submit']);
        
    function getDataForm(e){
        e.preventDefault();
        var formData = new FormData(form[0]);
        alert( formData.get('usernameField')+'-'+ formData.get('passwordField')+ formData.get(''));
    }
    document.addEventListener('DOMContentLoaded', function(){
        submitInput.addEventListener('click',getDataForm,false);
    }, false);
</script>
</body>
</html>