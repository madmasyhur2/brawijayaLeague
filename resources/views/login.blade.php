<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 20px;
        }
        
        h1 {
        color: #333;
        }
        
        form {
        margin-top: 20px;
        }
        
        label {
        display: block;
        margin-bottom: 10px;
        }
        
        input[type="text"],
        input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        }
        
        input[type="submit"] {
        padding: 10px 20px;
        background-color: #333;
        color: #fff;
        border: none;
        cursor: pointer;
        }
        
        .message {
        color: #666;
        margin-top: 10px;
        }
    </style>
</head>
<body>
    <h1>Login</h1>
    
    <form>
        <label for="login-email">Email:</label>
        <input type="text" id="login-email" name="login-email" placeholder="Enter your email">
        
        <label for="login-password">Password:</label>
        <input type="password" id="login-password" name="login-password" placeholder="Enter your password">
        
        <input type="submit" value="Login">
        
        <p class="message">Not registered? <a href="/signup">Create an account</a></p>
    </form>
</body>
</html>
