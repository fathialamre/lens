<!DOCTYPE html>
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{--        <title inertia>{{ config('app.name', 'Laravel') }}</title>--}}

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <!-- Scripts -->
    {{--@routes--}}

    {{--@vite(['resources/js/app.tsx', "resources/js/Pages/{$page['component']}.tsx"])--}}

    <script type="module" src="http://localhost:5173/resources/js/app.tsx"></script>
    @viteReactRefresh
    <script type="module">
        import RefreshRuntime from 'http://localhost:5173/@react-refresh'

        RefreshRuntime.injectIntoGlobalHook(window)
        window.$RefreshReg$ = () => {
        }
        window.$RefreshSig$ = () => (type) => type
        window.__vite_plugin_react_preamble_installed__ = true
    </script>

    @inertiaHead
</head>
<body class="font-sans antialiased">
@inertia
</body>
</html>
