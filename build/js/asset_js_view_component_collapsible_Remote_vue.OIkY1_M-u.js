/*! For license information please see asset_js_view_component_collapsible_Remote_vue.OIkY1_M-u.js.LICENSE.txt */
"use strict";(self.webpackChunkpmpr_wp_mdl_panel=self.webpackChunkpmpr_wp_mdl_panel||[]).push([["asset_js_view_component_collapsible_Remote_vue"],{2985:function(t,e,n){n.r(e),n.d(e,{default:function(){return i}});var l=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("PanelCard",{attrs:{title:t.title,description:t.description},scopedSlots:t._u([t.hasSlot("toolbar")?{key:"toolbar",fn:function(){return[t._t("toolbar")]},proxy:!0}:null,{key:"body",fn:function(){return[t._t("before-body"),t._v(" "),n("PanelRemoteList",t._b({scopedSlots:t._u([t.columns?{key:"list",fn:function(e){var l=e.items,o=e.loading;return[n("PanelDatatableTable",{attrs:{items:l,loading:o,columns:t.columns},scopedSlots:t._u([{key:"before-heading",fn:function(){return[n("th",{staticStyle:{width:"1%"}})]},proxy:!0},{key:"before-item",fn:function(e){var l=e.item,o=e.item_key,i=e.itemTag,r=e.itemAttrs;return[n(i,t._b({directives:[{name:"b-toggle",rawName:"v-b-toggle",value:"collapse-"+o,expression:"`collapse-${item_key}`"}],key:"before-item-"+o,tag:"component"},"component",t.prepareItemAttrs(r),!1),[n("th",{staticStyle:{width:"1%"}},[n("PanelIcon",{staticClass:"rotate-90 d-block",attrs:{icon:"fasm/6/set/angle-left",size:"xs",color:"gray"}})],1),t._v(" "),t._l(t.columns,(function(e,i){return t.getValue(e,"display",!0)?n("td",{key:o+"-"+i,class:"datatable-cell"+(e.singleline?" single-line":""),style:"width: "+t.getValue(e,"width")},[t._t("toggle-td",null,{item:l,column:e,column_key:i})],2):t._e()}))],2)]}},{key:"item",fn:function(e){var l=e.item,o=e.item_key;e.itemTag,e.itemAttrs;return[n("b-collapse",{attrs:{tag:"div",id:"collapse-"+o,accordion:t.accordion}},[n("div",{staticClass:"py-3"},[t._t("content",null,{item:l,item_key:o})],2)])]}}],null,!0)})]}}:{key:"item",fn:function(e){var l=e.item,o=e.item_key,i=(e.first,e.last);return[n("PanelCollapsibleItem",{attrs:{separator:!i,item:l,id:o,accordion:t.accordion},scopedSlots:t._u([t.hasSlot("toggle")?{key:"toggle",fn:function(e){var n=e.item;return[t._t("toggle",null,{item:n})]}}:null,t.hasSlot("actions")?{key:"actions",fn:function(e){var n=e.item;return[t._t("actions",null,{item:n})]}}:null,t.hasSlot("content")?{key:"content",fn:function(e){var n=e.item;return[t._t("content",null,{item:n})]}}:null],null,!0)})]}},{key:"not-found",fn:function(e){var l=e.text;return[t._t("not-found",null,{text:l}),t._v(" "),t.hasSlot("not-found")?t._e():n("p",{staticClass:"mb-0 font-size-h6",domProps:{innerHTML:t._s(l)}})]}}],null,!0)},"PanelRemoteList",t.remote,!1)),t._v(" "),t._t("after-body")]},proxy:!0}],null,!0)})};l._withStripped=!0;var o={name:"PanelCollapsibleRemote",props:{remote:{type:Object,default:function(){return{}}},columns:{type:Object,default:function(){return null}},title:String,accordion:String,description:String},methods:{prepareItemAttrs(t){return t.class=(t.class??"")+" collapsible rotate",this.accordion&&(t.class+=` ${this.accordion}`),t}}},i=(0,n(9792).Z)(o,l,[],!1,null,null,null).exports}}]);