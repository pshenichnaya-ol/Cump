<?php
function get_categories(){
	global $mysqli;
    $sql= 'SELECT * FROM name_lager';
    $result = mysqli_query($mysqli,$sql);
    $name_lager = mysqli_fetch_all($result,MYSQLI_ASSOC);
    echo mysqli_error($mysqli);
    return $name_lager;
}
?>

<?php
function get_zaezd($id){
	global $mysqli;
    
	$sql= "SELECT `name_lager`.*,`zaezd`.* FROM `name_lager` INNER JOIN `zaezd` ON `name_lager`.`id` = {$id} AND `name_lager`.`id` = `zaezd`.`id_lager`";
	
    $result = mysqli_query($mysqli,$sql);
    $zaezd = mysqli_fetch_all($result,MYSQLI_ASSOC);
    echo mysqli_error($mysqli);
    return $zaezd;
} ?>

<?php
function get_zaezd_by_id($id){
	global $mysqli;
    
	$sql= 'SELECT * FROM zaezd WHERE id='.$id;
	
    $result = mysqli_query($mysqli,$sql);
    $zaezd = mysqli_fetch_all($result,MYSQLI_ASSOC);
    echo mysqli_error($mysqli);
    return $zaezd;
} ?>







