<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Emotional Neural Networks</title>
</head>

<body>
    <?php
    $term = $_GET['term'];
    if ($file = fopen("NN.txt", "r")) {
        $flag = TRUE;
        $index = 0;
        while (!feof($file)) {
            $line = fgets($file);
            $result = explode("/", $line);
            $sent = $result[0];
            $emo = $result[1];
            if ($term == $sent) {
                $flag = FALSE;
                $result = '';
                $result .= '<div class="show">';
                $result .= '"' . $term . '"<br>';
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
                echo $result;
            }
        }
        fclose($file);
        if ($flag) {
            $result = '';
            $result .= '<div class="show">';
            $result .= '<p><b>Not Here</b>: We will update our database, sorry :(</p>';
            $result .= '</div>';
            echo $result;
        }
    }

    ?>
</body>

</html>