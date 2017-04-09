function themeSwitch(){

//changing header background color
    document.getElementById('mainHeader').style.backgroundColor = '#202429';

//changing hr color
    document.getElementById('hrBreak').style.borderTopColor = '#323232';

//changing the color of the links when pressed
    document.getElementById('homeLink').style.color = '#e0f2f2';
    document.getElementById('webdevLink').style.color = '#e0f2f2';
    document.getElementById('graphicdesignLink').style.color = '#e0f2f2';
    document.getElementById('aboutLink').style.color = '#e0f2f2';
    document.getElementById('contactLink').style.color = '#e0f2f2';

//changing logo opacity
    document.getElementById('headerLogoLight').style.opacity = '0';
    document.getElementById('headerLogoDark').style.opacity = '100';

//add elements that need theme changing here
}
