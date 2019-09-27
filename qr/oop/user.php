<?php
require "DB.php";
include "../../phpqrcode/qrlib.php";
/**
 * 
 */
class Famer extends DataBase
{
	private $db;
	function __construct(){
		parent::__construct("qrcade","root","");
		$this->db=$this->db_org;
	}

	public function getCountsProc(){
		$sql=$this->db->prepare("SELECT * FROM product");
		return $sql->rowCount();
	}

	public function AddProduect($phone,$pro,$iss){
		$count=(int)$this->getCountsProc();
		$sql=$this->db->prepare("INSERT INTO product (user,product,iss,qrCode,photo_path)VALUES (?,?,?,?,?)");
		++$count;
		$qr=$this->GenerateQr($pro,$count);
		if($sql->execute(array($phone,$pro,$iss,$qr,""))){

		}
		else{

		}
	}

	public function GenerateQr($proc,$id){
     if(QRcode::png("www.ksa.com","../qrcods/".$id.$proc."jpg","H","10","10")){
     	return "../qrcods/".$id.$proc."jpg";
     }
     else "null";
	}

	public function displayAllData($user){
		$sql=$this->db->prepare("SELECT * FROM product WHERE user=?");
		$sql->execute(array($user));
		return $user;
	}

	public function getProdect($id){
		$sql=$this->db->prepare("SELECT * FROM product WHERE id_proc=?");
		$sql->execute(array($id));
		return $sql;
	}
}

$fa =new Famer();
$fa->AddProduect("05555555","tt","8-9-9");