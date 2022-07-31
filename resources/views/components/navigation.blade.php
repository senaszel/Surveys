<!--Navbar-->
<nav class="bg-gray-200">
    <!--Container-->
    <div class="relative container mx-auto py-3">
        <!--Flex container-->
        <div class="flex items-center justify-between">
            <!--Logo-->
            <a href="{{ url('/') }}">
                <img src="{{asset('storage/image/survey.png')}}" width="64" alt="Surveys">
            </a>
            <!--Menu items-->
            <!--For medium devices set display-none-->
            <!--For bigger devices set display-flex-->
            <div class="hidden md:flex pl-4 space-x-10">

                @auth
                <a href="{{ url('/') }}" class="hover:text-red-700 text-xl whitespace-nowrap transition-colors {{ (request()->is('')) ? 'active:text-yellow-500' : '' }}">Homepage</a>
                <a href="{{ url('/opiniotworczy-uzytkownicy') }}" class="hover:text-red-700 text-xl whitespace-nowrap transition-colors {{ (request()->is('')) ? 'active:text-yellow-500' : '' }}">Opiniotwórczy uzytkownicy</a>
                <a href="{{ url('/dashboard') }}" class="hover:text-red-700 text-xl whitespace-nowrap transition-colors {{ (request()->is('dashboard')) ? 'active:text-yellow-500' : '' }}">Dashboard</a>
                <a href="{{ url('/create-survey') }}" class="hover:text-red-700 text-xl whitespace-nowrap transition-colors {{ (request()->is('create')) ? 'active:text-yellow-500' : '' }}">Utwórz ankiete</a>
                @else

                @endauth

                <!--
                    <a href="#" class="hover:text-red-700 text-xl transition-colors">Wypełnij</a>
                <a href="#" class="hover:text-red-700 text-xl transition-colors">Kategorie</a>
-->
            </div>

            <!--Buttons-->
            @if (Route::has('login'))
            <div class="flex ml-5 mr-1 space-x-3 whitespace-nowrap">
                @auth
                <a href="javascript:void" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="hidden md:block p-2 px-4 text-lg text-white bg-brightRed rounded-full hover:bg-brightRedLight transition-colors">Wyloguj się</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
                @else
                <a href="{{ route('login') }}" class="hidden md:block p-2 px-4 text-lg rounded-full bg-white hover:bg-gray-100 transition-colors">Zaloguj się</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="hidden md:block p-2 px-4 text-lg text-white bg-brightRed rounded-full hover:bg-brightRedLight transition-colors">Dołącz do nas!</a>
                @endif
                @endauth
            </div>
            @endif

        </div>
    </div>
</nav>
