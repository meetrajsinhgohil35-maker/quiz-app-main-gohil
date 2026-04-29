<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$questions = [

1 => ["question" => "What does PHP stand for?",
      "options" => ["Personal Home Page", "Private Home Page", "PHP: Hypertext Preprocessor", "Public Hosting Page"],
      "answer" => "PHP: Hypertext Preprocessor"],

2 => ["question" => "Which symbol is used to start PHP code?",
      "options" => ["<php>", "<?php", "<script>", "<?"],
      "answer" => "<?php"],

3 => ["question" => "Which superglobal is used to collect form data?",
      "options" => ['$_GET', '$_POST', '$_SESSION', '$_COOKIE'],
      "answer" => '$_POST'],

4 => ["question" => "Which function is used to display output in PHP?",
      "options" => ["print()", "echo", "write()", "display()"],
      "answer" => "echo"],

5 => ["question" => "Which operator is used for comparison?",
      "options" => ["=", "==", "=>", "!="],
      "answer" => "=="],

6 => ["question" => "Which loop is used when number of iterations is known?",
      "options" => ["while", "for", "do-while", "foreach"],
      "answer" => "for"],

7 => ["question" => "Which keyword is used to create a function?",
      "options" => ["func", "function", "define", "method"],
      "answer" => "function"],

8 => ["question" => "Which array stores session variables?",
      "options" => ['$_SESSION', '$_POST', '$_SERVER', '$_FILES'],
      "answer" => '$_SESSION'],

9 => ["question" => "Which statement is used for decision making?",
      "options" => ["if", "loop", "switch", "break"],
      "answer" => "if"],

10 => ["question" => "Which function counts array elements?",
       "options" => ["length()", "size()", "count()", "total()"],
       "answer" => "count()"],

11 => ["question" => "Which symbol is used to concatenate strings?",
       "options" => ["+", ".", "&", "*"],
       "answer" => "."],

12 => ["question" => "Which variable is used to store server info?",
       "options" => ['$_SERVER', '$_POST', '$_ENV', '$_DATA'],
       "answer" => '$_SERVER'],

13 => ["question" => "Which keyword is used to exit a loop?",
       "options" => ["stop", "exit", "break", "end"],
       "answer" => "break"],

14 => ["question" => "Which method sends data via URL?",
       "options" => ["POST", "GET", "PUT", "SEND"],
       "answer" => "GET"],

15 => ["question" => "Which file extension is used for PHP?",
       "options" => [".html", ".php", ".xml", ".js"],
       "answer" => ".php"],

16 => ["question" => "Which function starts a session?",
       "options" => ["session_start()", "start_session()", "begin()", "init_session()"],
       "answer" => "session_start()"],

17 => ["question" => "Which keyword defines a constant?",
       "options" => ["const", "define", "constant", "var"],
       "answer" => "define"],

18 => ["question" => "Which loop works only with arrays?",
       "options" => ["for", "while", "foreach", "do-while"],
       "answer" => "foreach"],

19 => ["question" => "Which function is used to include another file?",
       "options" => ["attach()", "include()", "require()", "Both include() and require()"],
       "answer" => "Both include() and require()"],

20 => ["question" => "Which variable holds form data?",
       "options" => ['$_POST', '$_FORM', '$_DATA', '$_VALUE'],
       "answer" => '$_POST']
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Quiz</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>PHP Quiz Application (20 MCQs)</h2>

<form action="result.php" method="post">

<?php foreach ($questions as $number => $q): ?>
    <div class="question">
        <p><strong><?php echo $number . ". " . htmlspecialchars($q["question"]); ?></strong></p>

        <?php foreach ($q["options"] as $option): ?>
            <label>
                <input type="radio"
                       name="answers[<?php echo $number; ?>]"
                       value="<?php echo htmlspecialchars($option); ?>" required>
                <?php echo htmlspecialchars($option); ?>
            </label><br>
        <?php endforeach; ?>
    </div>
<?php endforeach; ?>

<br>
<input type="submit" value="Submit Quiz">

</form>

</body>
</html>
