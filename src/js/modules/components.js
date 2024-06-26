const Components = {
  $tooltip: $("[data-toggle='tooltip']"),
  $tab: $("[data-toggle='tab']"),
  $spy: $("[data-spy='scroll']"),
  init() {
    const _ = this

    if (_.$tooltip.length) {
      const tooltip = require('bootstrap/y_js/dist/tooltip')
      _.$tooltip.tooltip()
    }

    if (_.$tab.length) {
      const tooltip = require('bootstrap/y_js/dist/tab')
      _.$tooltip.tooltip()
    }

    if (_.$spy.length) {
      const spy = require('bootstrap/y_js/dist/scrollspy')
    }
  }
}

export default Components
