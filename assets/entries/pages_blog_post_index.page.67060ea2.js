import{j as e}from"../chunks/chunk-d0300abc.js";import{u as C}from"../chunks/chunk-5c891ec2.js";import{r as k}from"../chunks/chunk-ef86a6e3.js";import{c as l}from"../chunks/chunk-f3b9c0aa.js";import{L}from"../chunks/chunk-6269211f.js";import{A as M}from"../chunks/chunk-cc51208d.js";import{B as H,f as B}from"../chunks/chunk-eab8fe09.js";import"../chunks/chunk-703f522e.js";import"../chunks/chunk-39bbbe94.js";import"../chunks/chunk-e905571f.js";const S="750px",I="751px",P="900px",q="901px",D="1399px",F="1400px",E="600px",O="_blogComponent_h6ibl_11",R="_full_h6ibl_14",A="_padded_h6ibl_26",Q="_lightText_h6ibl_47",z="_sectionTitle_h6ibl_51",t={smallTabletMax:S,mobileMin:I,mobileMax:P,tabletMin:q,tabletMax:D,desktopMin:F,mobileMaxHeightLandscape:E,blogComponent:O,full:R,padded:A,lightText:Q,sectionTitle:z,"text-sm":"_text-sm_h6ibl_56","text-md":"_text-md_h6ibl_63","text-lg":"_text-lg_h6ibl_70"},W="_blockQuote_1qcxy_1",V="_right_1qcxy_1",U="_quote_1qcxy_1",N={blockQuote:W,right:V,quote:U};function G({fields:{quote:a}}){return e.jsx("section",{className:l(t.blogComponent,t.padded,N.blockQuote),children:e.jsx("div",{children:e.jsx("blockquote",{className:l(t["text-md"],N.quote),dangerouslySetInnerHTML:{__html:a}})})})}const J="750px",Y="751px",K="900px",X="901px",Z="1399px",ee="1400px",te="600px",ae="_figCaption_q0q1g_11",oe="_captionLabel_q0q1g_14",se="_captionText_q0q1g_18",f={smallTabletMax:J,mobileMin:Y,mobileMax:K,tabletMin:X,tabletMax:Z,desktopMin:ee,mobileMaxHeightLandscape:te,figCaption:ae,captionLabel:oe,captionText:se};function le(a){return a?`(Fig ${String(a).padStart(2,"0")})`:""}function _({className:a,figureNumber:s,caption:n}){return e.jsxs("figcaption",{className:l(a,f.figCaption),children:[e.jsx("label",{className:f.captionLabel,children:le(s)}),e.jsx("div",{className:l(t.lightText,f.captionText),dangerouslySetInnerHTML:{__html:n??""}})]})}function $({title:a}){return a?e.jsx("h4",{className:l(t.lightText,t["text-md"]),children:a}):e.jsx(e.Fragment,{})}const ne="750px",ie="751px",ce="900px",re="901px",de="1399px",xe="1400px",me="600px",pe="_breakdownTable_4z0r8_11",be="_table_4z0r8_11",T={smallTabletMax:ne,mobileMin:ie,mobileMax:ce,tabletMin:re,tabletMax:de,desktopMin:xe,mobileMaxHeightLandscape:me,breakdownTable:pe,table:be};function he({fields:{caption:a,figure_number:s,title:n,items:i}}){return e.jsxs("section",{className:l(t.blogComponent,t.padded,T.breakdownTable),children:[e.jsxs("div",{children:[e.jsx($,{title:n}),e.jsx("div",{role:"table",className:T.table,children:i.map(o=>e.jsxs("div",{role:"row",children:[e.jsxs("header",{className:t["text-md"],role:"rowheader",children:[e.jsx("h4",{className:t["text-md"],children:o.title}),e.jsxs("p",{className:t.lightText,children:[" ",o.description]})]}),e.jsx("div",{className:t["text-md"],role:"cell",children:o.total.toString()}),e.jsxs("div",{className:t["text-md"],role:"cell",children:[o.percentage.toString(),"%"]})]},o.title))})]}),a&&e.jsx("div",{children:e.jsx(_,{figureNumber:s,caption:a})})]})}const ge="750px",ue="751px",Me="900px",_e="901px",fe="1399px",je="1400px",$e="600px",ke="_h2HeadingBlock_1gmqo_11",Ne={smallTabletMax:ge,mobileMin:ue,mobileMax:Me,tabletMin:_e,tabletMax:fe,desktopMin:je,mobileMaxHeightLandscape:$e,h2HeadingBlock:ke};function Te({fields:{title:a}}){return e.jsx("section",{className:l(t.blogComponent,t.padded,Ne.h2HeadingBlock),children:e.jsx("div",{children:e.jsx("h2",{children:a})})})}const ye="750px",ve="751px",we="900px",Ce="901px",Le="1399px",He="1400px",Be="600px",Se="_container_18j0w_11",Ie="_imgContainer_18j0w_11",Pe="_img_18j0w_11",g={smallTabletMax:ye,mobileMin:ve,mobileMax:we,tabletMin:Ce,tabletMax:Le,desktopMin:He,mobileMaxHeightLandscape:Be,container:Se,imgContainer:Ie,img:Pe};function qe({fields:{caption:a,figure_number:s,image_alt:n="",image:i,max_width_px:o}}){return e.jsxs("figure",{className:l(t.blogComponent,t.padded,g.container),children:[e.jsx(L,{containerClassName:g.imgContainer,className:g.img,src:i,alt:n,maxWidthPx:o,fit:"contain"}),a&&e.jsx(_,{className:g.caption,figureNumber:s,caption:a})]})}function De({fields:{href:a,link_name:s}}){return e.jsx("section",{className:l(t.blogComponent,t.padded),children:e.jsx(M,{color:"black",className:t.right,text:s,href:a})})}const Fe="750px",Ee="751px",Oe="900px",Re="901px",Ae="1399px",Qe="1400px",ze="600px",We="_multiListTable_7w487_11",Ve="_table_7w487_11",Ue="_padded_7w487_27",Ge="_borderBottomLight_7w487_30",b={smallTabletMax:Fe,mobileMin:Ee,mobileMax:Oe,tabletMin:Re,tabletMax:Ae,desktopMin:Qe,mobileMaxHeightLandscape:ze,multiListTable:We,table:Ve,padded:Ue,borderBottomLight:Ge};function Je({fields:{caption:a,figure_number:s,title:n,table_items:i}}){const o={};for(const{belongs_to_header:c,item:r}of i)c in o?o[c].push(r):o[c]=[r];return e.jsxs("section",{className:l(t.blogComponent,t.padded,b.multiListTable),children:[e.jsxs("div",{children:[e.jsx($,{title:n}),e.jsx("div",{className:b.table,children:Object.entries(o).map(([c,r])=>e.jsxs("div",{role:"table",children:[e.jsx("header",{className:l(b.padded,t["text-md"]),role:"rowheader",children:c}),e.jsx("div",{role:"cell",children:r.map(p=>e.jsx("div",{className:l(b.padded,b.borderBottomLight,t["text-md"]),children:p},p))})]},c))})]}),a&&e.jsx("div",{children:e.jsx(_,{figureNumber:s,caption:a})})]})}const Ye="750px",Ke="751px",Xe="900px",Ze="901px",et="1399px",tt="1400px",at="600px",ot="_textBlock_1sfnj_11",st={smallTabletMax:Ye,mobileMin:Ke,mobileMax:Xe,tabletMin:Ze,tabletMax:et,desktopMin:tt,mobileMaxHeightLandscape:at,textBlock:ot};function lt({fields:{body:a,title:s}}){return e.jsx("section",{className:l(t.blogComponent,t.padded,st.textBlock),children:e.jsxs("div",{className:t.right,children:[s&&e.jsx("h4",{className:l(t.lightText),children:s}),e.jsx("div",{className:t["text-md"],dangerouslySetInnerHTML:{__html:a}})]})})}const nt="750px",it="751px",ct="900px",rt="901px",dt="1399px",xt="1400px",mt="600px",pt="_twoColumnTable_1910f_11",bt="_tableBlock_1910f_15",ht="_small_1910f_43",h={smallTabletMax:nt,mobileMin:it,mobileMax:ct,tabletMin:rt,tabletMax:dt,desktopMin:xt,mobileMaxHeightLandscape:mt,twoColumnTable:pt,tableBlock:bt,small:ht};function gt({fields:{title:a,header_one:s,header_two:n,content_one:i,content_two:o,table_block_class:c=""}}){const r=Math.max(i.length,o.length);return e.jsx("section",{role:"table",className:l(t.blogComponent,t.padded,h.twoColumnTable),children:e.jsxs("div",{className:t.right,children:[e.jsx($,{title:a}),e.jsxs("div",{className:l(h.tableBlock,t["text-md"],h[c]),children:[(s||n)&&e.jsxs(e.Fragment,{children:[e.jsx("header",{role:"columnheader",className:l(h.tableBlockHeader,t.lightText),children:s}),e.jsx("header",{role:"columnheader",className:l(h.tableBlockHeader,t.lightText),children:n})]}),Array.from({length:r},(p,d)=>[e.jsx("div",{className:t["text-md"],dangerouslySetInnerHTML:{__html:i[d].item}},`${d}-left`),e.jsx("div",{className:t["text-md"],dangerouslySetInnerHTML:{__html:o[d].item}},`${d}-right`)])]})]})})}const ut="750px",Mt="751px",_t="900px",ft="901px",jt="1399px",$t="1400px",kt="600px",Nt="_videoContainer_pjfxd_11",Tt="_video_pjfxd_11",yt="_portrait_pjfxd_35",vt="_autoplayInline_pjfxd_39",u={smallTabletMax:ut,mobileMin:Mt,mobileMax:_t,tabletMin:ft,tabletMax:jt,desktopMin:$t,mobileMaxHeightLandscape:kt,videoContainer:Nt,video:Tt,portrait:yt,autoplayInline:vt};function wt({fields:{video_id:a,caption:s,figure_number:n,autoplay_inline:i,full_width:o,portrait:c=!1,custom_aspect_ratio:r,max_width_px:p}}){const d=new URL(`/embed/${a}`,"https://www.youtube.com");return i&&[["mute",1],["autoplay",1],["loop",1],["playlist",a],["controls",0],["disablekb",1]].forEach(([v,w])=>{d.searchParams.append(v,w.toString())}),e.jsxs("figure",{className:l(t.blogComponent,t.full,u.videoContainer,{[u.autoplayInline]:i,[t.padded]:!o,[u.portrait]:c}),children:[e.jsx("div",{className:u.video,style:{aspectRatio:r,maxWidth:p||"unset"},children:e.jsx("iframe",{src:d.toString(),allow:"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture",allowFullScreen:!0})}),s&&e.jsx(_,{className:l({[t.padded]:o}),figureNumber:n,caption:s})]})}const y={block_quote:G,breakdown_table:he,h2_heading_block:Te,image_with_caption:qe,link_block:De,multi_list_table:Je,text_block:lt,two_column_table:gt,youtube_video:wt},Ct=a=>typeof y[a.type]<"u"?k.createElement(y[a.type],{key:JSON.stringify(a),...a}):k.createElement(()=>e.jsxs("div",{children:["The component ",a.type," has not been created yet."]},Math.random())),Lt="_container_rlxf1_1",Ht="_callout_rlxf1_5",m={container:Lt,callout:Ht};function Bt(){return e.jsx("section",{className:l(t.blogComponent,t.padded,m.container),children:e.jsxs("div",{className:m.callout,children:[e.jsx("h3",{className:t["text-lg"],children:"If you are an animal welfare scientist or have expertise in behavioral analysis, love working with animals, and want to revolutionize animal welfare, please check out our jobs page!"}),e.jsx(M,{color:"black",href:"/careers/",text:"Careers"})]})})}function St(){return e.jsx("section",{className:l(t.blogComponent,t.padded,m.container),children:e.jsxs("div",{className:m.callout,children:[e.jsx("h3",{className:t["text-lg"],children:"Developing brain-computer interfaces is an interdisciplinary challenge. We are looking to hire a wide range of people with diverse engineering, scientific, and operations expertise."}),e.jsx(M,{color:"black",href:"/careers/",text:"Careers"})]})})}const It="750px",Pt="751px",qt="900px",Dt="901px",Ft="1399px",Et="1400px",Ot="600px",Rt="_main_dhhug_15",At="_blogHeader_dhhug_22",Qt="_publishInfo_dhhug_32",zt="_category_dhhug_37",Wt="_circle_dhhug_43",Vt="_bottomDivider_dhhug_80",x={smallTabletMax:It,mobileMin:Pt,mobileMax:qt,tabletMin:Dt,tabletMax:Ft,desktopMin:Et,mobileMaxHeightLandscape:Ot,main:Rt,blogHeader:At,publishInfo:Qt,category:zt,circle:Wt,bottomDivider:Vt},Ut="750px",Gt="751px",Jt="900px",Yt="901px",Kt="1399px",Xt="1400px",Zt="600px",ea="_footerPrimeStudy_18hx4_11",ta="_callout_18hx4_11",aa="_link_18hx4_16",j={smallTabletMax:Ut,mobileMin:Gt,mobileMax:Jt,tabletMin:Yt,tabletMax:Kt,desktopMin:Xt,mobileMaxHeightLandscape:Zt,footerPrimeStudy:ea,callout:ta,link:aa};function oa(){return e.jsx("section",{className:l(t.blogComponent,t.padded,m.container,j.footerPrimeStudy),children:e.jsxs("div",{className:l(m.callout,j.callout),children:[e.jsx("h3",{className:t["text-lg"],children:"If you've been living with quadriplegia from a spinal cord injury (SCI) or with amyotrophic lateral sclerosis (ALS), you may qualify for the PRIME Study. Visit our Patient Registry page to learn more and to submit your application."}),e.jsx(M,{className:j.link,color:"black",href:"/patient-registry/",text:"Visit Our Patient Registry"})]})})}function sa({fields:a,isDraft:s}){return e.jsxs("article",{className:x.main,children:[e.jsxs("header",{className:x.blogHeader,children:[e.jsxs("div",{className:x.publishInfo,children:[s&&e.jsx("span",{className:x.category,children:"Draft"}),e.jsx("span",{className:x.category,children:H[a.category]}),e.jsx("span",{className:x.circle}),e.jsx("span",{children:B(a.release_date)})]}),e.jsx("h1",{children:a.title})]}),e.jsx("hr",{className:"hide-on-desktop"}),e.jsxs("main",{children:[a.components.map(n=>Ct(n)),a.footer!=="none"&&e.jsx("hr",{className:x.bottomDivider})]}),e.jsx("footer",{children:(()=>{switch(a.footer){case"careers":return e.jsx(St,{});case"animal_care_careers":return e.jsx(Bt,{});case"prime_study":return e.jsx(oa,{});default:return e.jsx(e.Fragment,{})}})()})]})}const ga={title:"Blog | Neuralink",name:"blog",description:"Get the latest on neurotech from the people who know it best. Check out the Neuralink blog for news, insights, and behind-the-scenes looks at our work."};function ua(a){const{title:s,summary:n,release_date:i,preview_image:o}=a.fields;return{title:`${s} | Blog | Neuralink`,name:s,description:n,blogPostMetadata:{headline:s,publishedOn:new Date(i),updatedOn:a.updatedOn},ogImage:o.image&&o.width&&o.height?{absoluteUrl:o.image,alt:o.image_alt||"",width:o.width,height:o.height}:void 0}}function Ma(){const a=C().pageProps;return e.jsx(sa,{fields:a.fields,isDraft:a.isDraft})}export{Ma as Page,ga as documentProps,ua as getDocumentProps};
