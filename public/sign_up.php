<?php 
   
    require 'template/header.php';
    require 'core/function.php';
?>

    <body class=" bg-slate-200 ">
        <div class="mx-4 flex justify-center  ">
            <div class="xl:w-4/12 lg:w-6/12 md:w-5/6 w-full  absolute top-[2%]">
                <div class="w-[30%] m-auto my-4">
                    <img src="img/patient.png" alt="">
                </div>
                    <p class="text-center text-3xl">Registar Here!</p>
                    <?php 
                   if(isset($_POST['reg_btn'])){
                        echo register();
                   }
                ?>
                <form action="" class="mx-5" method="POST">
                    <label for="" class="text-2xl">Name</label>
                    <input type="text" class="w-full p-3 rounded-md my-3 border-2 border-stone-500" name="Name">
                    <label for="" class="text-2xl ">Email</label>
                    <input type="email" class="w-full p-3 rounded-md my-3 border-2 border-stone-500" name="email">
                    <label for="" class="text-2xl ">Password</label>
                    <input type="password" class="w-full p-3 rounded-md my-3 border-2 border-stone-500" min="8" name="password">
                    <label for="" class="text-2xl">Confirm Password</label>
                    <input type="password" class="w-full p-3 rounded-md my-3 border-2 border-stone-500" min="8" name="cf_pw">
                    <div class="flex gap-x-4 py-3">
                        <input type="checkbox" name="" id="" class="text-3xl"  size="10" style="width: 30px;height:30px;" >
                        <p class="text-2xl">Keep me log in</p>
                    </div>
                    <div class="my-2">
                        <button class="border-1 text-center bg-teal-300 px-5 py-2 rounded-md border-black " name="reg_btn">Registar</button>
                        <button class=" bg-amber-600 px-5 py-2 rounded-md text-white "> <a href="patient_login.php">Log in</a></button>
                    </div>
                   
                </form>
            </div>
         
        </div> 

    </body>