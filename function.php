<?php
class project_function
{
      private $con;

      function __construct()
      {
            $this->con = new mysqli("localhost", "root", "", "web_project");
      }
      function add_new_registration($no, $date, $ref, $first_name, $last_name, $sph, $cyl, $axis, $add_no, $model, $size, $color, $rs, $ps, $del_date)
      {
            echo $no, $date, $ref, $first_name, $last_name, $sph, $cyl, $axis, $add_no, $model, $size, $color, $rs, $ps, $del_date;
            $current_date = date("Y-m-d");
            $current_time = date("h:i:s a");
            if ($stmt = $this->con->prepare("INSERT INTO `registeration`( `no`, `date`, `ref`, `first_name`, `last_name`, `sph`, `cyl`, `axis`, `add_no`, `model`, `size`, `color`, `rs`, `ps`, `del_date`, `time`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)")) {
                  $stmt->bind_param("isssssssssssssss", $no, $date, $ref, $first_name, $last_name, $sph, $cyl, $axis, $add_no, $model, $size, $color, $rs, $ps, $current_date, $current_time);
                  if ($stmt->execute()) {
                        return true;
                  } else {
                        echo $stmt->error;
                  }
                  return false;
            }
      }
}
?>
