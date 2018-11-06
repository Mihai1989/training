const {prompt} = require('../../../modules/prompt');

console.log('tripluLuiB(a, b)');

prompt([
	'a = ',
]).then(run);

function run(answers) {
	let [a] = answers.map(Number);
	let r = tripluLuiB(a);
	console.log('triplu lui b este ' + r);
}

function tripluLuiB(a) {
	let b = a * 3;
	return b;
}
