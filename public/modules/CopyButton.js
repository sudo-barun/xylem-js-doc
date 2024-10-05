import Component from '../node_modules/@xylem-js/xylem-js/dom/Component.js';
import createStore from '../node_modules/@xylem-js/xylem-js/core/createStore.js';
import parseHTML from '../node_modules/@xylem-js/xylem-js/dom/parseHTML.js';

export
class CopyButton extends Component
{
	build(attrs)
	{
		const textToCopy = attrs.textToCopy;
		const text$ = createStore('Copy');
		const disabled$ = createStore(false);

		return parseHTML([
			'<button>', { type: 'button', disabled: disabled$,
				class: 'btn btn-sm btn-light',
				style: 'position: absolute; right: 3px; top: 3px;',
				'@click': async () => {
					try {
						await navigator.clipboard.writeText(textToCopy);
						text$._('Copied!');
						disabled$._(true);
						setTimeout(() => {
							text$._('Copy');
							disabled$._(false);
						}, 2000);
					} catch (err) {
						console.error(err.message);
					}
				},
			},
			[
				text$,
			],
			'</button>',
		]);
	}
}
