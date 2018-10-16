<?php
namespace App\libs\protobuf;
use App\libs\protobuf\pb_message;
use App\libs\protobuf\type\pb_enum;
use App\libs\protobuf\type\Pbint;
use App\libs\protobuf\type\PB_Int;
//require_once "pb_message.php";

class RECHARGE_NOTI extends PB_Message
{
  var $wired_type = PB_Message::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    $this->fields["1"] = "Pbint";
    $this->values["1"] = "";
    $this->fields["2"] = "Modify_Atti";
    $this->values["2"] = array();
  }
  function UserID()
  {
    return $this->_get_value("1");
  }
  function set_UserID($value)
  {
    return $this->_set_value("1", $value);
  }
  function attrList($offset)
  {
    return $this->_get_arr_value("2", $offset);
  }
  function add_attrList()
  {
    return $this->_add_arr_value("2");
  }
  function set_attrList($index, $value)
  {
    $this->_set_arr_value("2", $index, $value);
  }
  function remove_last_attrList()
  {
    $this->_remove_last_arr_value("2");
  }
  function attrList_size()
  {
    return $this->_get_arr_size("2");
  }
}
class RECHARGE_NOTI_ACK extends PB_Message
{
  var $wired_type = PB_Message::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    $this->fields["1"] = "Pbint";
    $this->values["1"] = "";
    $this->fields["2"] = "Pbint";
    $this->values["2"] = "";
  }
  function UserID()
  {
    return $this->_get_value("1");
  }
  function set_UserID($value)
  {
    return $this->_set_value("1", $value);
  }
  function nRet()
  {
    return $this->_get_value("2");
  }
  function set_nRet($value)
  {
    return $this->_set_value("2", $value);
  }
}
