
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
</head>
<style>
    form{
        text-align: center;
        position: relative;
        background:#7a227a;
        max-width: 400px;
        margin: 50px;
        padding: 35px 20px;
        border-radius: 0.5rem;
        color: #fff;
        align-content: center;
        display: flex;
        flex-direction: column;
        
    }
    
    button{
       margin-top: 20px;
       border-radius: .3rem;
       border: none;
       transition: all .90s ease;
       line-height: 1.2rem;    
       
    }
</style>
<body>
    <form action="user-data.php" method="POST">
        <label for="name"> Name:</label>
        <input type="text" name="name" placeholder="Enter Your Name">
        <label for="email">Email:</label>
        <input type="email" name="email" placeholder="Enter Your Email">
        <label for="dob">Date of Birth:</label>
        <input type="date" name="dob">
        <label for="gender">Gender:</label>
        <select name="gender" id="">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>
        <label for="country">Country:</label>
        <input type="text" name="country" placeholder="Enter Your Country">
        <button type="submit">Register</button>
    </form>
</body>
</html>

