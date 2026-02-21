<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Priyal Finance · premium business loans</title>
    <!-- Font Awesome 6 (free) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" href="{{ asset('assets/logo.png') }}" type="image/x-icon">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }

        /* navy & gold palette */
        :root {
            --navy-dark: #0a1928;
            /* deep navy base */
            --navy-medium: #132b3f;
            /* rich navy */
            --navy-light: #1e3a5a;
            /* elegant navy accent */
            --gold-bright: #d4af37;
            /* classic gold */
            --gold-soft: #e6c473;
            /* softer gold for hover / light bg */
            --gold-deep: #b88b1f;
            /* deeper gold for contrast */
            --white-soft: #f5f7fa;
            --text-light: #eef2f6;
            --text-muted: #b0c0d0;
        }

        body {
            background-color: var(--navy-dark);
            color: var(--text-light);
            line-height: 1.5;
        }

        .container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        /* navigation */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1.5rem 0;
            border-bottom: 1px solid rgba(212, 175, 55, 0.2);
            flex-wrap: wrap;
        }

        .logo {
            font-size: 2rem;
            font-weight: 600;
            letter-spacing: 1px;
        }

        .priyal {
            color: var(--gold-bright);
            text-shadow: 0 0 8px rgba(212, 175, 55, 0.3);
        }

        .finance-txt {
            color: var(--white-soft);
            font-weight: 300;
            margin-left: 0.2rem;
        }

        .nav-links {
            display: flex;
            gap: 2.5rem;
            align-items: center;
            flex-wrap: wrap;
        }

        .nav-links a {
            color: var(--text-light);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.2s;
            font-size: 1.1rem;
        }

        .nav-links a:hover {
            color: var(--gold-bright);
        }

        .nav-cta {
            background: transparent;
            border: 1.5px solid var(--gold-bright);
            color: var(--gold-bright);
            padding: 0.5rem 1.5rem;
            border-radius: 40px;
            font-weight: 600;
            transition: 0.2s;
        }

        .nav-cta:hover {
            background: var(--gold-bright);
            color: var(--navy-dark);
            border-color: var(--gold-bright);
        }

        /* mobile menu icon (simple) */
        .mobile-icon {
            display: none;
            font-size: 1.8rem;
            color: var(--gold-bright);
        }

        /* hero section */
        .hero {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            gap: 3rem;
            padding: 4rem 0 5rem;
        }

        .hero-content {
            flex: 1 1 400px;
        }

        .hero-badge {
            background: rgba(212, 175, 55, 0.12);
            color: var(--gold-soft);
            display: inline-block;
            padding: 0.4rem 1.2rem;
            border-radius: 40px;
            font-weight: 500;
            letter-spacing: 0.3px;
            border: 1px solid rgba(212, 175, 55, 0.3);
            margin-bottom: 1.5rem;
        }

        .hero-content h1 {
            font-size: 3.5rem;
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 1.2rem;
        }

        .hero-content h1 span {
            color: var(--gold-bright);
            border-bottom: 3px solid var(--gold-bright);
            display: inline-block;
            padding-bottom: 0.2rem;
        }

        .hero-desc {
            font-size: 1.25rem;
            color: var(--text-muted);
            max-width: 550px;
            margin-bottom: 2.5rem;
        }

        .hero-cta-group {
            display: flex;
            flex-wrap: wrap;
            gap: 1.5rem;
            align-items: center;
        }

        .btn-primary {
            background: var(--gold-bright);
            color: var(--navy-dark);
            border: none;
            padding: 0.9rem 2.8rem;
            border-radius: 50px;
            font-weight: 700;
            font-size: 1.2rem;
            cursor: pointer;
            transition: all 0.2s;
            box-shadow: 0 12px 22px -12px rgba(212, 175, 55, 0.4);
            border: 1px solid var(--gold-bright);
        }

        .btn-primary:hover {
            background: var(--gold-deep);
            border-color: var(--gold-deep);
            box-shadow: 0 18px 28px -10px #d4af37;
            transform: scale(1.02);
            color: #0a0f1a;
        }

        .btn-outline {
            background: transparent;
            border: 1.5px solid var(--gold-bright);
            color: var(--gold-bright);
            padding: 0.9rem 2.5rem;
            border-radius: 50px;
            font-weight: 600;
            font-size: 1.2rem;
            cursor: pointer;
            transition: 0.2s;
        }

        .btn-outline:hover {
            background: rgba(212, 175, 55, 0.1);
            border-color: var(--gold-soft);
            color: var(--gold-soft);
        }

        .hero-stats {
            display: flex;
            gap: 2.5rem;
            margin-top: 3rem;
        }

        .stat-item h3 {
            font-size: 2rem;
            color: var(--gold-bright);
        }

        .stat-item p {
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-size: 0.9rem;
        }

        .hero-image {
            flex: 1 1 350px;
            background: radial-gradient(circle at 70% 30%, rgba(212, 175, 55, 0.1), transparent 70%);
            padding: 2rem;
            display: flex;
            justify-content: center;
        }

        .card-preview {
            background: rgba(19, 43, 63, 0.6);
            backdrop-filter: blur(6px);
            border: 1px solid rgba(212, 175, 55, 0.5);
            border-radius: 40px;
            padding: 2rem 2rem 2.2rem;
            width: 100%;
            max-width: 380px;
            box-shadow: 0 40px 50px -25px rgba(0, 0, 0, 0.8), 0 0 0 1px rgba(212, 175, 55, 0.2) inset;
        }

        .card-preview h3 {
            font-size: 1.8rem;
            font-weight: 500;
            margin-bottom: 0.5rem;
        }

        .card-preview h3 i {
            color: var(--gold-bright);
            margin-right: 0.5rem;
        }

        .loan-amount {
            font-size: 2.8rem;
            font-weight: 700;
            color: var(--gold-bright);
            margin: 0.8rem 0 0.2rem;
        }

        .loan-badge {
            background: var(--navy-light);
            padding: 0.5rem 1.2rem;
            border-radius: 60px;
            display: inline-block;
            border-left: 4px solid var(--gold-bright);
            font-weight: 500;
            margin: 1rem 0;
        }

        .rate-row {
            display: flex;
            justify-content: space-between;
            border-top: 1px dashed rgba(212, 175, 55, 0.3);
            padding-top: 1.2rem;
            margin-top: 1rem;
            color: var(--text-muted);
        }

        .rate-row span:last-child {
            color: var(--gold-bright);
            font-weight: 600;
        }

        /* features / services */
        .features {
            padding: 5rem 0;
            background: rgba(10, 25, 40, 0.7);
            /* navy overlay */
        }

        .section-head {
            text-align: center;
            margin-bottom: 4rem;
        }

        .section-head h2 {
            font-size: 2.6rem;
            font-weight: 600;
        }

        .section-head h2 span {
            color: var(--gold-bright);
            border-bottom: 2px solid var(--gold-bright);
            padding-bottom: 0.2rem;
        }

        .section-head p {
            color: var(--text-muted);
            max-width: 600px;
            margin: 1rem auto 0;
            font-size: 1.2rem;
        }

        .feature-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 2.5rem;
        }

        .feature-card {
            background: rgba(30, 58, 90, 0.4);
            /* navy-light with transparency */
            backdrop-filter: blur(5px);
            border: 1px solid rgba(212, 175, 55, 0.2);
            border-radius: 32px;
            padding: 2rem 1.8rem;
            transition: 0.25s ease;
        }

        .feature-card:hover {
            border-color: var(--gold-bright);
            background: rgba(30, 58, 90, 0.7);
            transform: translateY(-8px);
            box-shadow: 0 24px 36px -20px #d4af37;
        }

        .feature-icon {
            background: var(--navy-medium);
            width: 70px;
            height: 70px;
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid var(--gold-bright);
            margin-bottom: 1.8rem;
            color: var(--gold-bright);
            font-size: 2rem;
        }

        .feature-card h3 {
            font-size: 1.7rem;
            margin-bottom: 0.7rem;
        }

        .feature-card p {
            color: var(--text-muted);
            font-size: 1rem;
        }

        /* application steps (gold accent) */
        .steps {
            padding: 5rem 0;
            background: var(--navy-medium);
        }

        .steps-container {
            display: flex;
            flex-wrap: wrap;
            gap: 2rem;
            justify-content: center;
        }

        .step-item {
            background: var(--navy-dark);
            border-radius: 40px;
            padding: 2rem 2rem 2.5rem;
            flex: 1 1 200px;
            border-bottom: 4px solid var(--gold-bright);
            text-align: center;
            transition: 0.2s;
        }

        .step-item:hover {
            transform: scale(1.02);
            border-bottom-width: 6px;
        }

        .step-num {
            background: var(--gold-bright);
            color: var(--navy-dark);
            width: 50px;
            height: 50px;
            border-radius: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 800;
            font-size: 1.8rem;
            margin: 0 auto 1.5rem;
        }

        .step-item h4 {
            font-size: 1.8rem;
            margin-bottom: 0.5rem;
            color: var(--gold-bright);
        }

        .step-item p {
            color: var(--text-muted);
        }

        /* CTA banner */
        .cta-banner {
            background: linear-gradient(145deg, var(--navy-light) 0%, #0b2338 100%);
            margin: 4rem 0;
            border-radius: 70px;
            padding: 3.5rem 4rem;
            border: 1px solid rgba(212, 175, 55, 0.3);
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
        }

        .cta-banner h3 {
            font-size: 2.2rem;
            font-weight: 600;
        }

        .cta-banner h3 span {
            color: var(--gold-bright);
        }

        .cta-banner .btn-primary {
            font-size: 1.4rem;
            padding: 1rem 3rem;
        }

        /* footer */
        .footer {
            border-top: 1px solid rgba(212, 175, 55, 0.2);
            padding: 3rem 0 4rem;
            margin-top: 3rem;
        }

        .footer-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 3rem;
        }

        .footer-col p {
            color: var(--text-muted);
            max-width: 280px;
            margin: 1rem 0;
        }

        .footer-logo {
            font-size: 2rem;
            font-weight: 600;
        }

        .social-links {
            display: flex;
            gap: 1.5rem;
            margin-top: 1.5rem;
        }

        .social-links i {
            font-size: 1.6rem;
            color: var(--gold-bright);
            transition: 0.2s;
        }

        .social-links i:hover {
            color: var(--gold-soft);
            transform: scale(1.1);
        }

        .footer-col a {
            display: block;
            color: var(--text-muted);
            text-decoration: none;
            margin-bottom: 0.8rem;
        }

        .footer-col a:hover {
            color: var(--gold-bright);
        }

        .copyright {
            text-align: center;
            color: var(--text-muted);
            margin-top: 4rem;
            font-size: 0.95rem;
        }

        hr {
            border-color: rgba(212, 175, 55, 0.1);
            margin: 2rem 0;
        }

        /* responsive */
        @media (max-width: 900px) {
            .nav-links {
                display: none;
                /* keep demo simple – we show mobile icon */
            }

            .mobile-icon {
                display: block;
            }

            .hero-content h1 {
                font-size: 2.7rem;
            }

            .cta-banner {
                flex-direction: column;
                text-align: center;
                gap: 2rem;
            }
        }

        @media (max-width: 550px) {
            .hero-stats {
                flex-wrap: wrap;
                gap: 1.5rem;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- navigation bar -->
        <nav class="navbar">
            <div class="logo">
                <span class="priyal">PRIYAL</span><span class="finance-txt"> FINANCE</span>
            </div>
            <div class="nav-links">
                <a href="#">Home</a>
                <a href="#">Loans</a>
                <a href="#">Business</a>
                <a href="#">Resources</a>
                <a href="#" class="nav-cta">Client login</a>
            </div>
            <div class="mobile-icon">
                <i class="fas fa-bars"></i>
            </div>
        </nav>

        <!-- hero section -->
        <section class="hero">
            <div class="hero-content">
                <div class="hero-badge">
                    <i class="fas fa-shield-alt" style="margin-right: 8px;"></i> Trusted by 5,000+ businesses
                </div>
                <h1>Fuel your <span>business growth</span> with smart capital</h1>
                <p class="hero-desc">Priyal Finance provides tailored business loans with lightning-fast approval,
                    premium support, and flexible terms. Navy‑strong trust, golden opportunities.</p>
                <div class="hero-cta-group">
                    <button class="btn-primary"><i class="fas fa-rocket" style="margin-right: 8px;"></i>Apply
                        now</button>
                    <button class="btn-outline"><i class="fas fa-phone-alt" style="margin-right: 8px;"></i>Talk to
                        expert</button>
                </div>
                <div class="hero-stats">
                    <div class="stat-item">
                        <h3>₹50L+</h3>
                        <p>funding / week</p>
                    </div>
                    <div class="stat-item">
                        <h3>8.5%</h3>
                        <p>starting rate</p>
                    </div>
                    <div class="stat-item">
                        <h3>15min</h3>
                        <p>quick approval</p>
                    </div>
                </div>
            </div>
            <div class="hero-image">
                <div class="card-preview">
                    <h3><i class="fas fa-briefcase"></i> business loan</h3>
                    <div class="loan-amount">₹15,00,000</div>
                    <div class="loan-badge"><i class="fas fa-clock"></i> repayment 36 months</div>
                    <div class="rate-row">
                        <span>interest (p.a.)</span>
                        <span>9.9% *</span>
                    </div>
                    <div class="rate-row">
                        <span>processing fee</span>
                        <span>zero</span>
                    </div>
                    <div style="margin-top: 1.5rem; color: var(--gold-soft); font-size: 0.9rem;">
                        <i class="fas fa-check-circle"></i> in-principle approval — 5 mins
                    </div>
                </div>
            </div>
        </section>
    </div> <!-- end container -->

    <!-- features / services (full width with navy) -->
    <section class="features">
        <div class="container">
            <div class="section-head">
                <h2>designed for <span>ambitious</span> businesses</h2>
                <p>Capital that adapts to you – no rigid collaterals, only opportunity.</p>
            </div>
            <div class="feature-grid">
                <div class="feature-card">
                    <div class="feature-icon"><i class="fas fa-gem"></i></div>
                    <h3>Gold collateral</h3>
                    <p>Flexible options including gold-backed loans with highest valuation in the market.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon"><i class="fas fa-chart-line"></i></div>
                    <h3>revenue based</h3>
                    <p>Repay as you earn — monthly payments aligned with your cash flow.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon"><i class="fas fa-bolt"></i></div>
                    <h3>instant offer</h3>
                    <p>Upload 3 months statements, get final offer within 2 hours.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon"><i class="fas fa-hand-holding-usd"></i></div>
                    <h3>₹1Cr+ limit</h3>
                    <p>High-value funding for established enterprises, minimal documentation.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- steps in gold/navy -->
    <section class="steps">
        <div class="container">
            <div class="section-head">
                <h2>from <span>application</span> to funds</h2>
                <p>straightforward, transparent, and fast.</p>
            </div>
            <div class="steps-container">
                <div class="step-item">
                    <div class="step-num">1</div>
                    <h4>apply</h4>
                    <p>10-minute online form, no paperwork</p>
                </div>
                <div class="step-item">
                    <div class="step-num">2</div>
                    <h4>review</h4>
                    <p>dedicated expert assesses your needs</p>
                </div>
                <div class="step-item">
                    <div class="step-num">3</div>
                    <h4>approve</h4>
                    <p>conditional sanction within 2 hours</p>
                </div>
                <div class="step-item">
                    <div class="step-num">4</div>
                    <h4>receive</h4>
                    <p>funds credited in 24h after acceptance</p>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <!-- gold cta banner -->
        <div class="cta-banner">
            <div>
                <h3><span>₹0</span> processing fee · limited period</h3>
                <p style="color: var(--text-muted); margin-top: 0.4rem;">For all new business loan applications this
                    month</p>
            </div>
            <button class="btn-primary"><i class="fas fa-calendar-check"></i> claim offer</button>
        </div>

        <!-- footer with navy / gold details -->
        <footer class="footer">
            <div class="footer-grid">
                <div class="footer-col">
                    <div class="footer-logo">
                        <span class="priyal">PRIYAL</span><span class="finance-txt"> FINANCE</span>
                    </div>
                    <p>Your trusted partner for business growth. Built on integrity, powered by gold standard service.
                    </p>
                    <div class="social-links">
                        <i class="fab fa-linkedin-in"></i>
                        <i class="fab fa-x-twitter"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-youtube"></i>
                    </div>
                </div>
                <div class="footer-col">
                    <h4 style="color: var(--gold-bright); margin-bottom: 1.2rem;">Lending</h4>
                    <a href="#">Business term loan</a>
                    <a href="#">Gold backed loan</a>
                    <a href="#">Working capital</a>
                    <a href="#">Invoice financing</a>
                </div>
                <div class="footer-col">
                    <h4 style="color: var(--gold-bright); margin-bottom: 1.2rem;">Company</h4>
                    <a href="#">About priyal</a>
                    <a href="#">Careers</a>
                    <a href="#">Press & media</a>
                    <a href="#">Contact</a>
                </div>
                <div class="footer-col">
                    <h4 style="color: var(--gold-bright); margin-bottom: 1.2rem;">address</h4>
                    <p>Navy House, Finance district<br>Mumbai · 400001<br>📞 1800-102-PRIYAL<br>hello@priyalfinance.in
                    </p>
                </div>
            </div>
            <hr>
            <div class="copyright">
                © 2025 Priyal Finance Ltd (formerly Navy Capital) . All rights reserved . Luxury in lending
            </div>
        </footer>
    </div>
    <!-- small dummy spacer for extra elegance -->
</body>

</html>
