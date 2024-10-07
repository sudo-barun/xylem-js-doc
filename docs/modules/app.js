import mountComponent from '../node_modules/@xylem-js/xylem-js/dom/mountComponent.js';
import { CopyButton } from './CopyButton.js';

document.addEventListener('DOMContentLoaded', (ev) => {

	document.querySelectorAll('pre').forEach((preEl) => {

		try {
			const result = hljs.highlight(preEl.innerText, {language: preEl.getAttribute('data-language')});
			preEl.innerHTML = result.value;
		} catch (error) {
		}

		const wrapperEl = document.createElement('div');
		wrapperEl.style.position = 'relative';

		preEl.replaceWith(wrapperEl);

		wrapperEl.appendChild(preEl);
		mountComponent(new CopyButton({ textToCopy: preEl.innerText }), wrapperEl);

	});
});
