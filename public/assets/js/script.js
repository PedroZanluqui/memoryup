var loaderVar;

function startLoader() {
  hidePage;
}

function endLoader() {
  loaderVar = setTimeout(showPage, 1000);
}

function hidePage() {
  document.getElementById("loader").style.display = "block";
  document.getElementById("nav_content").style.display = "none";
  document.getElementById("main_content").style.display = "none";
  document.getElementById("nav_content").style.display = "none";
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("nav_content").style.display = "block";
  document.getElementById("main_content").style.display = "block";
  document.getElementById("nav_content").style.display = "block";
}