/*! For license information please see asset_js_view_component_input_File_vue.LskoAGWEe.js.LICENSE.txt */
(self.webpackChunkpmpr_wp_pkg_panel=self.webpackChunkpmpr_wp_pkg_panel||[]).push([["asset_js_view_component_input_File_vue"],{7407:function(e,t,p){"use strict";p.r(t),p.d(t,{default:function(){return s}});var r=function(){var e=this,t=e.$createElement,p=e._self._c||t;return p("PanelInput",e._b({scopedSlots:e._u([{key:"input",fn:function(t){var r=t.attrs;t.ref;return[p("b-form-file",e._b({model:{value:e.value,callback:function(t){e.value=t},expression:"value"}},"b-form-file",e.prepareAttrs(r),!1))]}},e.hasSlot("desc")?{key:"desc",fn:function(){return[e._t("desc")]},proxy:!0}:null],null,!0)},"PanelInput",e.props,!1))};r._withStripped=!0;var l={name:"PanelFileInput",props:{props:{}},data:()=>({value:null,preview:null}),watch:{value(){this.$helper.$fileReader(this.value).then((e=>{this.preview=e,this.$emit("input",e)}))}},beforeMount(){this.preview=this.props.file},methods:{prepareAttrs(e){let t={};return this.$helper.$each(["require","name","placeholder","disabled","drop-placeholder","accept"],(p=>{e.hasOwnProperty(p)&&(t[p]=e[p])})),t.size=this.props.size,t}}},n=(0,p(9792).Z)(l,r,[],!1,null,null,null);n.options.__file="asset/js/view/component/input/File.vue";var s=n.exports}}]);