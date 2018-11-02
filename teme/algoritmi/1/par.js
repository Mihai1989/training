const {prompt} = require('../../../modules/prompt');

console.log('par(n)');

prompt([
	'n = ',
]).then(run);

function run(answers) {
	let [n] = answers;
	let r = par(n);
	console.log(r ? 'adevarat' : 'fals');
}

function par(n) {
	return n % 2 == 0;
	/*if (n % 2 == 0) {
		return true;
	} else {
		return false;
	}*/
}
