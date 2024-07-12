<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
        <link rel="stylesheet" type = "text/css" href="assets/styles/styleLight.css" id="colorTheme"> 
        
        <title>Contact Me</title>
    </head>

    <body class="container-fluid h-100 d-flex flex-column p-0">
        <header id="headerContainer"></header>

        <div class="container-fluid mt-5 mb-2">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 mt-5 text-center">
                    <h1>Contact Me</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <form id="contactForm">
                    <div class="row justify-content-center">
                        <div class="form-group col-6 col-md-3">
                            <label for="inputFirstName">First Name</label>
                            <input type="text" class="form-control" id="inputFirstName" name="firstName" placeholder="First name">
                        </div>
                        <div class="col-6 col-md-3">
                            <label for="inputLastName">Last Name</label>
                            <input type="text" class="form-control" id="inputLastName" name="lastName" placeholder="Last name">
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="form-group col-md-6">
                            <label for="inputEmail">Email</label>
                            <input type="email" class="form-control" id="inputEmail" name="email" placeholder="example@example.com">
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="form-group col-md-6">
                            <label for="inputSubject">Subject</label>
                            <input type="text" class="form-control" id="inputSubject" name="subject" placeholder="Re: Application">
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="form-group col-md-6">
                            <label for="inputMessage">Message</label>
                            <textarea type="text" class="form-control" rows="5" id="inputMessage" name="message" placeholder="Hello Melanie..."></textarea>
                        </div>
                    </div>
                    <div class="row justify-content-center mt-1">
                        <div class="col-12 col-md-6">
                            <button class="btn btn-primary" type="submit" id="sendEmail">Send Email</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>


        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/navbar.js"></script>
        <script src="assets/js/email.js"></script>
        
    </body>
</html>