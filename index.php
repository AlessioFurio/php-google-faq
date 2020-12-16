<?php
$faqs = [

    'domanda1' => [
        [
            'risposta1',
            'risposta2',
            'risposta3',
            'risposta4',
            'risposta5',
        ],
    ],

    'domanda2' => [
        [
            'risposta1',
            'risposta2',
            'risposta3',
            'risposta4',
            'risposta5',
        ],
    ],

    'domanda3' => [
        [
            'risposta1',
            'risposta2',
            'risposta3',
            'risposta4',
            'risposta5',
        ],
    ],

    'domanda4' => [
        [
            'risposta1',
            'risposta2',
            'risposta3',
            'risposta4',
            'risposta5',
        ],
    ],
];

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>php-google-faq</title>
        <link rel="stylesheet" href="dist/app.css">
    </head>
    <body>

        <?php
        foreach ($faqs as $key => $faq) { ?>
            <h1>
                <?php echo $key; ?>
            </h1>
            <?php
            foreach ($faq as $answer) {

                for ($i=0; $i <count($answer) ; $i++) { ?>

                    <p> <?php echo ($answer[$i]); ?> </p>

                    <?php
                }
            }
        }
        ?>

    </body>
</html>
