<?php 
  require 'template/header.php';
  require 'core/function.php';
?>
<body class="bg-slate-300">
  <div class="w-screen flex justify-center absolute top-[4%] ">
      <div class="lg:w-1/2 w-full">
        <div class="mx-4">
          <div class="text-center">
            <img src="img/patient.png" class="w-[30%] m-auto " alt="">
          </div>
          <p class="text-4xl text-center my-8">Patient's Login</p>
          <?php 
            if(isset($_POST['log_in'])){
               echo p_login();
            }
          
          ?>
        <form action="" class="" method="post">
          <label for="" class="text-2xl">Email</label>
          <input type="text" class="w-full p-3 rounded-md my-3 border-2 border-stone-500" name="email" >
          <label for="" class="text-2xl">Password</label>
          <input type="password" class="w-full p-3 rounded-md my-3 border-2 border-stone-500" name="password">
          <div class="flex gap-x-4 py-3">
              <input type="checkbox" name="" id="" class="text-3xl"  size="10" style="width: 30px;height:30px;" >
              <p class="text-2xl">Keep me log in</p>
          </div>
          
          <div class="w-full grid grid-cols-3 items-center justify-center gap-x-4 my-4  md:mt-4">
              <button class="border-1 text-center bg-teal-300 px-5 py-2 rounded-md border-black" name="log_in">Log in</button>
              <button class=" bg-amber-600 px-5 py-2 rounded-md text-white "> <a href="sign_up.php">Registar</a></button>
          </div>
        </form>
        
      </div>
      </div>
      <div class="">

      </div>
  </div>
</body>