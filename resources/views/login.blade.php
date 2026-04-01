<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>AIMS Login</title>

        <link rel="icon" type="image/svg" href="{{ asset('aims_logo.svg') }}">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                body { font-family: 'Instrument Sans', sans-serif; background-color: #f8fafc; color: #0f172a; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
                .fallback-card { background: white; padding: 2.5rem; border-radius: 0.75rem; border: 1px solid #e2e8f0; box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1); }
            </style>
        @endif
    </head>
    <body class="bg-slate-50 text-slate-900 flex items-center justify-center min-h-screen p-6 antialiased">
        
        <div class="w-full max-w-[400px]">
            <div class="flex flex-col items-center mb-4">
                <div class="mb-2 p-3 bg-white border border-slate-200 rounded-2xl shadow-sm">
                    <img class="w-12 h-12" src="{{ asset('aims_logo.svg') }}" alt="aims logo">
                </div>
                <h1 class="text-3xl font-bold tracking-tight text-blue-500 ">
                   MIS
                </h1>
                <p class="text-slate-500 text-sm font-medium italic">Asset Inventory Management System</p>
            </div>

            <div class="bg-white border border-slate-200 rounded-2xl shadow-sm p-8">
                <div class="mb-6">
                    <h2 class="text-xl font-semibold text-slate-900">AIMS Login</h2>
                    <p class="text-sm text-slate-500">Enter your employee credentials</p>
                </div>

                <form action="{{ route('login.post') }}" method="POST">
                    @csrf

                    @if ($errors->any())
                        <div class="mb-4 p-3 bg-red-50 border border-red-200 rounded-lg">
                            <p class="text-xs text-red-600 font-medium">{{ $errors->first() }}</p>
                        </div>
                    @endif

                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium mb-1.5 text-slate-700">Username/Email</label>
                            <input type="text" name="email" placeholder="Enter username or email" 
                                class="w-full bg-white border border-slate-300 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-600 transition-all">
                        </div>

                        <div>
                            <label class="block text-sm font-medium mb-1.5 text-slate-700">Password</label>
                            <input type="password" name="password" placeholder="••••••••" 
                                class="w-full bg-white border border-slate-300 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-600 transition-all">
                        </div>

                        <div class="flex items-center space-x-2">
                            <input type="checkbox" id="remember" name="remember" class="w-4 h-4 rounded border-slate-300 text-blue-600">
                            <label for="remember" class="text-sm text-slate-600">Keep me logged in</label>
                        </div>

                        <button type="submit" class="w-full bg-slate-900 hover:bg-slate-800 text-white font-semibold py-2.5 rounded-lg shadow-sm">
                            Sign In
                        </button>
                    </div>
                </form>
            </div>

            <div class="mt-2 text-center space-y-2">
                <p class="text-sm text-slate-500">
                    Authorized Personnel Only. 
                </p>
                
                <footer class="pt-2 border-t border-slate-200">
                    <p class="text-[10px] text-slate-400 uppercase tracking-widest font-bold">
                        &copy; 2026 MIS Department &bull; UBIX Corporation
                    </p>
                </footer>
            </div>
        </div>

    </body>
</html>