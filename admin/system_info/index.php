
<?php if($_settings->chk_flashdata('success')): ?>
<script>
	alert_toast("<?php echo $_settings->flashdata('success') ?>",'success')
</script>
<?php endif;?>

<style>
	img#cimg{
		height: 15vh;
		width: 15vh;
		object-fit: scale-down;
		border-radius: 100% 100%;
	}
	img#cimg2{
		height: 50vh;
		width: 100%;
		object-fit: contain;
		/* border-radius: 100% 100%; */
	}
</style>
<div class="col-lg-12">
	<div class="card card-outline card-dark rounded-0 shadow">
		<div class="card-header">
			<h5 class="card-title">System Information</h5>
		</div>
		<div class="card-body">
			<form action="" id="system-frm">
				<div id="msg" class="form-group"></div>
				 

				<div class="form-group">
    <label for="name" class="control-label">System Name</label>
    <input type="text" class="form-control form-control-sm" name="name" id="name" pattern="[A-Za-z ]{1,32}" value="<?php echo trim($_settings->info('name')) ?>" required>
    <div class="invalid-feedback">Please enter the system name.</div>
</div>

<div class="form-group">
    <label for="short_name" class="control-label">System Short Name</label>
    <input type="text" class="form-control form-control-sm" name="short_name" id="short_name" pattern="[A-Za-z]{1,8}" value="<?php echo $_settings->info('short_name') ?>" required>
</div>

				
				<div class="form-group">
					<label for="content[welcome]" class="control-label">Welcome Content</label>
					<textarea type="text" class="form-control form-control-sm summernote" name="content[welcome]" id="welcome"><?php echo is_file(base_app.'welcome.html') ? file_get_contents(base_app.'welcome.html') : '' ?></textarea>
				</div>
				<div class="form-group">
					<label for="content[about_us]" class="control-label">About Us</label>
					<textarea type="text" class="form-control form-control-sm summernote" name="content[about_us]" id="about_us"><?php echo is_file(base_app.'about_us.html') ? file_get_contents(base_app.'about_us.html') : '' ?></textarea>
				</div> <!--
				<div class="form-group">
					<label for="" class="control-label">System Logo</label>
					<div class="custom-file">
						<input type="file" class="custom-file-input rounded-circle" id="customFile" name="img" onchange="displayImg(this,$(this))">
						<label class="custom-file-label" for="customFile">Choose file</label>
						<div class="invalid-feedback">Please choose a file for the system logo.</div>
					</div>
				</div>
				<div class="form-group d-flex justify-content-center">
					<img src="<?php echo validate_image($_settings->info('logo')) ?>" alt="" id="cimg" class="img-fluid img-thumbnail">
				</div>
				<div class="form-group">
					<label for="" class="control-label">Cover</label>
					<div class="custom-file">
						<input type="file" class="custom-file-input rounded-circle" id="customFile" name="cover" onchange="displayImg2(this,$(this))">
						<label class="custom-file-label" for="customFile">Choose file</label>
						<div class="invalid-feedback">Please choose a file for the cover.</div>
					</div>
				</div>
				<div class="form-group d-flex justify-content-center">
					<img src="<?php echo validate_image($_settings->info('cover')) ?>" alt="" id="cimg2" class="img-fluid img-thumbnail bg-gradient-dark border-dark">
				</div> -->
				<fieldset>
					<legend>Other Information</legend>
					<div class="form-group">
   						 <label for="email" class="control-label">Email</label>
    					<input type="email" class="form-control form-control-sm" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" name="email" id="email" value="<?php echo $_settings->info('email') ?>"required>
    					<div class="invalid-feedback">Please enter a valid email address.</div>
					</div> <!--
					<div class="form-group">
						<label for="contact" class="control-label">Contact</label>
						<input type="text" class="form-control form-control-sm" name="contact" pattern="[0-9]{10}" id="contact" value="<?php echo $_settings->info('contact') ?>"required>
						<div class="invalid-feedback">Please enter a valid 10-digit contact number.</div>
					</div> -->
					<div class="form-group">
    <label for="contact" class="control-label">Contact</label>
    <input type="text" class="form-control form-control-sm" name="contact" pattern="[0-9]{10}" id="contact" value="<?php echo $_settings->info('contact') ?>" maxlength="10" required>
    <div class="invalid-feedback">Please enter a valid 10-digit contact number.</div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var contactInput = document.getElementById('contact');

        contactInput.addEventListener('input', function() {
            if (contactInput.value.length > 10) {
                contactInput.value = contactInput.value.slice(0, 10);
            }
        });
    });
</script>

					<div class="form-group">
						<label for="address" class="control-label">Office Address</label>
						<textarea rows="3" class="form-control form-control-sm" name="address" id="address" style="resize:none"><?php echo $_settings->info('address') ?></textarea>
					</div>
				</fieldset>
			</form>
		</div>
		<div class="card-footer">
			<div class="col-md-12">
				<div class="row">
					<button class="btn btn-sm btn-primary" form="system-frm">Update</button>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	function validateForm() {
		var form = document.getElementById('system-frm');
		var name = document.getElementById('name');
		var img = document.getElementById('customFile');
		var cover = document.getElementById('customFile2');
		var email = document.getElementById('email');
		var contact = document.getElementById('contact');

		if (name.value.trim() === '') {
			name.classList.add('is-invalid');
			return false;
		} else {
			name.classList.remove('is-invalid');
		}

		if (img.files.length === 0) {
			img.classList.add('is-invalid');
			return false;
		} else {
			img.classList.remove('is-invalid');
		}

		if (cover.files.length === 0) {
			cover.classList.add('is-invalid');
			return false;
		} else {
			cover.classList.remove('is-invalid');
		}

		if (email.value.trim() !== '') {
			var emailPattern = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/;
			if (!emailPattern.test(email.value.trim())) {
				email.classList.add('is-invalid');
				return false;
			} else {
				email.classList.remove('is-invalid');
			}
		}

		if (contact.value.trim() !== '') {
			var contactPattern = /^[0-9]{10}$/;
			if (!contactPattern.test(contact.value.trim())) {
				contact.classList.add('is-invalid');
				return false;
			} else {
				contact.classList.remove('is-invalid');
			}
		}

		form.submit();
	}

	function displayImg(input, _this) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function (e) {
				$('#cimg').attr('src', e.target.result);
				_this.siblings('.custom-file-label').html(input.files[0].name);
			};

			reader.readAsDataURL(input.files[0]);
		}
	}

	function displayImg2(input, _this) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function (e) {
				_this.siblings('.custom-file-label').html(input.files[0].name);
				$('#cimg2').attr('src', e.target.result);
			};

			reader.readAsDataURL(input.files[0]);
		}
	}

	function displayImg3(input, _this) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function (e) {
				_this.siblings('.custom-file-label').html(input.files[0].name);
				$('#cimg3').attr('src', e.target.result);
			};

			reader.readAsDataURL(input.files[0]);
		}
	}

	$(document).ready(function () {
		$('.summernote').summernote({
			height: '60vh',
			toolbar: [
				['style', ['style']],
				['font', ['bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear']],
				['fontname', ['fontname']],
				['fontsize', ['fontsize']],
				['color', ['color']],
				['para', ['ol', 'ul', 'paragraph', 'height']],
				['table', ['table']],
				['insert', ['link', 'picture']],
				['view', ['undo', 'redo', 'fullscreen', 'codeview', 'help']]
			]
		});
	});
</script>

<script>
    document.getElementById('name').addEventListener('input', function() {
        var name = this.value.trim();
        if (name.length === 0 || name.match(/^\s+$/)) {
            this.setCustomValidity('Please enter a valid system name.');
        } else {
            this.setCustomValidity('');
        }
    });
	document.getElementById('email').addEventListener('input', function() {
        var emailInput = document.getElementById('email');
		var email = emailInput.value;
var pattern = /^[a-z0-9._%+-]+@gmail\.[a-z]{2,}$/;

if (email.trim() === '') {
    // Email field is empty
    emailInput.classList.add('is-invalid');
    console.log("Email field is empty");
} else if (!pattern.test(email)) {
    // Invalid email address or missing dot between 'gmail' and 'com'
    emailInput.classList.add('is-invalid');
    console.log("Invalid email address or missing dot between 'gmail' and 'com'");
} else {
    // Valid email address with dot between 'gmail' and 'com'
    emailInput.classList.remove('is-invalid');
    console.log("Email address is valid");
}
 

    });
</script> 





