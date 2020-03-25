<?php
$f_name = "Abir";
$l_name = "Chowdhury";

?>


<!DOCTYPE html>
<html>
<head>
<title>PHP Codes</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>

      <?php
      /**
       *
       */
      class Book
      {
        var $title;
        var $author ;
        var $ISBN ;

        function __construct($_title,$_author,$_ISBN)
        {
          // code...
          $this->title = $_title;
          $this->author = $_author;
          $this->ISBN = $_ISBN ;
        }
         public function __toString()
        {
          // code...
          return $this->title . " " . $this->author . " " . $this->ISBN ;
        }
      }

       ?>

       <form class="w3-container w3-card-4" action="library.php" method="post">
  <h2 class="w3-text-blue">Input Form</h2>
  <p>Use any of the w3-text-color classes to color your labels.</p>
  <p>
  <label class="w3-text-blue"><b>Title</b></label>
  <input class="w3-input w3-border" name="title" type="text"></p>
  <p>
  <label class="w3-text-blue"><b>Author Name</b></label>
  <input class="w3-input w3-border" name="author" type="text"></p>
  <p>
    <label class="w3-text-blue"><b>ISBN Number</b></label>
    <input class="w3-input w3-border" name="ISBN" type="text"></p>
  <input type="submit" name="" value="Register">
</form>

      <?php
            $aTitle=$_POST["title"];
            $aAuthor=$_POST["author"];
            $aISBN=$_POST["ISBN"];

            $books = array();
            $count = 0;
            $book1 = new Book($aTitle,$aAuthor,$aISBN);
            $books[$count]=$book1;
            $count++;

            foreach ($books as $value) {
              // code...
              echo $value;
            }
       ?>

</body>
</html>

</body>
</html>
