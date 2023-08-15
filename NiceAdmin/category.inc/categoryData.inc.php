<?php include ('../database/dbConfig.inc.php');

    // include '../function.inc/function.inc.php';
		if(isset($_POST['cate_name'])){
			$catename = $conn->real_escape_string($_POST['cate_name']);
            $catetype = $conn->real_escape_string($_POST['cate_type']);
			$status = $conn->real_escape_string($_POST['cate_status']);
            $msg = '';
			if($catename != '' && $catetype != ""  &&   $status != '' ){

			     $cate_sql = " INSERT INTO `category_tbl`(`cate_name`,`cate_type`,`cate_status`)VALUES('$catename', '$catetype','$status') ";
				$mysql = $conn->query($cate_sql) or die("Sql not executed");
              
				if($mysql){
                        $arry [] = array(
							'message' => "data submited",
						    'status' => 'success'
						);
					$response = json_encode($arry);
					echo $response;

					}else{

						$arry [] = array(
							'message' => "data not submited",
						    'status' => 'faild'
						);
					$response = json_encode($arry);
					echo $response;
				}
			}
		}

?>


