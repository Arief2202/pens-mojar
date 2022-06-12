<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="images/logomojar.png">
    <title>Select Role</title>
    <link rel="stylesheet" href="{{ url('css/app.css') }}" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('css/card-role.css') }}" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
        integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="text-center">Login Sebagai</h2>
                <div class="container">
                    <a class="card1" href="/home/kaprodi">
                        <h3>Kaprodi</h3>
                        <p class="small">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                        <div class="go-corner" href="#">
                            <div class="go-arrow">
                                →
                            </div>
                        </div>
                    </a>

                    <a class="card1" href="/home/up2ai">
                        <h3>UP2AI</h3>
                        <p class="small">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                        <div class="go-corner" href="#">
                            <div class="go-arrow">
                                →
                            </div>
                        </div>
                    </a>

                    <a class="card1" href="/home/pengusul">
                        <h3>Tim Pengusul</h3>
                        <p class="small">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                        <div class="go-corner" href="#">
                            <div class="go-arrow">
                                →
                            </div>
                        </div>
                    </a>

                    <a class="card1" href="/home/reviewer">
                        <h3>Tim Reviewer</h3>
                        <p class="small">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                        <div class="go-corner" href="#">
                            <div class="go-arrow">
                                →
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

    </div>

    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.4.0/perfect-scrollbar.js"></script>

    @yield('third_party_scripts')

    @stack('page_scripts')
</body>

</html>
