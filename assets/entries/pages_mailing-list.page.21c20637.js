import{j as e}from"../chunks/chunk-d0300abc.js";import{r as t}from"../chunks/chunk-ef86a6e3.js";import{I as T,C as f}from"../chunks/chunk-9190d5cc.js";import{I as j}from"../chunks/chunk-e5524897.js";import{I as m,v as k}from"../chunks/chunk-fba2db65.js";import{N as G}from"../chunks/chunk-d877d5af.js";import{g as v,a as E,A as C}from"../chunks/chunk-915dd350.js";import{R as w}from"../chunks/chunk-4b84fa9d.js";import"../chunks/chunk-703f522e.js";import"../chunks/chunk-f3b9c0aa.js";import"../chunks/chunk-b86542f8.js";import"../chunks/chunk-695a66c4.js";import"../chunks/chunk-e948ec12.js";const i={"MAILING_LIST-Name-r001":{placeholder:"Full Name"},"MAILING_LIST-Email-r001":{placeholder:"Email"},"MAILING_LIST-Country-r001":{placeholder:"Country"},"MAILING_LIST-Why-r001":{options:["Joining Neuralink’s Patient Registry","Receiving updates about Clinical Trials","Receiving updates about Neuralink","Receiving updates about Recruiting / Neuralink Careers","Other"]},"MAILING_LIST-Why_Explained-r001":{placeholder:"I am joining the mailing list because..."}},W=v(i);class V{static getEmptyRecord(){return E(W)}static async submit(o){return await C.submitMailingListFormData(o)}}const R="750px",K="751px",P="900px",F="901px",O="1399px",B="1400px",D="600px",J="_container_mtuth_11",q="_checkboxContainer_mtuth_20",H="_error_mtuth_35",s={smallTabletMax:R,mobileMin:K,mobileMax:P,tabletMin:F,tabletMax:O,desktopMin:B,mobileMaxHeightLandscape:D,container:J,checkboxContainer:q,error:H},Y=()=>{const[n,o]=t.useState(""),[I,g]=t.useState(""),[h,y]=t.useState(""),[d,b]=t.useState(""),[l,N]=t.useState(new Set),[p,M]=t.useState(""),[x,r]=t.useState(""),[S,_]=t.useState(!1);async function A(){if(!await k()){r("You are missing entries above.");return}r("");const c={"MAILING_LIST-Email-r001":I,"MAILING_LIST-Name-r001":n,"MAILING_LIST-Age-r001":h,"MAILING_LIST-Country-r001":d,"MAILING_LIST-Why-r001":JSON.stringify(Array.from(l)),"MAILING_LIST-Why_Explained-r001":p};if(!(await V.submit(c)).ok)r("Error submitting to the Mailing List. Try refreshing or try again later.");else return r(""),_(!0)}return e.jsxs("section",{className:s.container,children:[e.jsx("h1",{children:"Mailing List"}),e.jsx("h3",{children:"Please fill out the following information to join our mailing list."}),e.jsx(m,{formKey:"MAILING_LIST-Name-r001",value:n,setValue:o,placeholder:i["MAILING_LIST-Name-r001"].placeholder}),e.jsx(T,{formKey:"MAILING_LIST-Email-r001",required:!0,value:I,setValue:g,placeholder:i["MAILING_LIST-Email-r001"].placeholder}),e.jsx(j,{formKey:"MAILING_LIST-Age-r001",value:h,setValue:y}),e.jsx(m,{formKey:"MAILING_LIST-Country-r001",required:!0,value:d,setValue:b,placeholder:i["MAILING_LIST-Country-r001"].placeholder}),e.jsx("h3",{children:"What are you most interested in?"}),e.jsx("div",{className:s.checkboxContainer,children:i["MAILING_LIST-Why-r001"].options.map(a=>e.jsx(f,{formKey:"MAILING_LIST-Why-r001",option:a,optionKey:a,onSelect:c=>N(L=>{const u=new Set(L);return c.target.checked?u.add(a):u.delete(a),u}),selected:l.has(a)},a))}),l.has("Other")&&e.jsxs(e.Fragment,{children:[e.jsx("h3",{children:"Why are you joining the mailing list?"}),e.jsx(m,{useTextArea:!0,formKey:"MAILING_LIST-Why_Explained-r001",value:p,setValue:M,placeholder:i["MAILING_LIST-Why_Explained-r001"].placeholder})]}),e.jsx(w,{}),e.jsx("h4",{children:'By clicking "Subscribe,” you agree to receive updates by email about Neuralink as well as Neuralink’s products and activities such as Neuralink’s Patient Registry. To learn more, including how to unsubscribe, visit our Privacy Policy.'}),e.jsx(G,{large:!0,onClick:A,className:s.submit,text:"Subscribe"}),x&&e.jsx("h4",{className:s.error,children:x}),S&&e.jsx("h4",{children:"Congratulations, you have been added to the mailing list!"})]})},oe={title:"Join Our Mailing List | Neuralink",name:"mailing-list",description:"Be the first to know about breakthroughs in brain-computer interfaces. Subscribe to Neuralink to receive the latest updates and opportunities in your inbox."};function le(){return e.jsx(Y,{})}export{le as Page,oe as documentProps};