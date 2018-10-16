<?php
namespace App\libs\protobuf\type;
use App\libs\protobuf\type\PB_Scalar;
use App\libs\protobuf\type\PB_Int;
/**
 * @author Nikolai Kordulla
 */
class PBBool extends PB_Int {
	var $wired_type = PBMessage::WIRED_VARINT;

	/**
	 * Parses the message for this type
	 *
	 * @param array
	 */
	public function ParseFromArray()
	{
		$this->value = $this->reader->next();
		$this->value = ($this->value != 0) ? 1 : 0;
	}

}