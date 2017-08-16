<div class="clearfix">
</div>
<div class="row">
	<div class="col-md-12">
		<div class="portlet box green-haze">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-user"></i>BUJS Forms List
				</div>
				<div style="float: right; margin: 6px;">
					<a href="<?=base_url('add_form')?>" class="btn btn-default btn-sm"> Add New </a>
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
						<th>Title</th>
						<th>File Name</th>
						<th>Created Date</th>
						<th>Status</th>
						<th>Action</th>
					</tr>
					</thead>
					<tbody>
					<?php
					$i=1;
					foreach ($dt_bujs->result() as $row) {
					?>
					<tr>
						<td><?=$i++?></td>
						<td><?=$row->title?></td>
						<td><?=$row->filename?></td>
						<td><?=$row->created_date?></td>
						<td><?=$row->status?></td>
						<td>
							<a href=""><i class="icon-edit"></i>Edit</a>&nbsp;
							<a href=""><i class="icon-dust"></i>Delete</a>
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