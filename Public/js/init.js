M.AutoInit();

document.addEventListener('DOMContentLoaded', function() {
    let elems = document.querySelectorAll('.dropdown-trigger');
    let options = {
        constrainWidth: false,
        coverTrigger: false
    };
    let instances = M.Dropdown.init(elems, options);
  });