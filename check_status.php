<div class="content py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card card-outline card-primary rounded-0 shadow">
                <div class="card-header rounded-0">
                        <h4 class="card-title">Check Status</h4>
                </div>
                <div class="card-body">
                    <form action="" id="check_status">
                        <div class="form-group">
                            <label for="code" class="control-label text-navy">Enter Repair Code</label>
                            <input type="text" class="form-control form-control-border" autofocus placeholder="RSMS-2023MMXXXX" title="The code align with " name="code" required>
                        </div>
                        <div class="form-group mt-3 text-center">
                            <button class="btn btn-primary btn-flat col-4"><i class="fa fa-search"></i> View Details</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(function(){
        $('#check_status').submit(function(e){
            e.preventDefault()
            location.href="./?page=view_status&"+$(this).serialize();
        })
    })
</script>