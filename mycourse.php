<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Recommendation System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <script src="course.js"></script>
</head>
<body>
  <div class="dropdown" id="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" id="course_catalog"><a href="http://localhost/CRS/admin/php/course.html">Home</a></button>
    <button class="btn btn-default dropdown-toggle" type="button" id="course_catalog"><a href="#">My Courses</a></button>
    <button class="btn btn-default dropdown-toggle" type="button" id="course_catalog"><a href="index.html">Logout</a></button>
  </div>
    <div class="content" style="background: url(course.jpg); height: 100vh;">
        <?php
            require_once("./php/getposts.php");
            getMainPosts();
        ?>
    </div>
    <script>
        window.onscroll = function() {myFunction()};
        
        var navbar = document.getElementById("dropdown");
        var sticky = navbar.offsetTop;
          
        function myFunction() {
          if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky")
          } else {
            navbar.classList.remove("sticky");
          }
        }
        $(document).ready(function(){
          $('.dropdown-submenu a.test').on("click", function(e)
          {
            $(this).next('ul').toggle();
            e.stopPropagation();
            e.preventDefault();
          });
        });
    </script>
</body>
</html>