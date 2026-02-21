<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Priyal Finance · admin login</title>
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

        :root {
            --navy-dark: #0a1928;
            --navy-medium: #132b3f;
            --navy-light: #1e3a5a;
            --gold-bright: #d4af37;
            --gold-soft: #e6c473;
            --gold-deep: #b88b1f;
            --white-soft: #f5f7fa;
            --text-light: #eef2f6;
            --text-muted: #b0c0d0;
            --error-red: #b33a3a;
        }

        body {
            background-color: var(--navy-dark);
            color: var(--text-light);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-image: radial-gradient(circle at 10% 20%, rgba(212, 175, 55, 0.05) 0%, transparent 30%),
                radial-gradient(circle at 90% 80%, rgba(212, 175, 55, 0.05) 0%, transparent 35%);
            padding: 1rem;
        }

        /* main glass-card container */
        .login-container {
            width: 100%;
            max-width: 460px;
            background: rgba(10, 25, 40, 0.75);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(212, 175, 55, 0.25);
            border-radius: 48px;
            padding: 2.8rem 2.2rem 3rem;
            box-shadow: 0 40px 60px -20px rgba(0, 0, 0, 0.8), 0 0 0 1px rgba(212, 175, 55, 0.15) inset;
        }

        /* header with gold/navy branding */
        .brand {
            text-align: center;
            margin-bottom: 2.5rem;
        }

        .brand .logo {
            font-size: 2.5rem;
            font-weight: 600;
            letter-spacing: 1.5px;
        }

        .priyal {
            color: var(--gold-bright);
            text-shadow: 0 0 10px rgba(212, 175, 55, 0.4);
        }

        .finance-txt {
            color: var(--white-soft);
            font-weight: 300;
        }

        .admin-badge {
            display: inline-block;
            background: rgba(212, 175, 55, 0.12);
            border: 1px solid rgba(212, 175, 55, 0.4);
            color: var(--gold-soft);
            font-weight: 600;
            font-size: 0.85rem;
            padding: 0.4rem 1.4rem;
            border-radius: 60px;
            letter-spacing: 1px;
            margin-top: 1rem;
            text-transform: uppercase;
        }

        .admin-badge i {
            margin-right: 6px;
            color: var(--gold-bright);
        }

        /* access key indicator (admin only hint) */
        .role-tag {
            background: rgba(30, 58, 90, 0.7);
            border-left: 4px solid var(--gold-bright);
            padding: 1rem 1.4rem;
            border-radius: 30px;
            margin-bottom: 2.2rem;
            font-size: 0.95rem;
            display: flex;
            align-items: center;
            gap: 10px;
            color: var(--text-muted);
            border: 1px solid rgba(212, 175, 55, 0.3);
        }

        .role-tag i {
            color: var(--gold-bright);
            font-size: 1.3rem;
        }

        .role-tag strong {
            color: var(--gold-bright);
            font-weight: 600;
        }

        /* form styling */
        .input-group {
            margin-bottom: 1.8rem;
        }

        .input-group label {
            display: block;
            margin-bottom: 0.6rem;
            color: var(--gold-soft);
            font-weight: 500;
            font-size: 0.95rem;
            letter-spacing: 0.3px;
        }

        .input-wrapper {
            display: flex;
            align-items: center;
            background: transparent;
            border: 1px solid rgba(212, 175, 55, 0.3);
            border-radius: 44px;
            padding: 0.3rem 1.5rem 0.3rem 1.2rem;
            transition: all 0.2s ease;
        }

        .input-wrapper:hover,
        .input-wrapper:focus-within {
            border-color: var(--gold-bright);
            background: rgba(30, 58, 90, 0.6);
            box-shadow: 0 0 0 3px rgba(212, 175, 55, 0.15);
        }

        .input-wrapper i {
            color: var(--gold-bright);
            font-size: 1.2rem;
            width: 28px;
            opacity: 0.9;
        }

        .input-wrapper input {
            width: 100%;
            background: transparent;
            border: none;
            padding: 1rem 0.5rem 1rem 0;
            color: var(--text-light);
            font-size: 1.1rem;
            outline: none;
        }

        .input-wrapper input::placeholder {
            color: #6f85a0;
            font-weight: 300;
            font-size: 1rem;
        }

        /* admin only - hidden field styling (just visual demo) */
        .admin-code {
            margin-bottom: 1rem;
        }

        .admin-code .input-wrapper {
            background: rgba(10, 20, 30, 0.9);
            border-color: rgba(212, 175, 55, 0.5);
        }

        .admin-code .input-wrapper i {
            color: var(--gold-deep);
        }

        /* options row */
        .options-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 1.5rem 0 2.2rem;
            flex-wrap: wrap;
            gap: 10px;
        }

        .remember {
            display: flex;
            align-items: center;
            gap: 8px;
            color: var(--text-muted);
            cursor: pointer;
        }

        .remember input[type="checkbox"] {
            accent-color: var(--gold-bright);
            width: 18px;
            height: 18px;
            cursor: pointer;
        }

        .forgot-link {
            color: var(--gold-bright);
            text-decoration: none;
            font-weight: 500;
            border-bottom: 1px dashed var(--gold-bright);
            line-height: 1.2;
        }

        .forgot-link:hover {
            color: var(--gold-soft);
            border-bottom-style: solid;
        }

        /* admin login button (gold) */
        .admin-login-btn {
            background: var(--gold-bright);
            border: none;
            width: 100%;
            padding: 1.1rem;
            border-radius: 60px;
            font-weight: 700;
            font-size: 1.4rem;
            color: var(--navy-dark);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            cursor: pointer;
            transition: all 0.2s;
            box-shadow: 0 14px 28px -12px rgba(212, 175, 55, 0.5);
            border: 1px solid var(--gold-bright);
            margin-top: 0.5rem;
        }

        .admin-login-btn i {
            font-size: 1.2rem;
        }

        .admin-login-btn:hover {
            background: var(--gold-deep);
            border-color: var(--gold-deep);
            transform: scale(1.01);
            box-shadow: 0 20px 32px -12px #d4af37;
        }

        /* additional admin verification note */
        .security-note {
            margin-top: 2.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            background: rgba(0, 0, 0, 0.3);
            padding: 0.8rem 1.2rem;
            border-radius: 60px;
            font-size: 0.85rem;
            color: var(--text-muted);
            border: 1px solid rgba(212, 175, 55, 0.15);
        }

        .security-note i {
            color: var(--gold-bright);
            font-size: 1rem;
        }

        .security-note span {
            color: var(--gold-soft);
            font-weight: 500;
        }

        /* back to homepage link */
        .back-link {
            text-align: center;
            margin-top: 2rem;
        }

        .back-link a {
            color: var(--text-muted);
            text-decoration: none;
            font-size: 0.95rem;
            border-bottom: 1px solid rgba(212, 175, 55, 0.3);
            padding-bottom: 2px;
        }

        .back-link a:hover {
            color: var(--gold-bright);
            border-bottom-color: var(--gold-bright);
        }

        /* demo subtle divider */
        .divider {
            display: flex;
            align-items: center;
            gap: 12px;
            color: rgba(212, 175, 55, 0.4);
            font-size: 0.8rem;
            margin: 1.5rem 0 0.5rem;
        }

        .divider-line {
            height: 1px;
            background: rgba(212, 175, 55, 0.2);
            flex: 1;
        }

        /* very small screens */
        @media (max-width: 460px) {
            .login-container {
                padding: 2rem 1.5rem;
                border-radius: 36px;
            }

            .admin-login-btn {
                font-size: 1.2rem;
            }
        }

        /* FORCE input styling */
        .input-wrapper input {
            background-color: var(--navy-dark) !important;
            color: #ffffff !important;
            border: none !important;
        }

        /* Fix autofill (Chrome yellow/white background issue) */
        input:-webkit-autofill,
        input:-webkit-autofill:hover,
        input:-webkit-autofill:focus,
        input:-webkit-autofill:active {
            -webkit-box-shadow: 0 0 0 1000px var(--navy-dark) inset !important;
            -webkit-text-fill-color: #ffffff !important;
            transition: background-color 5000s ease-in-out 0s;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <!-- brand + admin indicator -->
        <div class="brand">
            <div class="logo">
                <span class="priyal">PRIYAL</span><span class="finance-txt"> FINANCE</span>
            </div>
            <div class="admin-badge">
                <i class="fas fa-shield-haltered"></i> ADMIN PORTAL
            </div>
        </div>

        <!-- explicit admin only message (gold / navy) -->
        {{-- <div class="role-tag">
            <i class="fas fa-lock"></i>
            <span><strong>Administrator access only</strong> — restricted to finance officers & senior management</span>
        </div> --}}

        <!-- login form (admin) -->
        <form action="{{ route('admin.login') }}" method="POST">
            @csrf

            <div class="input-group">
                <label>ADMIN EMAIL ID</label>
                <div class="input-wrapper">
                    <input type="email" name="email" value="{{ old('email') }}" placeholder="e.g., priyal.adm"
                        required>
                </div>
                @error('email')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="input-group">
                <label>PASSWORD</label>
                <div class="input-wrapper">
                    <input type="password" name="password" placeholder="••••••••" required>
                </div>
                @error('password')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <button type="submit" class="admin-login-btn">
                LOGIN AS ADMIN
            </button>
        </form>

        <!-- back to main site (like homepage) -->
        <div class="back-link">
            <a href="{{ route('welcome') }}"><i class="fas fa-arrow-left" style="margin-right: 6px;"></i> return to
                priyal finance homepage</a>
        </div>
    </div>

    <!-- subtle note: purely demo admin login - no actual submission -->
    <div style="position: fixed; bottom: 10px; right: 10px; opacity: 0.3; font-size: 0.7rem; color: var(--text-muted);">
        <i class="fas fa-lock"></i> admin demo · navy & gold
    </div>
</body>

</html>
