<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapisz.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
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

        ::-webkit-scrollbar {
            width: 0px;
        }

        ::-webkit-scrollbar-thumb {
            background-color: #212529;
            border-radius: 28px;
            padding: 10px;
        }

        ::-webkit-scrollbar-track {
            box-shadow: inset 0 0 5px #DADCDE;
        }
    </style>
</head>

<body>

    <div
        class="fixed left-0 top-0 h-[100%] w-[250px] ps-4 pt-7 pe-4 bg-[#fefefefe] border-solid border-[rgba(0,0,0,0.1)] border-r-[1px] overflow-y-auto">

        @include('sidebar')

    </div>

    <div class="ms-[250px] bg-[#fefefefe] relative">

        <div class="px-7 py-5">
            <div class="flex justify-between items-center">

                <div class="flex items-center gap-3 w-[58%]">
                    <h1 class="font-bold">OverView</h1>

                    <div
                        class="bg-[transparent] border-solid border-[1px] rounded-[20px] border-[rgba(0,0,0,0.3)] px-4 py-1.5 w-[58%]">
                        <i class="fa fa-search"></i>
                        <input type="search" name="search" placeholder="Search...."
                            class="bg-[#fefefefe] px-2 outline-0 text-[14.5px] w-[92%]">
                    </div>
                </div>

                <div class="flex justify-between items-center gap-4">
                    <div>
                        <i class="fa fa-bell text-[#212529]"></i>
                    </div>

                    <div>
                        <ul class="relative group">
                            <li>
                                <a href="#" class="flex items-center gap-3">
                                    <i
                                        class="fa fa-user text-[16px] rounded-[50%] bg-[#212529] text-[#fefefefe] p-2.5"></i>
                                    <span class="text-[17px]">Welcome, {{$username}}</span>

                                    <i class="fa fa-caret-down text-[13px]"></i>
                                </a>

                                <ul
                                    class="absolute hidden group-focus-within:block shadow-md z-50 w-full mt-3 p-3 bg-[#fefefefe]">
                                    <li class="px-2 hover:bg-gray-100 py-2">
                                        <i class="fa fa-user"></i>
                                        <a href="#">Profile</a>
                                    </li>
                                    <li class="px-2 hover:bg-gray-100 py-2">
                                        <i class="fa fa-lock"></i>
                                        <a href="#">Reset Password</a>
                                    </li>
                                    <li class="px-2 hover:bg-gray-100 py-2">
                                        <form action="/logout" method="post">

                                            @csrf

                                            <i class="fa fa-sign-out"></i>
                                            <button href="#">Logout</button>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <form action="{{route("AddCategory")}}" method="post" enctype="multipart/form-data">

            @csrf


            <div class="flex justify-between items-center px-7 pt-1">

                <div>
                    <h2 class="text-[18px]"><i class="fa fa-store"></i> Add New Category</h2>
                </div>

                <div class="flex items-center gap-3">

                    <div class="flex items-center gap-5">
                        <button type="submit" class="bg-[#212529] text-white py-2 px-4 rounded-[20px] text-[14.5px]"
                            id="addProducts"><i class="fa fa-check"></i> Add
                            Category</button>
                    </div>
                </div>

            </div>

            <div class="flex justify-between m-7">
                <div class="p-5 w-[55%] rounded-lg border-solid border-[1px] border-[rgba(0,0,0,0.3)]">
                    <h2 class="text-[17px] font-semibold">General Information</h2>

                    <div class="mt-5">
                        <label class="text-[15px]">Category Name</label>
                        <input type="text" name="name" placeholder="Enter the category name"
                            class="w-full mt-2 py-1.5 px-2 text-[14.5px] outline-0 border-solid border-[1px] border-[rgba(0,0,0,0.2)] rounded"
                            required>
                    </div>

                    <div class="mt-5">
                        <label class="text-[15px]">Category Description</label>

                        <textarea name="description" cols="30" rows="8" required
                            class="w-full mt-2 outline-0 px-2 py-1.5 overflow-y-auto resize-none text-[14.5px] border-solid border-[1px] border-[rgba(0,0,0,0.2)] rounded"
                            placeholder="Enter the category description"></textarea>
                    </div>

                    <div class="mt-5">
                        <label class="text-[15px]">Category Image</label>
                        <input type="file" name="image"
                            class="w-full text-[14.5px] mt-2 bg-[#fefefefe] py-1.5 px-2 rounded border-solid border-[1px] border-[rgba(0,0,0,0.2)]"
                            id="inputBox" required>
                    </div>

                </div>
                <div
                    class="w-[40%] h-[400px] rounded-lg border-solid border-[1px] border-[rgba(0,0,0,0.3)] flex justify-center items-center p-3">
                    <img src="" class="w-full h-[350px] rounded-lg" id="inputImage" alt="No Uploaded Image">
                </div>
            </div>

        </form>

    </div>

    @if (session('success'))
        <div class="fixed bottom-3 shadow-xl right-3 p-4 bg-green-100 flex gap-3 justify-center items-center rounded w-[320px] z-50"
            id="popup">
            <i class="fa fa-check p-2 text-[#fff] rounded-[50%] bg-green-500"></i>
            <h3 class="text-[#000]">{{session('success')}}</h3>
        </div>
    @endif

    <script>
        const imageFile = document.querySelector('#inputImage');
        const inputBox = document.querySelector('#inputBox');
        const popup = document.querySelector('#popup');

        setTimeout(() => {
            popup.style.display = "none";
        }, 3000);

        inputBox.addEventListener('change', function () {

            imageFile.src = window.URL.createObjectURL(this.files[0]);

        });
    </script>

</body>

</html>