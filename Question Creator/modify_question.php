
<?php

$questions = [
    [
        'id' => uniqid("test", true),
        'old_question' => "
    wats the intuition sdfrc
    ",
        'new_question' => "gcj ftd aituition bdgfh. ",
        //"lastSubmissionDate" => time() + 4800,
       // "createdAt" => time(),
        "totalMark" => 10,
        "difficultyLevel" => "Easy",
        "creator" => "ehssan" //username of the question maker

    ],
   
 [
        'id' => uniqid("test", true),
        'old_question' => "
    tdry ghr adr bcdf ahfht anjtk
    ",
        'new_question' => "trrd want geth feeet onay ftdd. ",
       
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
    <title>Questions</title>
</head>

<body>
   
    <H1>modify question</H1>
        <?php foreach ($questions as $q) { ?>
    
            <h4>Creator :<em><?php echo $q["creator"]; ?> </em></h4>
            <p>old_question :</p>


            <?php foreach (explode("\n", $q["old_question"]) as $line) { ?>
                <?php echo '<p>' . $line . '</p>' ?>
            <?php } ?>

            <p>
                new_question:
            </p>

            <?php foreach (explode("\n", $q["new_question"]) as $line) { ?>
                <?php echo '<p>' . $line . '</p>' ?>
            <?php } ?>


            



            <hr>
            <input type="submit" value="submit" name="submit">
        <?php } ?>
    </main>
   

</body>

</html>