<?php

class crud{

private $db;
public function __construct($db){

	$this->db = $db;
}
public function getEId($eid){
		$stmt=$this->db->prepare("select * from user join s_exam on(user.eid=s_exam.eid) where eid=:eid");
		$stmt->execute(array(":eid"=>$eid));
		$editrow=$stmt->fetch(PDO::FETCH_ASSOC);
		return $editrow;

	}
	public function update($uid,$sts,$eid,$e_status){
		try{
			
			$stmt=$this->db->prepare("update s_exam set s_status=:sts where uid=:uid and eid=:eid");
			$stmt->bindparam(":uid",$uid);
			$stmt->bindparam(":sts",$sts);
			$stmt->bindparam(":eid",$eid);
			$stmt->execute();
			return true;
		
		
		}catch(Exception $e){
			echo $e->getMessage();
			return false;
		}
		
	}

public function delete($eid){
		$sts="1";
		$stmt = $this->db->prepare("update s_exam set s_status=:sts where eid=:eid");
		$stmt->bindparam(":eid",$eid);
		$stmt->bindparam(":sts",$sts);
		$stmt->execute();
		return true;
	}
	
	public function studentview($query){
	$stmt=$this->db->prepare($query);
	$stmt->execute();

	if($stmt->rowCount()>0){
		while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
			?>
			<tr>
			
			<td><?php if(isset($row['eid'])){print($row['eid']);}?></td>
			<td><?php if(isset($row['uid'])){print($row['uid']);}?></td>
			<td><?php if(isset($row['uname'])){print($row['uname']);}?></td>
			<td><?php if(isset($row['s_status'])){print($row['s_status']);}?></td>
			
		</tr>
		<?php
		}
	}
}

public function examview($query){
	$stmt=$this->db->prepare($query);
	$stmt->execute();

	if($stmt->rowCount()>0){
		while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
			?>
			<tr>
			
			<td><?php if(isset($row['eid'])){print($row['eid']);}?></td>
			<td><?php if(isset($row['date'])){print($row['date']);}?></td>
			<td><?php if(isset($row['duration'])){print($row['duration']);}?></td>
			<td><?php if(isset($row['noq'])){print($row['noq']);}?></td>
			<td><?php if(isset($row['e_status'])){
				$sts=$row['e_status'];
				if($sts=="1"){
					$ns="Enabled";
					print($ns);
				}
				else{
					$ns="Disabled";
					print($ns);	
				}
			}
			?></td>
			<td><a href="AdminExamStuds.php?eid=<?php echo $row['eid'];?>">View Students</a></td>
			<td><a href="AdminExamQues.php?eid=<?php echo $row['eid'];?>">View Questions</td>
			<td>View Report</td>
			<td><?php if(isset($row['e_status'])){
				$sts=$row['e_status'];
				if($sts=="1"){
					?>
					<a onclick="return confirm('Do you want to continue?')" href="AdminDisableExam.php?eid=<?php echo $row['eid']?>" name="btn-enable" class='btn btn-danger'>Disable</a></td> 
				<?php
				}
				else if($sts=="0"){
					?>
					<a onclick="return confirm('Do you want to continue?')" href="AdminEnableExam.php?eid=<?php echo $row['eid']?>" name="btn-enable" class='btn btn-success'>Enable</a></td> 
					<?php
				}
			}
			?></td>
				 
			<td>
				<?php if($row['duration']==0|$row['noq']==0|$row['date']=='0000-00-00'){
					?>
					<a onclick="return confirm('Do you want to continue?')" href="#?eid=<?php echo $row['eid'];?>" name="btn-schedule" class='btn btn-default'>Schedule</a></td> 
				<?php
				}
				else {
					?>
					<a onclick="return confirm('Do you want to continue?')" href="#?eid=<?php echo $row['eid'];?>" name="btn-schedule" class='btn btn-default'>Re-schedule</a></td> 
					<?php
				
			}
			?></td>
		</tr>
		<?php
		}
	}
  }
}
?>

