<?php 
global $bid;
$bid = $_GET['bid'];
class Model{
private $db;
function __construct(){
$this->db=new PDO('mysql:host=localhost;dbname=eventshap;charset=utf8mb4', 'root', '');
}
function fetch_products(){
$data=[];
$stmt=$this->db->prepare('select * from event_booking where book_id='$bid'');
        $stmt->execute();
        if($stmt->rowCount()>0) {
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                array_push($data, $row);
            }
        }
        return $data;
}
}

?>