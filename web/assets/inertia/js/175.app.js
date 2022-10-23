(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[175],{

/***/ "./node_modules/vue-loader/lib/index.js?!./resources/js/Pages/Visualisation/Graph.vue?vue&type=script&lang=js&":
/*!*******************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib??vue-loader-options!./resources/js/Pages/Visualisation/Graph.vue?vue&type=script&lang=js& ***!
  \*******************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _Shared_Layout__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @/Shared/Layout */ \"./resources/js/Shared/Layout.vue\");\n\n \n\n\n/* harmony default export */ __webpack_exports__[\"default\"] = ({\n  metaInfo: { title: 'Start' },\n  layout: _Shared_Layout__WEBPACK_IMPORTED_MODULE_0__[\"default\"],\n  \n  props: {\n    user: Object,\n  }\n  \n});\n\n\n//# sourceURL=webpack:///./resources/js/Pages/Visualisation/Graph.vue?./node_modules/vue-loader/lib??vue-loader-options");

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/Pages/Visualisation/Graph.vue?vue&type=template&id=071a605e&":
/*!*****************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??ref--5!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/Pages/Visualisation/Graph.vue?vue&type=template&id=071a605e& ***!
  \*****************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"render\", function() { return render; });\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"staticRenderFns\", function() { return staticRenderFns; });\nvar render = function render() {\n  var _vm = this,\n    _c = _vm._self._c\n  return _c(\"div\", [\n    _vm._m(0),\n    _vm._v(\" \"),\n    _c(\"div\", { staticClass: \"px-4 py-8 md:p-12\" }, [\n      _c(\"h1\", { staticClass: \"font-bold text-3xl\" }, [\n        _vm._v(\n          \"\\n            Визуализация производственного графа - граф 1\\n        \"\n        ),\n      ]),\n      _vm._v(\" \"),\n      _c(\"div\", { staticClass: \"mb-6 flex justify-between items-center\" }),\n      _vm._v(\" \"),\n      _c(\"hr\"),\n      _vm._v(\" \"),\n      _c(\n        \"h3\",\n        { staticClass: \"font-bold\" },\n        [\n          _c(\n            \"inertia-link\",\n            {\n              staticClass: \"text-indigo-400 hover:text-indigo-600\",\n              attrs: { href: _vm.route(\"uploads.maindata\") },\n            },\n            [_vm._v(\"Основные данные\")]\n          ),\n          _vm._v(\" \"),\n          _c(\"span\", { staticClass: \"text-indigo-400 font-medium\" }, [\n            _vm._v(\"/\"),\n          ]),\n          _vm._v(\" \"),\n          _c(\n            \"inertia-link\",\n            {\n              staticClass: \"text-indigo-400 hover:text-indigo-600\",\n              attrs: { href: _vm.route(\"uploads.graph\") },\n            },\n            [_vm._v(\"Производственный граф\")]\n          ),\n          _vm._v(\" \"),\n          _c(\"span\", { staticClass: \"text-indigo-400 font-medium\" }, [\n            _vm._v(\"/\"),\n          ]),\n          _vm._v(\" \"),\n          _c(\n            \"inertia-link\",\n            {\n              staticClass: \"text-indigo-400 hover:text-indigo-600\",\n              attrs: { href: _vm.route(\"uploads.graph\") },\n            },\n            [_vm._v(\"Граф 1\")]\n          ),\n          _vm._v(\" \"),\n          _c(\"span\", { staticClass: \"text-indigo-400 font-medium\" }, [\n            _vm._v(\"/\"),\n          ]),\n          _vm._v(\" Визуализация производственного графа - граф 1\\n        \"),\n        ],\n        1\n      ),\n      _vm._v(\" \"),\n      _c(\"hr\"),\n      _vm._v(\" \"),\n      _c(\"div\", { staticClass: \"mb-6 flex justify-between items-center\" }),\n      _vm._v(\" \"),\n      _vm._m(1),\n    ]),\n  ])\n}\nvar staticRenderFns = [\n  function () {\n    var _vm = this,\n      _c = _vm._self._c\n    return _c(\n      \"div\",\n      {\n        staticClass:\n          \"panelTwo color-up-NN border-b w-full p-4 md:py-0 text-sm md:text-md flex justify-between items-center\",\n      },\n      [_c(\"div\", { staticClass: \"color-text-bar\" })]\n    )\n  },\n  function () {\n    var _vm = this,\n      _c = _vm._self._c\n    return _c(\n      \"div\",\n      { staticClass: \"bg-white rounded shadow overflow-hidden\" },\n      [\n        _c(\"div\", { staticClass: \"flex flex-wrap\" }, [\n          _c(\n            \"div\",\n            {\n              staticClass: \"pa-md-4 mx-lg-auto\",\n              staticStyle: {\n                \"margin-top\": \"50px\",\n                \"margin-bottom\": \"50px\",\n                \"margin-left\": \"150px\",\n              },\n            },\n            [\n              _c(\"iframe\", {\n                attrs: {\n                  width: \"1000\",\n                  height: \"650\",\n                  allow: \"fullscreen\",\n                  src: \"http://172.16.42.188/assets/embed?modelId=e3a0d5ee-2740-4c8e-8c65-a08647965a2f\",\n                },\n              }),\n            ]\n          ),\n        ]),\n      ]\n    )\n  },\n]\nrender._withStripped = true\n\n\n\n//# sourceURL=webpack:///./resources/js/Pages/Visualisation/Graph.vue?./node_modules/vue-loader/lib/loaders/templateLoader.js??ref--5!./node_modules/vue-loader/lib??vue-loader-options");

/***/ }),

/***/ "./resources/js/Pages/Visualisation/Graph.vue":
/*!****************************************************!*\
  !*** ./resources/js/Pages/Visualisation/Graph.vue ***!
  \****************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _Graph_vue_vue_type_template_id_071a605e___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Graph.vue?vue&type=template&id=071a605e& */ \"./resources/js/Pages/Visualisation/Graph.vue?vue&type=template&id=071a605e&\");\n/* harmony import */ var _Graph_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Graph.vue?vue&type=script&lang=js& */ \"./resources/js/Pages/Visualisation/Graph.vue?vue&type=script&lang=js&\");\n/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ \"./node_modules/vue-loader/lib/runtime/componentNormalizer.js\");\n\n\n\n\n\n/* normalize component */\n\nvar component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__[\"default\"])(\n  _Graph_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__[\"default\"],\n  _Graph_vue_vue_type_template_id_071a605e___WEBPACK_IMPORTED_MODULE_0__[\"render\"],\n  _Graph_vue_vue_type_template_id_071a605e___WEBPACK_IMPORTED_MODULE_0__[\"staticRenderFns\"],\n  false,\n  null,\n  null,\n  null\n  \n)\n\n/* hot reload */\nif (false) { var api; }\ncomponent.options.__file = \"resources/js/Pages/Visualisation/Graph.vue\"\n/* harmony default export */ __webpack_exports__[\"default\"] = (component.exports);\n\n//# sourceURL=webpack:///./resources/js/Pages/Visualisation/Graph.vue?");

/***/ }),

/***/ "./resources/js/Pages/Visualisation/Graph.vue?vue&type=script&lang=js&":
/*!*****************************************************************************!*\
  !*** ./resources/js/Pages/Visualisation/Graph.vue?vue&type=script&lang=js& ***!
  \*****************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _node_modules_vue_loader_lib_index_js_vue_loader_options_Graph_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib??vue-loader-options!./Graph.vue?vue&type=script&lang=js& */ \"./node_modules/vue-loader/lib/index.js?!./resources/js/Pages/Visualisation/Graph.vue?vue&type=script&lang=js&\");\n/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__[\"default\"] = (_node_modules_vue_loader_lib_index_js_vue_loader_options_Graph_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__[\"default\"]); \n\n//# sourceURL=webpack:///./resources/js/Pages/Visualisation/Graph.vue?");

/***/ }),

/***/ "./resources/js/Pages/Visualisation/Graph.vue?vue&type=template&id=071a605e&":
/*!***********************************************************************************!*\
  !*** ./resources/js/Pages/Visualisation/Graph.vue?vue&type=template&id=071a605e& ***!
  \***********************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_ref_5_node_modules_vue_loader_lib_index_js_vue_loader_options_Graph_vue_vue_type_template_id_071a605e___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??ref--5!../../../../node_modules/vue-loader/lib??vue-loader-options!./Graph.vue?vue&type=template&id=071a605e& */ \"./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/Pages/Visualisation/Graph.vue?vue&type=template&id=071a605e&\");\n/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, \"render\", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_ref_5_node_modules_vue_loader_lib_index_js_vue_loader_options_Graph_vue_vue_type_template_id_071a605e___WEBPACK_IMPORTED_MODULE_0__[\"render\"]; });\n\n/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, \"staticRenderFns\", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_ref_5_node_modules_vue_loader_lib_index_js_vue_loader_options_Graph_vue_vue_type_template_id_071a605e___WEBPACK_IMPORTED_MODULE_0__[\"staticRenderFns\"]; });\n\n\n\n//# sourceURL=webpack:///./resources/js/Pages/Visualisation/Graph.vue?");

/***/ })

}]);