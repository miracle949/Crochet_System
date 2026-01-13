<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Featured</title>
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

    <div class="ms-[250px] bg-[#fefefefe] relative mb-10">
        <div class="px-7 py-5">
            <div class="flex justify-between items-center">

                <div class="flex items-center gap-3 w-[58%]">
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

            <div class="flex justify-between items-center mt-10">
                <div>
                    <h1 class="font-semibold"><i class="fa fa-tag"></i> Featured</h1>
                </div>

                <div class="flex justify-between items-center gap-5">
                    <button
                        class="border-solid border-[1px] border-[rgba(0,0,0,0.3)] rounded-[20px] py-2 px-4 text-[14.5px]">Import</button>
                    <button
                        class="border-solid border-[1px] border-[rgba(0,0,0,0.3)] rounded-[20px] py-2 px-4 text-[14.5px]">Export</button>

                    <a href="{{route("add_featured")}}"
                        class="bg-[#212529] text-white rounded-[20px] py-2 px-4 text-[14.5px]">Add Featured</a>
                </div>
            </div>  

        </div>

        <div class="mt-1 px-7">
            <div class="border-solid border-[1px] border-[rgba(0,0,0,0.3)] rounded-xl">
                <div class="p-3 border-b-[1px] border-solid border-[rgba(0,0,0,0.1)]">
                    <div class="flex gap-7 items-center">
                        <p
                            class="py-1.5 px-4 bg-[#F5F5F5] text-[14px] border-solid border-[1px] border-[rgba(0,0,0,0.1)] rounded-xl">
                            All</p>

                        <p class="text-[14px]"><i class="fa fa-plus"></i></p>
                    </div>

                    <div>

                    </div>
                </div>
                <table class="w-full">
                    <thead class="bg-[#F5F5F5] rounded-xl">
                        <tr class="text-[12px] border-solid border-b-[1px] border-[rgba(0,0,0,0.1)]">
                            <th class="font-medium p-3 text-left gap-3 rounded-bl-xl">
                                Title
                            </th>
                            <th class="font-medium p-2 text-left">Products</th>
                            <th class="font-medium p-2 text-left">Product Conditions</th>
                            <th class="font-medium p-2 text-left rounded-br-xl">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($featured)
                            @foreach ($featured as $feature)
                                <tr class="text-[12px] border-solid border-b-[1px] border-[rgba(0,0,0,0.1)] cursor-pointer">
                                    <td class="font-medium p-2 flex items-center gap-3 w-30">
                                        <img src="uploads/products/{{$feature->image}}"
                                            class="w-[40px] h-[40px] rounded-md border-solid border-[1px] border-[rgba(0,0,0,0.3)]"
                                            alt="">
                                        {{$feature->name}}
                                    </td>
                                    <td class="p-2"></td>
                                    <td class="p-2"></td>
                                    <td class="font-medium p-2">

                                        <div class="flex gap-3">
                                            <a href=""
                                                class="py-1.5 px-3 border-solid border-[1px] border-[#212529] rounded-md">
                                                <i class="fa fa-edit"></i>
                                            </a>

                                            <a href="{{route('deleteCategory', $feature->id)}}"
                                                class="py-1.5 px-3 border-solid border-[1px] border-[#212529] rounded-md">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>

        @if (session('success'))

            <div class="fixed bottom-3 shadow-xl right-3 p-4 bg-green-100 flex gap-3 justify-center items-center rounded w-[250px] z-50"
                id="popup">
                <i class="fa fa-check p-2 text-[#fff] rounded-[50%] bg-green-500"></i>
                <h3 class="text-[#000]">{{session('success')}}</h3>
            </div>

        @endif

    </div>

    <script>
        const popup = document.querySelector('#popup');

        setTimeout(() => {
            popup.style.display = 'none';
        }, 3000);
    </script>

</body>

</html>