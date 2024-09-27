<div class="min-h-screen bg-blue-500 shadow-sm p-8 text-lg justify-between">
    <nav>
        <ul class="flex flex-col gap-6">
            <li>
                <a class="p-2 rounded-md text-white transition-all ease-in-out" href="{{ route('dashboard') }}">Dashboard</a>
            </li>
            <li>
                <a class="p-2 rounded-md text-white transition-all ease-in-out" href="{{ route('pemasukan.index') }}">Pemasukan</a>
            </li>
            <li>
                <a class="p-2 rounded-md text-white transition-all ease-in-out" href="{{ route('pengeluaran.index') }}">Pengeluaran</a>
            </li>
        </ul>
        <ul class="flex flex-col gap-6 mt-96">
            <li>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
    
                    <a class="text-lg ml-2 text-white cursor-pointer" :href="route('logout')"
                        onclick="event.preventDefault();
                            this.closest('form').submit();">
                        {{ __('Logout') }}
                    </a>
                </form>
            </li>
        </ul>
    </nav>
</div>