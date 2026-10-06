<x-guest-layout>
    <main
        class="relative flex min-h-screen items-center justify-center overflow-hidden bg-slate-950 px-4 py-8 sm:px-6 sm:py-10 lg:px-8"
        aria-labelledby="register-title"
    >

        {{-- =========================================================
            FONDO ANIMADO
        ========================================================== --}}
        <div
            class="pointer-events-none absolute inset-0 overflow-hidden"
            aria-hidden="true"
        >
            {{-- Gradiente base --}}
            <div class="absolute inset-0 bg-gradient-to-br from-blue-950 via-indigo-950 to-purple-950"></div>

            {{-- Glow azul --}}
            <div
                class="absolute -left-40 -top-40 h-96 w-96 rounded-full bg-blue-600/30 blur-3xl motion-safe:animate-[spin_25s_linear_infinite]"
            ></div>

            {{-- Glow morado --}}
            <div
                class="absolute -right-40 top-1/4 h-[28rem] w-[28rem] rounded-full bg-purple-600/25 blur-3xl motion-safe:animate-[spin_30s_linear_infinite_reverse]"
            ></div>

            {{-- Glow cyan --}}
            <div
                class="absolute -bottom-48 left-1/4 h-96 w-96 rounded-full bg-cyan-500/20 blur-3xl motion-safe:animate-pulse"
            ></div>

            {{-- Glow azul secundario --}}
            <div
                class="absolute bottom-1/4 -left-20 h-72 w-72 rounded-full bg-blue-500/10 blur-3xl motion-safe:animate-pulse"
            ></div>

            {{-- Capa de profundidad --}}
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,transparent_0%,rgba(2,6,23,0.35)_70%,rgba(2,6,23,0.75)_100%)]"></div>

            {{-- Pequeños puntos luminosos --}}
            <div class="absolute left-[12%] top-[18%] h-1.5 w-1.5 rounded-full bg-cyan-300 shadow-[0_0_15px_rgba(103,232,249,0.9)] motion-safe:animate-pulse"></div>

            <div class="absolute right-[15%] top-[30%] h-1 w-1 rounded-full bg-blue-300 shadow-[0_0_12px_rgba(147,197,253,0.9)] motion-safe:animate-pulse"></div>

            <div class="absolute bottom-[20%] left-[18%] h-1 w-1 rounded-full bg-purple-300 shadow-[0_0_12px_rgba(216,180,254,0.9)] motion-safe:animate-pulse"></div>

            <div class="absolute bottom-[15%] right-[22%] h-1.5 w-1.5 rounded-full bg-cyan-300 shadow-[0_0_15px_rgba(103,232,249,0.8)] motion-safe:animate-pulse"></div>
        </div>


        {{-- =========================================================
            CONTENIDO
        ========================================================== --}}
        <section
            class="relative z-10 w-full max-w-lg"
            aria-labelledby="register-title"
        >

            {{-- =====================================================
                TARJETA GLASSMORPHISM
            ====================================================== --}}
            <div class="group relative">

                {{-- Glow exterior animado --}}
                <div
                    class="absolute -inset-1 rounded-[2rem] bg-gradient-to-r from-cyan-500/20 via-blue-500/20 to-purple-600/20 blur-xl opacity-60 transition duration-700 group-hover:opacity-90 motion-safe:animate-pulse"
                    aria-hidden="true"
                ></div>

                <div
                    class="relative overflow-hidden rounded-[2rem] border border-cyan-400/20 bg-white/[0.07] p-6 shadow-[0_0_60px_rgba(34,211,238,0.10)] backdrop-blur-2xl sm:p-8"
                >

                    {{-- Borde interior --}}
                    <div
                        class="pointer-events-none absolute inset-0 rounded-[2rem] ring-1 ring-inset ring-white/10"
                        aria-hidden="true"
                    ></div>

                    {{-- Reflejo superior --}}
                    <div
                        class="pointer-events-none absolute -top-32 left-1/2 h-64 w-64 -translate-x-1/2 rounded-full bg-cyan-400/10 blur-3xl"
                        aria-hidden="true"
                    ></div>


                    {{-- =================================================
                        ENCABEZADO
                    ================================================== --}}
                    <header class="relative mb-8 text-center">

                        {{-- Icono --}}
                        <div class="relative mx-auto mb-5 flex h-16 w-16 items-center justify-center">

                            {{-- Halo --}}
                            <div
                                class="absolute inset-0 rounded-2xl bg-cyan-400/20 blur-xl motion-safe:animate-pulse"
                                aria-hidden="true"
                            ></div>

                            {{-- Contenedor --}}
                            <div class="relative flex h-16 w-16 items-center justify-center rounded-2xl border border-cyan-300/30 bg-gradient-to-br from-cyan-400 via-blue-500 to-purple-600 shadow-lg shadow-cyan-500/30">
                                <svg
                                    class="h-8 w-8 text-white"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="1.8"
                                    aria-hidden="true"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.5 20.25a8.25 8.25 0 0 1 15 0"
                                    />
                                </svg>
                            </div>
                        </div>

                        <h1
                            id="register-title"
                            class="text-3xl font-bold tracking-tight text-white sm:text-4xl"
                        >
                            Crear cuenta
                        </h1>

                        <p class="mx-auto mt-2 max-w-sm text-sm leading-6 text-slate-300">
                            Regístrate para comenzar a utilizar la plataforma.
                        </p>
                    </header>


                    {{-- =================================================
                        FORMULARIO
                    ================================================== --}}
                    <form
                        method="POST"
                        action="{{ route('register') }}"
                        class="relative space-y-5"
                    >
                        @csrf


                        {{-- =================================================
                            NOMBRE
                        ================================================== --}}
                        <div>
                            <label
                                for="name"
                                class="mb-2 block text-sm font-medium text-slate-200"
                            >
                                Nombre completo
                            </label>

                            <div class="relative">

                                {{-- Icono --}}
                                <div
                                    class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4"
                                    aria-hidden="true"
                                >
                                    <svg
                                        class="h-5 w-5 text-cyan-400 transition duration-200"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="1.8"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.5 20.25a8.25 8.25 0 0 1 15 0"
                                        />
                                    </svg>
                                </div>

                                <input
                                    id="name"
                                    name="name"
                                    type="text"
                                    value="{{ old('name') }}"
                                    required
                                    autofocus
                                    autocomplete="name"
                                    placeholder="Tu nombre completo"
                                    aria-describedby="name-error"
                                    class="block w-full rounded-xl border border-white/10 bg-slate-950/40 py-3.5 pl-12 pr-4 text-sm text-white placeholder-slate-500 shadow-inner outline-none transition duration-300 hover:border-white/20 focus:border-cyan-400/60 focus:bg-slate-950/60 focus:ring-2 focus:ring-cyan-400/20"
                                >
                            </div>

                            <x-input-error
                                id="name-error"
                                :messages="$errors->get('name')"
                                class="mt-2 text-sm text-red-300"
                            />
                        </div>


                        {{-- =================================================
                            EMAIL
                        ================================================== --}}
                        <div>
                            <label
                                for="email"
                                class="mb-2 block text-sm font-medium text-slate-200"
                            >
                                Correo electrónico
                            </label>

                            <div class="relative">

                                <div
                                    class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4"
                                    aria-hidden="true"
                                >
                                    <svg
                                        class="h-5 w-5 text-cyan-400 transition duration-200"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="1.8"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25H4.5a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15A2.25 2.25 0 0 0 2.25 6.75m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0l-7.5-4.615A2.25 2.25 0 0 1 2.25 6.993V6.75"
                                        />
                                    </svg>
                                </div>

                                <input
                                    id="email"
                                    name="email"
                                    type="email"
                                    value="{{ old('email') }}"
                                    required
                                    autocomplete="username"
                                    placeholder="tu@email.com"
                                    aria-describedby="email-error"
                                    class="block w-full rounded-xl border border-white/10 bg-slate-950/40 py-3.5 pl-12 pr-4 text-sm text-white placeholder-slate-500 shadow-inner outline-none transition duration-300 hover:border-white/20 focus:border-cyan-400/60 focus:bg-slate-950/60 focus:ring-2 focus:ring-cyan-400/20"
                                >
                            </div>

                            <x-input-error
                                id="email-error"
                                :messages="$errors->get('email')"
                                class="mt-2 text-sm text-red-300"
                            />
                        </div>


                        {{-- =================================================
                            CONTRASEÑA
                        ================================================== --}}
                        <div>
                            <label
                                for="password"
                                class="mb-2 block text-sm font-medium text-slate-200"
                            >
                                Contraseña
                            </label>

                            <div class="relative">

                                <div
                                    class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4"
                                    aria-hidden="true"
                                >
                                    <svg
                                        class="h-5 w-5 text-cyan-400"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="1.8"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M16.5 10.5V6.75a4.5 4.5 0 0 0-9 0v3.75m-.75 0h10.5A2.25 2.25 0 0 1 19.5 12.75v6.75A2.25 2.25 0 0 1 17.25 21.75H6.75A2.25 2.25 0 0 1 4.5 19.5v-6.75a2.25 2.25 0 0 1 2.25-2.25Z"
                                        />
                                    </svg>
                                </div>

                                <input
                                    id="password"
                                    name="password"
                                    type="password"
                                    required
                                    autocomplete="new-password"
                                    placeholder="••••••••"
                                    aria-describedby="password-error"
                                    class="block w-full rounded-xl border border-white/10 bg-slate-950/40 py-3.5 pl-12 pr-4 text-sm text-white placeholder-slate-500 shadow-inner outline-none transition duration-300 hover:border-white/20 focus:border-cyan-400/60 focus:bg-slate-950/60 focus:ring-2 focus:ring-cyan-400/20"
                                >
                            </div>

                            <x-input-error
                                id="password-error"
                                :messages="$errors->get('password')"
                                class="mt-2 text-sm text-red-300"
                            />
                        </div>


                        {{-- =================================================
                            CONFIRMAR CONTRASEÑA
                        ================================================== --}}
                        <div>
                            <label
                                for="password_confirmation"
                                class="mb-2 block text-sm font-medium text-slate-200"
                            >
                                Confirmar contraseña
                            </label>

                            <div class="relative">

                                <div
                                    class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4"
                                    aria-hidden="true"
                                >
                                    <svg
                                        class="h-5 w-5 text-cyan-400"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="1.8"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M9 12.75 11.25 15 15 9.75m6 2.25a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"
                                        />
                                    </svg>
                                </div>

                                <input
                                    id="password_confirmation"
                                    name="password_confirmation"
                                    type="password"
                                    required
                                    autocomplete="new-password"
                                    placeholder="Repite tu contraseña"
                                    aria-describedby="password-confirmation-error"
                                    class="block w-full rounded-xl border border-white/10 bg-slate-950/40 py-3.5 pl-12 pr-4 text-sm text-white placeholder-slate-500 shadow-inner outline-none transition duration-300 hover:border-white/20 focus:border-cyan-400/60 focus:bg-slate-950/60 focus:ring-2 focus:ring-cyan-400/20"
                                >
                            </div>

                            <x-input-error
                                id="password-confirmation-error"
                                :messages="$errors->get('password_confirmation')"
                                class="mt-2 text-sm text-red-300"
                            />
                        </div>


                        {{-- =================================================
                            BOTÓN REGISTRAR
                        ================================================== --}}
                        <button
                            type="submit"
                            class="group relative flex w-full items-center justify-center overflow-hidden rounded-xl bg-gradient-to-r from-cyan-400 via-blue-500 to-purple-600 px-5 py-3.5 text-sm font-bold uppercase tracking-wider text-white shadow-lg shadow-blue-600/25 transition duration-300 hover:scale-[1.01] hover:shadow-cyan-500/30 focus:outline-none focus-visible:ring-2 focus-visible:ring-cyan-300 focus-visible:ring-offset-2 focus-visible:ring-offset-slate-900 active:scale-[0.99]"
                        >

                            {{-- Shine --}}
                            <span
                                class="absolute inset-0 -translate-x-full bg-gradient-to-r from-transparent via-white/25 to-transparent transition-transform duration-700 group-hover:translate-x-full"
                                aria-hidden="true"
                            ></span>

                            {{-- Glow --}}
                            <span
                                class="absolute inset-0 opacity-0 shadow-[inset_0_0_30px_rgba(255,255,255,0.25)] transition-opacity duration-300 group-hover:opacity-100"
                                aria-hidden="true"
                            ></span>

                            <span class="relative flex items-center gap-2">
                                Crear cuenta

                                <svg
                                    class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-1"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    aria-hidden="true"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"
                                    />
                                </svg>
                            </span>
                        </button>

                    </form>


                    {{-- =================================================
                        SEPARADOR
                    ================================================== --}}
                    <div
                        class="my-7 flex items-center gap-4"
                        aria-hidden="true"
                    >
                        <div class="h-px flex-1 bg-gradient-to-r from-transparent via-white/20 to-transparent"></div>

                        <span class="text-xs font-medium uppercase tracking-widest text-slate-500">
                            o regístrate con
                        </span>

                        <div class="h-px flex-1 bg-gradient-to-r from-transparent via-white/20 to-transparent"></div>
                    </div>


                    {{-- =================================================
                        GOOGLE
                    ================================================== --}}
                    <a
                        href="{{ route('google.login') }}"
                        aria-label="Registrarse con Google"
                        class="group relative flex w-full items-center justify-center gap-3 overflow-hidden rounded-xl border border-white/10 bg-white/[0.06] px-5 py-3.5 text-sm font-semibold text-white backdrop-blur-sm transition duration-300 hover:border-cyan-400/40 hover:bg-white/[0.11] hover:shadow-lg hover:shadow-cyan-500/10 focus:outline-none focus-visible:ring-2 focus-visible:ring-cyan-400/60 focus-visible:ring-offset-2 focus-visible:ring-offset-slate-900 active:scale-[0.99]"
                    >

                        {{-- Shine --}}
                        <span
                            class="absolute inset-0 -translate-x-full bg-gradient-to-r from-transparent via-white/10 to-transparent transition-transform duration-700 group-hover:translate-x-full"
                            aria-hidden="true"
                        ></span>

                        {{-- Google icon --}}
                        <span class="relative flex h-6 w-6 items-center justify-center rounded-full bg-white p-1 shadow-sm transition-transform duration-300 group-hover:scale-110">
                            <svg
                                class="h-full w-full"
                                viewBox="0 0 24 24"
                                aria-hidden="true"
                            >
                                <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                                <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                                <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.06H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.94l2.85-2.22.81-.63z"/>
                                <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.06l3.66 2.84c.87-2.6 3.3-4.52 6.16-4.52z"/>
                            </svg>
                        </span>

                        <span class="relative">
                            Continuar con Google
                        </span>
                    </a>


                    {{-- =================================================
                        LOGIN
                    ================================================== --}}
                    <p class="mt-7 text-center text-sm text-slate-400">
                        ¿Ya tienes una cuenta?

                        <a
                            href="{{ route('login') }}"
                            class="ml-1 font-semibold text-cyan-400 transition duration-200 hover:text-cyan-300 focus:outline-none focus-visible:rounded focus-visible:ring-2 focus-visible:ring-cyan-400/50"
                        >
                            Iniciar sesión
                        </a>
                    </p>

                </div>
            </div>


            {{-- =====================================================
                FOOTER
            ====================================================== --}}
            <footer class="mt-6 text-center">
                <p class="text-xs text-slate-500">
                    Registro seguro · Protegemos tu información
                </p>
            </footer>

        </section>
    </main>
</x-guest-layout>
