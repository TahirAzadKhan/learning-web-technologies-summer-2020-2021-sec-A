<?php
	
	require_once('db.php');


	function insertEmp($emp){
		$conn = getConnection();
		$sql = "insert into jobportal values('eid','{$emp['ename']}', '{$emp['cname']}', '{$emp['cno']}', '{$emp['uname']}', '{$emp['pass']}')";
		header('location: ../View/addRoom.php');
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function searchEmp($username){
		$conn = getConnection();
		$sql = "select * from jobportal where uname like '$uname%'";
		$result = mysqli_query($conn, $sql);
        
		$row = mysqli_fetch_assoc($result);

		return $row;
	}

	function getAllEmp(){
		$conn = getConnection();
		$sql = "select * from jobportal";
		$result = mysqli_query($conn, $sql);
		$emps = [];
		
		while ($row = mysqli_fetch_assoc($result)) {
			
			
			array_push($emps, $row);
			
		}
		
		return $emps;
	}

	function updateEmp($emp){
		$conn = getConnection();
		$sql = "update jobportal set eid='{$emp['eid']}',ename='{$emp['ename']}', cname='{$emp['cname']}', cno='{$emp['cno']}'	, uname='{$emp['uname']}', pass='{$emp['pass']}'
 where eid={$emp['eid']}";
		header('location: ../View/addRoom.php');
		if(mysqli_query($conn, $sql)){
			return true;
            header('location: ../View/addRoom.php');
		}else{
			return false;
            header('location: ../View/addRoom.php');
		}
         header('location: ../View/addRoom.php');
	}

	function deleteRoom($uname){
		$conn = getConnection();
		$sql = "delete from jobportal where uname='{$uname}'";
        header('location: ../view/addRoom.php');

		if(mysqli_query($conn, $sql)){
			return true;
            header('location: ../view/addRoom.php');
		}else{
			return false;
            header('location: ../view/addRoom.php');
		}
	}

?>