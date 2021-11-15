<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="side/iconfont.css">
    <link rel="stylesheet" href="title/style.css">

    <title>Emotional Neural Networks</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            text-decoration: none;
        }

        body {
            background-color: rgb(17, 24, 39);
            justify-content: space-evenly;
            height: 100vh;
            align-items: center;
        }

        .shell {
            float: right;
            width: 100px;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            background-color: rgb(17, 24, 39);
            border-radius: 10px;
            transition: .3s;
            overflow: hidden;
        }

        .box {
            display: block;
            height: 15%;
            width: 85%;
            margin: 9px;
            border-radius: 5px;
            position: relative;
            transition: .3s;
            color: rgb(160, 160, 175);
        }

        .box i {
            font-size: 60px;
            position: absolute;
            margin: 7px 0 0 13px;
        }

        .box:nth-child(1)::before,
        .box:nth-child(4)::before {
            content: '';
            display: block;
            width: 100%;
            height: 2px;
            background-color: rgb(55, 65, 81);
            position: absolute;
            bottom: -10px;
        }

        .box span {
            position: relative;
            top: 22px;
            left: 80px;
            font: 300 25px '';
            opacity: 0;
            transition: .1s;
        }

        .shell:hover {
            width: 270px;
        }

        .box:hover {
            background-color: rgb(55, 65, 81);
        }

        .shell:hover span {
            opacity: 1;
        }

        .box:hover {
            color: #fff;
        }

        .result {
            position: absolute;
            top: 70%;
            left: 50%;
            height: 30%;
            width: 50%;
            margin: -15% 0 0 -25%;
            color: wheat;
        }

        .show {
            border: 2px black solid;
            padding: 10px;
            font-size: 30px;
            background-color: #2f3640;
            border-radius: 7px;
            text-align: center;
        }

        .feedback1 {
            position: absolute;
            top: 100%;
            left: -20%;
            height: 30%;
            width: 40%;
            color: wheat;
        }

        .feedback2 {
            position: absolute;
            top: 100%;
            left: 80%;
            height: 30%;
            width: 40%;
            color: wheat;
        }

        @import url('https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900');

        * .but {
            min-height: 10vh;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
            position: relative;
            padding: 20px, 60px;
            display: flex;
            justify-content: center;
            align-items: center;
            background: rgba(0, 0, 0, 0.5);
            margin: 50px;
            transition: 1s;
            text-decoration: none;
            overflow: hidden;
            -webkit-box-reflect: below 1px linear-gradient(transparent, transparent, #0004);
        }

        .but:hover {
            background: var(--clr);
            box-shadow: 0 0 10px var(--clr),
                0 0 30px var(--clr),
                0 0 60px var(--clr),
                0 0 100px var(--clr), ;
        }

        .but::before {
            content: '';
            position: absolute;
            width: 40px;
            height: 400%;
            background: var(--clr);
            transition: 1s;
            animation: animate2 2s linear infinite;
            animation-delay: calc(0.33s * var(--i));
        }

        .but:hover::before {
            width: 120%;

        }

        @keyframes animate2 {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .but::after {
            content: '';
            position: absolute;
            inset: 4px;
            background: #0e1538;
            transition: 0.5s;
        }

        .but button {
            position: relative;
            z-index: 1;
            font-size: 2em;
            color: white;
            display: inline-block;
            background-color: #0e1538;
            border: none;
            opacity: 0.5;
            text-transform: uppercase;
            letter-spacing: 4px;
            transition: 0.5s;
        }

        .but:hover button {
            opacity: 1;
        }

        .d {
            position: absolute;
            top: 10%;
            left: 50%;
            transform: translate(-50%, -50%);
            height: 40px;
            width: 40%;
            padding: 10px;
        }
    </style>
</head>

<body>
    <?php
    if ($file = fopen("result.txt", "r")) {
        $flag = TRUE;
        $line = fgets($file);
        $result = explode("/", $line);
        $sent = $result[0];
        $emo = $result[1];
        $result = '';
        $result .= '<div class="show">';
        $result .= '"' . $sent . '"<br>';
        $result .= '<p class="author">';
        $result .= '&nbsp;&nbsp;--&nbsp;&nbsp;' . $emo . '<br>';
        $result .= '</div>';
        $result .= '<div class="feedback1">';
        $result .= '<div class="c">';
        $result .= '<a href="result.html" style="--clr:#22e622;--i:2;" class="but"><button>Right</button></a>';
        $result .= '</div>';
        $result .= '</div>';
        $result .= '<div class="feedback2">';
        $result .= '<div class="c">';
        $result .= '<a href="result.html" style="--clr:#ff22bb;--i:0;" class="but"><button>Wrong</button></a>';
        $result .= '</div>';
        $result .= '</div>';
    }
    fclose($file);
    ?>
    <div class="container">
        <span style="--i:1">E</span>
        <span style="--i:2">m</span>
        <span style="--i:3">o</span>
        <span style="--i:4">t</span>
        <span style="--i:5">i</span>
        <span style="--i:6">o</span>
        <span style="--i:7">n</span>
        <span style="--i:8">a</span>
        <span style="--i:9">l</span>
        <span style="--i:10">&nbsp;&nbsp;</span>
        <span style="--i:11">N</span>
        <span style="--i:12">N</span>

    </div>
    <div class="d">';
        <a href="index.html" style="--clr:#00ccff;--i:1;" class="but"><button>Next Sentence</button></a>;
    </div>
    <div class="result" id='toBeChanged'>
        <?php echo $result; ?>
    </div>
    <div class="shell">
        <a href="index.html" class="box"><i class="iconfont icon-home"></i><span> Home</span></a>
        <a href="source.html" class="box"><i class="iconfont icon-source"></i><span>Source</span></a>
        <a href="aboutUs.html" class="box"><i class="iconfont icon-about_us"></i><span>About us</span></a>
    </div>

</body>

</html>