<?php 
    include '../template/doctor_panel.php';
    // include '../core/function.php'
   

?>

<div class="mx-3">

<div class="row">
    <div class=" col-12 col-md-7">
        <?php 
            if(isset($_POST['reg_btn'])){
                doctorRegister();
            }
        ?>
       
    <form  method="post" enctype="multipart/form-data">
        <label for="" class="form-label">Name</label>
        <input type="text" name="name" class="form-control">
        <label for="">Email</label>
        <input type="email" name="email" class="form-control">
        <label for="formFile" class="form-label">Photo</label>
        <input type="file" class="form-control"  accept="jpg" name="photo">
        <label for="">Password</label>
        <input type="password" name="password" class="form-control">
        <label for="">Confirm Password</label>
        <input type="password" name="cf_pw" id="" class="form-control">
        <label for="">Choose Category</label>
        <select name="cat_id" id="" class="form-control">
            <?php 
                foreach (categories()as $c){
            ?>
            <option value="<?php echo $c['id'] ?>"><?php echo $c['Name'] ?></option>
            <?php 
                }
            ?>
        </select>
        <button class="btn btn-warning mt-4" name="reg_btn">Register</button>
            
</div>
    </form>
    </div>
   
    </div>
</div>

   
</div>


<?php 

    include '../template/doctor_footer.php';

?>