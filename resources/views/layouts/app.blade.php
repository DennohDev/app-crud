<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Products') · app-crud</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'ui-sans-serif', 'system-ui', 'sans-serif'],
                    },
                },
            },
        }
    </script>

    {{-- shadcn-style component classes (Tailwind Play CDN supports @apply here) --}}
    <style type="text/tailwindcss">
        .btn          { @apply inline-flex items-center justify-center gap-1.5 rounded-md text-sm font-medium transition focus:outline-none focus:ring-2 focus:ring-zinc-400 focus:ring-offset-2 disabled:pointer-events-none disabled:opacity-50; }
        .btn-sm       { @apply h-8 px-3; }
        .btn-md       { @apply h-9 px-4; }
        .btn-primary  { @apply bg-zinc-900 text-white hover:bg-zinc-800; }
        .btn-outline  { @apply border border-zinc-300 bg-white text-zinc-800 hover:bg-zinc-100; }
        .btn-destructive { @apply bg-red-600 text-white hover:bg-red-700 focus:ring-red-400; }
        .label        { @apply mb-1.5 block text-sm font-medium text-zinc-800; }
        .input        { @apply block w-full rounded-md border border-zinc-300 bg-white px-3 py-2 text-sm text-zinc-900 placeholder-zinc-400 shadow-sm transition focus:border-zinc-400 focus:outline-none focus:ring-2 focus:ring-zinc-200; }
        .card         { @apply rounded-xl border border-zinc-200 bg-white shadow-sm; }
    </style>
</head>
<body class="min-h-full bg-zinc-50 font-sans text-zinc-900 antialiased">
    <header class="border-b border-zinc-200 bg-white">
        <div class="mx-auto flex max-w-5xl items-center justify-between px-6 py-4">
            <a href="{{ route('product.index') }}" class="flex items-center gap-2 text-base font-semibold tracking-tight">
                <span class="inline-flex h-7 w-7 items-center justify-center rounded-md bg-zinc-900 text-xs font-bold text-white">AC</span>
                app-crud
            </a>
            <nav class="flex items-center gap-1 text-sm">
                <a href="{{ route('product.index') }}" class="rounded-md px-3 py-2 font-medium text-zinc-600 transition hover:bg-zinc-100 hover:text-zinc-900">Products</a>
                <a href="{{ route('product.create') }}" class="rounded-md px-3 py-2 font-medium text-zinc-600 transition hover:bg-zinc-100 hover:text-zinc-900">New product</a>
            </nav>
        </div>
    </header>

    <main class="mx-auto max-w-5xl px-6 py-10">
        @if (session('success'))
            <div class="mb-6 flex items-center gap-2 rounded-lg border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm font-medium text-emerald-800">
                <svg class="h-4 w-4 shrink-0" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.704 5.29a1 1 0 0 1 .006 1.414l-7.5 7.6a1 1 0 0 1-1.42.003l-3.5-3.5a1 1 0 1 1 1.414-1.414l2.79 2.79 6.792-6.887a1 1 0 0 1 1.418-.006Z" clip-rule="evenodd"/></svg>
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </main>
</body>
</html>
