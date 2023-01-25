<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <title>OnPrint</title>
    <link rel="stylesheet" href="Style/style.css">
    <style>
        .modal-dialog {
            height: 50%;
            width: 50%;
            margin: auto;
        }

        h3 {
            color: black;
        }

        .modal-header {
            color: white;
            background-color: #fff;
        }

        textarea {
            border: none;
            box-shadow: none !important;
            -webkit-appearance: none;
            outline: 0px !important;
        }

        .openmodal {
            margin-left: 35%;
            width: 25%;
            margin-top: 25%;
        }

        .icon1 {
            color: #007bff;

        }

        a {
            margin: auto;
        }

        input {
            color: #007bff;


        }
    </style>
</head>

<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href=''>OnPrint.</a></div>
            <div class="menu">
                <ul>
                    <li><a href="http://localhost/OnPrint/Function/homepage.php">Home</a></li>
                    <li><a href="#order">Order</a></li>
                    <li><a href="#profile">Our Profile</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="" class="btn-login">Sign Up</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!--Modal-->
    <div class="container">

        <!--Modal Content-->
        <div class="modal-content">

            <!-- Modal Header-->
            <div class="modal-header">
                <h3>Service Feedback </h3>

                <!--Close/Cross Button-->
                <button type="button" class="close" data-dismiss="modal" style="color: white;">&times;</button>
            </div>

            <!-- Modal Body-->
            <div class="modal-body text-center">
                <i class="far fa-file-alt fa-4x mb-3 animated rotateIn icon1"></i>
                <h3>Your opinion matters</h3>
                <h5>Help us improve our product? <strong>Give us your feedback.</strong></h5>
                <hr>
                <h6>Your Rating</h6>
            </div>

            <!-- Radio Buttons for Rating-->
            <div class="form-check mb-4">
                <input name="feedback" type="radio">
                <label class="ml-3">Very good</label>
            </div>
            <div class="form-check mb-4">
                <input name="feedback" type="radio">
                <label class="ml-3">Good</label>
            </div>
            <div class="form-check mb-4">
                <input name="feedback" type="radio">
                <label class="ml-3">Mediocre</label>
            </div>
            <div class="form-check mb-4">
                <input name="feedback" type="radio">
                <label class="ml-3">Bad</label>
            </div>
            <div class="form-check mb-4">
                <input name="feedback" type="radio">
                <label class="ml-3">Very Bad</label>
            </div>

            <!--Text Message-->
            <div class="text-center">
                <h4>What could we improve?</h4>
            </div>
            <textarea type="textarea" placeholder="Your Message" rows="3"></textarea>


            <!-- Modal Footer-->
            <div class="modal-footer">
                <a href="" class="btn btn-primary">Send
                    <i class="fa fa-paper-plane"></i>
                </a>
                <a href="" class="btn btn-outline-primary" data-dismiss="modal">Cancel</a>
            </div>

        </div>

    </div>

    </div>
    <div id="footer">
        <div class="wrapper">
            <b> Unless explicity stated otherwise,all material is copyright © OnPrint 2022
            </b>
        </div>
    </div>
</body>

</html>