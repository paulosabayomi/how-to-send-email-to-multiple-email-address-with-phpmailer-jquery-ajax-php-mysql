<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Multiple Email with PHPMailer</title>
    <link rel="stylesheet" href="./index.css">
</head>
<body>
    <div class="content-container">
        <div class="lesson-title">
            <h2>Send Email to Multiple Email address with PHPMailer <br> with JQuery/AJAX & PHP</h2>
        </div>

        <!-- LIST OF USERS -->
        <div class="user-list-container">
            <div class="lists-of-users">
                <div class="list-header">
                    <h3>List of Users in database</h3>
                </div>
                <?php 
                    require('./functions.php');

                    $conn = dbConnection();

                    $fetch_users_sql = "SELECT * FROM users";
                    $fetch_result = mysqli_query($conn, $fetch_users_sql);

                    while ($user = mysqli_fetch_assoc($fetch_result)) { ?>

                        <div class="user-details-container">
                            <div class="username"><?php echo $user['fullname']; ?></div>
                            <div class="userEmail"><?php echo $user['email']; ?></div>
                        </div>
                        
                <?php } ?>
            </div>
        </div>

        <!-- MESSAGE CONTAINER -->
        <div class="message-container">
            <div class="message-inner-container">
                <div class="message-container-title">
                    <h3>Send Message to Users</h3>
                </div>
                <form id="message-form">
                    <div class="info-msg"></div>
                    <textarea name="email-message" id="email-message"
                     placeholder="type a message to to be sent as email" cols="30" rows="10"></textarea>
                     <div class="btn-container">
                         <button>Send Email</button>
                     </div>
                </form>

            </div>
        </div>
    </div>

    <script src="./jquery-3.5.1.min.js"></script>
    <script src="./index.js"></script>
</body>

</html>