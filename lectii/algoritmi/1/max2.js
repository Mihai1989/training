const {prompt} = require('../../../modules/prompt');

console.log('max(a, b)');

prompt([
	'a = ',
	'b = ',
]).then(run);

function run(answers) {
	let [a, b] = answers;
	let r = max(a, b);
	console.log(`max(${a}, ${b}) =`, r);
}

function max(a, b) {
	return b > a ? b : a;
}