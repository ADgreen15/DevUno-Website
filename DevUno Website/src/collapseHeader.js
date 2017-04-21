var
    pagetop, logo, hrborder, headerLinks;
function yScroll(){
    pagetop = document.getElementById('mainHeader');
    logo = document.getElementById('headerImage');
    headerLinks = document.getElementById('headerTabs');
    hrborder = document.getElementById('hrBreak');

    if (window.pageYOffset > 50) {
        pagetop.style.height = '70px';
        pagetop.style.transitionDelay = '.3s';

        logo.style.transitionDelay = '0s';
        logo.style.marginLeft = '10%';

        headerLinks.style.top = '-100px';
        headerLinks.style.transitionDelay = '.3s';

        hrborder.style.borderColor = 'rgba(215, 215, 215, 0.00)';
        hrborder.style.width = '15%';
        hrborder.style.transitionDelay = '0s';
    }
    else {
        pagetop.style.height = '125px';
        pagetop.style.transitionDelay = '0s';

        logo.style.transitionDelay = '.4s';
        logo.style.marginLeft = '46%';

        headerLinks.style.top = '-40px';
        headerLinks.style.transitionDelay = '0s';

        hrborder.style.borderColor = 'rgba(215, 215, 215, 1.00)';
        hrborder.style.width = '60%';
        hrborder.style.transitionDelay = '.3s';

    }
}

window.addEventListener("scroll", yScroll);
