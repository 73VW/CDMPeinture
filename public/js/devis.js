/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 210);
/******/ })
/************************************************************************/
/******/ ({

/***/ 210:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(211);


/***/ }),

/***/ 211:
/***/ (function(module, exports) {

$(document).ready(function () {
	var ligne = 1;
	var ligneCalcul = 1;

	function ligneEnCours(e) {
		ligneCalcul = e.attr('id');
	}

	function totalDevis() {
		var sousTot = 0;
		var total = 0;

		for (var i = 1; i <= ligne; i++) {

			sousTot = parseInt($("#montant" + i).text().slice(0, -4));

			total += sousTot;
		}

		$("#montantTot").html(total + " frs");
	}

	$(document).keypress(function (e) {
		if (e.which == 13) {

			if ($("#code_input" + ligneCalcul + " input").val().length !== 0 || $("#texte" + ligneCalcul + " input").val().length !== 0) {

				var code = $("#code_input" + ligneCalcul + " input").val();
				var texte = $("#texte" + ligneCalcul + " input").val();
				$("#code_input" + ligneCalcul).empty();
				$("#texte" + ligneCalcul).empty();

				if (isNaN(code)) {
					//TODO : interpréter le code entré
					$("#code_input" + ligneCalcul).append('<input id=' + ligneCalcul + ' type=text value = ' + code + '>');
					$("#texte" + ligneCalcul).append('<input id=' + ligneCalcul + ' type=text value = ' + texte + '>');
				} else {
					$("#code_input" + ligneCalcul).append('<input id=' + ligneCalcul + ' type=text style=font-weight:bold; value = ' + code + '>');
					$("#texte" + ligneCalcul).append('<input id=' + ligneCalcul + ' type=text style=font-weight:bold; value = ' + texte + '>');
				}
			}

			if ($("#code_input" + ligne + " input").val().length !== 0 || $("#texte" + ligne + " input").val().length !== 0) {
				ligne++;

				$("tbody").append('<tr>' + '<td id = code_input' + ligne + ' class = petit><input id=' + ligne + ' type=text></td>' + '<td id = texte' + ligne + '><input id=' + ligne + ' type=text></td>' + '<td id = quantite' + ligne + '><input id=' + ligne + ' type=number value=0></td>' + '<td id = unite' + ligne + ' class = petit><input id=' + ligne + ' type=text></td>' + '<td id = prix_unit' + ligne + '><input id=' + ligne + ' type=number value=0></td>' + '<td id = montant' + ligne + '>0 frs</td>' + '</tr>');
			}
		}
	});

	$(document).on("click", "input", function () {
		ligneEnCours($(this));

		$('#quantite' + ligneCalcul + ' input').each(function () {
			var elem = $(this);

			elem.data('oldVal', elem.val());

			elem.bind("propertychange change click keyup input paste", function (event) {

				if (elem.data('oldVal') != elem.val()) {

					elem.data('oldVal', elem.val());

					$("#montant" + ligneCalcul).html($("#quantite" + ligneCalcul + " input").val() * $("#prix_unit" + ligneCalcul + " input").val() + " frs");
					totalDevis();
				}
			});
		});

		$('#prix_unit' + ligneCalcul + ' input').each(function () {
			var elem = $(this);

			elem.data('oldVal', elem.val());

			elem.bind("propertychange change click keyup input paste", function (event) {

				if (elem.data('oldVal') != elem.val()) {

					elem.data('oldVal', elem.val());

					$("#montant" + ligneCalcul).html($("#quantite" + ligneCalcul + " input").val() * $("#prix_unit" + ligneCalcul + " input").val() + " frs");
					totalDevis();
				}
			});
		});
	});
});

/***/ })

/******/ });