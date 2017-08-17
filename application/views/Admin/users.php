<div class="clearfix">
</div>
<div class="row">
	<div class="col-md-12">
		<div class="portlet box green-haze">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-user"></i>User List
				</div>
				<div style="float: right; margin: 6px;">
					<a href="<?=base_url('add_users')?>" class="btn btn-default btn-sm"> Add New </a>
<!-- 				<div class="tools">
					<a href="javascript:;" class="collapse">
					</a>
					<a href="#portlet-config" data-toggle="modal" class="config">
					</a>
					<a href="javascript:;" class="reload">
					</a>
					<a href="javascript:;" class="remove">
					</a>
-->
				</div> 
			</div>
			<div class="portlet-body">
				<table class="table table-striped table-hover" id="sample_5">
					<thead>
					<tr>
						<th>No</th>
						<th>Username</th>
						<th>Avatar</th>
						<th>Status</th>
						<th>Last Login</th>
						<th>Created</th>
						<th>Action</th>
					</tr>
					</thead>
					<tbody>
					<?php
					$i=1;
					foreach ($dt_user->result() as $row) {
					?>
					<tr>
						<td><?=$i++?></td>
						<td><?=$row->username?></td>
						<td><?=$row->avatar?></td>
						<td><?=$row->status?></td>
						<td><?=$row->last_login?></td>
						<td><?=$row->create_date?></td>
						<td>
							<a href="<?=base_url('edit_user/'.$row->username)?>"><i class="icon-edit"></i>Edit</a>&nbsp;
							<a href="<?=base_url('delete_user/'.$row->username)?>" onclick="return confirm('Are you Sure?')"><i class="icon-dust"></i>Delete</a>
						</td>
					</tr>
					<?php
					}
					?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>