{{--
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Signup</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Cinzel+Decorative&family=Cinzel:wght@400..900&family=Lobster&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Saira+Condensed:wght@100;200;300;400;500;600;700;800;900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        * {
            font-family: "Poppins", serif;
        }
    </style>
</head>

<body>

    <div class="flex justify-center items-center h-screen bg-[#fefefefe]">

        <div class="w-100 shadow-md p-6 rounded-md bg-[#fefefefe] border-solid border-[rgba(0,0,0,0.1)] border-[1px]">
            <form action="{{route('register')}}" method="post">
                @csrf

                <h2 class="text-2xl uppercase font-bold mt-3 text-center">Signup</h2>

                <div class="mt-3">
                    <label for="username" class="block text-[17px]">Username</label>
                    <input type="text" name="username" placeholder="Enter your username"
                        class="w-full mt-2 text-[17px] border-b-[1.5px] outline-0 py-1 px-2" required>
                </div>

                <div class="mt-5">
                    <label for="password" class="block text-[17px]">Password</label>
                    <input type="password" name="password" placeholder="Enter your password"
                        class="w-full mt-2 text-[17px] border-b-[1.5px] outline-0 py-1 px-2" required>
                </div>

                <div class="mt-5">
                    <label for="confirm_password" class="block text-[17px]">Confirm Password</label>
                    <input type="password" name="confirm_password" placeholder="Confirm your password"
                        class="w-full mt-2 text-[17px] border-b-[1.5px] outline-0 py-1 px-2" required>
                </div>

                <div class="mt-5">
                    <label for="email" class="block text-[17px]">Email</label>
                    <input type="email" name="email" placeholder="Enter your email"
                        class="w-full mt-2 text-[17px] border-b-[1.5px] outline-0 py-1 px-2" required>
                </div>

                <div class="mt-5">
                    <button
                        class="text-[17px] w-full bg-[#212529] py-1 text-white uppercase font-bold rounded-md cursor-pointer">Signup</button>
                </div>

                <div class="mt-5 flex justify-center align-center">
                    <label>Don't have an account? <a href="/login" class="underline font-bold">Login</a></label>
                </div>


            </form>
        </div>

    </div>

</body>

</html> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Signup</title>
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

    <div class="container relative p-10">

        <div
            class="flex justify-around shadow-2xl rounded-tl-xl rounded-bl-xl border border-[rgba(0,0,0,0.1)] w-[100%] mt-[-1rem]">

            <div class="p-10 w-[600px]">
                <form action="/user-register" method="POST" class="flex flex-col justify-start">
z
                    @csrf

                    <h2 class="text-[23px] text-center mt-3">Create your account,</h2>

                    <label class="mt-5">Username</label>
                    <input type="text" name="username" placeholder="Enter username"
                        class="py-1 px-2 border-b-[1px] border-[#212529] outline-0 mt-3">

                    <label class="mt-7">Password</label>
                    <input type="password" name="password" placeholder="Enter password"
                        class="py-1 px-2 border-b-[1px] border-[#212529] outline-0 mt-3">

                    <label class="mt-7">Confirm Password</label>
                    <input type="password" name="confirm_password" placeholder="Confirm Password"
                        class="py-1 px-2 border-b-[1px] border-[#212529] outline-0 mt-3">

                    <label class="mt-7">Email</label>
                    <input type="text" name="email" placeholder="Enter email"
                        class="py-1 px-2 border-b-[1px] border-[#212529] outline-0 mt-3">

                    <button class="bg-[#212529] mt-5 py-2 px-3 text-[#fffffe] font-bold rounded-[28px]">Signup</button>

                </form>
            </div>

            <div
                class="relative w-[600px] h-[565px] text-[#fffffe] flex justify-center items-center flex-col overflow-hidden rounded-tr-xl rounded-br-xl">

                <video autoplay loop muted class="absolute inset-0 w-full h-full object-cover"
                    src="video/signup-video.mp4">
                    Your browser does not support the video tag.
                </video>

                <div class="absolute inset-0 bg-black opacity-50"></div>

                <div class="relative z-10 flex justify-center items-center flex-col">
                    <h3 class="text-[28px]">I have an account already!</h3>
                    <p class="text-[18px] w-[80%] text-center mt-5">Back to the login and sign in my account now!</p>
                    <a href="/login" class="mt-10 py-2 px-8 border-2 border-[#fffffe] rounded-[28px]">Login</a>
                </div>
            </div>
        </div>

        @if (session('success'))
            <div class="fixed bottom-3 shadow-xl right-3 p-4 bg-green-100 flex gap-3 justify-center items-center rounded w-[350px] z-50"
                id="popup">
                <i class="fa fa-check p-2 text-[#fff] rounded-[50%] bg-green-500"></i>
                <h3 class="text-[#000]">{{session('success')}}</h3>
            </div>
        @endif
    </div>

    <script>
        const popup = document.querySelector("#popup");

        setTimeout(() => {
            popup.style.display = "none";
        }, 3000);
    </script>

</body>

</html>