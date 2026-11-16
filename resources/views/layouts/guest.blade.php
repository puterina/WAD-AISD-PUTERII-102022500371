<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - Kos Manager</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

    <style>
        :root { --brand: #0f766e; --brand-soft: #ccfbf1; --ink: #0f172a; --muted: #64748b; --line: #e2e8f0; --bg: #f6f8fa; }
        body { font-family: 'Plus Jakarta Sans', sans-serif; background: var(--bg); color: var(--ink); min-height: 100vh; display: grid; place-items: center; padding: 1rem; }
        .auth-card { width: 100%; max-width: 420px; background: #fff; border: 1px solid var(--line); border-radius: 16px; padding: 2rem; }
        .brand-icon { width: 48px; height: 48px; border-radius: 12px; background: var(--brand); color: #fff; display: grid; place-items: center; font-size: 1.4rem; margin: 0 auto 1rem; }
        .btn-brand { background: var(--brand); color: #fff; border: 0; border-radius: 10px; padding: .65rem 1.1rem; font-weight: 600; }
        .btn-brand:hover { background: #0b5f59; color: #fff; }
        .form-control { border-radius: 10px; border-color: var(--line); padding: .65rem .85rem; }
        .form-control:focus { border-color: var(--brand); box-shadow: 0 0 0 .2rem rgba(15,118,110,.15); }
        a { color: var(--brand); font-weight: 600; text-decoration: none; }
    </style>
</head>
<body>
    <div class="auth-card">
        <div class="brand-icon"><i class="bi bi-house-door-fill"></i></div>
        @yield('content')
    </div>
</body>
</html>