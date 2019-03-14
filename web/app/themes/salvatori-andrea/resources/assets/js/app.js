// Import IE polyfill for Vue
import "babel-polyfill";

// Require utils js
require('./utils');
// Require Vue
window.axios = require('axios');
window.Vue = require('vue');

require('./globals')

Vue.component('posts-loop', require('./components/posts-loop.vue'));
Vue.component('pages-loop', require('./components/pages-loop.vue'));


Barba.Dispatcher.on('transitionCompleted', function(currentStatus, oldStatus, container) {
        var app = new Vue({
            el: '#app'
        });
        wow.init();
        var sync = setInterval(() => {
            wow.sync();
        }, 2000);
        setTimeout(() => {
            clearInterval(sync);
        }, 15000);

        ///////////////////////////////////////////

        //// menu js
        window.addEventListener('resize', topH)
        function topH(){
            var menu_main = document.getElementById('menu-main_menu');
            var temp = document.querySelector('.menu-main_menu-container');
            temp.classList.remove('menu-is-cross');
            temp.classList.remove('menu-is-open');
            var childerns = document.getElementsByClassName('mi-burger-item');
            for(var childern of childerns) {
                childern.classList.remove('active')
            }
            fortoggle = 1;
            var herohome = document.getElementById('hero-home');
            if(herohome) {
                herohome.style.cssText = "padding-top: " + menu_main.offsetHeight + "px !important";
            }

            document.getElementById('menu-main').style.cssText = "height: " + menu_main.offsetHeight + "px !important";
        }
        topH()

        ////// burger menu

        var miBurger = document.getElementById('mi-burger'), fortoggle = 1;
        miBurger.addEventListener('click', () => {
            var childerns = document.getElementsByClassName('mi-burger-item');
            for(var childern of childerns) {
                childern.classList.toggle('active')
            }
            var temp = document.querySelector('.menu-main_menu-container');
            if(fortoggle == 1) {
                temp.classList.remove('menu-is-cross');
                temp.classList.toggle('menu-is-open');
                fortoggle = 2;
            }else {
                temp.classList.toggle('menu-is-cross');
                temp.classList.remove('menu-is-open');
                fortoggle = 1;
                setTimeout (()=> {
                    temp.classList.remove('menu-is-cross');
                }, 600)
            }
        })

        ////////////////////////////////////////////////////////

        /////// funciones comunes

        var cutText = document.getElementsByClassName('recortar-text');

        if(cutText.length > 0) {
            for(var cutTexts of cutText) {
                if(cutTexts.textContent.length > 50) {
                    var el = cutTexts.textContent;
                    var cut = el.slice(0, 50);
                    cutTexts.textContent = cut + "...";
                }
            }
        }

        ///////////////////////////////////////////////////////

        /////// sliders

        function activitis (){
            var conL = document.getElementById('slider-actividades-hijo');
            if (conL) {
                var conP = document.getElementById('slider-actividades');
                var conLchild = conL.children, lengthCont, lengthChild, moveIt = 0, childLen, finalRes = 0, sumaChil = 0;

                childLen = conLchild[0].offsetWidth;
                
                window.addEventListener('resize', () => { 
                    childLen = conLchild[0].offsetWidth;
                })
                function operation() {
                for(var child of conLchild) {
                    lengthCont = conP.offsetWidth / child.offsetWidth;
                    lengthChild = child.offsetWidth * Math.round(lengthCont);
                    finalRes = conL.offsetWidth - lengthChild - childLen;
                    moveIt = sumaChil;
                }
                var difineW = Math.round(lengthCont) * childLen;
                conP.style.width = difineW + "px";
                conL.style.cssText = "left: -" + moveIt + "px";
                }
                if(conL.offsetWidth > conP.offsetWidth){
                    document.getElementById('actividades-next').addEventListener('click', ()=> {
                        if(moveIt <= finalRes){
                            if(sumaChil == 0) {
                                sumaChil = childLen;
                                operation()
                            }else {
                                sumaChil = sumaChil + childLen;
                                operation()
                            }
                        }else {
                            sumaChil = 0;
                            operation()
                        }
                    })
                    setInterval(()=> {
                        document.getElementById('actividades-next').click()
                    }, 5000)
                    document.getElementById('actividades-prev').addEventListener('click', ()=> {
                        if(moveIt > 0){
                        sumaChil = sumaChil - childLen;
                        operation()
                        }else {
                            for(var i = 0; i < conL.children.length; i++) {
                                var vall = conL.children[0].offsetWidth;
                                var mult = vall * i;
                                if(mult > finalRes) {
                                    sumaChil = mult;
                                    operation()
                                    break;
                                }
                            } 
                        }
                    })
                }else {
                    conL.classList.add('centerflex-left')
                    conL.style.width = '100%';
                }
            }
        }
        window.addEventListener('resize', activitis)
        activitis()


        function equipo (){
            var conL = document.getElementById('slider-equipo-hijo');
            if (conL) {
                var conP = document.getElementById('slider-equipo');
                var conLchild = conL.children, lengthCont, lengthChild, moveIt = 0, childLen, finalRes = 0, sumaChil = 0;

                childLen = conLchild[0].offsetWidth;
                
                window.addEventListener('resize', () => { 
                    childLen = conLchild[0].offsetWidth;
                })
                function operation() {
                for(var child of conLchild) {
                    lengthCont = conP.offsetWidth / child.offsetWidth;
                    lengthChild = child.offsetWidth * Math.round(lengthCont);
                    finalRes = conL.offsetWidth - lengthChild - childLen;
                    moveIt = sumaChil;
                }
                var difineW = Math.round(lengthCont) * childLen;
                conP.style.width = difineW + "px";
                conL.style.cssText = "left: -" + moveIt + "px";
                }
                if(conL.offsetWidth > conP.offsetWidth){
                    document.getElementById('equipo-next').addEventListener('click', ()=> {
                        if(moveIt <= finalRes){
                            if(sumaChil == 0) {
                                sumaChil = childLen;
                                operation()
                            }else {
                                sumaChil = sumaChil + childLen;
                                operation()
                            }
                        }else {
                            sumaChil = 0;
                            operation()
                        }
                    })
                    setInterval(()=> {
                        document.getElementById('equipo-next').click()
                    }, 5000)
                    document.getElementById('equipo-prev').addEventListener('click', ()=> {
                        if(moveIt > 0){
                        sumaChil = sumaChil - childLen;
                        operation()
                        }else {
                            for(var i = 0; i < conL.children.length; i++) {
                                var vall = conL.children[0].offsetWidth;
                                var mult = vall * i;
                                if(mult > finalRes) {
                                    sumaChil = mult;
                                    operation()
                                    break;
                                }
                            } 
                        }
                    })
                }else {
                    conL.classList.add('centerflex-left')
                    conL.style.width = '100%';
                }
            }
        }
        window.addEventListener('resize', equipo)
        equipo()


        function blog (){
            var conL = document.getElementById('blog-slider-hijo');
            if (conL) {
                var conP = document.getElementById('blog-slider');
                var conLchild = conL.children, lengthCont, lengthChild, moveIt = 0, childLen, finalRes = 0, sumaChil = 0;

                childLen = conLchild[0].offsetWidth;
                
                window.addEventListener('resize', () => {
                    childLen = conLchild[0].offsetWidth;
                })

                function operation() {
                for(var child of conLchild) {
                    lengthCont = conP.offsetWidth / child.offsetWidth;
                    lengthChild = child.offsetWidth * lengthCont;
                    finalRes = conL.offsetWidth - lengthChild;
                    moveIt = sumaChil;
                }
                // var difineW = Math.round(lengthCont) * childLen;
                // conP.style.width = difineW + "px";
                conL.style.cssText = "left: -" + moveIt + "px";

                }
                if(conL.offsetWidth > conP.offsetWidth){
                    document.getElementById('blog-slider-next').addEventListener('click', ()=> {
                        if(moveIt <= finalRes){
                            if(sumaChil == 0) {
                                sumaChil = childLen;
                                operation()
                            }else {
                                sumaChil = sumaChil + childLen;
                                operation()
                            }
                        }else {
                            sumaChil = 0;
                            operation()
                        }
                    })
                    setInterval(()=> {
                        document.getElementById('blog-slider-next').click()
                    }, 5000)
                    document.getElementById('blog-slider-prev').addEventListener('click', ()=> {
                        if(moveIt > 0){
                        sumaChil = sumaChil - childLen;
                        operation()
                        }else {
                            for(var i = 0; i < conL.children.length; i++) {
                                var vall = conL.children[0].offsetWidth;
                                var mult = vall * i;
                                if(mult > finalRes) {
                                    sumaChil = mult;
                                    operation()
                                    break;
                                }
                            } 
                        }
                    })
                }else {
                    conL.classList.add('centerflex-left')
                    conL.style.width = '100%';
                }
            }
        }
        window.addEventListener('resize', blog)
        blog()

        function heroImg(){
            var item = document.getElementsByClassName('item-slider-hero'), itemText = document.getElementsByClassName('slider-hero-texto'), val = 0, valu = 0;

            if (item.length > 0) {
                function resizes() {
                    var num = itemText[0].offsetHeight;
                    for(var itemTexts of itemText) {
                        if(num <= itemTexts.offsetHeight) {
                            num = itemTexts.offsetHeight;
                        }
                        document.getElementById('slide-hero-cont').style.height = num + 50 + "px";
                    }
                }
                resizes()
                window.addEventListener('resize', resizes)
                function slideShow(){
                    for(var items of item) {
                        items.style.opacity = "0";
                        item[val].style.opacity = "1";
                        items.style.zIndex = "0";
                        item[val].style.zIndex = "1";
                    }

                    for(var itemTexts of itemText) {
                        itemTexts.style.opacity = "0";
                        itemText[valu].style.opacity = "1";
                        itemTexts.style.zIndex = "0";
                        itemText[valu].style.zIndex = "1";
                    }
                }
                slideShow()
                function intervalo() {
                    if(val == item.length - 1) {
                        val = 0;
                        valu = val;
                    }else {
                        val++
                        valu = val;
                    }
                    slideShow()
                }
                setInterval(intervalo, 3000)
                document.getElementById('hero-slide-next').addEventListener('click',intervalo)
                document.getElementById('hero-slide-prev').addEventListener('click', ()=>{
                    if(val > 0) {
                        val--
                        valu = val;
                    }else {
                        val = item.length - 1;
                        valu = val;
                    }
                    slideShow()
                })
            }
        }
        heroImg()


        function weareImg(){
            var item = document.getElementsByClassName('slider-img-nosotros'), itemText = document.getElementsByClassName('slider-text-nosotros'), val = 0, valu = 0;

            if (item.length > 0) {
                function resizes() {
                    var num = itemText[0].offsetHeight;
                    for(var itemTexts of itemText) {
                        if(num <= itemTexts.offsetHeight) {
                            num = itemTexts.offsetHeight;
                        }
                        document.getElementById('padre-slider-nosotros-text').style.height = num + 50 + "px";
                    }
                }
                resizes()
                window.addEventListener('resize', resizes)
                function slideShow(){
                    for(var items of item) {
                        items.style.opacity = "0";
                        item[val].style.opacity = "1";
                        items.style.zIndex = "0";
                        item[val].style.zIndex = "1";
                    }

                    for(var itemTexts of itemText) {
                        itemTexts.style.opacity = "0";
                        itemText[valu].style.opacity = "1";
                        itemTexts.style.zIndex = "0";
                        itemText[valu].style.zIndex = "1";
                    }
                }
                slideShow()
                function intervalo() {
                    if(val == item.length - 1) {
                        val = 0;
                        valu = val;
                    }else {
                        val++
                        valu = val;
                    }
                    slideShow()
                }
                setInterval(intervalo, 5000)
                document.getElementById('slider-nosotros-next').addEventListener('click',intervalo)
                document.getElementById('slider-nosotros-prev').addEventListener('click', ()=>{
                    if(val > 0) {
                        val--
                        valu = val;
                    }else {
                        val = item.length - 1;
                        valu = val;
                    }
                    slideShow()
                })
            }
        }
        weareImg()
        ///////////////////////////////////////////////////////

        var itemCat = document.getElementsByClassName('item-categoria');
        if(itemCat.length > 0) {
            var objetoCat = document.getElementsByClassName('objetoCat');
            for(var itemCats of itemCat) {
                itemCats.addEventListener('click', categoria);
                itemCat[0].click()
            }
            function categoria(){
                for(var itemCats of itemCat) {
                    itemCats.classList.add('back-white');
                    itemCats.classList.remove('back-blue');
                }
                this.classList.add('back-blue');
                this.classList.remove('back-white');

                var catName = this.textContent;

                for(var objetoCats of objetoCat) {
                    objetoCats.style.display = "none";
                    if(objetoCats.getAttribute('data-text') == catName) {
                        objetoCats.style.display = "inline-flex";
                    }
                }
            }
        }

        ///////////////////////////////////////////////////////////////
        var btn_buscar = document.getElementById('buscar-cat');
        if(btn_buscar){
            btn_buscar.addEventListener('click', ()=>{
                var valor = document.getElementById('select-search').value;
                btn_buscar.setAttribute('href', '/categorias/' + valor.split(" ").join("_"))
            })
        }

        var caracteristica = document.getElementById('caracteristica');
        if(caracteristica) {
            var incluye = document.getElementById('incluye');
            caracteristica.addEventListener('click', (e)=> {
                e.preventDefault()
                incluye.classList.remove('active-caract')
                caracteristica.classList.add('active-caract')
                document.getElementById('caracteristica-incluye').style.height = "0";
                document.getElementById('caracteristica-incluye').style.zIndex = '0';
                document.getElementById('tipo_duracion').style.height = "100%";
                document.getElementById('tipo_duracion').style.zIndex = '1';
            })
            caracteristica.click()

            incluye.addEventListener('click', (e)=> {
                e.preventDefault()
                caracteristica.classList.remove('active-caract')
                incluye.classList.add('active-caract')
                document.getElementById('tipo_duracion').style.height = "0";
                document.getElementById('tipo_duracion').style.zIndex = '0';
                document.getElementById('caracteristica-incluye').style.height = "100%";
                document.getElementById('caracteristica-incluye').style.zIndex = '1';
            })
        }
    });