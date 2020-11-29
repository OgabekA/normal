let sign = '';
let number = '';
let number1 = '';
let number2 = '';
let formula = '';
$(".number").click(function () {
	number = $(this).text();
	if (sign !== '') {
		number = number1 += $(this).text();
	} else {
		number = number2 += $(this).text();
	}
	$(".screen").html(number);
	display_result(number1 + sign + number2);
	formula = eval(number1 + sign + number2);
});
$(".sign").click(function () {
	sign = $(this).text();
	if (sign === '×') {
		sign = '*';
	}
	if (sign === '÷') {
		sign = '/';
	}
	if (sign === '+') {
		sign = '+';
	}
	if (sign === '-') {
		sign = '-';
	}
	if (sign === 'AC') {
		AC_buttons();
	}
	if (sign === '=') {
		display_result();
		AC_buttons(false);
	}
});

function AC_buttons(reset = false) {
	sign = '';
	number = '';
	number1 = '';
	number2 = '';
	if (!reset) {
		$(".screen").html(0);
	}
}

function display_result(num) {
	if (formula === '') {
		return false;
	}
}