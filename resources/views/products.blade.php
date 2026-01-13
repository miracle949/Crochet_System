<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View All Products</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Cinzel+Decorative&family=Cinzel:wght@400..900&family=Lobster&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Saira+Condensed:wght@100;200;300;400;500;600;700;800;900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <style>
        * {
            font-family: "Poppins", serif;
        }

        .nav {
            transition: transform 0.5s;
        }

        .nav-hidden {
            transform: translateY(-100px)
        }

        .products:hover{
            transform: scale(1.1);
            transition: .2s;
        }
    </style>

</head>

<body>

    <div class="container">

        <nav
            class="w-[100%] bg-[#fffffe] border border-b-[rgba(0,0,0,0.1)] h-[80px] flex justify-between items-center p-10 fixed top-0 z-50 nav">

            <div>
                {{-- <h2 class="font-bold text-[25px] text-[rgba(0,0,0,0.5)]">Llilay</h2> --}}
                <h2 class="font-bold text-[25px] text-[rgba(0,0,0,0.5)]">Owner</h2>
            </div>

            <div>
                <ul class="flex gap-[35px]">
                    <li><a class="text-[rgba(0,0,0,0.5)] hover:border-b-2 hover:text-[#212529] transition-all duration-100 ease-in-out hover:border-b-[#212529]"
                            href="/home">Home</a></li>
                    <li><a class="text-[rgba(0,0,0,0.5)] hover:border-b-2 hover:text-[#212529] transition-all duration-100 ease-in-out hover:border-b-[#212529]"
                            href="#">About</a></li>
                    <li><a class="text-[rgba(0,0,0,0.5)] hover:border-b-2 hover:text-[#212529] transition-all duration-100 ease-in-out hover:border-b-[#212529]"
                            href="#">Video Tutorials</a></li>
                    <li><a class="text-[rgba(0,0,0,0.5)] hover:border-b-2 hover:text-[#212529] transition-all duration-100 ease-in-out hover:border-b-[#212529]"
                            href="#">Blog</a></li>
                    <li><a class="text-[rgba(0,0,0,0.5)] hover:border-b-2 hover:text-[#212529] transition-all duration-100 ease-in-out hover:border-b-[#212529]"
                            href="#">Store</a></li>
                    <li><a class="text-[rgba(0,0,0,0.5)] hover:border-b-2 hover:text-[#212529] transition-all duration-100 ease-in-out hover:border-b-[#212529]"
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

        <main class="mt-[50px] p-10 w-[100%]">

            <p class="text-[15px] mt-5"><a href="/home" class="underline">Welcome to Owners Crochet</a> / <a
                    href="#">View
                    All</a></p>

            <div class="flex justify-between mt-5">

                <div class="">
                    <div class="shadow-md border-solid border-[1px] border-[rgba(0,0,0,0.1)]">
                        <img src="/images/productAds.jpg" alt="">
                    </div>
                </div>

                <div class="flex gap-3 flex-wrap w-[850px]">
                    @if ($products)

                        @foreach ($products as $product)

                            <a href="{{route('view_products', $product->id)}}" class="h-[350px]">
                                <div
                                    class="bg-gray-100 h-[350pxs] p-3 shadow-md border-solid border-[1px] border-[rgba(0,0,0,0.1)]">
                                    <img src="uploads/products/{{$product->image}}"
                                        class="w-[250px] h-[250px] hover:transform-3d" alt="">

                                    <h3 class="mt-2">{{$product->name}}</h3>

                                    <p class="mt-2">₱{{$product->price}}</p>
                                </div>
                            </a>

                        @endforeach

                    @endif
                </div>
            </div>




        </main>

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
</body>

</html>