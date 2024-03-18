<?php
$currentMonth = (isset($_GET['month'])) ? $_GET['month'] : date('n');
$currentYear = (isset($_GET['year'])) ? $_GET['year'] : date('Y');

$firstDayOfMonth = new DateTime("$currentYear-$currentMonth-01");
$lastDayOfMonth = new DateTime($firstDayOfMonth->format('Y-m-t'));

$prevMonth = clone $firstDayOfMonth;
$prevMonth->modify('-1 month');

$nextMonth = clone $lastDayOfMonth;
$nextMonth->modify('+1 day');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendrier</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&family=Cinzel:wght@400..900&family=Great+Vibes&family=Satisfy&family=Shadows+Into+Light&display=swap" rel="stylesheet">
    <style>
        .custom-text {
            font-family: 'Black Ops One', sans-serif;
            opacity: 0.8;
        }
    </style>
</head>

<body>

    <div class="bg-gray-800 p-8 rounded-md border-4 border-blue-400">
        <h2 class="text-lg font-bold mb-2 text-center text-white"><?= $firstDayOfMonth->format('F Y') ?></h2>

        <div class="flex justify-between mb-2">
            <a href="?month=<?= $prevMonth->format('n') ?>&year=<?= $prevMonth->format('Y') ?>" class="text-blue-100 hover:text-blue-400 text-sm">&lt; Mois précédent</a>
            <a href="?month=<?= $nextMonth->format('n') ?>&year=<?= $nextMonth->format('Y') ?>" class="text-blue-100 hover:text-blue-400 text-sm">Mois suivant &gt;</a>
        </div>

        <table class="w-full rounded-md mt-4">
            <thead>
                <tr>
                    <th class="border-0 text-lg pb-4 text-blue-400 border-b">Lun</th>
                    <th class="border-0 text-lg pb-4 text-blue-400 border-b">Mar</th>
                    <th class="border-0 text-lg pb-4 text-blue-400 border-b">Mer</th>
                    <th class="border-0 text-lg pb-4 text-blue-400 border-b">Jeu</th>
                    <th class="border-0 text-lg pb-4 text-blue-400 border-b">Ven</th>
                    <th class="border-0 text-lg pb-4 text-blue-400 border-b">Sam</th>
                    <th class="border-0 text-lg pb-4 text-blue-400 border-b">Dim</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $currentDate = clone $firstDayOfMonth;
                $startDayOfWeek = $currentDate->format('N');

                echo '<tr>';
                for ($i = 1; $i < $startDayOfWeek; $i++) {
                    echo '<td class="border-0 p-2 text-sm"></td>';
                }

                while ($currentDate <= $lastDayOfMonth) {
                    if ($currentDate->format('N') == 1) {
                        echo '<tr>';
                    }

                    $isCurrentDay = ($currentDate->format('Y-m-d') === date('Y-m-d'));

                    echo '<td class="border-0 p-2 text-center p-4';
                    echo $isCurrentDay ? ' bg-blue-400 text-white rounded-full' : ' hover:bg-blue-400 text-sm rounded-full';
                    echo '">';

                    echo '<a href="?day=' . $currentDate->format('d') . '&month=' . $currentDate->format('n') . '&year=' . $currentDate->format('Y') . '">';

                    if ($currentDate->format('m') == $firstDayOfMonth->format('m')) {
                        echo '<span class="custom-text text-white">' . $currentDate->format('d') . '</span>';
                    }

                    echo '</a>';

                    echo '</td>';

                    if ($currentDate->format('N') == 7) {
                        echo '</tr>';
                    }

                    $currentDate->modify('+1 day');
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>