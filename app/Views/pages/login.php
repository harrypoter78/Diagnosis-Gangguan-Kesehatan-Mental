<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Header -->
<header class="masthead d-flex">
    <div class="container text-center my-auto">
        <div class="content-section-heading">
            <h2 class="mb-5">Login</h2>
        </div>
        <form action="/admin" method="POST">
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label-lg text-left">Username</label>
                <div class="col-sm-10 ">
                    <input type="text" class="form-control form-control-lg" name="tusername" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label-lg text-left">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control form-control-lg" name="tpassword" required>
                </div>
            </div>
            <button class="mt-5 btn btn-primary btn-lg btn-block" type="submit" name="login">Login</button>
        </form>
    </div>
    <div class="overlay"></div>
</header>


<?= $this->endSection(); ?>