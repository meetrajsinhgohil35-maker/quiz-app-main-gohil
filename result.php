<?php

$correctAnswers = [
1=>"PHP: Hypertext Preprocessor",
2=>"<?php",
3=>'$_POST',
4=>"echo",
5=>"==",
6=>"for",
7=>"function",
8=>'$_SESSION',
9=>"if",
10=>"count()",
11=>".",
12=>'$_SERVER',
13=>"break",
14=>"GET",
15=>".php",
16=>"session_start()",
17=>"define",
18=>"foreach",
19=>"Both include() and require()",
20=>'$_POST'
];

$score = 0;
$total = count($correctAnswers);
$userAnswers = $_POST['answers'] ?? [];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Quiz Result</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Quiz Results</h2>

<?php foreach ($correctAnswers as $number => $correct): ?>
    <div class="result">
        <p><strong>Question <?php echo $number; ?></strong></p>

        <?php
        if (isset($userAnswers[$number]) && $userAnswers[$number] === $correct) {
            echo "<p class='correct'>Correct ✔</p>";
            $score++;
        } else {
            echo "<p class='wrong'>Wrong ✘</p>";
            echo "<p>Correct Answer: " . htmlspecialchars($correct) . "</p>";
        }
        ?>
    </div>
<?php endforeach; ?>

<h3>Your Final Score: <?php echo $score . " / " . $total; ?></h3>

<br><br>
<a href="index.php">Try Again</a>

</body>
</html>
