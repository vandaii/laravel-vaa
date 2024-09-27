<div class="bg-white w-full p-4">
    <nav class="w-full flex justify-between">
        <ul class="flex gap-4 justify-center py-2">
            <li class="text-yellow-500 text-lg text-bold">
                <a href="{{ route('landing') }}">Beranda</a>
            </li>
            <li class="text-amber-500 text-lg">
                <a href="{{ route('pemasukan.create') }}">Pemasukan</a>
            </li>
        </ul>
        <a href="{{ route('login') }}" class="text-amber-600 text-lg p-2 rounded-md" >Log In</a>
    </nav>
</div>