function themeSwitch(){



    if (document.getElementById('themeButton').value == "on") {

    //changing header background color and html background color
        document.getElementById('mainHeader').style.backgroundColor = '#232a32';
        document.getElementById('index1').style.backgroundColor = '#232a32';

    //changing hr color
        document.getElementById('hrBreak').style.borderTopColor = '#323232';
        document.getElementById('hrBreak').style.borderColor = '#919191';


    //changing the color of the links when pressed
        document.getElementById('homeLink').style.color = '#e0f2f2';
        document.getElementById('webdevLink').style.color = '#e0f2f2';
        document.getElementById('graphicdesignLink').style.color = '#e0f2f2';
        document.getElementById('aboutLink').style.color = '#e0f2f2';
        document.getElementById('contactLink').style.color = '#e0f2f2';

    //changing border color for button
        document.getElementById('themeButton').style.color = '#d7d7d7';

    //changing logo opacity
        document.getElementById('headerLogoLight').style.opacity = '0';
        document.getElementById('headerLogoDark').style.opacity = '100';
        document.getElementById('themeButtonIMG').style.opacity = '0';
        document.getElementById('themeButton2').style.opacity = '100';

    //add elements that need theme changing here

    //adding gradient section transitions
        document.getElementById('gradient1').style.opacity = '0';
        document.getElementById('gradient2').style.opacity = '100';

        document.getElementById('gradient3dark').style.opacity = '100';
        document.getElementById('gradient3light').style.opacity = '0';

    //changing color of welcomeMessage text
        document.getElementById('welcomeMessage').style.color = '#e0f2f2';
        document.getElementById('welcomeMessageh2').style.color = '#9babab';

    //changing color of whoWeAre elements
      //  document.getElementById('whoWeAre').style.color = '#e0f2f2';
      //  document.getElementById('bios').style.color = '#e0f2f2';

      document.getElementById('bios').style.color = '#e0f2f2';

      var x = document.getElementsByClassName('title');
      x[0].style.color = "#e0f2f2";
      x[1].style.color = '#e0f2f2';
      x[2].style.color = '#e0f2f2';




//turns the value of the button to off
    document.getElementById('themeButton').value = 'off'
    }

else{

    //changing header background color
        document.getElementById('mainHeader').style.backgroundColor = '#f2f2f2';
        document.getElementById('index1').style.backgroundColor = '#f2f2f2';


    //changing hr color
        document.getElementById('hrBreak').style.borderTopColor = '#d7d7d7';
        document.getElementById('hrBreak').style.borderColor = '#d7d7d7';


    //changing the color of the links when pressed
        document.getElementById('homeLink').style.color = '#2a2b32';
        document.getElementById('webdevLink').style.color = '#2a2b32';
        document.getElementById('graphicdesignLink').style.color = '#2a2b32';
        document.getElementById('aboutLink').style.color = '#2a2b32';
        document.getElementById('contactLink').style.color = '#2a2b32';

    //changing logo and night mode opacity
        document.getElementById('headerLogoLight').style.opacity = '100';
        document.getElementById('headerLogoDark').style.opacity = '0';
        document.getElementById('themeButton').style.opacity = '100';
        document.getElementById('themeButtonIMG').style.opacity = '100';
        document.getElementById('themeButton2').style.opacity = '0';


    //add elements that need theme changing here

    //adding gradient transitions
        document.getElementById('gradient1').style.opacity = '100';
        document.getElementById('gradient2').style.opacity = '0';

        document.getElementById('gradient3dark').style.opacity = '0';
        document.getElementById('gradient3light').style.opacity = '100';

        //changing color of welcomeMessage text
            document.getElementById('welcomeMessage').style.color = '#3e3e3e';
            document.getElementById('welcomeMessageh2').style.color = '#3e3e3e';

        //changing color of whoWeAre
        //        document.getElementById('whoWeAre').style.color = '#3e3e3e';
          //      document.getElementById('bios').style.color = '#3e3e3e'

        //changing color of bracket elements
      //      document.getElementById('bracket').style.opacity = '100';
      //      document.getElementById('bracketLight').style.opacity = '0';


        document.getElementById('bios').style.color = '#3e3e3e';

        var x = document.getElementsByClassName('title');
        x[0].style.color = '#3e3e3e';
        x[1].style.color = '#3e3e3e';
        x[2].style.color = '#3e3e3e';



//turns the value of the button back to on
    document.getElementById('themeButton').value = 'on';
    }




}
