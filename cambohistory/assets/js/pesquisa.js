const search = () => {
  const searchbox = document.getElementById("pesquisa-box").value.toUpperCase();
  const storeitems = document.getElementById("items-empresas");
  const product = document.querySelectorAll(".empresa");
  const pname = storeitems.getElementsByTagName("a");

  for (var i = 0; i < pname.length; i++) {
    let match = product[i].getElementsByTagName("a")[0];

    if (match) {
      let textvalue = match.textContent || match.innerHTML;

      if (textvalue.toUpperCase().indexOf(searchbox) > -1) {
        product[i].style.display = "";
      } else {
        product[i].style.display = "none";
      }
    }
  }
};
