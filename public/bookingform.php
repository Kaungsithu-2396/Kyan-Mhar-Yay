<?php 
   require 'core/auth.php';
    require 'template/header.php';
    require 'core/function.php';
?>

    <body class=" bg-slate-200 ">
        <div class="mx-4 flex justify-center  ">
            <div class="xl:w-4/12 lg:w-6/12 md:w-5/6 w-full  absolute top-[2%]">
                <div class="w-[20%] m-auto my-4">
                    <img src="img/booking.png" alt="">
                </div>
                    <p class="text-center text-3xl">Book Here!</p>
                    <?php 
                     $id=$_GET['id'];
                     $Doctorname=$_GET['name'];
                     $Category_id=$_GET['cat_id'];
                   if(isset($_POST['book_btn'])){
                       booking_form();
                   }
                ?>
                <form action="" class="mx-5" method="POST">
                    <input type="hidden" name="doctor_id" value="<?php echo $id ?>">
                    <input type="hidden" name="cat_id" value="<?php echo $Category_id ?>">
                    <label for="" class="text-2xl">Name</label>
                    <input type="text" class="w-full p-3 rounded-md my-3 border-2 border-stone-500" name="Name" value="">
                    <label for="" class="text-2xl ">Phone No</label>
                    <input type="text" class="w-full p-3 rounded-md my-3 border-2 border-stone-500" name="phone" value="+959">
                    <label for="" class="text-2xl ">Doctor</label>
                    <input type="text" class="w-full p-3 rounded-md my-3 border-2 border-stone-500" min="8" name="doctor" value="<?php echo $Doctorname ?>">
                    <label for="" class="text-2xl">Specialized Field</label>
                    <input type="text" class="w-full p-3 rounded-md my-3 border-2 border-stone-500" min="8" name="field" value="<?php echo category($Category_id)['Name'] ?>" >
                    
                    <div class="my-2">
                        <button class="border-1 text-center bg-teal-300 px-5 py-2 rounded-md border-black " name="book_btn">Book</button>
                         <a href="doctor.php" class="bg-red-300 px-5 py-2 rounded-md">Back </a>
                    </div>
                   
                </form>
            </div>
         
        </div> 

    </body>
