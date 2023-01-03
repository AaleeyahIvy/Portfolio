use PHPMailer\PHPMailer\PHPMailer;

<?php
$mail = new PHPMailer();
                $mail->isSMTP();
                $mail->SMTPDebug = SMTP::DEBUG_SERVER;
                $mail->Host = 'smtp.gmail.com';
                $mail->Port = 587;
                $mail->SMTPSecure = 'tls';
                $mail->SMTPAuth = true;
                $mail->Username = 'aaleeyah@yinyangapp.com';
                $mail->Password = 'dkopxyljgzbkoqlw'; //Set up 2-step authentication and use the app super password given by google admin //remember to hide this when published to github
                $mail->addReplyTo('austin@yinyangapp.com');
                $mail->addAddress($email);
                $mail->setFrom('aaleeyah@yinyangapp.com', 'Yin Yang Admin/Developer');
                $mail->Subject = 'Email Verification';
                $mail->isHTML(true);      
                $mail->msgHTML('<html>
                <body style="height: 600px; width:600px; margin:auto;">
                    <h1 style="background-image:linear-gradient(to right, #eea2a2 0%, #bbc1bf 19%, #57c6e1 42%, #b49fda 79%, #7ac5d8 100%); text-align:center;"> Welcome, ' . $username . '</h1>
                    <p>Thanks for signing up to the yin yang app, we appreciate the support and hope you enjoy your stay.
                        To get started please verify your email: yinyangapp.com/verify:token113242424
                    </p>
                    <footer style="position:fixed; left:0; bottom:0; width:100%; text-align:center;">
                    <hr>
                    <div style="font-weight:bold"><a href="www.yinyangapp.com">Yin Yang App 2022</a></div>
                    <div>Thank you for supporting us</div>
                    <div>Follow us on social media</div>
                    <div><a href="www.github.com/yinyangapp">Our github repo!Github</a> <a href="www.instagram.com/yinyangapp">Instagram</a></div>
                    <hr>
                    </footer>
                </body>
            </html>');
                $mail->AltBody = 'This message is written in HTML';
            if (!$mail->send()) {
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                echo 'Message was sent to ' . $email;
            }

?>
