<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Portfolio Najwa Amanda Desyari - Mahasiswa Teknik Informatika UNSIQ & Web Developer Pemula">
<meta name="author" content="Najwa Amanda Desyari">
<title>Portfolio Najwa Amanda | Teknik Informatika UNSIQ</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;0,900;1,400&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">

<style>
  :root {
    --cream: #fff0f6;
    --dark: #faf0f8;
    --accent: #e79fb7;
    --accent-dark: #c66788;
    --warm: #d2a77c;
    --warm-light: #f8e4e9;
    --pink: #f6c7d5;
    --text: #4a3526;
    --muted: #856f6b;
    --white: #ffffff;
    --card-bg: #fff4f6;
    --border: #e7d3ce;
  }

  * { box-sizing: border-box; margin: 0; padding: 0; }
  html { scroll-behavior: smooth; }
  body {
    font-family: 'DM Sans', sans-serif;
    background: var(--white);
    color: var(--text);
    line-height: 1.7;
    overflow-x: hidden;
  }

  /* ── SKIP LINK ── */
  .skip-link {
    position: absolute; top: -50px; left: 8px;
    background: var(--accent); color: #fff;
    padding: 10px 18px; border-radius: 6px;
    font-weight: 600; z-index: 9999;
    transition: top .3s;
  }
  .skip-link:focus { top: 8px; }

  /* ── NAVBAR ── */
  nav {
    position: sticky; top: 0; z-index: 500;
    display: flex; align-items: center; justify-content: space-between;
    padding: 0 48px;
    height: 64px;
    background: var(--accent-dark);
    border-bottom: 2px solid var(--accent);
  }

  .nav-brand {
    font-family: 'Playfair Display', serif;
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--white);
    text-decoration: none;
    letter-spacing: .5px;
    flex-shrink: 0;
  }

  /* Nav links rata kanan */
  .nav-center {
    display: flex;
    align-items: center;
    margin-left: auto;
  }

  /* Search icon — oval memanjang di sebelah kanan */
  .nav-search-icon {
    display: flex; align-items: center; justify-content: center;
    width: 50px; height: 34px;
    border-radius: 20px;
    background: rgba(255,255,255,0.12);
    border: 1.5px solid rgba(255,255,255,0.3);
    cursor: pointer;
    margin-left: 12px;
    transition: background .25s, border-color .25s;
    flex-shrink: 0;
  }
  .nav-search-icon:hover { background: rgba(255,255,255,0.25); border-color: rgba(255,255,255,0.6); }
  .nav-search-icon svg { width: 15px; height: 15px; stroke: white; fill: none; stroke-width: 2.2; stroke-linecap: round; stroke-linejoin: round; }

  .nav-links {
    display: flex; list-style: none; gap: 4px; align-items: center;
  }

  .nav-links a {
    color: var(--white);
    text-decoration: none;
    font-size: .88rem;
    font-weight: 500;
    letter-spacing: .5px;
    text-transform: uppercase;
    padding: 8px 14px;
    border-radius: 4px;
    transition: color .25s, background .25s;
  }

  .nav-links a:hover, .nav-links a.active {
    color: var(--white);
    background: rgba(255,255,255,.15);
  }

  /* Search overlay */
  .search-overlay {
    display: none;
    position: fixed; inset: 0;
    background: rgba(0,0,0,0.5);
    z-index: 9000;
    align-items: flex-start; justify-content: center;
    padding-top: 80px;
  }
  .search-overlay.open { display: flex; }
  .search-box {
    background: var(--white);
    border-radius: 12px;
    padding: 20px 24px;
    width: 500px;
    max-width: 90vw;
    max-height: 80vh;
    display: flex;
    flex-direction: column;
    box-shadow: 0 20px 60px rgba(0,0,0,0.2);
  }
  .search-box input {
    width: 100%; border: 2px solid var(--accent);
    border-radius: 8px; padding: 12px 16px;
    font-size: 1rem; font-family: 'DM Sans', sans-serif;
    color: var(--text); outline: none;
  }
  .search-results { margin-top: 12px; display: flex; flex-direction: column; gap: 6px; overflow-y: auto; max-height: calc(80vh - 120px); flex: 1; }
  .search-result-item {
    padding: 10px 14px; border-radius: 8px;
    background: var(--warm-light);
    cursor: pointer; font-size: .9rem; color: var(--text);
    transition: background .2s;
  }
  .search-result-item:hover { background: var(--pink); }
  .search-result-item a { text-decoration: none; color: inherit; display: block; }

  /* 7. Hamburger / three-strip menu on right */
  .hamburger {
    display: flex; flex-direction: column; gap: 5px;
    cursor: pointer; background: none; border: none; padding: 4px;
  }
  .hamburger span {
    width: 24px; height: 2px;
    background: var(--white); border-radius: 2px; transition: .3s;
  }

  .nav-right {
    position: relative;
  }

  .hamburger-dropdown {
    display: none;
    position: absolute;
    top: calc(100% + 12px);
    right: 0;
    background: var(--white);
    border-radius: 12px;
    border: 1px solid var(--border);
    box-shadow: 0 12px 40px rgba(198,103,136,0.18);
    min-width: 200px;
    overflow: hidden;
    z-index: 600;
  }
  .hamburger-dropdown.open { display: block; }
  .dropdown-header {
    background: var(--accent);
    padding: 10px 18px;
    font-size: .75rem;
    letter-spacing: 2px;
    text-transform: uppercase;
    color: var(--white);
    font-weight: 600;
  }
  .dropdown-item {
    display: flex; align-items: center; gap: 12px;
    padding: 13px 18px;
    font-size: .9rem;
    color: var(--text);
    cursor: pointer;
    border-bottom: 1px solid var(--border);
    transition: background .2s;
    text-decoration: none;
  }
  .dropdown-item:last-child { border-bottom: none; }
  .dropdown-item:hover { background: var(--warm-light); }
  .dropdown-item svg { width: 18px; height: 18px; stroke: var(--accent-dark); fill: none; stroke-width: 2; flex-shrink: 0; }
  .dropdown-item.logout { color: #e74c3c; }
  .dropdown-item.logout svg { stroke: #e74c3c; }

  /* Mobile nav links */
  .nav-links-mobile {
    display: none;
    flex-direction: column;
    position: absolute;
    top: 64px; left: 0; right: 0;
    background: var(--dark);
    padding: 16px;
    gap: 4px;
    border-bottom: 2px solid var(--accent);
    list-style: none;
    z-index: 499;
  }
  .nav-links-mobile.open { display: flex; }
  .nav-links-mobile a {
    color: var(--text);
    text-decoration: none;
    font-size: .9rem;
    font-weight: 500;
    padding: 8px 14px;
    border-radius: 4px;
    transition: background .25s;
  }
  .nav-links-mobile a:hover { background: var(--warm-light); }
  .mobile-hamburger { display: none; flex-direction: column; gap: 5px; cursor: pointer; background: none; border: none; padding: 4px; }
  .mobile-hamburger span { width: 24px; height: 2px; background: var(--white); border-radius: 2px; }

  /* ── SECTIONS ── */
  section {
    min-height: 100vh;
    display: flex; flex-direction: column; align-items: center; justify-content: center;
    padding: 100px 48px;
  }

  .section-label {
    font-size: .75rem;
    letter-spacing: 3px;
    text-transform: uppercase;
    color: var(--accent);
    font-weight: 600;
    margin-bottom: 12px;
  }

  .section-title {
    font-family: 'Playfair Display', serif;
    font-size: clamp(2.5rem, 6vw, 4.5rem);
    font-weight: 900;
    line-height: 1.1;
    color: var(--accent-dark);
  }

  .section-title.light { color: var(--white); }

  .divider {
    width: 60px; height: 3px;
    background: var(--accent);
    border-radius: 2px;
    margin: 20px auto 40px;
  }

  /* ── HOME ── */
  #home {
    background: var(--accent);
    position: relative;
    overflow: hidden;
    flex-direction: row;
    gap: 60px;
    text-align: left;
    padding: 100px 8%;
  }

  .home-text { flex: 1; z-index: 1; }

  .home-text .greeting {
    font-family: 'DM Sans', sans-serif;
    font-size: 1.1rem;
    font-weight: 400;
    color: var(--white);
    letter-spacing: 1px;
    margin-bottom: 10px;
  }

  .home-text h1 {
    font-family: 'Playfair Display', serif;
    font-size: clamp(3rem, 7vw, 5.5rem);
    font-weight: 900;
    color: var(--white);
    line-height: 1.05;
    margin-bottom: 20px;
  }

  .home-text .subtitle {
    font-size: 1.1rem;
    color: var(--white);
    font-weight: 300;
    margin-bottom: 36px;
    max-width: 480px;
  }

  .home-cta-group {
    display: flex; flex-wrap: wrap; gap: 14px; align-items: center;
  }

  .home-cta {
    display: inline-flex; align-items: center; gap: 10px;
    background: rgba(255,255,255,0.18);
    color: #fff;
    text-decoration: none;
    font-weight: 600;
    font-size: .9rem;
    letter-spacing: .5px;
    padding: 13px 30px;
    border-radius: 50px;
    border: 2px solid rgba(255,255,255,0.85);
    box-shadow: 0 0 0 3px rgba(255,255,255,0.12), inset 0 1px 0 rgba(255,255,255,0.25);
    transition: background .25s, transform .25s, box-shadow .25s;
    backdrop-filter: blur(4px);
  }
  .home-cta:hover {
    background: rgba(255,255,255,0.28);
    transform: translateY(-2px);
    box-shadow: 0 0 0 4px rgba(255,255,255,0.2), 0 8px 24px rgba(0,0,0,0.12);
  }

  .github-pill {
    display: inline-flex; align-items: center; gap: 8px;
    background: rgba(255,255,255,0.1);
    border: 2px solid rgba(255,255,255,0.75);
    box-shadow: 0 0 0 3px rgba(255,255,255,0.1);
    color: #fff;
    text-decoration: none;
    font-size: .82rem;
    font-weight: 500;
    padding: 11px 20px;
    border-radius: 50px;
    transition: background .25s, box-shadow .25s, transform .25s;
    backdrop-filter: blur(4px);
  }
  .github-pill:hover {
    background: rgba(255,255,255,0.22);
    transform: translateY(-2px);
    box-shadow: 0 0 0 4px rgba(255,255,255,0.18), 0 8px 20px rgba(0,0,0,0.1);
  }

  .home-image {
    flex-shrink: 0;
    width: 340px; height: 420px;
    border-radius: 20px;
    overflow: hidden;
    border: 3px solid rgba(255,255,255,0.5);
    box-shadow: 0 30px 80px rgba(198,103,136,0.25);
    background: var(--card-bg);
    z-index: 1;
    position: relative;
  }

  .home-image img {
    width: 100%; height: 100%; object-fit: cover; object-position: top;
  }

  .home-image-placeholder {
    width: 100%; height: 100%;
    display: flex; flex-direction: column;
    align-items: center; justify-content: center;
    color: rgba(255,255,255,0.6);
    font-size: .85rem;
    gap: 8px;
    background: linear-gradient(135deg, rgba(255,255,255,0.15), rgba(255,255,255,0.05));
  }

  /* ── ABOUT ── */
  #about {
    background: var(--white);
    text-align: center;
  }

  .about-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 48px;
    max-width: 900px;
    margin-top: 48px;
    text-align: left;
  }

  .about-photo {
    width: 100%; max-width: 320px;
    aspect-ratio: 3/4;
    border-radius: 16px;
    overflow: hidden;
    border: 3px solid var(--border);
    box-shadow: 8px 8px 0 var(--warm-light);
    background: #ddd;
    margin: 0 auto;
    position: relative;
  }

  .about-photo img {
    width: 100%; height: 100%; object-fit: cover; object-position: top;
  }

  .about-photo-placeholder {
    width: 100%; height: 100%;
    display: flex; flex-direction: column;
    align-items: center; justify-content: center;
    background: linear-gradient(135deg, #f8e4e9, #e8d0d5);
    color: #b07080;
    font-size: .85rem;
    gap: 10px;
  }

  .about-photo-label {
    display: inline-block;
    background: var(--accent);
    color: white;
    font-size: .72rem;
    letter-spacing: 1px;
    padding: 4px 12px;
    border-radius: 20px;
    margin-top: 6px;
  }

  .about-info { display: flex; flex-direction: column; justify-content: center; gap: 20px; }

  .about-info p {
    font-size: 1rem;
    color: var(--muted);
    line-height: 1.8;
    margin-bottom: 20px;
  }

  .info-item {
    display: flex; align-items: flex-start; gap: 14px;
    padding: 14px 18px;
    background: var(--white);
    border-radius: 12px;
    border: 1px solid var(--border);
    box-shadow: 0 2px 8px rgba(0,0,0,.04);
  }

  .info-icon { font-size: 1.4rem; flex-shrink: 0; margin-top: 2px; }
  .info-label { font-size: .72rem; letter-spacing: 1.5px; text-transform: uppercase; color: var(--accent); font-weight: 600; }
  .info-value { font-size: .95rem; font-weight: 500; color: var(--text); margin-top: 2px; }

  /* ── WHAT I DO NOW ── */
  #whatido {
    background: var(--accent);
    text-align: left;
    flex-direction: row;
    padding: 100px 8%;
    gap: 60px;
  }

  .whatido-screen {
    flex-shrink: 0;
    width: 460px;
    background: #1e1e2e;
    border-radius: 16px;
    overflow: hidden;
    border: 1px solid rgba(255,255,255,0.1);
    box-shadow: 0 20px 60px rgba(0,0,0,0.3);
  }

  .screen-bar {
    background: #2d2d3f;
    padding: 10px 16px;
    display: flex; align-items: center; gap: 6px;
    border-bottom: 1px solid rgba(255,255,255,0.08);
  }

  .dot { width: 10px; height: 10px; border-radius: 50%; }
  .dot-r { background: #ff5f57; }
  .dot-y { background: #febc2e; }
  .dot-g { background: #28c840; }

  .screen-bar-label {
    margin-left: 10px;
    font-size: .72rem;
    color: #a0aec0;
    font-family: 'Consolas', monospace;
    letter-spacing: .3px;
  }

  .screen-content {
    padding: 20px;
    display: flex; flex-direction: column; gap: 10px;
  }

  .screen-row {
    background: #252538;
    border-radius: 8px;
    padding: 12px 14px;
    font-size: .82rem;
    color: #e2e8f0;
    border-left: 3px solid #c586c0;
  }

  .screen-row .label {
    color: #9f7aea;
    font-size: .68rem;
    text-transform: uppercase;
    letter-spacing: 1.2px;
    margin-bottom: 4px;
    font-weight: 600;
    font-family: 'Consolas', monospace;
  }

  .screen-row .val { color: #e2e8f0; }
  .screen-row .val-active { color: #48bb78; font-weight: 600; }
  .screen-row .val-code { color: #f6ad55; font-family: 'Consolas', monospace; font-size: .8rem; }
  .screen-row .val-blue { color: #63b3ed; }

  .whatido-text { flex: 1; }

  .whatido-text h2 {
    font-family: 'Playfair Display', serif;
    font-size: clamp(2rem, 4vw, 3.2rem);
    font-weight: 900;
    color: var(--white);
    margin-bottom: 24px;
    line-height: 1.1;
  }

  .whatido-text p {
    color: var(--white);
    font-size: 1rem;
    margin-bottom: 28px;
    line-height: 1.8;
  }

  .task-list { list-style: none; display: flex; flex-direction: column; gap: 12px; }

  .task-list li {
    display: flex; align-items: flex-start; gap: 14px;
    padding: 14px 18px;
    background: rgba(255,255,255,.12);
    border-radius: 10px;
    border: 1px solid rgba(255,255,255,.22);
    color: var(--white);
    font-size: .92rem;
    transition: background .25s, border-color .25s;
  }

  .task-list li:hover {
    background: rgba(255,255,255,.18);
    border-color: rgba(255,255,255,.35);
  }

  .task-num {
    font-family: 'Playfair Display', serif;
    font-weight: 700;
    color: #fff;
    background: rgba(255,255,255,0.22);
    width: 28px; height: 28px;
    border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    flex-shrink: 0;
    font-size: .85rem;
  }

  /* ── PROJECT ── */
  #project {
    background: var(--white);
    text-align: center;
  }

  .timeline-wrapper {
    display: flex;
    gap: 0;
    max-width: 1100px;
    width: 100%;
    margin-top: 60px;
    position: relative;
  }

  .timeline-wrapper::before {
    content: '';
    position: absolute;
    top: 48px;
    left: 80px; right: 80px;
    height: 2px;
    background: linear-gradient(to right, var(--accent), var(--warm), var(--accent));
    z-index: 0;
  }

  .timeline-item {
    flex: 1;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 16px;
    position: relative;
    padding: 0 12px;
  }

  .timeline-year {
    background: var(--accent);
    color: var(--white);
    font-family: 'Playfair Display', serif;
    font-size: 1rem;
    font-weight: 700;
    padding: 6px 16px;
    border-radius: 20px;
    z-index: 1;
    box-shadow: 0 4px 12px rgba(231,159,183,.35);
  }

  .timeline-dot {
    width: 14px; height: 14px;
    background: var(--accent);
    border-radius: 50%;
    border: 3px solid var(--cream);
    z-index: 1;
  }

  .timeline-card {
    background: var(--white);
    border-radius: 14px;
    overflow: hidden;
    border: 1px solid var(--border);
    box-shadow: 0 6px 24px rgba(0,0,0,.06);
    width: 100%;
    transition: transform .3s, box-shadow .3s;
  }

  .timeline-card:hover { transform: translateY(-6px); box-shadow: 0 16px 40px rgba(0,0,0,.12); }

  .timeline-card-img {
    width: 100%;
    height: 120px;
    background: linear-gradient(135deg, var(--warm-light), var(--cream));
    display: flex; align-items: center; justify-content: center;
    font-size: 2.8rem;
    overflow: hidden;
  }

  .timeline-card-img img {
    width: 100%; height: 100%; object-fit: cover;
  }

  .timeline-card-body { padding: 16px; text-align: left; }

  .timeline-card-body h4 {
    font-family: 'Playfair Display', serif;
    font-size: 1rem;
    font-weight: 700;
    color: var(--text);
    margin-bottom: 6px;
  }

  .timeline-card-body p {
    font-size: .82rem;
    color: var(--muted);
    line-height: 1.6;
  }

  /* ── SKILL ── */
  #skill {
    background: var(--accent);
    text-align: center;
    position: relative;
    overflow: hidden;
  }

  #skill::before {
    content: '';
    position: absolute;
    top: -80px; right: -80px;
    width: 300px; height: 300px;
    border-radius: 50%;
    background: rgba(255,255,255,0.08);
    pointer-events: none;
  }
  #skill::after {
    content: '';
    position: absolute;
    bottom: -60px; left: -60px;
    width: 240px; height: 240px;
    border-radius: 50%;
    background: rgba(255,255,255,0.06);
    pointer-events: none;
  }

  #skill .section-label {
    color: rgba(255,255,255,0.85);
    letter-spacing: 4px;
  }

  #skill .section-title {
    color: var(--white);
    text-shadow: 0 2px 20px rgba(198,103,136,0.3);
  }

  #skill .divider {
    background: rgba(255,255,255,0.6);
  }

  .skill-subtitle {
    color: rgba(255,255,255,0.8);
    font-size: .95rem;
    max-width: 500px;
    margin: -20px auto 0;
    line-height: 1.7;
  }

  .skill-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    max-width: 820px;
    width: 100%;
    margin-top: 40px;
    position: relative;
    z-index: 1;
  }

  .skill-card {
    background: var(--white);
    border: 2px solid rgba(255,255,255,0.3);
    border-radius: 20px;
    padding: 32px 20px 24px;
    text-align: center;
    transition: transform .3s, box-shadow .3s, border-color .3s;
    cursor: default;
    position: relative;
    overflow: hidden;
  }

  .skill-card::before {
    content: '';
    position: absolute;
    top: -16px; right: -16px;
    width: 60px; height: 60px;
    border-radius: 50%;
    background: var(--warm-light);
    opacity: 0.6;
    transition: transform .3s;
  }

  .skill-card::after {
    content: '';
    position: absolute;
    bottom: 0; left: 0; right: 0;
    height: 4px;
    background: linear-gradient(to right, var(--accent), var(--warm));
    transform: scaleX(0);
    transition: transform .3s;
  }

  .skill-card:hover { transform: translateY(-10px); box-shadow: 0 24px 48px rgba(0,0,0,0.15); border-color: var(--accent-dark); }
  .skill-card:hover::after { transform: scaleX(1); }
  .skill-card:hover::before { transform: scale(1.3); }

  .skill-icon {
    width: 80px; height: 80px;
    margin: 0 auto 16px;
    display: flex; align-items: center; justify-content: center;
    background: var(--warm-light);
    border-radius: 50%;
    position: relative;
    z-index: 1;
  }

  .skill-icon img { width: 44px; height: 44px; object-fit: contain; }

  .skill-name {
    font-family: 'Playfair Display', serif;
    font-size: 1.05rem;
    font-weight: 700;
    color: var(--text);
    margin-bottom: 6px;
    position: relative; z-index: 1;
  }

  .skill-badge {
    display: inline-block;
    font-size: .68rem;
    letter-spacing: 1px;
    text-transform: uppercase;
    padding: 3px 10px;
    border-radius: 20px;
    font-weight: 600;
    position: relative; z-index: 1;
  }
  .badge-beginner { background: var(--warm-light); color: var(--warm); }
  .badge-inter { background: #fce8f3; color: var(--accent-dark); }
  .badge-active { background: #e8f5e9; color: #2e7d32; }

  .skill-dots {
    display: flex; gap: 4px; justify-content: center; margin-top: 8px;
    position: relative; z-index: 1;
  }
  .skill-dot {
    width: 7px; height: 7px; border-radius: 50%;
    background: var(--border);
    transition: background .3s;
  }
  .skill-dot.filled { background: var(--accent-dark); }

  /* ── CERTIFIKAT ── */
  #certifikat {
    background: var(--white);
    text-align: center;
  }

  .cert-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
    max-width: 1000px;
    width: 100%;
    margin-top: 48px;
  }

  .cert-card {
    background: #fdf8f0;
    border: 2px solid var(--warm-light);
    border-radius: 14px;
    overflow: hidden;
    transition: transform .3s, box-shadow .3s;
    display: flex; flex-direction: column;
  }

  .cert-card:hover { transform: translateY(-6px); box-shadow: 0 16px 40px rgba(0,0,0,.1); }

  .cert-img {
    width: 100%;
    height: 160px;
    background: linear-gradient(135deg, #f9f4ea, #ede5d5);
    display: flex; align-items: center; justify-content: center;
    font-size: 3rem;
    overflow: hidden;
  }

  .cert-img img { width: 100%; height: 100%; object-fit: cover; }

  .cert-btn {
    display: block;
    background: #c66788;
    color: var(--white);
    font-size: .85rem;
    font-weight: 600;
    letter-spacing: .5px;
    text-align: center;
    padding: 12px;
    text-decoration: none;
    transition: background .25s;
    border: none; cursor: pointer;
  }

  .cert-btn:hover { background: #a5496e; }

  /* ── CONTACT ── */
  #contact {
    background: var(--accent-dark);
    text-align: center;
    flex-direction: column;
    align-items: center;
  }

  /* Judul section Contact */
  #contact .section-label { color: #ffffff; opacity: .85; letter-spacing: 4px; }
  #contact .section-title { color: #ffffff; }
  #contact .divider { background: rgba(255,255,255,0.7); }

  .contact-wrapper {
    display: grid;
    grid-template-columns: 1fr 1.2fr;
    gap: 48px;
    max-width: 900px;
    width: 100%;
    margin-top: 48px;
    text-align: left;
  }

  .contact-info { display: flex; flex-direction: column; gap: 16px; }

  .contact-info h3 {
    font-family: 'Playfair Display', serif;
    font-size: 1.6rem;
    font-weight: 700;
    color: #ffffff;
    margin-bottom: 8px;
  }

  .contact-item {
    display: flex; align-items: center; gap: 14px;
    padding: 14px 18px;
    background: rgba(255,255,255,.22);
    border-radius: 12px;
    border: 2px solid rgba(255,255,255,.7);
    text-decoration: none;
    color: #ffffff;
    transition: border-color .25s, box-shadow .25s, background .25s;
  }

  .contact-item:hover {
    background: rgba(255,255,255,.32);
    border-color: #ffffff;
    box-shadow: 0 4px 20px rgba(255,255,255,.2);
  }
  .contact-item-icon { font-size: 1.3rem; flex-shrink: 0; }
  .contact-item-label {
    font-size: .7rem; letter-spacing: 1px; text-transform: uppercase;
    color: #ffffff; font-weight: 700; opacity: 1;
  }
  .contact-item-val {
    font-size: .9rem; color: #ffffff; font-weight: 600;
    margin-top: 2px; word-break: break-all;
  }

  .contact-form { display: flex; flex-direction: column; gap: 0; }

  .contact-form h3 {
    font-family: 'Playfair Display', serif;
    font-size: 1.6rem;
    font-weight: 700;
    color: #ffffff;
    margin-bottom: 20px;
    text-shadow: 0 1px 6px rgba(0,0,0,0.15);
  }

  .form-group { margin-bottom: 16px; }

  .form-group label {
    display: block;
    font-size: .78rem;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    font-weight: 700;
    color: #ffffff;
    margin-bottom: 8px;
  }

  .form-group input,
  .form-group textarea {
    width: 100%;
    padding: 13px 16px;
    border: 2px solid #ffffff;
    border-radius: 10px;
    font-family: 'DM Sans', sans-serif;
    font-size: .95rem;
    background: rgba(255,255,255,.22);
    color: #ffffff;
    transition: border-color .25s, box-shadow .25s, background .25s;
    outline: none;
  }

  .form-group input::placeholder,
  .form-group textarea::placeholder {
    color: rgba(255,255,255,.65);
    font-weight: 400;
  }

  .form-group input:focus,
  .form-group textarea:focus {
    border-color: #ffffff;
    background: rgba(255,255,255,.30);
    box-shadow: 0 0 0 4px rgba(255,255,255,.2);
  }

  .form-group textarea { resize: vertical; min-height: 110px; }

  .submit-btn {
    background: var(--white);
    color: var(--accent);
    border: none;
    padding: 14px 36px;
    border-radius: 40px;
    font-family: 'DM Sans', sans-serif;
    font-size: .95rem;
    font-weight: 600;
    cursor: pointer;
    transition: background .25s, transform .25s;
    align-self: flex-start;
    margin-top: 4px;
  }

  .submit-btn:hover { background: rgba(255,255,255,.9); transform: translateY(-2px); }

  #form-status { margin-top: 14px; font-size: .9rem; font-weight: 600; color: #ffffff; min-height: 20px; }

  /* ── THANK YOU ── */
  #thankyou {
    background: var(--white);
    text-align: center;
    min-height: 50vh;
    position: relative;
    overflow: hidden;
  }

  .thankyou-inner { z-index: 1; }

  .thankyou-inner h2 {
    font-family: 'Playfair Display', serif;
    font-size: clamp(3rem, 8vw, 7rem);
    font-weight: 900;
    color: var(--accent-dark);
    line-height: 1;
    margin-bottom: 24px;
  }

  .thankyou-inner p {
    font-size: 1rem;
    color: var(--text);
    max-width: 400px;
    margin: 0 auto 32px;
  }

  .social-links { display: flex; gap: 14px; justify-content: center; }

  .social-link {
    display: inline-flex; align-items: center; gap: 8px;
    background: rgba(255,255,255,.06);
    border: 1px solid rgba(255,255,255,.12);
    color: var(--text);
    text-decoration: none;
    padding: 10px 20px;
    border-radius: 40px;
    font-size: .85rem;
    transition: background .25s, color .25s;
  }
  .social-link:hover { background: var(--accent); color: #fff; border-color: var(--accent); }

  /* ── FOOTER ── */
  footer {
    background: var(--card-bg);
    color: var(--text);
    text-align: center;
    padding: 20px;
    font-size: .8rem;
  }

  footer span { color: var(--accent); }

  /* ── SCROLL ANIMATIONS ── */
  .reveal {
    opacity: 0;
    transform: translateY(40px);
    transition: opacity .7s ease, transform .7s ease;
  }
  .reveal.visible { opacity: 1; transform: none; }

  /* ── MODAL for info ── */
  .modal-overlay {
    display: none;
    position: fixed; inset: 0;
    background: rgba(0,0,0,0.5);
    z-index: 9000;
    align-items: center; justify-content: center;
  }
  .modal-overlay.open { display: flex; }
  .modal-box {
    background: var(--white);
    border-radius: 16px;
    padding: 32px 36px;
    max-width: 420px; width: 90%;
    box-shadow: 0 20px 60px rgba(0,0,0,0.2);
  }
  .modal-box h3 {
    font-family: 'Playfair Display', serif;
    font-size: 1.4rem;
    color: var(--accent-dark);
    margin-bottom: 16px;
  }
  .modal-box p { color: var(--muted); line-height: 1.7; font-size: .95rem; }
  .modal-close {
    margin-top: 20px;
    background: var(--accent);
    color: white;
    border: none;
    padding: 10px 24px;
    border-radius: 40px;
    cursor: pointer;
    font-family: 'DM Sans', sans-serif;
    font-weight: 600;
  }
  .modal-close:hover { background: var(--accent-dark); }

  /* ── RESPONSIVE ── */
  @media (max-width: 1000px) {
    #home { flex-direction: column; text-align: center; padding: 80px 24px; }
    .home-text .subtitle { margin: 0 auto 36px; }
    .home-image { width: 280px; height: 340px; }
    .home-cta-group { justify-content: center; }
    .about-grid { grid-template-columns: 1fr; }
    #whatido { flex-direction: column; padding: 80px 24px; }
    .whatido-screen { width: 100%; }
    .timeline-wrapper { flex-direction: column; }
    .timeline-wrapper::before { display: none; }
    .cert-grid { grid-template-columns: repeat(2, 1fr); }
    .skill-grid { grid-template-columns: repeat(2, 1fr); }
    .contact-wrapper { grid-template-columns: 1fr; }
  }

  @media (max-width: 640px) {
    nav { padding: 0 20px; }
    .nav-center { display: none; }
    .mobile-hamburger { display: flex; }
    section { padding: 80px 20px; }
    .cert-grid { grid-template-columns: 1fr 1fr; }
    .skill-grid { grid-template-columns: repeat(2, 1fr); }
  }
</style>
</head>

<body>
<a href="#main-content" class="skip-link">Skip to main content</a>

<!-- ── NAVBAR ── -->
<nav role="navigation" aria-label="Main navigation">
  <!-- Brand kiri -->
  <a href="#home" class="nav-brand">Najwa Amanda ♡</a>

  <!-- Nav links rata kanan — What I Do dihapus -->
  <div class="nav-center">
    <!-- Search icon oval memanjang — diletakkan dekat About -->
    <div class="nav-search-icon" onclick="toggleSearch()" title="Cari section" role="button" tabindex="0" aria-label="Buka pencarian">
      <svg viewBox="0 0 24 24">
        <circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/>
      </svg>
    </div>

    <ul class="nav-links" role="menubar">
      <li><a href="#about" class="nav-link">About</a></li>
      <li><a href="#project" class="nav-link">Project</a></li>
      <li><a href="#skill" class="nav-link">Skill</a></li>
      <li><a href="#certifikat" class="nav-link">Certifikat</a></li>
      <li><a href="#contact" class="nav-link">Contact</a></li>
    </ul>
  </div>

  <!-- Three-strip hamburger -->
  <div class="nav-right">
    <button class="hamburger" aria-label="Menu" onclick="toggleDropdown()">
      <span></span><span></span><span></span>
    </button>

    <div class="hamburger-dropdown" id="hamburgerDropdown">
      <div class="dropdown-header">Menu</div>

      <!-- Search -->
      <div class="dropdown-item" onclick="toggleSearch(); closeDropdown()">
        <svg viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
          <circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/>
        </svg>
        Search
      </div>

      <!-- Info -->
      <div class="dropdown-item" onclick="openInfoModal(); closeDropdown()">
        <svg viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
          <circle cx="12" cy="12" r="10"/>
          <line x1="12" y1="8" x2="12" y2="12"/>
          <line x1="12" y1="16" x2="12.01" y2="16"/>
        </svg>
        Info
      </div>

      <!-- Logout -->
      <div class="dropdown-item logout" onclick="alert('Logout berhasil! Sampai jumpa, Najwa 👋'); closeDropdown()">
        <svg viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
          <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/>
          <polyline points="16 17 21 12 16 7"/>
          <line x1="21" y1="12" x2="9" y2="12"/>
        </svg>
        Logout
      </div>
    </div>
  </div>

  <!-- Mobile hamburger -->
  <button class="mobile-hamburger" aria-label="Mobile menu" onclick="document.getElementById('mobileNav').classList.toggle('open')" style="display:none">
    <span></span><span></span><span></span>
  </button>
</nav>

<!-- Mobile nav links -->
<ul class="nav-links-mobile" id="mobileNav">
  <li><a href="#home" onclick="closeMobileNav()">Home</a></li>
  <li><a href="#about" onclick="closeMobileNav()">About</a></li>
  <li><a href="#whatido" onclick="closeMobileNav()">What I Do</a></li>
  <li><a href="#project" onclick="closeMobileNav()">Project</a></li>
  <li><a href="#skill" onclick="closeMobileNav()">Skill</a></li>
  <li><a href="#certifikat" onclick="closeMobileNav()">Certifikat</a></li>
  <li><a href="#contact" onclick="closeMobileNav()">Contact</a></li>
</ul>

<!-- Search overlay -->
<div class="search-overlay" id="searchOverlay" onclick="closeSearch(event)">
  <div class="search-box" onclick="event.stopPropagation()">
    <input type="text" id="searchInput" placeholder="Cari section... (e.g. skill, contact, about)" oninput="doSearch(this.value)" onkeydown="if(event.key==='Escape')closeSearch()">
    <div class="search-results" id="searchResults"></div>
  </div>
</div>

<!-- Info Modal -->
<div class="modal-overlay" id="infoModal" onclick="closeInfoModal(event)">
  <div class="modal-box" onclick="event.stopPropagation()">
    <h3>ℹ️ Info Portfolio</h3>
    <p>
      Portfolio ini dibuat oleh <strong>Najwa Amanda Desyari</strong>, mahasiswa S1 Teknik Informatika UNSIQ Wonosobo (NIM: 2024150111).<br><br>
      Dibangun menggunakan <strong>HTML, CSS, dan JavaScript</strong> murni. Berisi informasi tentang riwayat kegiatan, skill, sertifikat, dan kontak.<br><br>
      Untuk kolaborasi atau informasi lebih lanjut, silakan hubungi melalui form di section <em>Contact</em>.
    </p>
    <button class="modal-close" onclick="closeInfoModal()">Tutup</button>
  </div>
</div>

<main id="main-content">

  <!-- ══════════ HOME ══════════ -->
  <section id="home">
    <div class="home-text reveal">
      <p class="greeting">Hallo, Saya 👋</p>
      <h1>Najwa Amanda<br>Desyari</h1>
      <p class="subtitle">Mahasiswa Teknik Informatika &nbsp;|&nbsp; Web Developer Pemula</p>

      <div class="home-cta-group">
        <a href="#contact" class="home-cta">Hubungi Saya</a>
        <a href="https://github.com/najwaamandadesyari-dot" target="_blank" class="github-pill">
          <svg width="15" height="15" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0 0 24 12c0-6.63-5.37-12-12-12z"/></svg>
          GitHub
        </a>
      </div>
    </div>

    <div class="home-image reveal" style="transition-delay:.2s">
      <img src="../Assets/img/home.jpg" alt="Foto Najwa Amanda">
    </div>
  </section>

  <!-- ══════════ ABOUT ══════════ -->
  <section id="about">
    <div class="reveal">
      <p class="section-label">Tentang Saya</p>
      <h2 class="section-title">About Me</h2>
      <div class="divider"></div>
    </div>

    <div class="about-grid">
      <div class="about-photo reveal">
        <img src="../Assets/img/about.jpg" alt="Foto Formal Najwa">
      </div>

      <div class="about-info reveal" style="transition-delay:.15s">
        <p>Mahasiswa Teknik Informatika yang memiliki minat di bidang web development dan pengembangan aplikasi. Aktif dalam kegiatan sosial dan pengembangan diri, serta memiliki semangat untuk terus belajar dan berkembang.</p>

        <div class="info-item">
          <div class="info-icon">👤</div>
          <div>
            <div class="info-label">Nama Lengkap</div>
            <div class="info-value">Najwa Amanda Desyari</div>
          </div>
        </div>

        <div class="info-item">
          <div class="info-icon">🎓</div>
          <div>
            <div class="info-label">Universitas & NIM</div>
            <div class="info-value">Universitas Sains Al Quran (UNSIQ) &nbsp;·&nbsp; 2024150111</div>
          </div>
        </div>

        <div class="info-item">
          <div class="info-icon">💻</div>
          <div>
            <div class="info-label">Program Studi</div>
            <div class="info-value">S1 Teknik Informatika</div>
          </div>
        </div>

        <div class="info-item">
          <div class="info-icon">📞</div>
          <div>
            <div class="info-label">Telepon</div>
            <div class="info-value">089687867067</div>
          </div>
        </div>

        <div class="info-item">
          <div class="info-icon">📍</div>
          <div>
            <div class="info-label">Alamat</div>
            <div class="info-value">Sapuran, Wonosobo, Jawa Tengah</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ══════════ WHAT I DO NOW ══════════ -->
  <section id="whatido">
    <div class="whatido-screen reveal" style="transition-delay:.1s">
      <div class="screen-bar">
        <div class="dot dot-r"></div>
        <div class="dot dot-y"></div>
        <div class="dot dot-g"></div>
        <span class="screen-bar-label">ADM Creation Model – Apple Tools Annotator</span>
      </div>
      <div class="screen-content">
        <div class="screen-row">
          <div class="label">User Prompt</div>
          <div class="val val-code">Persembahan Orkestra Nobat Diraja semasa istiadat diraja.</div>
        </div>
        <div class="screen-row">
          <div class="label">Target Style</div>
          <div class="val val-blue">Photorealism</div>
        </div>
        <div class="screen-row">
          <div class="label">Task</div>
          <div class="val">Evaluate AI Response Quality</div>
        </div>
        <div class="screen-row">
          <div class="label">Action</div>
          <div class="val" style="color:#f6ad55;">Annotate &amp; Submit Review ✓</div>
        </div>
        <div class="screen-row">
          <div class="label">Status</div>
          <div class="val val-active">● Active — February 2026 – Present</div>
        </div>
      </div>
    </div>

    <div class="whatido-text reveal" style="transition-delay:.2s">
      <p class="section-label" style="color:rgba(255,255,255,0.85)">Aktivitas Terkini</p>
      <h2>What I Do Now?</h2>
      <p>Dari bulan Februari 2026, kegiatan baru yang saya lakukan adalah menjadi <strong style="color:#fff">Annotator Apple Tools</strong> — dimana saya berperan sebagai korektor AI dalam mengevaluasi jawaban terhadap pertanyaan user.</p>

      <ul class="task-list">
        <li><span class="task-num">1</span> Mengoreksi beberapa respon yang berbeda dalam satu pertanyaan.</li>
        <li><span class="task-num">2</span> Memblokir pertanyaan yang dinilai tidak aman.</li>
        <li><span class="task-num">3</span> Mencari celah dari sebuah response yang diberikan AI.</li>
        <li><span class="task-num">4</span> Membandingkan mana response yang paling benar menurut guideline.</li>
        <li><span class="task-num">5</span> Mencari celah dari suatu response yang diberikan AI.</li>
        <li><span class="task-num">6</span> Memberikan masukan dari respon AI yang salah.</li>
      </ul>
    </div>
  </section>

  <!-- ══════════ PROJECT & ACTIVITY ══════════ -->
  <section id="project">
    <div class="reveal">
      <p class="section-label">Riwayat Kegiatan</p>
      <h2 class="section-title">Project &amp; Activity</h2>
      <div class="divider"></div>
    </div>

    <div class="timeline-wrapper reveal" style="transition-delay:.15s">

      <div class="timeline-item">
        <div class="timeline-year">2023</div>
        <div class="timeline-dot"></div>
        <div class="timeline-card">
          <div class="timeline-card-img">
            <img src="../Assets/img/project1.jpg" alt="BEMKO KIR Daur Ulang">
          </div>
          <div class="timeline-card-body">
            <h4>BEMKO – KIR Daur Ulang</h4>
            <p>Program KIR pemanfaatan sampah kertas di sekolah, dimana disulap menjadi bibit siap tanam.</p>
          </div>
        </div>
      </div>

      <div class="timeline-item">
        <div class="timeline-year">2024</div>
        <div class="timeline-dot"></div>
        <div class="timeline-card">
          <div class="timeline-card-img">
            <img src="../Assets/img/project3.jpg" alt="KAPA Program">
          </div>
          <div class="timeline-card-body">
            <h4>KAPA</h4>
            <p>Program antisipasi anti narkoba di kalangan anak sekolah guna mengantisipasi kegiatan melawan hukum di lingkungan remaja Wonosobo.</p>
          </div>
        </div>
      </div>

      <div class="timeline-item">
        <div class="timeline-year">2025</div>
        <div class="timeline-dot"></div>
        <div class="timeline-card">
          <div class="timeline-card-img">
            <img src="../Assets/img/project2.jpg" alt="FGD Remaja">
          </div>
          <div class="timeline-card-body">
            <h4>FGD</h4>
            <p>Program yang terdiri atas 3 pertemuan, dimana fokus utama adalah bagaimana generasi muda memberikan tanggapan terhadap isu teknologi zaman ini.</p>
          </div>
        </div>
      </div>

      <div class="timeline-item">
        <div class="timeline-year">2025</div>
        <div class="timeline-dot"></div>
        <div class="timeline-card">
          <div class="timeline-card-img">
            <img src="../Assets/img/project4.jpg" alt="Aplikasi Belajar Membaca">
          </div>
          <div class="timeline-card-body">
            <h4>Aplikasi Belajar Membaca</h4>
            <p>Proyek tugas kelompok rancangan aplikasi interaktif belajar membaca untuk anak usia dini.</p>
          </div>
        </div>
      </div>

      <div class="timeline-item">
        <div class="timeline-year">2026</div>
        <div class="timeline-dot"></div>
        <div class="timeline-card">
          <div class="timeline-card-img">
            <img src="../Assets/img/project5.jpg" alt="Annotator Apple Tools">
          </div>
          <div class="timeline-card-body">
            <h4>Annotator Apple Tools</h4>
            <p>Menjadi korektor AI dalam mengevaluasi respon AI terhadap pertanyaan user. Aktif Februari 2026 – Sekarang.</p>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- ══════════ SKILL ══════════ -->
  <section id="skill">
    <div class="reveal" style="text-align:center">
      <p class="section-label">Kemampuan</p>
      <h2 class="section-title">Skill &amp; Tools</h2>
      <div class="divider"></div>
      <p class="skill-subtitle">Teknologi dan kemampuan yang terus saya kembangkan setiap harinya.</p>
    </div>

    <div class="skill-grid reveal" style="transition-delay:.15s">

      <div class="skill-card">
        <div class="skill-icon">
          <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" alt="HTML">
        </div>
        <div class="skill-name">HTML</div>
        <span class="skill-badge badge-beginner">Beginner</span>
        <div class="skill-dots">
          <div class="skill-dot filled"></div>
          <div class="skill-dot filled"></div>
          <div class="skill-dot"></div>
          <div class="skill-dot"></div>
          <div class="skill-dot"></div>
        </div>
      </div>

      <div class="skill-card">
        <div class="skill-icon">
          <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/python/python-original.svg" alt="Python">
        </div>
        <div class="skill-name">Python</div>
        <span class="skill-badge badge-beginner">Beginner</span>
        <div class="skill-dots">
          <div class="skill-dot filled"></div>
          <div class="skill-dot filled"></div>
          <div class="skill-dot"></div>
          <div class="skill-dot"></div>
          <div class="skill-dot"></div>
        </div>
      </div>

      <div class="skill-card">
        <div class="skill-icon">
          <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg" alt="CSS">
        </div>
        <div class="skill-name">CSS</div>
        <span class="skill-badge badge-beginner">Beginner</span>
        <div class="skill-dots">
          <div class="skill-dot filled"></div>
          <div class="skill-dot filled"></div>
          <div class="skill-dot"></div>
          <div class="skill-dot"></div>
          <div class="skill-dot"></div>
        </div>
      </div>

      <div class="skill-card">
        <div class="skill-icon">
          <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/java/java-original.svg" alt="Java">
        </div>
        <div class="skill-name">Java</div>
        <span class="skill-badge badge-beginner">Beginner</span>
        <div class="skill-dots">
          <div class="skill-dot filled"></div>
          <div class="skill-dot filled"></div>
          <div class="skill-dot"></div>
          <div class="skill-dot"></div>
          <div class="skill-dot"></div>
        </div>
      </div>

      <div class="skill-card">
        <div class="skill-icon">
          <img src="https://img.icons8.com/ios-filled/100/c66788/microphone.png" alt="Public Speaking">
        </div>
        <div class="skill-name">Public Speaking</div>
        <span class="skill-badge badge-active">Active</span>
        <div class="skill-dots">
          <div class="skill-dot filled"></div>
          <div class="skill-dot filled"></div>
          <div class="skill-dot filled"></div>
          <div class="skill-dot filled"></div>
          <div class="skill-dot filled"></div>
        </div>
      </div>

      <div class="skill-card">
        <div class="skill-icon" style="background:#f0e8ff">
          <img src="https://img.icons8.com/color/96/adobe-lightroom.png" alt="Lightroom">
        </div>
        <div class="skill-name">Lightroom</div>
        <span class="skill-badge badge-inter">Intermediate</span>
        <div class="skill-dots">
          <div class="skill-dot filled"></div>
          <div class="skill-dot filled"></div>
          <div class="skill-dot filled"></div>
          <div class="skill-dot filled"></div>
          <div class="skill-dot"></div>
        </div>
      </div>

    </div>
  </section>

  <!-- ══════════ CERTIFIKAT ══════════ -->
  <section id="certifikat">
    <div class="reveal">
      <p class="section-label">Pencapaian</p>
      <h2 class="section-title">Certifikat</h2>
      <div class="divider"></div>
    </div>

    <div class="cert-grid reveal" style="transition-delay:.15s">

      <div class="cert-card">
        <div class="cert-img">
          <img src="../Assets/img/cert1.jpg" alt="Sertifikat LCC PPKN">
        </div>
        <button class="cert-btn" onclick="alert('Kegiatan siswa dalam mengikuti LCC PPKN Tingkas Kabupaten Wonosobo dalam rangka hari kebangkitan nasional')">Details</button>
      </div>

      <div class="cert-card">
        <div class="cert-img">
          <img src="../Assets/img/cert2.jpg" alt="Sertifikat Personal Branding">
        </div>
        <button class="cert-btn" onclick="alert('YLEC Certificate – Grafting Your Legacy: Personal Branding with a Social Impact\nOctober 25, 2024')">Details</button>
      </div>

      <div class="cert-card">
        <div class="cert-img">
          <img src="../Assets/img/cert3.jpg" alt="Sertifikat Scholarship and Abroad">
        </div>
        <button class="cert-btn" onclick="alert('YLEC Certificate – Scholarship and abroad: Unlocking the World of Opportunities\nOctober 27, 2024')">Details</button>
      </div>

      <div class="cert-card">
        <div class="cert-img">
          <img src="../Assets/img/cert4.jpg" alt="Sertifikat Kegiatan Akademik">
        </div>
        <button class="cert-btn" onclick="alert('Sertifikat Peserta – Kegiatan Akademik / Pelatihan\nNajwa Amanda Desyari')">Details</button>
      </div>

    </div>
  </section>

  <!-- ══════════ CONTACT ══════════ -->
  <section id="contact">
    <div class="reveal">
      <p class="section-label">Hubungi Saya</p>
      <h2 class="section-title">Contact</h2>
      <div class="divider"></div>
    </div>

    <div class="contact-wrapper">
      <div class="contact-info reveal">
        <h3>Informasi Kontak</h3>

        <a class="contact-item" href="mailto:najwaamandadesyari@gmail.com">
          <span class="contact-item-icon">✉️</span>
          <div>
            <div class="contact-item-label">Email</div>
            <div class="contact-item-val">najwaamandadesyari@gmail.com</div>
          </div>
        </a>

        <a class="contact-item" href="tel:089687867067">
          <span class="contact-item-icon">📞</span>
          <div>
            <div class="contact-item-label">Telepon / WhatsApp</div>
            <div class="contact-item-val">089687867067</div>
          </div>
        </a>

        <a class="contact-item" href="https://www.instagram.com/najwaamandsy?igsh=Z3d1cnRvdGZjOTRv" target="_blank">
          <span class="contact-item-icon">📸</span>
          <div>
            <div class="contact-item-label">Instagram</div>
            <div class="contact-item-val">@najwaamandsy</div>
          </div>
        </a>

        <div class="contact-item">
          <span class="contact-item-icon">📍</span>
          <div>
            <div class="contact-item-label">Alamat</div>
            <div class="contact-item-val">Sapuran, Wonosobo, Jawa Tengah</div>
          </div>
        </div>
      </div>

      <div class="contact-form reveal" style="transition-delay:.15s">
        <h3>Kirim Pesan</h3>

        <div class="form-group">
          <label for="nama">Nama Anda</label>
          <input type="text" id="nama" placeholder="Nama lengkap Anda">
        </div>

        <div class="form-group">
          <label for="email">Email Anda</label>
          <input type="email" id="email" placeholder="email@contoh.com">
        </div>

        <div class="form-group">
          <label for="subject">Subject</label>
          <input type="text" id="subject" placeholder="Perihal pesan">
        </div>

        <div class="form-group">
          <label for="pesan">Pesan Anda</label>
          <textarea id="pesan" placeholder="Tulis pesan Anda di sini..."></textarea>
        </div>

        <button class="submit-btn" onclick="submitForm()">Submit →</button>
        <div id="form-status"></div>
      </div>
    </div>
  </section>

  <!-- ══════════ THANK YOU ══════════ -->
  <section id="thankyou" style="min-height:50vh">
    <div class="thankyou-inner reveal" style="text-align:center">
      <h2>Thank You</h2>
      <p>Terima kasih telah mengunjungi portfolio saya. Mari berkolaborasi!</p>
      <div class="social-links">
        <a href="mailto:najwaamandadesyari@gmail.com" class="social-link">💌 Email</a>
        <a href="https://github.com/najwaamandadesyari-dot" target="_blank" class="social-link">
          <span>💖</span> GitHub
        </a>
        <a href="https://www.instagram.com/najwaamandsy?igsh=Z3d1cnRvdGZjOTRv" target="_blank" class="social-link">📸 Instagram</a>
      </div>
    </div>
  </section>

</main>

<footer>
  <p>© 2026 <span>Najwa Amanda Desyari</span> · Teknik Informatika UNSIQ Wonosobo</p>
</footer>

<script>
  /* ── Scroll Reveal ── */
  const reveals = document.querySelectorAll('.reveal');
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) entry.target.classList.add('visible');
    });
  }, { threshold: 0.12 });
  reveals.forEach(el => observer.observe(el));

  /* ── Active Nav ── */
  const sections = document.querySelectorAll('section[id]');
  const navLinks = document.querySelectorAll('.nav-link');

  window.addEventListener('scroll', () => {
    let current = '';
    sections.forEach(section => {
      if (window.scrollY >= section.offsetTop - 100) current = section.getAttribute('id');
    });
    navLinks.forEach(link => {
      link.classList.remove('active');
      if (link.getAttribute('href') === '#' + current) link.classList.add('active');
    });
  });

  /* ── Hamburger dropdown toggle ── */
  function toggleDropdown() {
    document.getElementById('hamburgerDropdown').classList.toggle('open');
  }
  function closeDropdown() {
    document.getElementById('hamburgerDropdown').classList.remove('open');
  }
  document.addEventListener('click', (e) => {
    const dd = document.getElementById('hamburgerDropdown');
    if (!e.target.closest('.nav-right')) dd.classList.remove('open');
  });

  /* ── Search ── */
  const navSections = [
    { name: 'Home', href: '#home', icon: '🏠' },
    { name: 'About Me', href: '#about', icon: '👤' },
    { name: 'What I Do', href: '#whatido', icon: '💼' },
    { name: 'Project & Activity', href: '#project', icon: '📌' },
    { name: 'Skill & Tools', href: '#skill', icon: '⚡' },
    { name: 'Certifikat', href: '#certifikat', icon: '🏅' },
    { name: 'Contact', href: '#contact', icon: '✉️' },
  ];
  function toggleSearch() {
    document.getElementById('searchOverlay').classList.toggle('open');
    if (document.getElementById('searchOverlay').classList.contains('open')) {
      setTimeout(() => document.getElementById('searchInput').focus(), 100);
      doSearch('');
    }
  }
  function closeSearch(e) {
    if (!e || e.target === document.getElementById('searchOverlay')) {
      document.getElementById('searchOverlay').classList.remove('open');
      document.getElementById('searchInput').value = '';
    }
  }
  function doSearch(q) {
    const filtered = q
      ? navSections.filter(s => s.name.toLowerCase().includes(q.toLowerCase()))
      : navSections;
    const container = document.getElementById('searchResults');
    container.innerHTML = filtered.map(s =>
      `<div class="search-result-item" onclick="goTo('${s.href}')">${s.icon} ${s.name}</div>`
    ).join('');
  }
  function goTo(href) {
    document.getElementById('searchOverlay').classList.remove('open');
    document.getElementById('searchInput').value = '';
    document.querySelector(href).scrollIntoView({ behavior: 'smooth' });
  }

  /* ── Info Modal ── */
  function openInfoModal() {
    document.getElementById('infoModal').classList.add('open');
  }
  function closeInfoModal(e) {
    if (!e || e.target === document.getElementById('infoModal')) {
      document.getElementById('infoModal').classList.remove('open');
    }
  }

  /* ── Mobile nav ── */
  function closeMobileNav() {
    document.getElementById('mobileNav').classList.remove('open');
  }

  /* ── Form Submit ── */
  function submitForm() {
    const nama = document.getElementById('nama').value.trim();
    const email = document.getElementById('email').value.trim();
    const subject = document.getElementById('subject').value.trim();
    const pesan = document.getElementById('pesan').value.trim();
    const status = document.getElementById('form-status');

    if (!nama || !email || !subject || !pesan) {
      status.style.color = '#f8d7da';
      status.textContent = '⚠️ Mohon isi semua field terlebih dahulu.';
      return;
    }

    if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
      status.style.color = '#f8d7da';
      status.textContent = '⚠️ Format email tidak valid.';
      return;
    }

    status.style.color = '#fff';
    status.textContent = '✓ Pesan berhasil dikirim! Terima kasih, ' + nama + '.';

    document.getElementById('nama').value = '';
    document.getElementById('email').value = '';
    document.getElementById('subject').value = '';
    document.getElementById('pesan').value = '';
  }
</script>
</body>
</html>
