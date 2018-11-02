const {prompt} = require('../../../modules/prompt');

console.log('gaseste x unde (ax + b = 0)');

prompt([
	'a = ',
	'b = ',
]).then(run);

function run(answers) {
	let [a, b] = answers.map(Number);
	console.log(`${a}x + ${b} = 0`);
	let r = calc(a, b);
	console.log('x =', r);
}

function calc(a, b) {
	if (a == 0) {
		if (b == 0) {
			return '∞';
		} else {
			return '∅';
		}
	} else {
		return -b / a;
	}
}