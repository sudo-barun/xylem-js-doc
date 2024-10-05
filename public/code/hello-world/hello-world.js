import Component from '../../node_modules/@xylem-js/xylem-js/dom/Component.js';
import mountComponent from '../../node_modules/@xylem-js/xylem-js/dom/mountComponent.js';
import parseHTML from '../../node_modules/@xylem-js/xylem-js/dom/parseHTML.js';

class HelloWorld extends Component
{
	build()
	{
		return parseHTML([
			'<div>',
			[
				'Hello, World!',
			],
			'</div>',
		]);
	}
}

mountComponent(new HelloWorld(), document.getElementById('app-container'));
