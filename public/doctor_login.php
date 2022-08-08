<?php 

  require 'template/header.php';
  require 'core/function.php';
?>
<body class="   ">

  <?php 
    if(isset($_POST['doc_btn'])){
      doctorLogin();
    }
  ?>

    <div class="flex flex-col lg:flex-row justify-center items-center md:gap-40 gap-10 lg:gap-10   absolute top-[22%] lg:top-20 2xl:top-0 xl:top-40 md:top-[20%] h-fit  ">
            
        <div class="mx-4">
            <p class="text-4xl text-center">Login</p>
          <form action="" class="" method="post">
            <label for="" class="text-2xl">Email</label>
            <input type="text" class="w-full p-3 rounded-md my-3 border-2 border-stone-500" name="email">
            <label for="" class="text-2xl">Password</label>
            <input type="password" class="w-full p-3 rounded-md my-3 border-2 border-stone-500" name="password">
            <div class="flex gap-x-4 py-3">
                <input type="checkbox" name="" id="" class="text-3xl"  size="10" style="width: 30px;height:30px;" >
                <p class="text-2xl">Keep me log in</p>
            </div>
            
            <div class="w-full md:mt-4">
                <button class="border-1 text-center bg-teal-300 px-5 py-2 rounded-md border-black w-full" name="doc_btn">Log in</button>
            </div>
          </form>
        </div>
        <!-- <div class="w-full h-full">
            <img src="img/doctor2.jpg" alt="">
        </div> -->
    </div>
  
</body>
</html>

