var
    pagetop, logo, hrborder, headerLinks1;
function yScroll(){
    pagetop = document.getElementById('mainHeader');
    logo = document.getElementById('headerImage');

    //delaying the links rising gradually
    headerLinks1 = document.getElementById('homeLink');
    headerLinks2 = document.getElementById('webdevLink');
    headerLinks3 = document.getElementById('graphicdesignLink');
    headerLinks4 = document.getElementById('aboutLink');
    headerLinks5 = document.getElementById('contactLink');

    hrborder = document.getElementById('hrBreak');

    if (window.pageYOffset > 150) {
        pagetop.style.height = '70px';
        pagetop.style.transitionDelay = '.3s';

        logo.style.transitionDelay = '0s';
        logo.style.marginLeft = '10%';



        headerLinks1.style.top = '-60px';
        headerLinks1.style.transitionDelay = '.1s';
        headerLinks2.style.top = '-60px';
        headerLinks2.style.transitionDelay = '.1s';
        headerLinks3.style.top = '-60px';
        headerLinks3.style.transitionDelay = '.1s';
        headerLinks4.style.top = '-60px';
        headerLinks4.style.transitionDelay = '.1s';
        headerLinks5.style.top = '-60px';
        headerLinks5.style.transitionDelay = '.1s';



        hrborder.style.borderColor = 'rgba(215, 215, 215, 0.00)';
        hrborder.style.width = '15%';
        hrborder.style.transitionDelay = '0s';
    }
    else {
        pagetop.style.height = '125px';
        pagetop.style.transitionDelay = '0s';

        logo.style.transitionDelay = '.4s';
        logo.style.marginLeft = '46%';



        headerLinks1.style.top = '0px';
        headerLinks1.style.transitionDelay = '.1s';
        headerLinks2.style.top = '0px';
        headerLinks2.style.transitionDelay = '.1s';
        headerLinks3.style.top = '0px';
        headerLinks3.style.transitionDelay = '.1s';
        headerLinks4.style.top = '0px';
        headerLinks4.style.transitionDelay = '.1s';
        headerLinks5.style.top = '0px';
        headerLinks5.style.transitionDelay = '.1s';



        hrborder.style.borderColor = 'rgba(215, 215, 215, 1.00)';
        hrborder.style.width = '60%';
        hrborder.style.transitionDelay = '.3s';

    }
}

window.addEventListener("scroll", yScroll);
