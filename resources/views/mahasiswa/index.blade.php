<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

    <div class="container mx-auto py-10">
        <h1 class="text-3xl font-bold text-center mb-8 text-gray-800">Daftar Mahasiswa</h1>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="py-3 px-6 text-left font-semibold text-gray-700">Nama</th>
                        <th class="py-3 px-6 text-left font-semibold text-gray-700">NIM</th>
                        <th class="py-3 px-6 text-left font-semibold text-gray-700">Kelas</th>
                        <th class="py-3 px-6 text-left font-semibold text-gray-700">Semester</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($mahasiswas as $mahasiswa)
                    <tr class="hover:bg-gray-50">
                        <td class="py-3 px-6 text-gray-900">{{ $mahasiswa->nama }}</td>
                        <td class="py-3 px-6 text-gray-900">{{ $mahasiswa->nim }}</td>
                        <td class="py-3 px-6 text-gray-900">{{ $mahasiswa->kelas }}</td>
                        <td class="py-3 px-6 text-gray-900">{{ $mahasiswa->semester }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>