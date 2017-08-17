<div class="clearfix">
</div>
<div class="row">
	<div class="col-md-12">
		<div class="portlet box green-haze">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-user"></i>Scholars
				</div>
				<div style="float: right; margin: 6px;">
					<a href="<?=base_url('add_new_scholar')?>" class="btn btn-default btn-sm"> Add New </a>
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
						<th>NIM</th>
						<th>Name</th>
						<th>Study</th>
						<th>Competent</th>
						<th>address</th>
						<th>telp</th>
						<th>email</th>
						<th>action</th>
					</tr>
					</thead>
					<tbody>
					<?php
					$i=1;
					foreach ($dt_scholar->result() as $row) {
					?>
					<tr>
						<td><?=$i++?></td>
						<td><?=$row->nim?></td>
						<td><?=$row->fullname?></td>
						<td><?=$row->program?></td>
						<td><?=$row->komp?></td>
						<td><?=$row->address?></td>
						<td><?=$row->telp?></td>
						<td><?=$row->email?></td>
						<td>
							<a href="<?=base_url('edit_scholar/'.$row->nim)?>"><i class="icon-edit"></i>Edit</a>&nbsp;
							<a href="<?=base_url('delete_scholar/'.$row->nim)?>" onclick="return confirm('Are you Sure?')"><i class="icon-dust"></i>Delete</a>
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