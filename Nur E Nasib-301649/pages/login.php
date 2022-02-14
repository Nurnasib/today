<?php include 'header.php'; ?>
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mt-5 mx-auto">
                    <div class="card ">
                        <div class="card-header text-white text-center bg-dark">Login Form</div>
                        <div class="card-body bg-secondary">
                            <h3 class="text-danger text-center"><?php echo isset($message) ? $message :''; ?></h3>
                            <form action="action.php" method="POST">
                                <div class="form-group row">
                                    <label class="col-md-3 text-white">Email Address</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" name="email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 text-white">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-dark" name="login_btn" value="Login">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>