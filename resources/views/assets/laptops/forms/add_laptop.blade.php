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
         class="bg-white rounded-2xl shadow-2xl max-w-4xl w-full max-h-[90vh] overflow-y-auto border border-slate-200">
        
        <form action="#" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="p-6 border-b border-slate-100 flex justify-between items-center sticky top-0 bg-white/80 backdrop-blur-md z-10">
                <div>
                    <h2 class="text-xl font-bold text-slate-900">Add New Laptop</h2>
                    <p class="text-xs text-slate-500 font-medium uppercase tracking-wider mt-1">Detailed System & Technical Specifications</p>
                </div>
                <button type="button" @click="showAddModal = false" class="text-slate-400 hover:text-slate-600 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                </button>
            </div>

            <div class="p-8 space-y-10">
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="md:col-span-1">
                        <label class="block text-xs font-bold text-slate-500 uppercase mb-2">Device Photo</label>
                        <div class="mt-1 flex justify-center px-4 pt-4 pb-5 border-2 border-slate-200 border-dashed rounded-xl hover:bg-slate-50 transition-all cursor-pointer">
                            <div class="space-y-1 text-center">
                                <svg class="mx-auto h-8 w-8 text-slate-400" stroke="currentColor" fill="none" viewBox="0 0 48 48">
                                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <div class="text-xs text-blue-600 font-bold">Upload File</div>
                                <input name="image" type="file" class="sr-only">
                            </div>
                        </div>
                    </div>
                    <div class="md:col-span-2 grid grid-cols-2 gap-4">
                        <div class="col-span-1">
                            <label class="block text-xs font-bold text-slate-500 uppercase mb-2">Brand</label>
                            <input type="text" name="brand" placeholder="e.g. LENOVO" class="w-full px-4 py-2 bg-slate-50 border border-slate-200 rounded-lg text-sm outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div class="col-span-1">
                            <label class="block text-xs font-bold text-slate-500 uppercase mb-2">Model</label>
                            <input type="text" name="model" placeholder="IdeaPad S340-14IIL" class="w-full px-4 py-2 bg-slate-50 border border-slate-200 rounded-lg text-sm outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div class="col-span-2">
                            <label class="block text-xs font-bold text-slate-500 uppercase mb-2">System Serial Number (S/N)</label>
                            <input type="text" name="serial_number" placeholder="MP1Q7DRP" class="w-full px-4 py-2 bg-slate-50 border border-slate-200 rounded-lg text-sm font-mono outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                    </div>
                </div>

                <hr class="border-slate-100">

                <div>
                    <h3 class="text-sm font-black text-slate-400 uppercase tracking-widest mb-4">Environment & Board</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-4">
                            <div>
                                <label class="block text-[10px] font-bold text-slate-500 uppercase mb-1">Operating System</label>
                                <input type="text" name="os" placeholder="Windows 10 Professional (x64)" class="w-full px-4 py-2 border border-slate-200 rounded-lg text-sm outline-none focus:border-blue-500">
                            </div>
                            <div>
                                <label class="block text-[10px] font-bold text-slate-500 uppercase mb-1">Boot Mode</label>
                                <input type="text" name="boot_mode" placeholder="UEFI with Secure Boot disabled" class="w-full px-4 py-2 border border-slate-200 rounded-lg text-sm outline-none focus:border-blue-500">
                            </div>
                        </div>
                        <div class="space-y-4">
                            <div>
                                <label class="block text-[10px] font-bold text-slate-500 uppercase mb-1">Main Circuit Board</label>
                                <input type="text" name="board" placeholder="LENOVO LNVNB161216" class="w-full px-4 py-2 border border-slate-200 rounded-lg text-sm outline-none focus:border-blue-500">
                            </div>
                            <div>
                                <label class="block text-[10px] font-bold text-slate-500 uppercase mb-1">UEFI/BIOS Version</label>
                                <input type="text" name="uefi_version" placeholder="CUCN63WW(V3.05)" class="w-full px-4 py-2 border border-slate-200 rounded-lg text-sm outline-none focus:border-blue-500">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-slate-50 p-6 rounded-2xl border border-slate-200 space-y-6">
                    <h3 class="text-sm font-black text-slate-400 uppercase tracking-widest">Hardware Performance</h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div>
                            <label class="block text-[10px] font-bold text-slate-500 uppercase mb-1">Processor</label>
                            <input type="text" name="cpu" placeholder="Intel Core i5-1035G1 @ 1.20GHz" class="w-full px-4 py-2 bg-white border border-slate-200 rounded-lg text-sm outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div>
                            <label class="block text-[10px] font-bold text-slate-500 uppercase mb-1">Total RAM</label>
                            <input type="text" name="ram" placeholder="8GB (7958 MB Usable)" class="w-full px-4 py-2 bg-white border border-slate-200 rounded-lg text-sm outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div>
                            <label class="block text-[10px] font-bold text-slate-500 uppercase mb-1">Display Adapter(s)</label>
                            <input type="text" name="gpu" placeholder="Intel UHD / NVIDIA MX250" class="w-full px-4 py-2 bg-white border border-slate-200 rounded-lg text-sm outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 pt-2">
                        <div>
                            <label class="block text-[10px] font-bold text-slate-500 uppercase mb-1">Primary Drive (C:)</label>
                            <input type="text" name="drive_c" placeholder="NVMe SAMSUNG 512GB" class="w-full px-4 py-2 bg-white border border-slate-200 rounded-lg text-sm outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div>
                            <label class="block text-[10px] font-bold text-slate-500 uppercase mb-1">Secondary Drive (D:)</label>
                            <input type="text" name="drive_d" placeholder="WDC WD500GB" class="w-full px-4 py-2 bg-white border border-slate-200 rounded-lg text-sm outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                    </div>
                </div>

                <div>
                    <h3 class="text-sm font-black text-slate-400 uppercase tracking-widest mb-4">Endpoint Security</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-[10px] font-bold text-slate-500 uppercase mb-1">Anti-Virus Software</label>
                            <input type="text" name="antivirus" placeholder="Kaspersky Endpoint Security" class="w-full px-4 py-2 border border-slate-200 rounded-lg text-sm outline-none focus:border-blue-500">
                        </div>
                        <div>
                            <label class="block text-[10px] font-bold text-slate-500 uppercase mb-1">Last Scan Date</label>
                            <input type="datetime-local" name="last_scan" class="w-full px-4 py-2 border border-slate-200 rounded-lg text-sm outline-none focus:border-blue-500">
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 border-t border-slate-100 pt-8">
                    <div>
                        <label class="block text-xs font-bold text-blue-600 uppercase mb-2">Issued To (Employee)</label>
                        <select name="user_id" class="w-full px-4 py-2.5 bg-blue-50/50 border border-blue-100 rounded-lg text-sm outline-none cursor-pointer">
                            <option value="">-- Available in Stock --</option>
                            @foreach($employees as $employee)
                                <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-500 uppercase mb-2">Current Asset Status</label>
                        <select name="status" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-lg text-sm outline-none cursor-pointer">
                            <option value="available">Available</option>
                            <option value="deployed">Deployed</option>
                            <option value="repair">Under Repair</option>
                            <option value="retired">Retired</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="p-6 bg-slate-50 border-t border-slate-100 flex justify-end gap-3 sticky bottom-0 z-20">
                <button type="button" @click="showAddModal = false" 
                        class="px-5 py-2.5 text-sm font-bold text-slate-600 bg-white border border-slate-200 rounded-lg hover:bg-slate-100 transition-all">
                    Cancel
                </button>
                <button type="submit" 
                        class="px-5 py-2.5 text-sm font-bold bg-blue-600 text-white rounded-lg hover:bg-blue-700 shadow-md shadow-blue-200 transition-all">
                    Register Laptop
                </button>
            </div>
        </form>
    </div>
</div>