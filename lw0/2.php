<?php
function sumTime(string $oneTime, string $twoTime): string
{
	if ((strtotime($oneTime) === false) || (strtotime($twoTime) === false)) {
		exit('Некорректно введены данные');
	} else {
		return date('H:i:s', strtotime($oneTime) + strtotime($twoTime));
	}
}
echo sumTime('22:20:30', '10:20:30');
