<!doctype html>
<html lang="en" xmlns:v-on="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dude Chatbot - Kathmandu University</title>
    <link rel="stylesheet" href="<?php echo elixir('css/app.css'); ?>">
</head>
<body>
    <header class="header pure-menu pure-menu-horizontal">
        <a href="#" class="pure-menu-heading pure-menu-link">Dude</a>
    </header>
    <div id="wrapper">
        <div class="pure-g container">
            <div class="pure-u-1 chat-history">
                <ol class="chat-history__messages">
                    <li class="message-box message-box--sent">
                        <p class="message">
                            Hi
                        </p>
                    </li>

                    <li class="message-box message-box--recieved">
                        <p class="message">
                            Hey! So, Ask me something.
                        </p>
                    </li>
                </ol>
            </div>

            <div class="pure-u-1 chat-container">
                <form class="pure-form">
                    <input type="text" placeholder="May be start with a 'Hi'.">
                    <button type="submit" class="pure-button pure-button-primary">Send</button>
                </form>
            </div>
        </div>
    </div>
    <script src="<?php echo elixir('js/app.js'); ?>"></script>
</body>
</html>
