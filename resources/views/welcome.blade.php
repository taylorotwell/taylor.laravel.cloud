<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Taylor Otwell</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fragment+Mono:ital@0;1&display=swap" rel="stylesheet">
    <style>
        :root {
            color-scheme: light dark;
            --bg: #fafafa;
            --text: #111;
            --muted: #555;
            --heading: #666;
            --link: #2f2f2f;
            --dot: #666;
        }

        @media (prefers-color-scheme: dark) {
            :root {
                --bg: #0f0f0f;
                --text: #e6e6e6;
                --muted: #a1a1a1;
                --heading: #9a9a9a;
                --link: #d0d0d0;
                --dot: #8a8a8a;
            }
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 2rem 1.25rem 3rem;
            font-family: "Fragment Mono", ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            font-size: 14px;
            line-height: 1.7;
            color: var(--text);
            background: var(--bg);
        }

        main {
            max-width: 44rem;
            margin: 0 auto;
        }

        h1,
        h2 {
            font-size: 1rem;
            margin: 0;
            font-weight: 400;
        }

        .dashed-heading {
            display: inline-block;
            text-transform: none;
            letter-spacing: 0;
            font-size: 0.92rem;
            color: var(--heading);
        }

        .dashed-heading::before {
            content: "[ ";
        }

        .dashed-heading::after {
            content: " ]";
        }

        h1 {
            font-size: 1.25rem;
        }

        p {
            margin: 0;
        }

        .copy {
            max-width: 62ch;
            margin-top: 0.5rem;
        }

        .copy + .copy {
            margin-top: 0.85rem;
        }

        section {
            margin-top: 1.5rem;
        }

        ul {
            margin: 0.5rem 0 0;
            padding-left: 1.25rem;
        }

        li {
            margin: 0.25rem 0;
        }

        a {
            color: var(--link);
            text-decoration: underline;
            text-underline-offset: 0.2rem;
        }

        a:hover {
            text-decoration-thickness: 2px;
        }

        .muted {
            color: var(--muted);
        }

        .link-list {
            list-style: none;
            padding-left: 0;
            display: flex;
            flex-wrap: wrap;
            gap: 0;
        }

        .link-list li + li::before {
            content: "·";
            display: inline-block;
            margin: 0 0.45rem;
            color: var(--dot);
        }

        .link-list li {
            display: inline;
            margin: 0;
        }

        @media (max-width: 640px) {
            body {
                font-size: 13px;
                padding-top: 1.5rem;
            }
        }
    </style>
</head>
<body>
<main>
    <h1>Taylor Otwell</h1>
    <p class="muted">Creator of Laravel</p>

    <section>
        <h2 class="dashed-heading">Now</h2>
        <p class="copy">Most days I am building Laravel and working on the ecosystem around it, with a focus on making developers and teams more productive.</p>
        <p class="copy">I spend my time writing code, refining products, and shipping things that feel fast, practical, and enjoyable to use.</p>
    </section>

    <section>
        <h2 class="dashed-heading">Investing</h2>
        <p class="copy">I also invest in interesting start-ups and ideas, especially when they are led by passionate teams with strong product instincts.</p>
        <p class="copy">I am drawn to builders who care deeply about craft, move quickly, and have a clear sense of the problem they are solving.</p>
    </section>

    <section>
        <h2 class="dashed-heading">Links</h2>
        <ul class="link-list">
            <li><a href="https://laravel.com" target="_blank" rel="noreferrer">Laravel</a></li>
            <li><a href="https://x.com/taylorotwell" target="_blank" rel="noreferrer">X</a></li>
            <li><a href="https://github.com/taylorotwell" target="_blank" rel="noreferrer">GitHub</a></li>
        </ul>
    </section>

</main>
</body>
</html>
