// Back Forward Cache
// Modern browsers implement something known as back-forward cache (BFCache). When you hit back/forward button the actual page is not reloaded (and the scripts are never re-run).
// window.addEventListener("pageshow", () => {
//     document.querySelector(".my-input").value = "";
// });