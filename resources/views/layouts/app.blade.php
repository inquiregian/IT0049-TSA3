<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Tasks for Today</title>

    <style>
        :root {
            --ink: #172033;
            --muted: #64748b;
            --primary: #0f766e;
            --primary-light: #e6f5f2;
            --background: #f5f7fb;
            --surface: #ffffff;
            --border: #e2e8f0;
            --shadow: 0 12px 32px rgba(15, 23, 42, 0.06);
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            color: var(--ink);
            background: var(--background);
            font-family: Inter, "Segoe UI", Arial, sans-serif;
            line-height: 1.6;
        }

        header {
            position: sticky;
            top: 0;
            z-index: 10;
            background: rgba(255, 255, 255, 0.94);
            border-bottom: 1px solid var(--border);
            backdrop-filter: blur(12px);
        }

        nav {
            width: min(1100px, calc(100% - 40px));
            min-height: 72px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 24px;
        }

        .brand {
            color: var(--primary);
            font-size: 20px;
            font-weight: 750;
            letter-spacing: -0.4px;
            text-decoration: none;
        }

        .nav-links {
            display: flex;
            flex-wrap: wrap;
            gap: 6px;
        }

        .nav-links a {
            padding: 9px 13px;
            border-radius: 9px;
            color: #475569;
            font-size: 14px;
            font-weight: 600;
            text-decoration: none;
            transition: background 160ms ease, color 160ms ease;
        }

        .nav-links a:hover,
        .nav-links a.active {
            color: var(--primary);
            background: var(--primary-light);
        }

        main {
            width: min(900px, calc(100% - 40px));
            min-height: 68vh;
            margin: 48px auto;
        }

        .card {
            padding: 34px;
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: 18px;
            box-shadow: var(--shadow);
        }

        h1 {
            margin: 0 0 8px;
            color: var(--ink);
            font-size: clamp(26px, 4vw, 34px);
            line-height: 1.2;
            letter-spacing: -0.8px;
        }

        .card p {
            margin: 14px 0;
        }

        .muted {
            color: var(--muted);
        }

        .task-list {
            display: grid;
            gap: 10px;
            margin-top: 24px;
        }

        .task-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
            padding: 15px 17px;
            background: #fbfcfe;
            border: 1px solid var(--border);
            border-radius: 12px;
            transition: border-color 160ms ease, transform 160ms ease;
        }

        .task-item:hover {
            border-color: #a7d8d1;
            transform: translateY(-1px);
        }

        .empty-state {
            padding: 18px;
            color: var(--muted);
            background: #f8fafc;
            border: 1px dashed #cbd5e1;
            border-radius: 12px;
        }

        table {
            width: 100%;
            margin-top: 22px;
            overflow: hidden;
            border: 1px solid var(--border);
            border-radius: 12px;
            border-spacing: 0;
            text-align: left;
        }

        th,
        td {
            padding: 14px 16px;
            border-bottom: 1px solid var(--border);
        }

        th {
            color: #475569;
            background: #f8fafc;
            font-size: 13px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.04em;
        }

        tbody tr:last-child td {
            border-bottom: 0;
        }

        tbody tr:hover {
            background: #f8fafc;
        }

        .status {
            display: inline-flex;
            align-items: center;
            padding: 5px 10px;
            border-radius: 999px;
            color: #075985;
            background: #e0f2fe;
            font-size: 12px;
            font-weight: 700;
            white-space: nowrap;
        }

        .status.completed {
            color: #166534;
            background: #dcfce7;
        }

        footer {
            padding: 22px 16px;
            color: var(--muted);
            font-size: 13px;
            text-align: center;
        }

        @media (max-width: 640px) {
            nav {
                width: calc(100% - 28px);
                padding: 14px 0;
                align-items: flex-start;
                flex-direction: column;
                gap: 10px;
            }

            .nav-links {
                width: 100%;
                gap: 2px;
            }

            .nav-links a {
                padding: 8px 10px;
                font-size: 13px;
            }

            main {
                width: calc(100% - 28px);
                margin: 28px auto;
            }

            .card {
                padding: 22px 18px;
                border-radius: 14px;
            }

            .task-item {
                align-items: flex-start;
            }

            table {
                display: block;
                overflow-x: auto;
                white-space: nowrap;
            }

            th,
            td {
                padding: 12px;
            }
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <a class="brand" href="{{ route('home') }}">Tasks for Today</a>

            <div class="nav-links">
                <a class="{{ request()->routeIs('home') ? 'active' : '' }}"
                   href="{{ route('home') }}">Today</a>

                <a class="{{ request()->routeIs('tasks.index') ? 'active' : '' }}"
                   href="{{ route('tasks.index') }}">All Tasks</a>

                <a class="{{ request()->routeIs('profile') ? 'active' : '' }}"
                   href="{{ route('profile') }}">Profile</a>

                <a class="{{ request()->routeIs('about') ? 'active' : '' }}"
                   href="{{ route('about') }}">About</a>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>Tasks for Today Management System · IT0049</footer>
</body>
</html>