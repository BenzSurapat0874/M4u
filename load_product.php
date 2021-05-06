<?php
header('Content-Type: text/html; charset=utf-8');
//fetch.php
$connect = mysqli_connect("localhost", "root", "123456789", "e-commerce");


 session_start(); 
	




if($_SESSION['UserID']!=""){
	if($_SESSION['status']=="ADMIN" && $_SESSION['num']  == 1  ){
		
		 $hid = "false"; 
	 }else $hid = "hidden";
}else $hid = "hidden";
	 
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
 SELECT * FROM polo
 WHERE Name LIKE '%".$search."%'
 OR Color LIKE '%".$search."%' 
 UNION
  SELECT *  FROM hat
  WHERE Name LIKE '%".$search."%'
  OR Color LIKE '%".$search."%' 
 UNION
  SELECT *  FROM apron
  WHERE Name LIKE '%".$search."%'
  OR Color LIKE '%".$search."%' 
  UNION
  SELECT *  FROM jacket
  WHERE Name LIKE '%".$search."%'
  OR Color LIKE '%".$search."%' 
 UNION
  SELECT *  FROM pants
  WHERE Name LIKE '%".$search."%'
  OR Color LIKE '%".$search."%' 
  UNION
  SELECT *  FROM sport
  WHERE Name LIKE '%".$search."%'
  OR Color LIKE '%".$search."%' 
 UNION
  SELECT *  FROM suits
  WHERE Name LIKE '%".$search."%'
  OR Color LIKE '%".$search."%' 
  UNION
  SELECT *  FROM tshirt
  WHERE Name LIKE '%".$search."%'
  OR Color LIKE '%".$search."%' 
 UNION
  SELECT *  FROM umbrella 
  WHERE Name LIKE '%".$search."%'
  OR Color LIKE '%".$search."%' 
  

 ";
}
else
{
 $query = "
 SELECT * FROM polo
UNION
 SELECT *  FROM hat
UNION
 SELECT *  FROM apron
 UNION
 SELECT *  FROM jacket
UNION
 SELECT *  FROM pants
 UNION
 SELECT *  FROM sport
UNION
 SELECT *  FROM suits
 UNION
 SELECT *  FROM tshirt
UNION
 SELECT *  FROM umbrella
 
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 while($row = mysqli_fetch_array($result))
 {
	
	 $img ="";
	 if($row['Img']=="")
	 {
		 $img="Avata.png";
	 }else
		 $img = $row['Img'];
  $output .= ' <div class="col-sm-4 >
				   <div class="cardTrainer" style="position:relative;
													max-width:270px;
													height:410px;
													background:;
													border-radius:15px;
													margin-right:50px;
													margin-left:50px;
													margin-bottom:30px ;
													padding:20px 5px;
													box-shadow:0 1px  5px;
													font-size: 14px;">'.
                '<div class="title">' .
                  '<h5>'. $row['Name'].'</h5>'.
					'<img src="./productimg/'.$img.'" style="width:180px; height: 200px"/><br><br>'.
 				 '</div>'. 
                  
					'<div class="pop" style="margin-top: 10px;">'.
					 '<button type="button" class="btn btn-info"   data-toggle="modal" data-target="#myModal'.
	  				$row['ID'].'"> ดูรายละเอียดเพิ่มเติม </button> '.
					 '<br><button type="button" class="btn btn-info btn-circle btn-lg" onclick="window.location.href=\'productEdit.php?TId='.$row['ID'].' \'" id="btnEdit" '.$hid.' >
					 <i class="far fa-edit"></i></button>'.
					'<button type="button" class="btn btn-danger btn-circle btn-lg" onclick="window.location.href=\'delete_edit_action.php?TId='.$row['ID'].' \'" id="btndelete" '.$hid.' ><i class="fas fa-eraser"></i></button>'.
				'</div>
			</div>'.
			'<div id="myModal'.$row['ID'].'" class="modal fade bd-example-modal-xl" role="dialog" >'.
					'<div class="modal-dialog modal-xl">'.
								'<div class="modal-content" style="width: 50%;
								height: 50%; top :100px; " >'.
									'<div class="modal-header">
										<div style="padding-left:150px;font-size:20px;font-weight:bold;">ข้อมูลสินค้า<br>
										<img src="./productimg/'. $row['Img'].'" style="width:200px;padding-top:10px;"/>
									</div>'.
	  									'<button type="button" class="close" data-dismiss="modal">&times;</button>'.
									'</div>'.
									'<div class="modal-body style =" color: blue;">'.
										'<table border="0" >'.
										'<tr style="padding-top:15px;  font-size: large;">'. 
											'<td style="font-weight: bold;  font-size: large;"> ชื่อ : </td>'.
												'<td style="font-weight: bold;  font-size: large;" >'. $row['Name'].'</td>	
										</tr>'.
										'<tr style="padding-top:30px; ">'.  
											'<td style="font-weight: bold;  font-size: large;" >คำอธิบาย : </td>'.
											 '<td style="font-weight: bold;  font-size: large;" >'.$row['Description'].'</td>
										</tr>'.
										''.
										'<tr style="padding-top:30px; ">' .
											'<td style="font-weight: bold;  font-size: large;">สี :</td>'.
											'<td style="font-weight: bold;  font-size: large;" >'. nl2br($row['Color']).'</td>
										</tr>'.
										'
										</table>'.	
									'</div>
								</div>
							</div>
						</div>'.
		'</div>';
							
		} 
 echo $output;
}
else
{
 echo '<h1>Data Not Found<h1><br><br><br><br><br><br><br>';
}

?>
