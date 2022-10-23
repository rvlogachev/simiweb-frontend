(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[176],{

/***/ "./node_modules/vue-loader/lib/index.js?!./resources/js/Pages/Visualisation/Test2.vue?vue&type=script&lang=js&":
/*!*******************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib??vue-loader-options!./resources/js/Pages/Visualisation/Test2.vue?vue&type=script&lang=js& ***!
  \*******************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _Shared_Layout__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @/Shared/Layout */ \"./resources/js/Shared/Layout.vue\");\n\n \n\n\n/* harmony default export */ __webpack_exports__[\"default\"] = ({\n  metaInfo: { title: 'Start' },\n  layout: _Shared_Layout__WEBPACK_IMPORTED_MODULE_0__[\"default\"],\n  \n  props: {\n    user: Object,\n  }\n  \n});\n\n\n//# sourceURL=webpack:///./resources/js/Pages/Visualisation/Test2.vue?./node_modules/vue-loader/lib??vue-loader-options");

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/Pages/Visualisation/Test2.vue?vue&type=template&id=0cf0793a&":
/*!*****************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??ref--5!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/Pages/Visualisation/Test2.vue?vue&type=template&id=0cf0793a& ***!
  \*****************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"render\", function() { return render; });\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"staticRenderFns\", function() { return staticRenderFns; });\nvar render = function render() {\n  var _vm = this,\n    _c = _vm._self._c\n  return _c(\"div\", [\n    _c(\"div\", { staticClass: \"mb-8 flex justify-start max-w-3xl\" }, [\n      _c(\n        \"h1\",\n        { staticClass: \"font-bold text-3xl\" },\n        [\n          _c(\n            \"inertia-link\",\n            {\n              staticClass: \"text-indigo-400 hover:text-indigo-600\",\n              attrs: { href: _vm.route(\"report\") },\n            },\n            [_vm._v(\"Граф\")]\n          ),\n          _vm._v(\" \"),\n          _c(\"span\", { staticClass: \"text-indigo-400 font-medium\" }, [\n            _vm._v(\"/\"),\n          ]),\n          _vm._v(\" Имитационная модель EBITDA@risk TEST2\\n    \"),\n        ],\n        1\n      ),\n    ]),\n    _vm._v(\" \"),\n    _vm._m(0),\n  ])\n}\nvar staticRenderFns = [\n  function () {\n    var _vm = this,\n      _c = _vm._self._c\n    return _c(\n      \"div\",\n      { staticClass: \"bg-white rounded shadow overflow-hidden\" },\n      [\n        _c(\"div\", { staticClass: \"flex flex-wrap\" }, [\n          _c(\n            \"div\",\n            {\n              staticClass: \"pa-md-4 mx-lg-auto\",\n              staticStyle: {\n                \"margin-top\": \"50px\",\n                \"margin-bottom\": \"50px\",\n                \"margin-left\": \"150px\",\n              },\n            },\n            [\n              _c(\"iframe\", {\n                attrs: {\n                  width: \"1000\",\n                  height: \"650\",\n                  allow: \"fullscreen\",\n                  src: \"http://172.16.42.188/assets/embed?modelId=e3a0d5ee-2740-4c8e-8c65-a08647965a2f\",\n                },\n              }),\n            ]\n          ),\n        ]),\n      ]\n    )\n  },\n]\nrender._withStripped = true\n\n\n\n//# sourceURL=webpack:///./resources/js/Pages/Visualisation/Test2.vue?./node_modules/vue-loader/lib/loaders/templateLoader.js??ref--5!./node_modules/vue-loader/lib??vue-loader-options");

/***/ }),

/***/ "./resources/js/Pages/Visualisation/Test2.vue":
/*!****************************************************!*\
  !*** ./resources/js/Pages/Visualisation/Test2.vue ***!
  \****************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _Test2_vue_vue_type_template_id_0cf0793a___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Test2.vue?vue&type=template&id=0cf0793a& */ \"./resources/js/Pages/Visualisation/Test2.vue?vue&type=template&id=0cf0793a&\");\n/* harmony import */ var _Test2_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Test2.vue?vue&type=script&lang=js& */ \"./resources/js/Pages/Visualisation/Test2.vue?vue&type=script&lang=js&\");\n/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ \"./node_modules/vue-loader/lib/runtime/componentNormalizer.js\");\n\n\n\n\n\n/* normalize component */\n\nvar component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__[\"default\"])(\n  _Test2_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__[\"default\"],\n  _Test2_vue_vue_type_template_id_0cf0793a___WEBPACK_IMPORTED_MODULE_0__[\"render\"],\n  _Test2_vue_vue_type_template_id_0cf0793a___WEBPACK_IMPORTED_MODULE_0__[\"staticRenderFns\"],\n  false,\n  null,\n  null,\n  null\n  \n)\n\n/* hot reload */\nif (false) { var api; }\ncomponent.options.__file = \"resources/js/Pages/Visualisation/Test2.vue\"\n/* harmony default export */ __webpack_exports__[\"default\"] = (component.exports);\n\n//# sourceURL=webpack:///./resources/js/Pages/Visualisation/Test2.vue?");

/***/ }),

/***/ "./resources/js/Pages/Visualisation/Test2.vue?vue&type=script&lang=js&":
/*!*****************************************************************************!*\
  !*** ./resources/js/Pages/Visualisation/Test2.vue?vue&type=script&lang=js& ***!
  \*****************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _node_modules_vue_loader_lib_index_js_vue_loader_options_Test2_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib??vue-loader-options!./Test2.vue?vue&type=script&lang=js& */ \"./node_modules/vue-loader/lib/index.js?!./resources/js/Pages/Visualisation/Test2.vue?vue&type=script&lang=js&\");\n/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__[\"default\"] = (_node_modules_vue_loader_lib_index_js_vue_loader_options_Test2_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__[\"default\"]); \n\n//# sourceURL=webpack:///./resources/js/Pages/Visualisation/Test2.vue?");

/***/ }),

/***/ "./resources/js/Pages/Visualisation/Test2.vue?vue&type=template&id=0cf0793a&":
/*!***********************************************************************************!*\
  !*** ./resources/js/Pages/Visualisation/Test2.vue?vue&type=template&id=0cf0793a& ***!
  \***********************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_ref_5_node_modules_vue_loader_lib_index_js_vue_loader_options_Test2_vue_vue_type_template_id_0cf0793a___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??ref--5!../../../../node_modules/vue-loader/lib??vue-loader-options!./Test2.vue?vue&type=template&id=0cf0793a& */ \"./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/Pages/Visualisation/Test2.vue?vue&type=template&id=0cf0793a&\");\n/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, \"render\", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_ref_5_node_modules_vue_loader_lib_index_js_vue_loader_options_Test2_vue_vue_type_template_id_0cf0793a___WEBPACK_IMPORTED_MODULE_0__[\"render\"]; });\n\n/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, \"staticRenderFns\", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_ref_5_node_modules_vue_loader_lib_index_js_vue_loader_options_Test2_vue_vue_type_template_id_0cf0793a___WEBPACK_IMPORTED_MODULE_0__[\"staticRenderFns\"]; });\n\n\n\n//# sourceURL=webpack:///./resources/js/Pages/Visualisation/Test2.vue?");

/***/ })

}]);