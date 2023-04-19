<?php
    include ("header.php");
    include('MySQL.php');
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solution Page</title>
    <link rel="stylesheet" href="styles/DisplaySolutions.css">
    <link rel="stylesheet" href="styles/Home1.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.4/axios.min.js" integrity="sha512-LUKzDoJKOLqnxGWWIBM4lzRBlxcva2ZTztO8bTcWPmDSpkErWx0bSP4pdsjNH8kiHAUPaT06UXcb+vOEZH+HpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/9000.0.1/prism.min.js" integrity="sha512-UOoJElONeUNzQbbKQbjldDf9MwOHqxNz49NNJJ1d90yp+X9edsHyJoAs6O4K19CZGaIdjI5ohK+O2y5lBTW6uQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.17.1/components/prism-python.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/prism/9000.0.1/components/prism-java.js"></script>
    <link rel="stylesheet" href="styles/Prism1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <?php
        $title = urldecode($_GET['title']);
        $language = urldecode($_GET['language']);
    ?>
    <div class="content">
        <div class="question">
        <?php
            $res = $mysql->query("select description from questions where title = '$title'");
            $rows = $res->fetch_assoc();
            echo "<span id='title'>$title</span>";
            echo "<br><br>";
            echo "<div class='Popularity' style='display:flex'>";
                echo "<i class='fa-regular fa-thumbs-up' id='likes' style='cursor:pointer;margin-right:10px;font-size:22px'></i>";
                echo "<i class='fa-regular fa-thumbs-down' style='margin-left: 30px;cursor:pointer;color:white;margin: top 10px;font-size:22px' id='dislikes'></i>";

            echo "</div>";
            echo "<div  class= 'Question'>";
            echo nl2br($rows["description"]);
            echo "</div>";
        ?>
        </div>

        <div class="solution">
            
            <?php
                
                echo "<span id='title'>Solution : </span>";
                
                $title = explode(" ",$title);
                $string = '';
                foreach($title as $row){
                    $string = $string.$row;
                }
                echo "<pre id='code'style='background-color:#1C1A1A;color:white;text-shadow:none'>";
                    echo "<code class = 'language-$language'>";
                        echo "\n".file_get_contents(getcwd()."\\Solutions\\$string"."$language.txt");
                    echo "</code>";
                echo "</pre>";
            ?>
            
        </div>

    </div>
</body>
<script defer>
   
</script>
</html>