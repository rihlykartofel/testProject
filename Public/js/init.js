M.AutoInit();

document.addEventListener('DOMContentLoaded', function() {
    let elems = document.querySelectorAll('.dropdown-trigger');
    let options = {
        constrainWidth: false,
        coverTrigger: false
    };
    let instances = M.Dropdown.init(elems, options);
  });

  document.addEventListener('DOMContentLoaded', function() {
    let elems = document.querySelectorAll('.sidenav');
    let options = {};
    let instances = M.Sidenav.init(elems, options);
  });

  document.addEventListener('DOMContentLoaded', function() {
    document.body.classList.add('loaded_hiding');
    window.setTimeout(function () {
      document.body.classList.add('loaded');
      document.body.classList.remove('loaded_hiding');
    }, 500);
  });

  function load(target, url) {
    var elem = document.getElementById(target);
    var r = new XMLHttpRequest();
    r.open("GET", url, true);
    r.onreadystatechange = function () {
      if (r.readyState != 4 || r.status != 200) return;
      elem.innerHTML = r.responseText;
    };
    r.send();
  }