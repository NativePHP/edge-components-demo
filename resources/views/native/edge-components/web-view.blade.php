{{-- Inline HTML, so the screen renders the same every time with no network. --}}
<native:webview class="flex-1 w-full">
    <!doctype html>
    <html>
        <head>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <style>
                body { font-family: -apple-system, system-ui, sans-serif; margin: 0; padding: 24px; line-height: 1.5; }
                h1 { font-size: 26px; margin: 0 0 8px; }
                p { margin: 0 0 16px; color: #555; }
                .card { border: 1px solid #ddd; border-radius: 12px; padding: 16px; }
                @media (prefers-color-scheme: dark) {
                    body { background: #000; color: #fff; }
                    p { color: #aaa; }
                    .card { border-color: #333; }
                }
            </style>
        </head>
        <body>
            <h1>Hello from HTML</h1>
            <p>This content is rendered by the platform web view — WKWebView on iOS, WebView on Android.</p>
            <div class="card">
                <strong>Mix and match</strong>
                <p>Embed existing web content alongside native components on the same screen.</p>
            </div>
        </body>
    </html>
</native:webview>
