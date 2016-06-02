<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dude Chatbot - Kathmandu University</title>
    <link rel="stylesheet" href="<?php echo elixir('css/app.css'); ?>">
</head>
<body>
    <header class="header pure-menu pure-menu-horizontal">
        <a href="#" class="pure-menu-heading pure-menu-link">Dude</a>
    </header>
    <div class="pure-g container">

        <div class="pure-u-1 chat-history">
            Chat History
        </div>

        <div class="pure-u-1 chat-container">
            <form class="pure-form">
                <fieldset>
                    <legend>Umm! Say Something...</legend>

                    <input type="text" placeholder="What do you want to know? May be start with a 'Hi'.">

                    <button type="submit" class="pure-button pure-button-primary">Send</button>
                </fieldset>
            </form>
        </div>

        <div class="pure-u-1 app-info">
            <span class="text--center">
                Made By: Sanjib Raj Acharya
            </span>
        </div>
    </div>

    <script src="<?php echo elixir('js/app.js'); ?>"></script>
</body>
</html>