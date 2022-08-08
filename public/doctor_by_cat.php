<?php 
    include 'core/auth.php';
    include 'core/function.php';
    include 'template/header.php';
?>
<body class=" bg-gray-200 ">
    <!-- logo heading -->
    <div class="mt-7">
        <div class="text-center ">
            <div class="flex justify-center items-center gap-x-2">
                <span class="text-4xl"><i class="fa-solid fa-2xl text-red-600 fa-suitcase-medical"></i></span>
                <div class="flex flex-col justify-items-center">
                    <!-- <p class="text-left text-xl font-bold text-slate-600 ">K<span class="">M</span>Y  </p> -->
                    <p class="text-2xl text-left">Kyan </p>
                    <p><span class="text-2xl text-orange-500">Mhar</span> yay</p>
                </div>
                
            </div>
            <p class="text-4xl my-4 text-gray-400"> Thanks for cooperating with us  <span class=" text-black text-3xl"><?php echo $_SESSION['user']['Name'] ?></span>  </p>
           
           
        </div>
    </div>
    <!-- logo heading -->

    <!-- search bar-->
    <div class="mt-7 w-2/3 m-auto  text-center">
        <form class="min-w-2xl">
            <input type="text" placeholder="Search" class="border-1 border-black w-full py-2 px-4 rounded-md ">
            <button class=" mt-3  py-2 px-5 rounded-md  bg-emerald-200  ">Search</button>
        </form>

        
    </div>
    <!-- search bar -->


    <div class="grid lg:grid-cols-3 grid-cols-1 mt-6 md:mx-6 w-full m-auto  ">
    <!-- doctor list -->
        <div class="lg:col-span-2 md:w-2/3 md:m-auto mx-3 lg:w-fit  ">
            <div class="grid lg:grid-cols-2 gap-x-6 grid-cols-1 ">
               
                <?php 
                    
                    foreach(doctorByCat($_GET['id'])as $d){
                ?>
                <!-- one doctor -->
                <div class="mb-7">
                    <div class="">
                        <div class="flex gap-x-5">
                            <div class="">
                                <img src="AdminPanel/doctor_img/<?php echo $d['photo'] ?>" class=" w-28 rounded-full " alt="" srcset="">
                            </div>
                            <div class="flex flex-col gap-y-1">
                                <p class="text-3xl"><?php echo $d['Name'] ?> </p>
                                <p class="text-xl text-neutral-500 "><?php echo category($d['Category_id'])['Name'] ?></p>
                                <p class="pb-4">Available</p>
                                <button class=" bg-orange-300 px-5 py-2 rounded-md"><a href="bookingform.php?name=<?php echo $d['Name'] ?>&id=<?php echo $d['id'] ?>&cat_id=<?php echo $d['Category_id'] ?> ">Appointment</a> </button>
                            </div>

                            
                        </div>
                    </div>
                </div>
                <!-- one doctor -->
                <?php 
                    }
                ?>

               
               
        </div>  
        </div>
    <!-- doctor list -->

     <!-- side bar -->
     <div class="mt-4 lg:w-full mx-3 lg:mx-7">
        <div class="">
            <ul class="bg-white rounded-lg border border-gray-200 lg:w-96 w-full text-gray-900">
              <li class="px-6 py-2 border-b border-gray-200 w-full rounded-t-lg bg-blue-600 text-white">
                An active item
              </li>
              <?php 
                foreach(categories()as $c){
              ?>
              <a href="doctor_by_cat.php?id=<?php echo $c['id'] ?>"><li class="px-6 py-2 border-b border-gray-200 w-full"><?php echo $c['Name'] ?></li></a>
            <?php 
                }
             ?>
            </ul>
          </div>
          <div class="mt-3 lg:w-48 gap-y-2  md:gap-x-2 flex flex-col lg:flex-row">
            <img src="img/ads.jpeg" width="" alt="" srcset="">
            <img src="img/ad2.jpeg" width="" alt="">
          </div>
          <div class="my-2 w-full lg:w-fit lg:grid lg:grid-cols-2 gap-3 ">
            <a href="logout.php">
            <button class=" bg-red-500 text-white px-5 py-3 w-full ">Log out</button>
            </a>
            <a href="index1.php">
            <button class="  bg-green-300 text-dark px-5 py-3 w-full ">Index</button>
            </a>
          </div>
    </div>
    <!-- side bar -->

    <!-- ads -->
    <!-- <div class="">
        <img src="" alt="" class="w-full">
    </div> -->
    <!-- ads -->
    </div>


    <?php 
        // print_r($_SESSION['user']);
    
    ?>

</body>
</html>