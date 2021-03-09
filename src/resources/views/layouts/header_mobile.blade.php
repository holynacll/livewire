<header x-data="{ isOpen: false }" class="w-full bg-white py-5 px-6 sm:hidden">
    <div class="flex items-center justify-between">
        <a href="#" class="text-gray-500 text-3xl font-semibold uppercase hover:text-gray-700">Admin</a>
        <button @click="isOpen = !isOpen" class="text-gray-500 text-3xl focus:outline-none">
            <i x-show="!isOpen" class="fas fa-bars"></i>
            <i x-show="isOpen" class="fas fa-times"></i>
        </button>
    </div>

    <!-- Dropdown Nav -->
    <nav :class="isOpen ? 'flex': 'hidden'" class="flex flex-col pt-4">
        <a href="#" class="flex items-center text-gray-500 hover:text-gray-700 py-2 pl-4 nav-item">
            <i class="fas fa-tachometer-alt mr-3"></i>
            Dashboard
        </a>
        <a href="#" class="flex items-center text-gray-500 hover:text-gray-700 opacity-75 hover:opacity-100 py-2 pl-4">
            <i class="fas fa-sticky-note mr-3"></i>
            Blank Page
        </a>
        <a href="#" class="flex items-center opacity-75 hover:opacity-100 py-2 pl-4 text-gray-500 hover:text-gray-700">
            <i class="fas fa-table mr-3"></i>
            Tables
        </a>
        <a href="#" class="flex items-center opacity-75 hover:opacity-100 py-2 pl-4 text-gray-500 hover:text-gray-700">
            <i class="fas fa-align-left mr-3"></i>
            Forms
        </a>
        <a href="#" class="flex items-center opacity-75 hover:opacity-100 py-2 pl-4 text-gray-500 hover:text-gray-700">
            <i class="fas fa-tablet-alt mr-3"></i>
            Tabbed Content
        </a>
        <a href="#" class="flex items-center opacity-75 hover:opacity-100 py-2 pl-4 text-gray-500 hover:text-gray-700">
            <i class="fas fa-calendar mr-3"></i>
            Calendar
        </a>
        <a href="#" class="flex items-center opacity-75 hover:opacity-100 py-2 pl-4 text-gray-500 hover:text-gray-700">
            <i class="fas fa-cogs mr-3"></i>
            Support
        </a>
        <a href="#" class="flex items-center opacity-75 hover:opacity-100 py-2 pl-4 text-gray-500 hover:text-gray-700">
            <i class="fas fa-user mr-3"></i>
            My Account
        </a>
        <a href="#" class="flex items-center opacity-75 hover:opacity-100 py-2 pl-4 text-gray-500 hover:text-gray-700">
            <i class="fas fa-sign-out-alt mr-3"></i>
            Sign Out
        </a>
    
    </nav>

</header>