<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users | Omega-MIS</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-50 font-sans antialiased">
    <div class="flex min-h-screen">
        <x-sidebar />
        <main class="flex-1">
            <header class="h-16 border-b border-slate-200 bg-white flex items-center justify-between px-8">
                <h2 class="text-sm font-semibold text-slate-500 uppercase tracking-wider">User Management</h2>
            </header>
            <div class="p-8">
                <h1 class="text-3xl font-bold text-slate-900">System Users</h1>
                <p class="text-slate-500 text-sm mt-1">Manage employee access and permissions.</p>

                <div class="mt-8 bg-white border border-slate-200 rounded-xl p-12 text-center">
                    <p class="text-slate-400 italic text-sm text-foreground">User Directory coming soon...</p>
                </div>
            </div>
        </main>
    </div>
</body>
</html>