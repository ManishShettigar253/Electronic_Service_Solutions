<div class="card card-outline card-primary">
	<div class="card-header">
		<h3 class="card-title">List of Repairs</h3>
		<div class="card-tools">
			<a href="./?page=repairs/manage_repair" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> Add New Repair</a>
		</div>
	</div>
	<div class="card-body">
		<div class="container-fluid">
        <div class="container-fluid">
			<table class="table table-hover table-striped table-bordered">
				<colgroup>
					<col width="5%">
					<col width="20%">
					<col width="20%">
					<col width="25%">
					<col width="20%">
					<col width="10%">
				</colgroup>
				<thead>
					<tr>
						<th>#</th>
						<th>Date Created</th>
						<th>Code</th>
						<th>Client</th>
						<th>Status</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$i = 1;
						$qry = $conn->query("SELECT r.*,CONCAT(c.lastname,', ',c.firstname,' ',c.middlename) as client from `repair_list` r inner join client_list c on r.client_id = c.id order by unix_timestamp(r.`date_created`) desc ");
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
							<td align="center">
								 <button type="button" class="btn btn-flat btn-default btn-sm dropdown-toggle dropdown-icon" data-toggle="dropdown">
				                  		Action
				                    <span class="sr-only">Toggle Dropdown</span>
				                  </button>
				                  <div class="dropdown-menu" role="menu">
				                    <a class="dropdown-item" href="./?page=repairs/view_details&id=<?php echo $row['id'] ?>" data-id=""><span class="fa fa-window-restore text-gray"></span> View</a>
				                    <div class="dropdown-divider"></div>
				                    <a class="dropdown-item" href="./?page=repairs/manage_repair&id=<?php echo $row['id'] ?>" data-id="<?php echo $row['id'] ?>"><span class="fa fa-edit text-primary"></span> Edit</a>
									<div class="dropdown-divider"></div>
				                    <a class="dropdown-item delete_data" href="javascript:void(0)" data-id="<?php echo $row['id'] ?>"><span class="fa fa-trash text-danger"></span> Delete</a>
				                  </div>
							</td>
						</tr>
					<?php endwhile; ?>
				</tbody>
			</table>
		</div>
		</div>
	</div>
</div>
<script>
	$(document).ready(function(){
		$('.delete_data').click(function(){
			_conf("Are you sure to delete this repair permanently?","delete_repair",[$(this).attr('data-id')])
		})
		$('.table td,.table th').addClass('py-1 px-2 align-middle')
		$('.table').dataTable({
            columnDefs: [
                { orderable: false, targets: 5 }
            ],
        });
	})
	
	function delete_repair($id){
		start_loader();
		$.ajax({
			url:_base_url_+"classes/Master.php?f=delete_repair",
			method:"POST",
			data:{id: $id},
			dataType:"json",
			error:err=>{
				console.log(err)
				alert_toast("An error occured.",'error');
				end_loader();
			},
			success:function(resp){
				if(typeof resp== 'object' && resp.status == 'success'){
					location.reload();
				}else{
					alert_toast("An error occured.",'error');
					end_loader();
				}
			}
		})
	}
</script>