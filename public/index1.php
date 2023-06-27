<?php 
    include 'core/auth.php';
    include 'core/function.php';
    include 'template/header.php';
?>
<html>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .show-nav{
        display: block !important;
        animation: showSlow 1s;
        position: absolute;
        z-index:10000 ;
        top: 46px;
        left: -5px;
        background-color: #f5f5f589;
        margin-top: 20px;
    }
    
    .nav-top{
        animation: topNav 0.5s;
    }
    .svg-ani{
        animation: topNav 2s infinite; 
    }
   
    @keyframes showSlow{
        0%{
            transform: translateY(-300px);
        }
        100%{
            transform: translateY(0);
        }
    }
    @keyframes topNav{
        0%{
            transform: translateY(8px);
        }
        50%{
            transform: translateY(0);
        }
        60%{
            transform: translateY(0);
        }
        100%{
            transform: translateY(8px);
        }
    }
    html{
        scroll-behavior: smooth;
    }
    
</style>
<body class="  ">

    <!-- navSection -->
    <div class="bg-white shadow-sm" id="topNav">
        <header class="flex p-5  flex-wrap md:flex-nowrap justify-between align-middle  w-2/3 m-auto pt-4 ">
            <div class="mt-2 md:mt-0">
                <span class=""><i class="fa-solid fa-2xl text-red-600 fa-suitcase-medical"></i></span>
            </div>
            <button class="md:hidden" id="btn-nav">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h8m-8 6h16" />
                  </svg>
            </button>
        
           <nav class="nav w-full hidden  md:block md:max-w-fit mt-3 md:mt-0 ">
            <ul>
                <li class="md:inline-block text-center  hover:-translate-y-2 transition delay-300 md:pt-0 px-3 md:py-0 py-4 block  pb-3 md:pb-0"><a href="">Home</a></li>
                
                <li class="md:inline-block text-center  hover:-translate-y-2 transition delay-300  md:pt-0 px-3 md:py-0 py-4 block  pb-3 md:pb-0"><a href="#guide">Steps</a></li>

                <li class="md:inline-block text-center  hover:-translate-y-2 transition delay-300 md:pt-0 px-3 md:py-0 py-4 block  pb-3 md:pb-0"><a href="#testimonal">Testi</a></li>
                
                <li class="md:inline-block text-center  hover:-translate-y-2 transition delay-300 md:pt-0 px-3 md:py-0 py-4 block  pb-3 md:pb-0"><a href="#faq">FAQ</a></li>
            
                <li class="md:inline-block text-center  hover:-translate-y-2 transition delay-300 md:pt-0 px-3 md:py-0 py-4 block  pb-3 md:pb-0"><a href="#contact">Contact</a></li>
                <li class="md:inline-block text-center  hover:-translate-y-2 transition delay-300 md:pt-0 px-3 md:py-0 py-4 block  pb-3 md:pb-0"><a href="AdminPanel/index.php">Panel</a></li>
                

            </ul>
           </nav>
        </header>
    </div>
    <!-- navSection -->

    <!-- Welcome page -->
   <div class="bg-cover bg-no-repeat bg-center bg-fixed" style="background-image: url(img/doctor4.jpg); height: 100vh;">
        <div class="absolute w-screen px-5 h-screen md:top-[50%] top-[30%] text-center md:text-left  ">
            <p class="text-white md:text-6xl text-4xl">Welcome to </p>
            <p class="text-amber-300 md:text-8xl text-6xl ">Kyan Mhar Yay</p>
            <p class="text-white text-3xl">Take care <?php if(isset($_SESSION['user'])){
                echo $_SESSION['user']['Name'];
            }else{
                echo $_SESSION['doctor']['Name'];
            } ?> </p>
            <p class="text-3xl text-white">Fighting!</p>
            <p class="text-neutral-500">(noun) ..</p>
            <p class=" text-neutral-400 md:w-72  left-5 ">One stop health care service via online, Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, nostrum.</p><br>
            

                <a href="logout.php"><button class=" px-7 py-2 bg-red-400 rounded-md top-3  text-white">log out</button></a>
                <!-- <a href="sign_up.php">><button class="bg-orange-400 px-7 py-2 rounded-md top-3  text-white">Sign Up</button></a> -->
                
        </div>
        <div class="flex flex-col absolute text-base  right-[2%] md:top-[10%] top-[70%] ">
            <i class="fa-brands fa-facebook  md:py-7 py-4 text-sky-700 hover:-translate-y-1/4 transition-transform duration-300 "></i>
            <i class="fa-brands fa-twitter  md:py-7 py-4 text-sky-400 hover:-translate-y-1/4 transition-transform duration-300"></i>
            <i class="fa-brands fa-youtube  md:py-7 py-4 text-red-600 hover:-translate-y-1/4 transition-transform duration-300"></i>
            <i class="fa-brands fa-tiktok text-white  md:py-7 py-4  hover:-translate-y-1/4 transition-transform duration-300"></i>
        </div>
        <div class="absolute text-center bottom-2 left-[41%] md:left-[50%]  text-white">
            <p class="animate__animated animate__bounce animate__infinite	infinite">Scroll down</p>
            <i class="fa-solid fa-angle-down animate__animated animate__fadeOutDown animate__infinite animate__slow	2s	infinite"></i>
            <div class=""></div>
            <i class="fa-solid fa-angle-down animate__animated animate__fadeOutDown animate__infinite animate__slow	2s	infinite"></i>
        </div>
        <div class="absoulute w-screen h-screen" style="background-color:#00000092 ;"></div>
    
    </div>
    <!-- Welcome page -->

    <!-- guide -->
    <div class="max-h-full" id="guide">
        <div class="text-center w-2/3 m-auto pt-4">
            <p class="text-bold text-xs">You just need</p>
            <p class=" font-extrabold text-2xl "> <span class=" text-orange-500 ">4</span> Easy Steps to grab your service</p>
        </div>
        <div class="w-2/3 m-auto mt-10 md:grid md:grid-cols-2 md:gap-10 items-center ">
          
            <div class="flex my-5 flex-col justify-center">
                <img class=" w-36 m-auto " src="img/guide.svg" alt="" srcset="">
                <div class="">
                    <div class=" text-center mt-7 ">
                        <p class=" text-2xl font-black ">Search your perference doctor</p>
                        <p class="">Via your gadget</p>
                    </div>

                   
                    <div class="text-center">
                        <p class=" font-semibold "> queing among the tons of people to get appointment with your doctor is totally out of date. Search via your phone. </p>
                    </div>
                    
                </div>
            </div>

            <div class=" my-5  md:relative ">
                <div class="w-56 m-auto  md:left-[50%]">
                    <img class=" " src="img/guide2.png"  alt="" srcset="">
                </div>
                
                <div class="md:top-[123px]   mt-7 md:mt-8 ">
                    <div class=" text-center">
                        <p class=" text-2xl font-black ">Check Doctor's Data</p>
                        <p class="">Via your gadget</p>
                    </div>

                    
                    <div class="text-center">
                        <p class="  "> checking the information is crucial as changing the scheducle is quite challenging for us. </p>
                    </div>
                    
                </div>
            </div>

           
            <div class=" my-5  md:relative ">
                <div class="w-36 m-auto md:top-[1rem]  md:left-[29%]">
                    <img class=" " src="img/guide3.svg"  alt="" srcset="">
                </div>
                
                <div class="md:top-[14rem]  mt-7 ">
                    <div class=" text-center">
                        <p class=" text-2xl font-black ">Make Appointment with your doctor</p>
                        <p class="">Via your gadget</p>
                    </div>

                    
                    <div class="text-center">
                        <p class="  "> Select the availabe date for both of you and doctor. Our team will contact you by the time the appointment is close </p>
                    </div>
                    
                </div>
            </div>


            <div class=" my-5  md:relative ">
                <div class="w-40 m-auto  md:top-[8rem] md:left-[40%]">
                    <img class=" " src="img/guide4.png"  alt="" srcset="">
                </div>
                
                <div class="md:top-[20rem] ">
                    <div class=" text-center">
                        <p class=" text-2xl font-black ">Grab your solution</p>
                        <p class=""></p>
                    </div>

                    
                    <div class="text-center">
                        <p class=""> We'd like to take note before the appointment so that we can save the time for both of us. </p>
                    </div>
                    
                </div>
            </div>

            

        </div> 
    </div>
    <!-- guide -->



    <!-- book now -->
    <div class="bg-gray-200" id="book">
        <div class="h-full w-2/3 m-auto mt-16 md:p-8 py-8" >
                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-12  justify-center items-center">
                    <div class="">
                        <img src="img/doctor7.svg" alt="" srcset="">
                    </div>
                    <div class="text-center md:text-left">
                        Our doctors are ready to give the best solution to you.
                        <p class="text-4xl"> Choose Doctor <span class=" text-red-600 ">Right now</span> </p>
                        <br class="">
                        <a href="doctor.php"><button class="px-6 py-2 bg-orange-600 text-white rounded-lg">Doctors</button></a>
                    </div>
                </div>
        </div>
   </div>
   <!-- book now -->

   <!-- Testimonal -->
   <div class=" " id="testimonal" ">
        <div class="w-2/3 h-fit m-auto  ">
    <p class="text-center text-3xl font-extrabold pt-8">Testi<span class="text-yellow-500">monals</span></p>
        <div class=" filtering mt-6  ">
            <div class="text-center w-8">
                <span><i class="fa-solid fa-quote-left"></i></span><br>
                <img src="img/Zl.jpg" alt="" class=" m-auto pt-5" style="width:100px ; border-radius: 50%;">
                <p class="text-2xl pt-6 pb-4">Highly <span class="text-orange-700">Recommend</span> </p>
                <p>If you are finding the one stop medical service via online by just click,<br class="md:block hidden"> Kyan Mhar Yay is for you.</p>
            </div>
            <div class="text-center ">
                <span><i class="fa-solid fa-quote-left"></i></span><br>
                <img src="img/JB.jpeg" alt="" class=" m-auto pt-5" style="width:100px; border-radius: 100%;">
                <p class="text-2xl pt-6 pb-4">Excellent <span class="text-orange-700">Service</span> </p>
                <p>Make sure you book your first online clinc booking via phone. super thrilling ! <br> Grab your chance</p>
            </div>
            <div class="text-center">
                <span><i class="fa-solid fa-quote-left"></i></span><br>
                <img src="img/Mzb.jpg" alt="" class=" m-auto pt-5" style="width:100px; border-radius: 50%;">
                <p class="text-2xl pt-6 pb-4">Terriific <span class="text-orange-700">service</span></p>
                <p> you will never regret of using this online service. <br> Virus is still out of boundary  with this app. </p>
            </div>
        </div>
   </div>
  </div> 
   <!-- Testimonal -->

   <!-- testimonal-2 -->
   <div class="h-full relative bg-[url('img/medicine.jpg')] bg-cover bg-center"  style="clip-path: polygon(0 11%, 100% 0%, 100% 86%, 0% 100%);">
        <!-- <div class="absolute right-[40%] md:right-[50%] top-[10%]">
            <p class="text-center text-3xl text-white">Facts</p>
        </div> -->
        <div class="absolute grid grid-cols-1 items-center text-center justify-center md:grid-cols-1 lg:grid-cols-3 gap-x-14 md:gap-y-20 top-[20%]  lg:top-[38%] lg:left-[4%] left-[20%] md:left-[26%] md:top-[12%]">
            <div class="text-white text-center p-8 bg-transparent ">
                <p class="lg:text-4xl md:text-5xl">Cooperated</p>
                <p class="text-4xl md:text-7xl lg:mb-7 text-sky-400">patients</p>
                <h4 class="text-3xl" >281</h4>
            </div>
            <div class="text-white text-center p-8 bg-transparent ">
                <p class="lg:text-4xl md:text-5xl">Awarded</p>
                <p class="text-4xl md:text-7xl lg:mb-7 text-orange-400">Trophies</p>
                <h4 class="text-3xl">32</h4>
            </div>
            <div class="text-white text-center p-8 bg-transparent ">
                <p class="lg:text-4xl md:text-5xl">Provided</p>
                <p class=" text-4xl md:text-7xl lg:mb-7 text-orange-600">Doctors</p>
                <h4 class="text-3xl">60</h4>
            </div>
            
        </div>
        <div class="absoulute w-screen h-screen" style="background-color:#00000090 ;"></div>
   </div>
   <!-- testimonal-2 -->

   <!-- FAQ -->
   <div class="pb-8">
   <div class="w-2/3 m-auto h-content " id="faq">
    <div class="font-extrabold">
        <p class="lg:text-7xl text-3xl">Frequently</p>
        <p class="lg:text-8xl text-5xl text-orange-500">Asked Question</p>
    </div>
    
    <div class="grid grid-cols-1 lg:gap-40 gap-20 mt-8 justify-center items-center content-center lg:grid-cols-2  ">
        <div class="">
            <div class=" relative pb-5 rounded-lg">
                <input type="checkbox" class="absolute top-0 inset-x-0 opacity-0 peer w-full h-12 z-10 cursor-pointer" name="" id="">
                <div class="bg-gray-200 h-12 flex items-center">
                    <p class="text-lg font-semibold text-black py-20 px-4 ">Doctors' Qualitication</p>
                </div>
                <div class="absolute top-3 right-3 transition-transform duration-500 rotate-0 peer-checked:rotate-180 text-black">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                      </svg>
                </div>
                <div class=" text-black overflow-hidden max-h-0 transition-all duration-500 peer-checked:max-h-40 " >
                    <div class="p-3">
                        <p>All the provided doctors are highly qualified with PhD and M.B.B.S</p>
                    </div>
                </div>
            </div>

            <div class=" relative pb-5">
                <input type="checkbox" class="absolute top-0 inset-x-0 opacity-0 peer w-full h-12 z-10 cursor-pointer" name="" id="">
                <div class="bg-gray-300 h-12 flex items-center">
                    <p class="text-lg font-semibold text-black p-4 ">Booking Cancelled</p>
                </div>
                <div class="absolute top-3 right-3 transition-transform duration-500 rotate-0 peer-checked:rotate-180 text-black">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                      </svg>
                </div>
                <div class=" text-black overflow-hidden max-h-0 transition-all duration-500 peer-checked:max-h-40 " >
                    <div class="p-3">
                        <p> We no longer return money for the cancelled booking. Hence, book if it's sure to get treatment </p>
                    </div>
                </div>
            </div>

            <div class=" relative pb-5 ">
                <input type="checkbox" class="absolute top-0 inset-x-0 opacity-0 peer w-full h-12 z-10 cursor-pointer" name="" id="">
                <div class="bg-gray-300 h-12 flex items-center ">
                    <p class="text-lg font-semibold text-black p-6"> Taxi Service </p>
                </div>
                <div class="absolute top-3 right-3 transition-transform duration-500 rotate-0 peer-checked:rotate-180 text-black">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                      </svg>
                </div>
                <div class=" text-black overflow-hidden max-h-0 transition-all duration-500 peer-checked:max-h-40 " >
                    <div class="p-3">
                        <p> Our team make taxi plan for those who are challenging to get treatment in person appointment. </p>
                    </div>
                </div>
            </div>

            <div class=" relative pb-5" >
                <input type="checkbox" class="absolute top-0 inset-x-0 opacity-0 peer w-full h-12 z-10 cursor-pointer" name="" id="">
                <div class="bg-gray-300 h-12 flex items-center">
                    <p class="text-lg font-semibold text-black p-4 "> Accepted Transistion </p>
                </div>
                <div class="absolute top-3 right-3 transition-transform duration-500 rotate-0 peer-checked:rotate-180 text-black">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                      </svg>
                </div>
                <div class=" text-black overflow-hidden max-h-0 transition-all duration-500 peer-checked:max-h-40 " >
                    <div class="p-3">
                        <p> Kpay, AYA pay, CBpay, MIA, ABC </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="svg-ani">
            <img src="img/FAQ.svg" class="" alt="" >
        </div>
    </div>
       
    </div>
   </div> 
    <!-- FAQ -->

    <!-- footer -->
    <div class="bg-gray-200" id="contact">
        <div class="w-2/3 m-auto h-content">

            <div class="grid grid-cols-1 justify-center content-center pt-20 gap-x-8 lg:grid-cols-3">
                <div class="mb-8 text-center">
                     <p class=" text-5xl ">Available <span class="text-orange-500">Hours</span> &nbsp;</p>
                        <div class="mt-6">
                            <p class="text-2xl"> 6 am - 7pm  &nbsp; </p>
                            <p class="text-2xl">Monday - Sat &nbsp;</p>
                            <p class="text-2xl">Sunday &nbsp;<span class="text-red-500">Closed</span></p>
                        </div>
                        
                </div>
                <div class="text-center mb-8">
                    <p class="text-5xl">Suggestion <span class="text-orange-500">Box</span></p>
                    <input type="text" name="" size="20" id="" class="rounded-lg p-4 mt-6"><br>
                    <button class="bg-orange-500 text-white border-2 px-5 py-2 mt-4 rounded-lg">Submit</button>
                </div>
                <div class="text-center">
                    <p class="text-5xl">Contact</p>
                    <div class="mt-6">
                        <p class="text-2xl">Here are somewhere you can catch us</p>
                    <p class="text-2xl text-bold">+959428123456</p>
                    
                        <div class="mt-6 mb-8">
                            <i class="fa-brands fa-square-facebook fa-2xl"></i>
                            <i class="fa-brands fa-youtube fa-2xl px-2"></i>
                            <i class="fa-brands fa-twitter fa-2xl px-2"></i>
                            <i class="fa-brands fa-instagram fa-2xl px-2"></i>
                        </div>
                    </div>
                


                </div>
            </div>
            <hr class="border-2 ">
            <div class="text-center py-6">
              <p> All right reserved to <br> <span class="text-orange-500 text-2xl">@Kaung Si Thu</span></p>
            </div>
           </div>
    </div>
    <!-- footer -->

    <div class="h-screen">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d121900.71215713903!2d96.40299853611442!3d17.296371753214892!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c3d6b94708e943%3A0x65ab7af98d3e6f32!2sBago%2C%20Myanmar%20(Burma)!5e0!3m2!1sen!2ssg!4v1659281434721!5m2!1sen!2ssg"  class="w-full h-full" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <!-- <script src="app.js"></script> -->
   
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 <script type="text/javascript" src="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script>
 <script type="text/javascript">
    $('.filtering').slick({

        dots: true,
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear',
        autoplay: true,
        autoplaySpeed: 2000,
    
});
  </script>
</body>
<script src="app.js"></script>
</html>
   
 

  
   
