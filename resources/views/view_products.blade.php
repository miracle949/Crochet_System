<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $products->name }}</title>
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

        {{-- <div>
            <p class="text-[15px]"><a href="/home" class="underline">Welcome to Owners Crochet</a> / <a href="#">View
                    All</a></p>
        </div> --}}

        <p class="text-[15px] mt-[110px] ps-10 pe-10"><a href="/AllProducts" class="underline">View All</a> /


            @if ($products)

                <a href="#" class="cursor-auto">

                    {{ $products->name }}

                </a>

            @endif

        </p>

        <form action="#" method="post">

            <div class="flex gap-5 ps-10 pt-7 pe-10">
                @if ($products)

                    <div>
                        <img src="/uploads/products/{{ $products->image }}" class="w-[100px] h-[100px]" alt="">
                    </div>

                    <div class="sticky top-0">
                        <img src="/uploads/products/{{$products->image}}" class="w-[450px] h-[450px]" alt="">
                    </div>

                    <div>
                        <input type="hidden" value="{{ $products->id }}" name="product_id">

                        <h3 class="text-[28px] text-gray-700 font-semibold">{{$products->name}}</h3>
                        <input type="hidden" value="{{ $products->name }}" name="product_name">

                        <p class="mt-3 text-[18px]">₱{{$products->price}}</p>
                        <input type="hidden" name="product_price" value="{{ $products->price }}">

                        <p class="mt-3">Product Quantity</p>

                        <div class="counter border-solid border-[1px] border-[#212529] w-[273px] mt-2">
                            <button type="button" id="minus" class="py-2 px-2 cursor-pointer">-</button>
                            <input type="number" name="quantity" id="quantity" value="1"
                                class="px-2 py-2 border-solid text-center bg-white" disabled>
                            <button type="button" id="plus" class="py-2 px-2 cursor-pointer">+</button>
                        </div>

                        <div class="flex flex-col w-[400px]">
                            <button
                                class="uppercase font-semibold mt-5 py-3 px-[65px] border-solid border-[2px] hover:border-[2.5px] border-[#212529] text-[#212529] text-[14px]">Add
                                to
                                cart</button>

                            <button type="submit"
                                class="uppercase font-semibold mt-5 py-3 px-[65px] bg-[#212529] text-white text-[14px] hover:bg-gray-700 transition-all">Buy
                                it now!</button>
                        </div>

                        <p class="mt-5 w-[580px]">{{$products->description}}</p>
                    </div>

                @endif
            </div>

        </form>

        <div class="mt-10">

            <h3 class="text-center text-[28px] text-gray-700">Featured Products</h3>

            <p class="text-center mt-2 text-gray-700">Discover our featured products top picks chosen just for you!</p>

            <div class="flex justify-center items-center gap-5 p-10">

                @if ($featuredProducts)

                    @foreach ($featuredProducts as $featuredProduct)


                        <div class="bg-gray-100 h-[350pxs] p-3 shadow-md border-solid border-[1px] border-[rgba(0,0,0,0.1)]">
                            <img class="w-[280px] h-[280px]" src="/uploads/products/{{ $featuredProduct->image }}" alt="">

                            <p class="mt-2">{{ $featuredProduct->category }}</p>

                            <h3 class="mt-1">{{ $featuredProduct->name }}</h3>

                            <div class="mt-1">
                                <span><i class="fa fa-star border-solid"></i></span>
                                <span><i class="fa fa-star border-solid"></i></span>
                                <span><i class="fa fa-star border-solid"></i></span>
                                <span><i class="fa fa-star border-solid"></i></span>
                                <span><i class="fa fa-star border-solid"></i></span>
                            </div>

                            <div class="flex justify-between items-center">
                                <p class="mt-1">₱{{ $featuredProduct->price }}</p>

                                <button><i
                                        class="fa fa-shopping-cart rounded-[50%] bg-white p-3 border-solid border-[1px] border-[rgba(0,0,0,0.1)]"></i></button>
                            </div>
                        </div>

                    @endforeach

                @endif

            </div>

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
    </div>

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
        const minusBtn = document.querySelector('#minus');
        const plusBtn = document.querySelector('#plus');
        const quantityDisplay = document.querySelector("#quantity");

        let quantity = 1;

        plusBtn.addEventListener('click', () => {
            quantity++;
            quantityDisplay.value = quantity;
        });

        minusBtn.addEventListener('click', () => {
            if (quantity > 1) {
                quantity--;
                quantityDisplay.value = quantity;
            }
        });
    </script>

</body>

</html>