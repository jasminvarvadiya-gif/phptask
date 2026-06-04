<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact Form</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, sans-serif;
}

body{
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background:linear-gradient(135deg,#667eea,#764ba2);
}

.container{
    width:100%;
    max-width:450px;
    background:#fff;
    padding:30px;
    border-radius:15px;
    box-shadow:0 10px 30px rgba(0,0,0,0.2);
}

h2{
    text-align:center;
    margin-bottom:25px;
    color:#333;
}

.form-group{
    margin-bottom:15px;
}

input,
textarea{
    width:100%;
    padding:12px 15px;
    border:1px solid #ddd;
    border-radius:8px;
    outline:none;
    font-size:15px;
}

input:focus,
textarea:focus{
    border-color:#667eea;
}

textarea{
    resize:none;
    height:120px;
}

button{
    width:100%;
    padding:12px;
    border:none;
    background:#667eea;
    color:#fff;
    font-size:16px;
    border-radius:8px;
    cursor:pointer;
    transition:0.3s;
}

button:hover{
    background:#5563d6;
}
</style>
</head>

<body>

<div class="container">
    <h2>Contact Us</h2>

    <form action="send.php" method="POST">
        <div class="form-group">
            <input type="text" name="name" placeholder="Your Name" required>
        </div>
        <div class="form-group">
            <input type="age" name="age" placeholder="Enter your Age">
        </div>
     
        <div class="form-group">
            <input type="email" name="email" placeholder="Your Email" required>
        </div>

        <div class="form-group">
            <textarea name="message" placeholder="Your Message" required></textarea>
        </div>

        <button type="submit">Send Message</button>
    </form>
</div>

</body>
</html>
