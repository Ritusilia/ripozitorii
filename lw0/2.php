<?php
function sumTime(string $oneTime, string $twoTime): string
{
    if (!strtotime($oneTime) || !strtotime($twoTime)) {
        return 'Некорректно введены данные';
    }
    return date('H:i:s', strtotime($oneTime) + strtotime($twoTime));
}
echo sumTime('24:25:32', '24:22:30');
