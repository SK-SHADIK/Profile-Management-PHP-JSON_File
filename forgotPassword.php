<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <style>
        .container{
            border-left: 2px solid #000;
            border-right: 2px solid #000;
            padding-top: 100px;
            padding-bottom: 100px;
            padding-left: 60px;
            padding-right: 60px;
        }
    </style>
</head>
<body>
    <?php include 'Layouts/header.php'; ?>
    <div class="container">
       <form action="">
           <fieldset>
               <legend for="Login">Forgot Password</legend>

               <label for="Email">Email: </label>
               <input type="text" name="email" id="email" placeholder="Enter Email"> <br> <br> 
               <hr>
               <input type="submit" value="Submit">
            </fieldset>

            
       </form>

    </div>
    <?php include 'Layouts/footer.php'; ?>
</body>
</html>
