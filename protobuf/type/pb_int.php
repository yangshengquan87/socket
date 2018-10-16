<?php
namespace App\libs\protobuf\type;
use App\libs\protobuf\type\pb_scalar;
use App\libs\protobuf\pb_message;
/**
 * @author Nikolai Kordulla
 */
class PB_Int extends PB_Scalar
{
	var $wired_type = PB_Message::WIRED_VARINT;

	/**
	 * Parses the message for this type
	 *
	 * @param array
	 */
	public function ParseFromArray()
	{
		$this->value = $this->reader->next();
	}

	/**
	 * Serializes type
	 */
	public function SerializeToString($rec=-1)
	{
		// first byte is length byte
		$string = '';

		if ($rec > -1)
		{
			$string .= $this->base128->set_value($rec << 3 | $this->wired_type);
		}

		$value = $this->base128->set_value($this->value);
		$string .= $value;

		return $string;
	}
}