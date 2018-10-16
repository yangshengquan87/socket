<?php
namespace App\libs\protobuf\type;
use App\libs\protobuf\pb_message;
/**
 * @author Nikolai Kordulla
 */
class Pb_scalar extends PB_Message
{
	
	/**
	 * Set scalar value
	 */
	public function set_value($value)
	{	
		$this->value = $value;	
	}

	/**
	 * Get the scalar value
	 */
	public function get_value()
	{
		return $this->value;
	}
}