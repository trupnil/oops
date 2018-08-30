<?php
class QueryClass{
  public $Query;
  public function select($val)
  {
    $this->Query .= "SELECT $val";
    return $this;
  }
  public function from($fromval)
  {
    $this->Query .= " FROM $fromval";
    return $this;
  }
  public function where($where)
  {
    $this->Query .= " WHERE user_id = '$where'";
    return $this;
  }
}
$bmw = new QueryClass();
echo $tank = $bmw -> select('*') ->from('user') -> where('1')  Query;
?>