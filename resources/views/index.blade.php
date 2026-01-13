<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to Owner Crochet</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Cinzel+Decorative&family=Cinzel:wght@400..900&family=Lobster&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Saira+Condensed:wght@100;200;300;400;500;600;700;800;900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        * {
            font-family: "Poppins", serif;
        }

        :root {
            --font-name: "Cinzel Decorative", serif;
        }

        /* h2 {
            font-family: "Cinzel Decorative", serif;
        } */

        main {
            width: 100%;
            height: 100vh;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            animation: bgAnimation 15s linear infinite;
        }

        /* .new-block{
            animation: appear linear;
            animation-timeline: view();
            animation-range: entry 0% cover 40%; 
        } */

        /* @keyframes appear{
            from{
                opacity: 0;
                transform: translateX(-100%);
                clip-path: inset(100% 100% 0 0);
            }

            to{
                opacity: 1;
                transform: translateX(0);
                clip-path: inset(0 0 0 0);
            }
        } */

        .new-block {
            opacity: 0;
            transition: all 1s;
        }

        .show {
            opacity: 1;
        }

        div.swiper-button-prev::after {
            font-size: 20px;
            color: #212529;
            font-weight: bold;
        }

        div.swiper-button-next::after {
            font-size: 20px;
            color: #212529;
            font-weight: bold;
        }

        @keyframes bgAnimation {
            0% {
                background-image: url('/images/14.jpg');
            }

            30% {
                background-image: url('/images/15.jpg');
            }

            60% {
                background-image: url('/images/16.jpg');
            }

            80% {
                background-image: url('/images/17.jpg');
            }

            100% {
                background-image: url('/images/18.jpg');
            }
        }

        .nav {
            transition: transform 0.5s;
        }

        .nav-hidden {
            transform: translateY(-100px)
        }
        
        .navigation-bar ul li::before{
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 0;
            height: 3px;
            background-color: #212529;
            
        }

        .navigation-bar ul li:hover::before{
            width: 100%;
            transition: all 0.3s ease-in-out;
        }
    </style>
</head>

<body>

    <div class="relative">

        {{-- <div
            class="fixed right-4 bottom-5 bg-[#212529] z-50 rounded-[50%] w-[60px] h-[60px] flex justify-center items-center">
            <a href="#" class="text-[30px] text-[#fffffe]" id="scroll-to-top-link"><i class="fa fa-chevron-up"></i></a>
        </div> --}}

        {{-- @if (session('message'))
        <div
            class="absolute right-3 top-3 bg-green-100 p-3 flex gap-3.5 justify-center items-center w-[250px] shadow-xl">
            <i class="fa fa-check p-2 rounded-[50%] bg-green-500"></i>
            <h3 class="text-[#000]">{{session('message')}}</h3>
        </div>
        @endif --}}

        {{-- @if (session('message'))
        <div class="absolute top-3 shadow-xl right-2.5 p-4 bg-green-100 flex gap-3 justify-center items-center rounded w-[250px]"
            id="popup">
            <i class="fa fa-check p-2 text-[#fff] rounded-[50%] bg-green-500"></i>
            <h3 class="text-[#000]">{{session('message')}}</h3>
        </div>
        @endif --}}

        <nav
            class="w-[100%] bg-[#fffffe] border border-b-[rgba(0,0,0,0.1)] h-[80px] flex justify-between items-center p-10 fixed top-0 z-50 nav">

            <div>
                {{-- <h2 class="font-bold text-[25px] text-[rgba(0,0,0,0.5)]">Llilay</h2> --}}
                <h2 class="font-bold text-[25px] text-[rgba(0,0,0,0.5)] font-(family-name: --font-name)">Owner</h2>
            </div>

            <div class="navigation-bar">
                <ul class="flex gap-[35px]">
                    <li class="relative"><a class="text-[rgba(0,0,0,0.5)] hover:text-[#212529] transition-all duration-100 ease-in-out hover:border-b-[#212529]"
                            href="#">Home</a></li>
                    <li class="relative"><a class="text-[rgba(0,0,0,0.5)] hover:text-[#212529] transition-all duration-100 ease-in-out hover:border-b-[#212529]"
                            href="#">About</a></li>
                    <li class="relative group">
                        <a class="text-[rgba(0,0,0,0.5)] hover:text-[#212529] transition-all duration-100 ease-in-out hover:border-b-[#212529]"
                            href="#">Video Tutorials</a>

                        {{-- <ul
                            class="absolute hidden group-focus-within:block shadow-md bg-white p-4 mt-3 w-[200px] -left-12 border-solid border-[rgba(0,0,0,0.1)] border-[1px]">
                            @if ($categories)
                            @foreach ($categories as $category)
                            <li class="mt-3">
                                <a href="#">
                                    {{$category->name}}
                                </a>
                            </li>
                            @endforeach
                            @endif
                        </ul> --}}

                    </li>
                    <li class="relative"><a class="text-[rgba(0,0,0,0.5)] hover:text-[#212529] transition-all duration-100 ease-in-out hover:border-b-[#212529]"
                            href="#">Blog</a></li>
                    <li class="relative"><a class="text-[rgba(0,0,0,0.5)] hover:text-[#212529] transition-all duration-100 ease-in-out hover:border-b-[#212529]"
                            href="#">Store</a></li>
                    <li class="relative"><a class="text-[rgba(0,0,0,0.5)] hover:text-[#212529] transition-all duration-100 ease-in-out hover:border-b-[#212529]"
                            href="#">Crochet Projects</a></li>
                </ul>
            </div>

            @if (!empty($username))

                <div class="flex gap-[20px]">

                    <a class="text-[18px] text-[rgba(0,0,0,0.5)] hover:text-[#212529] duration-100 transition-all ease-in-out"
                        href="/favorite"><i class="fa fa-heart"></i></a>

                    <ul class="relative group">
                        <li>
                            <a href="#" class="cursor-pointer">Welcome, {{$username}} <i class="fa fa-chevron-down"></i></a>
                            <ul
                                class="absolute hidden group-focus-within:block bg-white shadow-lg mt-2 p-2 rounded w-39 z-50">
                                <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Profile</a></li>
                                <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Reset Password</a></li>
                                <li>
                                    <hr class="my-1 border-gray-300">
                                </li>
                                <li>
                                    <form action="/logout" method="post" class="block">
                                        @csrf
                                        <button class="w-full text-left px-4 py-2 hover:bg-gray-100">Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>


                    <a class="text-[18px] text-[rgba(0,0,0,0.5)] hover:text-[#212529] duration-100 transition-all ease-in-out"
                        href="#"><i class="fa fa-shopping-cart"></i></a>

                </div>

            @else

                <div class="flex gap-[20px]">

                    <a class="text-[18px] text-[rgba(0,0,0,0.5)] hover:text-[#212529] duration-100 transition-all ease-in-out"
                        href="/favorite"><i class="fa fa-heart"></i></a>

                    <a class="text-[18px] text-[rgba(0,0,0,0.5)] hover:text-[#212529] duration-100 transition-all ease-in-out"
                        href="/login"><i class="fas fa-user"></i></a>


                    <a class="text-[18px] text-[rgba(0,0,0,0.5)] hover:text-[#212529] duration-100 transition-all ease-in-out"
                        href="#"><i class="fa fa-shopping-cart"></i></a>

                </div>

            @endif

        </nav>

        <main>


        </main>

        <div class="w-[100%] p-10 flex justify-center items-center flex-col">
            <h3 class="text-[28px] text-gray-700">Hey there! I'm [Name of the Owner]</h3>

            <p class="text-center w-[60%] mt-3 text-[19px] leading-[35px] text-gray-700">I'm the creator of
                Llilay
                Crochet. Welcome to
                this creative space where you can <a href="#" class="underline">learn how to crochet</a> or enhance your
                skills. This website is packed full of hints, tips, tutorials and inspiration for all skills levels. I'm
                excited to join your on your crochet journey so grab your hook and a cuppa and take look around.</p>
        </div>

        {{-- <div class="w-[100%] p-10">

            <h3 class="text-center text-[28px] text-gray-700">Product Category</h3>

            <div class="flex justify-center items-center gap-10 mt-3">

                @if ($categories)

                @foreach ($categories as $category)

                <a href="#" class="">
                    <div class="w-[350px] h-[330px] relative bg-[rgba(0,0,0,0.72)] flex justify-center items-center cursor-pointer"
                        style="background-image: url('{{ asset('uploads/products/' . $category->image) }}'); background-size: cover; background-position: center;">
                        <h3 class="text-[#ffffff] text-[25px] absolute font-semibold">
                            {{ $category->name }}
                        </h3>
                    </div>z
                </a>

                @endforeach

                @endif

            </div>
        </div> --}}

        <div class="w-[100%] p-10 bg-gray-100 relative">
            <h3 class="text-center text-[28px] text-gray-700">Latest Products</h3>

            <div class="swiper-button-prev absolute top-[10%] left-[33%]" style="font-size: 20px;"></div>
            <div class="swiper-button-next absolute top-[10%] right-[33%]" style=""></div>

            <div class="flex justify-center mt-[10px] text-[14px]">
                <a href="{{route("AllProducts")}}" class="uppercase underline">View all</a>
            </div>

            <div class="swiper mt-[20px]">

                <div class="swiper-wrapper flex gap-2 cursor-grabbing">

                    <div class="items swiper-slide flex justify-center w-[300px]">
                        <div class="box">
                            <img class="w-[300px] h-[300px] relative" src="/images/19.jpg" alt="">
                            {{-- <i
                                class="far fa-heart bold-heart absolute top-[4%] text-[30px] right-[16%] text-[#212529]"></i>
                            --}}
                            <h3 class="mt-[20px]">Crochet Tulips</h3>
                            <div class="flex items-center gap-2 mt-[8px]">
                                <p>₱40.00</p>

                                <del class="text-[#595959]">₱60.00</del>

                                <p class="text-red-600">Sale</p>
                            </div>
                        </div>
                    </div>

                    <div class="items swiper-slide flex justify-center w-[300px]">
                        <div class="box">
                            <img class="w-[300px] h-[300px]" src="/images/20.jpg" alt="">
                            <h3 class="mt-[20px]">Crochet Tulips Keychains</h3>
                            <div class="flex items-center gap-2 mt-[8px]">
                                <p>₱30.00</p>

                                <del class="text-[#595959]">₱50.00</del>

                                <p class="text-red-600">Sale</p>
                            </div>
                        </div>
                    </div>

                    <div class="items swiper-slide flex justify-center w-[300px]">
                        <div class="box">
                            <img class="w-[300px] h-[300px]" src="/images/21.jpg" alt="">
                            <h3 class="mt-[20px]">Crochet Straw Hat Keychains</h3>
                            <div class="flex items-center gap-2 mt-[8px]">
                                <p>₱40.00</p>

                                <del class="text-[#595959]">₱60.00</del>

                                <p class="text-red-600">Sale</p>
                            </div>
                        </div>
                    </div>

                    <div class="items swiper-slide flex justify-center w-[300px]">
                        <div class="box">
                            <img class="w-[300px] h-[300px]" src="/images/22.jpg" alt="">
                            <h3 class="mt-[20px]">Crochet Cat Paw Keychains</h3>
                            <div class="flex items-center gap-2 mt-[8px]">
                                <p>₱45.00</p>

                                <del class="text-[#595959]">₱60.00</del>

                                <p class="text-red-600">Sale</p>
                            </div>
                        </div>
                    </div>

                    <div class="items swiper-slide flex justify-center w-[300px]">
                        <div class="box">
                            <img class="w-[300px] h-[300px]" src="/images/23.jpg" alt="">
                            <h3 class="mt-[20px]">Crochet Headband</h3>
                            <div class="flex items-center gap-2 mt-[8px]">
                                <p>₱70.00</p>

                                <del class="text-[#595959]">₱90.00</del>

                                <p class="text-red-600">Sale</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- If we need pagination -->
                <div class="swiper-pagination relative mt-[40px]"></div>

                <!-- If we need navigation buttons -->


            </div>
        </div>

        <div class="w-[100%] p-10 flex justify-center items-center flex-wrap gap-10">

            <div class="w-[350px] h-[330px] bg-[url(images/beginner.jpg)] relative bg-[rgba(0,0,0,0.72)]">

                <h3 class="text-[#fffffe] text-[25px] absolute bottom-3 right-3">Beginner? Start here</h3>


            </div>

            <div class="w-[350px] h-[330px] bg-[url(images/tipsandtricks.jpg)] relative bg-[rgba(0,0,0,0.72)]">

                <h3 class="text-[#fffffe] text-[25px] absolute bottom-3 right-3">Tips and Techniques</h3>

            </div>

            <div class="w-[350px] h-[330px] bg-[url(images/blankets.jpg)] relative bg-[rgba(0,0,0,0.72)]">

                <h3 class="text-[#fffffe] text-[25px] absolute bottom-3 right-3">Blankets</h3>


            </div>

            <div class="w-[350px] h-[330px] bg-[url(images/wearables.jpg)] relative bg-[rgba(0,0,0,0.72)]">

                <h3 class="text-[#fffffe] text-[25px] absolute bottom-3 right-3">Wearables</h3>


            </div>

            <div class="w-[350px] h-[330px] bg-[url(images/homeware.jpg)] relative bg-[rgba(0,0,0,0.72)]">

                <h3 class="text-[#fffffe] text-[25px] absolute bottom-3 right-3">Homeware</h3>

            </div>

            <div class="w-[350px] h-[330px] bg-[url(images/baby.jpg)] relative bg-[rgba(0,0,0,0.72)]">

                <h3 class="text-[#fffffe] text-[25px] absolute bottom-3 right-3">Baby</h3>


            </div>

        </div>

        <div class="w-full p-10 flex flex-col md:flex-row justify-center items-center gap-10">

            <div class="relative w-full md:w-1/2 flex justify-left items-left">
                <img src="/images/mybooks2.webp" alt="Crochet blanket" class="w-[400px] h-[500px]">

                <img src="/images/mybooks1.webp" alt="Woman holding crochet book"
                    class="absolute h-[380px] -z-10 sm:-left-[80%]" style="width: 70%; top: 40%; left: 30%;">
            </div>

            <div class="w-full md:w-1/2 text-center md:text-left">
                <h3 class="text-[28px]">Get my books!</h3>
                <p class="mt-5 text-gray-700 leading-[35px]">If, like me you love crochet books, I have great news!
                    I've published not one, but TWO books. You can Crochet With Bella Coco which is a clear and simple
                    guide for the beginner and beyond. This book contains all of the information you need to know when
                    learning to crochet and serves as a handbook to look back on when you need it as well as 12
                    exclusive patterns designed to help you improve your skills.</p>
                <p class="mt-5 text-gray-700 leading-[35px]">And my latest Stitch Library contains 100 Stitches, Motifs
                    and Borders plus 3 patterns to practice your skills.</p>

                <button class="py-2 px-3 bg-[#212529] text-[#fffffe] mt-[15x] rounded-[5px]">You
                    can crochet</button>
                <button
                    class="py-2 px-3 hover:bg-[#212529] border border-[#212529] text-[#212529] mt-[15px] mx-2 rounded-[5px] hover:text-[#fffffe] duration-100 transition-all ease-in-out">Stitch
                    Library</button>
            </div>
        </div>

        <div class="w-[100%] p-10 mt-[5rem]">
            <div class="flex justify-center flex-col items-center">
                <h3 class="text-center text-[28px]">Latest From The Blog</h3>

                <p class="text-center w-[60%] mt-[10px]">Dive into our blog where you will find hundreds of blog posts
                    from tips
                    and techniques, an extensive stitch library, free crochet patterns and more...</p>
            </div>

            <div class="flex justify-center items-center gap-10 mt-[2rem]">

                <div class="w-[350px] h-[350px] relative cursor-pointer group overflow-hidden">
                    <img src="images/friends2.jpg" alt="" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-transparent group-hover:bg-black/50 transition-colors duration-300">
                    </div>
                    <div
                        class="absolute bottom-0 left-0 bg-[#212529] h-[70px] w-[100%] invisible opacity-0 group-hover:visible group-hover:opacity-100 transition-opacity duration-300">
                        <p class="text-[15px] text-[#fffffe] p-3 px-[20px]">Crochet Friendship Bracelet: Teach Your
                            Child How To Crochet</p>
                    </div>
                </div>

                <div class="w-[350px] h-[350px] relative cursor-pointer group overflow-hidden">
                    <img src="images/circle2.jpg" alt="" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-transparent group-hover:bg-black/50 transition-colors duration-300">
                    </div>
                    <div
                        class="absolute bottom-0 left-0 bg-[#212529] h-[70px] w-[100%] invisible opacity-0 group-hover:visible group-hover:opacity-100 transition-opacity duration-300">
                        <p class="text-[15px] text-[#fffffe] p-3 px-[20px]">Learn How to Crochet a Flat Circle</p>
                    </div>
                </div>

                <div class="w-[350px] h-[350px] relative cursor-pointer group overflow-hidden">
                    <img src="images/heart2.jpg" alt="" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-transparent group-hover:bg-black/50 transition-colors duration-300">
                    </div>
                    <div
                        class="absolute bottom-0 left-0 bg-[#212529] h-[70px] w-[100%] invisible opacity-0 group-hover:visible group-hover:opacity-100 transition-opacity duration-300">
                        <p class="text-[15px] text-[#fffffe] p-3 px-[20px]">How to Crochet a Bobble Heart Square - FREE
                            Crochet Pattern</p>
                    </div>
                </div>

                {{-- <div class="w-[350px] h-[350px] relative cursor-pointer">

                    <img src="images/friends2.jpg" alt="">

                    <div class="absolute bottom-0 left-0 bg-[#212529] h-[70px] w-[100%]">

                        <p class="text-[15px] text-[#fffffe] p-3 px-[20px]">Crochet Friendship Bracelet: Teach Your
                            Child How To Crochet</p>
                    </div>

                </div>


                <div class="w-[350px] h-[350px] relative cursor-pointer">

                    <img src="images/circle2.jpg" alt="">

                    <div class="absolute bottom-0 left-0 bg-[#212529] h-[70px] w-[100%]">
                        <p class="text-[15px] text-[#fffffe] p-3 px-[20px]">Learn How to Crochet a Flat Circle</p>
                    </div>
                </div>

                <div class="w-[350px] h-[350px] relative cursor-pointer">

                    <img src="images/heart2.jpg" alt="">

                    <div class="absolute bottom-0 left-0 bg-[#212529] h-[70px] w-[100%]">
                        <p class="text-[15px] text-[#fffffe] p-3 px-[20px]">How to Crochet a Bobble Heart Square - FREE
                            Crochet Pattern</p>
                    </div>

                </div> --}}

            </div>
        </div>

        {{-- <video controls autoplay class="w-[100%]">
            <source src="/video/crohet-video.mp4" type="video/mp4">
        </video> --}}

        <div class="w-[100%] mt-[5rem] relative z-0">

            <video class="w-[100%] bg-[rgba(0,0,0,0.10)]" src="video/crohet-video.mp4" loop autoplay muted>

            </video>

            <div class="w-[100%] absolute text-[#fffffe] top-[50%] translate-y-[-50%] text-center z-50">
                <p class="uppercase">Watch my</p>

                <h3 class="mt-4 text-[80px]">Latest Tutorial</h3>

                <p class="mt-4 text-[20px]">to learn new stitches improve your crochet skills</p>

                <button
                    class="py-3 px-6 bg-[#212529] text-[#fffffe] mt-6 rounded-[5px] border border-[rgba(255,255,255,0.1)] text-[15px]">Explore</button>
            </div>



        </div>

        {{-- <div class="relative w-[100%] mt-[5rem] hero-section">
            <video class="absolute top-0 left-0 w-full h-full object-cover z-0" src="video/crohet-video.mp4" loop
                autoplay muted></video>

            <div class="absolute top-0 left-0 w-full h-full bg-black opacity-30 z-10"></div>

            <div class="relative z-20 flex flex-col items-center justify-center h-full text-white text-center p-4">
                <p class="watch-my-text">WATCH MY</p>
                <h1 class="latest-tutorial-text">Latest Tutorial</h1>
                <p class="stitches-text">to learn new stitches improve your crochet skills</p>
                <button class="explore-button">EXPLORE</button>
            </div>
        </div> --}}

        <div class="w-[100%] p-10 flex justify-center gap-[60px] mt-[5rem]">

            <div>

                {{-- <div class=" border border-[#212529] w-[400px] h-[450px]">

                </div> --}}

                <img src="images/blanket.jpg" alt="">

            </div>

            <div>
                <h3 class="text-[28px]">Patchwork Blanket Ebook</h3>

                <p class="mt-4 text-[23px]">₱800.00</p>

                <p class="mt-4 text-[18px]">By <a href="#" class="underline text-[#212529]">Llilay</a></p>

                <button class="py-3 px-4 bg-[#212529] text-[#fffffe] rounded-[5px] mt-4">Purchase</button>
            </div>
        </div>

        <div class="w-[100%] p-10 flex justify-center mt[5rem]">
            <div class="w-[700px]">

                <h3 class="text-[28px]">About</h3>

                <p class="mt-5 text-[19px] w-[60%] leading-[35px]">Llilay Crochet is more than just a website for me.
                    It's an evolution of my passion of teaching and crocheting. It's been a rollercoaster of a journey
                    with lots of twists and turns. It's been a huge learning curve as I navigated my way around growing
                    a business and becoming a mum.If you want to see a little bit more of my journey and how I started
                    out crocheting while my husband watched football, to moving into an amazing Studio space with the
                    most amazing team, click the button below.</p>

                <button class="py-3 px-5 bg-[#212529] text-[#fffffe] rounded-[5px] mt-5">Read More</button>
            </div>

            <div>

                <div>
                    <img src="images/aboutpicture.jpg" alt="">
                </div>

            </div>
        </div>

        <div class="w-[100%] p-10 flex justify-center items-center gap-3 mt-[3rem]">

            <i class="fa fa-check-circle"></i>

            <p>4.9</p>

            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>

            <p>|</p>

            <p>4.9 out of 5 stars based on 166 reviews</p>

            <p>|</p>

            <p>Verified <i class="fa fa-check-circle"></i></p>


        </div>

        <div class="w-[100%] pt-5 mt-[5rem] bg-[#212529] h-[70vh]">

            <div class="flex justify-between">
                <div class="text-[#fffffe] p-5 w-[45%]">

                    <h3 class="text-[20px] w-[70%]">Welcome</h3>

                    <p class="text-[16px] mt-5 w-[95%] leading-[35px]">Welcome to this creative space where you can
                        learn
                        how to crochet or
                        enhance
                        your skills. This website is packed full of hints, tips, tutorials and inspiration for all skill
                        levels.</p>

                    <div class="mt-5 flex gap-3.5 w-[70%]">
                        <a href="#" class="text-[19px]"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#" class="text-[19px]"><i class="fa-brands fa-youtube"></i></a>
                        <a href="#" class="text-[19px]"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#" class="text-[19px]"><i class="fa-brands fa-pinterest"></i></a>
                    </div>
                </div>

                <div class="text-[#fffffe] p-5">

                    <h3 class="text-[20px]">Quick Links</h3>

                    <div class="flex flex-col mt-5 leading-[35px]">
                        <a href="#" class="text-[15[px]]">Account Login</a>
                        <a href="#" class="text-[15[px]]">Privacy Policy</a>
                        <a href="#" class="text-[15[px]]">Terms & Conditions</a>
                        <a href="#" class="text-[15px]">Shipping & Returns</a>
                        <a href="#" class="text-[15px]">Contact Us</a>
                        <a href="#" class="text-[15px]">CCPA</a>
                    </div>
                </div>

                <div class="text-[#fffffe] p-5">
                    <h3 class="text-[20px]">News Letter</h3>

                    <p class="mt-5">Sign up for exclusive offers, original stories, events and more.</p>

                    <form action="" method="post">
                        <input type="text" name="email" placeholder="Your email"
                            class="mt-5 py-2 px-2 text-[#212529]   outline-0 text-[15px] w-[100%]"><br>

                        <button class="py-2 px-3 bg-[#fffffe] text-[#212529] mt-3 text-[15px]">Subscribe</button>
                    </form>
                </div>
            </div>

            <hr class="mt-2">

            <div class="text-[#fffffe] flex justify-center items-center gap-1.5 mt-6 text-[14px]">

                <i class="fa-solid fa-copyright"></i>

                <p>2025</p>

                <p>Llilay Crochet Powered by</p>

            </div>

        </div>

        {{-- @if (session('message'))
        <div class="absolute top-3 shadow-xl right-2.5 p-4 bg-green-100 flex gap-3 justify-center items-center rounded w-[250px]"
            id="popup">
            <i class="fa fa-check p-2 text-[#fff] rounded-[50%] bg-green-500"></i>
            <h3 class="text-[#000]">{{session('message')}}</h3>
        </div>
        @endif --}}

        @if (session('message'))
            <div class="fixed top-3 shadow-xl right-3 p-4 bg-green-100 flex gap-3 justify-center items-center rounded w-[250px] z-50"
                id="popup">
                <i class="fa fa-check p-2 text-[#fff] rounded-[50%] bg-green-500"></i>
                <h3 class="text-[#000]">{{session('message')}}</h3>
            </div>
        @endif

    </div>

    {{-- <div
        class="fixed right-4 bottom-5 bg-[#212529] z-50 rounded-[50%] w-[60px] h-[60px] flex justify-center items-center">
        <a href="#" class="text-[30px] text-[#fffffe]" id="scroll-to-top-link"><i class="fa fa-chevron-up"></i></a>
    </div> --}}


    {{--
    <script>
        document.getElementById('scroll-to-top-link').addEventListener('click', function (e) {
            e.preventDefault();
            window.scrollTo(){
                top: 0,
                    behavior: 'smooth'
            };
        });

        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                console.log(entry)
                if (entry.isIntersecting) {
                    entry.target.classList.add('show');
                } else {
                    entry.target.classList.remove('show');
                }
            });
        });

        const hiddenElements = document.querySelectorAll('new-block');
        hiddenElements.forEach((el) => observer.observe(el));
    </script> --}}




</body>

{{--
<script>
    @if (session('message'))

        Swal.fire({
            title: "{{session('message')}}",
            icon: "success"
        });

    @endif
</script> --}}

<script>
    const nav = document.querySelector(".nav");

    let lastScrollY = window.scrollY;

    window.addEventListener('scroll', () => {
        if (lastScrollY < window.scrollY) {
            nav.classList.add('nav-hidden');
        } else {
            nav.classList.remove('nav-hidden');
        }

        lastScrollY = window.scrollY;
    });

</script>


<script>

    const popup = document.querySelector('#popup');

    setTimeout(() => {
        popup.style.display = "none";
    }, 3000);

    new Swiper('.swiper', {
        loop: true,

        // Pagination bullet
        pagination: {
            el: '.swiper-pagination',
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar',
        },

        breakpoints: {

            0: {
                slidesPerView: 1
            },

            768: {
                slidesPerView: 4
            },

            0: {
                slidesPerView: 1
            },
        }
    });
</script>

</html>