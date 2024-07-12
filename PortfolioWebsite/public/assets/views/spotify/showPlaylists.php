<!DOCTYPE html>
<html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
        <link rel="stylesheet" type = "text/css" href="assets/styles/styleLight.css" id="colorTheme"> 

        <title>Playlists</title>
    </head>
    <body class="container-fluid h-100 d-flex flex-column p-0">

        <header id="headerContainer"></header>

         <div class="container-fluid mt-5 mb-2">
            <div class="row text-center justify-content-center">
                <div id="header" class = "col-md-8 text-center mt-5 box">
                    <h1>User Playlists</h1>
                </div>
                <div class="col-md-6">
                    <div id="replace">
                        <button id="getPlaylistsBtn" class="btn btn-primary">Get Playlists</button>
                    </div>
                    <ul id="playlistList" class="list-unstyled"></ul>
                </div>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="/assets/js/navbar.js"></script>
        <script src="assets/js/playlists.js"></script>

    </body>
</html>