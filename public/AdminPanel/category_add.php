<?php 
    include '../template/doctor_panel.php';
    // include '../core/function.php'
   

?>

<?php 
    if(isset($_POST['addCat'])){
        category_add();
    }
?>

<div class="mx-3">
    <form class="row" method="post">
        <div class="col-4">
        <input type="text" class="form-control" name="Category" >
        </div>
        <button class="btn btn-primary px-5 py-2" name="addCat">Add</button>
    </form>
   
    <table class="table table-striped  mt-4">
       <tr>
            <th>Id</th>
            <th>Category</th>
            <th>Created_at</th>
            <th>Control</th>
       </tr>
      
       <tbody class="">
       <?php 
            foreach( categories() as $c){
        ?>
            <tr>
                <td><?php echo $c['id']; ?></td>
                <td><?php echo $c['Name']; ?></td>
                <td><?php echo date("d-m-y", strtotime($c['created_at']) ) ?></td>
                <td class="text-nowrap">
                    <a href="deleteCat.php?id=<?php echo $c['id']; ?>" class="btn btn-primary">Delete</a>
                    <a href="editCat.php?id=<?php echo $c['id'] ?>" class="btn btn-warning ">Update</a>
                </td>
            </tr>
         <?php 
        }
        ?>
       </tbody>
    </table>
   
</div>
      


<?php 

    include '../template/doctor_footer.php';

?>