class Boutons {

    constructor() {
     
      
     
      this.boutonOpenExpb = document.querySelector("#AddExp");
      this.boutonCloseExpb = document.querySelector("#CloseExp");
      this.boutonOpenSkill = document.querySelector("#AddSkills");
      this.boutonCloseSkill = document.querySelector("#xskills");
      this.boutonOpenS = document.querySelector("#AddSchool");
      this.boutonCloseS = document.querySelector("#CloseSchoolDiv");
      this.boutonCloserSkills();
      this.boutonOpennSkills();
      this.boutonCloserExp();
      this.boutonOpennExp();
      this.boutonCloserSchool();
      this.boutonOpennSchool();
     
    }
   
   

       // Bouton qui gère la fermetur du block Canvas
    boutonCloserSkills(){
        this.boutonCloseSkill.addEventListener("click",()=>{
          
        document.querySelector("#formSkills").style.display="none";
        document.querySelector("#closeSkills").style.display="block";
        
        
       });
      }
  
      boutonOpennSkills(){
          this.boutonOpenSkill.addEventListener("click",()=>{
  
              document.querySelector("#closeSkills").style.display="none";
              
          document.querySelector("#formSkills").style.display="block";
          
         });
        }
         // Bouton qui gère la fermetur du block Canvas
    boutonCloserExp(){
      this.boutonCloseExpb.addEventListener("click",()=>{
        
      document.querySelector("#formExp").style.display="none";
      document.querySelector("#closeExp").style.display="block";
      document.querySelector("#AddExp").classList.remove("invisible");
      
      
     });
    }

    boutonOpennExp(){
        this.boutonOpenExpb.addEventListener("click",()=>{

            document.querySelector("#closeExp").style.display="none";
            document.querySelector("#AddExp").classList.add("invisible");
        document.querySelector("#formExp").style.display="block";
        
       });
      }
      


      boutonCloserSchool(){
        this.boutonCloseS.addEventListener("click",()=>{
          
        document.querySelector("#formSchool").style.display="none";
        document.querySelector("#closeSchoolDiv").style.display="block";
        document.querySelector("#AddSchool").classList.remove("invisible");
        
        
       });
      }
  
      boutonOpennSchool(){
          this.boutonOpenS.addEventListener("click",()=>{
  
              document.querySelector("#closeSchoolDiv").style.display="none";
              document.querySelector("#AddSchool").classList.add("invisible");
          document.querySelector("#formSchool").style.display="block";
          
         });
        }

  };
  
 let boutons = new Boutons();


$(document).ready(function() {
    $('.dateinput').datepicker({ format: "yyyy/m/d" ,weekStart: 1});
}); 

    
function closeProfilUpdate(){
  let open = document.querySelector("#BlockUpdateProfil");
  document.querySelector("#BlockProfil").style.display="block";
  document.querySelector("#imageProfil").classList.remove("invisible");

open.style.display="none";

}

function OpenProfilUpdate(){
  let open = document.querySelector("#BlockUpdateProfil");
  document.querySelector("#BlockProfil").style.display="none ";
  document.querySelector("#imageProfil").classList.add("invisible");
  open.style.display="block";

  
}
function closeExpUpdate(dd){
  let open = document.querySelector("#BlockExpUpdate"+dd);
  document.querySelector("#BlockExp"+dd).style.display="block";
  

open.style.display="none";

}

function OpenExpUpdate(dd){
  let open = document.querySelector("#BlockExpUpdate"+dd);
  document.querySelector("#BlockExp"+dd).style.display="none ";
  
  open.style.display="block";

  
}


function closeSchoolUpdate(dd){
  let open = document.querySelector("#BlockSchoolUpdate"+dd);
  document.querySelector("#BlockSchool"+dd).style.display="block";
  

open.style.display="none";

}

function OpenSchoolUpdate(dd){
  let open = document.querySelector("#BlockSchoolUpdate"+dd);
  document.querySelector("#BlockSchool"+dd).style.display="none ";
  
  open.style.display="block";

  
}