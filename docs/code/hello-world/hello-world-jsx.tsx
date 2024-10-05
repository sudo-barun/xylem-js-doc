import Component from '../../node_modules/@xylem-js/xylem-js/dom/Component.js';
import mountComponent from '../../node_modules/@xylem-js/xylem-js/dom/mountComponent.js';

class HelloWorld extends Component
{
	build()
	{
		return <>
			<div>
				Hello, World!
			</div>
		</>;
	}
}

mountComponent(new HelloWorld(), document.getElementById('app-container')!);
