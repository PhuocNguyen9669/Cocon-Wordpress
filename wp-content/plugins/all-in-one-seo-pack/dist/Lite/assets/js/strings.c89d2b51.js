import{d as r}from"./isArrayLikeObject.22a096cb.js";import{i as t}from"./isString.714e3ec6.js";const i=n=>t(n)?o(r(n)):"",o=n=>t(n)?n.replace(/(<([^>]+)>)/gi,""):"",a=n=>typeof n!="string"?n:n.replace(/(<|&lt;).*?\bon\w+=.*?(&gt;|>)/gmi,"");export{i as a,a as s};