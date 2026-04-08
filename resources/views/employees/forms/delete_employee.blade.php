<div x-show="showDeleteModal" 
     class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/60 backdrop-blur-sm" 
     x-cloak
     x-transition:enter="transition ease-out duration-300"
     x-transition:enter-start="opacity-0"
     x-transition:enter-end="opacity-100"
     x-transition:leave="transition ease-in duration-200"
     x-transition:leave-start="opacity-100"
     x-transition:leave-end="opacity-0">
    
    <div @click.away="showDeleteModal = false" 
         class="bg-white rounded-2xl shadow-2xl max-w-md w-full overflow-hidden border border-slate-200"
         x-show="showDeleteModal"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 scale-95"
         x-transition:enter-end="opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100 scale-100"
         x-transition:leave-end="opacity-0 scale-95">
        
        <form :action="'/employee/' + selectedEmployeeId" method="POST">
            @csrf
            @method('DELETE')
            
            <div class="p-6 text-center">
                <div class="w-16 h-16 bg-red-100 text-red-600 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M3 6h18"/><path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"/><path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"/>
                    </svg>
                </div>
                
                <h2 class="text-xl font-bold text-slate-900">Confirm Delete</h2>
                <p class="text-slate-500 mt-2">
                    Are you sure you want to delete <span class="font-bold text-slate-800" x-text="selectedEmployeeName"></span>? 
                    This action cannot be undone.
                </p>
            </div>

            <div class="p-6 bg-slate-50 flex justify-end gap-3">
                <button type="button" @click="showDeleteModal = false" 
                        class="px-5 py-2.5 text-sm font-bold text-slate-600 bg-white border border-slate-200 rounded-lg hover:bg-slate-100 transition-all">
                    Cancel
                </button>
                <button type="submit" 
                        class="px-5 py-2.5 text-sm font-bold bg-red-600 text-white rounded-lg hover:bg-red-700 shadow-md shadow-red-200 transition-all">
                    Yes, Delete Employee
                </button>
            </div>
        </form>
    </div>
</div>