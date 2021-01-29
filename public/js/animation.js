class Bouton {

    constructor() {
     
      this.boutonClose = document.querySelector("#close");
      this.boutonOpen = document.querySelector("#boutonForm");
     
      this.boutonCloser();
      this.boutonOpenn();
      
      
      
    }
   
    // Bouton qui gère la fermetur du block Canvas
    boutonCloser(){
      this.boutonClose.addEventListener("click",()=>{
        document.querySelector("#closeimg").classList.remove( "invisible");
      document.querySelector("#formblock").style.display="none";
      document.querySelector("#closediv").style.display="block";
      
      
     });
    }

    boutonOpenn(){
        this.boutonOpen.addEventListener("click",()=>{

            document.querySelector("#closediv").style.display="none";
            document.querySelector("#closeimg").classList.add("invisible");
        document.querySelector("#formblock").style.display="block";
        
       });
      }


      
  };
  
 let bouton = new Bouton();