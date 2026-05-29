<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Siswa</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-slate-100 flex h-screen overflow-hidden font-sans">

    <aside class="w-64 bg-slate-900 text-slate-300 flex flex-col justify-between p-6">
        <div>
            <div class="flex items-center gap-3 mb-8 px-2">
                <span class="text-2xl">🎓</span>
                <h1 class="text-lg font-bold text-white tracking-wide">DevAcademy</h1>
            </div>

            <nav class="space-y-2">
                <a href="/dashboard-siswa" class="flex items-center gap-3 px-4 py-2.5 bg-blue-600 text-white rounded-xl font-medium transition duration-200">
                    <span>📊</span> Dashboard
                </a>
                <a href="/biodata" class="flex items-center gap-3 px-4 py-2.5 hover:bg-slate-800 hover:text-white rounded-xl transition duration-200">
                    <span>👤</span> Biodata Saya
                </a>
                <a href="/nilai" class="flex items-center gap-3 px-4 py-2.5 hover:bg-slate-800 hover:text-white rounded-xl transition duration-200">
                    <span>📈</span> Rapor Nilai
                </a>
            </nav>
        </div>

        <div>
            <a href="/" class="flex items-center gap-3 px-4 py-2.5 hover:bg-red-900/50 hover:text-red-400 rounded-xl transition duration-200 font-medium text-sm">
                <span>🚪</span> Keluar / Logout
            </a>
        </div>
    </aside>

    <main class="flex-1 flex flex-col overflow-y-auto">
        <header class="bg-white border-b border-slate-200 px-8 py-4 flex justify-between items-center shrink-0">
            <h2 class="text-xl font-bold text-slate-800">Dashboard Utama</h2>
            <div class="flex items-center gap-2 text-sm text-slate-600 bg-slate-50 px-3 py-1.5 rounded-lg border border-slate-200">
                <span class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></span>
                <span>API Connected</span>
            </div>
        </header>

        <div class="p-8">
            <div class="mb-6">
                <h3 class="text-lg font-semibold text-slate-800">Daftar Siswa Aktif</h3>
                <p class="text-sm text-slate-500 mt-0.5">Data eksternal ditarik secara real-time via REST API.</p>
            </div>
            
            <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-slate-50 border-b border-slate-200 text-xs font-bold text-slate-500 uppercase tracking-wider">
                            <th class="px-6 py-4 text-center w-16">No</th>
                            <th class="px-6 py-4">Nama Siswa</th>
                            <th class="px-6 py-4">Email Instansi</th>
                            <th class="px-6 py-4">Kota Domisili</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 text-sm text-slate-600">
                        @foreach($dataSiswa as $index => $siswa)
                        <tr class="hover:bg-slate-50/70 transition duration-150">
                            <td class="px-6 py-4 text-center font-medium text-slate-400">{{ $index + 1 }}</td>
                            <td class="px-6 py-4 font-semibold text-slate-800">{{ $siswa['name'] }}</td>
                            <td class="px-6 py-4 text-slate-500">{{ $siswa['email'] }}</td>
                            <td class="px-6 py-4">
                                <span class="bg-blue-50 text-blue-600 px-2.5 py-1 rounded-full text-xs font-medium">
                                    {{ $siswa['address']['city'] }}
                                </span>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>

</body>
</html>