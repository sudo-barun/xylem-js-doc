import mountComponent from '../node_modules/@xylem-js/xylem-js/dom/mountComponent.js';
import { CopyButton } from './CopyButton.js';

document.addEventListener('DOMContentLoaded', (ev) => {

	document.querySelectorAll('pre').forEach((el) => {

		try {
			const result = hljs.highlight(el.innerText, {language: el.getAttribute('data-language')});
			el.innerHTML = result.value;
		} catch (error) {
		}

		el.style.position = 'relative';
		el.style.overflow = 'visible';
		mountComponent(new CopyButton({ textToCopy: el.innerText }), el);

	});
});
