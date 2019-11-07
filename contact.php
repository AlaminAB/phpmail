<!DOCTYPE html>
<html lang="en">
<head>

 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" type="text/css" href="Grid.css">
 <link rel="stylesheet" type="text/css" href="normalize.css">
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="contact.css">
 <link rel="stylesheet" type="text/css" href="queries.css">
 <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,300italic' rel='stylesheet' type='text/css'>



 <title>VCCverified - Contact Us</title>

</head>

<body>
    <sction class="section-form">


        <div class=form-box id="form">

            <div class="row">   
                <h2>We are happy to hear from you</h2>
            </div>


            <div class="row">
                <form method="post" action="mailer-new.php" class="contact-form">


                    <div class="row">   

                        <?php    


                        if ($_GET['success'] == 1) {  echo  

                            ''<div class="form-messages success">
                            Thank you! Your message has been sent.
                            </div>'';
                        }


                        if ($_GET['success'] == -1) {  echo    

                            ''<div class="form-messages error">
                            Oops you! something went wrong. please try again!
                            </div>''; }

                            ?>

                        </div>

                        <div class="row">


                            <div class="col span-1-of-3">
                                <label for="name">Name</label>
                            </div>

                            <div class="col span-2-of-3">
                                <input type="text" name="name" id="name" placeholder="Your name" required>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col span-1-of-3">
                                <label for="email">Email</label>
                            </div>

                            <div class="col span 2-of-3">
                                <input type="email" name="email" id="email" placeholder="Your email" required>
                            </div>    
                        </div>

                        <div class="row">
                            <div class="col span-1-of-3">
                                <label for="find-us">How did you find us?</label>
                            </div>

                            <div class="col span-2-of-3">
                                <select name="find-us" id="find-us">
                                    <option value="friends" selected>Friends</option>
                                    <option value="search">Search engine</option>
                                    <option value="ad">Advertisment</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col span-1-of-3">
                                <label>Newsletter?</label>
                            </div>

                            <div class="col span 2-of-3">
                                <input type="checkbox" name="news" id="news" cheked> Yes, please
                            </div>    
                        </div>

                        <div class="row">
                            <div class="col span-1-of-3">
                                <label>Drop us a line</label>
                            </div>

                            <div class="col span 2-of-3">
                                <textarea name="message" placeholder="Your massage"></textarea>
                            </div>    
                        </div>


                        <div class="row">
                            <div class="col span-1-of-3">
                                <label>&nbsp;</label>
                            </div>

                            <div class="col span 2-of-3">
                                <input type="submit" value="Send it!">
                            </div>    
                        </div>


                    </div>

                </form>

            </sction>

            
        </body>
        </html>