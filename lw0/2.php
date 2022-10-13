<?php
function sumTime(string $oneTime, string $twoTime): string
{
	if ((strtotime($oneTime) === false) || (strtotime($twoTime) === false)) {
		return 'Некорректно введены данные';
	} else {
		return date('H:i:s', strtotime($oneTime) + strtotime($twoTime));
	}
}
echo sumTime('23:20:30', '10:20:30');
