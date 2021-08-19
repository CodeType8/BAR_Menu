<!doctype html>
<html lang="en">

<head>
    <?php
    session_start();
    //if user already did login, then send user to main
    if (isset($_SESSION['codebarmenu'])) header("Location: main");
    ?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" type="image/png" href="/vis/favicon.ico" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="/vis/main.css">

    <!-- jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/9d8ea19088.js" crossorigin="anonymous"></script>

    <script type="text/javascript" src="/vis/vendor/moment-with-locales.js"></script>

    <script src="/vis/vendor/bootstrap-notify/bootstrap-notify.min.js"></script>

    <title>CodeBar Menu Login</title>

    <style>
        html,
        body {
            height: 100%;
        }

        body {
            background-image: url('bg.png');
            background-size: cover;
            background-repeat: no-repeat;
        }

        label {
            font-size: 1.5rem;
        }
    </style>
</head>

<body>
    <div class="h-100 row align-items-center">
        <div class="col-2"></div>
        <div class="col-8 text-center p-5" style="background-color: rgba(255, 255, 255, 0.77);font-family: aero_matics_bold;">
            <div class="d-flex flex-row">
                <div class="d-inline-flex flex-column w-100">
                    <form autocomplete="off">
                        <div class="form-row">
                            <div class="col">
                                <div class="row mb-2">
                                    <label class="col-5">ID</label>
                                    <div class="col">
                                        <input id="id" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="row align-items-end">
                                    <label class="col-5" style="margin-bottom: 0;">PASSWORD</label>
                                    <div class="col">
                                        <input id="pw" type="password" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-3" style="font-family: aero_matics_regular;">
                                <button id="loginButton" type="button" class="btn btn-secondary" style="width: 80%;height: 100%;font-size: 1.5rem;display: block;" onclick="login()">Login</button>
                                <script>
                                    //"enter" key press action
                                    $('#id, #pw').keyup(function(event) {
                                        if (event.keyCode === 13) $("#loginButton").click();
                                    });

                                    //login function -> login,php
                                    function login() {
                                        var id = $('#id').val();
                                        var pw = $('#pw').val();
                                        $.ajax({
                                            type: 'POST',
                                            url: 'login.php',
                                            data: 'id=' + id + '&pw=' + pw + '&timezone=' + Intl.DateTimeFormat().resolvedOptions().timeZone,
                                            success: function(msg) {
                                                //log in success, send user to main
                                                if (msg == 'success') window.location.href = "main";
                                                else alert('Access restricted');
                                            }
                                        });
                                    }
                                </script>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-2"></div>
    </div>
</body>

</html>