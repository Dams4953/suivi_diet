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


<h2 class="text-2xl font-bold mb-4 text-center"><?= $firstDayOfMonth->format('F Y') ?></h2>

<div class="flex justify-between mb-4">

    <a href="?month=<?= $prevMonth->format('n') ?>&year=<?= $prevMonth->format('Y') ?>" class="text-gray-500 hover:text-gray-700">&lt; Mois précédent</a>

    <a href="?month=<?= $nextMonth->format('n') ?>&year=<?= $nextMonth->format('Y') ?>" class="text-gray-500 hover:text-gray-700">Mois suivant &gt;</a>
</div>


<table class="w-full border-collapse border border-gray-300 h-96 w-96">
    <thead>
        <tr class="bg-gray-200 w-20">
            <th class="py-1 w-16">Lun</th>
            <th class="py-1 w-16">Mar</th>
            <th class="py-1 w-16">Mer</th>
            <th class="py-1 w-16">Jeu</th>
            <th class="py-1 w-16">Ven</th>
            <th class="py-1 w-16">Sam</th>
            <th class="py-1 w-16">Dim</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $currentDate = clone $firstDayOfMonth;

        $startDayOfWeek = $currentDate->format('N');

        echo '<tr>';
        for ($i = 1; $i < $startDayOfWeek; $i++) {
            echo '<td class="border border-gray-300 p-1"></td>';
        }

        while ($currentDate <= $lastDayOfMonth) {
            if ($currentDate->format('N') == 1) {
                echo '<tr>';
            }

            $isCurrentDay = ($currentDate->format('Y-m-d') === date('Y-m-d'));
        
            echo '<td class="border border-gray-300 p-1 text-center';
            echo $isCurrentDay ? ' bg-blue-500 text-white' : '';
            echo '">';

            echo '<a href="?day=' . $currentDate->format('d') . '&month=' . $currentDate->format('n') . '&year=' . $currentDate->format('Y') . '">';
            
            if ($currentDate->format('m') == $firstDayOfMonth->format('m')) {
                echo $currentDate->format('d');
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