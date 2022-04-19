<?php require_once("init.php"); ?>

<?php

if ($session->is_signed_in()) {
    redirect("index.php");
}
if (isset($_POST['submit'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    //* method to check database user
    $user_found = User::verify_user($username, $password);

    if ($user_found) {
        $session->login($user_found);
        redirect("index.php");
    } else {
        $the_message = "Your username or password is incorrect.";
    }
} else {
    $username = "";
    $password = "";
}

?>

<div class="col-md-4 col-md-offset-5">
    <form action="" method="post">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username">

        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <div class="form-group">
            <input type="submit" value="Submit" name="Submit" class="btn btn-primary">
        </div>
    </form>
</div>
