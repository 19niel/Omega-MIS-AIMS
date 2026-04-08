<div x-show="showDeleteModal" 
     class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/60 backdrop-blur-sm" 
     x-transition:enter="transition ease-out duration-300"
     x-transition:enter-start="opacity-0"
     x-transition:enter-end="opacity-100"
     x-transition:leave="transition ease-in duration-200"
     x-transition:leave-start="opacity-100"
     x-transition:leave-end="opacity-0"
     x-cloak>
    
    <div @click.away="showDeleteModal = false" 
         class="bg-white rounded-2xl shadow-2xl max-w-md w-full overflow-hidden border border-slate-200"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 scale-95"
         x-transition:enter-end="opacity-100 scale-100">
        
        <div class="p-6">
            <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center mb-4">
                <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                </svg>
            </div>
            
            <h3 class="text-xl font-bold text-slate-900">Delete Asset?</h3>
            <p class="text-slate-500 mt-2">
                Are you sure you want to delete <span class="font-bold text-slate-900" x-text="activeAsset.brand + ' ' + activeAsset.model"></span>? 
                This action is permanent and will remove all history logs.
            </p>
        </div>

        <div class="bg-slate-50 px-6 py-4 flex justify-end gap-3">
            <button @click="showDeleteModal = false" 
                    class="px-4 py-2 text-sm font-bold text-slate-600 hover:bg-slate-200 rounded-xl transition-colors">
                Cancel
            </button>
            
            <form :action="'/assets/' + activeAsset.id" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" 
                        class="px-4 py-2 text-sm font-bold bg-red-600 hover:bg-red-700 text-white rounded-xl shadow-sm transition-colors">
                    Delete Permanently
                </button>
            </form>
        </div>
    </div>
</div>