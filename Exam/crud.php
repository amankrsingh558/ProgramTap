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
	public function update($uid,$sts,$eid){
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

	public function ques($query){
		$stmt=$this->db->prepare($query);
		$stmt->execute();
		?>
		<tbody>
			<?php

			if($stmt->rowCount()>0){

				while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
					$eid=$row['eid'];

					$stmt1=$this->db->prepare("SELECT count(qid) from mcq where eid=:eid");
					$stmt1->bindparam(":eid",$eid);
					$stmt1->execute();
					$n1= $stmt1->fetchColumn();				
					$rem=$row['noq']-$n1;
					$sts=0;
					$stmt2=$this->db->prepare("SELECT * from s_exam where eid=:eid");
					$stmt2->bindparam(":eid",$eid);
					$stmt2->execute();
					if($stmt2->rowCount()>0){

						while($row=$stmt2->fetch(PDO::FETCH_ASSOC)){
							$sts=$row['e_status'];
						}
					}
					else{
						$sts=0;
					}
					

					?>
					<tr>

						<td><?php if(isset($row['ename'])){print($row['ename']);}?></td>
						<td><?php if(isset($row['eid'])){
									$str=$row['eid'];
									if($str[0]=='p')
									{
										$ns="Practical";
										print($ns);

									}
									else if($str[0]=='e'){
											$ns="Theory";
										print($ns);
									}
								}
									?>
								</td>
						<td><?php if(isset($row['date'])){print($row['date']);}?></td>
						
						<td><?php if(isset($row['noq'])){print($n1."/".$row['noq']);}?></td>
						<td><?php if(isset($row['noq'])){
							$noq=$row['noq'];
							
                            $_SESSION['eid']=$row['eid'];
							if($n1<$noq && $sts==0){
								?>
									<a href="/ProgramTap/Question/addNewSet.php?val=<?php echo $row['eid'];?>&ad=1" name="btn-add" class='btn btn-success'>Add</a>
									<?php
								}
							else if($n1==$noq && $sts==0){
								?>
									<a onclick="return confirm('All Questions added')" href="Questions.php" name="btn-add" class='btn btn-success'>Add</a> 
									<?php
								}								
							else if($sts==1){
								?>
									<a onclick="return confirm('All Questions added')" href="Questions.php" name="btn-add" class='btn btn-default'>Add</a> 
									<?php
							}
						}
						?></td>
						<td><?php if(isset($row['noq'])){
							$noq=$row['noq'];
							
							if($n1<$noq && $sts==0){
								?>
									<a href="/ProgramTap/Question/viewQuestions.php?val=<?php echo $row['eid'];?>&ad=1" name="btn-edit" class='btn btn-warning'>Edit</a>
									<?php
								}
							else if($n1==$noq && $sts==0){
								?>
									<a href="/ProgramTap/Question/viewQuestions.php?val=<?php echo $row['eid'];?>&ad=1" name="btn-edit" class='btn btn-warning'>Edit</a> 
									<?php
								}

								else if($sts==1){
								?>
									<a onclick="return confirm('Exam Enabled.Not permitted to make any changes')" href="AddQuestions.php" name="btn-edit" class='btn btn-default'>Edit</a> 
									<?php
								}
							
						}
						?></td>
							<td><?php if(isset($row['noq'])){
							$noq=$row['noq'];
							
							if($n1<$noq && $sts==0){
								?>
									<a href="/ProgramTap/Exam/firstcopy.php?eid=<?php echo $row['eid'];?>&ne=<?php echo $n1;?>" name="btn-edit" class='btn btn-primary'>Copy</a>
									<?php
								}
							

								else if($n1==$noq && $sts==0){
								?>
									<a onclick="return confirm('All questions added.Try editing.')" href="Questions.php" name="btn-edit" class='btn btn-primary'>Copy</a> 
									<?php
								}
								else if($sts==1){
								?>
									<a onclick="return confirm('Exam Enabled.Not permitted to make any changes')" href="Questions.php" name="btn-edit" class='btn btn-default'>Copy</a> 
									<?php
								}
							
						}
						?></td>
							</tr>
							<?php
						}
						}
						?>
					</tbody>
					<?php
				
			}











			public function examview($query){
				$stmt=$this->db->prepare($query);
				$stmt->execute();
				?>
				<tbody>
					<?php

					if($stmt->rowCount()>0){

						while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
							?>
							<tr>

								<td><?php if(isset($row['ename'])){print($row['ename']);}?></td>
								<td><?php if(isset($row['eid'])){
									$str=$row['eid'];
									if($str[0]=='p')
									{
										$ns="Practical";
										print($ns);

									}
									else if($str[0]=='e'){
											$ns="Theory";
										print($ns);
									}
								}
									?>
								</td>
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
								<td><a href="/ProgramTap/Question/viewQuestions.php?val=<?php echo $row['eid'];?>&ad=1">View Questions</td>
									<!--<td>View Report</td>-->
									<td><?php if(isset($row['e_status'])){
										$sts=$row['e_status'];
										if($sts=="1"){
											?>
											<a onclick="return confirm('Do you want to continue?')" href="AdminDisableExam.php?eid=<?php echo $row['eid']?>" name="btn-enable" class='btn btn-danger'>Disable</a>
											<?php
										}
										else if($sts=="0"){
											?>
											<a onclick="return confirm('Do you want to continue?')" href="AdminEnableExam.php?eid=<?php echo $row['eid']?>" name="btn-enable" class='btn btn-success'>Enable</a> 
											<?php
										}
									}
									?></td>

									<!--<td>-->
								<?/*php if($row['duration']==0|$row['noq']==0|$row['date']=='0000-00-00'){
									*/?>
									<!--<a onclick="return confirm('Do you want to continue?')" href="#?eid=<?php /*echo $row['eid'];*/?>" name="1btn-schedule" class='btn btn-default'>Schedule</a>
									<?/*php
								}
								else {*/
									?>
									<!--<a onclick="return confirm('Do you want to continue?')" href="#?eid=<?php /*echo $row['eid'];*/?>" name="btn-schedule" class='btn btn-default'>Re-schedule</a> -->
									<?/*php

								}*/
								?><!--</td>-->
							</tr>
							<?php
						}
						?>
					</tbody>
					<?php
				}
			}
		}
		?>

