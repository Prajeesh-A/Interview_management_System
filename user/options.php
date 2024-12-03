<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        body {
            background: #dfe6e9;
            font-family: 'Roboto', sans-serif;
            font-weight: 100;
            user-select: none;
        }

        .container {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            vertical-align: center;
        }

        .button-container {
            display: flex;
            justify-content: center;
            vertical-align: center;
            text-align: center;
            align-items: center;
        }

        .button {
            display: none;
            background: #0984e3;
            color: white;
            border-radius: 15px;
            width: 500px;
            height: 100px;
            font-size: 50px;
            line-height: 100px;
            font-weight: 400;
            cursor: pointer;
            transition: all 100ms ease-in-out;
        }

        .button:hover {
            background: #74b9ff;
            transform: scale(1.05);
        }

        .button:active {
            transform: scale(0.95);
        }

        .opt-container {
            display: flex;
            flex-direction: column;
            width: 500px;
            text-align: center;
        }

        .opt-container span {
            font-size: 30px;
            color: #2d3436;
            margin-bottom: 20px;
        }

        .row {
            display: flex;
            flex-direction: row;
            justify-content: center;
        }

        .option {
            display: flex;
            flex-direction: column;
            width: 150px;
            height: 150px;
            border-radius: 15px;
            background: #fff;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            cursor: pointer;
            transition: all 100ms ease-in-out;
            margin: 10px;
            animation: popUp 1s ease-in-out both;
        }

        .option:hover {
            transform: scale(1.05);
        }

        .option:active {
            transform: scale(0.95);
        }

        .option .dept {
            font-weight: bold;
            transform: translateY(-17px);
        }

        .continue {
            position: relative;
            display: flex;
            width: 100%;
            height: 50px;
            background: white;
            text-align: center;
            line-height: 50px;
            border-radius: 25px;
            justify-content: center;
            align-items: center;
            font-size: 20px;
            overflow: hidden;
            cursor: pointer;
            margin-top: 10px;
            transition: all 100ms ease-in-out;
        }

        .continue p {
            color: grey;
        }

        .continue:hover p {
            color: white;
        }

        .continue:hover .cont_overlay {
            transform: translate(0px, 0px);
        }

        .continue:active {
            transform: scale(0.9);
        }

        .cont_overlay {
            z-index: 0;
            display: flex;
            position: absolute;
            align-self: left;
            background: #3498db;
            height: 200px;
            width: 100%;
            transform: translate(-500px, 0px);
            transition: all 300ms ease-in-out;
        }

        .continue p {
            z-index: 2;
        }

        .choice-container {
            display: none;
            justify-content: center;
            align-items: center;
            vertical-align: center;
        }

        #button {
            width: 200px;
            height: 50px;
            background: #0984e3;
            text-align: center;
            color: white;
            font-size: 20px;
            line-height: 50px;
            border-radius: 15px;
            margin-right: 10px;
            margin-top: 10px;
            cursor: pointer;
            transition: all 100ms ease-in-out;
        }

        #button:hover {
            transform: scale(1.05);
        }

        #button:active {
            transform: scale(0.95);
        }

        @keyframes popUp {
            0% {
                transform: scale(0);
            }

            25% {
                transform: scale(1.05);
            }

            50% {
                transform: scale(0.95);
            }

            75% {
                transform: scale(1);
            }

            100% {
                transform: scale(1);
            }
        }

        @keyframes fadeOutLeft {
            0% {
                opacity: 1;
            }

            100% {
                transform: translate(-100px, 0px);
                opacity: 0;
            }
        }

        @keyframes fadeInRight {
            0% {
                opacity: 0;
                transform: translate(100px, 0px);
            }

            100% {
                opacity: 1;
                transform: translate(0px, 0px);
            }
        }

        @keyframes fadeInLeft {
            0% {
                opacity: 0;
                transform: translate(-100px, 0px);
            }

            100% {
                opacity: 1;
                transform: translate(0px, 0px);
            }
        }

        @keyframes fadeOutRight {
            0% {
                opacity: 1;
                transform: translate(0px, 0px);
            }

            100% {
                opacity: 0;
                transform: translate(100px, 0px);
            }
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;1,100&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div class="container">
        <div class="opt-container">
            <span>Choose your options</span>
            <div class="row">
                <div class="option" id="mcdonalds">
                    <a href="ct.php"><img src="https://cdn.vectorstock.com/i/preview-1x/48/15/computer-network-logo-design-monitor-display-vector-34214815.webp" width=150 height=150></a>
                    <div class="dept">CT</div>
                </div>
                <div class="option" id="chipotle">
                    <a href="ce.php"><img src="https://cdn.vectorstock.com/i/preview-1x/02/40/railway-worker-pixel-perfect-gradient-linear-icon-vector-46910240.webp" width=100 height=100></a>
                    <div class="dept">CE</div>
                </div>
                <div class="option" id="panera">
                    <a href="me.php"><img src="https://cdn.vectorstock.com/i/preview-1x/08/96/icon-mechanical-gears-vector-20000896.webp" width=150 height=150></a>
                    <div class="dept">ME</div>
                </div>
            </div>
            <div class="row">
                <div class="option" id="wendys">
                    <a href="el.php"><img src="https://cdn.vectorstock.com/i/preview-1x/63/88/hand-technology-logo-template-icon-symbol-vector-40356388.webp" width=150 height=150></a>
                    <div class="dept">EL</div>
                </div>
                <div class="option" id="bww">
                    <a href="eee.php"><img src="https://cdn.vectorstock.com/i/preview-1x/66/05/electrical-tool-symbol-logo-design-template-vector-33656605.webp" width=100 height=100></a>
                    <div class="dept">EEE</div>
                </div>
            </div>

            <div class="continue">
                <div class="cont_overlay"></div>
                <p><a style="color: inherit; text-decoration: none" href="viewCandidate.php">PREVIOUS</a></p>
            </div>
        </div>

        <div class="button-container">
            <div class="button">PICK A PLACE</div>
        </div>
        <div class="choice-container">
            <div class="main-img"><img url="placeholder.png" width=400 height=400</div>
                <div class="button-container">
                    <div class="back-button" id='button'>BACK</div>
                    <div class="again-button" id='button'>TRY AGAIN</div>
                </div>
            </div>
        </div>
        <script>
            var options = [];

            $(document).ready(function() {
                var i = 0;
                // Adds load-in animation to options
                $(".option").each(function() {
                    $(this).css("animation-delay", i + "ms");
                    i += 100;
                    $(this).one("webkitAnimationEnd oanimationend msAnimationEnd animationend", function(e) {
                        $(this).css("animation", "none");
                    });
                });
            });

            $(".option").click(function() {
                if (options.includes($(this).attr("id"))) {
                    const index = options.indexOf($(this).attr("id"));
                    if (index > -1) {
                        options.splice(index, 1);
                        $(this).css("opacity", "1");
                    }
                } else {
                    options.push($(this).attr("id"));
                    $(this).css("opacity", "0.5");
                }
                console.log(options);
            });
            // Continue button pressed
            // Hide options page
            // Show choice page
            $(".continue").click(function() {
                $(".opt-container").css("animation", "fadeOutLeft 1s ease-in-out forwards");
                $(".opt-container").one("webkitAnimationEnd oanimationend msAnimationEnd animationend", function(e) {
                    $(this).css("display", "none");
                    $(".choice-container").css("display", "flex");
                    $(".choice-container").css("animation", "fadeInRight 1s ease-in-out forwards");
                    $(".choice-container").one("webkitAnimationEnd oanimationend msAnimationEnd animationend", function(e) {});
                });


            });
        </script>
</body>

</html>