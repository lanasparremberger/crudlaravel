<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MusicCRUD — Índice do Projeto</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,300;0,9..144,500;0,9..144,600;1,9..144,500;1,9..144,600&family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500&display=swap"
        rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        blush: '#FFF3F6',
                        petal: '#FFD3E1',
                        rose: '#EC5A93',
                        wine: '#7A1F44',
                        plum: '#5C1638',
                        gold: '#D8A863',
                    },
                    fontFamily: {
                        display: ['Fraunces', 'serif'],
                        body: ['Inter', 'sans-serif'],
                        mono: ['JetBrains Mono', 'monospace'],
                    }
                }
            }
        }
    </script>
    <style>
        @keyframes spin-slow {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        .vinyl {
            animation: spin-slow 10s linear infinite;
        }

        .vinyl-group:hover .vinyl {
            animation-play-state: paused;
        }

        .vinyl-group:hover .tonearm {
            transform: rotate(-8deg);
        }

        .tonearm {
            transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
            transform-origin: 88% 12%;
        }

        @keyframes drift {
            0% {
                transform: translateY(0) rotate(0deg);
                opacity: 0;
            }

            10% {
                opacity: .35;
            }

            90% {
                opacity: .35;
            }

            100% {
                transform: translateY(-140px) rotate(15deg);
                opacity: 0;
            }
        }

        .note {
            animation: drift 9s ease-in-out infinite;
        }

        .leader {
            flex: 1;
            border-bottom: 1.5px dotted rgba(122, 31, 68, 0.35);
            margin: 0 .75rem;
            transform: translateY(-4px);
        }

        .track-row {
            position: relative;
        }

        .track-row::before {
            content: '';
            position: absolute;
            left: -1.25rem;
            right: -1.25rem;
            top: 0;
            bottom: 0;
            background: linear-gradient(90deg, transparent, rgba(236, 90, 147, 0.07), transparent);
            opacity: 0;
            transition: opacity .3s ease;
            border-radius: 0.75rem;
        }

        .track-row:hover::before {
            opacity: 1;
        }

        .track-row:hover .track-num {
            color: #EC5A93;
        }

        .track-row:hover .track-page {
            color: #7A1F44;
        }

        ::selection {
            background: #F7B8D0;
            color: #5C1638;
        }

        #topnav {
            transition: box-shadow .3s ease, background-color .3s ease;
        }

        #topnav.scrolled {
            background-color: rgba(255, 243, 246, 0.85);
            box-shadow: 0 8px 24px -12px rgba(122, 31, 68, 0.25);
        }

        @media (prefers-reduced-motion: reduce) {
            .vinyl {
                animation: none;
            }

            .note {
                animation: none;
            }
        }
    </style>
</head>

<body class="font-body bg-blush text-plum antialiased">

    <!-- background texture -->
    <div class="fixed inset-0 -z-10 bg-gradient-to-br from-blush via-[#FFE7EF] to-petal"></div>
    <div class="fixed -top-24 -right-24 w-[420px] h-[420px] rounded-full bg-petal/40 blur-3xl -z-10"></div>
    <div class="fixed -bottom-32 -left-24 w-[380px] h-[380px] rounded-full bg-rose/10 blur-3xl -z-10"></div>

    <!-- floating notes -->
    <div class="fixed inset-0 -z-10 overflow-hidden pointer-events-none">
        <span class="note absolute left-[12%] top-[70%] text-2xl text-rose/50" style="animation-delay:0s">♪</span>
        <span class="note absolute left-[85%] top-[65%] text-3xl text-wine/40" style="animation-delay:3s">♫</span>
        <span class="note absolute left-[50%] top-[80%] text-xl text-rose/40" style="animation-delay:6s">♩</span>
    </div>

    <!-- ============ HEADER ============ -->
    <header id="topnav" class="sticky top-0 z-30 backdrop-blur-sm">
        <nav class="max-w-5xl mx-auto px-5 sm:px-8 h-16 flex items-center justify-between">
            <a href="#" class="flex items-center gap-2.5 group">
                <span
                    class="w-8 h-8 rounded-full bg-wine flex items-center justify-center text-blush text-sm group-hover:bg-rose transition-colors">♫</span>
                <span class="font-display font-semibold text-lg text-wine tracking-tight">Music<span
                        class="text-rose">CRUD</span></span>
            </a>
            <div class="hidden sm:flex items-center gap-8 font-mono text-[11px] uppercase tracking-widest text-plum/60">
                <a href="#indice" class="hover:text-rose transition-colors">Índice</a>
                <a href="#stack" class="hover:text-rose transition-colors">Stack</a>
                <a href="#" class="hover:text-rose transition-colors">Repositório</a>
            </div>
            <a href="#indice" class="sm:hidden font-mono text-[11px] uppercase tracking-widest text-rose">Índice ↓</a>
        </nav>
    </header>

    <main class="min-h-screen flex items-center justify-center px-5 py-12 sm:py-16">
        <div class="w-full max-w-3xl">

            <!-- capa / hero -->
            <div class="text-center mb-14 sm:mb-16">
                <p class="font-mono text-[11px] sm:text-xs tracking-[0.35em] text-rose uppercase mb-5">Projeto Acadêmico
                    · Sistema CRUD em Laravel</p>

                <div class="flex items-center justify-center gap-4 sm:gap-6 mb-6">
                    <span class="hidden sm:block h-px w-16 bg-wine/25"></span>
                    <h1 class="font-display italic text-4xl sm:text-6xl text-wine leading-[1.05] tracking-tight">
                        Catálogo <span class="not-italic font-semibold text-rose">Musical</span>
                    </h1>
                    <span class="hidden sm:block h-px w-16 bg-wine/25"></span>
                </div>

                <p class="font-body text-sm sm:text-base text-plum/60 max-w-md mx-auto">
                    Um sistema de gerenciamento de músicas, artistas e álbuns — construído com Laravel, do cadastro à
                    exclusão.
                </p>
            </div>

            <!-- card principal -->
            <section id="indice"
                class="relative bg-white/70 backdrop-blur-sm rounded-[28px] border border-white shadow-[0_20px_60px_-15px_rgba(122,31,68,0.25)] px-6 sm:px-12 py-10 sm:py-12 scroll-mt-24">

                <!-- vinyl signature -->
                <div class="vinyl-group absolute -top-10 -right-6 sm:-top-12 sm:-right-10 select-none">
                    <div class="relative w-24 h-24 sm:w-28 sm:h-28">
                        <div
                            class="vinyl absolute inset-0 rounded-full bg-[conic-gradient(from_0deg,#5C1638,#7A1F44_15%,#5C1638_30%,#7A1F44_45%,#5C1638_60%,#7A1F44_75%,#5C1638_90%,#7A1F44_100%)] shadow-lg">
                            <div class="absolute inset-[32%] rounded-full bg-rose flex items-center justify-center">
                                <div class="w-2 h-2 rounded-full bg-blush"></div>
                            </div>
                        </div>
                        <div
                            class="tonearm absolute -top-1 right-1 w-14 h-1.5 bg-gold rounded-full shadow-sm origin-top-right">
                        </div>
                    </div>
                </div>

                <div class="flex items-baseline justify-between mb-8 sm:mb-10">
                    <h2 class="font-display text-2xl sm:text-3xl text-wine font-semibold">Índice</h2>
                    <span class="font-mono text-[11px] text-plum/40 tracking-widest uppercase">Seção · Página</span>
                </div>

                <!-- tracklist / índice -->
                <ol class="space-y-1">
                    <li class="track-row flex items-center py-3 px-2 rounded-xl">
                        <span class="track-num font-mono text-sm text-plum/40 w-7 transition-colors">01</span>
                        <span class="font-display text-lg sm:text-xl text-plum">Introdução ao Projeto</span>
                        <span class="leader"></span>
                        <span class="track-page font-mono text-sm text-plum/50 transition-colors">03</span>
                    </li>
                    <li class="track-row flex items-center py-3 px-2 rounded-xl">
                        <span class="track-num font-mono text-sm text-plum/40 w-7 transition-colors">02</span>
                        <span class="font-display text-lg sm:text-xl text-plum">Modelagem do Banco de Dados</span>
                        <span class="leader"></span>
                        <span class="track-page font-mono text-sm text-plum/50 transition-colors">05</span>
                    </li>
                    <li class="track-row flex items-center py-3 px-2 rounded-xl">
                        <span class="track-num font-mono text-sm text-plum/40 w-7 transition-colors">03</span>
                        <span class="font-display text-lg sm:text-xl text-plum">Instalação e Configuração do
                            Ambiente</span>
                        <span class="leader"></span>
                        <span class="track-page font-mono text-sm text-plum/50 transition-colors">07</span>
                    </li>
                    <li class="track-row flex items-center py-3 px-2 rounded-xl">
                        <span class="track-num font-mono text-sm text-plum/40 w-7 transition-colors">04</span>
                        <span class="font-display text-lg sm:text-xl text-plum">Rotas e Controllers</span>
                        <span class="leader"></span>
                        <span class="track-page font-mono text-sm text-plum/50 transition-colors">09</span>
                    </li>
                    <li class="track-row flex items-center py-3 px-2 rounded-xl">
                        <span class="track-num font-mono text-sm text-plum/40 w-7 transition-colors">05</span>
                        <span class="font-display text-lg sm:text-xl text-plum">Operações CRUD (Criar, Ler, Atualizar,
                            Excluir)</span>
                        <span class="leader"></span>
                        <span class="track-page font-mono text-sm text-plum/50 transition-colors">12</span>
                    </li>
                    <li class="track-row flex items-center py-3 px-2 rounded-xl">
                        <span class="track-num font-mono text-sm text-plum/40 w-7 transition-colors">06</span>
                        <span class="font-display text-lg sm:text-xl text-plum">Views e Interface do Usuário</span>
                        <span class="leader"></span>
                        <span class="track-page font-mono text-sm text-plum/50 transition-colors">15</span>
                    </li>
                    <li class="track-row flex items-center py-3 px-2 rounded-xl">
                        <span class="track-num font-mono text-sm text-plum/40 w-7 transition-colors">07</span>
                        <span class="font-display text-lg sm:text-xl text-plum">Testes e Validações</span>
                        <span class="leader"></span>
                        <span class="track-page font-mono text-sm text-plum/50 transition-colors">17</span>
                    </li>
                    <li class="track-row flex items-center py-3 px-2 rounded-xl">
                        <span class="track-num font-mono text-sm text-plum/40 w-7 transition-colors">08</span>
                        <span class="font-display text-lg sm:text-xl text-plum">Conclusão e Referências</span>
                        <span class="leader"></span>
                        <span class="track-page font-mono text-sm text-plum/50 transition-colors">19</span>
                    </li>
                </ol>

                <!-- waveform divider -->
                <div class="flex items-end justify-center gap-[3px] h-6 mt-9 mb-1 opacity-50">
                    <span class="w-[3px] bg-rose rounded-full h-2"></span>
                    <span class="w-[3px] bg-rose rounded-full h-4"></span>
                    <span class="w-[3px] bg-wine rounded-full h-5"></span>
                    <span class="w-[3px] bg-rose rounded-full h-3"></span>
                    <span class="w-[3px] bg-wine rounded-full h-6"></span>
                    <span class="w-[3px] bg-rose rounded-full h-3"></span>
                    <span class="w-[3px] bg-wine rounded-full h-5"></span>
                    <span class="w-[3px] bg-rose rounded-full h-2"></span>
                    <span class="w-[3px] bg-wine rounded-full h-4"></span>
                </div>

                <!-- liner notes / metadados -->
                <div
                    class="mt-8 pt-6 border-t border-wine/10 grid grid-cols-1 sm:grid-cols-3 gap-4 text-center sm:text-left">
                    <div>
                        <p class="font-mono text-[10px] uppercase tracking-widest text-plum/40 mb-1">Aluno(a)</p>
                        <p class="font-body text-sm text-plum/80">[Nome do aluno]</p>
                    </div>
                    <div>
                        <p class="font-mono text-[10px] uppercase tracking-widest text-plum/40 mb-1">Professor(a)</p>
                        <p class="font-body text-sm text-plum/80">[Nome do professor]</p>
                    </div>
                    <div>
                        <p class="font-mono text-[10px] uppercase tracking-widest text-plum/40 mb-1">Turma / Data</p>
                        <p class="font-body text-sm text-plum/80">[Turma — 2026]</p>
                    </div>
                </div>
            </section>

            <!-- stack -->
            <div id="stack" class="flex flex-wrap justify-center gap-2.5 mt-8 scroll-mt-24">
                <span
                    class="font-mono text-[11px] tracking-wide bg-white/70 border border-wine/10 text-wine px-3 py-1.5 rounded-full">Laravel</span>
                <span
                    class="font-mono text-[11px] tracking-wide bg-white/70 border border-wine/10 text-wine px-3 py-1.5 rounded-full">PHP</span>
                <span
                    class="font-mono text-[11px] tracking-wide bg-white/70 border border-wine/10 text-wine px-3 py-1.5 rounded-full">MySQL</span>
                <span
                    class="font-mono text-[11px] tracking-wide bg-white/70 border border-wine/10 text-wine px-3 py-1.5 rounded-full">Blade</span>
                <span
                    class="font-mono text-[11px] tracking-wide bg-white/70 border border-wine/10 text-wine px-3 py-1.5 rounded-full">Tailwind
                    CSS</span>
            </div>

        </div>
    </main>

    <!-- ============ FOOTER ============ -->
    <footer class="mt-16 border-t border-wine/10 bg-white/50">
        <div class="max-w-5xl mx-auto px-5 sm:px-8 py-10">
            <div class="flex flex-col sm:flex-row items-center justify-between gap-6">
                <div class="flex items-center gap-2.5">
                    <span
                        class="w-7 h-7 rounded-full bg-wine flex items-center justify-center text-blush text-xs">♫</span>
                    <span class="font-display font-semibold text-base text-wine">Music<span
                            class="text-rose">CRUD</span></span>
                </div>

                <div class="flex items-end justify-center gap-[3px] h-5 opacity-40">
                    <span class="w-[2.5px] bg-rose rounded-full h-2"></span>
                    <span class="w-[2.5px] bg-wine rounded-full h-3.5"></span>
                    <span class="w-[2.5px] bg-rose rounded-full h-2.5"></span>
                    <span class="w-[2.5px] bg-wine rounded-full h-4"></span>
                    <span class="w-[2.5px] bg-rose rounded-full h-2"></span>
                </div>

                <div class="font-mono text-[11px] uppercase tracking-widest text-plum/50 flex gap-6">
                    <a href="#indice" class="hover:text-rose transition-colors">Índice</a>
                    <a href="#stack" class="hover:text-rose transition-colors">Stack</a>
                    <a href="#" class="hover:text-rose transition-colors">GitHub</a>
                </div>
            </div>

            <p class="text-center font-mono text-[10px] tracking-widest text-plum/35 uppercase mt-8">
                © 2026 MusicCRUD · Projeto acadêmico desenvolvido em Laravel
            </p>
        </div>
    </footer>

    <script>
        const nav = document.getElementById('topnav');
        window.addEventListener('scroll', () => {
            nav.classList.toggle('scrolled', window.scrollY > 10);
        });
    </script>

</body>

</html>
