<?



final class literal extends field{

	function view(){
		return stripslashes($this->value);
	}
	function bake_field (){
		return "<input  type=\"text\" class='span5' name=\"".$this->fieldname."\" id=\"".$this->fieldname."\" value=\"".$this->value."\">";

		

						
	}
		
	function exec_add () {
	
		if ($this->value == -1) return '';
//		return $this->value;
return addslashes(htmlentities($this->value));

	}
	function exec_edit () {
//	return $this->value;
			if ($this->value == -1) return '';
	return addslashes(htmlentities($this->value));
	}

}

