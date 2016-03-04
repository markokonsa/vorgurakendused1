window.onload = function() {

    var beads = document.getElementsByClassName('bead');

    for (var i=0; i < beads.length; i++) {
        var bead = beads[i];

        if (bead.classList.contains('right')) {
            bead.classList.remove('right');
            bead.classList.add('left');
        } else if (bead.classList.contains('left')) {
            bead.classList.remove('left');
            bead.classList.add('right');
        }else {
         bead.classList.add('right');
        }
    }
}