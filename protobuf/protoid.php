<?php
namespace App\libs\protobuf;
use App\libs\protobuf\pb_message;
use App\libs\protobuf\type\pb_enum;
use App\libs\protobuf\type\Pbint;
use App\libs\protobuf\type\PB_Int;
//require_once "pb_message.php";

class protoID extends PB_Enum{
  const RECHARGE_NOTI_ID  = 1;
  const RECHARGE_NOTI_ACK_ID  = 2;
}