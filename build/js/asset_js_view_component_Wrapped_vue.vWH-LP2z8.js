/*! For license information please see asset_js_view_component_Wrapped_vue.vWH-LP2z8.js.LICENSE.txt */
"use strict";(self.webpackChunkpmpr_wp_mdl_panel=self.webpackChunkpmpr_wp_mdl_panel||[]).push([["asset_js_view_component_Wrapped_vue"],{178:function(e,t,n){n.r(t),n.d(t,{default:function(){return p}});var a={functional:!0,name:"PanelWrapped",props:{tag:{default:"div",type:String},wrap:{default:!1,type:Boolean},wrapRoot:{default:!1,type:Boolean}},install(e){this.installed||(e.component("WrappedComponent",this),this.installed=!0)},render(e,t){const{data:n,parent:a,props:p}=t,r=a.$options._base.util.warn,o={...t.slots()};Object.keys(o).forEach((e=>o[e]=[...o[e]]));const l=(e,t)=>{var n;return(n=e.componentOptions||e).children=[].concat(n.children||[],t||[]),n.children.length||(n.children=void 0),e};if(!o.wrapper){const e=[];o.default.forEach(((t,n)=>{if(t.data&&t.data.scopedSlots&&t.data.scopedSlots.wrapper){o.default.splice(n,1);const a=t.data.scopedSlots.wrapper();delete t.data.scopedSlots,e.push(l(t,a))}})),e.length&&(o.wrapper=e)}if(!o.wrapper)return r('You must provide a template slot named "wrapper" for this component to function as intended (e.g. <template v-slot="wrapper">).');if(!o.wrapper.length)return r("You must provide a at least one root component/element inside the wrapper template for this component to function as intended.");if(!p.wrap)return p.wrapRoot||1!==o.default.length?e(p.tag,n,o.default):o.default;const s=l(o.wrapper.shift(),o.default);return p.wrapRoot||o.wrapper.length?e(p.tag,n,[s,...o.wrapper]):s}},p=(0,n(9792).Z)(a,undefined,undefined,!1,null,null,null).exports}}]);