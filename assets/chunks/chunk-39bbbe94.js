import{j as f}from"./chunk-d0300abc.js";import{r as e}from"./chunk-ef86a6e3.js";import{b as n}from"./chunk-e905571f.js";const s={isReady:!1,isMobile:!1,isTablet:!1,isDesktop:!1},o=e.createContext(s),m=({children:i})=>{const[a,r]=e.useState(s.isReady),[d,c]=e.useState(s.isMobile),[l,u]=e.useState(s.isTablet),[w,b]=e.useState(s.isDesktop);return e.useEffect(()=>{const t=()=>{r(!0),c(window.innerWidth<=n.mobileMax),u(window.innerWidth>=n.tabletMin&&window.innerWidth<=n.tabletMax),b(window.innerWidth>=n.desktopMin)};return t(),window.addEventListener("resize",t),window.addEventListener("DOMContentLoaded",t),()=>{window.removeEventListener("resize",t),window.removeEventListener("DOMContentLoaded",t)}},[]),f.jsx(o.Provider,{value:{isReady:a,isMobile:d,isTablet:l,isDesktop:w},children:i})};function v(){e.useEffect(()=>{window.dispatchEvent(new Event("resize"))},[])}function D(){const i=e.useContext(o);return v(),i}export{m as D,D as u};
