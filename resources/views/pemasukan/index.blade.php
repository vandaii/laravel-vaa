<x-dashboard-layout>
    <div class="flex flex-col gap-6 p-8 m-4 bg-white rounded-md shadow-sm">
        <h1 class="text-2xl mb-4">Validasi Infaq</h1>

        <table class="mb-4 table-auto border">
            <thead class="bg-gray-500 text-white">
                <th class="text-left py-3 px-4 uppercase font-semibold">No</th>
                <th class="text-left py-3 px-4 uppercase font-semibold">Tanggal/Waktu</th>
                <th class="text-left py-3 px-4 uppercase font-semibold">Nama</th>
                <th class="text-left py-3 px-4 uppercase font-semibold">Instansi</th>
                <th class="text-left py-3 px-4 uppercase font-semibold">Nominal</th>
                <th class="text-left py-3 px-4 uppercase font-semibold">Bukti</th>
                <th class="text-left py-3 px-4 uppercase font-semibold">Aksi</th>
            </thead>
            <tbody>
                @foreach ($data as $d)
                    <tr>
                        <td class="text-left py-3 px-4 uppercase font-semibold">{{ $loop->iteration }}</td>
                        <td class="text-left py-3 px-4 uppercase font-semibold">{{ $d->created_at }}</td>
                        <td class="text-left py-3 px-4 uppercase font-semibold">{{ $d->nama }}</td>
                        <td class="text-left py-3 px-4 uppercase font-semibold">{{ $d->instansi }}</td>
                        <td class="text-left py-3 px-4 uppercase font-semibold">{{ $d->nominal }}</td>
                        <td class="text-left py-3 px-4 uppercase font-semibold">
                            <img src="{{ asset('/images/bukti_bayar/'.$d->bukti_bayar) }}" class="w-60 bg-white">
                        </td>
                        <td class="text-left py-3 px-4 uppercase font-semibold">
                            @if ($d->is_valid == 0)
                                <a href="{{ route('pemasukan.validasi', $d->id) }}"
                                    class="bg-green-500 cursor-pointer text-white p-2 px-3 text-center rounded-md">
                                    Validasi
                                </a>
                                <form action="{{ route('pemasukan.destroy', $d->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="bg-red-500 text-white p-2 px-3 text-center rounded-md mt-3">Hapus</button>
                                </form>
                                @else
                                    Data Telah Valid
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-dashboard-layout>