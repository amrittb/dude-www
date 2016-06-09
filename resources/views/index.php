<!doctype html>
<html lang="en" xmlns:v-on="http://www.w3.org/1999/xhtml">
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
            <form class="pure-form" method="post" action="./ask">
                <fieldset>
                    <legend>Umm! Say Something...</legend>
                    <legend id="answer">{{ message }}</legend>

                    <input v-model='message' name="question" type="text" id="question">

                    <button type="submit" class="pure-button pure-button-primary" id="ask" v-on:click="send">Send</button>
                </fieldset>
            </form>
        </div>
    </div>

<!--    <script src="--><?php //echo elixir('js/app.js'); ?><!--">-->
<!--        $var vue = new Vue{-->
<!--            el: "#answer",-->
<!--            data:{-->
<!--                message:"Ask me anything!"-->
<!--            },-->
<!--            methods: {-->
<!--                send: {-->
                    this.answer = <?php echo url('./ask'); ?>
//                }
//            }
//        }
//    </script>




</body>
</html>
