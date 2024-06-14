


<?php
$from = isset($_GET['from']) ? $_GET['from'] : date('Y-m-d',strtotime(date("Y-m-d").'-1 month'));
$to = isset($_GET['to']) ? $_GET['to'] : date('Y-m-d');
?>
<style>
    #show-print{
        display:none !important;
    }
</style>
<div class="card card-outline card-primary">
	<div class="card-header">
		<h3 class="card-title">Repair List Report</h3>
	</div>
	<div class="card-body">
        <fieldset>
            <legend class="text-muted">Filter</legend>
            <form action="" id="filter-report">
                <div class="row align-items-end">
                     
                    <div class="form-group col-md-3">
                        <small class="text-muted mx-2">Date From</small>
                        <input type="date" name="from" value="<?= $from ?>" class="form-control form-control-sm rounded-0" required max="<?= date('Y-m-d') ?>"   onchange="validateDateRange()" >
                    </div>
                    <div class="form-group col-md-3">
                        <small class="text-muted mx-2">Date To</small>
                        <input type="date" name="to" value="<?= $to ?>" class="form-control form-control-sm rounded-0" required max="<?= date('Y-m-d') ?>" onchange="validateDateRange()" >
                    </div>

                    <div class="form-group col-md-3">
                        <button class="btn btn-primary btn-flat btn-sm"><i class="fa fa-filter"></i> Filter</button>
                        <button class="btn btn-success btn-flat btn-sm" type="button" id="print"><i class="fa fa-print"></i> Print</button>
                    </div>
                </div>
            </form>
        </fieldset>
        <div class="container-fluid" id="outprint">
            <style>
                #logo{
                    width:5em;
                    height:5em;
                    top:0;
                    left:2.5em;
                    object-fit:cover;
                    object-position:center center;
                }
            </style>
            <div id="show-print">
                <div class="w-100 position-relative">
                    <img src="<?= validate_image($_settings->info('logo')) ?>" id="logo" alt="Logo" class="img-circle position-absolute border">
                    <h3 class="m-0 text-center"><?= $_settings->info('name') ?></h3>
                    <h4 class="text-center"><b>Repair List</b></h4>
                    <center><small>
                        <?php 
                        if($from == $to){
                            echo date("F d, Y",strtotime($from));
                        }else{
                            echo date("M d, Y",strtotime($from)). " - " .date("M d, Y",strtotime($to));

                        }
                        ?>
                    </small></center>
                </div>
            </div>
			<table class="table table-hover table-striped table-bordered">
				<colgroup>
					<col width="5%">
					<col width="10%">
					<col width="20%">
					<col width="25%">
					<col width="25%"> 
				</colgroup>
				<thead>
					<tr>
                        <th>Sl No.</th>
						<th>Date Created</th>
						<th>Code</th>
						<th>Client</th>
						<th>Status</th> 
					</tr>
				</thead>
				<tbody>
                <?php 
						$i = 1;
						$qry = $conn->query("SELECT r.*, CONCAT(c.lastname,', ',c.firstname,' ',c.middlename) as client FROM `repair_list` r INNER JOIN client_list c ON r.client_id = c.id WHERE DATE(r.date_created) BETWEEN '$from' AND '$to' ORDER BY UNIX_TIMESTAMP(r.date_created) DESC");

                        while($row = $qry->fetch_assoc()):
					?>
						<tr>
							<td class="text-center"><?php echo $i++; ?></td>
							<td class=""><?php echo date("Y-m-d H:i",strtotime($row['date_created'])) ?></td>
							<td><?php echo ($row['code']) ?></td>
							<td class=""><p class="truncate-1"><?php echo ucwords($row['client']) ?></p></td>
							<td class="text-center">
								<?php 
									switch ($row['status']){
										case 0:
											echo '<span class="rounded-pill badge badge-secondary">Pending</span>';
											break;
										case 1:
											echo '<span class="rounded-pill badge badge-primary">Approved</span>';
											break;
										case 2:
											echo '<span class="rounded-pill badge badge-info">In-Progress</span>';
											break;
										case 3:
											echo '<span class="rounded-pill badge badge-warning">Checking</span>';
											break;
										case 4:
											echo '<span class="rounded-pill badge badge-success">Done</span>';
											break;
										case 5:
											echo '<span class="rounded-pill badge badge-danger">Cancelled</span>';
											break;
									}
								?>
							</td>
							 
						</tr>
					<?php endwhile; ?>
                    <?php if($qry->num_rows <= 0): ?>
                        <tr>
                            <th class="text-center" colspan="6">No Data</th>
                        </tr>
                    <?php endif; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<script>


    function validateDateRange() {
        var fromDate = $('[name="from"]').val();
        var toDate = $('[name="to"]').val();
        
        if (new Date(toDate) < new Date(fromDate)) {
            alert('Invalid date range. The "Date To" must be greater than or equal to the "Date From".');
            // Reset the date inputs or handle the error as needed
        }
    }
	$(document).ready(function(){
		$('#filter-report').submit(function(e){
            e.preventDefault();
            
            location.href = './?page=reports&'+$(this).serialize()
        })
        $('#print').click(function(){
            var _h = $('head').clone()
            var _p = $('#outprint').clone()
            var _el = $('<div>').clone()
            _h.find('title').text('Repair List Report-Print View')
            _el.append(_h)
            _el.append(_p)
            start_loader();
            var nw = window.open('','_blank','width=1100,height=900,top=100,left=100')
                    nw.document.write(_el.html())
                    nw.document.close()
                    setTimeout(() => {
                        nw.print()
                        setTimeout(() => {
                            nw.close()
                            end_loader()
                        }, 300);
                    }, (700));
        })
	})
</script>