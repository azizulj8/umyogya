<div class="clearfix">
</div>
<div class="row">
	<div class="col-md-12">
		<div class="portlet box green-haze">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-user"></i>Essays
				</div>
				<div style="float: right; margin: 6px;">
					<a href="<?=base_url('add_essay')?>" class="btn btn-default btn-sm"> Add New </a>
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
						<th>Title</th>
						<th>Topic</th>
						<th>Area</th>
						<th>Keyword</th>
						<th>File Name</th>
						<th>Action</th>
					</tr>
					</thead>
					<tbody>
					<?php
					$i=1;
					foreach ($dt_essay->result() as $row) {
					?>
					<tr>
						<td><?=$i++?></td>
						<td><?=$row->nim?></td>
						<td><?=$row->title?></td>
						<td><?=$row->topic?></td>
						<td><?=$row->area?></td>
						<td><?=$row->keyword?></td>
						<td><?=$row->file?></td>
						<td>
							<a href="<?=base_url('edit_essay/'.$row->id)?>"><i class="icon-edit"></i>Edit</a>&nbsp;
							<a href="<?=base_url('delete_essay/'.$row->id)?>" onclick="return confirm('Are you Sure?')"><i class="icon-dust"></i>Delete</a>
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