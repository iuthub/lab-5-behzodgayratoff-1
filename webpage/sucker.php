<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Buy Your Way to a Better Education!</title>
    <link href="buyagrade.css" type="text/css" rel="stylesheet" />
</head>
<body>
    <?php if($_SERVER["REQUEST_METHOD"]!='POST') { ?>
        <h2>This page only accepts POST requests</h2>
    <?php } else { ?>
        <h1>Thanks, sucker!</h1>

        <p>Your information has been recorded.</p>
        <form action="">
                    <dl>
                        <dt>Name</dt>
                        <dd>
                            <?= $_REQUEST["username"] ?>
                        </dd>

                        <dt>Section</dt>
                        <dd>
                            <?= $_REQUEST["section"] ?>
                        </dd>

                        <dt>Credit Card</dt>
                        <dd>
                            <?= $_REQUEST["credit_card"] ?>
                        </dd>


                        <h3>Here are all the suckers who have submitted her:</h3>

                        <?php
                            $lines = file("sucker.txt");
                            foreach ($lines as $line) {
                        ?>
                            <p><?= $line ?></p>
                        <?php } ?>
                    </dl>
                </form>
    <?php } ?>
</body>
</html>