<?php
    if(isset ($_POST['contract'])){
        $full_name      = $_POST['full'];
        $email_address  = $_POST['email'];
        $phone          = $_POST['phone'];
        $message        = $_POST['message'];

        $msg = $full_name . $email_address . $phone . $message ;

        mail('nibirahmed5278@gmail.com', 'Eita amar website', $msg );
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contract Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form action="" method="post">
            <div class="form-grup">
                <label for="">Full Name</label>
                <input type="text" class="form-control" name="full">
            </div>
            <div class="form-grup">
                <label for="">Email Address</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="form-grup">
                <label for="">Phone Number</label>
                <input type="tel" class="form-control" name="phone">
            </div>
            <div class="form-grup">
                <label for="">Message</label>
                <textarea name="message" id="" cols="30" rows="10" class="form-control" ></textarea>
            </div>
            <div class="form-grup">
                <button type="submit" class="btn btn-success" name="contract">SUBMIT</button>
            </div>
        </form>
    </div>
</body>
</html>