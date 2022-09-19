<?php
 require_once 'conn.php';


class Users {
    public function fetchAllUser(){
        $conn = conn();
        $sql = ("SELECT * FROM `accounts` ORDER BY `id` ASC");
        $data = $conn->query($sql);
        $users = [];
        if ($data->num_rows > 0) {
          $users = $data->fetch_all(MYSQLI_ASSOC);
          return $users;
        }
    }

  public function displayUsers($data){
    foreach ($data as $user) {
        ?>
        <tbody>
        <tr>
            <td><?php echo $user['id']; ?></td>
            <td><?php echo $user['studentID']; ?></td>
            <td><?php echo $user['firstName']; ?></td>
            <td><?php echo $user['middleName']; ?></td>
            <td><?php echo $user['lastName']; ?></td>
            <td><?php echo $user['profile_pic']; ?></td>
            <td><?php echo $user['pdf_file']; ?></td>
            <td>
                <button class="btn1 btn-md" >View</button>
                <a href="#deleteQuery.php" class="btn btn-md" >Delete</a>
            </td>
        </tr>
        </tbody>

        <?php
    }
  }
}
?>
