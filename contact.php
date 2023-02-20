<?php
include("components/header.php");
?>
<div class="container">
    <div class="row">
        <div class="col-12 shadow-lg p-3 mb-5 bg-body rounded mt-4">
            <h1>
                Contact Finderorg.com
            </h1>
            <form class="row g-3 needs-validation" novalidate>
                <div class="col-md-12">
                    <input placeholder="Name" type="text" class="form-control" id="validationCustom02" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="input-group has-validation">
                        <input placeholder="Email" type="email" class="form-control" id="validationCustomemail" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                            Please choose a email.
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <textarea placeholder="Message" class="form-control" id="validationCustom05" required></textarea>
                    <div class="invalid-feedback">
                        Please provide address
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                        <label class="form-check-label" for="invalidCheck">
                            Agree to terms and conditions
                        </label>
                        <div class="invalid-feedback">
                            You must agree before submitting.
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>


<?php include("components/footer.php"); ?>