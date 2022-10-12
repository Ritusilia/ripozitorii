<?php
function sumTime($oneTime,$twoTime) {
	if ((strtotime($oneTime) === false) || (strtotime($twoTime) === false)){
		exit('Некорректно введены данные');
	} else {
		return date('H:i:s', strtotime($oneTime) + strtotime($twoTime));
	}
}
echo sumTime('m:20:30','10:20:30');