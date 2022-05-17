<?php 

/**
 * SharedController Controller
 * @category  Controller / Model
 */
class SharedController extends BaseController{
	
	/**
     * barang_masuk_divisi_option_list Model Action
     * @return array
     */
	function barang_masuk_divisi_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT DISTINCT role_id AS value , role_name AS label FROM roles ORDER BY label ASC";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * user_username_value_exist Model Action
     * @return array
     */
	function user_username_value_exist($val){
		$db = $this->GetModel();
		$db->where("username", $val);
		$exist = $db->has("user");
		return $exist;
	}

	/**
     * user_email_value_exist Model Action
     * @return array
     */
	function user_email_value_exist($val){
		$db = $this->GetModel();
		$db->where("email", $val);
		$exist = $db->has("user");
		return $exist;
	}

	/**
     * user_user_role_id_value_exist Model Action
     * @return array
     */
	function user_user_role_id_value_exist($val){
		$db = $this->GetModel();
		$db->where("user_role_id", $val);
		$exist = $db->has("user");
		return $exist;
	}

	/**
     * user_user_role_id_option_list Model Action
     * @return array
     */
	function user_user_role_id_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT role_id AS value, role_name AS label FROM roles";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * peminjaman_barang_option_list Model Action
     * @return array
     */
	function peminjaman_barang_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT DISTINCT id_stok AS value , nama_barang AS label FROM stok_barang ORDER BY label ASC";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * getcount_stokbarang Model Action
     * @return Value
     */
	function getcount_stokbarang(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM stok_barang";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_divisi Model Action
     * @return Value
     */
	function getcount_divisi(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM divisi";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_barangmasuk Model Action
     * @return Value
     */
	function getcount_barangmasuk(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM barang_masuk";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_peminjaman Model Action
     * @return Value
     */
	function getcount_peminjaman(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM peminjaman";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

}
