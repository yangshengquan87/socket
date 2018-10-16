<?php
namespace App\libs\protobuf\type;
use App\libs\protobuf\type\pb_scalar;
/**
 * @author Nikolai Kordulla
 */
class PB_Enum extends PB_Scalar{
	var $wired_type = PBMessage::WIRED_VARINT;

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