<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Admin
                <small>Subheading</small>
            </h1>

            <?php

            // $found_user = User::find_user_by_id(1);
            // $user = User::instantation($found_user);
            // echo $user->id . "<br>" . $user->username . "<br>" . $user->password . "<br>" . $user->first_name . "<br>" . $user->last_name;




            // $users = User::find_all_users();

            // foreach ($users as $user) {
            //     echo $user->username . "<br>";
            // }

            $found_user = User::find_user_by_id(2);
            echo $found_user->username . "<br>";

            //$photos = new photos();


            ?>

            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i> <a href="index.php">Dashboard</a>
                </li>
                <li class="active">
                    <i class="fa fa-file"></i> Blank Page
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

</div>
<!-- /.container-fluid -->
