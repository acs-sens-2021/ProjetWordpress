!function(e){var t={};function n(r){if(t[r])return t[r].exports;var o=t[r]={i:r,l:!1,exports:{}};return e[r].call(o.exports,o,o.exports,n),o.l=!0,o.exports}n.m=e,n.c=t,n.d=function(e,t,r){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:r})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var r=Object.create(null);if(n.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var o in e)n.d(r,o,function(t){return e[t]}.bind(null,o));return r},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="",n(n.s=751)}({751:function(e,t,n){"use strict";n.r(t);var r=function(e){var t,n=null!==(t=wcpay_order_config)&&void 0!==t?t:wc.wcSettings.getSetting("woocommerce_payments_data");return null==n?void 0:n[e]};jQuery((function(e){var t,n,o=null!==(t=r("disableManualRefunds"))&&void 0!==t&&t,u=null!==(n=r("manualRefundsTip"))&&void 0!==n?n:"";e("#woocommerce-order-items").on("click","button.refund-items",(function(){var t=e(".do-manual-refund");o?t.hide():t.attr({title:u}).tipTip()}))}))}});