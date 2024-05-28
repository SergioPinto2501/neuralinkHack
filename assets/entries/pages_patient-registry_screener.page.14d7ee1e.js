import{j as e}from"../chunks/chunk-d0300abc.js";import{u as C,a as R,c as E,P as N,d as l,e as w,r as c,S as G,b as j}from"../chunks/chunk-b2c6fac3.js";import{P}from"../chunks/chunk-33ad485e.js";import{c as I}from"../chunks/chunk-f3b9c0aa.js";import{r as S}from"../chunks/chunk-ef86a6e3.js";import{A as T}from"../chunks/chunk-cc51208d.js";import{Q as s,I as d,R as v,a as B}from"../chunks/chunk-31e5e8fb.js";import{L as q}from"../chunks/chunk-e948ec12.js";import{v as A}from"../chunks/chunk-fba2db65.js";import{Q as u}from"../chunks/chunk-8d864b56.js";import{s as o}from"../chunks/chunk-dc6ab7e3.js";import"../chunks/chunk-703f522e.js";import"../chunks/chunk-915dd350.js";import"../chunks/chunk-b86542f8.js";import"../chunks/chunk-695a66c4.js";const Y="750px",V="751px",_="900px",M="901px",O="1399px",k="1400px",D="600px",F="_screenerView_1htwx_11",K="_section_1htwx_11",Q="_questionListItem_1htwx_14",H="_nextContainer_1htwx_17",W="_nextArrow_1htwx_20",i={smallTabletMax:Y,mobileMin:V,mobileMax:_,tabletMin:M,tabletMax:O,desktopMin:k,mobileMaxHeightLandscape:D,screenerView:F,section:K,questionListItem:Q,nextContainer:H,nextArrow:W};function U(){return e.jsxs("section",{className:I(o.section,o.titleSplash),children:[e.jsx("h1",{children:"Patient Registry Application"}),e.jsx("h2",{children:"Screener"}),e.jsx("h3",{children:"Please fill out the brief screener below to determine whether you are eligible to submit a Patient Registry application."})]})}const z=()=>{const m=C(),t=R(),x=E(),[p,h]=S.useState(!1);function g(){m.update({...w.getEmptyRecord(),furthestPage:"StatusIneligible"}),window.location.href=c.StatusIneligible.href}function y(){x.update(G.mergeWithScreenerFormData(x.formData)),m.update({furthestPage:"Consent"}),q.asSingleton().onNextPageNavigation(c.Consent.href),window.location.href=c.Consent.href}async function L(){if(!await A())return;h(!0);const b=["ELIGIBILITY-AdultStatus-r001","ELIGIBILITY-CriteriaDiagnosis-r001","ELIGIBILITY-ValidResidency-r001"];for(const f of b)if(t.data[f]==="No"){g();return}y()}const n=t.data["ELIGIBILITY-ValidResidency-r001"]==="Yes",a=3;return e.jsxs(N,{className:i.screenerView,showNav:"Screener",children:[e.jsx(U,{}),e.jsxs("section",{className:I(o.section,i.section),children:[e.jsx(u,{className:i.questionListItem,total:a,number:1,children:e.jsx(s,{label:"Are you currently a legal adult (at least 18 years old and the age of majority in your state or province/territory)?",required:!0,children:e.jsx(d,{formKey:"ELIGIBILITY-AdultStatus-r001",selected:t.data["ELIGIBILITY-AdultStatus-r001"],onSelect:r=>t.update({"ELIGIBILITY-AdultStatus-r001":r}),required:!0})})},"ELIGIBILITY-AdultStatus-r001"),e.jsx(u,{className:i.questionListItem,total:a,number:2,children:e.jsx(s,{label:"Do you have any of the following conditions: quadriplegia, paraplegia, visual impairment or blindness, aphasia or the inability to speak, hearing impairment or deafness, and/or major limb amputation (affecting above or below the elbow and/or above or below the knee)?",required:!0,children:e.jsx(d,{formKey:"ELIGIBILITY-CriteriaDiagnosis-r001",selected:t.data["ELIGIBILITY-CriteriaDiagnosis-r001"],onSelect:r=>t.update({"ELIGIBILITY-CriteriaDiagnosis-r001":r}),required:!0})})},"ELIGIBILITY-CriteriaDiagnosis-r001"),e.jsx(u,{className:i.questionListItem,total:a,number:3,children:e.jsx(s,{label:"Are you a U.S. or Canadian resident?",required:!0,children:e.jsx(d,{formKey:"ELIGIBILITY-ValidResidency-r001",selected:t.data["ELIGIBILITY-ValidResidency-r001"],onSelect:r=>t.update({"ELIGIBILITY-ValidResidency-r001":r}),required:!0})})},"ELIGIBILITY-ValidResidency-r001"),n&&e.jsx(s,{label:"Select your country:",required:n,children:e.jsx(v,{formKey:"REGION-Country-r001",selected:t.data["REGION-Country-r001"],onSelect:r=>t.update({"REGION-Country-r001":r}),options:l["REGION-Country-r001"].options,required:n})}),n&&t.data["REGION-Country-r001"]==="Canada"&&e.jsx(s,{label:"What province/territory do you live in?",required:n&&t.data["REGION-Country-r001"]==="Canada",children:e.jsx(B,{kind:"Province",formKey:"REGION-Province-r001",label:l["REGION-Province-r001"].label,placeholder:l["REGION-Province-r001"].placeholder,value:t.data["REGION-Province-r001"],setValue:r=>t.update({"REGION-Province-r001":r}),required:n&&t.data["REGION-Country-r001"]==="Canada"})})]}),e.jsx("section",{className:I(o.section,i.nextContainer),children:p?e.jsx("span",{children:"Continuing to Informed Consent Form..."}):e.jsx(T,{className:i.nextArrow,text:"Continue to our Informed Consent Form",onClick:()=>{L()},direction:"right",color:"black"})})]})},ue={title:"Patient Registry | Neuralink",name:"patient-registry-screener",description:P,showCloseHeader:!0,disableAnnouncementBanner:!0,disableFooter:!0,useAwsRum:!0};function Ie(){return e.jsx(j,{children:e.jsx(z,{})})}export{Ie as Page,ue as documentProps};
