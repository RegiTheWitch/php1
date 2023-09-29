<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sm1</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mooli&display=swap" rel="stylesheet">
</head>

<body>
    <div class="b1">
        <div class="block">
            <div class="container">
                <?php
                $s = 0;
                $studeArray = ["Павлов", "Игорев", "Никитин", "Колечкин", "Катамаранов", "Ивлев","Овечкин", "Пупкин"];
                echo '<p class="sm1_1">В группе всего: ' . count($studeArray) . ' студентов<br></p>';
                foreach ($studeArray as $key) {
                    echo '<p class="sm1_2"> - ' . $key . '<br></p>';
                }
                if (in_array("Сидоров", $studeArray)) {
                    echo  '<p class="sm1_2">В группе есть студент с фамилией Сидоров</p>';
                }
                $expelled = array_pop($studeArray);
                echo '<p class="sm1_2">Из КТИТСа исключили: ' . $expelled . '<br></p>';
                ?>
            </div>

        </div>
    </div>


    <br><br><br>
    <hr>
    <br>
    <br>

    <div class="b1">
        <div class="block">
            <div class="container">
                <?php
                $studeSchool = [
                    "Спортивный" => "Сидоров",
                    "Художественный" => "Емелина",
                    "Музыкальный" => "Иванова",
                    "Литературный" => "Петров",
                    "Биологический" => "Антонова"
                ];
                asort($studeSchool);

                ?>

                <div class="school">
                    <?
                    foreach ($studeSchool as $key => $value) { ?>
                        <div class="block_2">
                            <div class="school_name"><? echo $key ?></div>
                            <div class="stude_name"><? echo $value ?></div>
                        </div>

                    <? }
                    ?>

                </div>
            </div>

        </div>
    </div>


    <br><br><br>
    <hr>
    <br>
    <br>
    <?php
    $student = [
        'name' => 'Регина',
        'surname' => 'Фахрутдинова',
        'group' => '424 ВЕБ',
        'hobbi' => 'чтение книиг',
        'socium' => 'vk, nickname "fakhraaaaa"'
    ]
    ?>
    <div class="b1">
        <div class="block">
            <div class="container">
                <?
                echo 'Меня зовут ' . $student['surname'] . ' ' . $student['name'] . ', я студентка  4 курса группы ' . $student['group'] . ' . В свободное время мое хобби - ' . $student['hobbi'] . '.<br>' . $student['socium'];
                ?>
            </div>

        </div>
    </div>


</body>

</html>