<section>
    <div class="container">
        <p>Please fill all reqired details</p>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <?php echo validation_errors(
                    '<div class="container">
                        <div class="alert alert-dismissible alert-danger">
                            <button type="button" class="close" data-dismiss="alert">'.'&times;'.'</button>
                                <strong>',
                        '</div>
                    </div>'); ?>
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="user_name">User Name<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="user_name" name="user_name">
                    </div>
                    <div class="form-group">
                        <label for="password">Password<span class="text-danger">*</span></label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="form-group">
                        <label for="user_type">User Type<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="user_type" name="user_type">
                    </div>
                    <!-- <div class="form-group">
                        <label for="user_status">User Status</label>
                        <input type="text" class="form-control" id="user_status" name="user_status">
                    </div> -->
                    <div class="form-group">
                        <label for="status">Status</label>
                        <input type="text" class="form-control" id="status" name="status" disabled>
                    </div>
                    <button type="submit" class="btn btn-primary" name="register">Register</button>
                </form>
            </div>

        </div>
    </div>
</section>