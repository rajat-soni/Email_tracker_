<?php include ('../database/dbConfig.inc.php');

    // include '../function.inc/function.inc.php';
		if(isset($_POST['cate_name'])){
			$catename = $conn->real_escape_string($_POST['cate_name']);
            $catetype = $conn->real_escape_string($_POST['cate_type']);
			$status = $conn->real_escape_string($_POST['cate_status']);
            $msg = '';
			if($catename != '' && $catetype != ""  &&   $status != '' ){

			    echo $cate_sql = " INSERT INTO `category_tbl`(`cate_name`,`cate_type`,`cate_status`)VALUES('$catename', '$catetype','$status') ";
				$mysql = $conn->query($cate_sql) or die("Sql not executed");
              
				if($mysql){
                        
					echo 1;
					}else{
					echo  0;
				}
			}
		}

?>


