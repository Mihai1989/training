const {prompt} = require('../../../modules/prompt');

console.log('ax + b = 0');
//ax=-b
//x=-b/a

prompt([
	'a = ',
	'b = ',
]).then(run);

function run(answers) {
	let [a, b] = answers.map(Number);
	let r = ecuatia1(a, b);
	console.log(r);
}

function ecuatia1(a, b) {
	return -b / a;
}
