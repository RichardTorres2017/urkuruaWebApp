<?php 

?>
session_start();
$score = $_SESSION['score'];
?><html>
<head>
    <title>Math Quiz</title>
      <title>Math Quiz</title>
    <link rel="stylesheet" type="text/css" href="mathQuiz.css">
    
</head>
<body  >
    
    <output id="result"></output>
    <a href="firstScene.html">Pregunta!!</a>
 
    <script src="mathQuizFirstScene.js"></script>
    <span id="countdown" class="timer"></span>
    <img class="landscape" src="bomb.images/bomb1.png">
    <div id='divScore'><?php echo $score; ?></div>
 <script>
        var score = <?php echo $score; ?>;
        var queryString = decodeURIComponent(window.location.search);
        queryString = queryString.substring(1);
        document.write(queryString);


        </script>
</body>
</html>
