<!doctype html>
<link rel="stylesheet" href="style-answer.css">

<body>


<div class="back_text">
  <h1>Thanks for a message me</h1>
  <p> I will reply your message in one hour.<br> Please feel free to go back
to home page and check out more information about.<br></p>
  <a href="./">Back to home page</a><br>
</div>

</div>
</body>
            <?php
            if (isset($_POST['email']) && is_string($_POST['email'])) {
                $to      = $_POST['email'];
                $subject = 'the subject';
                $message = 'hello world';
                $headers = 'From: auzinsweb@protonmail.com' . "\r\n" .
                    'Reply-To: auzinsweb@protonmail.com' . "\r\n" .
                    'X-Mailer: PHP/' . phpversion();
                
                $status = mail($to, $subject, $message, $headers);
                
                if($status) {
                    echo "email send";
                }
                else {
                    echo "email failed to send";
                }
            }

            ?>

            




