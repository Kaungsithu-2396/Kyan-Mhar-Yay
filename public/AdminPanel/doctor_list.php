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
            <th>Category</th>
            <th>Control</th>
            <th>image</th>
        </thead>
        <tbody>
            <?php 
                foreach(doctors()as $d){
            ?>
                <tr>
                    <td><?php echo $d['id'] ?></td>
                    <td><?php echo $d['Name'] ?></td>
                    <td><?php echo $d['Email'] ?></td>
                    <td><?php echo category($d['Category_id'])['Name']  ?></td>
                    
                    <td class="text-nowrap">
                    <a href="doctor_delete.php?id=<?php echo $d['id']; ?>" class="btn btn-primary">Delete</a>
                    <a href="doctor_edit.php?id=<?php echo $d['id'] ?>" class="btn btn-warning ">Update</a>
                    </td>
                    <td>
                        <img src="doctor_img/<?php echo $d['photo'] ?>" width="100px"  alt="">
                    </td>
                
                </tr>
            <?php 
            } ?>
        </tbody>
   </table>
   
</div>


<?php 

    include '../template/doctor_footer.php';

?>