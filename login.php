<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="container-login">
            <form action="POST" class="form" id="login">
                   <h1>login</h1>
                   <div class="input">
                      <div class="input-name">
                          <label for="1"></label> 
                          <input type="text" class="form-input" autofocus placeholder="username or email">
                          <div class="form__input-error-messages">this is an error message</div>
                      </div>
                      <div class="input-password">
                           <label for="1"></label> 
                           <input type="password" class="form-input" autofocus placeholder="password">
                           <div class="form__input-password-incorrect">this is an password incorrect</div>
                       </div>
                       <button class="form_button" type="submit">se connecter</button>
                    </div>
            </form>
    </div>
          <script src="javascript/login.js"></script>
</body>
</html>