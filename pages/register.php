<?php include 'header.php';?>
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header bg-success text-center text-white">Registration Form</div>
                    <div class="card-body">
                        <form action="action.php" method="POST">
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Full Name</label>
                                <div class="col-md-9">
                                    <input type="text" name="full_name" required class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Email</label>
                                <div class="col-md-9">
                                    <input type="email" name="email" required class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Phone Number</label>
                                <div class="col-md-9">
                                    <input type="number" name="mobile" required class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Subject</label>
                                <div class="col-md-9">
                                    <label><input type="checkbox" name="subject[]" value="Bangla"> Bangla </label>
                                    <label><input type="checkbox" name="subject[]" value="English"> English </label>
                                    <label><input type="checkbox" name="subject[]" value="Math"> Math </label>
                                    <label><input type="checkbox" name="subject[]" value="Physics"> Physics </label>
                                    <label><input type="checkbox" name="subject[]" value="Chemistry"> Chemistry </label>
                                    <label><input type="checkbox" name="subject[]" value="Biology"> Biology </label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label"></label>
                                <div class="col-md-9">
                                    <input type="submit" name="register_btn" class="btn btn-outline-success btn-block" value="submit"/>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php';?>
