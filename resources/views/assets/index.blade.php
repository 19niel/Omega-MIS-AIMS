<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assets | Omega-MIS</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-50 font-sans antialiased">
    <div class="flex min-h-screen">
        <x-sidebar />
        <main class="flex-1">
            <header class="h-16 border-b border-slate-200 bg-white flex items-center justify-between px-8">
                <h2 class="text-sm font-semibold text-slate-500 uppercase tracking-wider text-foreground">Asset Management</h2>

            </header>

            <div class="p-8">
                <div class="mb-8 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                    <div>
                        <h1 class="text-3xl font-bold text-slate-900">Assets Inventory</h1>
                        <p class="text-slate-500 text-sm mt-1">Select a category to manage specific inventory items.</p>
                    </div>

                    <button class="bg-blue-600 hover:bg-blue-700 text-white text-sm font-bold py-2 px-4 rounded-lg transition-all h-fit">
                        + Add New Asset
                    </button>
                </div>

                

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    
                    <a href="#" class="group bg-white border border-slate-200 rounded-2xl p-6 shadow-sm hover:shadow-md hover:border-blue-300 transition-all">
                        <div class="flex items-start justify-between mb-4">
                            <div class="p-3 bg-blue-50 text-blue-600 rounded-xl group-hover:bg-blue-600 group-hover:text-white transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 16V8a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v8"/><rect width="20" height="4" x="2" y="16" rx="1"/><path d="M8 20h8"/></svg>
                            </div>
                            <span class="text-xs font-bold text-slate-400 bg-slate-100 px-2 py-1 rounded-full uppercase tracking-tighter">1,240 Units</span>
                        </div>
                        <h3 class="text-lg font-bold text-slate-900">Laptops</h3>
                        <p class="text-sm text-slate-500 mt-1">Lenovo, Thinkpad, and Workstations.</p>
                    </a>

                    <a href="#" class="group bg-white border border-slate-200 rounded-2xl p-6 shadow-sm hover:shadow-md hover:border-blue-300 transition-all">
                        <div class="flex items-start justify-between mb-4">
                            <div class="p-3 bg-purple-50 text-purple-600 rounded-xl group-hover:bg-purple-600 group-hover:text-white transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="14" height="8" x="5" y="2" rx="2"/><rect width="20" height="8" x="2" y="14" rx="2"/><path d="M6 18h2"/><path d="M12 18h6"/></svg>
                            </div>
                            <span class="text-xs font-bold text-slate-400 bg-slate-100 px-2 py-1 rounded-full uppercase tracking-tighter">856 Units</span>
                        </div>
                        <h3 class="text-lg font-bold text-slate-900">Desktop PCs</h3>
                        <p class="text-sm text-slate-500 mt-1">All-in-ones, Mini PCs, and Tower units.</p>
                    </a>

                    <a href="#" class="group bg-white border border-slate-200 rounded-2xl p-6 shadow-sm hover:shadow-md hover:border-blue-300 transition-all">
                        <div class="flex items-start justify-between mb-4">
                            <div class="p-3 bg-orange-50 text-orange-600 rounded-xl group-hover:bg-orange-600 group-hover:text-white transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 12V7a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v5"/><path d="M6 12a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2"/><path d="M9 16h6"/></svg>
                            </div>
                            <span class="text-xs font-bold text-slate-400 bg-slate-100 px-2 py-1 rounded-full uppercase tracking-tighter">45 Units</span>
                        </div>
                        <h3 class="text-lg font-bold text-slate-900">Peripherals</h3>
                        <p class="text-sm text-slate-500 mt-1">Flashdrives, Keyboards, Mice, and USB Hubs.</p>
                    </a>

                </div>
            </div>
        </main>
    </div>
</body>
</html>