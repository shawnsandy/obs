<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>

    </title>
    <script src="https://cdn.polyfill.io/v2/polyfill.min.js"></script>
    <link href="/jarvis/css/blokkfont-b2e761c39d.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.iconmonstr.com/1.2.0/css/iconmonstr-iconic-font.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    @include(Jarvis::views('partials.admin-header'))
    <link rel="stylesheet" href="/css/blacktie/app.min.css">


    <meta name="viewport" content="width=device-width,initial-scale=1">
    <!-- Generate using http://realfavicongenerator.net/ -->

    <link rel="stylesheet" href="/jarvis/css/admin-070a62256f.css">
    @stack('styles')
     <link rel="stylesheet" href="/assets/backstory/backstory.css">
</head>

<body class="admin">
    <section class="is-paddingless dashboard">
        <div class="container-fluid">

            <div class="columns is-marginless">
                <div class="column sidebar">

                    <nav class="navbar">
                        <div class="navbar-brand">
                            <a class="navbar-item toggle-sidebar">
					<i class="im im-menu-list"></i> <span class="sidebar-text is-uppercase subtitle is-5">Admin</span>
					</a>
                        </div>
                    </nav>

                    <div class="columns">
                        <div class="column">
                            <aside class="menu">

                                <ul class="menu-list">

                                    <li>
                                        <a href="/jarvis/dashboard"><i class="im im-cubes"></i><span class="sidebar-text">Dash</span></a>
                                    </li>

                                    <li>
                                        <a href="{{ url("/admin/content") }}"><i class="im im-note-o"></i><span class="sidebar-text">Content</span></a>
                                    </li>

                                    <li>
                                        <a href="/jarvis/dashboard"><i class="im im-users"></i><span class="sidebar-text">Users</span></a>
                                    </li>

                                    <li>
                                        <a href="/jarvis/dashboard"><i class="im im-control-panel"></i><span class="sidebar-text">Options</span></a>
                                    </li>

                                    <li>
                                        <a href="/jarvis/dashboard"><i class="im im-gear"></i><span class="sidebar-text">Settings</span></a>
                                    </li>

                                </ul>

                            </aside>

                        </div>
                    </div>

                </div>

            </div>

            <div class="column is-paddingless">
                <div class="main">

                    <nav class="navbar is-transparent">
                        <div class="navbar-brand">
                            <a href="/dashboard.html" class="navbar-item"> <i class="im im-radio-button-circle"></i> </a>
                            <div class="navbar-item is-uppercase subtitle is-4 dashboard-name">
                                Dashboard
                            </div>
                        </div>
                        <div class="navbar-menu">
                            <div class="navbar-start">
                                <!-- navbar items -->
                            </div>

                            <div class="navbar-end">
                                <!-- navbar items -->
                                <a href="/" class="navbar-item"><i class="im im-angle-right default"></i></a>
                            </div>
                        </div>

                    </nav>

                    <div class="dashboard">

                        @yield('content')

                    </div>

                </div>
            </div>
        </div>

    </section>
<script src="https://unpkg.com/umbrellajs@2.10.1/umbrella.min.js"></script>

@include(Jarvis::views('partials.admin-footer'))
@stack('scripts')
@stack('inline-scripts')
</body>

</html>
