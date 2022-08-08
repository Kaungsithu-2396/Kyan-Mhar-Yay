<?php 
    include '../template/doctor_panel.php';
    include '../core/function.php'
   

?>

<?php 
    $id=$_GET['id'];
    $current=category($id);
    
    
    if(isset($_POST['UpdateCat'])){
        editCat();
    }
?>

<div class="mx-3">
    <form class="row" method="post">
        <div class="col-4">
        <input type="hidden" name="id" value="<?php echo $current['id'] ?>">
        <input type="text" class="form-control" name="title" value="<?php echo $current['Name'] ?>">
        </div>
        <button class="btn btn-primary px-5 py-2" name="UpdateCat">Update</button>
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