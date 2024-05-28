import{r as d}from"./chunk-703f522e.js";var f={exports:{}},t={};/**
 * @license React
 * react-jsx-runtime.production.min.js
 *
 * Copyright (c) Facebook, Inc. and its affiliates.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */var p;function y(){if(p)return t;p=1;var m=d(),a=Symbol.for("react.element"),R=Symbol.for("react.fragment"),c=Object.prototype.hasOwnProperty,l=m.__SECRET_INTERNALS_DO_NOT_USE_OR_YOU_WILL_BE_FIRED.ReactCurrentOwner,x={key:!0,ref:!0,__self:!0,__source:!0};function u(o,r,s){var e,n={},i=null,_=null;s!==void 0&&(i=""+s),r.key!==void 0&&(i=""+r.key),r.ref!==void 0&&(_=r.ref);for(e in r)c.call(r,e)&&!x.hasOwnProperty(e)&&(n[e]=r[e]);if(o&&o.defaultProps)for(e in r=o.defaultProps,r)n[e]===void 0&&(n[e]=r[e]);return{$$typeof:a,type:o,key:i,ref:_,props:n,_owner:l.current}}return t.Fragment=R,t.jsx=u,t.jsxs=u,t}f.exports=y();var O=f.exports;export{O as j};
