<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
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

        button {
            position: relative
        }

        .loading {
            position: absolute;
            width: 16px;
            height: 16px;
            border: 3px solid white;
            left: 38.5%;
            border-top: 3px solid #155DFC;
            top: 27%;
            border-radius: 50%;
            animation: spin 2s linear infinite;
            display: none;
        }

        @keyframes spin {
            100% {
                transform: rotate(360deg);
            }
        }
    </style>
</head>

<body>

    <div class="container relative p-10">

        <div class="absolute left-7 top-4">
            <a href="/home" class="text-[25px]"><i class="fa fa-arrow-left"></i></a>
        </div>

        <div
            class="flex justify-around shadow-2xl rounded-tl-xl rounded-bl-xl border border-[rgba(0,0,0,0.1)] w-[100%] mt-[3.5rem]">

            <div class="p-10 w-[600px]">
                <form action="user-login" method="post" class="flex flex-col justify-start form">

                    @csrf

                    <h2 class="text-[23px] text-center mt-3">Welcome back,</h2>

                    <label class="mt-5">Email</label>
                    <input type="text" name="email" placeholder="Enter email"
                        class="py-1 px-2 border-b-[1px] border-[#212529] outline-0 mt-3" required>

                    <label class="mt-10">Password</label>
                    <input type="password" name="password" placeholder="Enter password"
                        class="py-1 px-2 border-b-[1px] border-[#212529] outline-0 mt-3" required>

                    <div class="mt-5 flex justify-between items-center">
                        <div>
                            <label> <input type="checkbox" name="remember"> Remember me?</label>
                        </div>

                        <div>
                            <a href="#" class="underline">Forgot Password</a>
                        </div>
                    </div>

                    <button id="login" class="bg-[#212529] mt-5 py-2 px-3 text-[#fffffe] font-bold rounded-[28px]">
                        <div class="loading"></div>Login
                    </button>

                </form>
            </div>

            <div
                class="relative w-[600px] h-[445px] text-[#fffffe] flex justify-center items-center flex-col overflow-hidden rounded-tr-xl rounded-br-xl">

                <video autoplay loop muted class="absolute inset-0 w-full h-full object-cover"
                    src="video/login-video.mp4">
                    Your browser does not support the video tag.
                </video>

                <div class="absolute inset-0 bg-black opacity-50"></div>

                <div class="relative z-10 flex justify-center items-center flex-col">
                    <h3 class="text-[28px]">New here?</h3>
                    <p class="text-[18px] w-[80%] text-center mt-5">Signup and discover great amount of new
                        opportunities!</p>
                    <a href="/signup" class="mt-10 py-2 px-8 border-2 border-[#fffffe] rounded-[28px]">Signup</a>
                </div>
            </div>
        </div>

        {{--
        <script>
            setTimeout(() => {
                window.location.href = "{{ session('redirect_to') }}"
            }, 3000);
        </script> --}}


        {{--
        <script>
            const loading = document.querySelector(".loading");
            const login = document.getElementById("login");

            login.addEventListener("click", () => {

                loading.style.display = "block";
                login.style.backgroundColor = "#364153";

                setTimeout(() => {
                    loading.style.display = "none";
                    login.style.backgroundColor = "";

                    window.location.href = "{{ session('redirect_to') }}";
                }, 3000);

            });

        </script> --}}

        <script>
            // const loading = document.querySelector(".loading");
            const form = document.querySelector(".form");
            const loading = document.querySelector(".loading");
            const login = document.getElementById("login");

            form.addEventListener("submit", () => {

                loading.style.display = "block";
                login.style.backgroundColor = "#364153";

                setTimeout(() => {
                    loading.style.display = "none";
                    login.style.backgroundColor = "";


                    window.location.href = "{{ session('redirect_to') }}";

                }, 5000);
            });

        </script>

</body>

</html>

{{--
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
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
    </style>
</head>

<body>

    <div class="container p-10 relative h-[100vh] flex justify-center items-center">
        <div class="absolute left-7 top-4">
            <a href="/home" class="text-[25px]"><i class="fa fa-arrow-left"></i></a>
        </div>

        <div class="">
            <form action="" method="post" class="shadow-lg w-full bg-white p-10">

                <h2 class="text-[25px] text-center">🧶 Welcome Login now,</h2>

                <p class="w-[500px] mt-3 text-center">Crochet is the art of looping yarn with a hook to create handmade
                    clothes, décor, and accessories.</p>

                <div class="mt-3">
                    <label>Email</label>
                    <input type="text" placeholder="Enter email"
                        class="w-full outline-0 py-1 px-3 border-solid border-[rgba(0,0,0,0.3)] border-[1px] mt-2">
                </div>

                <div class="mt-3">
                    <label>Password</label>
                    <input type="password" placeholder="Enter password"
                        class="w-full outline-0 py-1 px-3 border-solid border-[rgba(0,0,0,0.3)] border-[1px] mt-2">
                </div>

                <div class="mt-3">
                    <button class="w-full bg-[#212529] text-white py-2 font-bold">Login</button>
                </div>

                <div class="mt-3">
                    <a href="#">Forgot Password</a>
                </div>
            </form>
        </div>
    </div>

</body>

</html> --}}