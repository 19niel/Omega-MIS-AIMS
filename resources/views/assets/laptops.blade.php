<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laptops | Omega-MIS</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style> [x-cloak] { display: none !important; } </style>
</head>
<body class="bg-slate-50 font-sans antialiased" x-data="{ showAddModal: false, showDetailsModal: false, activeAsset: {} }">
    <div class="flex min-h-screen">
        <x-sidebar />
        <main class="flex-1 bg-slate-50 min-h-screen p-8">
            <div class="max-w-7xl mx-auto">
                <div class="flex justify-between items-center mb-8">
                    <div>
                        <h1 class="text-2xl font-bold text-slate-900 capitalize">{{ Request::segment(2) }} Inventory</h1>
                        <p class="text-sm text-slate-500">Manage and track company-issued equipment.</p>
                    </div>
                    <button @click="showAddModal = true" class="bg-blue-600 hover:bg-blue-700 transition-colors text-white px-4 py-2 rounded-lg text-sm font-bold shadow-sm flex items-center gap-2">
                        <span>+</span> Add New Asset
                    </button>
                </div>

                <div class="bg-white border border-slate-200 rounded-xl shadow-sm overflow-hidden">
                    <table class="w-full text-left border-collapse">
                        <thead class="bg-slate-50 border-b border-slate-200">
                            <tr class="text-xs font-bold text-slate-400 uppercase tracking-wider">
                                <th class="px-6 py-4">Brand & Model</th>
                                <th class="px-6 py-4">Specifications</th>
                                <th class="px-6 py-4">Current User</th>
                                <th class="px-6 py-4">Recent Owner</th>
                                <th class="px-6 py-4">Status</th>
                                <th class="px-6 py-4">Assignment Timeline</th> <th class="px-6 py-4 text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100">
                            <tr class="hover:bg-slate-50 transition-colors cursor-pointer" 
                                @click="showDetailsModal = true; activeAsset = { brand: 'Dell', model: 'Precision 5570', specs: 'i7, 16GB RAM, 512GB SSD', user: 'Nathaniel Pro Gamer' }">
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="h-12 w-12 rounded-lg bg-slate-100 border border-slate-200 overflow-hidden flex-shrink-0">
                                            <img src="https://ui-avatars.com/api/?name=Dell+Precision&background=f1f5f9&color=64748b" alt="Laptop" class="h-full w-full object-cover">
                                        </div>
                                        <div>
                                            <div class="text-sm font-bold text-slate-900">Dell</div>
                                            <div class="text-xs text-slate-500">Precision 5570</div>
                                        </div>
                                    </div>
                                </td>

                                <td class="px-6 py-4 text-sm text-slate-600">
                                    <div class="flex flex-col">
                                        <span>i7, 16GB RAM</span>
                                        <span class="text-[10px] text-slate-400">512GB SSD</span>
                                    </div>
                                </td>

                                <td class="px-6 py-4">
                                    <span class="text-sm font-medium text-slate-700">Nathaniel Pro Gamer</span>
                                    <div class="text-[10px] text-slate-400 uppercase font-bold tracking-tight">MIS Dept</div>
                                </td>

                                <td class="px-6 py-4 text-slate-500">
                                    <span class="text-sm font-medium text-slate-700">Juander Wamen</span>
                                    <div class="text-[10px] text-slate-400 uppercase">MIS Dept</div>
                                </td>

                                <td class="px-6 py-4">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-bold bg-red-100 text-red-700 border border-red-200">
                                        Occupied
                                    </span>
                                </td>

                                <td class="px-6 py-4">
                                    <div class="flex flex-col gap-1.5">
                                        <div class="flex items-center gap-2">
                                            <span class="text-[10px] font-black text-blue-600 uppercase w-12">Issued</span>
                                            <span class="text-xs font-bold text-slate-700">2026-04-06</span>
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <span class="text-[10px] font-black text-slate-400 uppercase w-12">Created</span>
                                            <span class="text-xs text-slate-500">2026-01-15</span>
                                        </div>
                                    </div>
                                </td>
                                
                                <td class="px-6 py-4">
                                    <div class="flex items-center justify-end gap-2">
                                        <button title="Edit Asset" @click.stop="/* Add edit logic here */" class="p-1.5 text-slate-400 hover:text-blue-600 hover:bg-blue-50 rounded-md transition-colors">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 3a2.85 2.83 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5Z"/><path d="m15 5 4 4"/></svg>
                                        </button>

                                        <button title="Delete Asset" @click.stop="/* Add delete logic here */" class="p-1.5 text-slate-400 hover:text-red-600 hover:bg-red-50 rounded-md transition-colors">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 6h18"/><path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"/><path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"/><line x1="10" x2="10" y1="11" y2="17"/><line x1="14" x2="14" y1="11" y2="17"/></svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>

    @include('assets.forms.add_asset')

</body>
</html>