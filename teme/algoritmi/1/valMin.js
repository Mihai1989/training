const {prompt} = require('../../modules/prompt');

console.log('valMin');

prompt([
	'a = ',
	'b = ',
	'c = '
]).then(run);

function run(answers) {
	let [a, b, c] = answers.map(Number);
	let r = valMin(a, b, c);
	console.log(r);
}

function valMin(a, b, c) {
	for (var i = 0; i < [a, b, c].length; i++) {
		array[i]
	}
}
