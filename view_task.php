<?php 
include 'db_connect.php';
if(isset($_GET['id'])){
	$qry = $conn->query("SELECT * FROM task_list where id = ".$_GET['id'])->fetch_array();
	foreach($qry as $k => $v){
		$$k = $v;
	}
}
?>
<d class="container-fluid">
	<dl>
		<dt><b class="border-bottom border-primary">Task</b></dt>
		<dd><?php echo ucwords($task) ?></dd>
	</dl>
	<dl>
		<dt><b class="border-bottom border-primary">Status</b></dt>
		<dd>
			<?php 
        	if($status == 1){
		  		echo "<span class='badge badge-secondary'>Pending</span>";
        	}elseif($status == 2){
		  		echo "<span class='badge badge-primary'>On-Progress</span>";
        	}elseif($status == 3){
		  		echo "<span class='badge badge-success'>Done</span>";
        	}
        	?>
		</dd>
	</dl>
	<dl>
		<dt><b class="border-bottom border-primary">Description</b></dt>
		<dd><?php echo html_entity_decode($description) ?></dd>
	</dl>
	
	<dl>
		<dt><b class="border-bottom border-primary">Assign To</b></dt>
		<dd><?php echo html_entity_decode($Assign_to) ?></dd>
	</dl>
	
	<dl>
	<dt><b class="border-bottom border-primary">Estimate Time</b></dt>
	<dd><?php echo html_entity_decode($Estimate_time) ?></dd>
    </dl>
	<dl>
	<dt><b class="border-bottom border-primary">Dep User Id</b></dt>
	<dd><?php echo html_entity_decode($Dep_User_id) ?></dd>
    </dl>
	<dl>
	<dt><b class="border-bottom border-primary">Dep_task_Id</b></dt>
	<dd><?php echo html_entity_decode($Dep_Task_id) ?></dd>
    </dl>

</div>

