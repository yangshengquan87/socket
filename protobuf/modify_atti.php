<?php
namespace App\libs\protobuf;
use App\libs\protobuf\pb_message;
use App\libs\protobuf\type\pb_enum;
use App\libs\protobuf\type\Pbint;
use App\libs\protobuf\type\PB_Int;
//require_once "pb_message.php";
class Modify_Atti extends PB_Message{
  var $wired_type = PB_Message::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    $this->fields["1"] = "Pbstring";
    $this->values["1"] = "";
    $this->fields["2"] = "Pbint";
    $this->values["2"] = "";
  }
  function Value()
  {
    return $this->_get_value("1");
  }
  function set_Value($value)
  {
    return $this->_set_value("1", $value);
  }
  function Type()
  {
    return $this->_get_value("2");
  }
  function set_Type($value)
  {
    return $this->_set_value("2", $value);
  }
}
