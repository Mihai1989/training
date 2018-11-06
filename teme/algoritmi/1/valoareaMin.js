const {prompt} = require('../../../modules/prompt');

console.log('media aritmetica');

prompt([
	'a = ',
	'b = ',
	'c = '
]).then(run);

function run(answers) {
	let [a, b, c] = answers.map(Number);
	let r = mediaAritmetica(a, b, c);
	console.log(r);
}

function mediaAritmetica(a, b, c) {
	return (a + b + c) / 3;
}
