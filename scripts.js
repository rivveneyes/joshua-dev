const lightingSwitch=document.getElementById('dark-mode')
let switchOn=lightingSwitch.checked
const colorlayout=document.getElementsByTagName("body")[0];
const infoContainer=document.getElementById('info-skills');
const skillsBubble=document.querySelectorAll('.skills-list li');
const imgBorder=document.querySelectorAll(".work-display-container img");
const contactHeader=document.querySelector('h3')
const formBin=document.querySelector(".form-bin");
    function styleToggle(target,classOne,classTwo){
        target.classList.toggle(classOne);
        target.classList.toggle(classTwo);
    }
    
    function stylsIteration(list,change){
        for(let i=0;i<list.length;i++){
            list[i].classList.toggle(change);
        }
    } 
     function nightMode(){
           styleToggle(colorlayout,"night-main")
           styleToggle(infoContainer,"night-second") 
        stylsIteration(skillsBubble,'night-main');
        stylsIteration(imgBorder,"night-main")
            styleToggle(formBin,'night-second','dark')
            styleToggle(contactHeader,"dark")
             }

if(switchOn===true){
    nightMode();    
}
lightingSwitch.addEventListener('click',()=>{
    nightMode();
})