import { jsx as _jsx, Fragment as _Fragment } from "@xylem-js/jsx/jsx-runtime";
import Component from '../../node_modules/@xylem-js/xylem-js/dom/Component.js';
import mountComponent from '../../node_modules/@xylem-js/xylem-js/dom/mountComponent.js';
class HelloWorld extends Component {
    build() {
        return _jsx(_Fragment, { children: _jsx("div", { children: "Hello, World!" }) });
    }
}
mountComponent(new HelloWorld(), document.getElementById('app-container'));
//# sourceMappingURL=hello-world-jsx.js.map