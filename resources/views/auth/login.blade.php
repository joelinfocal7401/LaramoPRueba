<x-guest-layout>
    <main class="min-h-screen relative overflow-hidden bg-slate-950 flex items-center justify-center px-4 py-10 sm:px-6 lg:px-8">

        {{-- Fondo decorativo --}}
        <div class="absolute inset-0 overflow-hidden pointer-events-none" aria-hidden="true">
            <div class="absolute -top-40 -left-40 w-96 h-96 bg-blue-600/30 rounded-full blur-3xl"></div>
            <div class="absolute top-1/3 -right-40 w-96 h-96 bg-purple-600/30 rounded-full blur-3xl"></div>
            <div class="absolute -bottom-40 left-1/3 w-96 h-96 bg-cyan-500/20 rounded-full blur-3xl"></div>

            <div class="absolute inset-0 bg-gradient-to-br from-blue-950 via-indigo-950 to-purple-950"></div>
        </div>

        {{-- Contenido principal --}}
        <section class="relative z-10 w-full max-w-md" aria-labelledby="login-title">

            {{-- Tarjeta Glassmorphism --}}
            <div class="relative rounded-3xl border border-cyan-400/20 bg-white/[0.08] backdrop-blur-2xl shadow-[0_0_60px_rgba(34,211,238,0.12)] p-6 sm:p-8">

                {{-- Borde luminoso --}}
                <div
                    class="absolute inset-0 rounded-3xl pointer-events-none ring-1 ring-inset ring-white/10"
                    aria-hidden="true">
                </div>

                {{-- Encabezado --}}
                <header class="text-center mb-8">
                    <div class="mx-auto mb-5 flex h-16 w-16 items-center justify-center rounded-2xl bg-gradient-to-br from-cyan-400 to-blue-600 shadow-lg shadow-cyan-500/30">
                        <svg
                            class="h-8 w-8 text-white"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.8"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.5 20.25a8.25 8.25 0 0 1 15 0" />
                        </svg>
                    </div>

                    <h1
                        id="login-title"
                        class="text-3xl font-bold tracking-tight text-white">
                        Bienvenido
                    </h1>

                    <p class="mt-2 text-sm text-slate-300">
                        Inicia sesión para continuar
                    </p>
                </header>

                {{-- Estado de sesión --}}
                <x-auth-session-status
                    class="mb-5 rounded-xl border border-cyan-400/20 bg-cyan-400/10 px-4 py-3 text-sm text-cyan-200"
                    :status="session('status')"
                />

                {{-- Formulario --}}
                <form method="POST" action="{{ route('login') }}" class="space-y-5">
                    @csrf

                    {{-- Email --}}
                    <div>
                        <label
                            for="email"
                            class="mb-2 block text-sm font-medium text-slate-200">
                            Correo electrónico
                        </label>

                        <div class="relative">
                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4">
                                <svg
                                    class="h-5 w-5 text-cyan-400"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="1.8"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25H4.5a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15A2.25 2.25 0 0 0 2.25 6.75m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0l-7.5-4.615A2.25 2.25 0 0 1 2.25 6.993V6.75" />
                                </svg>
                            </div>

                            <input
                                id="email"
                                name="email"
                                type="email"
                                value="{{ old('email') }}"
                                required
                                autofocus
                                autocomplete="username"
                                placeholder="tu@email.com"
                                aria-describedby="email-error"
                                class="block w-full rounded-xl border border-white/10 bg-slate-950/40 py-3.5 pl-12 pr-4 text-sm text-white placeholder-slate-500 shadow-inner outline-none transition duration-200 focus:border-cyan-400/60 focus:bg-slate-950/60 focus:ring-2 focus:ring-cyan-400/20"
                            >
                        </div>

                        <x-input-error
                            id="email-error"
                            :messages="$errors->get('email')"
                            class="mt-2 text-sm text-red-300"
                        />
                    </div>

                    {{-- Contraseña --}}
                    <div>
                        <div class="mb-2 flex items-center justify-between">
                            <label
                                for="password"
                                class="block text-sm font-medium text-slate-200">
                                Contraseña
                            </label>

                            @if (Route::has('password.request'))
                                <a
                                    href="{{ route('password.request') }}"
                                    class="text-xs font-medium text-cyan-400 transition hover:text-cyan-300 focus:outline-none focus:ring-2 focus:ring-cyan-400/50 focus:ring-offset-2 focus:ring-offset-slate-900 rounded">
                                    ¿Olvidaste tu contraseña?
                                </a>
                            @endif
                        </div>

                        <div class="relative">
                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4">
                                <svg
                                    class="h-5 w-5 text-cyan-400"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="1.8"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16.5 10.5V6.75a4.5 4.5 0 0 0-9 0v3.75m-.75 0h10.5A2.25 2.25 0 0 1 19.5 12.75v6.75A2.25 2.25 0 0 1 17.25 21.75H6.75A2.25 2.25 0 0 1 4.5 19.5v-6.75a2.25 2.25 0 0 1 2.25-2.25Z" />
                                </svg>
                            </div>

                            <input
                                id="password"
                                name="password"
                                type="password"
                                required
                                autocomplete="current-password"
                                placeholder="••••••••"
                                aria-describedby="password-error"
                                class="block w-full rounded-xl border border-white/10 bg-slate-950/40 py-3.5 pl-12 pr-4 text-sm text-white placeholder-slate-500 shadow-inner outline-none transition duration-200 focus:border-cyan-400/60 focus:bg-slate-950/60 focus:ring-2 focus:ring-cyan-400/20"
                            >
                        </div>

                        <x-input-error
                            id="password-error"
                            :messages="$errors->get('password')"
                            class="mt-2 text-sm text-red-300"
                        />
                    </div>

                    {{-- Recordarme --}}
                    <div class="flex items-center">
                        <label
                            for="remember_me"
                            class="inline-flex cursor-pointer items-center gap-3 text-sm text-slate-300">

                            <input
                                id="remember_me"
                                type="checkbox"
                                name="remember"
                                class="h-4 w-4 rounded border-white/20 bg-slate-950/50 text-cyan-500 shadow-sm focus:ring-2 focus:ring-cyan-400/50 focus:ring-offset-0"
                            >

                            <span>Recordarme</span>
                        </label>
                    </div>

                    {{-- Botón Login --}}
                    <button
                        type="submit"
                        class="group relative flex w-full items-center justify-center overflow-hidden rounded-xl bg-gradient-to-r from-cyan-400 via-blue-500 to-purple-600 px-5 py-3.5 text-sm font-bold uppercase tracking-wider text-white shadow-lg shadow-blue-600/25 transition duration-300 hover:scale-[1.01] hover:shadow-cyan-500/30 focus:outline-none focus:ring-2 focus:ring-cyan-300 focus:ring-offset-2 focus:ring-offset-slate-900 active:scale-[0.99]">

                        <span class="absolute inset-0 -translate-x-full bg-gradient-to-r from-transparent via-white/20 to-transparent transition-transform duration-700 group-hover:translate-x-full"></span>

                        <span class="relative flex items-center gap-2">
                            Iniciar sesión

                            <svg
                                class="h-4 w-4 transition-transform duration-200 group-hover:translate-x-1"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                            </svg>
                        </span>
                    </button>
                </form>

                {{-- Separador --}}
                <div class="my-7 flex items-center gap-4" aria-hidden="true">
                    <div class="h-px flex-1 bg-gradient-to-r from-transparent via-white/20 to-transparent"></div>

                    <span class="text-xs font-medium uppercase tracking-widest text-slate-500">
                        o continúa con
                    </span>

                    <div class="h-px flex-1 bg-gradient-to-r from-transparent via-white/20 to-transparent"></div>
                </div>

                {{-- Google --}}
                <a
                    href="{{ route('google.login') }}"
                    aria-label="Iniciar sesión con Google"
                    class="group flex w-full items-center justify-center gap-3 rounded-xl border border-white/10 bg-white/[0.07] px-5 py-3.5 text-sm font-semibold text-white backdrop-blur-sm transition duration-300 hover:border-cyan-400/40 hover:bg-white/[0.12] hover:shadow-lg hover:shadow-cyan-500/10 focus:outline-none focus:ring-2 focus:ring-cyan-400/60 focus:ring-offset-2 focus:ring-offset-slate-900 active:scale-[0.99]">

                    {{-- Google Icon --}}
                    <span class="flex h-6 w-6 items-center justify-center rounded-full bg-white p-1 shadow-sm transition-transform duration-300 group-hover:scale-110">
                        <svg
                            class="h-full w-full"
                            viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                            <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                            <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.06H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.94l2.85-2.22.81-.63z"/>
                            <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.06l3.66 2.84c.87-2.6 3.3-4.52 6.16-4.52z"/>
                        </svg>
                    </span>

                    <span>Continuar con Google</span>
                </a>

                {{-- Registro --}}
                @if (Route::has('register'))
                    <p class="mt-7 text-center text-sm text-slate-400">
                        ¿No tienes una cuenta?
                        <a
                            href="{{ route('register') }}"
                            class="font-semibold text-cyan-400 transition hover:text-cyan-300 focus:outline-none focus:ring-2 focus:ring-cyan-400/50 rounded">
                            Crear cuenta
                        </a>
                    </p>
                @endif

            </div>

            {{-- Texto inferior --}}
            <footer class="mt-6 text-center">
                <p class="text-xs text-slate-500">
                    Acceso seguro · Protegemos tu información
                </p>
            </footer>

        </section>
    </main>
</x-guest-layout>
