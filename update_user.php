<?php
$title = "view User";
session_start();
require 'header.php';
$qry = "Select * from user_info";
$user_info = mysql_query($qry) or die(mysql_error());
?>

<div class="containner">
    <div class="row">
        <div class="col-sm-2">

        </div>
        <div class="col-sm-10" id='show_pro'>
            <div class="row">
                
                    <table >
                        <tr>
                            <th>
                                <label for="user_id">User id </label>
                            </th>
                            <th>

                            </th>
                            <th>
                                <label for="user_name">User Name </label>
                            </th>
                            <th>

                            </th>
                            <th>
                                <label for="gender">Gender</label>
                            </th>
                            <th>

                            </th>
                            <th>
                                <label for="contact">Contact</label>
                            </th>
                        </tr>
                        <?php while ($result = mysql_fetch_array($user_info)) {
                            ?>

                            <tr>
                                <td>
                                    <?php echo $result['user_id']; ?> 
                                </td>
                                <td>
                                </td>
                                <td>
                                    <?php echo $result['user_first_name'] . " " . $result['user_mid_name'] . " " . $result['user_last_name']; ?>
                                </td>
                                <td>
                                </td>
                                <td>
                                    <?php echo $result['user_gender']; ?>
                                </td>
                                <td>
                                </td>
                                <td>
                                    <?php echo $result['user_contact']; ?>
                                </td>
                                <td> 
                                    <button class="btn-submit" style="width:100%">Edit</button>
                                </td>
                                <td>
                                    <button class="btn-submit" style="width:100%">Update</button>
                                </td>
                                <td>
                                    <button class="btn-submit" style="width:100%">Block</button>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </table>
                </div>
       </div>
    </div>      
</div>

<?php require 'footer.php'; ?>
