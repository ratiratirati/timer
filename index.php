<html>
<head>
<meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/fonts.css">
</head>
<body>
<script>
    function countDown(secs,elem) {
        var element = document.getElementById(elem);
        element.innerHTML = "<p>გთხოვთ მოითმინოთ: ( "+secs+" ) წამი</p>";
        if(secs < 1) {
            clearTimeout(timer);
            element.innerHTML = '<p>დროის ათვლა მორჩა!</p>';
            element.innerHTML += '<a href="home.php">დააჭირეთ და გადადით</a>';
        }
        secs--;
        var timer = setTimeout('countDown('+secs+',"'+elem+'")',1000);
    }
</script>
<div id="status"></div>
<script>countDown(10,"status");</script>
</body>
</html>