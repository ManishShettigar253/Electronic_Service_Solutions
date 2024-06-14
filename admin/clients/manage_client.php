<?php
require_once('../../config.php');
if (isset($_GET['id'])) {
    $qry = $conn->query("SELECT * FROM `client_list` WHERE id = '{$_GET['id']}'");
    if ($qry->num_rows > 0) {
        $res = $qry->fetch_array();
        foreach ($res as $k => $v) {
            if (!is_numeric($k))
                $$k = $v;
        }
    }
}
?>
<style>
    #cimg {
        object-fit: scale-down;
        object-position: center center;
        height: 200px;
        width: 200px;
    }
</style>
<div class="container-fluid">
    <form action="" id="client-form">
        <input type="hidden" name="id" value="<?php echo isset($id) ? $id : '' ?>">
        <div class="row">
            <div class="form-group col-md-6">
                <label for="firstname" class="control-label">First Name</label>
                <input type="text" name="firstname" id="firstname" class="form-control form-control-border" placeholder="First Name" value="<?php echo isset($firstname) ? $firstname : '' ?>" pattern =[A-za-z]{1,15} title="Enter in characters only" required>
                <div class="invalid-feedback"></div>
            </div>
            <div class="form-group col-md-6">
                <label for="middlename" class="control-label">Middle Name <em>(optional)</em></label>
                <input type="text" name="middlename" id="middlename" class="form-control form-control-border" placeholder="Middle Name (optional)" value="<?php echo isset($middlename) ? $middlename : '' ?>"  pattern =[A-za-z]{1,15} title="Enter in characters only">
                <div class="invalid-feedback"></div>
            </div>
            <div class="form-group col-md-6">
                <label for="lastname" class="control-label">Last Name</label>
                <input type="text" name="lastname" id="lastname" class="form-control form-control-border" placeholder="Last Name" value="<?php echo isset($lastname) ? $lastname : '' ?>"  pattern =[A-za-z]{1,15} title="Enter in characters only" required>
                <div class="invalid-feedback"></div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="email" class="control-label">Email</label>
                <!--<input type="email" name="email" id="email" class="form-control form-control-border" placeholder="Email" value="<?php echo isset($email) ? $email : '' ?>" required>-->
                <input type="email" name="email" id="email" class="form-control form-control-border" placeholder="Email" value="<?php echo isset($email) ? $email : '' ?>" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" required>

                <div class="invalid-feedback"></div>
            </div>
            <div class="form-group col-md-6">
                <label for="contact" class="control-label">Contact #</label>
                <input type="text" name="contact" id="contact" class="form-control form-control-border" placeholder="Contact #" value="<?php echo isset($contact) ? $contact : '' ?>" pattern="[0-9]{10}" required>
                <div class="invalid-feedback"></div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <label for="address" class="control-label">Address</label>
                <textarea rows="3" name="address" id="address" class="form-control form-control-sm rounded-0" placeholder="Block 6, Lot 23, Here Subd., There City, 2306" required><?php echo isset($address) ? $address : '' ?></textarea>
                <div class="invalid-feedback"></div>
            </div>
        </div>
        <!--<button type="submit" class="btn btn-primary">Submit</button>-->
    </form>
</div>
<script>
    $(function () {
        $('#client-form').submit(function (e) {
            e.preventDefault();
            var form = $(this);
            var inputs = form.find(':input');

            // Reset validation state
            form.find('.invalid-feedback').empty();
            inputs.removeClass('is-invalid');

            
            // Validate input fields
            var isValid = true;
            inputs.each(function () {
                if (!this.checkValidity()) {
                    isValid = false;
                    $(this).addClass('is-invalid');
                    $(this).siblings('.invalid-feedback').text(this.validationMessage);
                }
            });

            if (isValid) {
                // Form is valid, proceed with AJAX submission
                var el = $('<div>')
                el.addClass("pop-msg alert")
                el.hide();
                start_loader();
                $.ajax({
                    url: _base_url_ + "classes/Master.php?f=save_client",
                    data: new FormData(form[0]),
                    cache: false,
                    contentType: false,
                    processData: false,
                    method: 'POST',
                    type: 'POST',
                    dataType: 'json',
                    error: function (err) {
                        console.log(err);
                        alert_toast("An error occurred", 'error');
                        end_loader();
                    },
                    success: function (resp) {
                        if (resp.status == 'success') {
                            location.reload();
                        } else if (!!resp.msg) {
                            el.addClass("alert-danger");
                            el.text(resp.msg);
                            form.prepend(el);
                        } else {
                            el.addClass("alert-danger");
                            el.text("An error occurred due to an unknown reason.");
                            form.prepend(el);
                        }
                        el.show('slow');
                        $('html,body,.modal').animate({ scrollTop: 0 }, 'fast');
                        end_loader();
                    }
                });
            }
        });
    });
</script>

 