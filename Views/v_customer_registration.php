<?php
    include_once "../Includes/i_redurection_log_in.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <?php include_once "../Includes/i_links.php" ; ?>
</head>
<body>
    
    <?php include_once "../Includes/i_header.php";?>

    <section class="create_acount_section">
        <h2>Create a customer account</h2>

        <form action="../Controllers/c_customer_registration.php" method="POST" enctype="multipart/form-data">
            <input type="text" name="user_name" placeholder="User name" required><br>
            <input type="text" name="postname" placeholder="Postname" required><br>

            <select name="sex" class="sex" required>
                <option value="male">Male</option>
                <option value="feminine">Feminine</option>
            </select> <br>

            <input type="text" name="local_address" placeholder="Local address" required><br>
            <input type="text" name="phone_number" placeholder="Phone number" required><br>
            <input type="text" name="mail_address" placeholder="Mail address" required><br>
            <input type="submit" class="subscribe_btn" value="Subscribe">
        </form>
    </section>
</body>
</html>