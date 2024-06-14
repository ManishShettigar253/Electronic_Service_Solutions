 




<?php
require_once('../../config.php');
if (isset($_GET['id'])) {
    $qry = $conn->query("SELECT * FROM `service_list` WHERE id = '{$_GET['id']}'");
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
    <form action="" id="service-form">
        <input type="hidden" name="id" value="<?php echo isset($id) ? $id : ''; ?>">
        <!--<div class="form-group">
            <label for="service" class="control-label">Service</label>
            <input type="text" name="service" id="service" class="form-control form-control-border" placeholder="Service" value="<?php echo isset($service) ? $service : ''; ?>"  pattern ="[A-za-z0-9 ]{1,50}" title="Enter in characters only" required>
            <div id="service-error" class="error-message"></div>
        </div>-->
        <div class="form-group">
    <label for="service" class="control-label">Service</label>
    <input type="text" name="service" id="service" class="form-control form-control-border" placeholder="Service" value="<?php echo isset($service) ? $service : ''; ?>" pattern="[A-Za-z]+[A-Za-z0-9 ]*[0-9]*[A-Za-z0-9 ]*" title="Enter text followed by alphanumeric characters" required>
    <div id="service-error" class="error-message"></div>
</div>

        <div class="form-group">
            <label for="description" class="control-label">Description</label>
            <textarea rows="3" name="description" id="description" class="form-control form-control-sm rounded-0" placeholder="Write the service description here." pattern ="[A-za-z ]{1,50}" required><?php echo isset($description) ? $description : ''; ?></textarea>
            <div id="description-error" class="error-message"></div>
        </div> 
        <div class="form-group">
            <label for="cost" class="control-label">Cost</label>
            <input type="number" step="any" min="0" name="cost" id="cost" class="form-control form-control-border text-right" placeholder="Cost" value="<?php echo isset($cost) ? $cost : 0; ?>" required oninput="this.value = Math.abs(this.value)">
            <div id="cost-error" class="error-message"></div>
        </div>
        
 
        </form>
</div>

<script>
 $(function(){
        $('#uni_modal #service-form').submit(function(e){
            e.preventDefault();


            $('.error-message').empty();

            // Validate input values
            var service = $('#service').val().trim();

            if (service === '') {
                $('#service-error').text('Please enter a service name.').css('color', 'red');
                return; // Prevent form submission if validation fails
            }
            var startsWithNumber = /^\d/.test(service);
            if (startsWithNumber) {
                 $('#service-error').text('Service name should not start with a number.').css('color', 'red');
                return; // Prevent form submission if validation fails
            }


            var description = $('#description').val().trim();
            if (description === '') {
                $('#description-error').text('Please enter a description.').css('color', 'red');
                return;
            }

            var cost = $('#cost').val().trim();
            if (cost === '') {
                $('#cost-error').text('Please enter the cost.').css('color', 'red');
                return;
            }
            var cost = parseFloat($('#cost').val().trim());
if (cost === 0) {
    $('#cost-error').text('Cost cannot be zero.').css('color', 'red');
    return;
}

            var _this = $(this)
            $('.pop-msg').remove()
            var el = $('<div>')
                el.addClass("pop-msg alert")
                el.hide()
            start_loader();
            $.ajax({
                url:_base_url_+"classes/Master.php?f=save_service",
				data: new FormData($(this)[0]),
                cache: false,
                contentType: false,
                processData: false,
                method: 'POST',
                type: 'POST',
                dataType: 'json',
				error:err=>{
					console.log(err)
					alert_toast("An error occured",'error');
					end_loader();
				},
                success:function(resp){
                    if(resp.status == 'success'){
                        location.reload();
                    }else if(!!resp.msg){
                        el.addClass("alert-danger")
                        el.text(resp.msg)
                        _this.prepend(el)
                    }else{
                        el.addClass("alert-danger")
                        el.text("An error occurred due to unknown reason.")
                        _this.prepend(el)
                    }
                    el.show('slow')
                    $('html,body,.modal').animate({scrollTop:0},'fast')
                    end_loader();
                }
            })
        })
    })

</script>


