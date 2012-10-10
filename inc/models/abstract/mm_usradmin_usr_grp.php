<?
class models_abstract_mm_usradmin_usr_grp extends model
{
	var $_fields = array();
	var $_table = 'mm_usradmin_usr_grp';

	function local_id($d=null)
	{
		if($d !== null)
		{
			if(!$this->_valid($d,'int',10))
			{
				return false;
			}
			$this->_fields['local_id'] = $d;
			return true;
		}
		return $this->_fields['local_id'];
	}

	function foreign_id($d=null)
	{
		if($d !== null)
		{
			if(!$this->_valid($d,'int',10))
			{
				return false;
			}
			$this->_fields['foreign_id'] = $d;
			return true;
		}
		return $this->_fields['foreign_id'];
	}
}
?>