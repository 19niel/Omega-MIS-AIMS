<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Management | Omega-MIS</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-slate-50 font-sans antialiased">
    <div class="flex min-h-screen">
        <x-sidebar />
        
        <main class="flex-1 p-8">
            <div class="max-w-7xl mx-auto">
                <div class="flex justify-between items-center mb-8">
                    <div class="flex items-center gap-4">
                        <div class="p-3 bg-orange-100 text-orange-600 rounded-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 12V7a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v5"/>
                                <path d="M6 12a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2"/>
                                <path d="M9 16h6"/>
                            </svg>
                        </div>

                        <div>
                            <h1 class="text-2xl font-bold text-slate-900 capitalize leading-tight">
                                {{ Request::segment(2) }} Inventory
                            </h1>
                            <p class="text-sm text-slate-500">System skeleton for new asset requirements.</p>
                        </div>
                    </div>

                    <button class="bg-blue-600 text-white px-4 py-2 rounded-lg text-sm font-bold shadow-sm opacity-50 cursor-not-allowed">
                        + Add New Item
                    </button>
                </div>

                <div class="bg-white border border-slate-200 rounded-xl shadow-sm overflow-hidden">
                    <table class="w-full text-left border-collapse">
                        <thead class="bg-slate-50 border-b border-slate-200">
                            <tr class="text-xs font-bold text-slate-400 uppercase tracking-wider">
                                <th class="px-6 py-4">Item Details</th>
                                <th class="px-6 py-4">Attributes</th>
                                <th class="px-6 py-4">User / Location</th>
                                <th class="px-6 py-4">Status</th>
                                <th class="px-6 py-4 text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="5" class="px-6 py-12 text-center text-slate-400 text-sm">
                                    <div class="flex flex-col items-center gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-slate-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                                        </svg>
                                        <span>Awaiting new table schema definitions...</span>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
</body>
</html>