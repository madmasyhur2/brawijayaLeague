<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
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
    <h1>Sign Up</h1>
    
    <form>
        <label for="signup-name">Name:</label>
        <input type="text" id="signup-name" name="signup-name" placeholder="Enter your name">
        
        <label for="signup-email">Email:</label>
        <input type="text" id="signup-email" name="signup-email" placeholder="Enter your email">
        
        <label for="signup-password">Password:</label>
        <input type="password" id="signup-password" name="signup-password" placeholder="Enter your password">
        
        <input type="submit" value="Sign Up">
        
        <p class="message">Already registered? <a href="/login">Login</a></p>
    </form>
</body>
</html>
