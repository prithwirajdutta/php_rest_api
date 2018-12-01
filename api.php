<?php
$con = mysqli_connect("localhost","root","","test");
$res['records']=array();
$query="select * from testingtb";
$result = mysqli_query($con,$query);
while($row=mysqli_fetch_array($result)){
    $a=array(
        "id"=>$row['id'],
        "name"=>$row['name']
    );
    array_push($res['records'],$a);
}
echo json_encode($res);
?>