<html>
    <head>
        <meta charset="utf-8">
        <title>jQuery Validation Plugin Examples</title>

        <!-- Bootstrap CSS used for styling the demo pages-->
        <link rel="stylesheet" href="css/jquery.mobile-1.3.2.css">
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <!-- AJAX call on success -->
        <form class="form" id="example4">
            <div class="form-group">
                <label>AJAX call on success</label>
            </div>
            <div class="form-group">
                <label for="example4-email">Email address</label>
                <input type="email" class="form-control" id="example4-email" name="example4-email" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="example1-password">Password</label>
                <input type="password" class="form-control" id="example4-password" name="example4-password" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <!-- Load jQuery and jQuery-Validate scripts -->
        <script src="js/jquery-1.8.2.min.js"></script>
		<script src="jsjquery.mobile-1.3.2.js"></script>
        <script src="js/jquery_validate.js"></script>
        <script>
            // When the document is ready
            $(document).ready(function () {
                //validation rules
                $("#example4").validate({
                    rules: {
                        "example4-email": {
                            required: true,
                            email: true
                        },  
                        "example4-password": {
                            required: true,
                            minlength: 5
                        } 
                    },
                    //perform an AJAX post to ajax.php
                    submitHandler: function() {
                        $.post('ajax.php', 
                        $('form#example4').serialize() , 
                        function(data){
                            alert(data.msg);
                        }, "json");
                    }
                });
            });
            
        </script>
    </body>
</html>
