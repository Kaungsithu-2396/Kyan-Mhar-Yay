<?php 
    include '../template/doctor_panel.php';
    // include '../core/function.php'
   

?>

<div class="mx-3">
   <table class="table table-striped">
        <thead>
            <th>id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Created_at</th>
        </thead>
        <tbody>
            <?php 
                foreach(userLists()as $u){
            ?>
                <tr>
                    <td><?php echo $u['id'] ?></td>
                    <td><?php echo $u['Name'] ?></td>
                    <td><?php echo $u['Email'] ?></td>
                    <td><?php echo date("d-m-y",strtotime($u['created_at']))  ?></td>
                </tr>
            <?php 
            } ?>
        </tbody>
   </table>
   
</div>


<?php 

    include '../template/doctor_footer.php';

?>