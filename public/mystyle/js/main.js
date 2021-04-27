//start view sidbar menu
var show_menu=document.getElementsByClassName('spans_nav')[0];
show_menu.addEventListener('click',function(){
    var sidebar=document.getElementsByClassName('sidbar-containser')[0];
    sidebar.classList.toggle('show-sidebar-menu');
})
//end view sidbar menu

//start view internal menu
x='1';
var category_list=document.getElementById('category_list');
category_list.onclick=function(){

    console.log('working',x);
    if(x=='1'){
    var category=document.getElementById('category-sid-bar');
        category.style.display='inline-block';
        x='2';

    }//end if
    else{
        var category=document.getElementById('category-sid-bar');
        category.style.display='none';
        x='1';
    }
    }

//end view internal menu




