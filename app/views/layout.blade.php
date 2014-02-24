<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Destruktiv</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/cosmo/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
    <style>
        body {
            padding-top: 70px;
        }

        textarea {
            resize: vertical;
        }

        .profile-image-wall {
            margin-right: 10px;
            height: 70px;
            width: 70px;
        }

        .status {
            margin-bottom: 20px;
        }

        .update-status {
            min-height: 3em;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ route("home") }}">
                        <i class="fa fa-rocket"></i>
                        Destruktiv
                    </a>
                </div>

                <div class="navbar-collapse navbar-right collapse">
                    <ul class="nav navbar-nav">
                        @if (Auth::check())
                            <li><a href="{{ route("profile") }}">
                                    <i class="fa fa-user fa-fw"></i>
                                    {{ Auth::user()->name }}
                            </a></li>
                            <li><a href="{{ route("logout") }}">
                                <i class="fa fa-sign-out fa-fw"></i>
                                Logga ut
                            </a></li>
                        @else
                            <li><a href="{{ route("register") }}">
                                <i class="fa fa-pencil fa-fw"></i>
                                Registrera
                            </a></li>
                            <li><a href="{{ route("login") }}">
                                <i class="fa fa-sign-in fa-fw"></i>
                                Logga in
                            </a></li>
                        @endif
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>

        @if (Session::has("message"))
            <p class="alert alert-success">
                {{ Session::get("message") }}
            </p>
        @endif
        
        @if (Session::has("warning"))
            <p class="alert alert-warning">
                {{ Session::get("warning") }}
            </p>
        @endif

        @if (Session::has("error"))
            <p class="alert alert-danger">
                {{ Session::get("error") }}
            </p>
        @endif

        <div class="row">
            <div class="col-sm-3">
                Sidebar
            </div>

            <div class="col-sm-9">
                @yield("content")
            </div>
        </div>
    </div>
    <script src="//code.jquery.com/jquery-2.1.0.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</body>

</html>
