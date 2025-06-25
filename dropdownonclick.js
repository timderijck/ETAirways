function myFunction() {
    document.getElementById("myDropdownOnClick").classList.toggle("show");
}

function setReisType(type) {
    document.getElementById("reisTypeText").textContent = type;
    document.getElementById("myDropdownOnClick").classList.remove("show");
}


window.onclick = function(event) {
  if (!event.target.matches('.dropbtnclick')) {
    var dropdowns = document.getElementsByClassName("dropdown-content-on-click");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}