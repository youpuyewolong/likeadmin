import{d as a,z as e,m as s,W as o,aw as l,o as t,c as r,w as d,b as u,l as p,t as m,h as i,aE as f,ag as c,k as n,r as _,a as w}from"./index.26a6cf84.js";import{a as b,_ as x}from"./u-form-item.9efeed79.js";import{_ as h}from"./u-form.4eb8cd7e.js";import{_ as v}from"./u-button.ae3a4a51.js";import{_ as V}from"./plugin-vue_export-helper.21dcd24c.js";import"./u-icon.7191c6e8.js";import"./emitter.5b880544.js";var y=V(a({__name:"change_password",setup(a){const V=e(""),y=s({password:"",password_confirm:""}),j=async()=>y.old_password||"set"==V.value?y.password?y.password_confirm?y.password!=y.password_confirm?uni.$u.toast("两次输入的密码不一致"):(await f(y),uni.$u.toast("操作成功"),void setTimeout((()=>{c()}),1500)):uni.$u.toast("请输入确认密码"):uni.$u.toast("请输入密码"):uni.$u.toast("请输入原来的密码");return o((a=>{V.value=a.type||"","set"==V.value&&l({title:"设置登录密码"})})),(a,e)=>{const s=n,o=_(w("u-input"),b),l=_(w("u-form-item"),x),f=_(w("u-form"),h),c=_(w("u-button"),v);return t(),r(s,{class:"register bg-white min-h-full flex flex-col items-center px-[40rpx] pt-[100rpx] box-border"},{default:d((()=>[u(s,{class:"w-full"},{default:d((()=>[u(s,{class:"text-2xl font-medium mb-[60rpx]"},{default:d((()=>[p(m("set"==V.value?"设置登录密码":"修改登录密码"),1)])),_:1}),u(f,{borderBottom:"","label-width":150},{default:d((()=>["set"!=V.value?(t(),r(l,{key:0,label:"原密码",borderBottom:""},{default:d((()=>[u(o,{class:"flex-1",type:"password",modelValue:y.old_password,"onUpdate:modelValue":e[0]||(e[0]=a=>y.old_password=a),border:!1,placeholder:"请输入原来的密码"},null,8,["modelValue"])])),_:1})):i("v-if",!0),u(l,{label:"新密码",borderBottom:""},{default:d((()=>[u(o,{class:"flex-1",type:"password",modelValue:y.password,"onUpdate:modelValue":e[1]||(e[1]=a=>y.password=a),placeholder:"6-20位数字+字母或符号组合",border:!1},null,8,["modelValue"])])),_:1}),u(l,{label:"确认密码",borderBottom:""},{default:d((()=>[u(o,{class:"flex-1",type:"password",modelValue:y.password_confirm,"onUpdate:modelValue":e[2]||(e[2]=a=>y.password_confirm=a),placeholder:"再次输入新密码",border:!1},null,8,["modelValue"])])),_:1})])),_:1}),u(s,{class:"mt-[100rpx]"},{default:d((()=>[u(c,{type:"primary",shape:"circle",onClick:j},{default:d((()=>[p(" 确定 ")])),_:1})])),_:1})])),_:1})])),_:1})}}}),[["__scopeId","data-v-cb3b940a"]]);export{y as default};
