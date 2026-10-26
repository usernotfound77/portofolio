<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portofolio mahasiswa Informatika — pengembangan web, aplikasi, dan UI/UX.">
    <title>Ricky Kurniawan — Informatics Portfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
    <script defer src="{{ asset('js/portfolio.js') }}"></script>
</head>
<body>
    <div class="cursor-glow" aria-hidden="true"></div>
    <div class="site-noise" aria-hidden="true"></div>
    <header class="site-header" id="top">
        <nav class="nav container" aria-label="Navigasi utama">
            <a class="brand" href="#home"><span class="brand-mark">R</span><span>ricky<span class="brand-dot">.</span>dev</span></a>
            <button class="menu-toggle" aria-label="Buka navigasi" aria-expanded="false"><span></span><span></span></button>
            <div class="nav-links">
                <a href="#home" class="nav-link active">Home</a>
                <a href="#about" class="nav-link">About</a>
                <a href="#projects" class="nav-link">Projects</a>
                <a href="#skills" class="nav-link">Skills</a>
                <a href="#experience" class="nav-link">Experience</a>
                <a href="#contact" class="nav-link nav-contact">Let's talk <span>↗</span></a>
            </div>
        </nav>
    </header>

    <main>
        <section class="hero section container" id="home">
            <div class="hero-copy reveal">
                <div class="availability"><span class="pulse-dot"></span> OPEN TO OPPORTUNITIES</div>
                <p class="eyebrow">HELLO, I'M RICKY KURNIAWAN</p>
                <h1>Turning ideas into<br><span class="gradient-text">digital experiences.</span></h1>
                <p class="hero-description">Mahasiswa Informatika yang tertarik pada <strong>web development</strong>, desain antarmuka, dan membangun produk digital yang berguna.</p>
                <div class="hero-actions">
                    <a class="button button-primary" href="#projects">Explore my work <span>↗</span></a>
                    <a class="button button-ghost" href="#contact"><span class="play-icon">✳</span> Let's connect</a>
                </div>
                <div class="hero-socials"><span>FIND ME ON</span><a href="https://github.com/" target="_blank" rel="noreferrer">GitHub ↗</a><a href="https://www.linkedin.com/" target="_blank" rel="noreferrer">LinkedIn ↗</a></div>
            </div>
            <div class="hero-art hero-profile-art reveal" aria-label="Foto profil Ricky Kurniawan">
                <div class="orbit orbit-one"></div><div class="orbit orbit-two"></div>
                <div class="profile-photo-frame"><img src="{{ asset('images/profile.jpg') }}" alt="Foto profil Ricky Kurniawan" class="profile-photo"></div>
                <div class="profile-label"><span class="pulse-dot"></span><div><b>Ricky Kurniawan</b><small>Informatics Student</small></div></div>
                <div class="float-card card-code"><span class="mini-icon purple">⌘</span><div><b>Clean code</b><small>Built with purpose</small></div><span class="card-check">✓</span></div>
                <div class="float-card card-ui"><span class="mini-icon mint">◈</span><div><b>UI / UX</b><small>Thoughtful design</small></div></div>
                <div class="float-card card-stack"><span class="stack-dot"></span> Laravel <span class="stack-separator">/</span> Flutter</div>
                <span class="spark spark-a">✳</span><span class="spark spark-b">✦</span><span class="spark spark-c">+</span>
            </div>
            <a class="scroll-cue" href="#about"><span class="scroll-line"></span> SCROLL TO EXPLORE</a>
        </section>

        <section class="stats-strip container reveal" aria-label="Ringkasan">
            <div><strong>01<span>+</span></strong><small>Curiosity level</small></div>
            <div><strong>∞</strong><small>Ideas to explore</small></div>
            <div><strong>100<span>%</span></strong><small>Learning mindset</small></div>
            <p>Small steps. <span>Meaningful impact.</span></p>
        </section>

        <section class="section container about-section" id="about">
            <div class="section-heading reveal"><p class="eyebrow">01 / ABOUT ME</p><h2>Curious mind.<br><span class="muted-heading">Builder at heart.</span></h2></div>
            <div class="about-grid">
                <div class="about-intro reveal"><div class="about-mini-profile"><img src="{{ asset('images/profile.jpg') }}" alt="Ricky Kurniawan" loading="lazy"><div><strong>Ricky Kurniawan</strong><span>Mahasiswa Informatika</span></div></div><p class="large-copy">Saya percaya teknologi terbaik bukan hanya terlihat menarik, tetapi juga <span class="text-highlight">memecahkan masalah nyata.</span></p><p>Saat ini saya mengembangkan kemampuan di bidang pemrograman, pengembangan aplikasi, dan perancangan pengalaman pengguna. Saya senang mengeksplorasi ide, belajar dari proses, lalu mengubahnya menjadi karya yang bisa digunakan.</p><a class="text-link" href="#contact">More about my journey <span>↗</span></a></div>
                <div class="about-panel reveal"><div class="panel-top"><span class="panel-dot"></span><span class="panel-dot"></span><span class="panel-dot"></span><small>profile.json</small></div><pre><code><span class="code-purple">const</span> developer = {
  name: <span class="code-green">'Ricky Kurniawan'</span>,
  role: <span class="code-green">'Informatics Student'</span>,
  focus: [
    <span class="code-green">'Web Development'</span>,
    <span class="code-green">'UI/UX Design'</span>,
    <span class="code-green">'Problem Solving'</span>
  ],
  mindset: <span class="code-green">'Always learning'</span>
};</code></pre></div>
            </div>
        </section>

        <section class="section projects-section" id="projects">
            <div class="container">
                <div class="section-heading section-heading-row reveal"><div><p class="eyebrow">02 / SELECTED WORK</p><h2>Projects that make<br><span class="muted-heading">ideas tangible.</span></h2></div><p class="heading-note">Eksperimen, tugas, dan produk digital yang saya bangun sambil terus berkembang.</p></div>
                <div class="project-grid">
                    <article class="project-card project-featured reveal"><div class="project-visual visual-library"><div class="browser-bar"><i></i><i></i><i></i><span>semesta.library</span></div><div class="library-preview"><div class="preview-sidebar"><b>SEMESTA</b><span></span><span></span><span></span></div><div class="preview-main"><small>YOUR NEXT CHAPTER</small><h3>Discover a<br>new world.</h3><div class="book-row"><i></i><i></i><i></i></div></div></div><span class="visual-tag">WEB APP</span></div><div class="project-info"><div><p class="project-type">01 — WEB DEVELOPMENT</p><h3>Perpustakaan SEMESTA</h3><p>Aplikasi katalog perpustakaan dengan pengalaman menjelajah buku dan alur peminjaman yang lebih terstruktur.</p></div><div class="project-bottom"><div class="tag-list"><span>Flutter</span><span>Dart</span><span>UI Design</span></div><a class="project-link" href="#contact" aria-label="Tanyakan proyek Perpustakaan SEMESTA">↗</a></div></div></article>
                    <article class="project-card reveal"><div class="project-visual visual-tourism"><div class="tourism-sun"></div><div class="tourism-hill hill-one"></div><div class="tourism-hill hill-two"></div><div class="tourism-label"><span>DISCOVER LAMPUNG</span><b>Find your<br>next escape.</b></div><span class="visual-tag">MOBILE APP</span></div><div class="project-info"><div><p class="project-type">02 — MOBILE DEVELOPMENT</p><h3>WisataKeluarga</h3><p>Katalog destinasi wisata dengan pencarian lokasi dan detail tempat untuk membantu merencanakan perjalanan.</p></div><div class="project-bottom"><div class="tag-list"><span>Flutter</span><span>REST API</span></div><a class="project-link" href="#contact" aria-label="Tanyakan proyek WisataKeluarga">↗</a></div></div></article>
                    <article class="project-card reveal"><div class="project-visual visual-dashboard"><div class="dashboard-top"><span>OVERVIEW</span><span class="dashboard-avatar">RK</span></div><div class="dashboard-number"><small>MONTHLY ACTIVITY</small><b>Productivity <em>+24%</em></b></div><div class="chart-bars"><i style="--h:36%"></i><i style="--h:54%"></i><i style="--h:43%"></i><i style="--h:76%"></i><i style="--h:61%"></i><i style="--h:91%"></i><i style="--h:70%"></i></div><span class="visual-tag">DASHBOARD</span></div><div class="project-info"><div><p class="project-type">03 — WEB APPLICATION</p><h3>Personal Finance UI</h3><p>Konsep dashboard untuk mencatat pengeluaran, mengelola kategori, dan melihat ringkasan aktivitas.</p></div><div class="project-bottom"><div class="tag-list"><span>Laravel</span><span>PHP</span><span>CSS</span></div><a class="project-link" href="#contact" aria-label="Tanyakan proyek Personal Finance UI">↗</a></div></div></article>
                </div>
                <p class="project-disclaimer">* Proyek ditampilkan sebagai contoh portofolio. Sesuaikan deskripsi, teknologi, dan tautan dengan karya serta repositori asli Anda.</p>
            </div>
        </section>

        <section class="section container skills-section" id="skills">
            <div class="section-heading reveal"><p class="eyebrow">03 / TOOLKIT</p><h2>The tools I use to<br><span class="muted-heading">bring ideas to life.</span></h2></div>
            <div class="skills-layout">
                <div class="skills-copy reveal"><p>Saya membangun fondasi teknis sambil memperhatikan detail desain, aksesibilitas, dan pengalaman pengguna.</p><div class="skill-note"><span class="note-icon">✳</span><span><b>Currently improving</b><small>Laravel · API integration · UX research</small></span></div></div>
                <div class="skill-groups reveal">
                    <div class="skill-group"><h3>DEVELOPMENT</h3><div class="skill-chips"><span><b class="tech-icon php">P</b> PHP</span><span><b class="tech-icon laravel">L</b> Laravel</span><span><b class="tech-icon flutter">◈</b> Flutter</span><span><b class="tech-icon js">JS</b> JavaScript</span><span><b class="tech-icon html">5</b> HTML & CSS</span><span><b class="tech-icon db">▤</b> MySQL</span></div></div>
                    <div class="skill-group"><h3>DESIGN & WORKFLOW</h3><div class="skill-chips"><span><b class="tech-icon figma">F</b> Figma</span><span><b class="tech-icon git">⌘</b> Git & GitHub</span><span><b class="tech-icon api">↔</b> REST API</span><span><b class="tech-icon terminal">$_</b> VS Code</span></div></div>
                </div>
            </div>
        </section>

        <section class="section experience-section" id="experience"><div class="container">
            <div class="section-heading reveal"><p class="eyebrow">04 / THE JOURNEY</p><h2>Learning by<br><span class="muted-heading">building things.</span></h2></div>
            <div class="timeline">
                <article class="timeline-item reveal"><div class="timeline-marker"></div><div class="timeline-date">CURRENT</div><div class="timeline-content"><span class="timeline-type">EDUCATION</span><h3>Informatics Student</h3><p class="timeline-place">University / Informatics Program</p><p>Mempelajari dasar pemrograman, struktur data, basis data, rekayasa perangkat lunak, dan pengembangan aplikasi.</p></div></article>
                <article class="timeline-item reveal"><div class="timeline-marker"></div><div class="timeline-date">PROJECT-BASED</div><div class="timeline-content"><span class="timeline-type">PRACTICE & PROJECTS</span><h3>Independent Developer</h3><p class="timeline-place">Academic & Personal Projects</p><p>Mengembangkan proyek web dan mobile untuk melatih implementasi fitur, debugging, integrasi API, serta penyusunan antarmuka.</p></div></article>
                <article class="timeline-item reveal"><div class="timeline-marker"></div><div class="timeline-date">ONGOING</div><div class="timeline-content"><span class="timeline-type">CONTINUOUS LEARNING</span><h3>Growing the craft</h3><p class="timeline-place">Self-directed learning</p><p>Memperdalam Laravel, praktik clean code, desain responsif, dan cara membangun produk yang mudah digunakan.</p></div></article>
            </div>
            <p class="project-disclaimer">* Ganti nama kampus, periode, dan pengalaman di atas dengan informasi yang benar.</p>
        </div></section>

        <section class="section container contact-section" id="contact">
            <div class="contact-card reveal">
                <div class="contact-orb"></div>

                <div class="contact-content">
                    <p class="eyebrow">05 / LET'S CONNECT</p>

                    <h2>
                        Have a project in mind?
                        <br>
                        <span class="gradient-text">Let's make it happen.</span>
                    </h2>

                    <p>
                        Saya terbuka untuk kolaborasi proyek, kesempatan magang,
                        pengembangan aplikasi, dan diskusi seputar teknologi.
                        Jangan ragu untuk menghubungi saya melalui email.
                    </p>

                    <a class="button button-primary"
                    href="mailto:ricky_sakurniawan@teknokrat.ac.id">
                        <span>✉</span>
                        Hubungi Saya
                        <span>↗</span>
                    </a>

                    <div style="margin-top: 22px;">
                        <p class="eyebrow">EMAIL ADDRESS</p>
                        <a href="mailto:ricky_sakurniawan@teknokrat.ac.id"
                        style="color: inherit; text-decoration: none; overflow-wrap: anywhere;">
                            ricky_sakurniawan@teknokrat.ac.id
                        </a>
                    </div>
                </div>

                <div class="contact-decoration" aria-hidden="true">✳</div>
            </div>

            <div class="contact-form-wrap reveal">
                <div>
                    <p class="eyebrow">SEND A MESSAGE</p>
                    <h3>Let's start a conversation.</h3>
                    <p class="form-caption">
                        Punya pertanyaan, ide, atau peluang kolaborasi?
                        Sampaikan melalui formulir berikut.
                    </p>
                </div>

                @if (session('contact_success'))
                    <div class="form-alert success">
                        {{ session('contact_success') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="form-alert error">
                        Periksa kembali data yang Anda masukkan.
                    </div>
                @endif

                <form class="contact-form"
                    action="{{ route('portfolio.contact') }}"
                    method="POST">
                    @csrf

                    <div class="form-row">
                        <label>
                            Nama lengkap
                            <input name="name"
                                value="{{ old('name') }}"
                                placeholder="Masukkan nama kamu"
                                required
                                maxlength="100">
                            @error('name')
                                <small>{{ $message }}</small>
                            @enderror
                        </label>

                        <label>
                            Alamat email
                            <input name="email"
                                type="email"
                                value="{{ old('email') }}"
                                placeholder="nama@email.com"
                                required>
                            @error('email')
                                <small>{{ $message }}</small>
                            @enderror
                        </label>
                    </div>

                    <label>
                        Subjek
                        <input name="subject"
                            value="{{ old('subject') }}"
                            placeholder="Topik yang ingin dibahas"
                            required
                            maxlength="150">
                        @error('subject')
                            <small>{{ $message }}</small>
                        @enderror
                    </label>

                    <label>
                        Pesan
                        <textarea name="message"
                                rows="4"
                                placeholder="Tuliskan pesan kamu di sini..."
                                required
                                maxlength="3000">{{ old('message') }}</textarea>
                        @error('message')
                            <small>{{ $message }}</small>
                        @enderror
                    </label>

                    <button class="button button-primary submit-button" type="submit">
                        Kirim Pesan <span>↗</span>
                    </button>
                </form>
            </div>
        </section>
    </main>
    <footer class="footer container"><a class="brand" href="#home"><span class="brand-mark">R</span><span>ricky<span class="brand-dot">.</span>dev</span></a><p>Designed & built with curiosity <span>✳</span></p><a href="#top" class="back-top">BACK TO TOP ↑</a><small>© <span id="year"></span> Ricky Kurniawan</small></footer>
</body>
</html>
