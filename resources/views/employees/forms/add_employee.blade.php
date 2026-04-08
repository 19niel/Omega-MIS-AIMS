<div x-show="showAddModal" 
     class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/60 backdrop-blur-sm" 
     x-cloak 
     x-transition:enter="transition ease-out duration-300"
     x-transition:enter-start="opacity-0"
     x-transition:enter-end="opacity-100"
     x-transition:leave="transition ease-in duration-200"
     x-transition:leave-start="opacity-100"
     x-transition:leave-end="opacity-0">
    
    <div @click.away="showAddModal = false" 
         class="bg-white rounded-2xl shadow-2xl max-w-lg w-full overflow-hidden border border-slate-200"
         x-show="showAddModal"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 scale-95"
         x-transition:enter-end="opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100 scale-100"
         x-transition:leave-end="opacity-0 scale-95">
        
        <form action="{{ route('employees.store') }}" method="POST">
            @csrf
            <div class="p-6 border-b border-slate-100 flex justify-between items-center bg-slate-50/50">
                <div>
                    <h2 class="text-xl font-bold text-slate-900">Add New Employee</h2>
                    <p class="text-xs text-slate-500 font-medium uppercase tracking-wider mt-1">Register a new system user</p>
                </div>
                <button type="button" @click="showAddModal = false" class="text-slate-400 hover:text-slate-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                </button>
            </div>

            <div class="p-8 space-y-5">
                <div>
                    <label class="block text-xs font-bold text-slate-500 uppercase mb-2">Full Name</label>
                    <input type="text" name="name" placeholder="e.g. John Doe" required
                           class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none text-sm transition-all">
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-500 uppercase mb-2">Email Address</label>
                    <input type="email" name="email" placeholder="john.doe@u-bix.com.ph" required
                           class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none text-sm transition-all">
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div class="col-span-1">
                        <label class="block text-xs font-bold text-slate-500 uppercase mb-2">Branch</label>
                        <select id="branch-select" name="branch" required 
                                class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none text-sm appearance-none cursor-pointer">
                            <option value="">Select Branch</option>
                            @foreach($branchMapping as $branch => $depts)
                                <option value="{{ $branch }}">{{ $branch }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-span-1">
                        <label class="block text-xs font-bold text-slate-500 uppercase mb-2">Department</label>
                        <select id="dept-select" name="department" required disabled 
                                class="w-full px-4 py-2.5 bg-slate-100 border border-slate-200 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none text-sm appearance-none cursor-not-allowed">
                            <option value="">Choose Branch</option>
                        </select>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div class="col-span-1">
                        <label class="block text-xs font-bold text-slate-500 uppercase mb-2">Position</label>
                        <input type="text" name="position" placeholder="e.g. Programmer" required
                               class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none text-sm transition-all">
                    </div>

                    <div class="col-span-1">
                        <label class="block text-xs font-bold text-slate-500 uppercase mb-2">Employment Status</label>
                        <select name="status" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none text-sm appearance-none cursor-pointer">
                            <option value="Active">Active</option>
                            <option value="On Leave">On Leave</option>
                            <option value="Resigned">Resigned</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="p-6 bg-slate-50 border-t border-slate-100 flex justify-end gap-3">
                <button type="button" @click="showAddModal = false" 
                        class="px-5 py-2.5 text-sm font-bold text-slate-600 bg-white border border-slate-200 rounded-lg hover:bg-slate-100 transition-all">
                    Cancel
                </button>
                <button type="submit" 
                        class="px-5 py-2.5 text-sm font-bold bg-blue-600 text-white rounded-lg hover:bg-blue-700 shadow-md shadow-blue-200 transition-all">
                    Save Employee
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const branchMapping = @json($branchMapping);
        const branchSelect = document.getElementById('branch-select');
        const deptSelect = document.getElementById('dept-select');

        branchSelect.addEventListener('change', function() {
            const branch = this.value;
            deptSelect.innerHTML = '<option value="">Select Department</option>';
            
            if (branch && branchMapping[branch]) {
                deptSelect.disabled = false;
                deptSelect.classList.remove('bg-slate-100', 'cursor-not-allowed');
                deptSelect.classList.add('bg-slate-50', 'cursor-pointer');
                
                branchMapping[branch].forEach(dept => {
                    const option = document.createElement('option');
                    option.value = dept;
                    option.textContent = dept;
                    deptSelect.appendChild(option);
                });
            } else {
                deptSelect.disabled = true;
                deptSelect.classList.add('bg-slate-100', 'cursor-not-allowed');
                deptSelect.classList.remove('bg-slate-50', 'cursor-pointer');
                deptSelect.innerHTML = '<option value="">Choose Branch</option>';
            }
        });
    });
</script>