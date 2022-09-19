<?php



class Users {
    public function fetchAllUser(){
        $conn = conn();
        $sql = ("SELECT * FROM `accounts` ORDER BY `id` ASC");
        $data = $conn->query($sql);
        $users = [];
        if ($data->num_rows > 0) {
          $users = $data->fetch_all(MYSQLI_ASSOC);
          return(json_encode($users));
        }
        mysqli_close($conn);
      }
}
?>
