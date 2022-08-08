<?php 
    include '../template/doctor_panel.php';
    // include '../core/function.php'
   

?>

<div class="mx-3">

<div class="row">
    <div class=" col-12 col-md-7">
        <?php 


            $id=$_GET['id'];
            $current=doctor($id);
            if(isset($_POST['Update_btn'])){
                doctorEdit();
            }
        ?>
       
    <form  method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <label for="" class="form-label">Name</label>
        <input type="text" name="name" value="<?php echo $current['Name'] ?>" class="form-control">
        <label for="">Email</label>
        <input type="email" name="email" class="form-control" value="<?php echo $current['Email'] ?>">
        <label for="formFile" class="form-label">Photo</label>
        <input type="file" class="form-control"  name="photo"  value="<?php echo $current['photo'] ?>">
        <label for="">Choose Category</label>
        <select name="cat_id" id="" class="form-control">
            <?php 
                foreach (categories()as $c){
            ?>
            <option value="<?php echo $c['id'] ?>" <?php echo $c['id']==$current['Category_id']? "selected":"" ?>>  <?php echo $c["Name"] ?></option>
            <?php 
                }
            ?>
        </select>
        <button class="btn btn-warning mt-4" name="Update_btn">Register</button>
            
</div>
    </form>
    </div>
   
    </div>
</div>

   
</div>


<?php 

    include '../template/doctor_footer.php';

?>