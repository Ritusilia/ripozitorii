<?php
function calculator(string $expressionString): float
{
    $checklistSigns = ['+', '-', '*', '/'];
    $checklistNums = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
    $correctExpression = '';

    if (strpos($expressionString, '/0')) {
        return 'Incorrect input';
    } else {
        $numericalExpressionArray = str_split($expressionString);
    }

    foreach ($numericalExpressionArray as $keyArray) {
        if (!(in_array($keyArray, $checklistSigns) && in_array($keyArray, $checklistNums))) {
            $correctExpression .= $keyArray;
        } else {
            return 'Incorrect input';
        }
    }
    return eval('return ' . $correctExpression . ';');
}

echo calculator('13+6*3');
