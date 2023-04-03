let script = document.createElement("script");
document.body.appendChild(script);
function loadJS(url) {
  let script = document.createElement("script");
  script.src = url;
  script.async = true;
  document.body.appendChild(script);
}
loadJS("jonas.js");
