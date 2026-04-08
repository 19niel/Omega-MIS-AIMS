<div x-show="showAddModal" 
     class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/60 backdrop-blur-sm" 
     x-transition:enter="transition ease-out duration-300"
     x-transition:enter-start="opacity-0"
     x-transition:enter-end="opacity-100"
     x-transition:leave="transition ease-in duration-200"
     x-transition:leave-start="opacity-100"
     x-transition:leave-end="opacity-0"
     x-cloak>
    
    <div @click.away="showAddModal = false" 
         x-show="showAddModal"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 scale-95"
         x-transition:enter-end="opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100 scale-100"
         x-transition:leave-end="opacity-0 scale-95"
         class="bg-white rounded-2xl shadow-2xl max-w-2xl w-full max-h-[90vh] overflow-y-auto border border-slate-200">
        
        <form action="{{ route('assets.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @php
                $currentPage = Request::segment(2); 
                $categoryMap = [
                    'laptops' => 'Laptop',
                    'pc'      => 'Desktop',
                    'others'  => 'Other'
                ];
                $detectedCategory = $categoryMap[$currentPage] ?? 'Other';
            @endphp

            <input type="hidden" name="category" value="{{ $detectedCategory }}">

            <div class="p-6 border-b border-slate-100 flex justify-between items-center sticky top-0 bg-white/80 backdrop-blur-md z-10">
                <div>
                    <h2 class="text-xl font-bold text-slate-900">Add New {{ ucfirst(Request::segment(2)) }}</h2>
                    <p class="text-xs text-slate-500 font-medium uppercase tracking-wider mt-1">Fill in the technical and assignment details</p>
                </div>
                <button type="button" @click="showAddModal = false" class="text-slate-400 hover:text-slate-600 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                </button>
            </div>

            <div class="p-8 space-y-8">
                <div>
                    <label class="block text-xs font-bold text-slate-500 uppercase mb-2">Device Attachment (Photo)</label>
                    <div class="mt-1 flex justify-center px-6 pt-4 pb-5 border-2 border-slate-200 border-dashed rounded-xl hover:bg-slate-50 transition-all cursor-pointer bg-slate-50/30">
                        <div class="space-y-1 text-center">
                            <svg class="mx-auto h-10 w-10 text-slate-400" stroke="currentColor" fill="none" viewBox="0 0 48 48">
                                <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <div class="flex text-xs text-slate-600 justify-center">
                                <label class="relative cursor-pointer bg-white rounded-md font-bold text-blue-600 hover:text-blue-500">
                                    <span>Upload a file</span>
                                    <input name="image" type="file" class="sr-only">
                                </label>
                            </div>
                            <p class="text-[10px] text-slate-400 uppercase tracking-tighter">Click to browse for a photo</p>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-6">
                    <div class="col-span-1">
                        <label class="block text-xs font-bold text-slate-500 uppercase mb-2">Brand</label>
                        <input type="text" name="brand" placeholder="e.g. Dell, HP, Lenovo" 
                               class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none text-sm transition-all">
                    </div>
                    <div class="col-span-1">
                        <label class="block text-xs font-bold text-slate-500 uppercase mb-2">Model</label>
                        <input type="text" name="model" placeholder="e.g. Precision 5570" 
                               class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none text-sm transition-all">
                    </div>
                </div>

                <div class="bg-slate-50 p-4 rounded-xl border border-slate-200">
                    <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-4">Hardware Specifications</label>
                    <div class="grid grid-cols-3 gap-4">
                        <div class="col-span-1">
                            <label class="block text-[10px] font-bold text-slate-500 uppercase mb-1">CPU</label>
                            <input type="text" name="cpu" placeholder="i7-12th Gen" class="w-full px-3 py-2 bg-white border border-slate-200 rounded-md text-sm outline-none focus:border-blue-500 transition-all">
                        </div>
                        <div class="col-span-1">
                            <label class="block text-[10px] font-bold text-slate-500 uppercase mb-1">RAM</label>
                            <input type="text" name="ram" placeholder="16GB DDR4" class="w-full px-3 py-2 bg-white border border-slate-200 rounded-md text-sm outline-none focus:border-blue-500 transition-all">
                        </div>
                        <div class="col-span-1">
                            <label class="block text-[10px] font-bold text-slate-500 uppercase mb-1">Storage</label>
                            <input type="text" name="storage" placeholder="512GB NVMe" class="w-full px-3 py-2 bg-white border border-slate-200 rounded-md text-sm outline-none focus:border-blue-500 transition-all">
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-6">
                    <div class="col-span-1">
                        <label class="block text-xs font-bold text-blue-600 uppercase mb-2">Current User (Issued To)</label>
                        <select name="issued_to" class="w-full px-4 py-2.5 bg-blue-50/50 border border-blue-100 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none text-sm appearance-none cursor-pointer transition-all">
                            <option value="">-- No Current User / Available --</option>
                            @foreach($employees as $employee)
                                <option value="{{ $employee->id }}">
                                    {{ $employee->name }} ({{ $employee->department }})
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-span-1">
                        <label class="block text-xs font-bold text-slate-500 uppercase mb-2">Status</label>
                        <select name="status" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none text-sm appearance-none cursor-pointer transition-all">
                            <option value="available">Available</option>
                            <option value="occupied">Occupied</option>
                            <option value="defective">Defective</option>
                            <option value="maintenance">Under Maintenance</option>
                        </select>
                    </div>

                    <div class="col-span-2">
                        <label class="block text-xs font-bold text-slate-400 uppercase mb-2">Recent Owner (History)</label>
                        <select name="recent_owner" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-lg text-sm outline-none appearance-none cursor-pointer transition-all">
                            <option value="">-- No Previous Owner --</option>
                            @foreach($employees as $employee)
                                <option value="{{ $employee->name }}">
                                    {{ $employee->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div class="p-6 bg-slate-50 border-t border-slate-100 flex justify-end gap-3 sticky bottom-0">
                <button type="button" @click="showAddModal = false" 
                        class="px-5 py-2.5 text-sm font-bold text-slate-600 bg-white border border-slate-200 rounded-lg hover:bg-slate-100 transition-all">
                    Cancel
                </button>
                <button type="submit" 
                        class="px-5 py-2.5 text-sm font-bold bg-blue-600 text-white rounded-lg hover:bg-blue-700 shadow-md shadow-blue-200 transition-all">
                    Save Asset
                </button>
            </div>
        </form>
    </div>
</div>