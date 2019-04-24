(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[2],{

/***/ "./resources/js/components/Mining/PoolStatus.jsx":
/*!*******************************************************!*\
  !*** ./resources/js/components/Mining/PoolStatus.jsx ***!
  \*******************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var antd_es_table_style_css__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! antd/es/table/style/css */ "./node_modules/antd/es/table/style/css.js");
/* harmony import */ var antd_es_table__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! antd/es/table */ "./node_modules/antd/es/table/index.js");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var graphql_tag__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! graphql-tag */ "./node_modules/graphql-tag/src/index.js");
/* harmony import */ var graphql_tag__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(graphql_tag__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var react_apollo__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! react-apollo */ "./node_modules/react-apollo/react-apollo.esm.js");



function _typeof(obj) { if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

function _templateObject() {
  var data = _taggedTemplateLiteral(["\n          {\n            algorithms(count: 10) {\n              data {\n                name\n                coinCount\n                averageHashRate\n                port\n              }\n              paginatorInfo {\n                currentPage\n                count\n                hasMorePages\n                lastItem\n                lastPage\n                perPage\n                total\n              }\n            }\n          }\n      "]);

  _templateObject = function _templateObject() {
    return data;
  };

  return data;
}

function _taggedTemplateLiteral(strings, raw) { if (!raw) { raw = strings.slice(0); } return Object.freeze(Object.defineProperties(strings, { raw: { value: Object.freeze(raw) } })); }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

function _possibleConstructorReturn(self, call) { if (call && (_typeof(call) === "object" || typeof call === "function")) { return call; } return _assertThisInitialized(self); }

function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }

function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); if (superClass) _setPrototypeOf(subClass, superClass); }

function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf || function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }




var columns = [{
  title: 'Algorithm',
  dataIndex: 'name',
  key: 'name'
}, {
  title: 'Port',
  dataIndex: 'port',
  key: 'port'
}, {
  title: 'Coins',
  dataIndex: 'coins',
  key: 'coins'
}, {
  title: 'Miners',
  dataIndex: 'miners',
  key: 'miners'
}, {
  title: 'Hashrate',
  dataIndex: 'hashrates',
  key: 'hashrates'
}];

function onChange(pagination, filters, sorter) {
  console.log('params', pagination, filters, sorter);
}

var PoolStatus =
/*#__PURE__*/
function (_React$Component) {
  _inherits(PoolStatus, _React$Component);

  function PoolStatus() {
    var _getPrototypeOf2;

    var _this;

    _classCallCheck(this, PoolStatus);

    for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }

    _this = _possibleConstructorReturn(this, (_getPrototypeOf2 = _getPrototypeOf(PoolStatus)).call.apply(_getPrototypeOf2, [this].concat(args)));

    _defineProperty(_assertThisInitialized(_this), "transformAlgorithms", function (data) {
      return data.algorithms.data.reduce(function (carry, algorithm, index) {
        carry.push({
          key: index,
          name: algorithm.name,
          hashrates: algorithm.averageHashRate + 'h/s',
          coins: algorithm.coinCount,
          port: algorithm.port
        });
        return carry;
      }, []);
    });

    return _this;
  }

  _createClass(PoolStatus, [{
    key: "render",
    value: function render() {
      var _this2 = this;

      return react__WEBPACK_IMPORTED_MODULE_2___default.a.createElement(react_apollo__WEBPACK_IMPORTED_MODULE_4__["Query"], {
        query: graphql_tag__WEBPACK_IMPORTED_MODULE_3___default()(_templateObject())
      }, function (_ref) {
        var data = _ref.data,
            loading = _ref.loading;
        var paginatorInfo = !loading && data.algorithms.paginatorInfo;
        var algorithms = !loading ? _this2.transformAlgorithms(data) : [];
        console.log(paginatorInfo);
        return react__WEBPACK_IMPORTED_MODULE_2___default.a.createElement("div", null, react__WEBPACK_IMPORTED_MODULE_2___default.a.createElement(antd_es_table__WEBPACK_IMPORTED_MODULE_1__["default"], _defineProperty({
          columns: columns,
          onChange: onChange,
          dataSource: algorithms,
          loading: loading,
          pagination: false
        }, "pagination", {
          onChange: function onChange() {
            console.log('test');
          },
          total: paginatorInfo.total,
          defaultPageSize: 10,
          showSizeChanger: true,
          pageSizeOptions: ['10', '20', '30']
        })));
      });
    }
  }]);

  return PoolStatus;
}(react__WEBPACK_IMPORTED_MODULE_2___default.a.Component);

/* harmony default export */ __webpack_exports__["default"] = (PoolStatus);

/***/ }),

/***/ "./resources/js/components/Mining/index.jsx":
/*!**************************************************!*\
  !*** ./resources/js/components/Mining/index.jsx ***!
  \**************************************************/
/*! exports provided: PoolStatus */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _PoolStatus__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./PoolStatus */ "./resources/js/components/Mining/PoolStatus.jsx");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "PoolStatus", function() { return _PoolStatus__WEBPACK_IMPORTED_MODULE_0__["default"]; });



/***/ }),

/***/ "./resources/js/components/Pages/Dashboard/index.jsx":
/*!***********************************************************!*\
  !*** ./resources/js/components/Pages/Dashboard/index.jsx ***!
  \***********************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var antd_es_breadcrumb_style_css__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! antd/es/breadcrumb/style/css */ "./node_modules/antd/es/breadcrumb/style/css.js");
/* harmony import */ var antd_es_breadcrumb__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! antd/es/breadcrumb */ "./node_modules/antd/es/breadcrumb/index.js");
/* harmony import */ var antd_es_layout_style_css__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! antd/es/layout/style/css */ "./node_modules/antd/es/layout/style/css.js");
/* harmony import */ var antd_es_layout__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! antd/es/layout */ "./node_modules/antd/es/layout/index.js");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var _mining__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! @mining */ "./resources/js/components/Mining/index.jsx");






var Content = antd_es_layout__WEBPACK_IMPORTED_MODULE_3__["default"].Content;
/* harmony default export */ __webpack_exports__["default"] = (function () {
  return react__WEBPACK_IMPORTED_MODULE_4___default.a.createElement("div", null, react__WEBPACK_IMPORTED_MODULE_4___default.a.createElement(antd_es_breadcrumb__WEBPACK_IMPORTED_MODULE_1__["default"], {
    style: {
      margin: '16px 0'
    }
  }, react__WEBPACK_IMPORTED_MODULE_4___default.a.createElement(antd_es_breadcrumb__WEBPACK_IMPORTED_MODULE_1__["default"].Item, null, "Dashboard")), react__WEBPACK_IMPORTED_MODULE_4___default.a.createElement(Content, {
    style: {
      background: '#fff',
      padding: 24,
      margin: 0,
      minHeight: 280
    }
  }, react__WEBPACK_IMPORTED_MODULE_4___default.a.createElement(_mining__WEBPACK_IMPORTED_MODULE_5__["PoolStatus"], null)));
});

/***/ })

}]);