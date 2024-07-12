<style>
    .offcanvas-menu {
        transition: transform 0.3s ease-in-out;
        transform: translateX(-100%);
    }
    .offcanvas-menu.open {
        transform: translateX(0);
    }
</style>

<nav class="bg-base-100 text-white shadow-md w-full z-10 top-0">
    <div class="container mx-auto px-4 py-2 flex justify-between items-center">
        <div class="flex items-center space-x-4">
            <button id="menu-button" class="focus:outline-none flex items-center">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <i class="fa-solid fa-bars"></i>
                </svg>
            </button>
            <a href="#" class="text-xl font-bold">Hotel</a>
        </div>
        
    </div>
</nav>


<div id="offcanvas-menu" class="offcanvas-menu fixed inset-y-0 left-0 w-64 bg-white shadow-lg z-20">
    <div class="flex justify-end p-4">
        <button id="close-button" class="text-gray-800 focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </div>
    <nav class="flex flex-col p-4">
        <x-dash-links :href="route('dashboard')" :active="request()->routeIs('dashboard')">Dashboard</x-dash-links>
        <x-dash-links :href="route('profile.edit')" :active="request()->routeIs('profile.edit')">Profile</x-dash-links>
        <x-dash-links>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="text-black hover:text-white w-full text-start">Logout</button>
            </form>
        </x-dash-link>
    </nav>
</div>

<script>
    const menuButton = document.getElementById('menu-button');
    const closeButton = document.getElementById('close-button');
    const offcanvasMenu = document.getElementById('offcanvas-menu');

    menuButton.addEventListener('click', () => {
        offcanvasMenu.classList.toggle('open');
    });

    closeButton.addEventListener('click', () => {
        offcanvasMenu.classList.remove('open');
    });

    window.addEventListener('click', (e) => {
        if (e.target === offcanvasMenu) {
            offcanvasMenu.classList.remove('open');
        }
    });
</script>
