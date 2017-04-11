function themeSwitch(){

    if (document.getElementById('themeButton').value == "on") {

    //changing header background color
        document.getElementById('mainHeader').style.backgroundColor = '#232a32';

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

//turns the value of the button to off
    document.getElementById('themeButton').value = 'off'
    }

else{

    //changing header background color
        document.getElementById('mainHeader').style.backgroundColor = '#f2f2f2';

    //changing hr color
        document.getElementById('hrBreak').style.borderTopColor = '#d7d7d7';

    //changing the color of the links when pressed
        document.getElementById('homeLink').style.color = '#2a2b32';
        document.getElementById('webdevLink').style.color = '#2a2b32';
        document.getElementById('graphicdesignLink').style.color = '#2a2b32';
        document.getElementById('aboutLink').style.color = '#2a2b32';
        document.getElementById('contactLink').style.color = '#2a2b32';

    //changing logo opacity
        document.getElementById('headerLogoLight').style.opacity = '100';
        document.getElementById('headerLogoDark').style.opacity = '0';

    //add elements that need theme changing here

//turns the value of the button back to on
    document.getElementById('themeButton').value = 'on';
    }
}
