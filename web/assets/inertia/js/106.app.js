(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[106],{

/***/ "./node_modules/vue-loader/lib/index.js?!./resources/js/Pages/ReportsSpr/Index.vue?vue&type=script&lang=js&":
/*!****************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib??vue-loader-options!./resources/js/Pages/ReportsSpr/Index.vue?vue&type=script&lang=js& ***!
  \****************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _Shared_Icon__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @/Shared/Icon */ \"./resources/js/Shared/Icon.vue\");\n/* harmony import */ var _Shared_Layout__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @/Shared/Layout */ \"./resources/js/Shared/Layout.vue\");\n/* harmony import */ var lodash_mapValues__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! lodash/mapValues */ \"./node_modules/lodash/mapValues.js\");\n/* harmony import */ var lodash_mapValues__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(lodash_mapValues__WEBPACK_IMPORTED_MODULE_2__);\n/* harmony import */ var _Shared_Pagination__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @/Shared/Pagination */ \"./resources/js/Shared/Pagination.vue\");\n/* harmony import */ var lodash_pickBy__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! lodash/pickBy */ \"./node_modules/lodash/pickBy.js\");\n/* harmony import */ var lodash_pickBy__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(lodash_pickBy__WEBPACK_IMPORTED_MODULE_4__);\n/* harmony import */ var _Shared_SearchFilter__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! @/Shared/SearchFilter */ \"./resources/js/Shared/SearchFilter.vue\");\n/* harmony import */ var lodash_throttle__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! lodash/throttle */ \"./node_modules/lodash/throttle.js\");\n/* harmony import */ var lodash_throttle__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(lodash_throttle__WEBPACK_IMPORTED_MODULE_6__);\n/* harmony import */ var _Shared_SearchFilterOnly__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! @/Shared/SearchFilterOnly */ \"./resources/js/Shared/SearchFilterOnly.vue\");\n\n\n\n\n\n\n\n\n\n\n/* harmony default export */ __webpack_exports__[\"default\"] = ({\n  metaInfo: { title: 'Справочник \"Отчетов\"' },\n  layout: _Shared_Layout__WEBPACK_IMPORTED_MODULE_1__[\"default\"],\n  components: {\n    Icon: _Shared_Icon__WEBPACK_IMPORTED_MODULE_0__[\"default\"],\n    Pagination: _Shared_Pagination__WEBPACK_IMPORTED_MODULE_3__[\"default\"],\n    SearchFilter: _Shared_SearchFilter__WEBPACK_IMPORTED_MODULE_5__[\"default\"],\n    SearchFilterOnly: _Shared_SearchFilterOnly__WEBPACK_IMPORTED_MODULE_7__[\"default\"]\n  },\n  props: {\n      reports: Object,\n      filters: Object,\n  },\n  data() {\n    return {\n      form: {\n        search: this.filters.search,\n        trashed: this.filters.trashed,\n      },\n    }\n  },\n  watch: {\n    form: {\n      handler: lodash_throttle__WEBPACK_IMPORTED_MODULE_6___default()(function() {\n        let query = lodash_pickBy__WEBPACK_IMPORTED_MODULE_4___default()(this.form)\n        this.$inertia.replace(this.route('reports_spr', Object.keys(query).length ? query : { remember: 'forget' }))\n      }, 150),\n      deep: true,\n    },\n  },\n  methods: {\n    reset() {\n      this.form = lodash_mapValues__WEBPACK_IMPORTED_MODULE_2___default()(this.form, () => null)\n    }\n  },\n});\n\n\n//# sourceURL=webpack:///./resources/js/Pages/ReportsSpr/Index.vue?./node_modules/vue-loader/lib??vue-loader-options");

/***/ }),

/***/ "./node_modules/vue-loader/lib/index.js?!./resources/js/Shared/Pagination.vue?vue&type=script&lang=js&":
/*!***********************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib??vue-loader-options!./resources/js/Shared/Pagination.vue?vue&type=script&lang=js& ***!
  \***********************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n\n/* harmony default export */ __webpack_exports__[\"default\"] = ({\n  props: {\n    links: Array,\n  },\n});\n\n\n//# sourceURL=webpack:///./resources/js/Shared/Pagination.vue?./node_modules/vue-loader/lib??vue-loader-options");

/***/ }),

/***/ "./node_modules/vue-loader/lib/index.js?!./resources/js/Shared/SearchFilter.vue?vue&type=script&lang=js&":
/*!*************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib??vue-loader-options!./resources/js/Shared/SearchFilter.vue?vue&type=script&lang=js& ***!
  \*************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _Shared_Dropdown__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @/Shared/Dropdown */ \"./resources/js/Shared/Dropdown.vue\");\n\n\n\n/* harmony default export */ __webpack_exports__[\"default\"] = ({\n  components: {\n    Dropdown: _Shared_Dropdown__WEBPACK_IMPORTED_MODULE_0__[\"default\"],\n  },\n  props: {\n    value: String,\n    maxWidth: {\n      type: Number,\n      default: 300,\n    },\n  },\n});\n\n\n//# sourceURL=webpack:///./resources/js/Shared/SearchFilter.vue?./node_modules/vue-loader/lib??vue-loader-options");

/***/ }),

/***/ "./node_modules/vue-loader/lib/index.js?!./resources/js/Shared/SearchFilterOnly.vue?vue&type=script&lang=js&":
/*!*****************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib??vue-loader-options!./resources/js/Shared/SearchFilterOnly.vue?vue&type=script&lang=js& ***!
  \*****************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _Shared_Dropdown__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @/Shared/Dropdown */ \"./resources/js/Shared/Dropdown.vue\");\n\n\n\n/* harmony default export */ __webpack_exports__[\"default\"] = ({\n  components: {\n    Dropdown: _Shared_Dropdown__WEBPACK_IMPORTED_MODULE_0__[\"default\"],\n  },\n  props: {\n    value: String,\n    maxWidth: {\n      type: Number,\n      default: 300,\n    },\n  },\n});\n\n\n//# sourceURL=webpack:///./resources/js/Shared/SearchFilterOnly.vue?./node_modules/vue-loader/lib??vue-loader-options");

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/Pages/ReportsSpr/Index.vue?vue&type=template&id=47ad4602&":
/*!**************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??ref--5!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/Pages/ReportsSpr/Index.vue?vue&type=template&id=47ad4602& ***!
  \**************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"render\", function() { return render; });\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"staticRenderFns\", function() { return staticRenderFns; });\nvar render = function render() {\n  var _vm = this,\n    _c = _vm._self._c\n  return _c(\"div\", [\n    _c(\n      \"div\",\n      {\n        staticClass:\n          \"panelTwo color-up-NN border-b w-full p-4 md:py-0 text-sm md:text-md flex justify-between items-center\",\n      },\n      [\n        _c(\n          \"div\",\n          { staticClass: \"color-text-bar\" },\n          [\n            _c(\n              \"inertia-link\",\n              {\n                staticClass: \"upload-button-default btn-panel\",\n                attrs: {\n                  href: _vm.route(\n                    \"all_spr.filecreate\",\n                    \"spravochnik_reports_spr\"\n                  ),\n                },\n              },\n              [\n                _c(\"span\", [_vm._v(\"Загрузить\")]),\n                _vm._v(\" \"),\n                _c(\"span\", { staticClass: \"hidden md:inline\" }, [\n                  _vm._v(\"справочник\"),\n                ]),\n              ]\n            ),\n          ],\n          1\n        ),\n      ]\n    ),\n    _vm._v(\" \"),\n    _c(\n      \"div\",\n      { staticClass: \"px-4 py-8 md:p-12\" },\n      [\n        _c(\"h1\", { staticClass: \"font-bold text-3xl\" }, [\n          _vm._v('\\n        Справочник \"Отчеты\"\\n      '),\n        ]),\n        _vm._v(\" \"),\n        _c(\"div\", { staticClass: \"mb-6 flex justify-between items-center\" }),\n        _vm._v(\" \"),\n        _c(\"search-filter-only\", {\n          staticClass: \"w-full max-w-md mr-4\",\n          on: { reset: _vm.reset },\n          model: {\n            value: _vm.form.search,\n            callback: function ($$v) {\n              _vm.$set(_vm.form, \"search\", $$v)\n            },\n            expression: \"form.search\",\n          },\n        }),\n        _vm._v(\" \"),\n        _c(\"div\", { staticClass: \"mb-6 flex justify-between items-center\" }),\n        _vm._v(\" \"),\n        _c(\"div\", { staticClass: \"bg-white rounded shadow overflow-x-auto\" }, [\n          _c(\n            \"table\",\n            { staticClass: \"w-full whitespace-no-wrap\" },\n            [\n              _vm._m(0),\n              _vm._v(\" \"),\n              _vm._l(_vm.reports.data, function (report1) {\n                return _c(\n                  \"tr\",\n                  {\n                    key: report1.id,\n                    staticClass: \"hover:bg-gray-100 focus-within:bg-gray-100\",\n                  },\n                  [\n                    _c(\n                      \"td\",\n                      { staticClass: \"border-t\" },\n                      [\n                        _c(\n                          \"inertia-link\",\n                          {\n                            staticClass:\n                              \"px-6 py-2 flex items-center focus:text-indigo-500\",\n                            attrs: {\n                              href: _vm.route(\"reports_spr.view\", report1.id),\n                            },\n                          },\n                          [\n                            _vm._v(\n                              \"\\n                \" +\n                                _vm._s(report1.code) +\n                                \"\\n              \"\n                            ),\n                          ]\n                        ),\n                      ],\n                      1\n                    ),\n                    _vm._v(\" \"),\n                    _c(\n                      \"td\",\n                      { staticClass: \"border-t\" },\n                      [\n                        _c(\n                          \"inertia-link\",\n                          {\n                            staticClass: \"px-6 py-2 flex items-center\",\n                            attrs: {\n                              href: _vm.route(\"reports_spr.view\", report1.id),\n                              tabindex: \"-1\",\n                            },\n                          },\n                          [\n                            _vm._v(\n                              \"\\n                \" +\n                                _vm._s(report1.name) +\n                                \"\\n              \"\n                            ),\n                          ]\n                        ),\n                      ],\n                      1\n                    ),\n                    _vm._v(\" \"),\n                    _c(\n                      \"td\",\n                      { staticClass: \"border-t\" },\n                      [\n                        _c(\n                          \"a\",\n                          { staticClass: \"px-4 py-2 flex items-center hrli\" },\n                          [_vm._v(\" \")]\n                        ),\n                        _vm._v(\" \"),\n                        _c(\n                          \"inertia-link\",\n                          {\n                            staticClass: \"flex items-center hrli\",\n                            attrs: {\n                              href: _vm.route(\"reports_spr.edit\", report1.id),\n                              tabindex: \"-1\",\n                            },\n                          },\n                          [\n                            _c(\"icon\", {\n                              staticClass: \"block w-6 h-6 fill-gray-400\",\n                              attrs: { name: \"pen\" },\n                            }),\n                          ],\n                          1\n                        ),\n                      ],\n                      1\n                    ),\n                    _vm._v(\" \"),\n                    _c(\n                      \"td\",\n                      { staticClass: \"border-t w-px\" },\n                      [\n                        _c(\n                          \"inertia-link\",\n                          {\n                            staticClass: \"px-4 py-2 flex items-center\",\n                            attrs: {\n                              href: _vm.route(\"reports_spr.view\", report1.id),\n                              tabindex: \"-1\",\n                            },\n                          },\n                          [\n                            _vm._v(\n                              \"\\n                \" +\n                                _vm._s(report1.updated_at) +\n                                \"\\n              \"\n                            ),\n                          ]\n                        ),\n                      ],\n                      1\n                    ),\n                  ]\n                )\n              }),\n              _vm._v(\" \"),\n              _vm.reports.data.length === 0\n                ? _c(\"tr\", [\n                    _c(\n                      \"td\",\n                      {\n                        staticClass: \"border-t px-6 py-2\",\n                        attrs: { colspan: \"4\" },\n                      },\n                      [_vm._v(\"В справочнике нет записей.\")]\n                    ),\n                  ])\n                : _vm._e(),\n            ],\n            2\n          ),\n        ]),\n        _vm._v(\" \"),\n        _c(\"pagination\", { attrs: { links: _vm.reports.links } }),\n      ],\n      1\n    ),\n  ])\n}\nvar staticRenderFns = [\n  function () {\n    var _vm = this,\n      _c = _vm._self._c\n    return _c(\"tr\", { staticClass: \"text-left font-bold\" }, [\n      _c(\"th\", { staticClass: \"px-6 pt-2 pb-4 border-t text-center\" }, [\n        _vm._v(\"Код отчета\"),\n      ]),\n      _vm._v(\" \"),\n      _c(\"th\", { staticClass: \"px-6 pt-2 pb-4 border-t text-center\" }, [\n        _vm._v(\"Наименование отчета\"),\n      ]),\n      _vm._v(\" \"),\n      _c(\"th\", { staticClass: \"px-6 pt-2 pb-4 border-t text-center\" }, [\n        _vm._v(\"Меню действий\"),\n      ]),\n      _vm._v(\" \"),\n      _c(\"th\", { staticClass: \"px-6 pt-2 pb-4 border-t text-center\" }, [\n        _vm._v(\"Дата обновления\"),\n      ]),\n    ])\n  },\n]\nrender._withStripped = true\n\n\n\n//# sourceURL=webpack:///./resources/js/Pages/ReportsSpr/Index.vue?./node_modules/vue-loader/lib/loaders/templateLoader.js??ref--5!./node_modules/vue-loader/lib??vue-loader-options");

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/Shared/Pagination.vue?vue&type=template&id=7ed7fa14&":
/*!*********************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??ref--5!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/Shared/Pagination.vue?vue&type=template&id=7ed7fa14& ***!
  \*********************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"render\", function() { return render; });\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"staticRenderFns\", function() { return staticRenderFns; });\nvar render = function render() {\n  var _vm = this,\n    _c = _vm._self._c\n  return _c(\n    \"div\",\n    { staticClass: \"mt-6 -mb-1 flex flex-wrap\" },\n    [\n      _vm._l(_vm.links, function (link, key) {\n        return [\n          link.url === null\n            ? _c(\n                \"div\",\n                {\n                  key: key,\n                  staticClass:\n                    \"mr-1 mb-1 px-4 py-3 text-sm border rounded text-gray-400\",\n                  class: { \"ml-auto\": link.label === \"Next\" },\n                },\n                [_vm._v(_vm._s(link.label))]\n              )\n            : _c(\n                \"inertia-link\",\n                {\n                  key: key,\n                  staticClass:\n                    \"mr-1 mb-1 px-4 py-3 text-sm border rounded hover:bg-white focus:text-indigo-500\",\n                  class: {\n                    \"color-NN-button\": link.active,\n                    \"ml-auto\": link.label === \"Next\",\n                  },\n                  attrs: { href: link.url },\n                },\n                [_vm._v(_vm._s(link.label))]\n              ),\n        ]\n      }),\n    ],\n    2\n  )\n}\nvar staticRenderFns = []\nrender._withStripped = true\n\n\n\n//# sourceURL=webpack:///./resources/js/Shared/Pagination.vue?./node_modules/vue-loader/lib/loaders/templateLoader.js??ref--5!./node_modules/vue-loader/lib??vue-loader-options");

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/Shared/SearchFilter.vue?vue&type=template&id=4adb669c&":
/*!***********************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??ref--5!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/Shared/SearchFilter.vue?vue&type=template&id=4adb669c& ***!
  \***********************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"render\", function() { return render; });\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"staticRenderFns\", function() { return staticRenderFns; });\nvar render = function render() {\n  var _vm = this,\n    _c = _vm._self._c\n  return _c(\"div\", { staticClass: \"flex items-center\" }, [\n    _c(\n      \"div\",\n      { staticClass: \"flex w-full bg-white shadow rounded\" },\n      [\n        _c(\n          \"dropdown\",\n          {\n            staticClass:\n              \"px-4 md:px-6 rounded-l border-r hover:bg-gray-100 focus:border-white focus:shadow-outline focus:z-10\",\n            attrs: { \"auto-close\": false, placement: \"bottom-start\" },\n          },\n          [\n            _c(\"div\", { staticClass: \"flex items-baseline\" }, [\n              _c(\"span\", { staticClass: \"text-gray-700 hidden md:inline\" }, [\n                _vm._v(\"Фильтр:\"),\n              ]),\n              _vm._v(\" \"),\n              _c(\n                \"svg\",\n                {\n                  staticClass: \"w-2 h-2 fill-gray-700 md:ml-2\",\n                  attrs: {\n                    xmlns: \"http://www.w3.org/2000/svg\",\n                    viewBox: \"0 0 961.243 599.998\",\n                  },\n                },\n                [\n                  _c(\"path\", {\n                    attrs: {\n                      d: \"M239.998 239.999L0 0h961.243L721.246 240c-131.999 132-240.28 240-240.624 239.999-.345-.001-108.625-108.001-240.624-240z\",\n                    },\n                  }),\n                ]\n              ),\n            ]),\n            _vm._v(\" \"),\n            _c(\n              \"div\",\n              {\n                staticClass:\n                  \"mt-2 px-4 py-6 w-screen shadow-xl bg-white rounded\",\n                style: { maxWidth: `${_vm.maxWidth}px` },\n                attrs: { slot: \"dropdown\" },\n                slot: \"dropdown\",\n              },\n              [_vm._t(\"default\")],\n              2\n            ),\n          ]\n        ),\n        _vm._v(\" \"),\n        _c(\"input\", {\n          staticClass:\n            \"relative w-full px-6 py-3 rounded-r focus:shadow-outline\",\n          attrs: {\n            autocomplete: \"off\",\n            type: \"text\",\n            name: \"search\",\n            placeholder: \"Поиск…\",\n          },\n          domProps: { value: _vm.value },\n          on: {\n            input: function ($event) {\n              return _vm.$emit(\"input\", $event.target.value)\n            },\n          },\n        }),\n      ],\n      1\n    ),\n    _vm._v(\" \"),\n    _c(\n      \"button\",\n      {\n        staticClass:\n          \"ml-3 text-sm text-gray-500 hover:text-gray-700 focus:text-indigo-500\",\n        attrs: { type: \"button\" },\n        on: {\n          click: function ($event) {\n            return _vm.$emit(\"reset\")\n          },\n        },\n      },\n      [_vm._v(\"Очистить\")]\n    ),\n  ])\n}\nvar staticRenderFns = []\nrender._withStripped = true\n\n\n\n//# sourceURL=webpack:///./resources/js/Shared/SearchFilter.vue?./node_modules/vue-loader/lib/loaders/templateLoader.js??ref--5!./node_modules/vue-loader/lib??vue-loader-options");

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/Shared/SearchFilterOnly.vue?vue&type=template&id=8c0edb30&":
/*!***************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??ref--5!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/Shared/SearchFilterOnly.vue?vue&type=template&id=8c0edb30& ***!
  \***************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"render\", function() { return render; });\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"staticRenderFns\", function() { return staticRenderFns; });\nvar render = function render() {\n  var _vm = this,\n    _c = _vm._self._c\n  return _c(\"div\", { staticClass: \"flex items-center\" }, [\n    _c(\"div\", { staticClass: \"flex w-full bg-white shadow rounded\" }, [\n      _c(\"input\", {\n        staticClass: \"relative w-full px-6 py-3 rounded-r focus:shadow-outline\",\n        attrs: {\n          autocomplete: \"off\",\n          type: \"text\",\n          name: \"search\",\n          placeholder: \"Поиск…\",\n        },\n        domProps: { value: _vm.value },\n        on: {\n          input: function ($event) {\n            return _vm.$emit(\"input\", $event.target.value)\n          },\n        },\n      }),\n    ]),\n    _vm._v(\" \"),\n    _c(\n      \"button\",\n      {\n        staticClass:\n          \"ml-3 text-sm text-gray-500 hover:text-gray-700 focus:text-indigo-500\",\n        attrs: { type: \"button\" },\n        on: {\n          click: function ($event) {\n            return _vm.$emit(\"reset\")\n          },\n        },\n      },\n      [_vm._v(\"Очистить\")]\n    ),\n  ])\n}\nvar staticRenderFns = []\nrender._withStripped = true\n\n\n\n//# sourceURL=webpack:///./resources/js/Shared/SearchFilterOnly.vue?./node_modules/vue-loader/lib/loaders/templateLoader.js??ref--5!./node_modules/vue-loader/lib??vue-loader-options");

/***/ }),

/***/ "./resources/js/Pages/ReportsSpr/Index.vue":
/*!*************************************************!*\
  !*** ./resources/js/Pages/ReportsSpr/Index.vue ***!
  \*************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _Index_vue_vue_type_template_id_47ad4602___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Index.vue?vue&type=template&id=47ad4602& */ \"./resources/js/Pages/ReportsSpr/Index.vue?vue&type=template&id=47ad4602&\");\n/* harmony import */ var _Index_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Index.vue?vue&type=script&lang=js& */ \"./resources/js/Pages/ReportsSpr/Index.vue?vue&type=script&lang=js&\");\n/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ \"./node_modules/vue-loader/lib/runtime/componentNormalizer.js\");\n\n\n\n\n\n/* normalize component */\n\nvar component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__[\"default\"])(\n  _Index_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__[\"default\"],\n  _Index_vue_vue_type_template_id_47ad4602___WEBPACK_IMPORTED_MODULE_0__[\"render\"],\n  _Index_vue_vue_type_template_id_47ad4602___WEBPACK_IMPORTED_MODULE_0__[\"staticRenderFns\"],\n  false,\n  null,\n  null,\n  null\n  \n)\n\n/* hot reload */\nif (false) { var api; }\ncomponent.options.__file = \"resources/js/Pages/ReportsSpr/Index.vue\"\n/* harmony default export */ __webpack_exports__[\"default\"] = (component.exports);\n\n//# sourceURL=webpack:///./resources/js/Pages/ReportsSpr/Index.vue?");

/***/ }),

/***/ "./resources/js/Pages/ReportsSpr/Index.vue?vue&type=script&lang=js&":
/*!**************************************************************************!*\
  !*** ./resources/js/Pages/ReportsSpr/Index.vue?vue&type=script&lang=js& ***!
  \**************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _node_modules_vue_loader_lib_index_js_vue_loader_options_Index_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib??vue-loader-options!./Index.vue?vue&type=script&lang=js& */ \"./node_modules/vue-loader/lib/index.js?!./resources/js/Pages/ReportsSpr/Index.vue?vue&type=script&lang=js&\");\n/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__[\"default\"] = (_node_modules_vue_loader_lib_index_js_vue_loader_options_Index_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__[\"default\"]); \n\n//# sourceURL=webpack:///./resources/js/Pages/ReportsSpr/Index.vue?");

/***/ }),

/***/ "./resources/js/Pages/ReportsSpr/Index.vue?vue&type=template&id=47ad4602&":
/*!********************************************************************************!*\
  !*** ./resources/js/Pages/ReportsSpr/Index.vue?vue&type=template&id=47ad4602& ***!
  \********************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_ref_5_node_modules_vue_loader_lib_index_js_vue_loader_options_Index_vue_vue_type_template_id_47ad4602___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??ref--5!../../../../node_modules/vue-loader/lib??vue-loader-options!./Index.vue?vue&type=template&id=47ad4602& */ \"./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/Pages/ReportsSpr/Index.vue?vue&type=template&id=47ad4602&\");\n/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, \"render\", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_ref_5_node_modules_vue_loader_lib_index_js_vue_loader_options_Index_vue_vue_type_template_id_47ad4602___WEBPACK_IMPORTED_MODULE_0__[\"render\"]; });\n\n/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, \"staticRenderFns\", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_ref_5_node_modules_vue_loader_lib_index_js_vue_loader_options_Index_vue_vue_type_template_id_47ad4602___WEBPACK_IMPORTED_MODULE_0__[\"staticRenderFns\"]; });\n\n\n\n//# sourceURL=webpack:///./resources/js/Pages/ReportsSpr/Index.vue?");

/***/ }),

/***/ "./resources/js/Shared/Pagination.vue":
/*!********************************************!*\
  !*** ./resources/js/Shared/Pagination.vue ***!
  \********************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _Pagination_vue_vue_type_template_id_7ed7fa14___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Pagination.vue?vue&type=template&id=7ed7fa14& */ \"./resources/js/Shared/Pagination.vue?vue&type=template&id=7ed7fa14&\");\n/* harmony import */ var _Pagination_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Pagination.vue?vue&type=script&lang=js& */ \"./resources/js/Shared/Pagination.vue?vue&type=script&lang=js&\");\n/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ \"./node_modules/vue-loader/lib/runtime/componentNormalizer.js\");\n\n\n\n\n\n/* normalize component */\n\nvar component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__[\"default\"])(\n  _Pagination_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__[\"default\"],\n  _Pagination_vue_vue_type_template_id_7ed7fa14___WEBPACK_IMPORTED_MODULE_0__[\"render\"],\n  _Pagination_vue_vue_type_template_id_7ed7fa14___WEBPACK_IMPORTED_MODULE_0__[\"staticRenderFns\"],\n  false,\n  null,\n  null,\n  null\n  \n)\n\n/* hot reload */\nif (false) { var api; }\ncomponent.options.__file = \"resources/js/Shared/Pagination.vue\"\n/* harmony default export */ __webpack_exports__[\"default\"] = (component.exports);\n\n//# sourceURL=webpack:///./resources/js/Shared/Pagination.vue?");

/***/ }),

/***/ "./resources/js/Shared/Pagination.vue?vue&type=script&lang=js&":
/*!*********************************************************************!*\
  !*** ./resources/js/Shared/Pagination.vue?vue&type=script&lang=js& ***!
  \*********************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _node_modules_vue_loader_lib_index_js_vue_loader_options_Pagination_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib??vue-loader-options!./Pagination.vue?vue&type=script&lang=js& */ \"./node_modules/vue-loader/lib/index.js?!./resources/js/Shared/Pagination.vue?vue&type=script&lang=js&\");\n/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__[\"default\"] = (_node_modules_vue_loader_lib_index_js_vue_loader_options_Pagination_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__[\"default\"]); \n\n//# sourceURL=webpack:///./resources/js/Shared/Pagination.vue?");

/***/ }),

/***/ "./resources/js/Shared/Pagination.vue?vue&type=template&id=7ed7fa14&":
/*!***************************************************************************!*\
  !*** ./resources/js/Shared/Pagination.vue?vue&type=template&id=7ed7fa14& ***!
  \***************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_ref_5_node_modules_vue_loader_lib_index_js_vue_loader_options_Pagination_vue_vue_type_template_id_7ed7fa14___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??ref--5!../../../node_modules/vue-loader/lib??vue-loader-options!./Pagination.vue?vue&type=template&id=7ed7fa14& */ \"./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/Shared/Pagination.vue?vue&type=template&id=7ed7fa14&\");\n/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, \"render\", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_ref_5_node_modules_vue_loader_lib_index_js_vue_loader_options_Pagination_vue_vue_type_template_id_7ed7fa14___WEBPACK_IMPORTED_MODULE_0__[\"render\"]; });\n\n/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, \"staticRenderFns\", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_ref_5_node_modules_vue_loader_lib_index_js_vue_loader_options_Pagination_vue_vue_type_template_id_7ed7fa14___WEBPACK_IMPORTED_MODULE_0__[\"staticRenderFns\"]; });\n\n\n\n//# sourceURL=webpack:///./resources/js/Shared/Pagination.vue?");

/***/ }),

/***/ "./resources/js/Shared/SearchFilter.vue":
/*!**********************************************!*\
  !*** ./resources/js/Shared/SearchFilter.vue ***!
  \**********************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _SearchFilter_vue_vue_type_template_id_4adb669c___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./SearchFilter.vue?vue&type=template&id=4adb669c& */ \"./resources/js/Shared/SearchFilter.vue?vue&type=template&id=4adb669c&\");\n/* harmony import */ var _SearchFilter_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./SearchFilter.vue?vue&type=script&lang=js& */ \"./resources/js/Shared/SearchFilter.vue?vue&type=script&lang=js&\");\n/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ \"./node_modules/vue-loader/lib/runtime/componentNormalizer.js\");\n\n\n\n\n\n/* normalize component */\n\nvar component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__[\"default\"])(\n  _SearchFilter_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__[\"default\"],\n  _SearchFilter_vue_vue_type_template_id_4adb669c___WEBPACK_IMPORTED_MODULE_0__[\"render\"],\n  _SearchFilter_vue_vue_type_template_id_4adb669c___WEBPACK_IMPORTED_MODULE_0__[\"staticRenderFns\"],\n  false,\n  null,\n  null,\n  null\n  \n)\n\n/* hot reload */\nif (false) { var api; }\ncomponent.options.__file = \"resources/js/Shared/SearchFilter.vue\"\n/* harmony default export */ __webpack_exports__[\"default\"] = (component.exports);\n\n//# sourceURL=webpack:///./resources/js/Shared/SearchFilter.vue?");

/***/ }),

/***/ "./resources/js/Shared/SearchFilter.vue?vue&type=script&lang=js&":
/*!***********************************************************************!*\
  !*** ./resources/js/Shared/SearchFilter.vue?vue&type=script&lang=js& ***!
  \***********************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _node_modules_vue_loader_lib_index_js_vue_loader_options_SearchFilter_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib??vue-loader-options!./SearchFilter.vue?vue&type=script&lang=js& */ \"./node_modules/vue-loader/lib/index.js?!./resources/js/Shared/SearchFilter.vue?vue&type=script&lang=js&\");\n/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__[\"default\"] = (_node_modules_vue_loader_lib_index_js_vue_loader_options_SearchFilter_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__[\"default\"]); \n\n//# sourceURL=webpack:///./resources/js/Shared/SearchFilter.vue?");

/***/ }),

/***/ "./resources/js/Shared/SearchFilter.vue?vue&type=template&id=4adb669c&":
/*!*****************************************************************************!*\
  !*** ./resources/js/Shared/SearchFilter.vue?vue&type=template&id=4adb669c& ***!
  \*****************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_ref_5_node_modules_vue_loader_lib_index_js_vue_loader_options_SearchFilter_vue_vue_type_template_id_4adb669c___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??ref--5!../../../node_modules/vue-loader/lib??vue-loader-options!./SearchFilter.vue?vue&type=template&id=4adb669c& */ \"./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/Shared/SearchFilter.vue?vue&type=template&id=4adb669c&\");\n/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, \"render\", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_ref_5_node_modules_vue_loader_lib_index_js_vue_loader_options_SearchFilter_vue_vue_type_template_id_4adb669c___WEBPACK_IMPORTED_MODULE_0__[\"render\"]; });\n\n/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, \"staticRenderFns\", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_ref_5_node_modules_vue_loader_lib_index_js_vue_loader_options_SearchFilter_vue_vue_type_template_id_4adb669c___WEBPACK_IMPORTED_MODULE_0__[\"staticRenderFns\"]; });\n\n\n\n//# sourceURL=webpack:///./resources/js/Shared/SearchFilter.vue?");

/***/ }),

/***/ "./resources/js/Shared/SearchFilterOnly.vue":
/*!**************************************************!*\
  !*** ./resources/js/Shared/SearchFilterOnly.vue ***!
  \**************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _SearchFilterOnly_vue_vue_type_template_id_8c0edb30___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./SearchFilterOnly.vue?vue&type=template&id=8c0edb30& */ \"./resources/js/Shared/SearchFilterOnly.vue?vue&type=template&id=8c0edb30&\");\n/* harmony import */ var _SearchFilterOnly_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./SearchFilterOnly.vue?vue&type=script&lang=js& */ \"./resources/js/Shared/SearchFilterOnly.vue?vue&type=script&lang=js&\");\n/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ \"./node_modules/vue-loader/lib/runtime/componentNormalizer.js\");\n\n\n\n\n\n/* normalize component */\n\nvar component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__[\"default\"])(\n  _SearchFilterOnly_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__[\"default\"],\n  _SearchFilterOnly_vue_vue_type_template_id_8c0edb30___WEBPACK_IMPORTED_MODULE_0__[\"render\"],\n  _SearchFilterOnly_vue_vue_type_template_id_8c0edb30___WEBPACK_IMPORTED_MODULE_0__[\"staticRenderFns\"],\n  false,\n  null,\n  null,\n  null\n  \n)\n\n/* hot reload */\nif (false) { var api; }\ncomponent.options.__file = \"resources/js/Shared/SearchFilterOnly.vue\"\n/* harmony default export */ __webpack_exports__[\"default\"] = (component.exports);\n\n//# sourceURL=webpack:///./resources/js/Shared/SearchFilterOnly.vue?");

/***/ }),

/***/ "./resources/js/Shared/SearchFilterOnly.vue?vue&type=script&lang=js&":
/*!***************************************************************************!*\
  !*** ./resources/js/Shared/SearchFilterOnly.vue?vue&type=script&lang=js& ***!
  \***************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _node_modules_vue_loader_lib_index_js_vue_loader_options_SearchFilterOnly_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib??vue-loader-options!./SearchFilterOnly.vue?vue&type=script&lang=js& */ \"./node_modules/vue-loader/lib/index.js?!./resources/js/Shared/SearchFilterOnly.vue?vue&type=script&lang=js&\");\n/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__[\"default\"] = (_node_modules_vue_loader_lib_index_js_vue_loader_options_SearchFilterOnly_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__[\"default\"]); \n\n//# sourceURL=webpack:///./resources/js/Shared/SearchFilterOnly.vue?");

/***/ }),

/***/ "./resources/js/Shared/SearchFilterOnly.vue?vue&type=template&id=8c0edb30&":
/*!*********************************************************************************!*\
  !*** ./resources/js/Shared/SearchFilterOnly.vue?vue&type=template&id=8c0edb30& ***!
  \*********************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_ref_5_node_modules_vue_loader_lib_index_js_vue_loader_options_SearchFilterOnly_vue_vue_type_template_id_8c0edb30___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??ref--5!../../../node_modules/vue-loader/lib??vue-loader-options!./SearchFilterOnly.vue?vue&type=template&id=8c0edb30& */ \"./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/Shared/SearchFilterOnly.vue?vue&type=template&id=8c0edb30&\");\n/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, \"render\", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_ref_5_node_modules_vue_loader_lib_index_js_vue_loader_options_SearchFilterOnly_vue_vue_type_template_id_8c0edb30___WEBPACK_IMPORTED_MODULE_0__[\"render\"]; });\n\n/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, \"staticRenderFns\", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_ref_5_node_modules_vue_loader_lib_index_js_vue_loader_options_SearchFilterOnly_vue_vue_type_template_id_8c0edb30___WEBPACK_IMPORTED_MODULE_0__[\"staticRenderFns\"]; });\n\n\n\n//# sourceURL=webpack:///./resources/js/Shared/SearchFilterOnly.vue?");

/***/ })

}]);