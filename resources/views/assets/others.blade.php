<x-sidebar />
<main class="flex-1 bg-slate-50 min-h-screen p-8">
    <div class="max-w-7xl mx-auto">
        <div class="flex justify-between items-center mb-8">
            <div>
                <h1 class="text-2xl font-bold text-slate-900 capitalize">{{ Request::segment(2) }} Inventory</h1>
                <p class="text-sm text-slate-500">Manage and track company-issued equipment.</p>
            </div>
            <button class="bg-blue-600 text-white px-4 py-2 rounded-lg text-sm font-bold shadow-sm">
                + Add New
            </button>
        </div>

        <div class="bg-white border border-slate-200 rounded-xl shadow-sm overflow-hidden">
            <table class="w-full text-left border-collapse">
                <thead class="bg-slate-50 border-b border-slate-200">
                    <tr class="text-xs font-bold text-slate-400 uppercase tracking-wider">
                        <th class="px-6 py-4">Brand & Model</th>
                        <th class="px-6 py-4">Specifications</th>
                        <th class="px-6 py-4">Issued To</th>
                        <th class="px-6 py-4">Date Created</th>
                        <th class="px-6 py-4 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    <tr class="hover:bg-slate-50 transition-colors">
                        <td class="px-6 py-4">
                            <div class="text-sm font-bold text-slate-900">Dell</div>
                            <div class="text-xs text-slate-500">Precision 5570</div>
                        </td>
                        <td class="px-6 py-4 text-sm text-slate-600">
                            i7, 16GB RAM, 512GB SSD
                        </td>
                        <td class="px-6 py-4">
                            <span class="text-sm font-medium text-slate-700">Juan Dela Cruz</span>
                            <div class="text-[10px] text-slate-400 uppercase font-bold">MIS Dept</div>
                        </td>
                        <td class="px-6 py-4 text-xs text-slate-500">
                            2026-04-06
                        </td>
                        <td class="px-6 py-4 text-right">
                            <button class="text-blue-600 hover:text-blue-800 font-bold text-xs uppercase tracking-widest">Details</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>