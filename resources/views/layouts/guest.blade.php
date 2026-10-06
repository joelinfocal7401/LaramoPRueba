<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >

    <meta
        name="csrf-token"
        content="{{ csrf_token() }}"
    >

    <meta
        name="description"
        content="Accede de forma segura a tu cuenta."
    >

    <meta
        name="robots"
        content="index, follow"
    >

    <title>
        {{ config('app.name', 'Laravel') }} | Acceso
    </title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">

    <link
        href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap"
        rel="stylesheet"
    >

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-slate-950 font-sans antialiased text-white">

    <div class="relative min-h-screen overflow-hidden">

        <!-- ========================================= -->
        <!-- FONDO -->
        <!-- ========================================= -->

        <div
            class="absolute inset-0 bg-gradient-to-br from-blue-950 via-indigo-950 to-purple-950"
            aria-hidden="true">
        </div>

        <!-- Glow azul -->
        <div
            class="absolute -left-32 -top-32 h-96 w-96 rounded-full bg-blue-600/30 blur-3xl"
            aria-hidden="true">
        </div>

        <!-- Glow morado -->
        <div
            class="absolute -right-32 top-1/4 h-96 w-96 rounded-full bg-purple-600/30 blur-3xl"
            aria-hidden="true">
        </div>

        <!-- Glow cyan -->
        <div
            class="absolute -bottom-40 left-1/3 h-96 w-96 rounded-full bg-cyan-500/20 blur-3xl"
            aria-hidden="true">
        </div>

        <!-- ========================================= -->
        <!-- DECORACIÓN -->
        <!-- ========================================= -->

        <div
            class="pointer-events-none absolute inset-0 opacity-20"
            aria-hidden="true">

            <div class="absolute left-[10%] top-[20%] h-1 w-1 rounded-full bg-cyan-300 shadow-[0_0_12px_4px_rgba(34,211,238,0.5)]"></div>

            <div class="absolute right-[15%] top-[30%] h-1.5 w-1.5 rounded-full bg-blue-300 shadow-[0_0_15px_5px_rgba(59,130,246,0.5)]"></div>

            <div class="absolute bottom-[20%] left-[20%] h-1 w-1 rounded-full bg-purple-300 shadow-[0_0_12px_4px_rgba(168,85,247,0.5)]"></div>

            <div class="absolute bottom-[15%] right-[25%] h-1.5 w-1.5 rounded-full bg-cyan-300 shadow-[0_0_15px_5px_rgba(34,211,238,0.5)]"></div>
        </div>

        <!-- ========================================= -->
        <!-- CONTENIDO -->
        <!-- ========================================= -->

        <main class="relative z-10 flex min-h-screen items-center justify-center px-4 py-8 sm:px-6 lg:px-8">

            <div class="w-full max-w-md">

                <!-- Logo / Marca -->
                <header class="mb-6 text-center">

                    <a
                        href="/"
                        class="group inline-flex items-center justify-center rounded-2xl focus:outline-none focus:ring-2 focus:ring-cyan-400 focus:ring-offset-4 focus:ring-offset-slate-950"
                        aria-label="{{ config('app.name', 'Laravel') }} - Inicio">

                        <div class="relative">

                            <!-- Glow del logo -->
                            <div
                                class="absolute inset-0 rounded-2xl bg-cyan-400/30 blur-xl transition duration-300 group-hover:bg-cyan-400/50"
                                aria-hidden="true">
                            </div>

                            <!-- Logo -->
                            <div class="relative flex h-14 w-14 items-center justify-center rounded-2xl border border-cyan-300/20 bg-white/10 shadow-xl shadow-cyan-500/10 backdrop-blur-xl">

                                <x-application-logo
                                    class="h-8 w-8 fill-current text-cyan-300"
                                />

                            </div>
                        </div>

                    </a>

                    <p class="mt-3 text-xs font-medium uppercase tracking-[0.3em] text-cyan-300/70">
                        {{ config('app.name', 'Laravel') }}
                    </p>

                </header>

                <!-- ========================================= -->
                <!-- VISTA -->
                <!-- ========================================= -->

                {{ $slot }}

            </div>

        </main>

    </div>

</body>
</html>
