@extends('admin.layout.app')

@section('title', 'Kreasi')

@section('content')
    <!-- Container for content -->
    <div class="bg-white p-4 sm:p-6 rounded-md shadow-md max-w-full mx-auto">
        <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold m-4 sm:m-6 text-center md:text-left">Data Kreasi</h1>

        <!-- Table -->
        <div class="overflow-x-auto">
            <table class="min-w-full border border-hulk text-xs sm:text-sm md:text-base">
                <thead>
                    <tr class="bg-green-100 text-left">
                        <th class="px-2 sm:px-4 py-2 border border-hulk">ID</th>
                        <th class="px-2 sm:px-4 py-2 border border-hulk">Author</th>
                        <th class="px-2 sm:px-4 py-2 border border-hulk">Kategori Kreasi</th>
                        <th class="px-2 sm:px-4 py-2 border border-hulk">Judul Kreasi</th>
                        <th class="px-2 sm:px-4 py-2 border border-hulk">Foto Kreasi</th>
                        <th class="px-2 sm:px-4 py-2 border border-hulk">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @foreach ($kreasi as $creation)
                        <tr>
                            <td class="px-2 sm:px-4 py-2 border border-hulk">{{ $creation->id }}</td>
                            <td class="px-2 sm:px-4 py-2 border border-hulk">{{ $creation->author }}</td>
                            <td class="px-2 sm:px-4 py-2 border border-hulk">{{ $creation->kategori_kreasi }}</td>
                            <td class="px-2 sm:px-4 py-2 border border-hulk">{{ $creation->judul_kreasi }}</td>
                            <td class="px-2 sm:px-4 py-2 border border-hulk">
                                @if($creation->foto_kreasi)
                                    <img src="{{ asset('storage/' . $creation->foto_kreasi) }}" alt="Foto Kreasi" class="h-20 w-auto mx-auto">
                                @else
                                    Tidak ada foto
                                @endif
                            </td>
                            <td class="px-2 sm:px-4 py-2 border-hulk flex flex-col sm:flex-row space-y-2 sm:space-y-0 sm:space-x-2 justify-center">
                                <button onclick="openOverlay()" class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700 text-center">Hapus</button>
                                <form action="{{ route('admin.kreasi.destroy', $creation->id) }}" method="POST" class="hidden">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </td>
                        </tr>
                    @endforeach --}}
                </tbody>
            </table>
        </div>
    </div>

    <!-- Overlay -->
    <div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
        <!-- Dialog Box -->
        <div class="bg-white p-6 rounded-md shadow-md text-center w-11/12 sm:w-80">
            <h2 class="text-lg sm:text-xl font-semibold mb-4">Yakin Menghapus Kreasi ini?</h2>
            <!-- Buttons -->
            <div class="flex justify-center space-x-4">
                <button onclick="confirmDelete()" class="px-4 py-2 border border-hulk text-hulk rounded hover:bg-red-100">
                    Ya
                </button>
                <button onclick="closeOverlay()" class="px-4 py-2 border border-red-600 text-red-600 rounded hover:bg-green-100">
                    Tidak
                </button>
            </div>
        </div>
    </div>

    <script>
        function openOverlay() {
            document.getElementById('overlay').classList.remove('hidden');
        }

        function closeOverlay() {
            document.getElementById('overlay').classList.add('hidden');
        }

        function confirmDelete() {
            alert('Item deleted');
            closeOverlay();
        }
    </script>
@endsection
