/*! For license information please see asset_js_view_component_Form_vue.Sa7PEfz2u.js.LICENSE.txt */
"use strict";(self.webpackChunkpmpr_wp_mdl_panel=self.webpackChunkpmpr_wp_mdl_panel||[]).push([["asset_js_view_component_Form_vue"],{2605:function(e,t,n){n.r(t),n.d(t,{default:function(){return s}});var i=function(){var e=this,t=e.$createElement,n=e._self._c||t;return e.hasField?n(e.tag,{tag:"component",attrs:{id:e.id}},[e._l(e.fields,(function(t,i){return[e._t("before-field-row",null,{field:t}),e._v(" "),e.is(t,"Header")?[n("PanelHeaderInput",{key:i,attrs:{title:t.title,tag:"h5",inline:e.inline,classes:"mb-5"}})]:e.is(t,"File")?[n("PanelFileInput",{key:i,attrs:{props:e.prepareProps(t,"file")},on:{input:function(n){return e.onInputChange(n,t.id)}}})]:e.is(t,"Upload")?[n("PanelUploadInput",{key:i,attrs:{props:e.prepareProps(t,"file")},on:{input:function(n){return e.onInputChange(n,t.id)}}})]:e.is(t,"Text")?[n("PanelTextInput",{key:i,attrs:{props:e.prepareProps(t),mask:t.mask,options:t.mask_options},on:{input:function(n){return e.onInputChange(n,t.id)}},scopedSlots:e._u([e.isRTL(t)&&t.icon?{key:"append",fn:function(){return[n("PanelIcon",{attrs:{icon:t.icon}})]},proxy:!0}:t.icon?{key:"preapend",fn:function(){return[n("PanelIcon",{attrs:{icon:t.icon}})]},proxy:!0}:null],null,!0)})]:e.is(t,"Radio")?[n("PanelRadioInput",{key:i,attrs:{props:e.prepareProps(t),options:e.prepareOptions(t.options)},on:{input:function(n){return e.onInputChange(n,t.id)}}})]:e.is(t,"Avatar")?[n("PanelAvatarInput",{key:i,attrs:{props:e.prepareProps(t)},on:{input:function(n){return e.onInputChange(n,t.id)}}})]:e.is(t,"TreeSelect")?[n("PanelTreeSelectInput",{key:i,attrs:{props:e.prepareProps(t),options:t.options,multiple:t.multiple,variations:t.variations},on:{input:function(n){return e.onInputChange(n,t.id)}},scopedSlots:e._u([e.hasSlot("after-field")?{key:"after-field",fn:function(t){var n=t.field;return[e._t("after-field",null,{field:n})]}}:null],null,!0)})]:e.is(t,"Datepicker")?[n("PanelDatepickerInput",{key:i,attrs:{props:e.prepareProps(t)},on:{input:function(n){return e.onInputChange(n,t.id)}}})]:e._e(),e._v(" "),e._t("after-field-row",null,{field:t})]}))],2):n("PanelSpinner")};i._withStripped=!0;var r={name:"PanelForm",data:()=>({hide:{},values:{},ignores:{},rendered:!1}),props:{id:{type:String,default:"fields-container"},tag:{type:String,default:"div"},data:{type:[Object,Array],default:function(){return[]}},fields:{type:[Object,Array],default:function(){return[]}},inline:{type:[Object,Boolean],default:function(){return{xxl:"2"}}},groupClass:{type:String,default:""},size:{type:String,default:"lg"},solid:{type:Boolean,default:!0},labelAlign:{type:[String,Boolean],default:"right"},labelClass:{type:String,default:""},offset:{type:[Number,String],default:3}},beforeMount(){this.hasField&&this.$helper.$each(this.fields,(e=>{this.$helper.$isEmpty(e.ignorable)||(this.ignores[e.id]=e.ignorable)})),this.prepareIgnoreFields()},mounted(){this.$hook.on("form:reset",(e=>{this.values=e,this.prepareIgnoreFields()}))},beforeDestroy(){this.$hook.off("form:",!0)},computed:{hasField(){return!this.$helper.$isEmpty(this.fields)}},methods:{prepareIgnoreFields(){this.ignores&&(this.$helper.$each(this.ignores,((e,t)=>{let n=this.values[t]??this.data[t];this.$helper.$each(e,((e,t)=>{let i=!1;n!=t&&(i=!0),this.hide[e]!==i&&(this.hide[e]=i,this.rendered=!1)}))})),this.rendered||this.$forceUpdate())},prepareOptions(e){let t=[];return this.$helper.$each(e,((e,n)=>{t.push({text:e,value:n})})),t},prepareProps(e,t=null){let n=e.id,i={ignore:!this.$helper.$isEmpty(this.hide[n])&&this.hide[n],ref:n,size:this.size,labelAlign:this.labelAlign,inline:this.inline,groupClass:this.groupClass,attrs:e.attributes,solid:this.solid,label:{text:e.label??e.title,attrs:e.label_attrs},offset:this.offset,name:n},{element:r,options:s,component:l,variations:a,attributes:o,show_label:p,label_attrs:u,convert_keys:h,convert_options:d,...f}=e;i={...f,...i};let c=this.getValue(e);return"file"===t?(i.file=c,i.limit=e.limit):i.value=c,i},isRTL:function(e){return this.getByPath(e,"rtl",!1)},is:function(e,t){return`Panel${t}Input`===this.getByPath(e,"component",!1)},getValue:function(e){let t=e.id,n=this.data,i=this.getByPath(n,t,"");return this.$helper.$isEmpty(i)&&(i=this.getByPath(e,"value",""),this.$helper.$isEmpty(i)&&(i=this.getByPath(e,"default",""))),i},onInputChange:function(e,t){this.$helper.$isEmpty(t)||(this.$nextTick((()=>{this.rendered||(this.rendered=!0,this.$emit("rendered")),this.prepareIgnoreFields()})),this.values[t]=e,this.$emit("changed",this.$helper.$toNormalObject(this.values)))}}},s=(0,n(9792).Z)(r,i,[],!1,null,null,null).exports}}]);