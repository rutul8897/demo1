<?php
class database
{
	public function myconnection()
	{	
		$con=MYSQL_connect('localhost','root','');
		MYSQL_select_db('db1',$con);
		return $con;
	}
	public function cat_displaybycount()
	{
		$res=MYSQL_query('select count(p.pro_id)"count",c.cat_id,c.cat_name from cat_tbl as c,product_tbl as p where p.fk_cat_id=c.cat_id group by c.cat_name',$this->myconnection());
		return $res;
	}
	public function displayprobycat($id)
	{
		$res=MYSQL_query("select * from product_tbl where fk_cat_id='$id'",$this->myconnection());
		return $res;
	}
	public function cat_display()
	{
		$res=MYSQL_query("select * from cat_tbl",$this->myconnection());
		return $res;
	}
	
	public function pro_display()
	{
		$res=MYSQL_query("select p.*,c.* from product_tbl  as p ,cat_tbl as c where p.fk_cat_id=c.cat_id ",$this->myconnection());
		return $res;
	}
		public function pro_displaykart($id)
	{
		$res=MYSQL_query("select * from product_tbl where pro_id='$id'",$this->myconnection());
		return $res;
	}
		
	public function addtokart($amt,$date,$email_id,$id,$qty,$flag)
	{

		$res=mysql_query("insert into oreder_tbl values('NULL','$amt','$date','$id','$email_id','$qty','$flag')");
		return $res;
	}
	public function pro_add($query)
	{
		
		$res=mysql_query($query,$this->myconnection());
		
		return $res;
		
	}
	public function pro_delete($pid)
	{
		
		$res=mysql_query("delete from product_tbl where pro_id='$pid'",$this->myconnection());
		
		return $res;
		
	}
	public function pro_update($pid)
	{
		
		$res=mysql_query("select * from product_tbl where pro_id='$pid'",$this->myconnection());
		
		return $res;
		
	}
	public function cat_update($cat_id)
	{
		
		$res=mysql_query("select * from cat_tbl where cat_id='$cat_id'",$this->myconnection());
		
		return $res;
		
	}
	public function cat_add($cat_name)
	{
		
		$res=MYSQL_query("insert into cat_tbl values(null,'$cat_name')",$this->myconnection());
		//$cnt=mysql_num_rows($res);
		return $res;
		
	}
	public function cat_delete($cat_id)
	{
		
		$res=mysql_query("delete from cat_tbl where cat_id='$cat_id'",$this->myconnection());
		
		return $res;
		
	}
	public function kartdelete($oid)
	{
		
		$res=mysql_query("delete from oreder_tbl where o_id='$oid'",$this->myconnection());
		
		return $res;
		
	}
	public function usera_display()
	{
		$res=MYSQL_query("select * from user_tbl",$this->myconnection());
		return $res;
	}
	public function checkkart($email_id,$id)

	{
		$res=mysql_query("select * from oreder_tbl where fk_email_id='$email_id' and fk_pro_id='$id' and flg='kart'",$this->myconnection());

		   return mysql_num_rows($res);

	}
	public function history($email_id)

	{
		
		$res=mysql_query("select o.*,p.* from oreder_tbl as o, product_tbl as p where fk_pro_id=pro_id and fk_email_id='$email_id' and flg='buy'",$this->myconnection());
		 return $res;
	}
	public function viewkart1($email_id,$flag)

	{
		$res=mysql_query("select o.*,p.* from oreder_tbl as o, product_tbl as p where fk_pro_id=pro_id and fk_email_id='$email_id' and flg='$flag'",$this->myconnection());
		 return $res;
	}

	public function payment($email_id)
	{
		$res=mysql_query("select sum(amt)'amount'  from oreder_tbl  where fk_email_id='$email_id' and flg='kart'",$this->myconnection());
		return $res;
	}

	public function finalpay($email_id)
	{

		$res=mysql_query("update oreder_tbl set flg='buy' where fk_email_id='$email_id'",$this->myconnection());
		return $res;
	}

	public function multiprodele($all)
	{
		
		$res=mysql_query("delete from product_tbl where pro_id IN('$all')",$this->myconnection());
		
		return $res;
		
	}

	public function multiuserdele($all)
	{
		
		$res=mysql_query("delete from user_tbl where email_id IN('$all')",$this->myconnection());
		
		return $res;
		
	}

	public function multicatdele($all)
	{
		
		$res=mysql_query("delete from cat_tbl where cat_id IN('$all')",$this->myconnection());
		
		return $res;
		
	}
}

?>