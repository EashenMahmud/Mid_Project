<?php

$comment = [
    [
        'id' => uniqid("test", true),
        'question' => "
    wats the intuition sdfrc
    ",
        'question2' => "gcj ftd aituition bdgfh. ",
        
        "totalMark" => 10,
        "difficultyLevel" => "Easy",
        "creator" => "ehssan" //username of the question maker

    ],

];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>comment</title>
</head>

<body>
   
    <H1>additional comment</H1>
        <?php foreach ($comment as $q) { ?>
    
            <h4>Creator :<em><?php echo $q["creator"]; ?> </em></h4>
            <p>question :</p>


            <?php foreach (explode("\n", $q["question"]) as $line) { ?>
                <?php echo '<p>' . $line . '</p>' ?>
            <?php } ?>

            <p>
                question2:
            </p>

            <?php foreach (explode("\n", $q["question2"]) as $line) { ?>
                <?php echo '<p>' . $line . '</p>' ?>
            <?php } ?>


            
    <form action="" method="post">
        <label for="additionalComment">additionalComment :</label>
        <textarea name="additionalComment" id="additionalComment" cols="50" rows="10"></textarea>
        <br>
        <br>
       

    

        <label for="difficulty">Difficulty :</label>
        <select name="difficulty" id="difficulty" required>
            <option value="easy">Easy</option>
            <option value="medium">medium</option>
            <option value="hard">Hard</option>

        </select>
        <br>
        <br>



            <hr>
            <input type="submit" value="submit" name="submit">
        <?php } ?>
    </main>
   

</body>

</html>