<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Omega-MIS</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-50 font-sans antialiased">

    <div class="flex min-h-screen">
        <x-sidebar />

        <main class="flex-1">
            <header class="h-16 border-b border-slate-200 bg-white flex items-center justify-between px-8">
                <h2 class="text-sm font-semibold text-slate-500 uppercase tracking-wider">Overview</h2>
                <div class="flex items-center gap-3">
                    <span class="text-sm font-medium text-slate-700">{{ Auth::user()->name }}</span>
                    <div class="w-8 h-8 bg-slate-200 rounded-full flex items-center justify-center text-xs font-bold text-slate-500">
                        {{ substr(Auth::user()->name, 0, 1) }}
                    </div>
                </div>
            </header>

            <div class="p-8">
                <div class="mb-8">
                    <h1 class="text-3xl font-bold text-slate-900 text-foreground">Dashboard</h1>
                    <p class="text-slate-500 text-sm mt-1">Overview of your asset inventory</p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    <div class="bg-white p-6 rounded-xl border border-slate-200 shadow-sm">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-slate-500 font-medium mb-1">Total Assets</p>
                                <p class="text-3xl font-bold text-slate-900">2,847</p>
                            </div>
                            <div class="text-blue-500 opacity-20">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m7.5 4.27 9 5.15"/><path d="M21 8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16Z"/><path d="m3.3 7 8.7 5 8.7-5"/><path d="M12 22V12"/></svg>
                            </div>
                        </div>
                    </div>

                    </div>

                <div class="bg-white border border-slate-200 rounded-xl shadow-sm">
                    <div class="p-6 border-b border-slate-100 flex items-center justify-between">
                        <h2 class="text-xl font-semibold text-slate-900">Recent Activity</h2>
                        <a href="#" class="text-sm text-blue-600 hover:underline font-medium">View all</a>
                    </div>
                    <div class="p-6 space-y-6">
                        @php
                            $activities = [
                                ['asset' => 'Laptop - Dell XPS 15', 'action' => 'Assigned to John Smith', 'time' => '2 hours ago'],
                                ['asset' => 'Office Chair', 'action' => 'Maintenance Check', 'time' => '4 hours ago'],
                                ['asset' => 'Monitor - LG 27"', 'action' => 'Returned by Mike Brown', 'time' => '1 day ago'],
                            ];
                        @endphp

                        @foreach($activities as $activity)
                        <div class="flex items-start gap-4 pb-4 border-b border-slate-50 last:border-0 last:pb-0">
                            <div class="mt-1 text-slate-400">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                            </div>
                            <div class="flex-1">
                                <p class="font-semibold text-slate-900">{{ $activity['asset'] }}</p>
                                <p class="text-sm text-slate-500">{{ $activity['action'] }}</p>
                            </div>
                            <span class="text-xs text-slate-400">{{ $activity['time'] }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </main>
    </div>

</body>
</html>