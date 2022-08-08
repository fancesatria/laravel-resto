<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        
        <title>Edelweiss Restaurant</title>

    </head>
    
    <body class="font-readex bg-gray200">
        <!-- satu nav -->
        <header>
            <nav class="flex items-center mt-4 py-4 mx-3">
                <div>
                    <img class="w-32 lg:w-48" src="./img/logo2.png" alt="">
                </div>
                <ul class="hidden sm:flex flex-1 justify-end gap-10 text-xs items-center ">
                    <li>Menu</li>
                    <li>Prices</li>
                    <li>Contact</li>
                    <button class="py-3 px-9 rounded-full uppercase text-white hover:bg-white hover:text-teal300 bg-gradient-to-r from-orange1 to-teal300 " type="button">Login</button>
                </ul>
                
                <div class="flex flex-1 justify-end sm:hidden">
                    <img class="w-2/12" src="./icon/menu.png" alt="" srcset="">
                </div>
            </nav>
        </header>
    
        <!-- dua Cover/main -->
        <section class="relative mt-5">
            <div class="container flex flex-col-reverse lg:flex-row items-center gap-10">
                <div class="flex flex-1 flex-col gap-5 items-center lg:items-start">
                    <h1 class="font-readex font-bold text-center text-3xl lg:text-left uppercase">Edelweiss Restaurant</h1>
                    <p class="text-center text-lg text-gray lg:text-left gap-10">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, rerum incidunt temporibus fugiat assumenda sapiente veniam? Voluptate animi voluptates facilis!</p>
                
                    <div class="flex justify-center gap-6 flex-wrap px-10 lg:px-0">
                        <button class="py-3 px-5 bg-orange1 rounded-xl text-white hover:bg-white hover:border-2 hover:border-teal300 hover:text-teal300 transition duration-700">Order Now</button>
                        <button class="py-3 px-3 border-2 border-orange1 text-orange1 rounded-xl hover:bg-white hover:border-gray hover:text-gray transition duration-700">Register Now</button>
                    </div>
                </div>
    
                <div class="flex flex-1 justify-center z-10">
                    <img class="rounded-xl w-3/4 h-3/4 md:w-full md:h-full" src="./img/resto4.jpg" alt="" srcset="">
                </div>
    
                <div class="bg-gradient-to-r from-teal300 to-orange1 lg:block hidden h-80 w-1/2 rounded-l-full absolute right-0 top-32">
                    
                </div>
            </div>
        </section>
    
        <!-- tiga flip -->
        <section class="bg-gray-100 mt-20 lg:mt-40">
            <div class="py-8 ">
                <h1 class="sub-title">Best Selling Menu</h1>
                <p class="text-center mt-43 text-gray gap-y-3 px-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, rerum incidunt temporibus fugiat assumenda sapiente veniam? Voluptate animi voluptates facilis!</p>
            </div>
    
            <div class="relative">
                <div class="container flex flex-col lg:flex-row items-center gap-x-20 gap-y-4">
                    <div class="flex flex-1 justify-center z-10">
                        <img class="w-5/6 h-5/6 rounded-xl sm:w-3/4 sm:h-3/4 md:w-full md:h-full" src="./img/esbuah.jpg" alt="">
                    </div>
        
                    <div class="flex flex-1 flex-col items-center lg:items-start gap-y-3">
                        <h1 class="food-title">Mixed Fruits With Ice</h1>
                        <p class="text-center text-gray lg:text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam ducimus consequatur labore repudiandae quasi blanditiis tenetur architecto fugit placeat ullam?</p>
                        <button class="py-3 px-5 bg-orange1 rounded-xl text-white hover:bg-white hover:border-2 hover:border-teal300 hover:text-teal300 transition duration-700">Try for free !</button>
                    </div>
                </div>
        
                <div class="bg-gradient-to-r from-orange1 to-teal300 h-80 w-1/2 hidden overflow-hidden lg:block absolute -bottom-24 -left-36 rounded-r-full">
                    
                </div>
            </div>
        </section>
    
        <!-- empat flop -->
        <section class="mt-20 lg:mt-40">
            <div class="relative">
                <div class="container flex flex-col-reverse lg:flex-row items-center gap-x-20 gap-y-4">
                    <div class="flex flex-1 flex-col items-center lg:items-start gap-y-3">
                        <h1 class="food-title">Rawon</h1>
                        <p class="text-center text-gray lg:text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam ducimus consequatur labore repudiandae quasi blanditiis tenetur architecto fugit placeat ullam?</p>
                        <button class="py-3 px-5 bg-orange1 rounded-xl text-white hover:bg-white hover:border-teal300 hover:text-teal300 hover:border-2 transition duration-700">Try for free !</button>
                    </div>
    
                    <div class="flex flex-1 justify-center z-10">
                        <img class="w-5/6 h-5/6 rounded-xl sm:w-3/4 sm:h-3/4 md:w-full md:h-full" src="./img/rawon.jpg" alt="">
                    </div>
        
                    
                </div>
        
                <div class="bg-gradient-to-r from-teal300 to-orange2 lg:block hidden h-80 w-1/2 rounded-l-full absolute right-0 top-32">
                    
                </div>
            </div>
        </section>
    
        <!-- lima card -->
        <section class="mt-20 lg:mt-40">
            <div class="container flex flex-wrap justify-center gap-10">
                <div class="py-4">
                    <h1 class="sub-title">Top Favorite Drinks</h1>
                    <p class="text-center mt-3 text-gray">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, rerum incidunt temporibus fugiat assumenda sapiente veniam? Voluptate animi voluptates facilis!</p>
                </div>
        
                <!-- card 1 -->
                <div class="card ">
                   <div>
                    <img class="w-full h-56 object-cover" src="./img/esbuah.jpg" alt="">
            
                    <div class="m-2 px-2 py-2">
                        <h1 class="badge">IDR 10.000</h1>
                        <h2 class="card-title mt-2 font-bold">Mixed Fruits Ice</h1>
                        <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam ducimus consequatur labore repudiandae quasi blanditiis tenetur architecto fugit placeat ullam?</p>
                    </div>
                   </div>
                </div>
    
                <!-- card 2 -->
                <div class="card">
                    <div>
                        <img class="w-full h-56 object-cover" src="./img/esjeruk.jpg" alt="">
            
                        <div class="m-2 px-2 py-2">
                            <h1 class="badge">IDR 5.000</h1>
                            <h2 class="card-title mt-2 font-bold">Iced Orange Juice</h1>
                            <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam ducimus consequatur labore repudiandae quasi blanditiis tenetur architecto fugit placeat ullam?</p>
                        </div>
                    </div>
                 </div>
    
                 <!-- card 3 -->
                <div class="card">
                    <div>
                        <img class="w-full h-56 object-cover" src="./img/esteh.jpg" alt="">
            
                        <div class="m-2 px-2 py-2">
                            <h1 class="badge">IDR 4.000</h1>
                            <h2 class="card-title mt-2 font-bold">Iced Sweet Tea</h1>
                            <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam ducimus consequatur labore repudiandae quasi blanditiis tenetur architecto fugit placeat ullam?</p>
                        </div>
                    </div>
                 </div>
    
                 <!-- card 4 -->
                <div class="card ">
                    <div>
                        <img class="w-full h-56 object-cover" src="./img/lemontea.jpg" alt="">
            
                        <div class="m-2 px-2 py-2">
                            <h1 class="badge">IDR 5.000</h1>
                            <h2 class="card-title mt-2 font-bold">Lemon Tea</h1>
                            <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam ducimus consequatur labore repudiandae quasi blanditiis tenetur architecto fugit placeat ullam?</p>
                        </div>
                    </div>
                 </div>
     
                 <!-- card 5 -->
                 <div class="card">
                    <img class="w-full h-56 object-cover" src="./img/jusmangga.jpg" alt="">
        
                    <div class="m-2 px-2 py-2">
                        <h1 class="badge">IDR 8.000</h1>
                        <h2 class="card-title mt-2 font-bold">Mango Juice</h1>
                        <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam ducimus consequatur labore repudiandae quasi blanditiis tenetur architecto fugit placeat ullam?</p>
                    </div>
                  </div>
     
                  <!-- card 6 -->
                 <div class="card">
                    <img class="w-full h-56 object-cover" src="./img/ronde.jpg" alt="">
        
                    <div class="m-2 px-2 py-2">
                        <h1 class="badge">IDR 8.000</h1>
                        <h2 class="card-title mt-2 font-bold">Wedang Ronde</h1>
                        <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam ducimus consequatur labore repudiandae quasi blanditiis tenetur architecto fugit placeat ullam?</p>
                    </div>
                  </div>
    
            </div>
        </section>
    
        <!-- enam rounded chef cards -->
        <section class="mt-40 lg:mt-40 bg-gradient-to-r from-teal300 to-orange2">
            <div class="py-8 px-10">
                <h1 class="font-bold text-md md:text-3xl text-white justify-center text-center pb-4 mr-3 ml-3 overflow-ellipsis overflow-hidden whitespace-nowrap">Made By The Proffesionals</h1>
                <p class="text-center text-sm mt-43 text-white text-base md:text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, rerum incidunt temporibus fugiat assumenda sapiente veniam? Voluptate animi voluptates facilis!</p>
            </div>
    
            <div class="container flex flex-1 justify-center">
                <div>
                    <!-- chef 1  -->
                    <div class="chef pt-8">
                        <div class="flex flex-1 justify-center z-10">
                            <img class="round-card items-center " src="./img/chef1.jpg" alt="">
                        </div>
                        
                        <div class="mt-5">
                            <h1 class="chef-title">Chef Lee</h1>
                            <p class="chef-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam ducimus consequatur labore repudiandae quasi blanditiis tenetur architecto fugit placeat ullam?</p>
                        </div>
                        
                    </div>
    
                    <!-- chef 2  -->
                    <div class="chef">
                        <div class="flex flex-1 justify-center z-10">
                            <img class="round-card items-center " src="./img/chef2.jpg" alt="">
                        </div>
                        
                        <div class="mt-5">
                            <h1 class="chef-title">Chef Evelyn</h1>
                            <p class="chef-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam ducimus consequatur labore repudiandae quasi blanditiis tenetur architecto fugit placeat ullam?</p>
                        </div>
                        
                    </div>
    
                    <!-- chef 3 -->
                    <div class="chef">
                        <div class="flex flex-1 justify-center z-10">
                            <img class="round-card items-center " src="./img/chef3.jpg" alt="">
                        </div>
                        
                        <div class="mt-5">
                            <h1 class="chef-title">Chef Rey</h1>
                            <p class="chef-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam ducimus consequatur labore repudiandae quasi blanditiis tenetur architecto fugit placeat ullam?</p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
    
        <!-- tujuh FAQ -->
        <section class="px-15">
            <div class="my-10">
                <div class="py-4">
                    <h1 class="sub-title">FAQ</h1>
                    <p class="text-center text-gray text-sm px-5 md:text-lg">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam ducimus consequatur labore repudiandae quasi blanditiis tenetur architecto fugit placeat ullam?</p>
                </div>
    
                <div class="relative">
                    <div class="faq mt-3">
                        <span class="text-sm text-gray md:text-lg">Lorem ipsum dolor sit amet consectetur adipisicing.</span>
                        <img class="w-4 h-4" src="./icon/arrow.png" alt="">
                    </div>
    
                    <div class="faq">
                        <span class="text-sm text-gray md:text-lg">Lorem ipsum dolor sit amet consectetur adipisicing.</span>
                        <img class="w-4 h-4" src="./icon/arrow.png" alt="">
                    </div>
    
                    <div class="faq">
                        <span class="text-sm text-gray md:text-lg">Lorem ipsum, dolor sit amet consectetur adipisicing.</span>
                        <img class="w-4 h-4" src="./icon/arrow.png" alt="">
                    </div>
    
                    <div class="flex flex-1 justify-center z-10 mt-10">
                        <button class="py-3 px-5 bg-orange1 rounded-xl text-white hover:bg-white hover:border-2 hover:border-teal300 hover:text-teal300 transition duration-700" type="button">Learn more</button>
                    </div>
                    
                </div>
            </div>
        </section>
    
        <!-- delapan contact -->
        <section class="bg-orange1 mt-15 pt-20 pb-20 mb-0">
            <div class="">
                <div class="">
                    <p class="text-center text-white">100.000++ customers</p>
                    <h1 class="sub-title text-white">Join membership ?</h1>
    
                    <div class="join-form">
                        <input class="email-form hover:cursor-text" type="email" name="email" id="" placeholder="Your E-mail">
                        <button class="py-2 px-4 bg-gray rounded-xl text-white hover:bg-gray400 hover:text-white transition duration-700" type="button">SUBSCRIBE NOW</button>
                    </div>
                </div>
            </div>
        </section>
    
        <!-- semb -->
        <footer class="bg-gray gap-10 py-2 mb-0 px-2 ">
            <div class="container flex flex-col md:flex-row justify-center items-center mt-4 py-4 gap-6">
                <ul class="flex flex-1 lg:justify-start gap-10 text-xs items-center text-white justify-center">
                    <li>Menu</li>
                    <li>Prices</li>
                    <li>Contact</li>
                </ul>
                
                <div class="flex flex-1 lg:justify-end justify-center gap-8 items-center ">
                    <img class="w-8 h-auto" src="./icon/facebook.png" alt="">
                    <img class="w-8 h-auto" src="./icon/twitter.png" alt="">
                </div>
            </div>
            
        </footer>
    </body>
</html>
