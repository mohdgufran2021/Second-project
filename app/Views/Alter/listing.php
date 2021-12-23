<div class="row">
    <div class="col-12">
        <h2>User Table</h2>
        <a href="<?php echo base_url('User/create')?>" class="btn btn-secondary">Add</a>
        <table class="table">
            <thead>
            <tr class="col-6">
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">Created At</th>
                <th scope="col">Updated At</th>
            </tr>
            </thead>
            <tbody>

            <?php
            if (count($user)>0)
            {
                foreach($user as $row)
                {
                    ?>
                    <tr>
                        <th scope="row"><?php echo $row['id']; ?></th>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['password']; ?></td>
                        <td><?php echo $row['created_at']; ?></td>
                        <td><?php echo $row['updated_at']; ?></td>
                        <td><a type="submit" href="<?php echo base_url('User/edit') ?>">Edit</a></td>
                        <td> <a type="submit" href="<?php echo base_url('User/delete') ?>">Delete</a></td>
                    </tr>
                    <?php
                }
            }
            else
            {
                ?>
                <tr>
                    <td colspan="4">No Records Found.</td>
                </tr>
                <?php
            }
            ?>

            </tbody>
        </table>
    </div>
</div>
