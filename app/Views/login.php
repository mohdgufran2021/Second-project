<div class="row">
    <div class="col-5 offset-4">
        <?php $validate = \Config\Services::validation();
        echo $validate->listErrors();
        if ($success==true)
        {
            echo '<div class="alert alert-success">LoggedIn Successfully</div>';
        }
        if ($error==true)
        {
            echo '<div class="alert alert-danger">email/password Wrong</div>';
        }
        ?>

        <form action="<?php echo base_url('User/login') ?>" method="get">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" name="username" id="username" value="<?php echo set_value('username');?>">
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>

            <button type="submit" class="btn btn-success">Login</button>
        </form>
    </div>
</div>


<!--
<div class="row">
    <div class="col-4 offset-4">
        <h2 class="text-center mb-5">Login User</h2>


        <?php /*$validation =  \Config\Services::validation();
        echo $validation->listErrors();

        if ($success==true)
        {
            echo '<div class="alert alert-success">LoggedIn Successfully.</div>';
        }

        if ($error==true)
        {
            echo '<div class="alert alert-danger">Email/Password Wrong.</div>';
        }
        */?>


        <form method="post" action="<?php /*echo base_url('user/login') */?>">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" name="email" id="email">
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password">
            </div>


            <button type="submit" class="btn btn-secondary">Login</button>

        </form>
    </div>
</div>
-->
