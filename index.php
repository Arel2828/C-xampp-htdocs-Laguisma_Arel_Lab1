<html>
<head>
    <title>LabExer1</title>
</head>
<body>
    <div style="text-align: center; justify-content: center; margin-left: 700px;  margin-top: 150px; border: 3px solid #333; border-radius: 15px; padding: 20px; display: inline-block;">
        <?php
        $demo1 = "AREL CHIRSTIAN G. LAGUISMA!";
        $subject = "Age: 19 Gender: M  Year: 3rd  Section: BS501";
        $PL = "PHP";

        // Function to color each letter differently
        function colorize($text) {
            $colors = ['#FF5733', '#33FF57', '#3357FF', '#FF33A6', '#FFFF33', '#FF3333', '#33FFF2'];
            $colored_text = '';
            $i = 0;
            foreach (str_split($text) as $char) {
                $colored_text .= '<span style="color:' . $colors[$i % count($colors)] . ';">' . $char . '</span>';
                $i++;
            }
            return $colored_text;
        }
        ?>

        <h1 style="font-family: 'Courier New', Courier, monospace;">
            <?php echo colorize($demo1); ?>
        </h1>
        <h3 style="color: white;"><?php echo "$subject"; ?></h3>
        <?php echo "<h2 style='color: white;'>Programming language: $PL</h2>" ?>
    </div>
</body>
<style>
    body {
        margin: auto;
        font-family: -apple-system, BlinkMacSystemFont, sans-serif;
        overflow: auto;
        background: linear-gradient(315deg, rgba(101,0,94,1) 3%, rgba(60,132,206,1) 38%, rgba(48,238,226,1) 68%, rgba(255,25,25,1) 98%);
        animation: gradient 15s ease infinite;
        background-size: 400% 400%;
        background-attachment: fixed;
    }

    @keyframes gradient {
        0% {
            background-position: 0% 0%;
        }
        50% {
            background-position: 100% 100%;
        }
        100% {
            background-position: 0% 0%;
        }
    }

    .wave {
        background: rgb(255 255 255 / 25%);
        border-radius: 1000% 1000% 0 0;
        position: fixed;
        width: 200%;
        height: 12em;
        animation: wave 10s -3s linear infinite;
        transform: translate3d(0, 0, 0);
        opacity: 0.8;
        bottom: 0;
        left: 0;
        z-index: -1;
    }

    .wave:nth-of-type(2) {
        bottom: -1.25em;
        animation: wave 18s linear reverse infinite;
        opacity: 0.8;
    }

    .wave:nth-of-type(3) {
        bottom: -2.5em;
        animation: wave 20s -1s reverse infinite;
        opacity: 0.9;
    }

    @keyframes wave {
        2% {
            transform: translateX(1);
        }

        25% {
            transform: translateX(-25%);
        }

        50% {
            transform: translateX(-50%);
        }

        75% {
            transform: translateX(-25%);
        }

        100% {
            transform: translateX(1);
        }
    }
</style>
</html>
