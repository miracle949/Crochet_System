
<h3 class="text-center font-bold text-[20px]">Owners Crochet</h3>

<ul class="pt-5">
    <!-- Dashboard -->
    <li class="mt-3">
        <a href="{{route('DashboardPage')}}"
            class="flex items-center gap-3.5 px-5 py-4 text-[#212529] rounded-md hover:bg-[#212529] hover:text-white transition-colors duration-300 ease-in-out text-[15.5px]"
            id="sidebar-dashboard">
            <i class="fa fa-home"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Orders -->
    <li class="mt-2.5 relative has-dropdown">
        <a href="#"
            class="flex items-center justify-between px-5 py-4 text-[#212529] rounded-md hover:bg-[#212529] hover:text-white transition-colors duration-300 ease-in-out text-[15.5px]"
            id="sidebar-orders">
            <div class="flex items-center gap-3.5">
                <i class="fa-solid fa-box"></i>
                <span>Orders</span>
            </div>
            <i class="fa fa-chevron-right arrow transition-transform duration-300"></i>
        </a>

        <!-- Dropdown -->
        <ul class="pl-5 max-h-0 opacity-0 overflow-hidden transition-all duration-500 ease-in-out">
            <li><a href="#" class="block py-3.5 px-4 rounded-md hover:bg-[#212529] hover:text-white text-[15.5px]">All Orders</a></li>
            <li><a href="#" class="block py-3.5 px-4 rounded-md hover:bg-[#212529] hover:text-white text-[15.5px]">Pending Deliveries</a></li>
            <li><a href="#" class="block py-3.5 px-4 rounded-md hover:bg-[#212529] hover:text-white text-[15.5px]">Complete Orders</a></li>
            <li><a href="#" class="block py-3.5 px-4 rounded-md hover:bg-[#212529] hover:text-white text-[15.5px]">Cancelled Orders</a></li>
        </ul>
    </li>

    <!-- Products -->
    <li class="mt-2.5 relative has-dropdown">
        <a href="#"
            class="flex items-center justify-between px-5 py-4 text-[#212529] rounded-md hover:bg-[#212529] hover:text-white transition-colors duration-300 ease-in-out text-[15.5px]"
            id="sidebar-menu">
            <div class="flex items-center gap-3.5">
                <i class="fas fa-scissors"></i>
                <span>Products</span>
            </div>
            <i class="fa fa-chevron-right arrow transition-transform duration-300"></i>
        </a>

        <!-- Dropdown -->
        <ul class="pl-5 max-h-0 opacity-0 overflow-hidden transition-all duration-500 ease-in-out">
            <li><a href="{{route('admin_all_products')}}" class="block py-3.5 px-4 rounded-md hover:bg-[#212529] hover:text-white text-[15.5px]">Crochet Products</a></li>
            <li><a href="{{route('all_category')}}" class="block py-3.5 px-4 rounded-md hover:bg-[#212529] hover:text-white text-[15.5px]">Crochet Category</a></li>
            <li><a href="{{ route('featured_page') }}" class="block py-3.5 px-4 rounded-md hover:bg-[#212529] hover:text-white text-[15.5px]">Crochet Inventory</a></li>
            <li><a href="#" class="block py-3.5 px-4 rounded-md hover:bg-[#212529] hover:text-white text-[15.5px]">Yarn & Materials</a></li>
        </ul>
    </li>

    <!-- Customers -->
    <li class="mt-2.5 relative has-dropdown">
        <a href="#"
            class="flex items-center justify-between px-5 py-4 text-[#212529] rounded-md hover:bg-[#212529] hover:text-white transition-colors duration-300 ease-in-out text-[15.5px]">
            <div class="flex items-center gap-3.5">
                <i class="fa fa-users"></i>
                <span>Customers</span>
            </div>
            <i class="fa fa-chevron-right arrow transition-transform duration-300"></i>
        </a>

        <!-- Dropdown -->
        <ul class="pl-5 max-h-0 opacity-0 overflow-hidden transition-all duration-500 ease-in-out">
            <li><a href="#" class="block py-3.5 px-4 rounded-md hover:bg-[#212529] hover:text-white text-[15.5px]">Customer List</a></li>
            <li><a href="#" class="block py-3.5 px-4 rounded-md hover:bg-[#212529] hover:text-white text-[15.5px]">Customer Inquiries</a></li>
        </ul>
    </li>

    <!-- Reports -->
    <li class="mt-2.5">
        <a href="#"
            class="flex items-center gap-3.5 px-5 py-4 text-[#212529] rounded-md hover:bg-[#212529] hover:text-white transition-colors duration-300 ease-in-out text-[15.5px]">
            <i class="fas fa-chart-line"></i>
            <span>Reports</span>
        </a>
    </li>

    <!-- Feedbacks -->
    <li class="mt-2.5">
        <a href="#"
            class="flex items-center gap-3.5 px-5 py-4 text-[#212529] rounded-md hover:bg-[#212529] hover:text-white transition-colors duration-300 ease-in-out text-[15.5px]">
            <i class="fas fa-comments"></i>
            <span>Feedbacks</span>
        </a>
    </li>

    <!-- Settings -->
    <li class="mt-2.5">
        <a href="#"
            class="flex items-center gap-3.5 px-5 py-4 text-[#212529] rounded-md hover:bg-[#212529] hover:text-white transition-colors duration-300 ease-in-out text-[15.5px]">
            <i class="fa fa-gear"></i>
            <span>Settings</span>
        </a>
    </li>
</ul>

<script>
    // Dropdown toggle
    document.querySelectorAll(".has-dropdown > a").forEach(dropdownToggle => {
        dropdownToggle.addEventListener("click", function (e) {
            e.preventDefault();
            let parentLi = this.parentElement;

            // Close other dropdowns
            document.querySelectorAll(".has-dropdown").forEach(li => {
                if (li !== parentLi) {
                    li.classList.remove("open");
                    li.querySelector("ul").classList.remove("max-h-[500px]", "opacity-100");
                    li.querySelector("ul").classList.add("max-h-0", "opacity-0");
                    li.querySelector(".arrow").classList.remove("rotate-90");
                }
            });

            // Toggle current dropdown
            parentLi.classList.toggle("open");
            let dropdown = parentLi.querySelector("ul");
            let arrow = parentLi.querySelector(".arrow");

            if (parentLi.classList.contains("open")) {
                dropdown.classList.remove("max-h-0", "opacity-0");
                dropdown.classList.add("max-h-[500px]", "opacity-100");
                arrow.classList.add("rotate-90");
            } else {
                dropdown.classList.remove("max-h-[500px]", "opacity-100");
                dropdown.classList.add("max-h-0", "opacity-0");
                arrow.classList.remove("rotate-90");
            }
        });
    });
</script>
